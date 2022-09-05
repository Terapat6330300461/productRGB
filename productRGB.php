<!DOCTYPE html>
<html>
<body>
<?php
    $products = 
    array(  array("0001","THE SIMS 4","฿405.59","img/messageImage_1658207679677.jpg"),
            array("0002","THE SIMS 4 - GET TO WORK","฿766.49","img/messageImage_1658207688772.jpg"),
            array("0003","THE SIMS 4 - GET TOGETHER","฿405.69","img/messageImage_1658207694661.jpg"),
            array("0004","THE SIMS 4 - CITY LIVING","฿676.29","img/messageImage_1658207706421.jpg"),
            array("0005","THE SIMS 4 - CATS AND DOGS","฿676.29","img/messageImage_1658207713397.jpg"),
            array("0006","THE SIMS 4 - SEASONS","฿766.49","img/messageImage_1658207719014.jpg"),
            array("0007","THE SIMS 4 - ISLAND LIVING","฿586.09","img/messageImage_1658207723764.jpg"),
            array("0008","THE SIMS 4 - COTTAGE LIVING","฿992.09","img/messageImage_1658207728104.jpg"),
            array("0009","THE SIMS 4 - VAMPIRES","฿811.69","img/messageImage_1658207733177.jpg"),
            array("0010","THE SIMS 4 - REALM OF MAGIC","฿789.09","img/messageImage_1658207737809.jpg"),
    );

    echo '<table width"100%" border="1">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>price</th>
      <th>img</th>
    </tr>
    ';

    for($i=0;$i<10;$i++){
        $r = rand(0,256);
        $g = rand(0,256);
        $b = rand(0,256);
        echo "<tr>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][0]."</td>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][1]."</td>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][2]."</td>
        <td ><img src=".$products[$i][3]." width='230' height='298.5' /></td>
        </tr>";  
    }
   
    echo '</table>';
?>

</body>
</html>
