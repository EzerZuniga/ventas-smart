# Ventas Smart

Sistema web de gestión comercial construido con Laravel para administrar ventas, compras, inventario, caja y usuarios con control de permisos.

## Tabla de contenido

1. [Resumen funcional](#resumen-funcional)
2. [Stack tecnológico](#stack-tecnologico)
3. [Requisitos](#requisitos)
4. [Instalación](#instalacion)
5. [Ejecución en desarrollo](#ejecucion-en-desarrollo)
6. [Credenciales iniciales](#credenciales-iniciales)
7. [Comandos útiles](#comandos-utiles)
8. [Arquitectura y comportamiento del dominio](#arquitectura-y-comportamiento-del-dominio)
9. [Despliegue](#despliegue)
10. [Testing](#testing)
11. [Licencia](#licencia)

## Resumen funcional

El sistema incluye:

- Gestión de catálogo: categorías, marcas, presentaciones y productos.
- Gestión de terceros: clientes, proveedores y empleados.
- Flujo de compras y ventas con detalle por producto.
- Control de inventario y kardex.
- Gestión de caja y movimientos (apertura, ventas, retiros y cierre).
- Exportación de comprobante de venta en PDF.
- Exportación de ventas a Excel (job asíncrono).
- Importación de empleados desde Excel.
- Notificaciones en base de datos.
- Registro de actividad (auditoría funcional).
- Páginas públicas: inicio, acerca de, política de privacidad, términos y condiciones.

## Stack tecnologico

- Backend: `PHP 8.2+`, `Laravel 12`, `Eloquent ORM`.
- Frontend: `Blade`, `Vite`, `Tailwind CSS`, `Alpine.js`.
- Base de datos: `MySQL` (recomendado en desarrollo y producción).
- Autorización: `spatie/laravel-permission` (roles y permisos).
- Reportes:
  - `barryvdh/laravel-dompdf` para PDF.
  - `maatwebsite/excel` para import/export Excel.
- Colas y tareas:
  - Jobs para exportación y envío de comprobante.
  - Scheduler con backup diario de base de datos.

## Requisitos

- `PHP >= 8.2`
- `Composer`
- `Node.js >= 20` y `npm`
- `MySQL` y cliente `mysqldump` disponible en PATH (para backup)

## Instalacion

1. Clonar el repositorio.

```bash
git clone <URL_DEL_REPOSITORIO>
cd ventas-smart
```

2. Instalar dependencias.

```bash
composer install
npm install
```

3. Configurar entorno.

```bash
cp .env.example .env
php artisan key:generate
```

4. Editar `.env` con tu configuración de base de datos y correo.

Variables mínimas recomendadas:

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
```

5. Ejecutar migraciones y seeders.

```bash
php artisan migrate --seed
```

6. Crear enlace simbólico para archivos públicos de storage.

```bash
php artisan storage:link
```

## Ejecucion en desarrollo

Levanta el proyecto con dos terminales:

Terminal 1 (backend):

```bash
php artisan serve
```

Terminal 2 (assets frontend):

```bash
npm run dev
```

Si usas `QUEUE_CONNECTION=database`, levanta también un worker:

```bash
php artisan queue:work
```

Para ejecutar tareas programadas en local (incluye backup diario):

```bash
php artisan schedule:work
```

## Credenciales iniciales

El seeder crea un usuario administrador:

- Email: `admin@gmail.com`
- Password: `12345678`
- Rol: `administrador`

Recomendación: cambiar credenciales al primer inicio.

## Comandos utiles

```bash
# Tests
php artisan test

# Limpiar caches de framework
php artisan optimize:clear

# Crear backup manual de BD
php artisan create-backup-database

# Crear ubicación por consola
php artisan create-ubicacione
```

## Arquitectura y comportamiento del dominio

El proyecto sigue un enfoque MVC con reglas de negocio distribuidas en:

- Controladores HTTP para casos de uso.
- Services para lógica reutilizable.
- Observers para automatizar estados y atributos al crear/actualizar modelos.
- Events + Listeners para desacoplar efectos de compras/ventas (kardex, inventario, caja, correo).
- Jobs en cola para tareas costosas (Excel y envío de comprobante).

Flujos relevantes:

- Al registrar una venta:
  - Se genera movimiento de caja.
  - Se actualiza inventario y kardex.
  - Se dispara envío de comprobante por email mediante job.
- Al registrar una compra:
  - Se actualiza inventario y kardex por evento.
- Al cerrar caja:
  - Se calcula saldo final automáticamente.

## Despliegue

Checklist mínimo para producción:

1. `APP_ENV=production` y `APP_DEBUG=false`.
2. Configurar `APP_URL` con dominio final.
3. Ejecutar:

```bash
composer install --no-dev --optimize-autoloader
npm run build
php artisan migrate --force
php artisan optimize
```

4. Configurar un worker de colas persistente (Supervisor/systemd) para `php artisan queue:work`.
5. Configurar cron para scheduler de Laravel:

```cron
* * * * * cd /ruta/al/proyecto && php artisan schedule:run >> /dev/null 2>&1
```

6. Verificar disponibilidad de `mysqldump` en el servidor si se usará el backup automático.

## Testing

Suite actual de pruebas feature:

- Páginas legales y página "Acerca de".
- Flujo principal del módulo de categorías.

Ejecución:

```bash
php artisan test
```

## Licencia

Este proyecto se distribuye bajo licencia [MIT](LICENSE).
