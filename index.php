<?php
require './vendor/autoload.php';
$redis = new Predis\Client();
$cachedEntry = $redis->get('actor');

if($cachedEntry){
    echo 'From Redis Cache<br>';
    echo $cachedEntry;
    exit();
}
else{
    //connect database
    $conn = new mysqli('127.0.0.1','root','','redis');
    //select data from actor
    $sql = 'select first_name, last_name from actor;';
    $result = $conn->query($sql);
    echo 'From Database <br>';
    $temp ='';
    //display data
    while($row = $result->fetch_assoc()){
        echo $row['first_name']. ' ';
        echo $row['last_name'].'<br>';
        $temp .= $row['first_name'].' '. $row['last_name'].'<br>';
    }
    //set data on redis
    $redis->set('actor',$temp);
    exit();
}


?>