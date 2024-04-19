<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>變數</title>
</head>
<body>

<h3>給定一個成績數字，判斷是否及格(60)分</h3>
<?php
$score=70;
echo "成績為".$score."分";
echo "<br>";

//在if判斷式外先宣告存放結果的變數 $result 為空字串
$result='';
if($score>=60){
    $result='及格';
    }
else{
        $result='不及格';
    }

echo "判斷為".$result

?>
<hr>

?>

<h2>簡單迴圈練習</h2>
<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>
<?php
$n=100;
for($i=1;$i<$n;$i=$i+2){
    echo $i;
    echo ",";
}
echo "<hr>";
$n=25;
for($i=1;$i<$n;$i++){
    echo $i*10;
    echo ",";
}


echo "<hr>";
$count=0;

for($i=3;$i<100;$i++){
    $check=true;

    //sqrt(數值)，指回傳該數值的平方根
    for($j=2;$j<=sqrt($i);$j++){
         if($i%$j==0){
            $check=false;
         }
         $count++;
    }
    
    if($check==true){
        echo $i.",";
    }
    $count++;
}

echo "迴圈次數:".$count;

?>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>

//題目3 3,5,7,11,13,17...,97
//此題先解羅輯,都是質數
//先排除到偶數（%2==0)
//讓每個數除以（不包含1及自己本身），用2~本身減1的數，確認會不會被整除，
//因每個數不會被大於數字本身半數的數整理
//另據說每個數不會被大於數字被開根號後的數
<?php


?>
</body>
</html>