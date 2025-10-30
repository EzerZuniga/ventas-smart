@extends('layouts.modern')

@section('title', 'Panel de Control')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('content')
<div class="space-y-6">
    <!-- Welcome Header -->
    <div class="bg-gradient-to-r from-primary-600 to-primary-700 rounded-lg shadow-lg">
        <div class="px-6 py-8 text-white">
            <h1 class="text-3xl font-bold">¡Bienvenido, {{ auth()->user()->name }}!</h1>
            <p class="mt-2 text-primary-100">Aquí tienes un resumen de tu negocio al día de hoy</p>
            <p class="text-sm text-primary-200 mt-1">{{ \Carbon\Carbon::now()->isoFormat('dddd, D [de] MMMM [de] YYYY') }}</p>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php
        use App\Models\Cliente;
        use App\Models\Producto;
        use App\Models\Venta;
        use App\Models\Compra;

        $clientes = Cliente::count();
        $productos = Producto::count();
        $ventas_hoy = Venta::whereDate('created_at', today())->count();
        $ingresos_hoy = Venta::whereDate('created_at', today())->sum('total');
        ?>

        <!-- Clientes -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="text-sm font-medium text-gray-500">Total Clientes</div>
                        <div class="text-2xl font-bold text-gray-900">{{ number_format($clientes) }}</div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-3">
                <a href="{{ route('clientes.index') }}" class="text-sm font-medium text-blue-600 hover:text-blue-700">
                    Ver todos <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Productos -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-box text-green-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="text-sm font-medium text-gray-500">Total Productos</div>
                        <div class="text-2xl font-bold text-gray-900">{{ number_format($productos) }}</div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-3">
                <a href="{{ route('productos.index') }}" class="text-sm font-medium text-green-600 hover:text-green-700">
                    Ver todos <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Ventas Hoy -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-shopping-cart text-purple-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="text-sm font-medium text-gray-500">Ventas Hoy</div>
                        <div class="text-2xl font-bold text-gray-900">{{ number_format($ventas_hoy) }}</div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-3">
                <a href="{{ route('ventas.index') }}" class="text-sm font-medium text-purple-600 hover:text-purple-700">
                    Ver todas <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Ingresos Hoy -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-dollar-sign text-yellow-600 text-xl"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="text-sm font-medium text-gray-500">Ingresos Hoy</div>
                        <div class="text-2xl font-bold text-gray-900">${{ number_format($ingresos_hoy, 2) }}</div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-3">
                <a href="{{ route('ventas.create') }}" class="text-sm font-medium text-yellow-600 hover:text-yellow-700">
                    Nueva venta <i class="fas fa-plus ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Acciones Rápidas</h2>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @can('crear-venta')
                <a href="{{ route('ventas.create') }}" 
                   class="flex flex-col items-center p-4 bg-primary-50 hover:bg-primary-100 rounded-lg transition-colors duration-150 group">
                    <div class="w-12 h-12 bg-primary-600 rounded-lg flex items-center justify-center mb-3 group-hover:bg-primary-700 transition-colors duration-150">
                        <i class="fas fa-plus text-white text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-900">Nueva Venta</span>
                </a>
                @endcan

                @can('crear-compra')
                <a href="{{ route('compras.create') }}" 
                   class="flex flex-col items-center p-4 bg-green-50 hover:bg-green-100 rounded-lg transition-colors duration-150 group">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-3 group-hover:bg-green-700 transition-colors duration-150">
                        <i class="fas fa-shopping-cart text-white text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-900">Nueva Compra</span>
                </a>
                @endcan

                @can('crear-producto')
                <a href="{{ route('productos.create') }}" 
                   class="flex flex-col items-center p-4 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-150 group">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-3 group-hover:bg-blue-700 transition-colors duration-150">
                        <i class="fas fa-box text-white text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-900">Nuevo Producto</span>
                </a>
                @endcan

                @can('ver-inventario')
                <a href="{{ route('inventario.index') }}" 
                   class="flex flex-col items-center p-4 bg-purple-50 hover:bg-purple-100 rounded-lg transition-colors duration-150 group">
                    <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mb-3 group-hover:bg-purple-700 transition-colors duration-150">
                        <i class="fas fa-boxes text-white text-xl"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-900">Ver Inventario</span>
                </a>
                @endcan
            </div>
        </div>
    </div>

    <!-- Recent Activity Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Sales -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">Ventas Recientes</h3>
                    <a href="{{ route('ventas.index') }}" class="text-sm text-primary-600 hover:text-primary-700">Ver todas</a>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    @foreach(\App\Models\Venta::latest()->take(5)->get() as $venta)
                    <div class="flex items-center justify-between py-3 border-b border-gray-100 last:border-b-0">
                        <div>
                            <p class="text-sm font-medium text-gray-900">
                                Venta #{{ $venta->id }}
                            </p>
                            <p class="text-xs text-gray-500">
                                {{ $venta->created_at->diffForHumans() }}
                            </p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">
                                ${{ number_format($venta->total, 2) }}
                            </p>
                            <p class="text-xs text-green-600">
                                <i class="fas fa-check-circle mr-1"></i>Completada
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Low Stock Products -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">Stock Bajo</h3>
                    <a href="{{ route('inventario.index') }}" class="text-sm text-primary-600 hover:text-primary-700">Ver inventario</a>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    @foreach(\App\Models\Producto::whereHas('inventarios', function($query) {
                        $query->where('stock', '<=', 10);
                    })->take(5)->get() as $producto)
                    <div class="flex items-center justify-between py-3 border-b border-gray-100 last:border-b-0">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-box text-gray-600"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-900">{{ $producto->nombre }}</p>
                                <p class="text-xs text-gray-500">{{ $producto->codigo }}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-red-600">
                                {{ $producto->inventarios->sum('stock') ?? 0 }} unidades
                            </p>
                            <p class="text-xs text-red-500">
                                <i class="fas fa-exclamation-triangle mr-1"></i>Stock bajo
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/umd/simple-datatables.js"></script>
<script>
    // Inicializar funcionalidades del dashboard
    document.addEventListener('DOMContentLoaded', function() {
        // Aquí puedes agregar JavaScript adicional para el dashboard
        console.log('Dashboard moderno cargado exitosamente');
    });
</script>
@endpush