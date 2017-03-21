<?php 

$link = mysql_connect("localhost", "root", "");
mysql_select_db("tms");
$sql = "SELECT image FROM testblob WHERE image_id=0";
$result = mysql_query("$sql");
//header("Content-type: image/jpeg");
if(mysql_num_rows($result) > 0) {
	while($row = mysql_fetch_assoc($result)) {
        $img_link = $row['image'];
    }
}

//echo $img_link;
$fresult =  mysql_result($result, 0);
echo '<img src="data:image/jpeg;base64,'.base64_encode($img_link).'"/>';
mysql_close($link);



 ?>