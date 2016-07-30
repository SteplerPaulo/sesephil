<div ng-controller="ViewProductController" ng-init="initializeController()">	
	<h1><?php echo $product['Product']['name']; ?></h1>
	<div class="row">
		<div class="col-lg-7 thumbnail">
			<img src="http://placehold.it/320x150" alt="">
		</div>
		<div class="col-lg-5">
			<strong><?php echo $product['Product']['name']; ?></strong><br/><br/>
			
			
			
			<form action="/alibaba/shop/add" id="ProductViewForm" method="post" accept-charset="utf-8">
				<div style="display:none;">
					<input type="hidden" name="_method" value="POST">
				</div>		
				<input type="hidden" name="data[Product][id]" value="718384f5-4123-11e2-8c2b-f23c91934b7a" id="ProductId">	
				<button class="btn btn-danger addtocart" id="718384f5-4123-11e2-8c2b-f23c91934b7a" type="submit">
					<b><i class="fa fa-envelope-o"></i> Contact Now</b>
				</button>
			</form>
			
			<?php echo $product['Product']['description']; ?>
			<div class="caption">
				<dl>
				  <dt>Manufactured by:</dt>
				  <dd><?php echo $product['Manufacturer']['name']; ?></dd>
				  <dt>Category:</dt>
				  <dd><?php echo $product['Category']['name']; ?></dd>
				</dl>
			</div>
		</div>
	</div>
</div>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product', true), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Product', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers', true), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer', true), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Images', true), array('controller' => 'product_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Image', true), array('controller' => 'product_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Product Images');?></h3>
	<?php if (!empty($product['ProductImage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Img File'); ?></th>
		<th><?php __('Caption'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductImage'] as $productImage):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productImage['id'];?></td>
			<td><?php echo $productImage['product_id'];?></td>
			<td><?php echo $productImage['img_file'];?></td>
			<td><?php echo $productImage['caption'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'product_images', 'action' => 'view', $productImage['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'product_images', 'action' => 'edit', $productImage['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'product_images', 'action' => 'delete', $productImage['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Image', true), array('controller' => 'product_images', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
