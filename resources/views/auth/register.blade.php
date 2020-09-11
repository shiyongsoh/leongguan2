<x-guest-layout>
<x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />
    </x-jet-authentication-card>
<div class="page__content">
  <section class="register-form">
    <div class="container container--shrink">
      <form method="post" action="{{ route('register') }}" id="create_customer" ><input type="hidden" name="form_type" value="create_customer"><input type="hidden" name="utf8" value="✓">
        @csrf

        <div class="form__control ">
          <label class="form__label" for="customer__first-name">First name</label>
          <input type="text" id="customer__first-name" name="firstname">
        </div>

        <div class="form__control ">
          <label class="form__label" for="customer__last-name">Last name</label>
          <input type="text" id="customer__last-name" name="lastname">
        </div>

        <div class="form__control ">
          <label class="form__label" for="customer__email">Email</label>
          <input type="email" id="customer__email" name="email" required="required">
        </div>
        <div class="form__control ">
          <label class="form__label" for="customer__email">Number</label>
          <input type="tel" name="number" required="required">
        </div>

        <div class="form__control ">
          <label class="form__label" for="customer__password">Password</label>
          <input type="password" id="customer__password" name="password" required="required">
        </div>
        
        <div class="form__control ">
          <label class="form__label" for="customer__password">Password Confirm</label>
          <input type="password" id="customer__password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="button-wrapper">
          <button type="submit" class="button button--primary">Create my account</button>
        </div>
      </form>
    </div>
  </section>
</div>


    
</x-guest-layout>
<footer class="page__footer">
  <h4 class="page__footer-text">Already have an account?</h4>
  <a href="/login" class="button button--secondary">Login now</a>
</footer>

