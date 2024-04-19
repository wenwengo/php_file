<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩電腦選號沒有重覆號碼</title>
</head>

<body>
<h2>威力彩電腦選號沒有重覆號碼(利用while迴卷)</h2>
    <?php
        for($i=0;$i<6;$i++){
            echo rand (1,38);
            echo ".";

        }
    ?>
<hr>
    <?php
        $lotoo=[];
        while(count($lotto)<6){ //共抽6顆
            $tmp=rand(1,38);
            if(!in_array($tmp,$lotto)){ //in_array(拿來比對是否重覆的值,要被比對的陣列),前方加!號代表傳回false才執行
                $lotto[]=$tmp;//將$tmp的值，加入陣列$lotto[]中

            }

        }    
        
         echo join(",",$lotto);//將陣列轉字串，join()
?>


</body>

</html>