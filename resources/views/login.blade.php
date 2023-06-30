<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .vertical-center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90vh;
        }

        .vertical-center .form-group {
            width: 300px;
        }

        .img-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90vh;
        }

        .custom-btn {
            background-color: #64B58A !important;
            /* Custom background color with !important */
            color: white !important;
            border: none;
            width: 300px;
            /* Custom text color with !important */
            /* Add other custom styles here */
        }

        .password-toggle-icon {
            cursor: pointer;
        }

        body {
            background-color: #F5F7F9;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="img-logo">
                    <img src="{{ asset('storage/logo_floo.png') }}" alt="logo">
                </div>
            </div>
            <div class="col-6">
                <div class="vertical-center">
                    <form>
                        <h2>Welcome Back</h2>
                        <p class="text-muted" style="margin-bottom: 30px">Login to make attendance </p>
                        <div class="form-group">
                            <input type="email" class="form-control my-3" id="email" placeholder="Floo Email"
                                style="width: 300px; height: 40px;">
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                            <input type="password" class="form-control my-3" id="password" id="passwordInput"
                                placeholder="Password" style="width: 300px; height: 40px;">
                            </div>
                            <div class="text-end">
                                <a href="#" style="color: #63676F">Forgot Password</a>
                            </div>
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


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
