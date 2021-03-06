<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <script src="https://kit.fontawesome.com/8303a6dc74.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <title>Quan ly sinh vien</title>
</head>

<body class="mt-5">
    <div class="arrow"></div>
    <div class="container p-5 border-2 rounded-3 mt-5" style="max-width: 540px">
        <div class="content d-flex align-items-center justify-content-center">
            <h1 class="mb-5 fs-3">Login to your account</h1>
        </div>
        <form novalidate class="row row-lg-auto g-1" name="form" id="form" method='post'>
            <!-- Email -->
            <div class="col-11 mb-2">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email">
            </div>
            <div class="col-1 mb-2 border-1 rounded-3" style="border: 1px solid #030252;">
                <i class="fa-solid fa-envelope d-flex justify-content-center pt-2"></i>
            </div>
            <!-- Password -->
            <div class="col-11 mb-2">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
            </div>
            <div class="col-1 mb-2 border-1 rounded-3" style="border: 1px solid #030252;">
                <i class="fa-solid fa-lock d-flex justify-content-center pt-2"></i>
            </div>
            <div id="errorMessage"></div>
            <!-- Remember me -->
            <div class="col-sm-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                    <label class="form-check-label" for="inlineFormCheck">
                        Remember me
                    </label>
                </div>
            </div>
            <!-- Forgot password -->
            <div class="col-sm-6 d-flex justify-content-end">
                <a href="#">Forgot password?</a>
            </div>
            <div class="col-12 mt-4 d-flex justify-content-center">
                <button type="submit" id="submit" class="btn px-5 bg-gradient" action="#">Let's go</button>
            </div>
        </form>
    </div>
    <script src="../assets/js/login.js"></script>
</body>

</html>