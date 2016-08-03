<?php echo $this->Html->addCrumb('Dashboard','/admin/'); ?>
<?php echo $this->Html->addCrumb('Products','/admin/products'); ?>
<?php echo $this->Html->addCrumb('Images'); ?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">	
					<h4>Add Product Image</h4>
				</h3>
			</div>
			<?php echo $form->create('ProductImage',array('type' => 'file','action'=>'admin_add')); ?>
			<div class="panel-body">
				<?php
					echo $this->Form->input('product_id',array('class'=>'form-control'));
					echo $form->input('img_file', array('type' => 'file'));
					echo $this->Form->input('caption',array('class'=>'form-control'));
				?>
			</div>
			<div class="panel-footer">	
				<div class="text-right">
					<button class="btn btn-primary" type="submit">Save</button>
				</div>
			</div>
			<?php echo $this->Form->end();?>
		</div>
	</div>
</div>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Product Images', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
