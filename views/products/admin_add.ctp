<div class="row">
	<div class="col-md-12">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">	
					<h4>Add Product</h4>
				</h3>
			</div>
			<?php echo $this->Form->create('Product');?>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<?php	echo $this->Form->input('name',array('class'=>'form-control'));?>
					</div>
					<div class="col-lg-3">
					
						<?php	echo $this->Form->input('category_id',array('class'=>'form-control'));?>
					</div>
					<div class="col-lg-3">
					
						<?php	echo $this->Form->input('manufacturer_id',array('class'=>'form-control'));?>
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
					<button class="btn btn-primary" type="submit">Save</button>
				</div>
			</div>
			<?php echo $this->Form->end();?>
		</div>
	</div>
</div>
<?php echo $this->Html->script('biz/product_descriptions',array('inline'=>false));?>