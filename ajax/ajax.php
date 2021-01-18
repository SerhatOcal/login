<?php
session_start();
include $_SERVER["DOCUMENT_ROOT"]. "\database\dbcon.php";

if (isset($_POST["username"]) && isset($_POST["password"])){

    $username = isset($_POST["username"]) ? trim(htmlspecialchars($_POST["username"])) : "";
    $password = isset($_POST["password"]) ? trim(htmlspecialchars($_POST["password"])) : "";
    $password = hash("sha512", $password);

    $status     = true;
    $messages   = array();

    if(!isset($username) || empty($username)){
        $status = false;
        $messages[] = "Kullanıcı adı yada şifre boş olamaz!";
        echo json_encode(array('status' => $status, 'messages' => $messages));
    }

    if(!isset($password) || empty($password)){
        $status = false;
        $messages[] = "Kullanıcı adı yada şifre boş olamaz!";
        echo json_encode(array('status' => $status, 'messages' => $messages));
    }

    if ($status){
        $query = $db->prepare("SELECT * FROM users WHERE USERNAME = :USERNAME AND PASSWORD = :PASSWORD");
        $query->execute(['USERNAME' => $username, 'PASSWORD' => $password]);

        if($query->rowCount() > 0){
            $row = $query->fetch(PDO::FETCH_OBJ);
            $_SESSION["username"]   = $row->USERNAME;
            $_SESSION["userid"]     = $row->ID;
            $status = true;
            $messages[] = "Giriş Başarılı";
            echo json_encode(array('status' => $status, 'messages' => $messages));
        }else{
            $status = false;
            $messages[] = "Kullanıcı adı yada şifre hatalı!";
            echo json_encode(array('status' => $status, 'messages' => $messages));
        }
    }
    exit;
}

if($_POST["dataGetir"]){

    $query = $db->prepare("TRUNCATE TABLE passwords")->execute();
    $data = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+";
    $passwords = array();

    for($i = 1; $i <= 10; $i++){
        $password = "";
        while(strlen($password) < 10) {
            $password .= substr($data,(rand() % strlen($data)),1);
        }

        $query = $db->prepare("INSERT INTO passwords SET PASSWORD = :PASSWORD");
        $query->execute(['PASSWORD' => $password]);

        if ($query->rowCount() > 0){
            array_push($passwords, $password);
            $status = true;
            $messages[] = "İşlem Başarılı";
        }else{
            $status = false;
            $messages[] = "Hata! Lütfen tekrar deneyiniz !";
        }
    }

    if ($status){
        echo json_encode(array('status' => $status, 'messages' => $messages, 'password' => $passwords));
    }else{
        $status = false;
        $messages[] = "Hata! Lütfen tekrar deneyiniz !";
        echo json_encode(array('status' => $status, 'messages' => $messages));
    }
}




