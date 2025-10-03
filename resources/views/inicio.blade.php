<x-app-layout>
    <main class="flex flex-col justify-center items-center text-xl">
        {{-- Construye hábitos duraderos --}}
        <section class="bg-[#F6F7F8] gap-20">
            <div class="max-w-sm md:max-w-xl">
                <h1 class="font-extrabold text-3xl md:text-5xl">Construye hábitos duraderos, transforma tu vida</h2>
                <p class="mt-4 text-muted">Habitual te ayuda a crecer y mantener hábitos positivos con un enfoque personalizado y herramientas intuitivas.</p>
                <div class="mt-8 flex gap-4">
                    <x-nav-link type='button' :href="route('register')" :primary="true">Comenzar ahora</x-nav-link>
                    <x-nav-link type='button' :primary="false">Ver demostración</x-nav-link>
                </div>
            </div>
            <div class="hidden md:block">
                <img alt="Person tracking habits on a device" class="rounded-xl shadow-2xl max-w-full h-auto align-middle border-none" src="{{ asset('img/tracking-device.png') }}"/>
            </div>
        </section>

        {{-- Características clave --}}
        <section class="bg-white flex-col">
            <h2 class="font-extrabold text-4xl text-primary-text">Características clave</h2>
            <p class="mt-4 text-muted">Descubre cómo Habitual puede ayudarte a alcanzar tus metas:</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <article class="shadow-md hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                    <h3>Seguimiento personalizado</h3>
                    <p>Registra tus hábitos diarios y recibe retroalimentación personalizada para mantenerte motivado.</p>
                </article>
                <article class="shadow-md hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-bell-ringing"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /><path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" /><path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" /></svg>
                    <h3>Recordatorios inteligentes</h3>
                    <p>Recibe recordatorios adaptados a tu rutina para asegurar la consistencia.</p>
                </article>
                <article class="shadow-md hover:shadow-lg transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-line"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19l16 0" /><path d="M4 15l4 -6l4 2l4 -5l4 4" /></svg>
                    <h3>Análisis de progreso</h3>
                    <p>Visualiza tu progreso con gráficos detallados y obtén insights para optimizar tus hábitos.</p>
                </article>
            </div>
        </section>

        {{-- Llamada a la acción --}}
        <section class="bg-[#EAF0F7] flex flex-col items-center text-center gap-6 py-4">
            <h2 class="font-extrabold text-4xl">¿Listo para transformar tu vida?</h2>
            <p class="mt-2 text-muted">Regístrate hoy y comienza a construir los hábitos que siempre has deseado.</p>
            <x-nav-link type='button' :href="route('register')" :primary="true">Comenzar ahora</x-nav-link>
        </section>
    </main>
    
    @include('layouts.footer')
</x-app-layout>
