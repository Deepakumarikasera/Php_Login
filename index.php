<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
           
         }
         body{
            background-image: url(piii.jpg);
            width: 100%;
            height: 100%; 
            background-size: cover;
            
         }
       
        .con{
            width: 400px;
            height: 400px;
             border-radius: 20px;
            background-image: url(piii.jpg);
            color: antiquewhite;
            position: absolute;
            margin-top: 9%;
            margin-left: 35%;
             box-shadow: 2px 2px 7px 10px rgb(143, 205, 20); 
            
        }
         h1{
            text-align: center;
            margin-top: 20px;
            text-decoration: underline;
            font-size: 35px;
            font-family: algerian;
            text-shadow: 2px 2px 8px rgb(145, 206, 22);
        }
        form{
            margin-top: 40px;
            margin-left: 50px;
            font-weight: bold;
            
         }
         label{
            font-weight: bold;
            font-size: 23px;
         }
         input{
            width: 270px;
            height: 25px;
            outline: 2px solid black;
         }
         .btn{
            width: 90px;
            height: 30px;
            border-radius: 20px;
            background-color: rgb(63, 9, 114);
            color: azure;
            font-style: oblique;
            /* font-weight: bold; */
            font-size: 20px;
            text-shadow: 0px 0px 3px yellow;
         }
         .btn:hover{
            background-color: yellowgreen;
            color: black;
            text-shadow: 0px 0px 5px rgb(12, 84, 152);
         }
         #signin{
           margin-left: 15px;
           margin-top: 10px;
         }
    </style>
</head>
<body>
    <div class="con">
        <h1>User SignUP/SignIN</h1>
        <form action="" method="post">
            <label for="name">NAME</label><br>
            <input type="text" name="name" id="name"><br><br>
            <label for="email">EMAIL</label><br>
            <input type="email" name="email" id="email"><br><br>
            <label for="password">PASSWORD</label><br>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" name="signup" id="signup" value="signup" class="btn">
            <input type="submit" name="signin" id="signin" value="signin" class="btn">

        </form>
    </div>
    <?php

    if(isset($_POST['signup']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $mycon=mysqli_connect('localhost','root','','login');
        $q="insert into users values ('$name','$email','$password')";
        $res=mysqli_query($mycon,$q);
        echo "Signup completed!";
        mysqli_close($mycon);
    }

    if(isset($_POST['signin']))

    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $mycon=mysqli_connect('localhost','root',"",'login');
        $q="select * from users WHERE email='$email' and password='$password'";
        $res=mysqli_query($mycon,$q);
        
        if(mysqli_num_rows($res)>0)
        {
            echo "login sucessfull!";
        }
         else{
            echo"login failed!";
        }
        mysqli_close($mycon);
    }
    ?>
</body>


</html>
