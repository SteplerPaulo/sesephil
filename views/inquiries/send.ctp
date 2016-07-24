<div class="row">

	<?php echo $this->Form->create('Inquiry',array('enctype' => 'multipart/form-data'));?>
	<div class="col-md-8 col-md-offset-2">
		<h4>Send Inquiry</h4>
		<div class="row">
			<div class="col-md-12">
				<?php
					echo $this->Form->input('from',array('class'=>'form-control','value'=>'pkerroj@gmail.com'));
					echo $this->Form->input('subject',array('class'=>'form-control','value'=>'Testing'));
					echo $this->Form->input('content',array('class'=>'form-control'));
				?>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-md-6">
				<!--
				<button class="btn btn-default" type="button"><i class="fa fa-paperclip" aria-hidden="true"></i> Attach File</button>
				-->
				<?php echo $this->Form->input('InquiryFile.file_name', array('type'=>'file'));?>
			</div>
			
			<ul class="col-md-6">
				<li>Supports jpg, jpeg, png, gif, pdf, doc, docx, xls, xlsx, txt, rar and zip</li>
				<li>Max. total size: 3MB</li>
			</ul>
		</div>
		<div class="text-right row">
			<button class="btn btn-primary" type="submit">Send Inquiry</button>
		</div>
	</div>
	<?php echo $this->Form->end();?>
</div>


<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Inquiries', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Inquiry Files', true), array('controller' => 'inquiry_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inquiry File', true), array('controller' => 'inquiry_files', 'action' => 'add')); ?> </li>
	</ul>
</div>