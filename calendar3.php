<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            border:3px double blue;
        }
        td{
            padding:5px 10px;
            border:1px solid lightgreen;
        }
    </style>    
</head>
<body>
    <?php
    // 月尾有整行空白時，會提前完成表格版

        $month=4;
        $firstDay=strtotime(date("Y-$month-1"));        // 起始日期 
        $firstWeekStartDay=date("w",$firstDay);         // 第一天星期幾。 "w" 0~6 ; "N" 1~7               
        echo date("Y")."年".$month."月份第一週的開始是第".$firstWeekStartDay."日";
        echo $MonthTotalDays=date("t", $firstWeekStartDay);  // 月總天數
        

        echo "<table>
        <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
        </tr>";                
         
        $countDay=1;    //印出日 用
        $DayIsWeek=strtotime(date("Y-$month-$countDay"));//當日是週幾
        
        for ($i=0;$i<6;$i++) {
            echo "<tr>";
            for ($j=0;$j<7;$j++) {
               
                if (($i==0 && $j<$firstWeekStartDay) || $countDay>$MonthTotalDays) {   //前空白或後空白
                    echo "<td>&nbsp;</td>"; 
                } else {
                    echo "<td>$countDay</td>"; 
                    $countDay++;
                }
                
            }
            echo "</tr>";
            if( $countDay>$MonthTotalDays){ //若下一整列皆為空白，提前結束畫表格 
                break;
            }
        }    
        echo "</table>";

        
    ?>
</body>
</html>