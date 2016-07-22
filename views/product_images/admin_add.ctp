<div class="productImages form">
<?php echo $form->create('ProductImage',array('type' => 'file','action'=>'admin_add')); ?>
	<fieldset>
 		<legend><?php __('Add Image'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $form->input('img_file', array('type' => 'file'));
		echo $this->Form->input('caption');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Product Images', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
