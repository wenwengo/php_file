<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>

    <style>
        *{
            box-sizing: border-box;
        }

        .container{
            width: 80%;
            height: 90vh;
            background-color: #ccc;
            margin:auto;
        }

        .flex-container{
            display: flex;
            flex-direction: row;
            /* ↓此本容器內的子物件(不含孫物件)會相對於本容器，水平(視主軸方向而定)置中 */
            justify-content: space-around;
                /* ↓此本容器內的子物件(不含孫物件)會相對於本容器，垂直(視與主軸郵直的方向而定)置中 */
            align-items: center;
            /* ↓預設主軸為橫向。若column則主軸為直向 */
            flex-direction: row;
            /* ↓多行時換行 */
            flex-wrap: wrap;

            width: 80%;
            height: 90%;            
            background-color: lightblue;
            margin:auto;

        }

        .flex-item{
            width: 300px;
            height: 300px;
            background-color: pink;

            /* ↓用此三列容器轉為flexbox屬性後，可將容器內其子物件水平及垂直皆置中*/
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .flex-item-hide{
            /* 此容器內的子物件透明度為0 */
            opacity: 0;
        }

    </style>


</head>
<body>
<h2 style='width:384px;text-align:center'>萬年曆</h2>

<?php 
//$month=(isset($_GET['month']))?$_GET['month']:date("m");    
$month=$_GET['month']??date("m");

//$year=(isset($_GET['year']))?$_GET['year']:date("Y");
$year=$_GET['year']??date("Y");

$firstDay=strtotime(date("$year-$month-1"));
$firstWeekStartDay=date("w",$firstDay);
$days=date("t",$firstDay);
$lastDay=strtotime(date("Y-$month-$days"));

$days=[];
for($i=0;$i<42;$i++){
    $diff=$i-$firstWeekStartDay;
    $days[]=date("Y-m-d",strtotime("$diff days",$firstDay));
}

if($month-1<1){
    $prev=12;
    $prev_year=$year-1;
}else{
    $prev=$month-1;
    $prev_year=$year;
}

if($month+1>12){
    $next=1;
    $next_year=$year+1;

}else{
    $next=$month+1;
    $next_year=$year;
}

?>
<div style="width:384px;">
 <div class="nav" style="text-align: left;">
     <a href="calendar.php?year=<?=$prev_year;?>&month=<?=$prev;?>">上一個月</a>

 </div>
 <div class="nav" style="text-align: center;">

     <?=$year;?>年 <?=$month;?>月
 </div>
 <div class="nav" style="text-align: right;">
     <a href="calendar.php?year=<?=$next_year;?>&month=<?=$next;?>">下一個月</a>

 </div>
</div>

<!-- container start -->
<div class="container">

<?php
//星期列 flex-container
echo "<div class='flex-container' ";
echo "<div class='block-table'>";
echo "<div class='item-header'>日</div>";
echo "<div class='item-header'>一</div>";
echo "<div class='item-header'>二</div>";
echo "<div class='item-header'>三</div>";
echo "<div class='item-header'>四</div>";
echo "<div class='item-header'>五</div>";
echo "<div class='item-header'>六</div>";
echo "</div>";
//星期列 flex-container end

// echo "";

foreach($days as $day){
    $format=explode("-",$day)[2];
    $w=date("w",strtotime($day));
    if($w==0 || $w==6){

        echo "<div class='item holiday'>$format</div>";
    }else{

        echo "<div class='item'>";
        echo "<div class='date'>$format</div>";
        echo "</div>";
    }
}
echo "</div>";

?>
    
</div>
<!-- container end -->

</body>
</html>