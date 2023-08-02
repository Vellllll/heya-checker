<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d9942b9897.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="navigation-bar">
        <nav>
            <div class="logo">
                <a href="../index.html">
                    <i class="fa-solid fa-stethoscope"></i>
                    <span class="heya fs-3">Heya</span><span class="checker fs-3">Checker</span>
                </a>
            </div>
        </nav>
    </div>

    <div class="login">
        <div class="login-card">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Full Name -->
                <div>
                    <x-input-label class="label" for="name" :value="__('Full Name')" />
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Username -->
                <div class="mt-3">
                    <x-input-label class="label" for="username" :value="__('Username')" />
                    <x-text-input id="username" type="text" name="username" :value="old('username')" required autofocus />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-3">
                    <x-input-label class="label" for="email" :value="__('Email')" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-3">
                    <x-input-label class="label" for="password" :value="__('Password')" />

                    <x-text-input id="password"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-3">
                    <x-input-label class="label" for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation"
                                    type="password"
                                    name="password_confirmation" required />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a> --}}

                    <x-primary-button>
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
            <p class="register">Already have an account? <span><a class="register" href="{{'login'}}">Login here!</a></span></p>
        </div>
    </div>

    <div class="alert-box">
        <div class="alert-box-content">
            <i class="fas fa-solid fa-check check"></i>
            <div class="message">
                <span class="text text-1">Success!</span>
                <span class="text text-2">Your reservation has been recorded.</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>
        <div class="progress"></div>
    </div>

    <div class="sponsored">
        <table class="sponsored-table">
            <tbody>
                <tr class="sponsored-row">
                    <td class="sponsored-cell">
                        <img src="../assets/img/sponsored/bpjs.png" alt="">
                    </td>
                    <td class="sponsored-cell">
                        <img src="../assets/img/sponsored/Halodoc.png" alt="">
                    </td>
                    <td class="sponsored-cell">
                        <img src="../assets/img/sponsored/Kominfo.png" alt="">
                    </td>
                    <td class="sponsored-cell">
                        <img src="../assets/img/sponsored/Logo Kemenkes Kementerian Kesehatan.png" alt="">
                    </td>
                    <td class="sponsored-cell">
                        <img src="../assets/img/sponsored/Logo PeduliLindungi [laluahmad.com].png" alt="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- <script src="../assets/js/alert.js"></script> -->

</body>
</html>


