
<?php 
  include('conn.php');
  if(isset($_GET['id'])){
      $id = $_GET['id'];

      $STH = $DBH->prepare("Select * from customers where id=:id");
      $STH->bindParam(':id',$id);
      $STH->execute();
      $STH->setFetchMode(PDO::FETCH_ASSOC);
      $row = $STH->fetch();
  }
  if(isset($_POST['edit'])){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $title = $_POST['title'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $id = $_POST['id'];

    $sql = "update customers set firstname=:firstname,
    surname=:surname,title=:title,address=:address,
    email=:email,phone=:phone WHERE id=:id";
    $STH= $DBH->prepare($sql);
    $STH->bindParam(':firstname',$firstname);
    $STH->bindParam(':surname',$surname);
    $STH->bindParam(':title',$title);
    $STH->bindParam(':address',$address);
    $STH->bindParam(':email',$email);
    $STH->bindParam(':phone',$phone);
    $STH->bindParam(':id',$id);

    try{
        $STH->execute();
        $_SESSION['success'] = "Customer Updated Successfully";
        header('location: customers.php');
    }
    catch(PDOExpection $e){
        $_SESSION['error'] =  $e->getMessage();
    }
    

  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>First Page</title>
    </head>
    <body>
        <h1>EDIT CUSTOMER <?php echo $row['id']; ?></h1>
        <form action="" method="post">
            <input type="hidden" name ="id" value="<?php echo $row['id']; ?>">
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input name="firstname" maxlength="25" value="<?php echo $row['firstname']; ?>"/></td>
                </tr>
                <tr>
                    <td>Sur Name</td>
                    <td><input type="text" name="surname" maxlength="25" value="<?php echo $row['surname']; ?>" required/></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" value="<?php echo $row['title']; ?>" maxlength="25" required/></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" maxlength="25" value="<?php echo $row['address']; ?>" required/></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="number" name="phone" value="<?php echo $row['phone']; ?>" maxlength="25" required/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" maxlength="25" value="<?php echo $row['email']; ?>" required/></td>
                </tr>
            </table>
            <input type="submit" name="edit" value="Update" value="1"/>
        </form> 
    </body>
</html>