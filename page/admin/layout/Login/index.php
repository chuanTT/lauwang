<?php 
    session_start();
    if(isset($_SESSION['FullName'])) {
        header("location: ../../index.php");
        exit;
    }
    require_once "Login_handling.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/globle.css">
    <link rel="stylesheet" href="../../css/formLogin.css">
    <title>Đăng nhập | Lẩu wang</title>
</head>
<body>
    <div class="main">
        <div class="container dflexCenter mainCenter">
            <div class="login__img">
                <img src="https://lauwang.vn/wp-content/uploads/2020/08/%E1%BA%A3nh-pro-02-02-1536x1021.jpg" alt="">
            </div>
            <div class="login__form">
                <h2>Đăng nhập</h2>
                <form method="post" class="form__login">
                    <div class="form-group">
                        <input type="text" name="User" id="User" value="<?=isset($user)?$user:false?>" placeholder=" ">
                        <div class="form-icon">
                            <label for="User">
                                <i class="fas fa-user"></i>
                            </label>
                        </div>
                        <span class="messeage"><?=isset($msErorr['user']['require'])?$msErorr['user']['require']:false?></span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="Password" id="Password" placeholder=" ">
                        <div class="form-icon">
                            <label for="Password">
                                <i class="fas fa-lock"></i>
                            </label>
                        </div>
                        <span class="messeage"><?=isset($msErorr['password']['require'])?$msErorr['password']['require']:false?></span>
                    </div>
                    <span class="error"><?=isset($msErorr['action']['erorr'])?$msErorr['action']['erorr']:false?></span>
                    <div class="submit-form">
                        <button type="submit" class="btn btn-sizeL btn-primary rounded" style="color: white; margin: 0 auto;" name="Login">Đăng Nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>