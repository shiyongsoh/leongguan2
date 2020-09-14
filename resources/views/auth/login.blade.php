
<x-guest-layout>
<x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />
    </x-jet-authentication-card>
<form method="post" action="{{ route('login') }}" id="customer_login" accept-charset="UTF-8" class="form--shrinked"><input type="hidden" name="form_type" value="customer_login"><input type="hidden" name="utf8" value="✓">
        @csrf

        <div class="form__control ">
          <label class="form__label" for="customer__email">Email</label>
          <input type="email" id="customer__email" name="email" :value="old('email')" required autofocus>
        </div>

        <div class="form__control ">
          <label class="form__label" for="customer__password">
            Password
            <a href="https://leongguan.com/account/login#" class="login-form__forgot link link--primary" data-action="display-recover-form">Forgot it?</a>
          </label>

          <input type="password" id="customer__password" name="password" required autofocus>
        </div>

        <div class="button-wrapper">
          <button type="submit" class="button button--primary">Login</button>
        </div>
      </form>
      <footer class="page__footer">
  <h4 class="page__footer-text">Not a member yet?</h4>
  <a href="/register" class="button button--secondary">Register now</a>
</footer>
</x-guest-layout>