<?php 

include_once 'conn.php';

$sql = 'SELECT * FROM subjects WHERE 1';
$result = mysql_query($sql);

if(mysql_num_rows($result) > 0) {
	$i = 0;
    try{
    while($row = mysql_fetch_assoc($result)) {
        $img_link = $row['image_link'];
        $subject_name = $row['subject_name'];
        $description = $row['description'];


 echo json_encode(array("result"=>$result));
       /* $outArray = [$img_link, $subject_name, $description];*/

       $outArray=array('image'=>$img_link,'subjectname'=>$subject_name,'description'=>$description);

echo json_encode($outArray);

    }
}
	catch (Exception $e){
    	echo 'error';
	    }
}
?>
