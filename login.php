<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
    </head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <body class="bg-dark">
    <form method="POST">
        <div class="container" style="height: 500px">
            <div class="row h-100">
                <div class="col-sm-12 my-auto">
                    <div class="card w-50 mx-auto">
                    <div class="card-header bg-danger">
                            <h4 class="text-white text-center"> HALAMAN LOGIN</h4>
                        </div>
                          <div class="card-body">
                           <div class="form-grup">
                    <input class="form-control form-control-lg" id="inputUsername" name="username" type="text" placeholder="Enter Username" />
                    <label for="inputUsername">Username</label>
                </div>
                <div class="form-grup">
                    <input class="form-control form-control-lg" id="inputPassword" name="password" type="password" placeholder="Password" />
                    <label for="inputPassword">Password</label>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" name="login" class="btn btn-danger text-center" href="index.html">Login</button>
                </div>
            </form>
            <div><a href="logininject.php">Login Inject</a></div>
            <?php
            include ('koneksi.php');
            //login
            if(isset($_POST['login'])){
                //variable
                //$username = $_POST['username'];
                //$password = $_POST['password'];
                $username = mysqli_real_escape_string($koneksi, $_POST['username']);
                $password = mysqli_real_escape_string($koneksi, $_POST['password']);
                $datas = mysqli_query($koneksi, "SELECT * FROM user WHERE username='{$username}' and password='{$password}'");
                //SELECT * FROM user WHERE username='yyy' OR 1=1 LIMIT 1 -- ' AND password='xxx'
                $hitung = mysqli_num_rows($datas);
                if($hitung>0){
                    $_SESSION['login'] = 'true';
                    header('location:home.php');
                } else {
                    echo '<script>alert("username dan password salah");
                    window.location.href="login.php"</script>';
                }
            }
            ?>
        </div>           
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        </div>
                </div>
            </div>
        </div>
    </body>
</html>
