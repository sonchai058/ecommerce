<main>
	<?php $this->template->load('header/breadcrumb'); ?>

	<section>
		<div class="row">
			<?php $this->load->view('front-end/sidebar'); ?>

			<div class="small-12 medium-9 large-7 columns">
			<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
				<h2 class="text-title">ศูนย์ให้ความช่วยเหลือ</h2>
			<?php }else{?>
				<h2 class="text-title">Help Center</h2>
			<?php }?>
				<div class="link-help">
					<!--
					<a href="<?php echo base_url('service/transports#ANS_01'."?language=".@$_GET['language']); ?>"><i class="fa fa-angle-double-right"></i> ฉันจะได้รับสินค้าของฉันเมื่อไหร่ ?</a>
					<a href="<?php echo base_url('service/transports#ANS_02'."?language=".@$_GET['language']); ?>"><i class="fa fa-angle-double-right"></i> ฉันจะตรวจสอบสถานะสินค้าของฉันได้อย่างไร ?</a>
					-->
					<!-- <a><i class="fa fa-angle-double-right"></i> ฉันสามารถยกเลิกรายการสั่งซื้อของฉันได้อย่างไร ?</a> -->
					<!-- <a><i class="fa fa-angle-double-right"></i> คุณสามารถคืนสินค้าได้อย่างไร ?</a> -->
					<!--
					<a href="<?php echo base_url('service/transports#ANS_03'."?language=".@$_GET['language']); ?>"><i class="fa fa-angle-double-right"></i> มีวิธีชำระเงินแบบใดบ้าง ?</a>
					<a href="<?php echo base_url('service/transports#ANS_04'."?language=".@$_GET['language']); ?>"><i class="fa fa-angle-double-right"></i> คุณทราบได้อย่างไรว่าการชำระงินของฉันนั้นเสร็จสมบูรณ์แล้ว ?</a>
					-->
					<!-- <a href="<?php echo base_url('howto/'); ?>"><i class="fa fa-angle-double-right"></i> มีวิธีชำระเงินแบบใดบ้าง ?</a> -->
					<!-- <a href="<?php echo base_url('howto/'); ?>"><i class="fa fa-angle-double-right"></i> คุณทราบได้อย่างไรว่าการชำระงินของฉันนั้นเสร็จสมบูรณ์แล้ว ?</a> -->
					<!-- <a href="<?php echo base_url('service/transports#ANS_05'); ?>"><i class="fa fa-angle-double-right"></i> ค่าจัดส่งสินค้าเท่าไหร่ ?</a> -->
					<img width="100%" src="<?php echo base_url('assets/images/qa1.jpeg');?>">
					<img width="100%" src="<?php echo base_url('assets/images/qa2.jpeg');?>">
					<img width="100%" src="<?php echo base_url('assets/images/qa3.jpeg');?>">
				</div>
			</div>
		</div>
	</section>
</main>