<?php
    require "init.php";
    session_start();
    $is_admin = $_SESSION['is_admin'];
    $tracking_id = $_SESSION['tracking_id'];

    $auth = $eed->customQuery("SELECT * FROM user_login WHERE username = '{$tracking_id}'");
    $run_auth = $auth->fetchAll(PDO::FETCH_OBJ);
    foreach($run_auth as $auth):
        $access_code = $auth->is_admin;
    endforeach;
    if($access_code == $is_admin){
        echo "<script>
                location.href = 'users/admin.php?dashboard'
             </script>";
    }else{
        echo "<script>
                location.href = 'users/instructor.php?dashboard'
             </script>";
    }
?>