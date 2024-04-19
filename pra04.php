<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>**畫矩形</title>
</head>
<body>
 <img src="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/basic-lesson-02-003.png" alt="">   
 
 <hr>
 <hr>
<h2>倒正三角形</h2>
<?php
    $starnum=5;   
    for($i=$starnum;$i>0;$i--){ //run 5列
        
        
         //設定該列，畫空白的數量
        for($k=0;$k<($starnum-$i);$k++){
            echo "&nbsp;";
           
        }

        //該列的星數由上一層的迴圈$i 
        for($j=($i*2)-1;$j>0;$j--){
            echo "*";            
        }
        echo "<br>";
    }
?>
<hr>
<h2>側倒的正三角形</h2>
<?php
$starsside=5; //正三角形的邊長
$row=$starsside*2-1;//側倒後的正三角，共有幾列 

for($j=0;$j<$row;$j++){
    if($j<$starsside){  //判斷是否過半(因為正三角：高等於下底。而此處以雙數遞增畫線，故直接挪用即為過半判斷值)
        $i=$j+1;
    }
    else{
        $i=$row-$j;
    }
    for($k=$i;$k>0;$k--){
        echo "*";
    }
    echo "<br>";
}
?>

<hr>
<h2>矩形框</h2>
<?php
    $stars=7;
    for($j=0;$j<$stars;$j++){

     // $num_right=$stars-1;//右邊線
    
      for($i=0;$i<$stars;$i++){
     	if($j==0||$i==0||$j==$stars-1||$i==$stars-1)//上邊線或左邊線或下邊線或右邊線或
     		echo "*";
     	else
     		echo "&ensp;";
        }
     	echo "<br>";
     }


?>
<hr>
<h2>內x矩形框</h2>
<?php
    $stars=7;  //邊長的星星數

    for($j=0;$j<$stars;$j++){ 

    //   $num_right=$stars-1;    //右邊線的值
    //   $num_slash=$stars-1-$j; //右斜線的值

    	for($i=0;$i<$stars;$i++){
    	if($j==0||$i==0||$i==($stars-1)||$j==($stars-1)||$i==$j||$i==$stars-1-$j)
    		echo "*";
    	else
    		echo "&ensp;";
        }
    	echo "<br>";
    }
?>
<hr>
<h2>矩內x矩形框(switch)</h2>
<?php
    $stars=7;  //邊長星星數
    for($j=0;$j<$stars;$j++){
      $num_right=$stars-1;    //右邊線的值
      $num_slash=$stars-1-$j; //右斜線的值
      
    	for($i=0;$i<$stars;$i++){
            if($j==0||$j==$stars-1) //上邊線或下邊線
                echo "*";
            else{
                switch($i){                    
                    case 0:             //左邊線
                    case ($j):          //左斜線
                    case ($num_right):  //右邊線
                    case ($num_slash):  //右斜線
                        echo "*";       
                        break;          
                    default:
    	                echo "&ensp;";  //
                        break;
                    }
            }


        }
    	echo "<br>";
    }
?>
<hr>

</body>
</html>