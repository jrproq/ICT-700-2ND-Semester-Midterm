<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="icon" href="application/assets/image/favicon.ico">
</head>

<body>

    <div class="container">
        <div class="wrapper">

            <?php if (isset($error_message)) : ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>

            <div class="title"><span>ICONTRACK</span></div>
            <!-- Update the form action to point to your login controller's authenticate method -->
            <form action="<?= site_url('AuthController/login'); ?>" method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <!-- Change the name attribute to "username" to match your backend expectations -->
                    <input type="text" name="usernm" placeholder="Student Number" required>
                    <div class="warning">
                        <small><?php echo form_error('usernm'); ?></small>
                    </div>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <!-- Keep the name attribute as "password" -->
                    <input type="password" name="pword" placeholder="Password" required>
                    <div class="warning">
                        <small><?php echo form_error('pword'); ?></small>
                    </div>

                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>

</body>

</html>