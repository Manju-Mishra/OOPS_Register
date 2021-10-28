<?php
include("Conn.php");
error_reporting(0);

    $obj = new Project;
    $obj->dash();

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-dark">
    <br>
    <div class="text-info border border-primary col-8 container" align="center" style="font-size:40px; font-weight:bold"><i class="fa fa-bars text-info"></i>
    DASHBOARD &emsp;&emsp;&emsp;
    <a class="fa fa-sign-out text-info" href="Logout.php">Logout</a>
   </div>
   
    <br><br>
    <div class="container">
        <table border=3 class="table border border-primary col-7 table-hover">
            <tr>
                <td colspan="4" align="center" class="text-primary table-success" style="font-size:25px; font-weight:bold">DETAILS</td>
            </tr>
          <tr class="table-danger">
              <th>Name</th>
              <th>Emai</th>
              <th>Password</th>
              <th>Action</th>
          </tr>
          <tr class="table-info">
              <td><?php echo $obj->name;?></td>
              <td><?php echo $obj->email1;?></td>
              <td><?php echo $obj->pass1;?></td>
              <td>
              <a href="change_pass.php" class="btn btn-success" style="font-weight:bold;">CHANGE PASS</a>
              </td>
          </tr>
        </table>
    </div>
</body>
</html>