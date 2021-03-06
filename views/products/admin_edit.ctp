<?php echo $this->Html->addCrumb('Dashboard','/admin/'); ?>
<?php echo $this->Html->addCrumb('Products','/admin/products/'); ?>
<?php echo $this->Html->addCrumb('Edit'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">	
					<h4>EDIT PRODUCT</h4>
				</h3>
			</div>
			<?php echo $this->Form->create('Product');?>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<?php	echo $this->Form->input('name',array('class'=>'form-control','required'=>'required','autocomplete'=>'off'));?>
					</div>
					<div class="col-lg-3">
					
						<?php	echo $this->Form->input('category_id',array('empty'=>'Select','class'=>'form-control','required'=>'required'));?>
					</div>
					<div class="col-lg-3">
					
						<?php	echo $this->Form->input('manufacturer_id',array('empty'=>'Select','class'=>'form-control','required'=>'required'));?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<?php	echo $this->Form->input('description',array('type'=>'hidden','class'=>'form-control'));?>
					</div>
				</div>
				
				<br/>
				<div id="summernote"></div>
			</div>
			<div class="panel-footer">	
				<div class="text-right">
					<a href="<?php echo $this->base;?>/admin/products" class="btn btn-default" type="cancel">Cancel</a>
					<button class="btn btn-primary" type="submit">Save</button>
				</div>
			</div>
			<?php echo $this->Form->end();?>
		</div>
	</div>
</div>
<?php echo $this->Html->script('biz/product_descriptions',array('inline'=>false));?>