<?php
//require '/private/database-access.php';
$user='root' ;
$pass='' ;
try{
	$db = new PDO('mysql:host=localhost;dbname=my_apron', $user, $pass);
   // $db = new PDO('mysql:host='.$host.';dbname='.$dbase, $user, $pd);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo 'Unable to Connect';
    echo $e->getMessage();
    exit;
    
}

?>