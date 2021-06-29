<html>

<head>
    <title>a4delete</title>
    <style>
    a {
        color: white;
        padding: 15px;
        font-size: 25px;
        text-decoration: none;
    }
    </style>
</head>
<body>
<nav style="background-color:#333;">
    <center>
        <a href="a4.php">Create</a>
        <a href="a4update.php">update</a>
        <a href="#">delete</a>
        <a href="a4display.php">display</a>
        
    </center>
</nav>

 <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2">UPDATE</th>
            </tr>
        



            <tr>
                <th>Passport No</th>
                <td><input type="number" name="passno" maxlength="10" required></td>
            </tr>
            
            <tr>
                <td colspan="2" align="center"><input type="submit" value="DELETE" name="submit"></td>
            </tr>
        </table>
</form>
<?php
if(isset($_POST["submit"])){
    $mysql = new mysqli("localhost","root","","ass");
    If(!$mysql) 
    die("error");
    
    $passno=$_POST['passno'];
    
    $check="SELECT * FROM register WHERE passno = '$passno'";
    $result = $mysql->query($check);
    $row=$result->fetch_array();
    if($row[0] > 1) {
              $res="DELETE FROM register WHERE passno='$passno'";
              $mysql->query($res);
              echo "deleted successfully";
        }
    
    else
    {
            echo "Passport Number Not exist<br/>";
    }
}

?>
</body>
</html>