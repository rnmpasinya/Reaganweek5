<?php
    $pdo = new PDO("mysql:host=localhost;dbname=todolist;charset=utf8","root","");

    if(isset($_POST['submit']) ){
        $name = $_POST['name'];
        $sth = $pdo->prepare("INSERT INTO todos (Title) VALUES (:Title)");
        $sth->bindValue(':Title', $Title, PDO::PARAM_STR);
        $sth->execute();
    }elseif(isset($_POST['delete'])){
        $id = $_POST['ItemNum'];
        $sth = $pdo->prepare("delete from todos where ItemNum = :ItemNum");
        $sth->bindValue(':ItemNum', $ItemNum, PDO::PARAM_INT);
        $sth->execute();
    }
?>