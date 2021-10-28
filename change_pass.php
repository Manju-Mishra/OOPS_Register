<?php
include("Conn.php");
error_reporting(0);
if(isset($_POST['new_pass']))
{
    $obj = new Project;
    $msg=$obj->c_pass($_POST['pass'],$_POST['c_pass']);
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
        <div class="border border-success container mt-4 bg-dark col-6"><br>
        <h2><i class="text-info border border-info ml-4 col-6" align="center">CHANGE PASSWORD</i></h2><br>
            <div class="form-group">
                <label class="text-warning">Password</label>
                <input type="text" name="pass" placeholder="password" class="form-control col-10">
            </div>
            <div class="form-group">
                <label class="text-warning">Confirm Password</label>
                <input type="text" name="c_pass" placeholder="confirm password" class="form-control col-10">
            </div><br>
            <input type="submit" value="CHANGE" class="btn btn-success col-4 coltainer" name="new_pass">
            <br><br><br>
        </div>
    </form>
</body>

</html>