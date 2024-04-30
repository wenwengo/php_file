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
        $month=4;
        $firstDay=strtotime(date("Y-$month-1"));        // 起始日期 
        echo strtotime(date("Y-$month-1"))."<br>";
        echo strtotime(date(2024-4-1))."<br>";
        echo date("Y-$month-1")."<br>";

        $firstWeekStartDay=date("w",$firstDay);         // 第一天星期幾。 "w" 0~6 ; "N" 1~7               
        echo date("Y")."年".$month."月份第一週的開始是第".$firstWeekStartDay."日";
        $MonthTotalDays=date("t", $firstWeekStartDay);  // 月總天數

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
        for ($y=0;$y<6;$y++) {
            echo "<tr>";
            for ($x=0;$x<7;$x++) {
                echo "<td>";
                if (($y==0 && $x<$firstWeekStartDay) || $countDay>$MonthTotalDays) {   //前空白或後空白
                    echo "&nbsp;"; 
                } else {
                    echo $countDay; 
                    $countDay++;
                }
                echo "</td>";
            }
            echo "</tr>";
        }    
        echo "</table>";

        // 以先djsfdsfa fsajfaoeeee吃吃
    ?>
</body>
</html>