<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
   
    <?= $this->Html->css('layout') ?>
    <?= $this->Html->script('custom.js') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    
</head>
<body>    
    <?= $this->element('header') ?> 
    <?= $this->element('sidebar') ?>
    <div id="content">
        <?= $this->Flash->render(); ?>
        <?= $this->Flash->render('auth'); ?>    
        <?= $this->fetch('content') ?>
    </div>
    <?= $this->element('footer') ?>
</body>

</html>
