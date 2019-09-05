<?php
 $i=0;
include 'connect_access.php';

if($_GET['accn']==-1)
  $accn="";
else
  $accn=$_GET['accn'];


		//$q3="SELECT Notes,dt FROM notes WHERE UserId='$uid'";
	if($uid<=2)
      $q3="Select * From notes WHERE UserId=$uid";
   else
   	$q3="Select * From notes1 WHERE UserId=$uid";
     $result = $acc_conn->query($q3);
     //echo $result->num_rows;


    // $result = $dbcon->query($q3);
 		 // if ($result->num_rows > 0)
   // $temp="SELECT COUNT(*) INTO '$c' FROM notes WHERE UserId='$uid'"
// $row1 = $result->fetch(PDO::FETCH_NUM);
// echo $row1[0];

    // if(odbc_num_rows($result)>0)
    // if ($result->num_rows > 0)
 		 // {
          while($row = $result->fetch()) 
          {
            if($i==0)
            {
      echo "<table style='border-style:dashed;border-width:2px;border-color:#7E9FBF;'><tr><td>";
      echo "<table cellpadding='10' width='600'>";
    }
    		    $d=$row["Notes"];
            $dt=$row["dt"];
       // $row = $result->fetch();
       //  $d = $row["Notes"];
       //  $dt=$row["dt"];
            echo "<tr><td><ul><li>".$d."</li></ul></td><td>".$dt."</td><td><a href='Notes.php?accn=$d&user=$uid'>Access</a></td></tr>";
            $i++;
 		  	  }
      echo "</table>";
      echo "</td></tr></table>";
 		// }


?>