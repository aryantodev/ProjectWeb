<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <!-- CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>

<body>
    <section class="container">
        <div class="form signup">
            <div class="img">
                <img src="{{ asset('img/logo_login.jpg') }}" alt="signup" width="100px">
            </div>
            <form id="signupForm" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    @error('email')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Create password" required>
                    <span class="toggle-password" onclick="togglePassword('password')">
                        <i class='bx bx-show'></i>
                    </span>
                </div>

                <div class="form-group input-group">
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" required>
                    <span class="toggle-password" onclick="togglePassword('confirm_password')">
                        <i class='bx bx-show'></i>
                    </span>
                </div>
                <div id="confirmPasswordError" class="error"></div> <!-- Error message below the input -->

                <div class="form-group">
                    <button type="submit" id="submit" class="btn btn-primary btn-block">Signup</button>
                </div>
            </form>

            <div class="form-link"><span>Already have an account? <a href="{{url('login')}}" class="link login-link">Login</a></span>
            </div>

            <div class="line my-4"></div>
        </div>
    </section>

    <!-- JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{asset('js/signup.js')}}"></script>
</body>

</html>