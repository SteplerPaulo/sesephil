<?php echo $this->Html->addCrumb('Dashboard','/admin/'); ?>
<?php echo $this->Html->addCrumb('Categories','/admin/categories/'); ?>
<?php echo $this->Html->addCrumb('Add'); ?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="login-panel panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">	
					<h4>ADD CATEGORY</h4>
				</h3>
			</div>
			<?php echo $this->Form->create('Category');?>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-9">
						<?php echo $this->Form->input('name',array('class'=>'form-control','required'=>'required','autocomplete'=>'off'));?>
					</div>
					<div class="col-lg-3">
						<?php echo $this->Form->input('parent_id',array('options'=>$categories,'class'=>'form-control','required'=>'required'));?>
					</div>
				</div>
			</div>
			<div class="panel-footer">	
				<div class="text-right">
					<a href="<?php echo $this->base;?>/admin/categories" class="btn btn-default" type="cancel">Cancel</a>
					<button class="btn btn-primary" type="submit">Save</button>
				</div>
			</div>
			<?php echo $this->Form->end();?>
		</div>
	</div>
</div>