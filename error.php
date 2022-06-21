<!-- merged -->
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="accordianstyles.css">
    </head>
    <body style="background-color:#e6ebff;">
    <img src="Star_of_life2.png" alt="Logo" class="center">
        <form action="index.php">
            <?php
            echo "<br>" . '<span class="error">
            ERROR: Username and/or password are incorrect, or account does not exist.</span>';
            ?>
            <br><br>
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
            border-radius: 5px;">Go back</button>
    </body>
</html>