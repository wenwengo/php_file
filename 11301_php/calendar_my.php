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
            justify-content: space-around;                
            align-items: center;           
            flex-direction: row;           
            flex-wrap: wrap;

            width:380px;
            height: 90%;            
            background-color: lightblue;
            margin:auto;

        }

        .flex-container-header{
            width:380px;
            display:flex;
            flex-wrap:wrap;
            justify-content: center;
        }

        .flex-item{
            width: 300px;
            height: 300px;
            background-color: pink;

           
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .flex-item-hide{
            /* 透明度為0=透明100% */
            opacity: 0;
        }

    </style>


</head>
<body>
<h2 style='width:384px;text-align:center'>萬年曆</h2>

<?php 
$month=(isset($_GET['month']))?$_GET['month']:date("m");    
$year=(isset($_GET['year']))?$_GET['year']:date("Y");

$firstDay=strtotime(date("$year-$month-1"));//取當月首日
$firstWeekStartDay=date("w",$firstDay); //取當月首日禮拜幾值
$days=date("t",$firstDay);              //取當月共有幾日
$lastDay=strtotime(date("Y-$month-$days")); //當月月底的完整日期時間戮

$days=[];
for($i=0;$i<42;$i++){
    $diff=$i-$firstWeekStartDay; //diff=是當月的哪一日(負值為前月，超越$lastDa為下個月)

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
     <a href="calendar_my.php?year=<?=$prev_year;?>&month=<?=$prev;?>">上一個月</a>

 </div>
 <div class="nav" style="text-align: center;">

     <?=$year;?>年 <?=$month;?>月
 </div>
 <div class="nav" style="text-align: right;">
     <a href="calendar_my.php?year=<?=$next_year;?>&month=<?=$next;?>">下一個月</a>

 </div>
</div>

<!-- start container -->
<div class="container">

<?php

  
        //start  flex-container-header (星期列)
        echo "<div class='flex-container-header'>";
            echo "<div class='item-header'>日</div>";
            echo "<div class='item-header'>一</div>";
            echo "<div class='item-header'>二</div>";
            echo "<div class='item-header'>三</div>";
            echo "<div class='item-header'>四</div>";
            echo "<div class='item-header'>五</div>";
            echo "<div class='item-header'>六</div>";      
        echo "</div>";
        //end  flex-container-header


$countitem=1;
echo "";

foreach($days as $day){
    $format=explode("-",$day)[2];  //炸開並獨取day,存入$format[]
    $w=date("w",strtotime($day)); //w=週0~6
    // echo $w;
    if($w==0 || $w==6){             //週六、日

        echo "<div class='item holiday'>$format</div>";
    }else{                          //週一~週五

        echo "<div class='item'>";
        echo "<div class='date'>$format</div>";
        echo "</div>";
    }
    echo $countitem;
    $countitem++;
}
echo "</div>";

?>
    
</div>
<!-- container end -->

</body>
</html>