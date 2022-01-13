<main>
	<?php $this->template->load('header/breadcrumb'); ?>

	<section>
		<div class="row">
			<?php $this->load->view('front-end/sidebar'); ?>

			<div class="small-12 medium-9 large-7 columns">
				<h2 class="text-title">วิธีการซื้อสินค้า</h2>
				<div class="transport-wrapper">
					<h4><i class="fa fa-angle-double-right"></i> ฉันจะทำรายการสั่งซื้อได้อย่างไร ?</h4>
					<img src="<?php echo base_url('assets/images/howto/how-to-buy.jpg'); ?>" alt="howtopay">
					<br>
					<h4><i class="fa fa-angle-double-right"></i> ฉันทำการสั่งซื้อและมีการแจ้งยืนยันการสั่งซื้อเรียบร้อยแล้ว ฉันต้องทำอะไรต่อไป ?</h4>
					<p>การยืนยันคำสั่งซื้อจะถูกส่งถึงคุูณทาง อีเมล และ SMS หลังจากที่คุณสั่งซื้อสินค้าเป็นที่เรียบร้อยแล้ว ทางเราจะส่งอีเมล และ SMS อีกเมื่อสินค้าของคุณมีการเปลี่ยนแปลงสถานะ คุณสามารถตรวจสอบสถานะคำสั่งสื้อของคุณได้ <a href="<?php echo base_url('member/transfercustom'); ?>" class="link">คลิกที่นี่</a></p>
					<br>
					<h4><i class="fa fa-angle-double-right"></i> ฉันสามารถสั่งซื้อสินค้าได้โดยไม่ต้องมีบัญชีในเว็บไซต์ของ Luckydoor ได้อย่างไร ?</h4>
					<p>ท่านสามารถสั่งซื้อสินค้ากับ Luckydoor ได้โดยไม่ต้องมีบัญชี ดังนี้</p>
					<ol class="service-ol">
						<li>เลือกสินค้าที่ท่านต้องการ และดำเนินการสั่งซื้อ</li>
						<li>ไปที่ขั้นตอนเข้าสู่อีเมล์ ใส่อีเมล์ของท่าน และเลือก <bold>"ดำเนินการต่อโดยไม่ต้องใช้รหัสผ่าน"</bold></li>
						<li>ใส่ข้อมูลการจัดส่ง และเลือกช่องทางการชำระเงินของท่าน</li>
						<li>สั่งซื้อสินค้าของท่าน</li>
					</ol>
					<!-- <p>สำหรับรายละเอียดเพิ่มเติมเกี่ยวกับวิธีการสั่งซื้อคลิกที่นี่ <a href="#!" class="link">www.luckydoor.com/how-to-buy</a></p> -->
					<br>
					<p>เราขอแนะนำให้ท่านสร้างบัญชีผู้ใช้ ซึ่งจะได้รับการแจ้งโปรโมชั่นของ Luckydoor ล่าสุดและน่าดึงดูดใจ อีกทั้งเพื่อให้มีข้อมูลและประวัติการสั่งซื้อของท่านถูกบันทึกไว้สำหรับประสบการณ์การช้อปปิ้งออนไลน์ที่ดีที่สุดของท่าน</p>
					<br>
					<h4><i class="fa fa-angle-double-right"></i> ฉันสามารถโทรไป Luckydoor เพื่อทำการสั่งซื้อสินค้าได้หรือไม่ ?</h4>
					<p>เราสามารถช่วยเหลือท่านในการทำรายการสั่งซื้อทางโทรศัพท์ หากท่านเลือกการชำระเงินแบบเก็บเงินปลายทางอย่างไรก็ตาม</p>
					<!-- <p>เราขอแนะนำท่านดูรายละเอียดวิธีการสั่งซื้อสินค้าออนไลน์ <a href="#!" class="link">www.luckydoor.com/how-to-buy</a> </p> -->
					<p>หากท่านไม่สามารถทำการสั่งซื้อออนไลน์ได้ กรุณาติดต่อแผนกบริการลูกค้าของเรา <a href="<?php echo base_url('contactus'); ?>" class="link">คลิกที่นี่</a> เรามีความยินดีเป็นอย่างยิ่งที่จะช่วยเหลือท่าน</p>
					<br>
					<h4><i class="fa fa-angle-double-right"></i> ฉันสามารถลบสินค้าออกจาก ตระกร้าช้อปปิ้งได้อย่างไร ?</h4>
					<p>สำหรับการลบสินค้าออกจากตระกร้าช้อปปิ้งสามารถทำได้ดังนี้</p>
					<p>- กดเลือกที่สัญลักษณ์ตระกร้า บริเวณด้านบนของหน้าเวปไซต์ เพื่อเข้าไปยังตระกร้าช้อปปิ้งของคุณ</p>
					<p>- กดเลือก <bold>“ลบรายการสินค้า”</bold></p>
					<p>หลังจากนั้น สินค้าในตระกร้าช้อปปิ้งของคุณจะถูกลบออก</p>
					<br>
					<h4><i class="fa fa-angle-double-right"></i> ฉันจะได้รับการยืนยันคำสั่งซื้อหลังจากทำการสั่งซื้อสินค้าหรือไม่คะ ?</h4>
					<p>คุณจะได้รับ <bold>เอกสารยืนยันคำสั่งซื้อและรายละเอียดของคำสั่งซื้อ</bold> ผ่านทาง <bold>อีเมล์</bold> หลังจากที่คุณได้ทำการสั่งซื้อสินค้า เราจะแจ้งให้คุณทราบอีกครั้งเมื่อสินค้าของคุณได้รับการจัดส่งแล้ว</p>
					<br>
				</div>


			</div>

		</div>
	</section>
</main>