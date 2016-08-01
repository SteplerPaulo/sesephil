<style>
.like-input-box{
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.like-input-box .image-box{
	position: relative;
    width: 50px;
    height: 50px;
    margin-right: 5px;
    border: 1px solid #eee;
}
.like-input-box ul li{
	list-style:none;
}
</style>

<?php echo $this->Html->addCrumb('Home Page','/'); ?>
<?php echo $this->Html->addCrumb('Products','/products/'); ?>
<?php echo $this->Html->addCrumb('Send Inquiry'); ?>
<div class="row">
	<?php echo $this->Form->create('Inquiry',array('enctype' => 'multipart/form-data'));?>
	<div class="col-md-8 col-md-offset-2">
		<h4>SEND INQUIRY</h4>
		<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->input('from',array('class'=>'form-control','placeholder'=>'Enter your email address','required'=>'required'));?>
				<label>To</label>
				<div class="like-input-box">
					<p>South East Star Enterprises (SESEPHIL)</p>
					<?php if(!empty($product['ProductImage'])):?>
					<ul>
						<li>
							<p class="image-box">
								<a href="#">
									<img title="<?php echo $product['Product']['name'];?>" alt="<?php echo $product['Product']['name'];?>" src="/sesephil/img/product images/<?php echo $product['ProductImage'][0]['img_file'];?>"   width="50" height="50">
								</a>
							</p>
						</li>
					</ul>
					<?php endif;?>
				</div>
				<?php
					echo $this->Form->input('subject',array('class'=>'form-control','value'=>'Inquiry about '.$product['Product']['name'],'required'=>'required'));
					echo $this->Form->input('content',array('class'=>'form-control','required'=>'required'));
				?>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-md-6">
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
