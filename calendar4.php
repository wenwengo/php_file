<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆</title>
    <style>
        .calendar {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .day {
            width: calc(100% / 7);
            border: 1px solid #ccc;
            padding: 10px;
            box-sizing: border-box;
            text-align: center;
        }
    </style>
</head>
<body>
    <ul class="calendar">
        <?php
        // 取得當月的天數
        $days_in_month = date('t');
        
        // 取得當月的第一天是星期幾
        $first_day_of_month = date('N', strtotime(date('Y-m-01')));
        
        // 建立月曆
        for ($i = 1; $i <= $first_day_of_month - 1; $i++) {
            echo '<li class="day"></li>';
        }
        
        for ($day = 1; $day <= $days_in_month; $day++) {
            echo '<li class="day">' . $day . '</li>';
            
            // 如果已經是星期日，換行
            if (date('N', strtotime(date('Y-m-' . $day))) == 7) {
                echo '</ul><ul class="calendar">';
            }
        }
        ?>
    </ul>
</body>
</html>