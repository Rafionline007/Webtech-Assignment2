<!DOCTYPE html>
<html>
    <head>
        <title>Counter</title>
        
    </head>
<body>
        <hr>
        <p id="p01">Character Frequency Count</p>
        <hr>
       <table id="table01">
            <tr>
                <td>Character</td>
                <td>Count</td>
             </tr>
             <?php
                $str= $_POST['tex'];
                $arr=str_split($str);
                $atr=array();
                foreach($arr as $p)
                {   
                   if(in_array($p,$atr))
                   {
                       
                   }
                   else
                   {
                    echo"<tr>";
                    echo"<td>";
                    echo $p;
                    echo"</td>";
                    echo"<td>";
                    echo array_count_values($arr)[$p];
                    echo"</td>";
                    echo "</tr>";                  
                    array_push($atr,$p);
                   }
                     
                }
                ?>
        </table>
        <a cls="btn" id="button" href="index.php">Input Another String</a>     
        <br>
        <br>
        <br>
        <hr>
        <p id="p01">Word Frequency Count</p>
        <hr>
        <table id="table01">
            <tr>
                <td>Word</td>
                <td>Count</td>
             </tr>
             <?php
                $str= $_POST['tex'];              
                $arr =  explode(" ", $str);
                $at=array();
                foreach($arr as $w)
                {   
                    if(in_array($w,$at))
                   {
                       
                   }
                   else
                   {
                    echo"<tr>";
                    echo"<td>";
                    echo $w;
                    echo"</td>";
                    echo"<td>";
                    echo array_count_values($arr)[$w];
                    echo"</td>";
                    echo "</tr>";                  
                    array_push($at,$w);
                   }
                     
                }
                ?>
        </table>
        <br>
        <a cls="btn" id="button" href="index.php">Input Another String</a>     
            

</body>
</html>