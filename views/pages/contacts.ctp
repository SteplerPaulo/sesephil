<?php echo $this->Html->addCrumb('Home Page','/'); ?>
<?php echo $this->Html->addCrumb('Contacts'); ?>

<div class="row">
	
	<div class="col-lg-6 col-lg-offset-1">
		<a href="https://www.google.com.ph/maps/place/South+East+Star+Enterprises/@14.080179,121.1519903,17z/data=!3m1!4b1!4m5!3m4!1s0x33bd6f5b56afcecf:0xfcbe7b43ce925acc!8m2!3d14.080179!4d121.154179" target="_blank" title="View Location" data-toggle="tooltip" class="red-tooltip">
			<image src="<?php echo $this->base;?>/img/about-us/map.jpg" class="img-responsive" />
		</a>
		<address>
			<h2 style="color: #a62424;">South East Star Enterprises</h2>
			Apitong St. Mt. View Subdivision <br>
			Tanauan City, Batangas, Philippines
		</address>
		<address>
			<strong>Email Address</strong><br>
			<a href="mailto:sese.phil@gmail.com">sese.phil@gmail.com</a>
		</address>
		<address>
			<strong>Telephone No.</strong><br>
			(043) 778-0123<br/>
		</address>
		<address>
			<strong>Fax No.</strong><br>
			00-000-00000000
		</address>

	</div>
	<div class="col-lg-4 alert alert-info" id="FORM">
		<?php echo $this->Form->create('Inquiry',array('enctype' => 'multipart/form-data','action'=>'send_via_contactus'));?>
		<h4 class="alert alert-info">Send Us A Message</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="input text">
					<label for="InquiryFrom">From</label>
					<input name="data[Inquiry][from]" type="email" class="form-control" placeholder="Enter your email address" required="required" id="InquiryFrom">
				</div>
				<label>To</label>
				<div class="like-input-box">
					South East Star Enterprises (SESEPHIL)
				</div>
				<?php
					echo $this->Form->input('subject',array('class'=>'form-control','required'=>'required'));
					echo $this->Form->input('content',array('type'=>'textarea','class'=>'form-control','required'=>'required'));
				?>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-md-12 text-right">
				<button class="btn btn-primary" id="SendButton"><i class="fa fa-paper-plane-o"></i> Send</button>
			</div>
		</div>
		<?php echo $this->Form->end();?>
	</div>
</div>
