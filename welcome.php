<!-- After login this page will opnen -->

<?php
include("loginserv.php");
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome Sudeep</title>
    <style>
        input[type=submit],
        .register,
        .cpass {
            width: 50%;
            background-color: #009;
            color: #fff;
            border: 2px solid #06F;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body style="text-align:center;">

    <div>
        <h1>Welcome Buddy</h1>

        <p>Happy to see you in my page</p>
    </div>

    <div style="margin-top:34%;">
        <a class="cpass" href="./password.php" style="display:block;text-decoration:none;width:15%">Change Password</a>
        <a class="cpass" href="./login.php" style="float:right;display:block;text-decoration:none;width:10%;margin-top: -62px;">Logout</a>
    </div>


</body>

</html>