<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>

    <style>
        body{
            font-family: Arial;
            background:#f5f5f5;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .box{
            background:white;
            padding:30px;
            border-radius:10px;
            width:300px;
            text-align:center;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        input{
            width:90%;
            padding:10px;
            margin:10px 0;
        }

        button{
            padding:10px 20px;
            background:maroon;
            color:white;
            border:none;
            cursor:pointer;
        }
    </style>
</head>

<body>

<div class="box">

    <h2>Welcome, Moro</h2>

    <form action="login.php" method="POST">

        <input type="text" name="username" placeholder="Username" required>
        <br>

        <input type="password" name="password" placeholder="Password" required>
        <br>

        <button type="submit">Login</button>

    </form>

</div>

</body>
</html>
