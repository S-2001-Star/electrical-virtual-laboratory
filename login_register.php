<?php

require('connection.php');


// ----------------LOGIN----------------
if(isset($_POST['login'])){
    $query = "SELECT * FROM `registered_users` WHERE `email` = '$_POST[email_contno]' OR `cont_no` = '$_POST[email_contno]'";
    $result = mysqli_query($con,$query);

    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$result_fetch['password'])){
                echo "right";
            }
            else{
                echo"
                <script>
                    alert('Incorrect Password');
                    window.location.href='index.php';
                </script>
            ";
            }
        }
        else{
            echo"
            <script>
                alert('User Not Registered');
                window.location.href='index.php';
            </script>
        ";
        }
    }
    else{
        echo"
            <script>
                alert('Cannot Run Query');
                window.location.href='index.php';
            </script>
        ";
    }
}

// ----------------REGISTRATION----------------
if(isset($_POST['register']))
{
    $user_exist_query = "SELECT * FROM `registered_users` WHERE `email` = '$_POST[email]' OR  `cont_no` = '$_POST[cont_no]'";
    $result = mysqli_query($con,$user_exist_query);

    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['email']==$_POST['email']){
                echo"
                    <script>
                        alert('email id already registered');
                        window.location.href='index.php';
                    </script>
                ";
            }
            else{
                echo"
                    <script>
                        alert('Contact Number already registered');
                        window.location.href='index.php';
                    </script>
                ";
            }
        }
        else{
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $query = "INSERT INTO `registered_users`(`name`, `inst_name`, `inst_regdno`, `cont_no`, `email`, `gender`, `branch_stream`, `password`) VALUES ('$_POST[name]','$_POST[inst_name]','$_POST[inst_regdno]','$_POST[cont_no]','$_POST[email]','$_POST[gender]','$_POST[branch_stream]','$password')";
            if(mysqli_query($con,$query)){
                echo"
                    <script>
                        alert('User Registration Successful');
                        window.location.href='index.php';
                    </script>
                ";
            }
            else{
                echo"
                    <script>
                        alert('Cannot Run Query');
                        window.location.href='index.php';
                    </script>
                ";
            }
        }
    }
    else
    {
        echo"
            <script>
                alert('Cannot Run Query');
                window.location.href='index.php';
            </script>
        ";
    }
}

?>