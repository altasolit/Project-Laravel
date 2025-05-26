<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <style>
        /* Reset dan dasar */
        * {
            box-sizing: border-box;
        }

        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Wrapper dan glass effect container */
        .wrapper {
            width: 100%;
            max-width: 420px;
        }
    </style>
    <div class="wrapper">
        <div class="glass-container">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('register') }}" class="register-form">
                @csrf
                <h2 class="form-title">Register</h2>

                <!-- Input Nama -->
                <div class="input-field">
                    <x-text-input id="name" type="text" name="name" :value="old('name')" autofocus
                        autocomplete="name" required />
                    <x-input-label for="name" class="floating-label" :value="__('Nama')" />
                    <x-input-error :messages="$errors->get('name')" class="error-message" />
                </div>

                <!-- Input Email -->
                <div class="input-field">
                    <x-text-input id="email" type="email" name="email" :value="old('email')" autocomplete="email"
                        required />
                    <x-input-label for="email" class="floating-label" :value="__('Email')" />
                    <x-input-error :messages="$errors->get('email')" class="error-message" />
                </div>

                <!-- Input Username -->
                <div class="input-field">
                    <x-text-input id="username" type="text" name="username" :value="old('username')" required />
                    <x-input-label for="username" class="floating-label" :value="__('Username')" />
                    <x-input-error :messages="$errors->get('username')" class="error-message" />
                </div>

                <!-- Input No HP -->
                <div class="input-field">
                    <x-text-input id="no_hp" type="text" name="no_hp" :value="old('no_hp')" required />
                    <x-input-label for="no_hp" class="floating-label" :value="__('HP')" />
                    <x-input-error :messages="$errors->get('no_hp')" class="error-message" />
                </div>

                <!-- Input Password -->
                <div class="input-field">
                    <x-text-input id="password" type="password" name="password" autocomplete="new-password" required />
                    <x-input-label for="password" class="floating-label" :value="__('Password')" />
                    <x-input-error :messages="$errors->get('password')" class="error-message" />
                </div>

                <!-- Input Confirm Password -->
                <div class="input-field">
                    <x-text-input id="password_confirmation" type="password" name="password_confirmation"
                        autocomplete="new-password" required />
                    <x-input-label for="password_confirmation" class="floating-label" :value="__('Confirm Password')" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />
                </div>

                <button type="submit" class="btn-submit">Register</button>

                <div class="login">
                    <p>Sudah memiliki akun? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/register.js') }}"></script>

</x-guest-layout>
