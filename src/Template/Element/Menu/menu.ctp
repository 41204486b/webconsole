<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <?= $this->Html->css('menu/menu.css') ?> 
   <?= $this->Html->script('menu.css') ?> 
   <title>CSS MenuMaker</title>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href='#'>Description</a></li>
   <li class='active has-sub'><a href='#'>System</a>
      <ul>
         <li><a href='#'>Mode and Storage</a></li>
         <li><a href='#'>Maintenance</a></li>
         <li><a href='#'>User Management</a></li>
      </ul>
   </li>
   <li><a href='#'>Network</a></li>
   <li><a href='#'>Camera</a></li>
</ul>
</div>

</body>
<html>
