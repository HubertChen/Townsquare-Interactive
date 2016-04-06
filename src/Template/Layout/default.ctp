<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Townsquare Interactive - Candidate Test</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' 
        type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js'></script>

    <?= $this->Html->css('materialize.min.css') ?>
    <?= $this->Html->css('base.css') ?>

    <?= $this->Html->script('materialize.min.js'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>
    <?= $this->Element('nav'); ?>

    <div id='alert-container'>
        <?php if(isset($alertStatus) && isset($alertMessage)): ?>
            <div id='alert' data-status='<?= empty($alertStatus) ? 'false' : 'true'?>' 
            style='display:none;'>
                <?= $alertMessage; ?>
            </div>
        <?php endif; ?>
    </div>

    <?= $this->Flash->render() ?>

    <div class='container'>
        <?= $this->fetch('content') ?>
    </div>

    <script type='text/javascript'>
        $(function() {
            $('#alert').slideDown(500);
        });
    </script>
</body>
</html>
