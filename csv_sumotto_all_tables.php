<div class="wrap">
<div class="csv_sumotto_tables_page_icon"><br></div>
<h2><?php _e('Tables','csv_sumotto');?> <a class="add-new-h2" href="<?php echo $_SERVER['PHP_SELF'].'?page=csv_sumotto_add_table_menu';?>"><?php _e('Add New','csv_sumotto');?></a></h2> 
<?php echo $messege;?>
<table cellspacing="0" class="wp-list-table widefat fixed tablepress-all-tables" style="margin-right:30px;">
<thead><tr><th>id</th><th><?php _e('Name','csv_sumotto');?></th><th><?php _e('Caption','csv_sumotto');?></th><th><?php _e('Description','csv_sumotto');?></th><th>Shortcode</th></tr></thead>
<tfoot><tr><th>id</th><th><?php _e('Name','csv_sumotto');?></th><th><?php _e('Caption','csv_sumotto');?></th><th><?php _e('Description','csv_sumotto');?></th><th>Shortcode</th></tr></tfoot>
<tbody>
<?php foreach ($tables_list as $item){?>
<tr>
<td><?php echo $item->id;?></td>
<td class="post-title page-title column-title">
<strong><a title="<?php _e('Edit','csv_sumotto');?>" href="<?php echo $_SERVER['PHP_SELF'].'?page=csv_sumotto&amp;edit_table_id='.$item->id;?>" class="row-title"><?php echo $item->name;?></a></strong>
<div class="row-actions">
<span class="edit"><a title="<?php _e('Edit','csv_sumotto');?>" href="<?php echo $_SERVER['PHP_SELF'].'?page=csv_sumotto&amp;edit_table_id='.$item->id;?>"><?php _e('Edit','csv_sumotto');?></a> | </span>
<span class="trash"><a href="javascript:void(null);" title="<?php _e('Delete Permanently','csv_sumotto');?>" class="submitdelete" onClick="deleteTable('<?php echo $item->id;?>');"><?php _e('Delete','csv_sumotto');?></a></span>
</div>
</td>
<td><?php echo $item->title;?></td>
<td><?php echo $item->description;?></td>
<td><?php echo '['.get_option('csv_sumotto_shortcode_name').' id='.$item->id.']';?></td>
</tr>
<?php };?>
</tbody>
</table>
<form name="csv_sumotto_delete_form" method="post" action="<?php echo $_SERVER['PHP_SELF'].'?page=csv_sumotto&amp;message=2' ?>">
<?php if (function_exists ('wp_nonce_field') ){wp_nonce_field('csv_sumotto_delete_form');}?>
<input type="hidden" name="csv_sumotto_delete" value="">
</form>
<script>
function deleteTable(id) {
	if (confirm("<?php _e('The table will be permanently deleted \n Delete table?','csv_sumotto');?>")){
		document.csv_sumotto_delete_form.csv_sumotto_delete.value=id
		document.csv_sumotto_delete_form.submit();
	}
}
</script>
</div>