<div class="login_form">
    <div class="container">
        <div class="login-box">
            @include('auth.login_form')
        </div>
    </div>
    <div class="register-route">
        <p class="mt-3">
            Belum punya akun? <a href="{{ route('register') }}">Daftar</a>.
        </p>
    </div>
</div>


<style>
    .login_form {
        position: fixed
    }
    
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-left: 450px;
        padding-top: 70px;
    }

    .login-box {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.212);
        border-radius: 8px;
        width: 400px;
    }

    .register-route {
        position: relative;
        bottom: 118px;
        left: 570px;
        background-color: #ffffff;
        width: 200px;
        height: 30px;
        font-family: 'Cabin', sans-serif;
    }
    .register-route p {
        font-size: 15px;
        color: #707079;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .register-route p a {
        display: inline;
        font-size: 15px;
        font-weight: bold;
        color: #dfa974;
        display: block;
        padding-left: 5px;
        text-decoration: none;
    }
</style>






{{-- <link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="overlay" id="loginOverlay">
    <div class="login-form">
        <span class="close" id="closeLoginPopup"></span>
        
        <img src="img/berlian.png" alt="Logo" class="logo-img">

        @if (session('error'))
            <div class="alert alert-danger" id="loginErrorAlert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="email" class="form-control" id="loginEmail" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="password" class="form-control" id="loginPassword" name="password" value="{{ old('password') }}" placeholder="Kata Sandi" required oninput="toggleLoginEyeIcon()">
                    <div class="input-group-append" id="loginEyeIconContainer" style="display: none;">
                        <span class="input-group-text" id="toggleLoginPassword" style="cursor: pointer;">
                            <i class="fa-regular fa-eye" id="loginEyeIcon"></i>
                        </span>
                    </div>
                </div>
            </div>

            <button type="submit" id="loginButton" disabled>Masuk</button>
        </form>

        <p class="mt-3">
            Belum punya akun? <a href="#" id="openRegisterPopup">Daftar</a>.
        </p>
    </div>
</div>

<script>
    let isLoginPasswordVisible = false;

    function toggleLoginEyeIcon() {
        const passwordInput = document.getElementById('loginPassword');
        const eyeIconContainer = document.getElementById('loginEyeIconContainer');

        // Menampilkan ikon mata jika ada input
        if (passwordInput.value.length > 0) {
            eyeIconContainer.style.display = 'block';
        } else {
            eyeIconContainer.style.display = 'none';
        }
    }

    document.getElementById('toggleLoginPassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('loginPassword');
        const eyeIcon = document.getElementById('loginEyeIcon');

        // Menangani toggle password visibility
        if (!isLoginPasswordVisible) {
            passwordInput.type = 'text';
            eyeIcon.classList.remove('fa-regular', 'fa-eye');
            eyeIcon.classList.add('fa-regular', 'fa-eye-slash');
            isLoginPasswordVisible = true;
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('fa-regular', 'fa-eye-slash');
            eyeIcon.classList.add('fa-regular', 'fa-eye');
            isLoginPasswordVisible = false;
        }
    });

    
    document.addEventListener("DOMContentLoaded", function() {
        const loginEmailInput = document.getElementById('loginEmail');
        const loginPasswordInput = document.getElementById('loginPassword');
        const loginButton = document.getElementById('loginButton');
        const loginOverlay = document.getElementById('loginOverlay');
        const loginErrorAlert = document.getElementById('loginErrorAlert');

        function checkLoginInput() {
            if (loginEmailInput.value && loginPasswordInput.value) {
                loginButton.classList.add('enabled');
                loginButton.disabled = false;
                loginButton.style.cursor = 'pointer';
            } else {
                loginButton.classList.remove('enabled');
                loginButton.disabled = true;
                loginButton.style.cursor = 'not-allowed';
            }
        }

        loginEmailInput.addEventListener('input', checkLoginInput);
        loginPasswordInput.addEventListener('input', checkLoginInput);

        if (loginErrorAlert) {
            loginOverlay.style.display = 'flex';
        }

        document.getElementById('closeLoginPopup').addEventListener('click', function () {
            loginOverlay.style.display = 'none';
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                loginOverlay.style.display = 'none';
            }
        });
    });
</script> --}}
