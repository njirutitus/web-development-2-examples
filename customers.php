<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>Customers</title>
    </head>
    <body>
        <div>
            <a href='add-customer.html'>Add New Customer</a>
        </div>
        <div>
            <table>
                <thead>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <?php
                    include('conn.php');
                    $STH  = $DBH->query('select * from customers');
                    $STH->setFetchMode(PDO::FETCH_ASSOC);
                    $count = 1;
                    while($row = $STH->fetch()){   
                        echo "<tr>
                            <td>$count</td>
                            <td>".$row['firstname']."</td>
                            <td>".$row['surname']."</td>
                            <td>".$row['address']."</td>
                            <td>".$row['phone']."</td>
                            <td>".$row['email']."</td>
                            <td><a href='edit-customer.php?action=edit&id=".$row['id']."'>Edit</a><a href='delete-customer.php?action=delete&id=".$row['id']."'>delete</a></td>
                        </tr>";
                        $count++;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>