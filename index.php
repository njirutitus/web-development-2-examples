
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>First Page</title>
    </head>
    <body>
        <h1>Customer Registration Form</h1>
        <div>
            <?php
                if (isset($_SESSION['success'])){
                   echo "<p style='color: green'>".$_SESSION['success']."</p> ";
                   unset($_SESSION['success']);
                }
                if (isset($_SESSION['error'])){
                    echo "<p style='color: red'>".$_SESSION['success']."</p> ";
                    unset($_SESSION['error']);
                 }
            
            ?>
        </div>
        <form action="register.php" method="post">
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input name="firstname" maxlength="25" /></td>
                </tr>
                <tr>
                    <td>Sur Name</td>
                    <td><input type="text" name="surname" maxlength="25" required/></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" maxlength="25" required/></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" maxlength="25" required/></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="number" name="phone" maxlength="25" required/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" maxlength="25" required/></td>
                </tr>
            </table>
            <input type="submit" name="add" value="Add" value="1"/>
        </form>
        <p><a href="login.html?reffered=titus">Already Have an account</a></p> 
    </body>
</html>