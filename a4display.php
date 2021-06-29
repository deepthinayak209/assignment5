<!DOCTYPE html>
<html>
<head>
<title>a4display</title>
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
<table border='1' cellpadding="20px" align="center"> 
<tr>
                <th colspan="6">DISPLAY</th>
            </tr>     
    <tr>
        <th>Passport number</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Address</th>
        <th>Nation</th>
        <th>Gender</th>
    </tr>


<?php
$mysql = new mysqli("localhost","root","","ass");
if ($mysql->connect_error) {
  die("Connection failed: " . $mysql->connect_error);
}

$sql = "SELECT passno, fname, lname,address, nation, gender FROM register";
$result = $mysql->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $row['passno']; ?></td>
        <td ><?php echo $row['fname']; ?></td>
        <td><?php echo $row['lname']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td ><?php echo $row['nation']; ?></td>
        <td ><?php echo $row['gender']; ?></td>
    </tr>
 
<?php
  }
} else {
  echo "no results";
}

$mysql->close();
?>

</table>    

</body>
</html>