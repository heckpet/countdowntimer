<html>
<head>
<meta http-equiv="refresh" content="300" >
<style>
body {
background-color: #556677;
}
</style>
<link rel="stylesheet" type="text/css" href="cd.css" media="screen" />
</head>
<body>
<p><p>
<?php
$startDate = new DateTime( 'tomorrow' );    //intialize start date
$endDate = new DateTime( '2020-12-31' );    //initialize end date
$holiday = array('2019-12-19','2019-12-20','2019-12-23','2019-12-24','2019-12-25','2019-12-26','2019-12-27','2019-12-30','2019-12-31','2020-01-01','2020-04-10','2020-04-13','2020-05-01','2020-05-21','2020-06-01','2020-06-11','2020-10-03','2020-12-25','2020-12-26','2020-12-24','2020-12-31','2020-01-02','2020-01-03','2020-11-19','2020-11-20','2020-11-23','2020-11-24','2020-11-25','2020-11-26','2020-11-27','2020-11-30','2020-12-01','2020-12-02','2020-12-03','2020-12-04','2020-12-07','2020-12-08','2020-12-09','2020-12-10','2020-12-11','2020-12-14','2020-12-15','2020-12-16','2020-12-17','2020-12-18','2020-12-21','2020-12-22','2020-12-23','2020-12-28','2020-12-29','2020-12-30');  //this is assumed list of holiday
$interval = new DateInterval('P1D');    // set the interval as 1 day
$daterange = new DatePeriod($startDate, $interval ,$endDate);
foreach($daterange as $date){
if($date->format("N") <6 AND !in_array($date->format("Y-m-d"),$holiday))
$result[] = $date->format("Y-m-d");
}
#echo "<pre>";print_r($result);

$anzahl= count ($result);
echo "<div id='demotext' style='font-size:200px; padding: 40px; text-align:center'>  <b> $anzahl </b></div>";
echo "<div id='demotext' style='font-size:100px; text-align:center'>working days left</div>";
?>

<div id='demotext' style='font-size:40px; padding: 10px; text-align:center'>(today not included)</div>
</body>
</html>
