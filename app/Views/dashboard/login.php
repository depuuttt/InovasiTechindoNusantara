<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/login.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PT. Inovasi Techindo Nusantara</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <ion-icon name="person-circle-outline" class="d-block mx-auto mb-1"></ion-icon>
                    <h3 class="card-title text-center mb-3">Login</h3>
                    <form id="loginForm" method="post">
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                            <div class="invalid-feedback">Please provide a valid username.</div>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                            <div class="invalid-feedback">Please enter your password.</div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn shadow">Login</button>
                        </div>
                        <div class="mt-3 text-center">
                            <a href="#" class="text-decoration-none">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/login.js"></script>
    <script src="https://kit.fontawesome.com/8460c0c2c8.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>