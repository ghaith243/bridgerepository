<?php
    include('../actions/autoload.act.php');
    if (isset($_POST['login_admin'])) {

        $user = $_POST['user'];
        $pass = $_POST['password'];

        $log = new Authentication();
        $login = $log->login_admins($user, $pass);

        session_start();
        $_SESSION['admin_id'] = $login['admin_id'];
        $_SESSION['user_name'] = $login['user_name'];
        header("location: ../Views/dash_admin.php");

    }
