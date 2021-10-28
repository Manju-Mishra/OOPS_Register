<?php
include("Conn.php");

if (isset($_POST['sub'])) {
    $obj = new Project;
    $msg = $obj->register($_POST['email'], $_POST['name'], $_POST['age'], $_POST['pass']);
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class=" table-warning">
<?php
    if (!empty($msg)) {
   ?>
        <div class="alert alert-success" style="font-size:30px"><?php echo $msg;?></div>
        <?php
    }
    ?>
    <br>
    <div class="border border-success container mt-4 bg-dark text-light col-6"><br>
        <h2><i class="text-info border border-info container col-8" align="center">REGISTER HERE</i></h2><br>
        <form method="post">
            <div class="form-group">
                <label class="text-warning">Email</label>
                <input type="text" name="email" placeholder="email@gmail.com" class="form-control col-10">
            </div>
            <div class="form-group">
                <label class="text-warning">Name</label>
                <input type="text" name="name" placeholder="enter name" class="form-control col-10">
            </div>
            <div class="form-group">
                <label class="text-warning">Age</label>
                <input type="text" name="age" placeholder="enter age" class="form-control col-10">
            </div>
            <div class="form-group">
                <label class="text-warning">Password</label>
                <input type="password" name="pass" placeholder="password" class="form-control col-10"><br>
            </div>
            <input type="submit" value="REGISTER" class="btn btn-success col-4" name="sub"><br><br>
    </div>
    </form>
</body>

</html>