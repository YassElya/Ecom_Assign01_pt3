<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of items</title>
    </head>
    <?php
    include 'View/includes/style.php';
    include 'View/includes/navbar.php';
    ?>
<body>
   <h1><center>User List</center></h1>
   <table>
    <th>Username</th>
    <th>Email</th>
<?php
            foreach($data['user'] as $user){
                echo "<tr><td>$user->username</td><td>$user->email</td><td><a href='/user/update/$user->id'>Edit</a></td></tr>";
            }
        ?>
        </table>
    </body>
</html>
<style>
   table, th, td, tr{
    border:solid black 0.1rem;
    text-align:center;
    margin: auto;
   }
</style>