<?php

$sql = "CREATE TABLE aavegame (
    userid INT(255) NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(50),
    institution VARCHAR(150),
    emailid VARCHAR(50),
    contactnum1 VARCHAR(100),
    -- pathtofile TEXT,
    fullNameMember2 VARCHAR(50),
    contactnum2 VARCHAR(100),
    fullNameMember3 VARCHAR(50),
    contactnum3 VARCHAR(100),
    leaderid INT(255),
    theme VARCHAR(50),
    pathtofile VARCHAR(100),
    PRIMARY KEY(userid)
)";


// $sql = "DROP TABLE `aavegame`";


$host='localhost:3306';
$username='iedctkmc_evokeUR';
$password='Ev0k#2k19';
$dbase='iedctkmc_evokeDB';


//Establishing database connection

$conn = mysqli_connect($host,$username,$password,$dbase);

if($conn){
    echo "Successfully connected to server";
}
else{
    echo "Failed";
}

print(mysqli_query($conn,$sql));


?>
