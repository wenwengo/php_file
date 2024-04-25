<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//另一種作法

// 取得當前的年份和月份
$year = date("Y");
$month = date("n");

// 設定月曆的起始日期
$firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
echo "firstDayOfMonth=$firstDayOfMonth";

// 取得月曆中第一天是星期幾
$firstDayOfWeek = date("w", $firstDayOfMonth);

// 取得月曆中的總天數
$totalDaysInMonth = date("t", $firstDayOfMonth);

// 輸出 HTML 表格的開始標籤
echo "<table border='1'>";
echo "<tr><th colspan='7'>" . date("F Y", $firstDayOfMonth) . "</th></tr>";
echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";

// 初始化計數器
$dayCounter = 1;

// 開始迴圈，繪製月曆中的每一天
for ($i = 0; $i < 6; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) {
        if (($i == 0 && $j < $firstDayOfWeek) || $dayCounter > $totalDaysInMonth) {
            echo "<td>&nbsp;</td>"; // 在月曆中的空白處填入空白
        } else {
            echo "<td>" . $dayCounter . "</td>"; // 輸出日期
            $dayCounter++;
        }
    }
    echo "</tr>";
}

// 輸出 HTML 表格的結束標籤
echo "</table>";
?>
</body>
</html>