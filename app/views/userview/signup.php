<!-- Not importing the header and footer.php here in login so keep that in mind -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ASSETS . THEME  ?>css/loginstyle.css">
    <title><?php echo $data['pageTitle']; ?></title>
    <style>
        .message {
    margin-top: 14px;
    position: absolute;
    color: red;
    text-transform: capitalize;
}
    </style>
</head>
<body>
    <div class="container">
       
        <div class="screen">
            <div class="screen__content">
                <div class="message">
                <?php check_error() ?>
                </div>
            <!-- if the user hits this page with GET page is shown when POST is used it assuemd that the user submitted the data
        and the $POST var is filled with data -->
                <form method="post" class="login"> 
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input name="Name" type="text" class="login__input" placeholder="Name">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input name="email" type="text" class="login__input" placeholder="Username / Email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input name="password" type="password" class="login__input" placeholder="Password">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input name="confirmPass" type="password" class="login__input" placeholder="Confirm Password">
                    </div>
                    <button class="button login__submit">
                        <span class="button__text">SIGNUP</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
</body>
</html>