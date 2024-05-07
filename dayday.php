<?php
// 農曆年份陣列，從1900到2100
$lunarYears = array(
    1900, 1901, 1902, 1903, 1904, 1905, 1906, 1907, 1908, 1909, 1910, // 省略部分年份
    );

// 農曆月份
$lunarMonths = array(
    "正月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "冬月", "臘月"
);

// 農曆日
$lunarDays = array(
    "初一", "初二", "初三", "初四", "初五", "初六", "初七", "初八", "初九", "初十",
    "十一", "十二", "十三", "十四", "十五", "十六", "十七", "十八", "十九", "二十",
    "廿一", "廿二", "廿三", "廿四", "廿五", "廿六", "廿七", "廿八", "廿九", "三十"
);

// 節氣
$solarTerms = array(
    "立春", "雨水", "驚蟄", "春分", "清明", "穀雨", "立夏", "小滿", "芒種", "夏至", "小暑", "大暑",
    "立秋", "處暑", "白露", "秋分", "寒露", "霜降", "立冬", "小雪", "大雪", "冬至", "小寒", "大寒"
);

// 以公曆1900年為基準的農曆年份偏移量
$baseYear = 1900;
// 公曆1900年1月31日的農曆信息
$baseLunarYear = 0;
$baseLunarMonth = 11;
$baseLunarDay = 1;

// 公曆日期轉換為農曆
function solarToLunar($year, $month, $day) {
    global $lunarYears, $lunarMonths, $lunarDays, $baseYear, $baseLunarYear, $baseLunarMonth, $baseLunarDay;

    $lunarYear = $baseLunarYear;
    $lunarMonth = $baseLunarMonth;
    $lunarDay = $baseLunarDay;
    
    // TODO: 農曆日期計算邏輯
    
    return array($lunarYears[$lunarYear], $lunarMonths[$lunarMonth], $lunarDays[$lunarDay]);
}

// 獲取節氣
function getSolarTerm($year, $month, $day) {
    global $solarTerms;

    // TODO: 根據公曆日期計算節氣

    return $solarTerms[0];
}

// 測試代碼
list($lunarYear, $lunarMonth, $lunarDay) = solarToLunar(2024, 5, 3);
echo "農曆日期：$lunarYear 年 $lunarMonth $lunarDay" . PHP_EOL;

$solarTerm = getSolarTerm(2024, 5, 3);
echo "節氣：$solarTerm" . PHP_EOL;
?>