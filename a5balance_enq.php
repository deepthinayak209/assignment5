<html>

<head>
    <title>a5view</title>
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
        <a href="a5.php">Create</a>
        <a href="a5deposit.php">Deposit</a>
        <a href="a5withdraw.php">Withdraw</a>
        <a href="#">Balance Enquiry</a>
    </center>
</nav>

 <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2">BALANCE ENQUIRY</th>
            </tr>
            <tr>
                <th>Account No</th>
                <td><input type="number" name="accno" maxlength="10" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT" name="submit"></td>
            </tr>
        </table>
</form>
<?php
if(isset($_POST["submit"])){
    $mysql = new mysqli("localhost","root","","ass");
    If(!$mysql) 
    die("error");
    
    $accno=$_POST['accno'];
    
    $check="SELECT * FROM Customer WHERE accno = '$accno'";
    $result = $mysql->query($check);
    $row=$result->fetch_array();
    if($row[0] > 1) {
        
        echo "Account Number: <b>$row[1]</b><br>";
        echo "Name: <b>$row[2]</b><br>";
        echo "Your Balance : <b>$row[5]</b><br>";
    }
    else
    {
            echo "Account Number Not exist<br/>";
    }
    }

?>
</body>
</html>