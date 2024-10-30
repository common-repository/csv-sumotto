<?php
global $wpdb;
$upload_dir=wp_upload_dir();
$csv_sumotto_db = $wpdb->prefix.csv_sumotto;
if( isset($_POST['csv_sumotto_save_settings']) ){   
	if(function_exists('current_user_can') && !current_user_can('manage_options') ) die ( _e('Hacker?', 'csv_sumotto') );
	if(function_exists('check_admin_referer')){check_admin_referer('csv_sumotto_settings_form');}
	if(isset($_POST['utf'])){if($_POST['utf']=='1'){$utf='1';}} else {$utf='0';}
	update_option( 'csv_sumotto_shortcode_name', $_POST['shortcode']);
	update_option( 'csv_sumotto_utf', $utf);
}
if(get_option('csv_sumotto_utf')=='1'){$checked = 'checked=""';}
?>
<div class="wrap">
<div class="csv_sumotto_tables_page_icon"><br></div>
<h2>CSV SumoTTo</h2>
<div id="poststuff">
<div class="postbox">
<h3 class="hndle"><span><?php _e('Description','csv_sumotto');?></span></h3>
<div class="inside">
	<div>
		<p><?php _e('The plugin allows you to place a table from a CSV file on your site.','csv_sumotto');?></p>
		<ul>
			<li>1) <?php _e('Download the file to a folder ','csv_sumotto');?><?php echo $upload_dir['basedir'].'/filename.csv';?></li>
			<li>2) <?php _e('Navigate to Tables -> Add New, create a table.','csv_sumotto');?></li>
			<li>3) <?php _e('Navigate to Tables, select the table you want, edit, and save.','csv_sumotto');?></li>
			<li>4) <?php _e('Go to the editor pages / notes, paste Shortcode in a place where you want to display a table.','csv_sumotto');?>
		</ul>
	</div>
</div>
</div>
<div class="postbox">
<h3 class="hndle"><span><?php _e('Donate','csv_sumotto');?></span></h3>
<div class="inside">
	<div>
	<p><?php _e('Please visit our website','csv_sumotto');?> <a href="http://csv.sumotto.ru">csv.sumotto.ru</a><br><?php _e('Leave a comment','csv_sumotto');?> <a href="#">Word Press Plagins</a></p>
	<table style="border-spacing:20px;border-collapse:separate;">
	<tr><td>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="PVXJM2G88YM2E">
		<input type="image" src="https://www.paypalobjects.com/ru_RU/RU/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal — более безопасный и легкий способ оплаты через Интернет!">
		<img alt="" border="0" src="https://www.paypalobjects.com/ru_RU/i/scr/pixel.gif" width="1" height="1">
		</form>
	</td><td>
		<a href="http://csv.sumotto.ru/%D0%BF%D0%BE%D0%B6%D0%B5%D1%80%D1%82%D0%B2%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F/webmoney/"><img width="88" vspace="6" height="31" src="<?php echo plugins_url('csv-sumotto/images/88x31_wm_blue_on_transparent_ru.png');?>"></a>
	</td><td>
		<a href="http://csv.sumotto.ru/%D0%BF%D0%BE%D0%B6%D0%B5%D1%80%D1%82%D0%B2%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F/%D1%8F%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%20%D0%B4%D0%B5%D0%BD%D1%8C%D0%B3%D0%B8/"><img width="88" vspace="6" height="31" src="<?php echo plugins_url('csv-sumotto/images/b-head-logo.ru.png');?>"></a></td></tr></table>	
	</div>
</div>
</div>
<div class="icon32" id="icon-options-general"><br></div><h2><?php _e('Settings','csv_sumotto');?></h2>
<form name="csv_sumotto_settings_form" method="post" action="<?php echo $_SERVER['PHP_SELF'].'?page=csv_sumotto_settings&amp;updated=true';?>">
<?php if(function_exists('wp_nonce_field')){wp_nonce_field('csv_sumotto_settings_form');}?>
<table>
<tr><th>Shortcode</th><td><input type="text" name="shortcode" value="<?php echo get_option('csv_sumotto_shortcode_name'); ?>"></td><td><code><?php _e('by default','csv_sumotto');?> <big><u>csv</u></big> [csv id=#]</code></td></tr>
<tr><th>CP1251 в UTF-8</th><td><input type="checkbox" name="utf" value="1" <?php echo $checked; ?>></td><td><code><?php _e('If your files are stored in the encoding CP1251','csv_sumotto');?></code></td></tr>
<tr><td colspan="3"><p class="submit"><input id="submit" class="button button-primary" type="submit" value="<?php _e('Save Changes','csv_sumotto');?>" name="csv_sumotto_save_settings"></p></td></tr>
</table>
</form>
</div>
</div>
