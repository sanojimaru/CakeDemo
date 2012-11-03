<?php
if (Configure::read('debug') == 0):
  throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<h2>CakePHP Plugin demo</h2>

<ul>
    <li><?php echo $this->Html->link('TurboLinks', array('controller' => 'posts', 'action' => 'index')); ?></li>
</ul>
