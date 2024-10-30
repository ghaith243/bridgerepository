<?php
    include('../actions/autoload.act.php');

    $func = $_POST['func'];


    function del_customer(){
        $id = $_POST['id'];
        $con = new Customer();
        $con->del_customer($id);
    }
    function del_room(){
        $id = $_POST['id'];
        $con = new Admin();
        $con->del_room($id);
    }

    function del_reserv(){
        $id = $_POST['id'];
        $con = new Admin();
        $con->del_reserv($id);
    }

    switch ($func){
        case 'del_customer':
            del_customer();
            break;
        case 'del_room':
            del_room();
            break;
        case 'del_reserv':
            del_reserv();
            break;
    }