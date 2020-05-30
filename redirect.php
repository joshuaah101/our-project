<?php
    require "init.php";
    session_start();
    $tracking_id = $_SESSION['tracking_id'];

    $auth = $eed->customQuery("SELECT * FROM user_login WHERE username = '{$tracking_id}'");
    $run_auth = $auth->fetchAll(PDO::FETCH_OBJ);
    foreach($run_auth as $auth):
        $access_code = $auth->is_admin;
    endforeach;
    if($access_code == "1"){
        $_SESSION['user_role'] = "Admin";
        echo "<script>
                location.href = 'users/admin.php?dashboard'
             </script>";
    }elseif($access_code == "0"){
        $_SESSION['user_role'] = "Instructor";
        echo "<script>
                location.href = 'users/instructor.php?dashboard'
             </script>";
    }elseif($access_code == "11"){
        $_SESSION['user_role'] = "Super Admin";
        echo "<script>
                location.href = 'users/super-admin.php?dashboard'
             </script>";
    }else{
         echo "<script>
                location.href = 'index.php'
             </script>";
    }
?>