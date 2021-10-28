<?php 
 class Project
 {
    private $conn;
    public $msg;
    public $ename;
    public $email1;
    public $pass1;
    function __construct()
    {
        $this->conn=mysqli_connect("localhost","root","","oops_project");
    }


    //Register
    function register($email,$name,$age,$pass)
    {
        
        if(mysqli_query($this->conn,"insert into register (email,name,age,password) values('$email','$name',$age,'$pass')"))
        {
            header("location:Login.php");
        }
        else{
         $this->msg="User Not Registerd";
         return $this->msg;
        }

    }


    //Login
    function login($email,$pass)
    {
        $query=mysqli_query($this->conn,"select * from register where email='$email' and password='$pass'");
        $sel=mysqli_fetch_assoc($query);
        if($sel['email']==$email && $sel['password']==$pass)
        {
            session_start();
            $_SESSION['email']=$email;
            $_session['pass']=$pass;
            header("location:Dash.php");
        }
        else
        {
            $this->msg="Email/Pass wrong";
            return $this->msg;
        }
    }


    //Dashboard
    function dash()
    {
        session_start();
        $email=$_SESSION['email'];
        $pass=$_SESSION['pass'];
        $query=mysqli_query($this->conn,"select * from register where email='$email'");
        $sel=mysqli_fetch_assoc($query);

        $this->name=$sel['name'];
        $this->email1=$email;
        $this->pass1=$sel['password'];
    }


    //Change password
     function c_pass($pass,$cpass)
     {
         session_start();
         $email=$_SESSION['email'];
         $query=mysqli_query($this->conn,"select * from register where email='$email'");
        $sel=mysqli_fetch_assoc($query);
        if($sel['password']!=$pass && $pass==$cpass)
        {

            if(mysqli_query($this->conn,"update register set password='$pass' where email='$email'"))
            {
                header("location:Dash.php");
        
            }
        
        else
        {
             $this->msg="not changed";
            return $this->msg;
        }
       }
       else{
       $this->msg="password not matched";
            return $this->msg;
       }
     }
    

    function __destruct()
    {
        mysqli_close($this->conn);
    }
 }
?>