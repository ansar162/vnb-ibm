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
$qry = "Select * from loan_master where acc='Open'";
//$qry = "SELECT * FROM `loan_master` WHERE id >14000";
$loanList = dbFetch($qry);
echo "Balance fixing for Loan Accounts master and transaction about to start for a total of ".mysql_num_rows($loanList)." records.<br>";

while ($row = mysql_fetch_assoc($loanList)) {
//if($row['id']==12806){
	$balance = 0;
	$deposits =0;
	$qry = "SELECT * FROM transactions where category = 'L' and account_id =".$row["id"]." ORDER BY tdate, id";
	$loanTransactionsRow = dbFetch($qry);
	if ($loanTransactionsRow != 0){
		while ($transRow = mysql_fetch_assoc($loanTransactionsRow)) {
			$balance = ($balance + $transRow['credit']) - $transRow['debit'];
			$deposits = $deposits + $transRow['debit'];
			$qry = "UPDATE transactions SET balance = ".$balance." where id =".$transRow["id"];
			if (!dbUpdate($qry)){
				echo "Error in transactions.";
				exit;
			}
		}
	}
	$qry = "UPDATE loan_master SET closingbal = ".$balance." , amtdep = ".$deposits." where id =".$row["id"];
		if (!dbUpdate($qry)){
			echo "Error in master.";
			exit;
		}
   // echo $row["id"]." - Completed.<br>";
//}
}
echo "Process successfully Completed.<br>";
?>