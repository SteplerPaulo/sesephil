<?php echo $this->Html->addCrumb('Dashboard','/admin/'); ?>
<?php echo $this->Html->addCrumb('Manufacturers','/admin/manufacturers/'); ?>
<?php echo $this->Html->addCrumb('Edit'); ?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="login-panel panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">	
					<h4>EDIT MANUFACTURER</h4>
				</h3>
			</div>
			<?php echo $this->Form->create('Manufacturer');?>
			<div class="panel-body">
				<?php
					echo $this->Form->input('id',array('class'=>'form-control'));
					echo $this->Form->input('name',array('class'=>'form-control','required'=>'required','autocomplete'=>'off'));
					echo $this->Form->input('address',array('type'=>'textarea','class'=>'form-control','required'=>'required'));
				?>
			</div>
			<div class="panel-footer">	
				<div class="text-right">
					<a href="<?php echo $this->base;?>/admin/manufacturers" class="btn btn-default" type="cancel">Cancel</a>
					<button class="btn btn-danger" type="submit">Update</button>
				</div>
			</div>
			<?php echo $this->Form->end();?>
		</div>
	</div>
</div>
			
			