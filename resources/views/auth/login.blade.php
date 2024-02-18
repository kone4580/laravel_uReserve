<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="user-login">
                <div class="user-login-input">
                    <div class="user-login-input-id">
                        <x-input id="email" class="c-input" type="email" placeholder="メールアドレス"  name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
                    <div class="user-login-input-pass">
                        <x-input id="password" class="c-input" type="password" name="password" placeholder="パスワード" required autocomplete="current-password" />
                    </div>
                </div>
                <div class="user-login-checkbox">
                    <label>
                        <x-checkbox id="remember_me" name="remember" class="c-checkbox" />
                        次回から自動的にログインする
                    </label>
                </div>
            </div>

            <div class="login-under">
                <div class="user-login-actions">
                    <x-login-button>
                        {{ __('ログイン') }}
                    </x-login-button>
                </div>
                @if (Route::has('password.request'))
                    <div class="user-login-link">
                        <a class="forgot-link" href="{{ route('password.request') }}">パスワードを忘れた方</a>
                    </div>
                @endif
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
