<?php 
if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
exit();
global $wpdb;
$csv_sumotto_bd = $wpdb->prefix.csv_sumotto;
$sql = "DROP TABLE `".$csv_sumotto_bd."`;";
$wpdb->query($sql);
delete_option('csv_sumotto_shortcode_name');
delete_option('csv_sumotto_utf');
?>