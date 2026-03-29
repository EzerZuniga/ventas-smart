# Ventas Smart

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-Frontend-646CFF?style=for-the-badge&logo=vite&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-2ea44f?style=for-the-badge)

Sistema web de gestion comercial construido con Laravel para administrar ventas, compras, inventario, caja y usuarios con control de permisos por rol.

---

## Tabla de contenidos

1. [Caracteristicas clave](#caracteristicas-clave)
2. [Arquitectura y stack](#arquitectura-y-stack)
3. [Comenzar](#comenzar)
4. [Configuracion de entorno](#configuracion-de-entorno)
5. [Ejecucion local](#ejecucion-local)
6. [Colas, scheduler y backup](#colas-scheduler-y-backup)
7. [Credenciales iniciales](#credenciales-iniciales)
8. [Scripts y comandos utiles](#scripts-y-comandos-utiles)
9. [Estructura del proyecto](#estructura-del-proyecto)
10. [Flujos de negocio](#flujos-de-negocio)
11. [Despliegue](#despliegue)
12. [Testing](#testing)
13. [Contribucion](#contribucion)
14. [Licencia](#licencia)

---

## Caracteristicas clave

- Gestion de catalogo: categorias, marcas, presentaciones y productos.
- Gestion de terceros: clientes, proveedores y empleados.
- Flujo de compras y ventas con detalle por producto y movimientos asociados.
- Control de inventario y kardex por eventos de dominio.
- Gestion de caja y movimientos (apertura, ventas, retiros y cierre).
- Exportacion de comprobante de venta en PDF.
- Exportacion de ventas a Excel mediante job asincrono.
- Importacion de empleados desde Excel.
- Notificaciones en base de datos para procesos asincronos.
- Registro de actividad funcional (auditoria) en modulo dedicado.
- Paginas publicas: inicio, acerca de, politica de privacidad, terminos y condiciones.

## Arquitectura y stack

| Capa | Tecnologias | Descripcion |
| --- | --- | --- |
| Backend | PHP 8.2+, Laravel 12, Eloquent ORM | MVC, validaciones con Form Requests, servicios y reglas de negocio por dominio. |
| Frontend | Blade, Vite, Tailwind CSS, Alpine.js | Vistas server-side con componentes reutilizables y assets modernos. |
| Seguridad | spatie/laravel-permission | Control de acceso por roles y permisos granulares. |
| Reportes | barryvdh/laravel-dompdf, maatwebsite/excel | Generacion de PDF e import/export Excel. |
| Integraciones internas | Events, Listeners, Observers, Jobs, Notifications | Desacopla procesos como kardex, inventario, caja y envio de comprobantes. |
| Persistencia | MySQL | Base recomendada para desarrollo y produccion. |

## Comenzar

### Requisitos previos

- PHP `>= 8.2`
- Composer
- Node.js `>= 20` y npm
- MySQL
- `mysqldump` disponible en `PATH` (requerido para backups)

### Instalacion

```bash
# 1. Clonar repositorio
git clone <URL_DEL_REPOSITORIO>
cd ventas-smart

# 2. Instalar dependencias
composer install
npm install

# 3. Preparar entorno
cp .env.example .env
php artisan key:generate

# 4. Migrar y sembrar datos iniciales
php artisan migrate --seed

# 5. Publicar storage para archivos publicos
php artisan storage:link
```

## Configuracion de entorno

Configura `.env` con tus valores de base de datos y correo. Base recomendada:

```env
APP_NAME="Ventas Smart"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ventas_smart
DB_USERNAME=root
DB_PASSWORD=

QUEUE_CONNECTION=database

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

## Ejecucion local

Levanta el proyecto en terminales separadas:

```bash
# Terminal 1: backend Laravel
php artisan serve

# Terminal 2: assets frontend
npm run dev
```

Si usas `QUEUE_CONNECTION=database`, inicia tambien un worker:

```bash
php artisan queue:work
```

## Colas, scheduler y backup

El sistema programa un backup diario de base de datos mediante:

```php
Schedule::command('create-backup-database')->daily();
```

Para desarrollo local:

```bash
# Ejecuta scheduler en modo worker local
php artisan schedule:work

# Backup manual
php artisan create-backup-database
```

Notas operativas:

- El backup usa `mysqldump` y se guarda en `storage/backups`.
- En Linux puedes usar `run-worker.sh` como base para un proceso persistente de colas.

## Credenciales iniciales

El seeder crea un usuario administrador:

- Email: `admin@gmail.com`
- Password: `12345678`
- Rol: `administrador`

Recomendacion: cambia las credenciales en el primer inicio.

## Scripts y comandos utiles

| Comando | Descripcion |
| --- | --- |
| `npm run dev` | Inicia Vite en modo desarrollo. |
| `npm run build` | Genera assets optimizados para produccion. |
| `php artisan test` | Ejecuta pruebas automatizadas. |
| `php artisan optimize:clear` | Limpia caches de framework. |
| `php artisan queue:work` | Procesa jobs en cola. |
| `php artisan schedule:work` | Ejecuta tareas programadas en local. |
| `php artisan create-backup-database` | Genera backup SQL manual. |
| `php artisan create-ubicacione` | Crea ubicacion por consola. |

## Estructura del proyecto

```text
ventas-smart/
├── app/
│   ├── Console/Commands/      # Comandos personalizados (backup, ubicaciones)
│   ├── Events/                # Eventos de dominio (compra/venta)
│   ├── Listeners/             # Efectos desacoplados (kardex, inventario, caja, correo)
│   ├── Jobs/                  # Tareas asincronas (excel, email)
│   ├── Services/              # Logica reutilizable
│   ├── Observers/             # Reglas automaticas en ciclo de vida de modelos
│   └── Http/Controllers/      # Casos de uso HTTP por modulo
├── database/
│   ├── migrations/            # Esquema de datos
│   └── seeders/               # Datos iniciales (roles, admin, catalogos base)
├── resources/
│   ├── views/                 # Blade views por modulo funcional
│   ├── css/
│   └── js/
├── routes/
│   ├── web.php                # Rutas web y modulos de administracion
│   └── console.php            # Programacion de tareas (scheduler)
├── tests/Feature/             # Pruebas funcionales actuales
└── README.md
```

## Flujos de negocio

1. Al registrar una venta:
   - Se crea movimiento de caja.
   - Se actualizan inventario y kardex por detalle.
   - Se encola el envio del comprobante por email.
2. Al registrar una compra:
   - Se actualizan inventario y kardex mediante eventos/listeners.
3. Al operar caja:
   - Apertura, movimientos y cierre controlados desde modulo dedicado.
   - El saldo de cierre se calcula segun movimientos registrados.

## Despliegue

Checklist minimo para produccion:

1. Configura `APP_ENV=production` y `APP_DEBUG=false`.
2. Define `APP_URL` con el dominio final.
3. Ejecuta build y optimizacion:

```bash
composer install --no-dev --optimize-autoloader
npm run build
php artisan migrate --force
php artisan optimize
```

4. Configura un worker persistente para `php artisan queue:work` (Supervisor o systemd).
5. Configura cron para scheduler:

```cron
* * * * * cd /ruta/al/proyecto && php artisan schedule:run >> /dev/null 2>&1
```

6. Verifica que `mysqldump` este disponible en el servidor si usas backup automatico.

## Testing

La suite actual cubre pruebas feature de:

- Paginas legales (privacidad y terminos).
- Pagina "Acerca de" y metadatos SEO basicos.
- Flujo principal del modulo de categorias.

Ejecucion:

```bash
php artisan test
```

## Contribucion

1. Crea una rama desde `main`.
2. Implementa cambios siguiendo el estilo del proyecto.
3. Ejecuta `php artisan test` antes de abrir el PR.
4. Describe alcance funcional, riesgos y pasos de validacion en tu Pull Request.

## Licencia

Distribuido bajo licencia [MIT](LICENSE).
