<?php
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?= __('Framgia E-Learning System') ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Words') ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?= $this->Html->link(
            __('List Words'),
            ['controller' => 'Words', 'action' => 'index', '_full' => true]
            ); ?></a></li>
          <li><a href="#"><?= $this->Html->link(
            __('Add Words'),
            ['controller' => 'Words', 'action' => 'add', '_full' => true]
            ); ?></a></li>
        </ul>
      </li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Category') ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?= $this->Html->link(
            __('List category'),
            ['controller' => 'Categories', 'action' => 'index', '_full' => true]
            ); ?></a></li>
          <li><a href="#"><?= $this->Html->link(
            __('Add categories'),
            ['controller' => 'Categories', 'action' => 'add', '_full' => true]
            ); ?></a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Lessons') ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?= $this->Html->link(
            __('List Lessons'),
            ['controller' => 'Lessons', 'action' => 'index', '_full' => true]
            ); ?></a></li>
        </ul>
        </li> 
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <?php if (!($this->request->session()->read('Auth.User'))) : ?>
          <li></span><?= $this->Html->link(
            __('Register'),
            ['controller' => 'Users', 'action' => 'add', '_full' => true]
            ); ?></li>
          <li></span><?= $this->Html->link(
            __('Sign In'),
            ['controller' => 'Users', 'action' => 'login', '_full' => true]
            ); ?></li>
            }
        <?php endif; ?>
        <?php if ($this->request->session()->read('Auth.User')) : ?>
          <li></span><?= $this->Html->link(
            __('Logout'),
            ['controller' => 'Users', 'action' => 'logout', '_full' => true]
            ); ?></li>
            }
        <?php endif; ?>
    </ul>
        
    </ul>
  </div>
</nav>
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>