<?php if(@$_GET['id']=="vision"){
?>
<style type="text/css">
	.wrapper-about-title {
		background-image: url("../assets/modules/aboutus/images/vision_head.jpg") !important; 
	}
	.wrapper-orderstatus-title {
		background-image: url("../assets/modules/aboutus/images/vision_head.jpg") !important;
	}
</style>
<?php
}
?>
<main>
	<?php $this->template->load('header/breadcrumb'); ?>
	
	<section>
        <div class="row">
        <?php
		if(@$_GET['id']!="mission"){
			if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
				<div class="wrapper-about-title">
				<!--
					<h1>เกี่ยวกับเรา</h1>
					<div class="about-desc">
						<h4>ยินดีต้อนรับสู่เว็บไซต์ Tanisha</h4>
					</div>
			-->
				</div>
			<?php }else{?>
				<div class="wrapper-about-title">
					<!--
					<h1>about us</h1>
					<div class="about-desc">
						<h4>Welcome to the Tanisha website.</h4>
					</div>
			-->
				</div>
			<?php }
		}?>
        </div>
		<div class="row">
			<div class="small-12 medium-3 columns">
				<ul class="menu vertical categories">
<?php
if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
					<li class="categoires-head"><h3>หัวข้อ</h3></li>
					<li><a href="<?php echo base_url('aboutus'."?language=".@$_GET['language'].'&id=tanisha');?>" class="categoires-title <?php if (uri_seg(1)== 'aboutus' && (@$_GET['id']=="tanisha" || @$_GET['id']=="")){ echo 'active'; }?>">เกี่ยวกับธนิชา</a></li>
					<li><a href="<?php echo base_url('aboutus'."?language=".@$_GET['language'].'&id=ceo');?>" class="categoires-title <?php if (uri_seg(1)== 'aboutus' && @$_GET['id']=="ceo"){ echo 'active'; }?>">ผู้บริหาร</a></li>
					<li><a href="<?php echo base_url('aboutus'."?language=".@$_GET['language'].'&id=vision');?>" class="categoires-title <?php if (uri_seg(1)== 'aboutus' && @$_GET['id']=="vision"){ echo 'active'; }?>">วิสัยทัศน์</a></li>
					<li><a href="<?php echo base_url('aboutus'."?language=".@$_GET['language'].'&id=mission');?>" class="categoires-title <?php if (uri_seg(1)== 'aboutus' && @$_GET['id']=="mission"){ echo 'active'; }?>">พันธกิจ</a></li>
<?php }else {?>
					<li class="categoires-head"><h3>Topic</h3></li>
					<li><a href="<?php echo base_url('aboutus'."?language=".@$_GET['language'].'&id=tanisha');?>" class="categoires-title <?php if (uri_seg(1)== 'aboutus' && (@$_GET['id']=="tanisha" || @$_GET['id']=="")){ echo 'active'; }?>">About Tanisha</a></li>
					<li><a href="<?php echo base_url('aboutus'."?language=".@$_GET['language'].'&id=ceo');?>" class="categoires-title <?php if (uri_seg(1)== 'aboutus' && @$_GET['id']=="ceo"){ echo 'active'; }?>">CEO</a></li>
					<li><a href="<?php echo base_url('aboutus'."?language=".@$_GET['language'].'&id=vision');?>" class="categoires-title <?php if (uri_seg(1)== 'aboutus' && @$_GET['id']=="vision"){ echo 'active'; }?>">Vision</a></li>
					<li><a href="<?php echo base_url('aboutus'."?language=".@$_GET['language'].'&id=mission');?>" class="categoires-title <?php if (uri_seg(1)== 'aboutus' && @$_GET['id']=="mission"){ echo 'active'; }?>">Mission</a></li>
<?php }?>

				</ul>
			</div>

<?php if(@$_GET['id']=="tanisha" || @$_GET['id']==""){
		if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/aboutus/images/aboutus_th.jpg')?>">
				</div>
			</div>
	<?php }else{?>
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
					<img width="100%" src="<?php echo base_url('assets/modules/aboutus/images/aboutus_en.jpg')?>">
				</div>
			</div>
	<?php }?>
<?php }?>

<?php if(@$_GET['id']=="ceo"){
		if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/aboutus/images/ceo_th.jpg')?>">
				</div>
			</div>
	<?php }else{?>
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
					<img width="100%" src="<?php echo base_url('assets/modules/aboutus/images/ceo_en.jpg')?>">
				</div>
			</div>
	<?php }?>
<?php }?>

<?php if(@$_GET['id']=="vision"){
		if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/aboutus/images/vision_th.jpg')?>">
				</div>
			</div>
	<?php }else{?>
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
					<img width="100%" src="<?php echo base_url('assets/modules/aboutus/images/vision_en.jpg')?>">
				</div>
			</div>
	<?php }?>
<?php }?>

<?php if(@$_GET['id']=="mission"){
?>
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/aboutus/images/mission_th_en1.jpg')?>">
				</div>
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/aboutus/images/mission_th_en2.jpg')?>">
				</div>
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/aboutus/images/mission_2_th.jpg')?>">
				</div>
				<div class="transport-wrapper">
					<img width="100%" src="<?php echo base_url('assets/modules/aboutus/images/mission_2_en.jpg')?>">
				</div>
			</div>
<?php }?>

		</div>

	</section>
</main>