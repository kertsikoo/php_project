<h1>Items in shopping list</h1>
<table border="1">
<tr><th>Item Name</th></tr>
<?php
foreach ($items as $row) {
	echo '<tr><td>'.$row['item_name'].'</td></tr>';
}
?>
</table>