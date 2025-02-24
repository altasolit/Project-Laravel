<x-guest-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Form</title>
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    </head>
    <body>
        <div class="wrapper">
            <div class="glass-container">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2>Register</h2>

                    <!-- Input Name -->
                    <div class="input-field form-group">
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" required />
                        <x-input-label for="name" class="floating-label" :value="('Name')" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Input Email -->
                    <div class="input-field form-group">
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="username" required />
                        <x-input-label for="email" class="floating-label" :value="('Email')" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Input Password -->
                    <div class="input-field form-group">
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" required />
                        <x-input-label for="password" class="floating-label" :value="('Password')" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Input Confirm Password -->
                    <div class="input-field form-group">
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" required />
                        <x-input-label for="password_confirmation" class="floating-label" :value="('Confirm Password')" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <button type="submit">Register</button>

                    <div class="login">
                        <p>Sudah memiliki akun? <a href="{{ route('login') }}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <script src="{{ asset('js/register.js') }}"></script>
    </body>
</x-guest-layout>