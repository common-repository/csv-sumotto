<?php
global $wpdb;
$csv_sumotto_bd = $wpdb->prefix.csv_sumotto;
if(isset($_POST['csv_sumotto_add'])){csv_sumotto_add_table();}
if(isset($_POST['csv_sumotto_save'])){csv_sumotto_edit_table();}
if(isset($_POST['csv_sumotto_delete'])){csv_sumotto_delete_table();}
if(isset($_GET['edit_table_id'])){
	$id = $_GET['edit_table_id'];
	$table = $wpdb->get_row("SELECT * FROM $csv_sumotto_bd WHERE `id` = $id ");
	if(isset($_GET['message'])){if($_GET['message']=='1'){$messege='<div class="updated below-h2" id="message"><p>'.__('Table updated.','csv_sumotto').'</p></div>';}}
	include("csv_sumotto_edit_table.php");
	include("csv_sumotto_redactor.php");
} else {
	if(isset($_GET['message'])){
		if($_GET['message']=='1'){$messege='<div class="updated below-h2" id="message"><p>'.__('Table added.','csv_sumotto').'</p></div>';}
		elseif($_GET['message']=='2'){$messege='<div class="updated below-h2" id="message"><p>'.__('Table delete.','csv_sumotto').'</p></div>';}
	};
	$tables_list = $wpdb->get_results("SELECT * FROM $csv_sumotto_bd");
	include("csv_sumotto_all_tables.php");
}
?>