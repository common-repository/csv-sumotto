<div class="wrap">
<div class="csv_sumotto_tables_page_icon"><br></div>
<h2><?php _e('Edit table','csv_sumotto');?> id=<?php echo $table->id;?> <a class="add-new-h2" href="<?php echo $_SERVER['PHP_SELF'].'?page=csv_sumotto_add_table_menu';?>"><?php _e('Add New','csv_sumotto');?></a> </h2>
<?php echo $messege;?>
	<div>
		<form name="csv_sumotto_edit" method="post" action="<?php echo $_SERVER['PHP_SELF'].'?page=csv_sumotto&amp;edit_table_id='.$id.'&amp;message=1'; ?>" onSubmit="return editSubmit();">
		<?php if(function_exists('wp_nonce_field')){wp_nonce_field('csv_sumotto_save_form');}?>
		<table style="width:500px;">
			<tr>
				<td style="width:150px"><?php _e('Name','csv_sumotto');?></td>
				<td style="width:350px"><input type="text" name="csv_sumotto_name" value="<?php echo $table->name;?>" style="width:100%"></td>
			</tr>
			<tr>
				<td><?php _e('Caption','csv_sumotto');?></td>
				<td><input type="text" name="csv_sumotto_title" id="csv_sumotto_title" value="<?php echo $table->title;?>" style="width:100%"></td>
			</tr>
			<tr>
				<td><?php _e('Description','csv_sumotto');?></td>
				<td>
					<textarea name="csv_sumotto_description" style="width:100%"><?php echo $table->description;?></textarea>
				</td>
			</tr>
			<tr>
				<td><?php _e('File name','csv_sumotto');?></td>
				<td><input type="text" name="csv_sumotto_url" value="<?php echo $table->url;?>" style="width:100%"></td>
			</tr>
			<tr>
				<td colspan="2">
					<div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $table->id;?>"><input type="hidden" id="attributes" name="attributes" value="">
				</td>
				<td style="text-align:right;">
					<input class="button-primary" type="submit" name="csv_sumotto_save" id="" value="<?php _e('update','csv_sumotto');?>">
				</td>
			</tr>
		</table>
		</form>
	</div>
</div>