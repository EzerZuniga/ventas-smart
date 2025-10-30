<!-- Dashboard -->
<div class="px-3 py-2">
    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Panel Principal</p>
</div>

<a href="{{ route('panel') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('panel') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-tachometer-alt mr-3 text-lg {{ request()->routeIs('panel') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Panel de Control
</a>

<!-- Gestión de Productos -->
<div class="px-3 py-2 mt-6">
    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Gestión de Productos</p>
</div>

@can('ver-categoria')
<a href="{{ route('categorias.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('categorias.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-tag mr-3 text-lg {{ request()->routeIs('categorias.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Categorías
</a>
@endcan

@can('ver-presentacione')
<a href="{{ route('presentaciones.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('presentaciones.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-box-archive mr-3 text-lg {{ request()->routeIs('presentaciones.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Presentaciones
</a>
@endcan

@can('ver-marca')
<a href="{{ route('marcas.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('marcas.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-bullhorn mr-3 text-lg {{ request()->routeIs('marcas.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Marcas
</a>
@endcan

@can('ver-producto')
<a href="{{ route('productos.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('productos.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fab fa-shopify mr-3 text-lg {{ request()->routeIs('productos.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Productos
</a>
@endcan

<!-- Inventario -->
<div class="px-3 py-2 mt-6">
    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Inventario</p>
</div>

@can('ver-inventario')
<a href="{{ route('inventario.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('inventario.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-boxes mr-3 text-lg {{ request()->routeIs('inventario.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Inventario
</a>
@endcan

@can('ver-kardex')
<a href="{{ route('kardex.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('kardex.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-file-alt mr-3 text-lg {{ request()->routeIs('kardex.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Kardex
</a>
@endcan

<!-- Personas -->
<div class="px-3 py-2 mt-6">
    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Gestión de Personas</p>
</div>

@can('ver-cliente')
<a href="{{ route('clientes.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('clientes.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-users mr-3 text-lg {{ request()->routeIs('clientes.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Clientes
</a>
@endcan

@can('ver-proveedore')
<a href="{{ route('proveedores.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('proveedores.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-truck mr-3 text-lg {{ request()->routeIs('proveedores.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Proveedores
</a>
@endcan

@can('ver-caja')
<a href="{{ route('cajas.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('cajas.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-cash-register mr-3 text-lg {{ request()->routeIs('cajas.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Cajas
</a>
@endcan

<!-- Transacciones -->
<div class="px-3 py-2 mt-6">
    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Transacciones</p>
</div>

@can('ver-compra')
<div x-data="{ open: {{ request()->routeIs('compras.*') ? 'true' : 'false' }} }" class="space-y-1">
    <button @click="open = !open" 
            class="group w-full flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('compras.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
        <i class="fas fa-shopping-cart mr-3 text-lg {{ request()->routeIs('compras.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
        <span class="flex-1">Compras</span>
        <i class="fas fa-chevron-down ml-2 transform transition-transform duration-200" :class="{ 'rotate-180': open }"></i>
    </button>
    
    <div x-show="open" x-transition class="space-y-1 pl-6" style="display: none;">
        @can('ver-compra')
        <a href="{{ route('compras.index') }}" 
           class="group flex items-center px-3 py-1 text-sm font-medium rounded-md {{ request()->routeIs('compras.index') ? 'bg-primary-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
            <i class="fas fa-list mr-2 text-sm"></i>
            Ver Compras
        </a>
        @endcan
        
        @can('crear-compra')
        <a href="{{ route('compras.create') }}" 
           class="group flex items-center px-3 py-1 text-sm font-medium rounded-md {{ request()->routeIs('compras.create') ? 'bg-primary-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
            <i class="fas fa-plus mr-2 text-sm"></i>
            Nueva Compra
        </a>
        @endcan
    </div>
</div>
@endcan

@can('ver-venta')
<div x-data="{ open: {{ request()->routeIs('ventas.*') ? 'true' : 'false' }} }" class="space-y-1">
    <button @click="open = !open" 
            class="group w-full flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('ventas.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
        <i class="fas fa-cash-register mr-3 text-lg {{ request()->routeIs('ventas.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
        <span class="flex-1">Ventas</span>
        <i class="fas fa-chevron-down ml-2 transform transition-transform duration-200" :class="{ 'rotate-180': open }"></i>
    </button>
    
    <div x-show="open" x-transition class="space-y-1 pl-6" style="display: none;">
        @can('ver-venta')
        <a href="{{ route('ventas.index') }}" 
           class="group flex items-center px-3 py-1 text-sm font-medium rounded-md {{ request()->routeIs('ventas.index') ? 'bg-primary-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
            <i class="fas fa-list mr-2 text-sm"></i>
            Ver Ventas
        </a>
        @endcan
        
        @can('crear-venta')
        <a href="{{ route('ventas.create') }}" 
           class="group flex items-center px-3 py-1 text-sm font-medium rounded-md {{ request()->routeIs('ventas.create') ? 'bg-primary-500 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
            <i class="fas fa-plus mr-2 text-sm"></i>
            Nueva Venta
        </a>
        @endcan
    </div>
</div>
@endcan

<!-- Administración -->
@hasrole('administrador')
<div class="px-3 py-2 mt-6">
    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Administración</p>
</div>

@can('ver-empresa')
<a href="{{ route('empresa.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('empresa.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-building mr-3 text-lg {{ request()->routeIs('empresa.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Empresa
</a>
@endcan

@can('ver-empleado')
<a href="{{ route('empleados.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('empleados.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-id-badge mr-3 text-lg {{ request()->routeIs('empleados.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Empleados
</a>
@endcan

@can('ver-user')
<a href="{{ route('users.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('users.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-user mr-3 text-lg {{ request()->routeIs('users.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Usuarios
</a>
@endcan

@can('ver-role')
<a href="{{ route('roles.index') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('roles.*') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-shield-alt mr-3 text-lg {{ request()->routeIs('roles.*') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Roles y Permisos
</a>
@endcan

<!-- Activity Log -->
<a href="{{ route('admin.activityLog') }}" 
   class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->routeIs('admin.activityLog') ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-150">
    <i class="fas fa-history mr-3 text-lg {{ request()->routeIs('admin.activityLog') ? 'text-white' : 'text-gray-400 group-hover:text-white' }}"></i>
    Registro de Actividad
</a>
@endhasrole