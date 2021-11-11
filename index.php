<?php
	if(isset($_POST['submit'])){
		session_start(); // Start the session

		// $_SESSION['name'] = htmlentities($_POST['name']);
		// $_SESSION['email'] = htmlentities($_POST['email']);
		if(!empty($_POST['email']) && !empty($_POST['password'])){
			header('Location: homeScreen.php');
		}

		
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />

    <title>Inventory Management System</title>
</head>

<body class="vh-100">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-1">
        <div class="container">
            <a href="#" class="navbar-brand mx-auto h1">Agro-Machinery Inventory Management
                System</a>
        </div>
    </nav>
    <section class="text-dark text-center">
        <div class="p-2 h3 my-0">LogIn</div>
    </section>
    <section class="bg-dark d-flex p-4">
        <div class="row container-fluid justify-content-center align-items-center p-5">
            <div class="col-lg-7 col-xl-5">
                <img src="images/Login_Page.svg" alt="" class="img-fluid d-none d-lg-block w-100 p-5" />
            </div>
            <!-- <div class=" col-xl-5 bg-light p-5"> -->
            <div class="bg-light col-lg-5 col-xl-5 p-5 mb-5-lg ">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <!-- Email input -->
                    <div class="form-group mb-4">
                        <input type="email" name="email" class="form-control form-control-lg"
                            placeholder="Email" />
                        <label class="form-label text-secondary" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-group mb-3">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                        <label class="form-label text-secondary" for="form3Example4">Password</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <!-- <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div> -->
                        <a href="" class="d-flex text-body flex-row justify-content-end">Forgot password?</a>
                    </div>

                    <div class="text-center text-lg-start mt-5 pt-2">
                        <button type="submit" name="submit" value="Submit" href="homeScreen.php"
                            class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">
                            Login
                        </button>
                        <!-- <p class="small fw-bold mt-2 pt-1 mb-0">
                            Don't have an account?
                            <a href="#!" class="link-danger">Register</a>
                        </p> -->
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="bg-light text-dark pt-1 text-center">
        <div class="pt-2 h3"></div>
    </section>
    <section>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2021. All rights reserved.
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>