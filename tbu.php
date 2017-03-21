<?php 

$filename = "images/googleCompany.png";

$imgData = file_get_contents($filename);
$size = getimagesize($filename);
mysql_connect("localhost", "root", "");
mysql_select_db ("tms");
// mysqli 
// $link = mysqli_connect("localhost", $username, $password,$dbname); 
// $sql = sprintf("INSERT INTO subjects
//     (image)
//     VALUES
//     ('%s')",
//     **
//      * For all mysqli_ functions below, the syntax is:
//      * mysqli_whartever($link, $functionContents); 
//      **
    
//     mysql_real_escape_string($imgData)
    
    
//     );


$sql = sprintf("UPDATE `companies` SET image=('%s') WHERE `company_name` LIKE '%_gog'", mysql_real_escape_string($imgData));
//$sql = "SELECT * FROM `companies` WHERE company_name LIKE '%gog'";
//$sql = "SELECT * FROM `companies` WHERE company_name LIKE '%gog' ";


//echo $sql;

$result = mysql_query($sql);

//echo $result;

if(!$result){
         die(mysql_error());
    }

 ?>