<?php
function connectPDO($db_no=0)// ADMIN DATABASE
 {
   $db_no=0;
     $dbh='';

    $dbname = array("engagev1");
    $dbhost = array("chalkst-engage.cd1oc4bclwhk.ap-southeast-1.rds.amazonaws.com");
    $dbuser = array("chalk_rj_db");
    $dbpass = array("@QC$#.!pTy^%16");

   try {
     $dbh=new PDO('mysql:host='.$dbhost[$db_no].';dbname='.$dbname[$db_no], $dbuser[$db_no], $dbpass[$db_no]);
     return $dbh;
   } catch (Exception $e) {
     echo "Could not connect to server ";
     var_dump($e);
   }
     return $dbh;
 }// ADMIN DATABASE

$servername = "chalkst-engage.cd1oc4bclwhk.ap-southeast-1.rds.amazonaws.com";
$username = "shubham";
$password = "chalkstreet123";
$dbname = "engagev1";

 $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $dbh->prepare("SELECT topic,ques,option_1,option_2,option_3,option_4 FROM dc_questions where ques_id=831 ");
     $stmt->execute();
      ($v =$stmt->fetch(PDO::FETCH_ASSOC))
?>
