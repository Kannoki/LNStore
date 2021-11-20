{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="login-edit text-center container">
        <div class="card card-login mx-auto bg-dark">
            <div class="card-header mx-auto bg-dark">
                <span><img src="{{ asset('assets/images/Book.png') }}" class="logo-login" alt="Logo"></span><br/>
                <span class="logo-title mt-5">Login</span>
            </div>
            <div class="card-body">
                <form name="frm-login" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Email" :value="old('email')" required autofocus>
                    </div>
    
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="current-password">
                    </div>
                    @if ($errors->any())
                        <div class="text-danger pb-3">Wrong email or password!</div>
                    @endif
                    <div class="form-group">
                        <input type="submit" name="submit" value="Login" class="btn btn-outline-primary login_btn">
                    </div>
                    {{-- <a href="{{ route('password.request') }}">
                        <div class="link-regi pt-1 pl-2">Forgot Your Password?</div>
                    </a> --}}
                </form>
                
            </div>
        </div>
    </div>
</x-guest-layout>