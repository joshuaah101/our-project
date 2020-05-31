<?php  
    require "../init.php";
    $response = null;
    if(isset($_POST)){
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        $uid = $_POST['uid'];

        $password = $eed->customQuery("SELECT password FROM users WHERE uid = '{$uid}' LIMIT 1");
        $password = $password->fetchAll(PDO::FETCH_OBJ);
        foreach($password as $p):
        $existing_password = $p->password;
        endforeach;
        
        if($existing_password != $current_password){
            $response .= 300;
        }elseif($new_password != $confirm_password){
            $response .= 400;
        }else{
            $update1 = $eed->customQuery("UPDATE users SET password = '{$new_password}' WHERE uid = '{$uid}'");
            $update2 = $eed->customQuery("UPDATE user_login SET password = '{$new_password}' WHERE uid = '{$uid}'");
            if($update1 && $update2){
                $response .= 200;
            }else{
                return false;
            }
        }
        echo $response;
    }
?>