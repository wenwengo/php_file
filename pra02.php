<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習2024-04-15</title>
    <style>
        table{
            border-collapse: collapse;
        }


         td{
               border: 1px solid #ccc;  
               padding: 3px 6px; 
               font-size: 18px;                            
                      
         }

         #grid table{
        border-collapse: collapse;
      }

      #grid td{
          border:1px solid gray;
          padding: 3px 6px;
          font-size:18px;
      }

      #grid tr:nth-child(1) td,
      
      #grid td:nth-child(1){
          background:black;
          color:#CCC;
      }         
    </style>
</head>

<body>
<h1>九九乘法表-簡單</h1>
<?php
for($i=1;$i<=9;$i++){
    echo "1×".$i."=".(1*$i);

        if($i<9) 
            echo "," ;
        else
            echo "<br>";
}

for($i=1;$i<=9;$i++){
    echo "2×".$i."=".(2*$i);

        if($i<9) 
            echo "," ;
        else
            echo "<br>";
}

for($i=1;$i<=9;$i++){
    echo "3×".$i."=".(3*$i);

        if($i<9) 
            echo "," ;
        else
            echo "<br>";
}

for($i=1;$i<=9;$i++){
    echo "4×".$i."=".(4*$i);

        if($i<9) 
            echo "," ;
        else
            echo "<br>";
}
//

for($i=1;$i<=9;$i++){
    echo "5×".$i."=".(5*$i);

        if($i<9) 
            echo "," ;
        else
            echo "<br>";
}

for($i=1;$i<=9;$i++){
    echo "6×".$i."=".(6*$i);

        if($i<9) 
            echo "," ;
        else
            echo "<br>";
}

for($i=1;$i<=9;$i++){
    echo "7×".$i."=".(7*$i);

        if($i<9) 
            echo "," ;
        else
            echo "<br>";
}

for($i=1;$i<=9;$i++){
    echo "8×".$i."=".(8*$i);

        if($i<9) 
            echo "," ;
        else
            echo "<br>";
}

for($i=1;$i<=9;$i++){
    echo "9×".$i."=".(9*$i);

        if($i<9) 
            echo "," ;
        else
            echo "<br>";
}
?>

<hr>
<h1>九九乘法表-巢狀迴圈</h1>

<?php

// 設被乘數為j
for($j=1;$j<=9;$j++){

        //設乘數為i
        for($i=1;$i<=9;$i++){
            echo $j."×".$i."=".$j*$i;
        
                if($i<9) 
                    echo "," ;
                else
                    echo "<br>";
        

        }
    }
?>
<hr>
<h1>九九乘法表-以表格的方式呈現</h1>
<?php
    echo "<table>";


    // 設被乘數為j
    for($j=1;$j<=9;$j++){
        echo "<tr>";

        //設乘數為i
        for($i=1;$i<=9;$i++){
            echo "<td>";
            echo $j."×".$i."=".$j*$i;
            echo "</td>" ;              

        }
        echo "</tr>";
    }    
    echo "</table>";
?>
<hr>
<h1>九九乘法表-以交叉計算結果呈現</h1>

<?php
   
 //以grid用css用來設定標題列的表格底色
 echo "<table id='grid'>";
    // 九九乘法表的 被乘數為j+1
    for($j=0;$j<=9;$j++){
        echo "<tr>";

        //九九乘法表的 乘數為i+1
        for($i=0;$i<=9;$i++){

            echo "<td>";

                //設定內表之結果處數值
                if($j*$i!=0)
                    echo $j*$i;

                //設定上方橫列之標題值（只有被乘數的index為0時,$j）
                elseif($j==0&&$i!=0)
                    echo $i;

                //設定左方列之標題值（只有乘數的index為0時,$i）
                elseif($j!=0&&$i==0)
                    echo $j;

                //最左上方該標題格
                else
                    echo "";

             echo "</td>" ;              

        }
        echo "</tr>";
    }    
    echo "</table>";
?>
<hr>

<h2>九九乘法表-階梯式表格（teacher）</h2>
<?php
echo "<table id='grid'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if(($j==0 && $i==0) || ($j!=0 && $i>$j)){
            echo " ";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo ($j * $i);
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<hr>
<h2>九九乘法表-以階梯式表格呈現（My）</h2>

<?php
   
 //以grid用css用來設定標題列的表格底色
 echo "<table id='grid'>";
    // 九九乘法表的 被乘數為j+1
    for($j=0;$j<=9;$j++){
        echo "<tr>";

        //九九乘法表的 乘數為i+1
        for($i=0;$i<=9;$i++){

            echo "<td>";

                //設定內表之結果處數值
                if($j*$i!=0){

                    //設定上方三角形處的重複結果，不顯示
                    if($i<=$j){
                        echo $j*$i;
                    }
                }
                
                //設定上方橫列之標題值（只有被乘數的index為0時,$j）
                elseif($j==0&&$i!=0){
                    echo $i;
                }

                //設定左方列之標題值（只有乘數的index為0時,$i）
                elseif($j!=0&&$i==0)
                    echo $j;

                //最左上方該標題格
                else
                    echo "";

             echo "</td>" ;              

        }
        echo "</tr>";
    }    
    echo "</table>";
?>
<p>
    ※乘法有“可變性”（加法亦同），被乘數及乘數互換時所得結果不變。
</p>
<hr>

<br><br>(此題待復習)
<h2>尋找字元(使用Whlie迴圈) </h2>
註：數字、英文字母或中文字皆算1個字<br>
<ul>
    <li>給定一個字串句子</li>
    <li>給定一個單字或字母</li>
    <li>尋找相符的內容</li>
    <li>印出尋找到的單字或字母所在句子中的位置</li>
</ul>
<p>
    例：從德黑蘭選擇由自家領土發射飛彈和無人機，到提前預告鄰國，種種跡象說明伊朗的最終目的是讓行動以失敗收場，既保全了伊朗在中東的顏面，同時避免和以色列陷入全面開戰的困境。
</p>
<?php

//被搜甌的文章
$str="例：從德黑蘭選擇由自家領土發射飛彈和無人機，到提前預告鄰國，種種跡象說明伊朗的最終目的是讓行動以失敗收場，既保全了伊朗在中東的顏面，同時避免和以色列陷入全面開戰的困境。";
$target="提前預告"; //欲搜尋的關鍵字
$position=0; //


//使用mb_substr函式 其為多國語系（勿用 substr()因其是舊的函式，其遇到中文字會被判別為3個字元）
//計算字串長度的方法

while ($target!=mb_substr($str,$position,mb_strlen($target))) {
    // echo "p=".$position;
    // echo ",substr=".mb_substr($str,$position);
    // echo "<br>";
    $position++;
}
echo $target."的位置在".$position;
echo "<br>";
echo mb_strpos($str,$target);
?>




</body>
</html>