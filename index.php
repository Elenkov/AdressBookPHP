<?php
session_start();
?>
<html>
    <head>

        <title>Friends</title>
    </head>
    <body>
        <?php
        if ($_SESSION['is_logged'] == true) {
            echo'<a href=logout.php>Logout</a>| <a href="add.php">Add</a><br>';
            $friends=file('data.txt');
            echo'<table border=1>
                <tr><td>Name</td><td>Email</td><td>Phone</td></tr>';
            foreach ($friends as $v)
            {
                $tm=  explode(';', $v);
                foreach($tm as $vv)
                {
                    $tm2=  explode(':', $vv);
                    if($tm2[0]=='name')
                    {
                        $name=$tm2[1];
                    }
                    elseif($tm2[0]=='email')
                    {
                        $email=$tm2[1];
                    }
                    elseif($tm2[0]=='mobile')
                    {
                        $phone=$tm2[1];
                        
                    }
                    
                        
                    
                }
                echo'<tr><td>'.$name.'</td><td>'.$email.'</td><td>'.$phone.'</td></tr>';
                
            }
            
            echo'</table>';
            
        } else {
            if ($_GET['error'] == 1) {
                echo "Wrong user name";
            }
            ?>
            <Form method="post"action="login.php">
                Username:<input type="text" name="login">
                Password:<input type="password" name="pass"><br>
                <input type="submit" value="login">


            </Form>
    <?php
}
?>
    </body>
</html>
