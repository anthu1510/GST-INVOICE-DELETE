<?php
require_once ('config/dbconnect.php');

$inv_no = $_POST['inv_no'];

$sql = "SELECT GROUP_CONCAT(DISTINCT(dc_no)) as dc_no FROM `invoice_detail` WHERE inv_no in('$inv_no') GROUP BY inv_no";

$res = mysqli_query($con,$sql);
$row = mysqli_fetch_object($res);

$dc_no = $row->dc_no;

$sql_select_inv = "SELECT * FROM `invoice_detail` WHERE inv_no in('$inv_no')";

$res_1 = mysqli_query($con,$sql_select_inv);
$row_1 = mysqli_fetch_object($res_1);

$inv_ledger_id = $row_1->inv_id;

$sql_delete_1 ="DELETE FROM `invoice_master` WHERE inv_no in('$inv_no')";
$sql_delete_2 ="DELETE FROM `invoice_detail` WHERE inv_no in('$inv_no')";

$sql_delete_3 ="DELETE FROM `delivery_master` WHERE `inv_no` in ('$dc_no')";
$sql_delete_4 ="DELETE FROM `delivery_detail` WHERE `inv_no` in ('$dc_no')";
$sql_delete_5 ="DELETE FROM `invoice_detail` where dc_no in('$dc_no')";

$sql_delete_6 = "DELETE FROM `ledger` WHERE `trans_id` = '$inv_ledger_id'";


$sqls = array($sql_delete_1,$sql_delete_2,$sql_delete_3,$sql_delete_4,$sql_delete_5,$sql_delete_6);
//echo "<pre>";
//print_r($sqls)
//

foreach ($sqls as $v){
   mysqli_query($con,$v);
}

echo 'All are Deleted....!!!!';

/*for ($i=1; $i<=6; $i++){
   $myres =  "sql_delete_".$i;
   $delete_sql = '$'.$myres;
    //mysqli_query($con,$delete_sql);
}*/


