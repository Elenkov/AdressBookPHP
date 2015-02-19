<?php
session_start();
if($_SESSION['is_logged']==true)
{
    if($_POST['formSubmit']==1)
    {
        $name=trim($_POST['name']);
        $email=trim($_POST['mail']);
        $phone=trim($_POST['phone']);
        if(strlen($name)>3 && strlen($email)>5)
        {
            $tmp='name:'.$name.';email:'.$email.';mobile:'.$phone.';';
            file_put_contents('data.txt',$tmp."\n",FILE_APPEND);
            echo"Data was saved";
        }
 else {
     echo"Wrong Data";
 }
    }
    ?>
<form method="post" action="Add.php">
    <input type="hidden" name="formSubmit" value="1">
    Name:<input type="text" name="name"><br>
    Email:<input type="text" name="mail"><br>
    Mobile:<input type="text" name="phone"><br>
    <input type="submit" value="Add">
</form>
<?php
}
else
{
    header('Location: index.php');
}
