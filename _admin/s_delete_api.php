<?php
    include '../my_funcs.php';

    connect_db();
    session_start();

    if(!isset($_SESSION['admin_id'])){
        header("Location: a_signin.php");
        exit;
    }

    if(isset($_REQUEST['id'])){
        $id = intval($_REQUEST['id']);
        $db->query("DELETE FROM student WHERE ID = $id");
    }

    header("Location: a_manage_students.php");
?>