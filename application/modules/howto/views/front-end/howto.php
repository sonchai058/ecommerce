<main>
	<?php $this->template->load('header/breadcrumb'); ?>
	
	<section>

		<div class="row">
			<div class="small-12 medium-3 columns">
				<ul class="menu vertical categories">
<?php
if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
					<li class="categoires-head"><h3>ก้าวสู่ความสำเร็จ</h3></li>
                    <!--
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=tanisha');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && (@$_GET['id']=="tanisha" || @$_GET['id']=="")){ echo 'active'; }?>">เกี่ยวกับธนิชา</a></li>
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=ceo');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && @$_GET['id']=="ceo"){ echo 'active'; }?>">ผู้บริหาร</a></li>
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=vision');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && @$_GET['id']=="vision"){ echo 'active'; }?>">วิศัยทัศน์</a></li>
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=mission');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && @$_GET['id']=="mission"){ echo 'active'; }?>">พันธกิจ</a></li>
                    -->
<?php }else {?>
                    <li class="categoires-head"><h3>Step towards Success</h3></li>
                    <!--
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=tanisha');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && (@$_GET['id']=="tanisha" || @$_GET['id']=="")){ echo 'active'; }?>">About Tanisha</a></li>
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=ceo');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && @$_GET['id']=="ceo"){ echo 'active'; }?>">CEO</a></li>
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=vision');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && @$_GET['id']=="vision"){ echo 'active'; }?>">Vision</a></li>
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=mission');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && @$_GET['id']=="mission"){ echo 'active'; }?>">Mission</a></li>
                    -->
<?php }?>
                    <li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=distributor_partner');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && (@$_GET['id']=="distributor_partner" || @$_GET['id']=="")){ echo 'active'; }?>">Distributor Partner</a></li>
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=dealer');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && @$_GET['id']=="dealer"){ echo 'active'; }?>">Dealer</a></li>
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=svip');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && @$_GET['id']=="svip"){ echo 'active'; }?>">SVIP</a></li>
					<li><a href="<?php echo base_url('howto'."?language=".@$_GET['language'].'&id=vip');?>" class="categoires-title <?php if (uri_seg(1)== 'howto' && @$_GET['id']=="vip"){ echo 'active'; }?>">VIP</a></li>

				</ul>
			</div>

<?php if(@$_GET['id']=="distributor_partner" || @$_GET['id']==""){
		if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
			Distributor Partner
        <!--
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/howto/images/howto_th.jpg')?>">
				</div>
			</div>
        -->
	<?php }else{?>
        <!--
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
					<img width="100%" src="<?php echo base_url('assets/modules/howto/images/howto_en.jpg')?>">
				</div>
			</div>
        -->
	<?php }?>
<?php }?>

<?php if(@$_GET['id']=="dealer"){
		if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
			Dealer
    <!--
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/howto/images/ceo_th.jpg')?>">
				</div>
			</div>
    -->
	<?php }else{?>
    <!--
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
					<img width="100%" src="<?php echo base_url('assets/modules/howto/images/ceo_en.jpg')?>">
				</div>
			</div>
    -->
	<?php }?>
<?php }?>

<?php if(@$_GET['id']=="svip"){
		if(@$_GET['language']=='thai' || @$_GET['language']==''){?>
			SVIP
        <!--
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/howto/images/vision_th.jpg')?>">
				</div>
			</div>
        -->
	<?php }else{?>
        <!--
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
					<img width="100%" src="<?php echo base_url('assets/modules/howto/images/vision_en.jpg')?>">
				</div>
			</div>
        -->
	<?php }?>
<?php }?>

<?php if(@$_GET['id']=="vip"){
?>
	VIP
<!--
			<div class="small-12 medium-9 large-7 columns">
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/howto/images/mission_th_en1.jpg')?>">
				</div>
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/howto/images/mission_th_en2.jpg')?>">
				</div>
				<div class="transport-wrapper">
						<img width="100%" src="<?php echo base_url('assets/modules/howto/images/mission_2_th.jpg')?>">
				</div>
				<div class="transport-wrapper">
					<img width="100%" src="<?php echo base_url('assets/modules/howto/images/mission_2_en.jpg')?>">
				</div>
			</div>
-->
<?php }?>

		</div>

	</section>
</main>