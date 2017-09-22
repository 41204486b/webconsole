<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->charset('utf-8'); ?>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
   
    <?= $this->Html->css('abc') ?>
    
    <?= $this->Html->script('https://code.jquery.com/jquery-1.12.4.js') ?>
    <?= $this->Html->script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') ?> 
    <?= $this->Html->css('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
</head>
<body>    
    <?= $this->element('header') ?> 
    <?= $this->element('sidebar') ?> 
    <?= $this->Flash->render(); ?>
    <?= $this->Flash->render('auth'); ?> 
    <div id="content clearfix">      
        <?= $this->fetch('content') ?>
    </div>
   <?= $this->element('footer') ?>
</body>

</html>
