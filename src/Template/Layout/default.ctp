<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

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
    <header class="container-fluid"><?= $this->element('header') ?></header>
    <div class="container-fluid">
        <div id="sidebar"><?= $this->element('sidebar') ?></div>
        <div id="content">
        <?= $this->Flash->render() ?>
        <div class="container clearfix">
            <?= $this->fetch('content') ?>
        </div>
    </div>

    <div class="container-fluid">
    <footer class="footer">
       <?= $this->element('footer') ?> 
    </footer>
    </div>
    </div>
</body>
<style type="text/css">
    #sidebar{
        z-index: 10;
        background: #000000;
        left: 0;
        top: 0;
        bottom: 0;
        width: 250px;
    }

    .footer{
        color:#808B96 ; text-align: center;
        position: relative;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 10;
    }
</style>
</html>
