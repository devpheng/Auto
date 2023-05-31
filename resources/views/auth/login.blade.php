@vite(['resources/sass/login.scss'])
<div class="background">
    <div class="card">
        <div class="btn-parent">
            <label for="login" class="login">
                <p>Login</p>
            </label>
            <label for="register" class="register">
                <p>Register</p>
            </label>
            <input type="radio" name="login-register" id="login" onclick="login()">
            <input type="radio" name="login-register" id="register" onclick="register()">
            <div class="btn"></div>
        </div>
        <div class="parent_">
            <div class="form">
                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf
                    <input type="email" name="email" id="user-id" required placeholder="Username"
                        class="input-field @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="password" name="password" id="password" placeholder="Password" class="input-field @error('password') is-invalid @enderror" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                    <div class="parent2">
                        <label for="keep-me-signin"><input type="checkbox" name="remember" style="width: 11px" id="keep-me-signin" {{ old('remember') ? 'checked' : '' }}>keep me
                            signin</label>
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                    </div>
                    <p id="rbtext"></p>
                    <!-- <button type="submit" onclick="myFunction()" id="rbtInput" style="margin-right: 5px !important;">Login</button> -->
                    <button type="submit" id="rbtInput" style="margin-right: 5px !important;">Login</button>
                </form>
            </div>
            <div class="form ">
                <form method="post" action="{{ route('register') }}" class="login-form">
                    @csrf
                    <input type="text" name="name" id="user-id" required placeholder="Name"
                        class="input-field @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="email" name="email" id="emailUser" required placeholder="Email"
                        class="input-field @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="password" name="password" id="password" placeholder="Password" class="input-field @error('password') is-invalid @enderror" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="password" name="password_confirmation" id="password-confirm" placeholder="{{ __('Confirm Password') }}" class="input-field @error('password') is-invalid @enderror" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="parent2">
                    </div>
                    <p id="rbtext"></p>
                    <button type="submit" id="rbtInput" style="margin-right: 5px !important;">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    let loginBtn = document.querySelector('#login');
    let registerBtn = document.querySelector('#register');

    let parent = document.querySelector('.parent_')

    function login() {
        console.log('login')
        parent.classList.add('moveLogin');
        parent.classList.remove('moveRegister')
    }
    function register() {
        parent.classList.remove('moveLogin');
        parent.classList.add('moveRegister')
        console.log('register')
    }
</script>
