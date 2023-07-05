<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login HR-Management</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-logo">
                    <img src="storage/logo_floo.png" alt="logo" id="floo-logo">
                </div>
            </div>
            <div class="col-md-6">

                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                    </div>
                @endif


                <div class="vertical-center">
                    <form action="/login" method="post">
                        @csrf
                        <h2>Welcome Back</h2>
                        <p class="text-muted" style="margin-bottom: 30px">Login to make attendance </p>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control my-3" id="email" placeholder="Floo Email" autofocus required
                                style="width: 300px; height: 40px;">
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control my-3" id="password" required
                                    placeholder="Password" style="width: 300px; height: 40px;">
                            </div>
                <small>Not registered? <a href="/register">Register Now!</a></small>

                        </div>
                        <button type="submit" class="btn btn-primary custom-btn my-3"
                            style="font-style: bold; width: 300px; height: 40px;">Login</button>

                    </form>
                </div>

            </div>
        </div>
        <div class="col-12">
            <p class="text-muted text-center" style="color: #63676F">PT. Floo Integra Digital</p>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>