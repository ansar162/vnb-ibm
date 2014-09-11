<?php
// 360 = 6 min.
set_time_limit (360);

function dbFetch($qry){
	$connection = mysql_connect('localhost','root','ansar');
	if(!mysql_select_db('ibmdb_new', $connection)) {
		echo ('Failed to select database Please make sure that the database name provided is correct<br>');
		exit;
	}

	$result = mysql_query($qry,$connection);   
	if(!$result || mysql_num_rows($result) <= 0){
		echo ("Query error.<br>".$qry."<br>");
		return 0;
	}
	return $result;
}
function dbUpdate($qry){
	$connection = mysql_connect('localhost','root','ansar');
	if(!mysql_select_db('ibmdb_new', $connection)) {
		echo ('Failed to select database Please make sure that the database name provided is correct<br>');
		exit;
	}
	if(!mysql_query( $qry ,$connection)){
		echo ("Error inserting data to the table".$qry."<br>");
        return false;
    }      
    return true;
}

//start main
$qry = "Select * from account_master where operatable ='YES'";
$savingList = dbFetch($qry);
echo "Balance fixing for Saving Accounts master and transaction about to start for a total of ".mysql_num_rows($savingList)." records.<br>";

while ($row = mysql_fetch_assoc($savingList)) {
//if($row['id']==4931){
	$balance = 0;
	$qry = "SELECT * FROM transactions where category in ('S','P') and account_id =".$row["id"]." ORDER BY tdate, id";
	$savingTransactionsRow = dbFetch($qry);
	if ($savingTransactionsRow != 0){
		while ($transRow = mysql_fetch_assoc($savingTransactionsRow)) {
			$balance = ($balance + $transRow['credit']) - $transRow['debit'];
			$qry = "UPDATE transactions SET balance = ".$balance." where id =".$transRow["id"];
			if (!dbUpdate($qry)){
				echo "Error in transactions.";
				exit;
			}
		}
	}
	$qry = "UPDATE account_master SET closingbal = ".$balance." where id =".$row["id"];
		if (!dbUpdate($qry)){
			echo "Error in master.";
			exit;
		}
   // echo $row["id"]." - Completed.<br>";
//}
}
echo "Process successfully Completed.<br>";
?>