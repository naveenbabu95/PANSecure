<?php
// include 'connect.php';
include 'connect_access.php';

$uid=$_GET['user'];

if(isset($_POST['ss']))
{
	$note=$_POST['note'];

	// $qz="INSERT INTO notes (UserId,Notes,dt) VALUES ($uid,$note,CURRENT_DATE())";
	// $objExec = odbc_exec($acc_conn, $qz);
// 	$count = $acc_conn->exec("INSERT INTO notes(UserId,Notes) VALUES ($uid,$note)");
// echo $count;
	 $date=date("d-m-Y");
	 if($uid<=2)
$count = $acc_conn->exec("INSERT INTO notes(UserId,Notes,dt) VALUES ('$uid','$note','$date')");
else
	$count = $acc_conn->exec("INSERT INTO notes1(UserId,Notes,dt) VALUES ('$uid','$note','$date')");


	//$acc_conn->query($qz);
	// $result=odbc_exec($acc_conn,$qz) or die ("result error ".odbc_error().'-'.odbc_errormsg());
	// odbc_fetch_row($result);


	// access_conn->query($qz);
//	odbc_exec($acc_conn,$qz);
	 // if(!mysqli_query($dbcon,$qz))
  //    { 
  //     die('error has occured');
  //    }
}

if(isset($_POST['sd']))
{
	$note=$_POST['note'];
	if($uid<=2)
	$count = $acc_conn->exec("DELETE FROM notes WHERE Notes='$note'");
else
	$count = $acc_conn->exec("DELETE FROM notes1 WHERE Notes='$note'");


// 	$qz="DELETE FROM notes WHERE Notes='$note'";
// //	$r=$dbcon->query($qz);
// 	odbc_exec($acc_conn,$qz);

	 // if(!mysqli_query($dbcon,$qz))
  //    { 
  //     die('error has occured');
  //    }
}

?>