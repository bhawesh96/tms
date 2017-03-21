<?php 

include_once 'conn.php';

$sql = 'SELECT * FROM subjects WHERE 1';
$result = mysql_query($sql);

$finalres = array();
while($res = mysql_fetch_assoc($result)){



array_push($finalres,array(
 "imgLink"=>$res['image_link'],
 "SubjectName"=>$res['subject_name'],
 "Description"=>$res['description']
 )
 );
}
 
 echo json_encode(array("result"=>$finalres));
 

?>
