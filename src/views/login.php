<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#1a365d" />
    <title>Poolex</title>
    <!-- Icon title -->
    <link rel="shortcut icon" type="image/x-icon" href="../../public/images/logo/icon-logo.svg" />
    <!-- fontAwesome Css -->
    <!-- <link rel="stylesheet" href="../../public/css/Library/fontawesome.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Swiper Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="../../public/css/Library/bootstrap.min.css" />

    <!-- Font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <!-- Style Css -->
    <link rel="stylesheet" href="../../public/css/main-style.css" />
</head>

<body>
    <!-- Begin Header -->
    <header class="header"></header>
    <!-- End Header -->

    <!-- Begin Content -->
    <main class="home">
        <!-- Begin Login -->

        <section class="login">
            <div class="login-wrapper">
                <div class="login-form">
                    <div class="form-header">
                        <div class="form-header__tile">
                            <h3>
                                <b> human resource management </b>
                            </h3>
                        </div>
                        <div class="form-header__sub">
                            <h4>Đăng nhập tài khoản</h4>
                        </div>
                    </div>
                    <form class="form-inner" method="post">
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" aria-label="Gmail"
                                placeholder="Nhập Email" />
                            <div class="input-group-icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" aria-label="Password"
                                placeholder="Nhập Mật khẩu" id="myPassword" />
                            <div class="input-group-icon">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                        </div>
                        <div class="show-password">
                            <input type="checkbox" onclick="myFunction()">Show Password
                        </div>
                        <button type="submit" name="login" class="form-inner__btn btn bg-gray-900">
                            Login
                        </button>

                        <!-- <a class="form=link" href="../src/views/admin-home.php">
                        </a> -->
                    </form>
                </div>
            </div>
        </section>
        <!-- End Login -->
    </main>
    <!-- End Content -->
    <!-- Jquery JS -->
    <script type="text/javascript" src="../../public/js/Library/jquery.min.js"></script>
    <!-- Script Bootstrap -->
    <script type="text/javascript" src="../../public/js/Library/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Select2 JS -->
    <script type="text/javascript" src="../../public/js/Library/select2.full.min.js"></script>
    <!-- General Script -->
    <script type="text/javascript" src="../../public/js/general.js"></script>
    <script type="text/javascript" src="../../public/js/duy-header.js"></script>

    <!-- Show Hide Password -->
    <script>
    function myFunction() {
        var x = document.getElementById("myPassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>



</body>

</html>