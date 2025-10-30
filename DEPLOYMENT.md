# Ventas Smart - Configuración de Despliegue

## 🚀 Guía de Despliegue para Producción

### 1. Railway (Recomendado para Laravel)

#### Ventajas:
- ✅ Soporte nativo para Laravel
- ✅ Base de datos MySQL incluida
- ✅ Variables de entorno fáciles
- ✅ Deploy automático desde GitHub
- ✅ Dominio personalizado gratis

#### Pasos para Railway:

1. **Conectar GitHub**
   - Ve a [railway.app](https://railway.app)
   - Conecta tu repositorio de GitHub

2. **Configurar Variables de Entorno**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_KEY=base64:TU_CLAVE_AQUI
   APP_URL=https://tu-proyecto.railway.app
   
   DB_CONNECTION=mysql
   DB_HOST=${{Postgres.PGHOST}}
   DB_PORT=${{Postgres.PGPORT}}
   DB_DATABASE=${{Postgres.PGDATABASE}}
   DB_USERNAME=${{Postgres.PGUSER}}
   DB_PASSWORD=${{Postgres.PGPASSWORD}}
   ```

3. **Configurar Build Command**
   ```bash
   npm install && npm run build && composer install --optimize-autoloader
   ```

4. **Configurar Start Command**
   ```bash
   php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=$PORT
   ```

### 2. Vercel (Para Frontend + API Routes)

#### Configuración vercel.json:
```json
{
  "version": 2,
  "builds": [
    {
      "src": "public/index.php",
      "use": "@vercel/php@0.6.0"
    },
    {
      "src": "package.json",
      "use": "@vercel/node@18.x"
    }
  ],
  "routes": [
    {
      "src": "/(.*)",
      "dest": "public/index.php"
    }
  ],
  "env": {
    "APP_ENV": "production",
    "APP_DEBUG": "false",
    "APP_URL": "https://tu-proyecto.vercel.app"
  },
  "buildCommand": "npm run build && composer install --optimize-autoloader"
}
```

### 3. DigitalOcean App Platform

#### Configuración .do/app.yaml:
```yaml
name: ventas-smart
services:
- name: web
  source_dir: /
  github:
    repo: EzerZuniga/ventas-smart
    branch: main
  run_command: php artisan serve --host=0.0.0.0 --port=$PORT
  environment_slug: php
  instance_count: 1
  instance_size_slug: basic-xxs
  envs:
  - key: APP_ENV
    value: production
  - key: APP_DEBUG
    value: false
  - key: APP_KEY
    value: YOUR_APP_KEY
databases:
- name: mysql-db
  engine: MYSQL
  version: "8"
```

### 4. Heroku

#### Procfile:
```
web: vendor/bin/heroku-php-apache2 public/
```

#### Configuración:
```bash
# Configurar Heroku
heroku create ventas-smart-app
heroku addons:create cleardb:ignite

# Variables de entorno
heroku config:set APP_KEY=$(php artisan --show key)
heroku config:set APP_ENV=production
heroku config:set APP_DEBUG=false

# Deploy
git push heroku main
heroku run php artisan migrate --seed
```

## 📱 Configuración de Base de Datos en Producción

### Railway MySQL
```env
DB_CONNECTION=mysql
DB_HOST=${{Railway.MYSQLHOST}}
DB_PORT=${{Railway.MYSQLPORT}}
DB_DATABASE=${{Railway.MYSQLDATABASE}}
DB_USERNAME=${{Railway.MYSQLUSER}}
DB_PASSWORD=${{Railway.MYSQLPASSWORD}}
```

### PlanetScale (MySQL Serverless)
```env
DB_CONNECTION=mysql
DB_HOST=gateway01.us-east-4.prod.aws.planetscale.cloud
DB_PORT=3306
DB_DATABASE=tu-database
DB_USERNAME=tu-username
DB_PASSWORD=tu-password
DB_SSLMODE=require
```

### ClearDB (Heroku)
```env
# Heroku configura automáticamente CLEARDB_DATABASE_URL
# Usar el helper de Laravel para parsear la URL
```

## 🔧 Optimizaciones para Producción

### Composer.json - Scripts de Deploy
```json
{
  "scripts": {
    "post-install-cmd": [
      "@php artisan package:discover --ansi",
      "@php artisan config:cache",
      "@php artisan route:cache",
      "@php artisan view:cache"
    ],
    "post-update-cmd": [
      "@php artisan package:discover --ansi"
    ],
    "deploy": [
      "composer install --optimize-autoloader --no-dev",
      "npm install",
      "npm run build",
      "php artisan migrate --force",
      "php artisan config:cache",
      "php artisan route:cache",
      "php artisan view:cache"
    ]
  }
}
```

### Build Scripts
```bash
#!/bin/bash
# build.sh
echo "🚀 Iniciando build para producción..."

# Instalar dependencias
composer install --optimize-autoloader --no-dev
npm install

# Compilar assets
npm run build

# Optimizar Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Build completado!"
```

## 🌍 Variables de Entorno Esenciales

### Producción Mínima
```env
APP_NAME="Ventas Smart"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://tu-dominio.com
APP_KEY=base64:TU_CLAVE_AQUI

DB_CONNECTION=mysql
DB_HOST=tu-host
DB_PORT=3306
DB_DATABASE=tu-database
DB_USERNAME=tu-usuario
DB_PASSWORD=tu-password

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tu-email@gmail.com
MAIL_PASSWORD=tu-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="no-reply@tu-dominio.com"
MAIL_FROM_NAME="Ventas Smart"

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error
```

### Configuración Avanzada
```env
# Caché (Redis recomendado para producción)
CACHE_DRIVER=redis
REDIS_HOST=tu-redis-host
REDIS_PORT=6379
REDIS_PASSWORD=tu-redis-password

# Sesiones
SESSION_DRIVER=redis
SESSION_LIFETIME=120

# Queue (para procesamiento en background)
QUEUE_CONNECTION=redis

# Storage (S3 para archivos)
FILESYSTEM_DISK=s3
AWS_ACCESS_KEY_ID=tu-access-key
AWS_SECRET_ACCESS_KEY=tu-secret-key
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=tu-bucket
```

## 🔒 Seguridad en Producción

### Checklist de Seguridad
- [ ] APP_DEBUG=false
- [ ] APP_ENV=production
- [ ] HTTPS configurado
- [ ] APP_KEY único y seguro
- [ ] Passwords de BD seguras
- [ ] Variables sensibles en .env
- [ ] CORS configurado correctamente
- [ ] Rate limiting activado

### Headers de Seguridad
```apache
# .htaccess (si usas Apache)
<IfModule mod_headers.c>
    Header always set X-Frame-Options "SAMEORIGIN"
    Header always set X-Content-Type-Options "nosniff"
    Header always set X-XSS-Protection "1; mode=block"
    Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"
</IfModule>
```

## 📊 Monitoreo y Logs

### Configuración de Logs
```env
# Para producción
LOG_CHANNEL=stack
LOG_LEVEL=error

# Para depuración temporal
LOG_LEVEL=debug
```

### Herramientas de Monitoreo
- **Railway**: Logs integrados
- **Vercel**: Analytics y logs
- **Sentry**: Error tracking
- **New Relic**: Performance monitoring

## 🚀 Comandos de Deploy

### Deploy Rápido
```bash
# Script de deploy automático
#!/bin/bash
git pull origin main
composer install --optimize-autoloader --no-dev
npm install && npm run build
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan queue:restart
```

### Rollback
```bash
# En caso de problemas
php artisan down
git checkout HEAD~1
composer install
php artisan migrate:rollback
php artisan up
```

---

🎯 **Recomendación:** Para este proyecto, **Railway** es la opción más sencilla y efectiva para deployment completo de Laravel con MySQL.