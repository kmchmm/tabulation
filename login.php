
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Tabulation Login</title>
</head>
<body>  
    <section>
        <div class="logForm-container justify-center align-center">
            <div class="logForm justify-center align-center">
                <div>
                    <img src="assets/images/ccs-logo.jpg" alt="">
                </div>
                <div>
                    <form action="loginaccess.php" method="post">
                        <h1>Tabulation: Cultural and Mr. & Miss</h1>
                        
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        
                        <div>
                            <span>
                                <label for="username">Username</label>
                            </span>
                            <input type="text" name="username" id="username">
                        </div>
                        <div>
                            <span>
                                <label for="password">Password</label>
                            </span>
                            <input type="password" name="password" id="password">
                        </div>
                        <button name="submit">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>