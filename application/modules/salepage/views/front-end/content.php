
<main>
	<?php $this->template->load('header/breadcrumb'); ?>
<?php
	$rows = $this->common_model->custom_query("select * from salepage where allow=1");
?>
	<section>

		<div class="row">
			<div class="small-12 medium-3 columns">
				<ul class="menu vertical categories">
<?php
if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
					<li class="categoires-head"><h3>หัวข้อ</h3></li>
<?php }else {?>
					<li class="categoires-head"><h3>Topic</h3></li>
<?php }?>
					
<?php
	$data_echo = array();
	foreach($rows as $key=>$data) {
		if((!isset($_GET['id']) && $key==0) || @$_GET['id']==$data['id']) {
			$data_echo = $data;
			$_GET['id'] = $data['id'];
		}
		if(@$_GET['language']=='thai' || @$_GET['language']==''){
?>
	<li><a href="<?php echo base_url('salepage?');?>?id=<?php echo $data['id']?>" 	class="categoires-title <?php if (@$_GET['id']== $data['id']){ echo 'active'; }?>"><?php echo $data['name_th']?></a></li>
<?php
		}else {
?>
	<li><a href="<?php echo base_url('salepage?');?>?id=<?php echo $data['id']?>" 	class="categoires-title <?php if (@$_GET['id']== $data['id']){ echo 'active'; }?>"><?php echo $data['name_en']?></a></li>
<?php
		}
	}
?>
				</ul>
			</div>
<?php if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
			<div class="small-12 medium-9 large-7 columns">
				<h2 class="text-title"><?php echo $data['name_th']?></h2>
					<div class="transport-wrapper">
						<?php echo $data_echo['text_th']?>
					</div>
			</div>
<?php }else{?>
			<div class="small-12 medium-9 large-7 columns">
				<h2 class="text-title"><?php echo $data_echo['name_en']?></h2>
					<div class="transport-wrapper">
						<?php echo $data_echo['text_en']?>
					</div>
			</div>

<?php }?>

		</div>
	</section>
</main>