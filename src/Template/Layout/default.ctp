<?php

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>

    <!-- <?= $this->Html->css('custom.css') ?>  -->
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
    <header id="header">
        <!-- <?= $this->element('header') ?> -->
        abc            
    </header>
    
    <nav id="sidebar">
       <!--  <?= $this->element('sidebar') ?> -->
       abc
    </nav>
    <div id="content">
    <!-- <?= $this->Flash->render() ?> -->
    <div class="container clearfix">
    <?= $this->fetch('content') ?>
    </div>
    </div>
    <footer id="footer">
        abc
    </footer>
    
</body>
<style type="text/css">
    body{
        display: grid;
        grid-template-areas: 
        "header header"
        "nav content"
        "nav footer";
        grid-template-rows: 80px 1fr 15px;
        grid-template-columns: 200px 90%;
        grid-row-gap: 5px;
        grid-column-gap: 5px;
        height: 100vh;
        margin:0;
        
    }

    header,footer,div,nav{
        padding: 0.5em;
    }

    #header{grid-area: header; background: pink;}
    #footer{grid-area: footer;background: yellow;}
    #sidebar{grid-area: nav; background: blue;}
    #content{grid-area:content;}
    
</style>
</html>
