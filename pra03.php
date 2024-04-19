<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫星星</title>
   
    <style>
        
        /* 設定讓字元選字等寬字形 */
        *{
            font-family: 'Courier New',Courier, monospace;
        }

    </style>

</head>
<body>
    <img src="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/basic-lesson-02-003.png" width=35%   >
    <h2>直角三角形</h2>
    <?php


    for($i=0;$i<5;$i++){

        //該列的星數由上一層的迴圈$i 
        for($j=0;$j<=$i;$j++){
            echo "*";             
        }
        echo "<br>";

    }
    ?>
<hr>
    <h2>倒直角三角形</h2>
    <?php
    for($i=5;$i>0;$i--){
    

        for($j=0;$j<$i;$j++){
            echo "*";             
        }
        echo "<br>";
    }
    ?>
<hr>
<h2>直角三角形(例用變數控制星星數)</h2>
    <?php
    $stars=7; //*的列數

    for($i=0;$i<$stars;$i++){
        //該列的星數由上一層的迴圈$i 
        for($j=0;$j<=$i;$j++){
            echo "*";            
        }
        echo "<br>";
    }
    ?>
<hr>
<h2>倒直角三角形(例用變數控制星星數)</h2>
    <?php
    $stars=7;   //*的列數
    // （$stars*2）-1
    for($i=$stars;$i>0;$i--){
    

        for($j=0;$j<$i;$j++){
            echo "*";             
        }
        echo "<br>";
    }
    ?>
<hr>
<br>

待復習
<h2>正三角形</h2>
<?php
//畫半形空格 &nbsp; 夾p

$stars=5;   
    for($i=0;$i<$stars;$i++){

         //設定該列，畫空白的數量
        for($k=0;$k<($stars-$i-1);$k++){
            echo "&nbsp";
        }

        //該列的星數由上一層的迴圈$i 
        for($j=0;$j<($i*2)+1;$j++){
            echo "*";            
        }
        echo "<br>";
    }
?>
<hr>
<br>
待復習
<h2>菱形</h2>

<?php
$stars=9;
$myodd=($stars%2==0)?$stars+1:$stars; //確保列數為奇數，判斷$starts若為偶數,其值加1
$mid=(($myodd+1)/2)-1;//取中間值，尾端額外-1為$i是由0起啟值而非1故丟給迴圈使用前先減1

        for($i=0;$i<$stars;$i++){


             if($i<=$mid){  //菱形未畫過半時
                $tmp=$i;
             }else{         //菱形過半後
                $tmp--;
             }

              //設定該列，畫空白的數量
             for($k=0;$k<$mid-$tmp;$k++){
                 echo "&nbsp;";
             }
                       //設定該列，該列畫星顆數
             // 該列的星數由上一層的迴圈$i 
             for($j=0;$j<($tmp*2)+1;$j++){
                 echo "*";            
             }
             echo "<br>";
            }

         
    ?>
<hr>


    <?php


    ?>
<hr>




    <?php


    ?>
<hr>





</body>
</html>