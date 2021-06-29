<html>

<head>
    <title>a5deposit</title>
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
        <a href="#">Deposit</a>
        <a href="a5withdraw.php">Withdraw</a>
        <a href="a5balance_enq.php">Balance Enquiry</a>
    </center>
</nav>

 <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2">DEPOSIT</th>
            </tr>
            <tr>
                <th>Account No</th>
                <td><input type="number" name="accno" maxlength="10" required></td>
            </tr>
            <tr>
                <th>Enter deposit amount</th>
                <td><input type="number" name="balance" required></td>
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
    $balance=$_POST['balance'];
    
    $check="SELECT * FROM Customer WHERE accno = '$accno'";
    $result = $mysql->query($check);
    $row=$result->fetch_array();
    if($row[0] > 1) {
        $bal=$row[5];
        $amount=$balance+$bal;
        $res="update Customer set balance='$amount' where accno='$accno'";
        $mysql->query($res);
        echo "Deposited successfully";
    }
    else
    {
            echo "Account Number Not exist<br/>";
    }
    }

?>
</body>
</html>