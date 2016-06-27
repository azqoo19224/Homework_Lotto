
<!DOCTYPE html >
    <html>
    <head>
        <meta charset ="utf-8">
    </head>
    <body>
        <form method="post">
            輸入你下注的組數:
            <input type="number" name="num" value = "1"/>
             <input type="submit" name="btnOK" value = "OK"/>
             
        </form>
        <br>
        
    </body>
</html>
<?php
header("content-type: text/html; charset=utf-8");
session_start();
//按下OK後執行
if(isset($_POST["btnOK"])){
$_SESSION["n"] =$_POST["num"];
    Litt($_SESSION["n"]);

}

    
function Litt($x){
   $a =$x;
   $ok;
    for($z =1 ; $z <=$a ;$z++){
 
        echo "你的第".$z."組樂透號碼為:<br>";
        //宣告LOTTO陣列
        $Lotto = array('1','2','3','4','5','6','7','8','9',
                    '10','11','12','13','14','15','16','17','18','19',
                    '20','21','22','23','24','25','26','27','28','29',
                    '30','31','32','33','34','35','36','37','38','39',
                    '40','41','42','43','44','45','46','47','48');
                    
                    
//洗牌
        for($i=0; $i <48 ;$i++){
              $n= rand(0,47);
              $x = $Lotto[$n];
              $Lotto[$n] = $Lotto[$i];
              $Lotto[$i] = $x;
          }
//印出號碼
         for($i=0;$i<6;$i++){
             $ok[$i] = $Lotto[$i];
//複製號碼
        echo     $Lotto[$i],"  ";
//排序
        sort($ok);
       
    }
    echo "<br>由小到大為:<br>";
//印出排序後號碼
        for($i =0;$i <6; $i++){
             echo $ok[$i],"  ";
        }
    echo "<br><br>";
    }
   
    
}
?> 