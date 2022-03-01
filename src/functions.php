<?php
session_start();
if(empty($_POST['todo'])){

}else{
if(isset($_POST['add'])){
    if(isset($_SESSION['todo'])){
        array_push($_SESSION['todo'],$_POST['todo']);
    }else{
        $_SESSION['todo']=array($_POST['todo']);
    }
}
}


if (isset($_POST['editButton'])){
    $_SESSION['value']=$_SESSION['todo'][$_POST['editValue']];
    unset($_SESSION['todo'][$_POST['editValue']]);
    if(isset($_SESSION['value'])){
        $_SESSION['flag']=1;
    }else{
        $_SESSION['flag']=0;
    }
}
if(isset($_POST['add'])){
    $_SESSION['flag']=0;
}


if(isset($_POST['deleteButton'])){
    unset($_SESSION['todo'][$_POST['editValue']]);
}


if(isset($_POST['checked'])){
    
        $_SESSION['comp']=$_SESSION['todo'][$_POST['editValue']];
        unset($_SESSION['todo'][$_POST['editValue']]);
        if(isset($_SESSION['completed'])){
        array_push($_SESSION['completed'],$_SESSION['comp']);
        }else{
            $_SESSION['completed']=array($_POST['comp']);
        }
}


if(isset($_POST['delete'])){
    // $_SESSION['temp']=$_SESSION['completed'][$_POST['eval']];
    unset($_SESSION['completed'][$_POST['eval']]);
}

header('location:/todo.php');

?>