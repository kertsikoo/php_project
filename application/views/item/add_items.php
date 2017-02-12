<h1>Add a new item</h1>
<form action="<?php echo site_url('item/add_items');?>" method="POST">
<table>
<tr><td>Item you want to add:</td><td><input type="text" name="i_n" placeholder="Write item here" required=""></td></tr>
<tr><td></td><td><input type="submit" name="btnAdd" value="Save"></td></tr>
</table>
</form>

<?php
if (isset($tryout)) {
	if($tryout)
		echo '<br>'.' Data inserted into the database';
	else
		echo '<br>'.' Something went wrong';
}
?>