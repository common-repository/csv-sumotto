<?php
/*
Plugin Name: CSV SumoTTo
Plugin URI: http://www.csv.sumotto.ru
Description: The plugin allows you to place a table from a CSV file on your site.
Version: 1.0
Author: Sigalin Kirill
*/
/*  Copyright 2013  Kirill Sigalin  (email :sumotto@yandex.ru)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
add_shortcode (get_option('csv_sumotto_shortcode_name'), 'csv_sumotto_display_table');
add_action('init','csv_sumotto_textdomain');
function csv_sumotto_textdomain(){
     if(function_exists('load_plugin_textdomain')){load_plugin_textdomain('csv_sumotto',false,dirname(plugin_basename(__FILE__)).'/language/');}
}
function csv_sumotto_enqueue_style(){
	wp_register_style('csv-sumotto-style',plugins_url('/css/csv-sumotto-style.css',__FILE__));
	wp_enqueue_style('csv-sumotto-style');
}
function csv_sumotto_enqueue_script(){
	if(isset($_GET['edit_table_id'])){
		wp_register_script('csv-sumotto-script',plugins_url('/js/redactor.js',__FILE__),'','',true);
		wp_enqueue_script('csv-sumotto-script');
	}
}
add_action('admin_menu','csv_sumotto_admin_menu');
function csv_sumotto_admin_menu(){
	$table_page=add_menu_page(__('Tables','csv_sumotto'),__('Tables','csv_sumotto'),8,'csv_sumotto','csv_sumotto_tables',plugins_url('images/icon.png',__FILE__).'" height="18px" width="18px',27.7);
	$all_page=add_submenu_page('csv_sumotto',__('All Tables','csv_sumotto'),__('All Tables','csv_sumotto'),8,'csv_sumotto','csv_sumotto_tables');
	$add_page=add_submenu_page('csv_sumotto',__('Add New','csv_sumotto'),__('Add New','csv_sumotto'),8,'csv_sumotto_add_table_menu','csv_sumotto_add_table_menu');
	$settings_page=add_submenu_page('options-general.php',__('CSV SumoTTo settings','csv_sumotto'),'CSV SumoTTo',8,'csv_sumotto_settings','csv_sumotto_settings');
	add_action('admin_print_styles-'.$table_page,'csv_sumotto_enqueue_style');
	add_action('admin_print_styles-'.$all_page,'csv_sumotto_enqueue_style');
	add_action('admin_print_styles-'.$add_page,'csv_sumotto_enqueue_style');
	add_action('admin_print_styles-'.$settings_page,'csv_sumotto_enqueue_style');
	add_action('admin_print_scripts-'.$all_page,'csv_sumotto_enqueue_script');
}
function csv_sumotto_tables(){ include('csv_sumotto_tables.php');}
function csv_sumotto_settings(){ include('csv_sumotto_settings.php');}
function csv_sumotto_add_table_menu(){ include('csv_sumotto_add_table.php');}
register_activation_hook(__FILE__,'csv_sumotto_install');
function csv_sumotto_install(){
	global $wpdb;
	$csv_sumotto_bd=$wpdb->prefix.csv_sumotto;
	$sql = "CREATE TABLE IF NOT EXISTS ".$csv_sumotto_bd." (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`url` varchar(250) NOT NULL,
				`title` varchar(250) NOT NULL,
				`name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
				`description` text NOT NULL,
				`attributes` text NOT NULL,
				PRIMARY KEY (`id`)
				)";
	$wpdb->query($sql);
	
	add_option('csv_sumotto_shortcode_name','csv','','no');
	add_option('csv_sumotto_utf','1','','no');
}
function csv_sumotto_utf($str){
	if(get_option('csv_sumotto_utf')=='1'){
		$str=iconv("CP1251", "UTF-8",$str);
	}
	return $str;
}
class csv_sumotto_attributes {
	var $style,$table,$caption,$col,$tr,$td,$td_none;
	function Values($values){	
		$attributes = explode('&',$values);
		$this->style=$attributes[1];
		$this->table=$attributes[0];
		$this->caption=$attributes[2];
		$this->col=$attributes[4];
		$this->tr=$attributes[3];
		$this->td=$attributes[5];	
	}
	function Tr_list(){
		$tr_array= explode('*',$this->tr);
		for($c=0;$c<=count($tr_array)-1; $c++){
			$tr = explode('#',$tr_array[$c]);
			$tr_list[$tr[0]] = $tr[1];
		}
		return $tr_list;
	}
	function Tr_get($id){
		$tr=$this->Tr_list();
		if(!empty($tr[$id])){$tr_style = 'style="'.$tr[$id].'"';}
		return $tr_style;
	}
	function Col_list(){
		$col_array = explode('*',$this->col);
		for($c=0; $c<=count($col_array)-1; $c++){
			$col = explode('#',$col_array[$c]);
			$col_list[$col[0]] = $col[1];
		}
		return $col_list;
	}
	function Col_get($id){
		$col=$this->Col_list();
		if(!empty($col[$id])){$col_style = 'style="'.$col[$id].'"';}
		return $col_style;
	}
	function Td_list(){
		$td_array=explode('*',$this->td);
		for($c=0;$c<count($td_array)-1; $c++){
			$td=explode('#',$td_array[$c]);
			$td_list[$td[0]] = array(rowSpan=>$td[1],colSpan=>$td[2],style=>$td[3]);
		}
		return $td_list;
	}
	function Td_get($adres){
		$td=$this->Td_list();	
		if(isset($td[$adres])){
			if(!empty($td[$adres]['rowSpan'])){
				$row='rowspan="'.$td[$adres]['rowSpan'].'"';
			}
			if(!empty($td[$adres]['colSpan'])){
				$col=' colspan="'.$td[$adres]['colSpan'].'"';
			}
			if(!empty($td[$adres]['style'])){
				$style=' style="'.$td[$adres]['style'].'"';
			}
		}
		return $row.$col.$style;
	}
	function Td_none_list($file_dir){		
		$td=$this->Td_list();
		$td_none_list=array();
		$file_open=fopen($file_dir,"rt");
		for($row=0;$file_get=fgetcsv($file_open,1000,";");$row++){ 
		$file_count=count($file_get);
			for($col=0;$col<$file_count;$col++){
				if(!empty($td[$row.':'.$col]['rowSpan'])){
					$col_span=$td[$row.':'.$col]['colSpan'];
					$row_span=$td[$row.':'.$col]['rowSpan'];
					$row_none=$row+1;
					for($r=1;$r<$row_span;$r++){
						$td_none_list[]=$row_none.':'.$col;
						$col_none=$col+1;
						for($c=1;$c<$col_span;$c++){
							$td_none_list[]=$row_none.':'.$col_none;
							$col_none++;
						}
						$row_none++;
					}
				}
				if(!empty($td[$row.':'.$col]['colSpan'])){
					$col_span=$td[$row.':'.$col]['colSpan'];
					$col_none=$col+1;
					for($c=1;$c<$col_span;$c++){
						$td_none_list[]=$row.':'.$col_none;
						$col_none++;
					}
				}
			}
		}
		fclose($file_open);
		return $td_none_list;
	}
}
function csv_sumotto_display_table($atts){
	extract(shortcode_atts(array( "id" => '' ), $atts));
	global $wpdb;
	$csv_sumotto_bd = $wpdb->prefix.csv_sumotto;
	$table = $wpdb->get_row("SELECT * FROM $csv_sumotto_bd WHERE `id` = $id ");
	$upload_dir=wp_upload_dir();
	$filename = iconv("UTF-8", "CP1251",$table->url);
	$file_dir=$upload_dir['basedir'].'/'.$filename;
	$attributes=new csv_sumotto_attributes;
	$attributes->Values($table->attributes);
	if(is_file($file_dir)){			
		$td_none_list=$attributes->Td_none_list($file_dir);
		$f=fopen($file_dir,"rt");
		for($i=0;$data=fgetcsv($f,1000,";"); $i++){
			$num=count($data);
			for ($c=0;$c<$num;$c++){
				$td_adres=$i.':'.$c;
				$key=array_search($td_adres,$td_none_list);
				if($key===false){
					$n=$c-$m;
					$td.='<td '.$attributes->Td_get($td_adres).'>'.csv_sumotto_utf($data[$c]).'</td>'."\n";
				}
			}
			$tr.='<tr id="'.($i+1).'"'.$attributes->Tr_get($i+1).'>'."\n".$td.'</tr>'."\n";
			$td='';
		}
		$a='A';
		$col=''; 
		for($c=0;$c<$num;$c++){
			$col.='<col id="col'.$a.'"'.$attributes->Col_get('col'.$a).'>';
			$a++;
		}
		fclose($f);
		if(!empty($table->title)){$caption='<caption style="'.$attributes->caption.'">'."\n".$table->title."\n".'</caption>'."\n";}
		if(!empty($attributes->style)){$style='<style type="text/css">'."\n".$attributes->style."\n".'</style>'."\n";}
		$csv=$style.'<br>'."\n".'<table id="csv-table-'.$id.'" class="csv-table" style="'.$attributes->table.'">'."\n".$caption.$col.'<tbody>'.$tr.'</tbody>'."\n".'</table>';	
	} else {
		$csv=_e('Sorry, the file is temporarily unavailable<br>','csv_sumotto');
	}
	return $csv;
}
function  csv_sumotto_edit_display_table($id){
	global $wpdb;	
	$csv_sumotto_bd=$wpdb->prefix.csv_sumotto;
	$table=$wpdb->get_row("SELECT * FROM $csv_sumotto_bd WHERE `id` = $id ");
	$upload_dir=wp_upload_dir();
	$filename=iconv("UTF-8", "CP1251",$table->url);
	$file_dir=$upload_dir['basedir'].'/'.$filename;
	$attributes=new csv_sumotto_attributes;
	$attributes->Values($table->attributes);
	if(is_file($file_dir)){
		$f=fopen($file_dir,"rt");
		$td_none_list=$attributes->Td_none_list($file_dir);
		for($i=0;$csv=fgetcsv($f,1000,";");$i++){
			$count=count($csv);
			for($c=0;$c<$count;$c++){
				$td_adres=$i.':'.$c;
				$td_none=array_search($td_adres,$td_none_list);
				if($td_none===false){$td.='<td '.$attributes->Td_get($td_adres).' adress="'.$td_adres.'">'.csv_sumotto_utf($csv[$c]).'</td>'."\n";}
			}
			$tr.='<tr id="'.($i+1).'"'.$attributes->Tr_get($i+1).'>'."\n".'<th style="width:30px;">'.($i+1).'</th>'."\n".$td.'</tr>'."\n";
			$td='';
		}
		$a='A';
		$col='<col>'; 
		for($c=0;$c<$count;$c++){
			$col.='<col id="col'.$a.'"'.$attributes->Col_get('col'.$a).'>';
			$th.='<th id="'.$a.'">'.$a.'</th>';
			$a++;
		}
		fclose($f);
		$caption='<caption id="caption" style="'.$attributes->caption.'">'."\n".$table->title."\n".'</caption>'."\n";
		$style='<style type="text/css" id="style">'.$attributes->style.'</style>'."\n";		
		$csv=$style.'<table id="stable" class="csv-table" style="'.$attributes->table.'">'."\n".$caption.$col.'<tr id="col"><th id="all" title="'.__("select all","csv_sumotto").'" onclick="selectAll()">ALL</th>'.$th.'</tr><tbody>'.$tr.'</tbody>'."\n".'</table>';
	} else {
		$csv=_e('Sorry, the file is temporarily unavailable<br>','csv_sumotto');
	}
	return $csv;
}
function csv_sumotto_add_table(){
	global $wpdb;
	$csv_sumotto_bd=$wpdb->prefix.csv_sumotto;
	if(function_exists('current_user_can') && !current_user_can('manage_options'))	die (_e('Hacker?','csv_sumotto'));
	if(function_exists('check_admin_referer')){check_admin_referer('csv_sumotto_add_form');}	  
	$csv_sumotto_name=$_POST['csv_sumotto_name'];
	$csv_sumotto_title=$_POST['csv_sumotto_title'];
	$csv_sumotto_description=$_POST['csv_sumotto_description'];
	$csv_sumotto_url=$_POST['csv_sumotto_url'];	
	$wpdb->insert
		(
			$csv_sumotto_bd,  
			array('name'=>$csv_sumotto_name,'title'=>$csv_sumotto_title,'description'=>$csv_sumotto_description,'url'=>$csv_sumotto_url,'attributes'=>'&&&&&'),  
			array('%s','%s','%s','%s','%s')
		);
}
function csv_sumotto_edit_table(){
	global $wpdb;
	$csv_sumotto_bd=$wpdb->prefix.csv_sumotto;
	if(function_exists('current_user_can') && !current_user_can('manage_options'))	die (_e('Hacker?','csv_sumotto'));
	if(function_exists('check_admin_referer')){check_admin_referer('csv_sumotto_save_form');}
	$csv_sumotto_id=$_POST['id'];
	$csv_sumotto_name=$_POST['csv_sumotto_name'];
	$csv_sumotto_title=$_POST['csv_sumotto_title'];
	$csv_sumotto_description=$_POST['csv_sumotto_description'];
	$csv_sumotto_url=$_POST['csv_sumotto_url'];
	$csv_sumotto_attributes=$_POST['attributes'];
	$wpdb->update
		(
			$csv_sumotto_bd,  
			array('name'=>$csv_sumotto_name,'title'=>$csv_sumotto_title,'description'=>$csv_sumotto_description,'url'=>$csv_sumotto_url,'attributes'=>$csv_sumotto_attributes),  
			array('id'=>$csv_sumotto_id),  
			array('%s','%s','%s','%s','%s'),  
			array('%d')
		);
}
function csv_sumotto_delete_table(){
	global $wpdb;
	$csv_sumotto_bd=$wpdb->prefix.csv_sumotto;
	if(function_exists('current_user_can') && !current_user_can('manage_options'))	die (_e('Hacker?','csv_sumotto'));
	if (function_exists ('check_admin_referer')){check_admin_referer('csv_sumotto_delete_form');}
	$csv_sumotto_id=$_POST['csv_sumotto_delete'];
	$wpdb->query("DELETE FROM $csv_sumotto_bd WHERE `id`=$csv_sumotto_id");
}
?>