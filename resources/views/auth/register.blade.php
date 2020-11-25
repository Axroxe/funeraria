<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="last_name" value="{{ __('Apellido') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="last_name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="document" value="{{ __('Cédula') }}" />
                <x-jet-input id="document" class="block mt-1 w-full" type="number" name="documento" :value="old('documento')" required autofocus autocomplete="document" />
            </div>

            <div class="mt-4">
                <x-jet-label for="birthdate" value="{{ __('Fecha de cumpleaños') }}" />
                <x-jet-input id="birthdate" class="block mt-1 w-full" type="date" name="cumpleaños" :value="old('cumpleaños')" required autofocus autocomplete="birthdate" />
            </div>

            <div class="mt-4">
                <x-jet-label for="mobile" value="{{ __('Celular') }}" />
                <x-jet-input id="mobile" class="block mt-1 w-full" type="number" name="celular" :value="old('celular')" required autofocus autocomplete="mobile" />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Dirección') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autofocus autocomplete="address" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Correo') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="contraseña" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya tiene cuenta?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
