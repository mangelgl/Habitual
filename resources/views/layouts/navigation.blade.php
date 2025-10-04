<header class="bg-[#F6F7F8] md:flex md:items-center md:justify-between p-4 border-b border-gray-200">
    <div class="flex justify-center items-center gap-2 mb-4 md:mb-0">
        <x-application-logo />

        <h1 class="text-xl font-bold text-gray-900 cursor-default">Habitual</h1>
    </div>
    <nav class="flex flex-col md:flex-row items-center gap-4 text-gray-600 font-medium transition-colors">
        <x-nav-link :primary="false" :href="route('inicio')">Inicio</x-nav-link>
        <x-nav-link :primary="false" href="/">Funciones</x-nav-link>
        <x-nav-link :primary="false" href="/">Precios</x-nav-link>
        <x-nav-link :primary="false" href="/">Recursos</x-nav-link>
    </nav>
    <div class="flex flex-col md:flex-row md:items-center gap-4 mt-4 md:mt-0">
        <x-nav-link type='button' :href="route('register')" :primary="true">Registrarse</x-nav-link>
        <x-nav-link type='button' :href="route('login')" :primary="false">Iniciar sesión</x-nav-link>
    </div>
</header>
