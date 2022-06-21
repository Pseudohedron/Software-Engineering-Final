<!-- merged -->
<!DOCTYPE html>
<html>
    <?php
        include_once('create_db.php');
    ?>

    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="/current_final/style/accordianstyles.css">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Great+Vibes&display=swap" rel="stylesheet">
    </head>

    <body style="background-color:#e6ebff;">
    <img src="/current_final/assets/logo.png" alt="Logo" class="center">
        <form action="login.php" method="POST">
            <h2 class="title" style="font-size: 26pt; text-shadow: 2px 2px 4px #000000;">LOGIN</h2>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?> </p>
            <?php } ?>

            <!--<label>User Name </label>-->
            <input type="text" style="width: 30%; font-size: 16pt;" name="username" placeholder="Username">

            <!--<label>Password </label>-->
            <input type="password" style="width: 30%; font-size: 16pt;" name="password" placeholder="Password"><br>
            <button type="submit" style="display: block;
            font-size: 18pt;
            width: 18%;
            margin:0 auto;
            padding:5px 15px; 
            background:#FFC0CB;
            color: white; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px;">Login</button>
        </form>
    </body>
</html>