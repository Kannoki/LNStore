{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>   
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="login-edit container">
        <div class="card card-login mx-auto text-center bg-dark">
            <div class="card-header mx-auto bg-dark">
                <span> <img src="{{ asset('assets/images/Book.png') }}" class="logo-login" alt="Logo"> </span><br />
                <span class="logo-title mt-5"> Register </span>
            </div>
            
            <div class="card-body">
                <form name="frm-login" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" id="name" id="name" name="name" class="form-control" placeholder="Your name" :value="name" required autofocus autocomplete="name">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" :value="old('email')" :value="email" required>
                    </div>
                    <div class="row">
                        <div class="input-group form-group col-12 col-sm-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-person-booth"></i></span>
                            </div>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required autocomplete="new-password">
                        </div>

                        <div class="input-group form-group col-12 col-sm-12">    
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
                            </div>
                            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group button-center">
                        <input type="submit" name="register" value="Register" class="btn btn-outline-primary login_btn">
                    </div>

                </form>
                <a href="{{ route('login') }}">
                    <div class=""><span class="link-regi">Already have an account?</span></div>
                </a>

            </div>
        </div>
    </div>
</x-guest-layout>