<?php $site = $this->webinfo_model->getOnceWebMain(); ?>
<style type="text/css">
	.footer * {
		color: #fff;
		font-weight: bold;
	}
	.footer-widget * {
		color: #fff !important;
	}
</style>	
<footer class="footer" style="background-color: #F36F26;">
<br/>
	<div class="row">
<!--
		<div class="small-12 medium-12 large-12 columns text-center">
			<div class="home-adr _dotranslate">
				<div class="fb-page" data-href="https://www.facebook.com/estherthailandofficial" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/estherthailandofficial" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/estherthailandofficial">Tanisha</a></blockquote></div>
			</div>
		</div>
-->
	<div class="small-6 medium-6 large-3 columns">
		<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
			<h3>TANISHA</h3>
		<?php }else{?>

		<?php }?>
			<hr class="hr-title-2">
			<ul class="footer-widget">
			<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
				<li><a href="<?php echo base_url('aboutus'); ?>" 			title="เกี่ยวกับ">เกี่ยวกับ</a></li>
				<li><a href="<?php echo base_url('aboutus/terms'); ?>" 		title="ข้อตกลงและเงืื่อนไข">ข้อตกลงและเงื่อนไข</a></li>
				<li><a href="<?php echo base_url('aboutus/privacy'); ?>" 	title="นโยบายความเป็น่สวนตัว">นโยบายความเป็นส่วนตัว</a></li>
				<li><a href="<?php echo base_url('control'); ?>" 			title="สำหรับเจ้าหน้าที่" target="_blank">สำหรับเจ้าหน้าที่</a></li>
				<!-- <li><a href="<?php echo base_url('aboutus/storelist'); ?>" 	title="รายชื่อร้านค้า">รายชื่อร้านค้า</a></li> -->
			<?php }else{?>
				<li><a href="<?php echo base_url('aboutus'); ?>" 			title="About Us">About Us</a></li>
				<li><a href="<?php echo base_url('aboutus/terms'); ?>" 		title="Privacy & Terms">Privacy & Terms</a></li>
				<li><a href="<?php echo base_url('aboutus/privacy'); ?>" 	title="นโยบายความเป็น่สวนตัว">Personal Data Protection</a></li>
				<li><a href="<?php echo base_url('control'); ?>" 			title="สำหรับเจ้าหน้าที่" target="_blank">Staff</a></li>
				<!-- <li><a href="<?php echo base_url('aboutus/storelist'); ?>" 	title="รายชื่อร้านค้า">รายชื่อร้านค้า</a></li> -->
			<?php }?>
			</ul>
		</div>
		<div class="small-6 medium-6 large-3 columns">
			<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
			<h3>ฝ่ายบริการลูกค้า</h3>
			<?php }else{?>
			<h3>Customer Service</h3>
			<?php }?>
			<hr class="hr-title-2">
			<ul class="footer-widget">
			<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
				<li><a href="<?php echo base_url('service'); ?>" 			title="ศูนย์ให้ความช่วยเหลือ">ศูนย์ให้ความช่วยเหลือ</a></li>
				<li><a href="<?php echo base_url('service/transports'); ?>" title="การขนส่ง และการจัดส่ง">การขนส่ง และการจัดส่ง</a></li>
			<?php }else{?>
				<li><a href="<?php echo base_url('service'); ?>" 			title="ศูนย์ให้ความช่วยเหลือ">help center</a></li>
				<li><a href="<?php echo base_url('service/transports'); ?>" title="การขนส่ง และการจัดส่ง">transportation and delivery</a></li>
			<?php }?>
				<!-- <li><a href="<?php echo base_url('service/refunds'); ?>" 	title="การคืนสินค้า และการคืนเงิน">การคืนสินค้า และการคืนเงิน</a></li> -->
				<!-- <li><a href="<?php echo base_url('service/returns'); ?>" 	title="วิธีการคืนสินค้า">วิธีการคืนสินค้า</a></li> -->
			</ul>
		</div>

		<div class="small-6 medium-6 large-3 columns">
		<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
			<h3>ติดต่อเรา</h3>
		<?php }else{?>
			<h3>Contact Us</h3>
		<?php }?>
			<hr class="hr-title-2">
			<ul class="pay-icon">
				<li><a href="https://www.facebook.com/estherthailandofficial"><img width="64px" src="<?php echo base_url('assets/images/icon1.png'); ?>" alt=""></a></li>
				<li><a href="#"><img width="64px" src="<?php echo base_url('assets/images/icon2.png'); ?>" alt=""></a></li>
				<li><a href="#"><img width="64px" src="<?php echo base_url('assets/images/icon3.png'); ?>" alt=""></a></li>
				<li><a href="https://page.line.me/tanisha"><img width="64px" src="<?php echo base_url('assets/images/icon4.png'); ?>" alt=""></a></li>
<!--
				<li><a href="#"><img src="<?php echo base_url('assets/images/payment/visa-1@2x.png'); ?>" alt="visa"></a></li>
				<li><a href="#"><img src="<?php echo base_url('assets/images/payment/mastercard@2x.png'); ?>" alt="mastercard"></a></li>
				<li><a href="#"><img src="<?php echo base_url('assets/images/payment/maestro@2x.png'); ?>" alt="maestro"></a></li>
				<li><a href="#"><img src="<?php echo base_url('assets/images/payment/paypal@2x.png'); ?>" alt="paypal"></a></li>
				<li><a href="#"><img src="<?php echo base_url('assets/images/payment/JCB_Cards.png'); ?>" alt="JCB"></a></li>
-->
				<!--<li><a href="#"><img width="128" src="<?php echo base_url('assets/images/bank/32x32/kbank-icon-png-2-Transparent-Images.png'); ?>" alt="KBANK"></a></li>-->
				<!--<li><a href="#"><img src="<?php echo base_url('assets/images/bank/32x32/tmb1.png'); ?>" alt="TMB"></a></li>-->
			</ul>
		</div>


	<div class="small-6 medium-6 large-3 columns">
			<h3>Partnership</h3>
			<hr class="hr-title-2">
			<ul class="partner">
				<!-- <li><a target="_blank" href="http://www.homeworks.co.th"><img src="<?php echo base_url('assets/images/partner/homeworks.png'); ?>" alt="homeworks"></a></li> -->
				<!-- <li><a target="_blank" href="http://www.globalhouse.co.th"><img src="<?php echo base_url('assets/images/partner/globalhouse.png'); ?>" alt="globalhouse"></a></li> -->
				<!-- <li><a target="_blank" href="http://www.thaiwatsadu.com"><img src="<?php echo base_url('assets/images/partner/thaiwatsadu.png'); ?>" alt="thaiwatsadu"></a></li> -->
				<!-- <li><a target="_blank" href="#"><img width="128" src="<?php echo base_url('assets/images/logo.jpeg'); ?>" alt="Esther Thailand"></a></li>-->x
			</ul>
		</div>
	
	</div>
	<div class="footer-copyright">
		<div class="width:100%; font-size: 13px !important">
					<p>
					<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
						บริษัท ธนิชา อินเตอร์เนชั่นแนล จำกัด.<br/>
						สำนักงานใหญ่ : เลขที่ 86/13 ถนนเสาหิน ซอย.18 ตำบลหนองหอย อำเภอเมือง จังหวัดเชียงใหม่ 50000<br/>
						Tax ID : 0505564012718
						, Email : tanisha.inter@gmail.com
						, Phone (+66) 53-282-149
					<?php }else{?>
						TANISHA INTERNATIONAL COMPANY LIMITED<br/>
						HEAD OFFICE : No.86/13 , SAO HIN ROAD, 
						LAND 18, NONG HOI DISTRICT, MUANG AREA, CHIANG MAI THAILAND 50000<br/>
						, tanisha.inter@gmail.com
						, Phone (+66) 53-282-149 
					<?php }?>
						<!-- <a class="help" href="https://maps.google.com/?q=18.7943954,98.8864369" target="_blank">>> Click to view the map.</a>-->
					</p>
		</div>
		<br/>
		<h5>COPYRIGHT © 2022 BY <?php echo strtoupper($site['WD_EnName']); ?> ALL RIGHT RESERVED. POWERD BY <a class="footer-url" href="#jsoftcloud" target="_blank">Jsoftcloud</a></h5>
	</div>
</footer>