

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <style>
    h1{
      font-size: 18px;
      color: #000;
      text-align: center;
      margin-top: -20px;
      margin-bottom: 20px;
    }
    table{
      border-collapse : collapse;
      background-color:#fff;
      box-shadow: 0px 10px 20px 0 rgba(0,0,0,0.03);
      border-radius: 10px;
      margin:auto;
    }
    th,td{
      border:1px solid #f2f2f2;
      padding: 8px 30px;
      text-align: center;
      color: grey;
    }
    th{
      text-transform: uppercase;
      font-weight:500;
    }
    td{
      font-size:20px;
    }
    .post-class{
      text-transform: uppercase;
    }
    .fa{
      font-size:18px;
    }
    .fa-edit{
      color:#63c76a;
    }
    .fa-trash{
      color:#ff0000;
    }
     
     
    </style>
  </head>
  <body>
      <div class="main-div">
      <h1>list of student</h1>
      <div class="center-div">
        <div class="table-responsive">
        <table>
              <thead>
        <tr>
                    <th>roll no.</th>
                    <th>first name</th>
                    <th>last name</th>
                    <th>email</th>
                    <th>address</th>
                    <th>mobile no</th>
                    <th>car no</th>
                   
              </tr>     
              </thead>   
              <tbody>
                    <?php
                        include("connection.php");
                        error_reporting(0);
                       $selectquery = " select * from data";
                       $query = mysqli_query($conn,$selectquery);
                       $total = mysqli_num_rows($query);
                       // echo $total;
                       ;
                       while($res =   mysqli_fetch_array($query)){
                          ?>
                           <tr>
                           <td><?php echo $res['id'];?></td>
                           <td><?php echo $res['firstname'];?></td>
                           <td><?php echo $res['lastname'];?></td>
                           <td><?php echo $res['email'];?></td>
                           <td><?php echo $res['address'];?></td>
                           <td><?php echo $res['mobile no.'];?></td>
                           <td><?php echo $res['Car no.'];?></td>
                         
                         </tr>
                      <?php
                       }
                    ?>


             
              </tbody>
        </table>
        </div>
      </div>
      </div>
   
  </body>
</html>