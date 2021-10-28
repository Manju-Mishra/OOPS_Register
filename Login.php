<?php
include("Conn.php");
if(isset($_POST['login']))
{
    $obj = new Project;
    $msg=$obj->login($_POST['email'],$_POST['pass']);
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="container table-secondary">
<?php
    if (!empty($msg)) {
   ?>
        <div class="alert alert-success" style="font-size:30px"><?php echo $msg;?></div>
        <?php
    }
    ?>
    <br><br><br>
    <form method="post">
        <div class="border border-success container mt-4 bg-dark text-light col-6"><br>
        <h2 align="center" class="text-info border border-info col-6 container"><i>LOGIN HERE</i></h2><br>
            <div class="form-group">
                <label class="text-warning">Email</label>
                <input type="text" name="email" placeholder="email@gmail.com" class="form-control col-10 ">
            </div>
            <div class="form-group">
                <label class="text-warning">Password</label>
                <input type="password" name="pass" placeholder="password" class="form-control col-10 ">
            </div><br>
            <input type="submit" value="LOGIN" class="btn btn-success" style="font-weight:bold;"name="login">
                <br><br>
            <a href="Register.php" class="text-warning">For New User</a>
            <br><br><br>
        </div>
    </form>
</body>

</html>