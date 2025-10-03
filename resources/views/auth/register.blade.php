<x-app-layout>
    <div class="max-w-sm md:max-w-2xl mx-auto p-8 bg-white rounded-xl shadow-lg">
        <h1 class="font-extrabold text-3xl text-center">Empieza el seguimiento de tus hábitos</h1>
        <div class="flex flex-col justify-center items-center gap-4 mt-8 px-10">
            <form id="registerForm" action="" novalidate>
                @csrf
                <div id="inputs">
                    <input type="text" name="name" placeholder="Nombre" />
                    <input type="text" name="surname" placeholder="Apellidos" />
                    <input type="email" name="email" placeholder="Dirección de correo electrónico" />
                    <input type="password" name="password" placeholder="Contraseña" />
                    {{-- <div class="relative w-full">
                        <input type="password" name="password" placeholder="Contraseña" />
                        <div class="flex items-center absolute top-1/2 right-2 -translate-y-1/2 w-8 h-8 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                        </div>
                    </div> --}}
                    <input type="password_confirmation" name="password_confirmation" placeholder="Confirma tu contraseña" />
                </div>
                
                <input type="submit" value="Crear cuenta">
            </form>

            <p class="w-full text-muted text-center text-sm">
                Registrándote, aceptas nuestros
                <x-nav-link class="text-primary cursor-pointer hover:font-extrabold hover:text-primary">
                    Términos de servicio
                </x-nav-link> y
                <x-nav-link class="text-primary cursor-pointer hover:font-extrabold hover:text-primary">
                    Política de privacidad
                </x-nav-link>
            </p>
        </div>
    </div>
</x-app-layout>
