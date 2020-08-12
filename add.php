<?php
    include("conn.php");

    if(isset($_POST['add'])){
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $title = $_POST['title'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = 'INSERT INTO customers(firstname,surname,title,address,email,phone) VALUES(?,?,?,?,?,?)';
        $STH = $DBH->prepare($sql);
        $STH->bindParam(1,$firstname);
        $STH->bindParam(2,$surname);
        $STH->bindParam(3,$title);
        $STH->bindParam(4,$address);
        $STH->bindParam(5,$email);
        $STH->bindParam(6,$phone);
        
        try{
            $STH->execute();
            $_SESSION['success'] = "Customer Added Successfully";
            header('location: customers.php');
        }
        catch(PDOExpection $e){
            $_SESSION['error'] =  $e->getMessage();
        }
    }
    else{
        echo "<h1>You forgot to click Register Button<h1>";
    }

?>