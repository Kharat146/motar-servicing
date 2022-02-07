<?php
session_start();
include("connection.php");
 error_reporting(0);

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
            background-image: url(https://images.pexels.com/photos/2457278/pexels-photo-2457278.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        input{
            outline: none;
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


        .login_heading h1 {
            /* align-items: center; */
            margin-left: 20%;
            /* text-shadow: hotpink 20px; */

        }

        form .login_input {
            margin: 0 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
            /* border-radius: 20px; */
            background-color: transparent;
        }

        .gentralname {
            font-weight: bold;
            display: flex;
            justify-content: space-between;

        }


        .button {

            padding: 5px;
            width: 90px;
            margin: 10px;
            border-radius: 10px;
            background-color: aqua;
            color: rgb(48, 45, 45);
            font-size: 20px;
            font-weight: bold;
        }

        ::placeholder {
            color: #fffafa;
        }

        .car_brand {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <section id="login">
        <div class="container">
            <form action="" method="POST">
                <div class="login_heading">
                    <h1>Register Here !</h1>
                </div>
                <div class="login_input">
                    <div class="gentralname">
                        <p>Enter First Name :- </p><input type="text" class="input  " name="Fname">
                    </div>
                    <div class="gentralname">
                        <p>Enter Last Nmae :- </p><input type="text" class="input "  name="Lname">
                    </div>
                    <div class="gentralname">
                        <p>Enter Email :- </p><input type="email" class="input "  name="Email">
                    </div>
                    <div class="gentralname">
                        <p> Enter address :- </p><input type="address" class="input"  name="address">
                    </div>
                    <div class="gentralname">
                        <p>enter mobile no. :- </p><input type="text" class="input"  name="mobileNo">
                    </div>
                    <div class="gentralname">
                        <p> Enter Password :- </p><input type="text" class="input"  name="password">
                    </div>
                    <p>you have allready register <a href="">login</a></p>


                   <input type="submit" value="submit"  name="submit" class="button">



                </div>
            </form>
        </div>

    </section>

</body>

</html>
 <?php
    $fn=$_POST['Fname'];
    $ln=$_POST['Lname'];
    $em=$_POST['Email'];
    $ad=$_POST['address'];
    $mn=$_POST['mobileNo'];
    $cr=$_POST['password'];
        
 
  
     $query = "INSERT INTO data VALUE('','$fn','$ln','$em','$ad','$mn','$cr')";
    //    echo $query;

       if(!($fn && $ln && $em && $ad && $mn && $cr)==""){
        $data = mysqli_query($conn,$query);
        // echo "$data";
   
        //  header("Location:./login.php");
        if($data)
        {
            //  header("Location:login.php");
            
             echo '<script>alert("registration successfull !!")</script>';
  
             
        }
        else{
            echo "failed data ";
        }
    }else{
    echo "alert('enter all things')";
    }
?>