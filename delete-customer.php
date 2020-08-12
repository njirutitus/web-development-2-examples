<?php
    include('conn.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM customers WHERE id=:id";
        $STH = $DBH->prepare($sql);
        $STH->bindParam(':id',$id);
        try{
            $STH->execute();
            $_SESSION['success'] = "Customer Deleted Successfully";
            header('location: customers.php');
        }
        catch(PDOExpection $e){
            $_SESSION['error'] =  $e->getMessage();
        }
    }