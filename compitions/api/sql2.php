<?php
error_reporting(0);
$sql = "select * from userinfo";




$host='localhost:3306';
$username='freelearntoday_evoke19_1';
$password=',{?NPg2[tCTC';
$dbase='freelearntoday_evoke19';

//Establishing database connection

$conn = mysqli_connect($host,$username,$password,$dbase);
if($conn){
    $res = mysqli_query($conn,$sql);
    if($res){
        echo'
        <table class="userinfo">
            <tr>
                <th>Full Name</th>
                <th>Institution</th>
                <th>Email-id</th>
                <th>Contact Number</th>
                <th>Abstract File</th>
                <th>Theme</th>
            </tr>';
        while($row = $res->fetch_assoc()){
            echo '
                <tr>
                    <td>';echo $row['fullname'];echo '</td>
                    <td>';echo $row['institution'];echo '</td>
                    <td>';echo $row['emailid'];echo '</td>
                    <td>';echo $row['contactnum'];echo '</td>
                    <td><a href="';echo $row['pathtofile'];echo '">Abstract File</a></td>
                    <td>';echo $row['theme'];echo '</td>
                </tr>
            ';
        }
        echo '</table>';
    }
}
else{
    echo "Server connection failed";
}
mysqli_close($conn)
?>
<style>
    @import url('https://fonts.googleapis.com/css?family=Ubuntu:400,700');
    body{
        margin: 0px;
        padding: 10px;
        background: #f3f3f3;
        font-family: 'Ubuntu', sans-serif;
    }
    .userinfo{
        width: 100vw;
        text-align: justify;
    }
    .userinfo th{
        padding: 5px;
    }
    .userinfo tr{
        background: #ccc;
    }
    .userinfo td{
        padding: 5px;
    }
</style>