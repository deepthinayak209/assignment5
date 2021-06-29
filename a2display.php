<html>
<head>
    <title>a2Viewinformation</title>
</head>
<body>
    <h1>..................JSD FLIGHTS...................</h1>
    <h3>Thank you for choosing JSD Flights</h3>
    <h3>The cookie values are</h3>
    <h3>Name:<?php echo $_COOKIE["user_name"]; ?></h3>
    <h3>Seat:<?php echo $_COOKIE["seat"]; ?></h3>
    <h3>Food:<?php echo $_COOKIE["meal"]; ?></h3>
</body>
<?php
if(isset($_COOKIE['lastVisit']))
{
$visit = $_COOKIE['lastVisit'];
echo "Last Visited on : ".$visit;
}
else
echo "This is your first visit";
?>
</html>