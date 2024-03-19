<?php
// session_start(); // start session
// var_dump($_SESSION );
echo '<pre>';
// var_dump($_COOKIE); //first method to get cookie as a array
// var_dump($_SERVER['HTTP_COOKIE']); // second method to get cookie as a  string(297)
// var_dump($_SERVER['query_string']); // array  data 
// var_dump($_GET); // stringdata
echo '</pre>';
/* ******************************** */
// database
// mysqli -- connect with only mysql db
// mysql -- connect with any db
// pdo
// $con = new PDO('mysql:host=localhost;dbname=manufia_winter_training','root','m12345@m_m');
// var_dump($con); //object(PDO)#1 (0) { } -- true connected ya mo
// var_dump($result); //bool(true) -- ot is connected ya mo 
// $query = 'SELECT * FROM users';
// $sql = $con->prepare($query); //prepare the query
// $result = $sql->execute(); // execute the query and returns true or false

// $users = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($sql->fetchAll(PDO::FETCH_ASSOC));
// echo '</pre>';
$con = new PDO('mysql:host=localhost;dbname=manufia_winter_training','root','m12345@m_m');
function getTableFromDB($table, $con){
$query = "SELECT * FROM $table" ;
$sql = $con->prepare($query); //prepare the query
$sql->execute(); // execute the query and returns true or false
return $sql->fetchAll(PDO::FETCH_ASSOC);
}
$users = getTableFromDB('users', $con);
$product = getTableFromDB('product', $con);
?>


<!-- <table border="3" align="center" background-color="#f0f0f"> -->
<link rel="stylesheet" type="text/css" href="index.css">
<!--import css page   -->
<h2>USERS TABLE YA: "MO" </h2>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
            <th>created_at</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user){ ?>
        <tr>
            <td> <?= $user['id']   ?> </td>
            <td> <?= $user['user_name']   ?> </td>

            <td> <?= $user['email']   ?> </td>
            <td> <?= $user['user_password']   ?> </td>

            <td> <?= $user['created_at']   ?> </td>
        </tr>
        <?php } ?>
    </tbody </table>


    <h2>product TABLE YA: "MO" </h2>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>produuct_name</th>
                <th>quantity</th>
                <th>price</th>
                <th>category_id</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $p){ ?>
            <tr>
                <td> <?= $p['id']   ?> </td>
                <td> <?= $p['produuct_name']   ?> </td>
                <td> <?= $p['quantity']   ?> </td>
                <td> <?= $p['price']   ?> </td>
                <td> <?= $p['category_id']   ?> </td>
            </tr>
            <?php } ?>
        </tbody </table>