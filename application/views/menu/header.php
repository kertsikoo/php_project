 <!DOCTYPE html>
<html>
<head>
<title>Shopping list application</title>
<link rel="stylesheet" type="text/css" href=""/>
</head>
<body>

<h1>Your shopping list</h1>
<ul>
<li><a href="<?php echo site_url('main');?>">Main Page</a></li>
<li><a href="<?php echo site_url('item/show_items');?>">Your shopping list</a></li>
<li><a href="<?php echo site_url('item/add_items');?>">add iten to your shopping list</a></li>
<li><a href="<?php echo site_url('item/delete_items');?>">delete iten to your shopping list</a></li>
</ul>