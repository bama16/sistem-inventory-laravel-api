<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
    <link rel="stylesheet" href="style/main.css">
    <style>
        body,
        html {
            height: 100%;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }   
        .left {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: #a0c492;
        }
        .right-box {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .box-area {
            max-width: 800px;
            width: 100%;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="container min-vh-100">
        <div class="box-area border rounded-5 p-3 bg-white shadow">
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <img src="/images/logo-login.png" class="img-fluid" width="200px"/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="header-text mb-4">
                        <img src="/images/inventaris.gif" style="width: 400px; margin-bottom: 8px;" alt="inventaris"/>
                        <p>Kelola Gudang Jadi Gampang</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                
                            @enderror
                        </div>

                        <div class="input-group mb-5">
                            <input id="password" type="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="imput-group mb-3">
                            <button type="submit" class="btn btn-lg text-white w-100 fs-6 kotak-login" style="background-color: #6a5acd;">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>