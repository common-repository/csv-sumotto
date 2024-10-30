<?php $upload_dir=wp_upload_dir(); ?>
<div class="wrap">
<div class="csv_sumotto_tables_page_icon"><br></div>
<h2><?php _e('Add New Table','csv_sumotto');?></h2>
<div id="dashboard-widgets" class="metabox-holder columns-1">
<div class="postbox-container" style="width:50%;">
<form name="csv_sumotto_add_form" method="post" action="<?php echo $_SERVER['PHP_SELF'].'?page=csv_sumotto&amp;message=1' ?>">
<?php if (function_exists ('wp_nonce_field') ){wp_nonce_field('csv_sumotto_add_form');}?>
<table style="width:500px;">
	<tr>
		<td style="width:100px"><?php _e('Name','csv_sumotto');?></td>
		<td style="width:400px"><input type="text" name="csv_sumotto_name" value="" style="width:100%"></td>
	</tr>
	<tr>
		<td><?php _e('Caption','csv_sumotto');?></td>
		<td><input type="text" name="csv_sumotto_title" value="" style="width:100%"></td>
	</tr>
	<tr>
		<td><?php _e('Description','csv_sumotto');?></td>
		<td>
			<textarea name="csv_sumotto_description" style="width:100%"></textarea>
		</td>
	</tr>
	<tr>
		<td><?php _e('File name','csv_sumotto');?></td>
		<td><input type="text" name="csv_sumotto_url" id="csv_sumotto_url" value="" style="width:100%"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><code><?php _e('file must be in ','csv_sumotto');?><?php echo $upload_dir['basedir'].'/filename.csv';?></code></td>
	</tr>
	<tr>
		<tr>
		<td>&nbsp;</td>
		<td style="text-align:right;">
			<input class="button-primary" type="submit" name="csv_sumotto_add" value="<?php _e('create','csv_sumotto');?>">
		</td>
	</tr>
</table>
</form>
</div>
<div class="postbox-container" style="width:50%;">
<div class="postbox">
<h3 style="cursor: 	auto"><span><?php _e('The list of available files','csv_sumotto');?></span></h3>
<div>
<?php
if($handle = opendir($upload_dir['basedir'])){
	while (false !== ($file = readdir($handle))) { 
		if (end(explode(".", $file)) == 'csv'){echo '<p class="filename" onClick="document.getElementById(\'csv_sumotto_url\').value=\''.iconv("CP1251", "UTF-8", $file).'\'">'.iconv("CP1251", "UTF-8", $file).'</p>';}
	}
	closedir($handle);
}
?>
</div>
</div>
</div>
</div>
</div>