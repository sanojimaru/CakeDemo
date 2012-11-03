<h2>Assets testing</h2>

<h3>CoffeeScript conpiler</h3>
<?php debug($this->Assets->js('test.js')); ?>
<?php echo $this->Assets->js('test.js'); ?>

<h3>SCSS compiler</h3>
<?php debug($this->Assets->css('test.css')); ?>
<?php echo $this->Assets->css('test.css'); ?>

