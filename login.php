<?php
  session_start();
  include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #login {
            width: 100%;
            height: 100vh;
            background-image: url(https://images.pexels.com/photos/1762851/pexels-photo-1762851.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .container {
            width: 35%;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 20px;
            color: #fffafa;
            text-shadow: 1px 2px 3px rgb(12, 12, 253);
            box-shadow: 3px 3px 5px 5px rgb(78, 78, 114);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form .login_input {
            margin: 0 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .genral_info {
            font-weight: bold;
            display: flex;
            justify-content: space-between;
        }

        .input {

            height: 30px;
            border: none;
            border-bottom: 1px solid #fffafa;
            margin: 10px;
            text-align: center;
            font-size: 15px;
        }

        input {
            margin-left: 30px;
            border-radius: 10px;
           
        }

        .button {

            padding: 5px;
            width: 90px;
            margin: 10px;
            /* margin-left: 30%; */
            border-radius: 10px;
            background-color: rgb(243, 239, 7);
            color: rgb(17, 17, 17);
            font-size: 20px;
            font-weight: bold;

        }
    </style>
</head>

<body>
    <section id="login">
        <div class="container">
            <form action=""  method="POST">
                <div class="login_heading">
                    <h1>Login Here !</h1>
                </div>
                <div class="login_input">
                    <div class="genral_info">
                        <p>Enter Your Name :-</p><input type="text" class="input" placeholder="first name" name="firstname">
                    </div>
                   
                    <div class="genral_info">
                        <p>Enter Your password :-</p><input type="password" name="carno" placeholder="password" class="input">
                    </div>
                    <input type="submit" value="login" name="loginbtn" class="button">
                    <p> not registerd ? <a href="">resiter here</a></p>
                </div>

            </form>
        </div>
    </section>
</body>

</html>
<?php
      $adminuser="ajay";
      $passuser="123";
      if(isset($_POST['loginbtn'])){
        $a=$_POST['firstname'];
      $b=$_POST['carno'];
      
        if($a== $adminuser && $b== $passuser){
            echo $a;
            echo $b;
          $_SESSION['login']= true;
          header("Location: display.php");
          
        }
    }
    // include('connection.php');  
    // include('connection.php');  
    $username = $_POST['firstname'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from data where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          echo $count;
        if($count == 1){  
            $_SESSION['login']= true;
            header("Location: display.php");
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>