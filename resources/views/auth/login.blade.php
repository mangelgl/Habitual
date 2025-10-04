<x-app-layout>
    <div class="max-w-sm md:max-w-2xl md:w-full mx-auto p-8">
        <h1 class="font-extrabold text-3xl text-center">Inicia sesión en tu cuenta</h1>
        <div class="flex flex-col justify-center items-center mt-8 px-10 bg-white rounded-xl shadow-lg">
            <form id="loginForm" action="" novalidate class="w-full p-4 mt-4">
                @csrf
                <div id="inputs" class="text-muted flex flex-col gap-8">
                    <div>
                        <label for="email" class="">Email</label>
                        <input type="email" name="email" placeholder="Dirección de correo electrónico" class="rounded-lg mt-2 focus:rounded-lg" />
                    </div>

                    <div>
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" placeholder="Contraseña" class="rounded-lg mt-2 focus:rounded-lg" />
                    </div>
                    {{-- <div class="relative w-full">
                        <input type="password" name="password" placeholder="Contraseña" />
                        <div class="flex items-center absolute top-1/2 right-2 -translate-y-1/2 w-8 h-8 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                        </div>
                    </div> --}}
                </div>
                <div class="md:flex md:justify-between md:items-center w-full mt-6">
                    <div class="flex items-center gap-2 justify-center">
                        <input type="checkbox" name="remember" id="remember" />
                        <span class="text-primary-text">Recuérdame</span>
                    </div>

                    <x-nav-link :href="route('inicio')" class="text-primary cursor-pointer hover:font-bold hover:text-primary">¿Olvidaste tu contraseña?</x-nav-link>
                </div>
                
                <input type="submit" value="Iniciar sesión">
            </form>

            <p class="w-full text-muted text-center mb-8">
                ¿No tienes una cuenta?
                <x-nav-link :href="route('register')" class="text-primary cursor-pointer hover:font-extrabold hover:text-primary">
                    Regístrate
                </x-nav-link>
            </p>
        </div>
    </div>
</x-app-layout>
