<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Naam -->
        <div>
            <x-input-label for="name" :value="__('Naam')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- E-mailadres -->
        <div class="mt-4 relative" x-data="{ showEmailHint: false }" @click.outside="showEmailHint = false">
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email"
                          class="block mt-1 w-full"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required
                          autocomplete="username"
                          @focus="showEmailHint = true"
            />

            <!-- Hint -->
            <div x-show="showEmailHint"
                 class="mt-2 text-sm text-gray-600 bg-blue-50 border border-blue-200 p-2 rounded"
                 x-transition
                 x-cloak>
                Gebruik een e-mailadres van uw Da Vinci-account
            </div>

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Wachtwoord -->
        <div class="mt-4 relative" x-data="{ showPasswordHint: false }" @click.outside="showPasswordHint = false">
            <x-input-label for="password" :value="__('Wachtwoord')" />

            <x-text-input id="password"
                          class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required
                          autocomplete="new-password"
                          @focus="showPasswordHint = true"
            />

            <!-- Pakket met hint -->
            <div x-show="showPasswordHint"
                 class="mt-2 text-sm text-gray-600 bg-blue-50 border border-blue-200 p-2 rounded"
                 x-transition
                 x-cloak>
                Aanbeveling: gebruik een wachtwoord dat verschilt van uw Da Vinci-account
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Bevestig Wachtwoord -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Bevestig Wachtwoord')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Al geregistreerd?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registreren') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
