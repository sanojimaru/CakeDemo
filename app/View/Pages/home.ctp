<?php
if (Configure::read('debug') == 0):
  throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<h2>CakePHP Plugin demo</h2>

<ul>
    <li><?php echo $this->Html->link('TurboLinks', array('controller' => 'posts', 'action' => 'index')); ?></li>
    <li><?php echo $this->Html->link('CakeAssets', array('controller' => 'pages', 'action' => 'test_assets')) ?></li>
</ul>
