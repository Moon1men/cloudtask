<?php
    require_once __DIR__.'connect.php';

    <?php
    function generateCode($lenght=6)    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clen = strlen($chars) - 1;

        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
        }
    return $code;
    }

    if (isset($_POST['submit']))
    {
        $query = mysqli_query($conn,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($conn,$_POST['login'])."' LIMIT 1");
        $data = mysqli_fetch_assoc($query);

        if($data['password'] === md5(md5($_POST['password'])))
        {
            $hash = md5(generateCode(10));

            mysqli_query($conn, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

            setcookie("id", $data['user_id'], time()+60*60*24*30, "/");
            setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true);

            header("Location: index.html"); exit();
        }
    }
    else {
        echo "wrong pass";
    }

?>