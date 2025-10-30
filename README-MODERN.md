# 🚀 Ventas Smart - Sistema de Gestión de Ventas Moderno

Un sistema completo de gestión de ventas e inventarios desarrollado con Laravel, diseñado para ser profesional, eficiente y fácil de usar.

## ✨ Características Principales

### 🎨 **Interfaz de Usuario Moderna**
- **Diseño Responsivo** con Tailwind CSS
- **Interfaz Intuitiva** optimizada para productividad
- **Tema Personalizable** con esquema de colores profesional
- **Animaciones Suaves** y transiciones fluidas
- **Componentes Reutilizables** para consistencia

### 📊 **Gestión Completa**
- **Dashboard Interactivo** con métricas en tiempo real
- **Gestión de Productos** con categorías, marcas y presentaciones
- **Control de Inventario** con alertas de stock bajo
- **Gestión de Clientes y Proveedores**
- **Sistema de Ventas y Compras**
- **Reportes y Exportaciones**

### 🔐 **Seguridad y Permisos**
- **Autenticación Segura** con Laravel Auth
- **Sistema de Roles** basado en Spatie Permission
- **Permisos Granulares** para cada funcionalidad
- **Registro de Actividades** para auditoría

### 📱 **Características Técnicas**
- **Laravel 10.x** como framework principal
- **Alpine.js** para interactividad del frontend
- **Tailwind CSS** para estilos modernos
- **MySQL** como base de datos
- **Vite** para compilación de assets

## 🛠️ Instalación y Configuración

### Prerrequisitos
- PHP 8.1 o superior
- Composer
- Node.js y npm
- MySQL/MariaDB
- XAMPP (recomendado para desarrollo local)

### Pasos de Instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/EzerZuniga/ventas-smart.git
   cd ventas-smart
   ```

2. **Instalar dependencias PHP**
   ```bash
   composer install
   ```

3. **Instalar dependencias Node.js**
   ```bash
   npm install
   ```

4. **Configurar entorno**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configurar base de datos**
   - Crear una base de datos llamada `laravel` en MySQL
   - Actualizar las credenciales en `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Ejecutar migraciones y seeders**
   ```bash
   php artisan migrate --seed
   ```

7. **Compilar assets**
   ```bash
   npm run build
   ```

8. **Iniciar servidor de desarrollo**
   ```bash
   php artisan serve
   ```

## 🎯 Acceso al Sistema

### Credenciales de Administrador
- **Email:** `admin@gmail.com`
- **Contraseña:** `12345678`

### URLs de Acceso
- **Sistema Principal:** http://127.0.0.1:8000
- **Login Moderno:** http://127.0.0.1:8000/modern/login
- **Dashboard Moderno:** http://127.0.0.1:8000/modern/dashboard

## 🎨 Versiones de UI/UX

### Versión Clásica
- Layout tradicional con Bootstrap
- Sidebar clásico
- Disponible en las rutas principales

### Versión Moderna ⭐
- **Diseño Moderno** con Tailwind CSS
- **Interfaz Mejorada** con Alpine.js
- **Experiencia de Usuario Optimizada**
- **Responsive Design** para todos los dispositivos

## 📱 Características de la UI Moderna

### Dashboard
- **Métricas en Tiempo Real** con cards interactivas
- **Acciones Rápidas** para tareas comunes
- **Actividad Reciente** con historial de transacciones
- **Alertas de Stock** inteligentes

### Componentes
- **Sidebar Responsivo** con animaciones
- **Menú de Usuario** con dropdown
- **Notificaciones** en tiempo real
- **Formularios Modernos** con validación visual
- **Tablas Interactivas** con búsqueda y filtros

### Características Visuales
- **Gradientes Atractivos**
- **Iconografía Consistente** con FontAwesome
- **Tipografía Profesional** con Inter Font
- **Colores Armoniosos** con palette personalizada

## 🚀 Despliegue

### Opciones Recomendadas

#### 1. **Vercel** (Recomendado para Frontend)
```bash
# Instalar Vercel CLI
npm install -g vercel

# Configurar proyecto
vercel

# Deploy
vercel --prod
```

#### 2. **Railway** (Fullstack Laravel)
```bash
# Instalar Railway CLI
npm install -g @railway/cli

# Login y deploy
railway login
railway link
railway up
```

#### 3. **DigitalOcean App Platform**
- Conectar repositorio GitHub
- Configurar variables de entorno
- Deploy automático

#### 4. **Heroku**
```bash
# Configurar Heroku
heroku create ventas-smart
heroku addons:create cleardb:ignite
heroku config:set APP_KEY=$(php artisan --show key)

# Deploy
git push heroku main
heroku run php artisan migrate --seed
```

### Variables de Entorno para Producción
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://tu-dominio.com

DB_CONNECTION=mysql
DB_HOST=tu-host-bd
DB_PORT=3306
DB_DATABASE=tu-base-datos
DB_USERNAME=tu-usuario
DB_PASSWORD=tu-contraseña

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tu-email
MAIL_PASSWORD=tu-app-password
```

## 🔧 Comandos Útiles

### Desarrollo
```bash
# Modo desarrollo con watch
npm run dev

# Limpiar caché
php artisan cache:clear
php artisan config:clear
php artisan route:clear

# Generar nuevos assets
npm run build

# Ejecutar tests
php artisan test
```

### Mantenimiento
```bash
# Backup de base de datos
php artisan backup:run

# Optimizar para producción
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Crear usuario administrador
php artisan make:user:admin
```

## 📁 Estructura del Proyecto

```
ventas-smart/
├── app/
│   ├── Http/Controllers/     # Controladores
│   ├── Models/              # Modelos Eloquent
│   ├── Services/            # Servicios de negocio
│   └── Enums/              # Enumeraciones
├── database/
│   ├── migrations/          # Migraciones
│   └── seeders/            # Seeders
├── resources/
│   ├── views/
│   │   ├── layouts/        # Layouts (app.blade.php, modern.blade.php)
│   │   ├── auth/           # Autenticación
│   │   └── panel/          # Dashboard
│   ├── css/                # Estilos (Tailwind CSS)
│   └── js/                 # JavaScript (Alpine.js)
└── public/
    ├── assets/             # Assets estáticos
    └── build/              # Assets compilados
```

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Para contribuir:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/nueva-caracteristica`)
3. Commit tus cambios (`git commit -m 'Agregar nueva característica'`)
4. Push a la rama (`git push origin feature/nueva-caracteristica`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Ver `LICENSE` para más detalles.

## 👨‍💻 Desarrollador

**Ezer Zuniga**
- GitHub: [@EzerZuniga](https://github.com/EzerZuniga)
- Email: contacto@ezerzuniga.com

## 🙏 Agradecimientos

- Laravel Framework
- Tailwind CSS Team
- Alpine.js Community
- FontAwesome Icons
- Y todos los contribuyentes open source

---

⭐ **Si te gusta este proyecto, dale una estrella en GitHub!**

🚀 **¿Listo para modernizar tu sistema de ventas?**