<html>
<h2>巢狀結構</h2>

<?php
    $show=false;

    for($i=0;$i<10;$i++){

        
            if($i>5 && $show==false){           
                echo "執行一半 了...";
                echo"<p>";
                $show=true;
            }
        echo $i*10;
        echo"<br>";
    }
    fal
?>

</html>