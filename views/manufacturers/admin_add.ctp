<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">	
					<h4>Add Manufacturer</h4>
				</h3>
			</div>
			<?php echo $this->Form->create('Manufacturer',array('action'=>'add'));?>
			<div class="panel-body">
				<?php
					echo $this->Form->input('name',array('class'=>'form-control'));
					echo $this->Form->input('address',array('type'=>'textarea','class'=>'form-control'));
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
			
			