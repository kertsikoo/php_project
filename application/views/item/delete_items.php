<h1>Items</h1>
<table border="1">
<tr><th>Firstname</th><th>Delete selected</th></tr>
<?php 
foreach ($items as $row){
	echo '<tr><td>'.$row['item_name'].'</td>';
	echo '<td><a href="'.site_url('item/remove_items').'/'.
	$row['item_id'].'"><button>Delete</button></a>';
	echo '</td>';
}
?>
</table>