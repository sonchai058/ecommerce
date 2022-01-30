
<main>
	<?php $this->template->load('header/breadcrumb'); ?>
<?php
	$rows = $this->common_model->custom_query("select * from salepage where allow=1");
?>
	<section>

		<div class="row">
			<div class="small-12 medium-3 columns">
				<ul class="menu vertical categories">
					<li class="categoires-head"><h3>หัวข้อ</h3></li>
<?php
	$data_echo = array();
	foreach($rows as $key=>$data) {
		if((!isset($_GET['id']) && $key==0) || @$_GET['id']==$data['id']) {
			$data_echo = $data;
			$_GET['id'] = $data['id'];
		}
?>
	<li><a href="<?php echo base_url('salepage?');?>?id=<?php echo $data['id']?>" 	class="categoires-title <?php if (@$_GET['id']== $data['id']){ echo 'active'; }?>"><?php echo $data['name_th']?></a></li>
<?php
	}
?>
				</ul>
			</div>

			<div class="small-12 medium-9 large-7 columns">
				<h2 class="text-title"><?php echo $data['name_th']?></h2>
					<div class="transport-wrapper">
						<?php echo $data_echo['text_th']?>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 medium-3 columns">
				
			</div>
			<div class="small-12 medium-9 large-7 columns">
				<h2 class="text-title"><?php echo $data_echo['name_mm']?></h2>
					<div class="transport-wrapper">
						<?php echo $data_echo['text_mm']?>
					</div>
			</div>
		</div>
	</section>
</main>