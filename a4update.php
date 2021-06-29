<html>

<head>
    <title>a4update</title>
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
        <a href="#">update</a>
        <a href="a4delete.php">delete</a>
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
                <th>First Name</th>
                <td><input type="text" name="fname" required></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" required></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><textarea name="address" required></textarea></td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td><input type="text" name="nation" required></td>
            </tr>
           

            <tr>
            <th>gender</th>
            <td><input type="radio" name="gender" value="male">male
            <input type="radio" name="gender" value="female">female
            </td>
            </tr>






            <tr>
                <td colspan="2" align="center"><input type="submit" value="UPDATE" name="submit"></td>
            </tr>
        </table>
</form>
<?php
if(isset($_POST["submit"])){
    $mysql = new mysqli("localhost","root","","ass");
    If(!$mysql) 
    die("error");
    
    $passno=$_POST['passno'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $nation=$_POST['nation'];
    $gender=$_POST['gender'];
    
    $check="SELECT * FROM register WHERE passno = '$passno'";
    $result = $mysql->query($check);
    $row=$result->fetch_array();
    if($row[0] > 1) {
              $res="update register set fname='$fname',lname='$lname',address='$address',nation='$nation',gender='$gender' where passno='$passno'";
              $mysql->query($res);
              echo "updated successfully";
        }
    
    else
    {
            echo "Passport Number Not exist<br/>";
    }
}

?>
</body>
</html>