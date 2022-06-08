<main>
	<?php $this->template->load('header/breadcrumb'); ?>

	<section>
		<div class="row">
			<?php $this->load->view('front-end/sidebar'); ?>

			<div class="small-12 medium-9 large-7 columns">
			<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
				<h2 class="text-title">การตรวจสอบสถานะการสั่งซื้อ</h2>
				<div class="transport-wrapper">
					<h4><i class="fa fa-angle-double-right"></i> ฉันจะตรวจสอบสถานะสินค้าของฉันได้อย่างไร ?</h4>
					<p>ท่านสามารถตรวจสอบสถานะรายการสั่งซื้อออนไลน์ของท่านได้ 24 ชั่วโมง / 7 วัน โดยปฎิบัติตามขั้นตอนต่อไปนี้</p>
					<ol class="service-ol" style="margin-left: 40px;">
						<li>ไปที่ <a href="<?php echo base_url('member/transfercustom'."?language=".@$_GET['language']); ?>" class="link">แจ้งโอนเงิน</a></li>
						<li>ใส่หมายเลขคำสั่งซื้อของท่าน และอีเมล์</li>
						<li>กด <bold>"ค้นหา"</bold> เพื่อดำเนินการ</li>
					</ol>
					<br>

					<h4><i class="fa fa-angle-double-right"></i> ฉันไม่สามารถตรวจสอบสถานะสินค้าได้ ฉันควรทำอย่างไร ?</h4>
					<p>ข้อมูลของหมายเลขติดตามสินค้าอาจจะยังไม่ได้ถูกเปิดการใช้งาน โดยหมายเลขติดตามสินค้าจะสามารถใช้งานได้ภายใน 1-2 วันทำการข้างหน้า เมื่อบริษัทขนส่งที่ร่วมงานกับเราได้ทำการอัพเดทข้อมูลแล้ว</p>
					<br>
					<p>แต่ท่านสามารถตรวจสอบสถานะรายการสั่งซื้อของท่านได้ที่เครื่องมือติดตามสถานะคำสั่งซื้อของเรา <a href="<?php echo base_url('member/transfercustom'."?language=".@$_GET['language']); ?>" class="link">คลิกที่นี่</a> ระบบของ Tanishadoor จะปรับปรุงข้อมูลเป็นรายวัน เพื่อที่จะให้บริการตรวจสอบสถานะคำสั่งซื้อที่ดีที่สุดแก่ท่าน</p>
					<br>
					<p>หากหลังจาก 1 วันทำการ ท่านยังไม่สามารถใช้หมายเลขพัสดุได้ กรุณาติดต่อเรา <a href="<?php echo base_url('contactus'."?language=".@$_GET['language']); ?>" class="link">คลิกที่นี่</a> เราจะช่วยเหลือท่านทันที</p>
<?php }else{?>
					<h2 class="text-title">Order Status Check</h2>
				<div class="transport-wrapper">
					<h4><i class="fa fa-angle-double-right"></i> How do I check the status of my products? ?</h4>
					<p>You can check the status of your online order 24 hours / 7 days by following the steps below.</p>
					<ol class="service-ol" style="margin-left: 40px;">
						<li>go to <a href="<?php echo base_url('member/transfercustom'."?language=".@$_GET['language']); ?>" class="link">transfer money</a></li>
						<li>Enter your order number and email.</li>
						<li>Press <bold>"search"</bold> to perform</li>
					</ol>
					<br>

					<h4><i class="fa fa-angle-double-right"></i> I can't check the status of the product. What should I do ?</h4>
					<p>The tracking number information may not have been activated. The tracking number will be available within 1-2 business days. When the transport companies that work with us have updated the information.</p>
					<br>
					<p>But you can check the status of your order on our order tracking tool. <a href="<?php echo base_url('member/transfercustom'."?language=".@$_GET['language']); ?>" class="link">click here</a> Tanishadoor's system will update the information daily. In order to provide you with the best order tracking service</p>
					<br>
					<p>If after 1 business day you still cannot use the parcel number. please contact us <a href="<?php echo base_url('contactus'."?language=".@$_GET['language']); ?>" class="link">click here</a> We will help you immediately.</p>

<?php }?>
				</div>
			</div>

		</div>
	</section>
</main>