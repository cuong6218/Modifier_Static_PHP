<?php
    include ('User.php');
    include ('UserManager.php');
    // include ('data.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $subname = $_POST['subname'];
        $name = $_POST['name'];
        $birth = $_POST['birth'];
        $address = $_POST['address'];
        $job = $_POST['job'];
    
        $user1 = new User($id, $subname, $name, $birth, $address, $job);
        $group1 = new Group('data.json');
        
        
        if (isset($_POST['register'])){
            $group1->register($user1);
        }
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, tr, th{
        border: 1px solid black;
    }
</style>
<body>
    <form method="post">
        <input type="text" name="id" placeholder="type your id"/>
        <input type="text" name="subname" placeholder="type your subname"/>
        <input type="text" name="name" placeholder="type your name"/>
        <input type="text" name="birth" placeholder="type your date of birth"/>
        <input type="text" name="address" placeholder="type your address"/>
        <input type="text" name="job" placeholder="type your job"/>
        <input type="submit" name="login" value="Login"/>
        <input type="submit" name="register" value="Register"/>
    </form>

    <h2>List User</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Subname</th>
            <th>Name</th>
            <th>Birth of date</th>
            <th>Address</th>
            <th>Job</th>
        </tr>
        <?php $group1->displayData();  ?>
    </table>
</body>
</html>