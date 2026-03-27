<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-black leading-tight border-b-4 border-gray-800 pb-2">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Mensaje principal con borde -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg mb-6 border border-gray-800">
                <div class="p-6 text-black text-lg font-semibold">
                    {{ __("Has iniciado sesión correctamente.") }}
                </div>
            </div>

            <!-- Tarjetas accesibles con bordes diferenciados -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Tarjeta 1 -->
                <div class="card border-t-4 border-green-600 shadow-md">
                    <h2 class="text-xl font-bold mb-2">Tutorial Accesible</h2>
                    <p class="mb-4">Aprende a usar herramientas digitales paso a paso.</p>
                    <button class="btn bg-green-700 hover:bg-green-600 focus:ring-green-500">Ver más</button>
                </div>

                <!-- Tarjeta 2 -->
                <div class="card border-t-4 border-purple-600 shadow-md">
                    <h2 class="text-xl font-bold mb-2">Encuestas</h2>
                    <p class="mb-4">Responde preguntas para verificar tu aprendizaje.</p>
                    <button class="btn bg-purple-700 hover:bg-purple-600 focus:ring-purple-500">Ir a encuestas</button>
                </div>

                <!-- Tarjeta 3 -->
                <div class="card border-t-4 border-red-600 shadow-md">
                    <h2 class="text-xl font-bold mb-2">Progreso</h2>
                    <p class="mb-4">Mira tu avance y resultados en la plataforma.</p>
                    <button class="btn bg-red-700 hover:bg-red-600 focus:ring-red-500">Ver progreso</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>