<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$MonthlyCalendar=[];
$MonthTotalDays=date("t", $firstWeekStartDay);  // 月總天數
$DayIsWeek=strtotime(date("Y-$month-$countDay"));//當日是週幾

$birthday='1974-4-1';
$today=date("Y-m-d");
$days=[];
for($i=0;$i<42;$i++){
    $days[]=date("d",strtotime("+$i days",strtotime($today)));
}


print_r($MonthlyCalendar);

?>
</body>
</html>