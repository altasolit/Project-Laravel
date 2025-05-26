<x-guest-layout>
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">

        <div class="wrapper">
            <div class="glass-container">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2>Register</h2>

                    <!-- Input Nama -->
                    <div class="input-field form-group">
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" required />
                        <x-input-label for="name" class="floating-label" :value="__('Nama')" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Input Email -->
                    <div class="input-field form-group">
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="email" required />
                        <x-input-label for="email" class="floating-label" :value="__('Email')" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Input Username -->
                    <div class="input-field form-group">
                        <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
                        <x-input-label for="username" class="floating-label" :value="__('Username')" />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>

                    <!-- Input No HP -->
                    <div class="input-field form-group">
                        <x-text-input id="no_hp" class="block mt-1 w-full" type="text" name="no_hp" :value="old('no_hp')" required />
                        <x-input-label for="no_hp" class="floating-label" :value="__('HP')" />
                        <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
                    </div>

                    <!-- Input Password -->
                    <div class="input-field form-group">
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" required />
                        <x-input-label for="password" class="floating-label" :value="__('Password')" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Input Confirm Password -->
                    <div class="input-field form-group">
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" required />
                        <x-input-label for="password_confirmation" class="floating-label" :value="__('Confirm Password')" />
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

</x-guest-layout>

