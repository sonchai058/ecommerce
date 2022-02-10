<main>
	<?php $this->template->load('header/breadcrumb'); ?>

	<section>
		<div class="row">
			<?php $this->load->view('front-end/sidebar'); ?>

			<div class="small-12 medium-9 large-7 columns">
			<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
				<h2 class="text-title">วิธีการซื้อสินค้า</h2>
				<div class="transport-wrapper">
					<h4><i class="fa fa-angle-double-right"></i> ฉันจะทำรายการสั่งซื้อได้อย่างไร ?</h4>
					<img src="<?php echo base_url('assets/images/howto/how-to-buy.png'); ?>" alt="howtopay">
					<br>
					<h4><i class="fa fa-angle-double-right"></i> ฉันทำการสั่งซื้อและมีการแจ้งยืนยันการสั่งซื้อเรียบร้อยแล้ว ฉันต้องทำอะไรต่อไป ?</h4>
					<p>การยืนยันคำสั่งซื้อจะถูกส่งถึงคุูณทาง อีเมล และ SMS หลังจากที่คุณสั่งซื้อสินค้าเป็นที่เรียบร้อยแล้ว ทางเราจะส่งอีเมล และ SMS อีกเมื่อสินค้าของคุณมีการเปลี่ยนแปลงสถานะ คุณสามารถตรวจสอบสถานะคำสั่งสื้อของคุณได้ <a href="<?php echo base_url('member/transfercustom'); ?>" class="link">คลิกที่นี่</a></p>
					<br>
					<h4><i class="fa fa-angle-double-right"></i> ฉันสามารถสั่งซื้อสินค้าได้โดยไม่ต้องมีบัญชีในเว็บไซต์ของ Tanisha ได้อย่างไร ?</h4>
					<p>ท่านสามารถสั่งซื้อสินค้ากับ Tanisha ได้โดยไม่ต้องมีบัญชี ดังนี้</p>
					<ol class="service-ol">
						<li>เลือกสินค้าที่ท่านต้องการ และดำเนินการสั่งซื้อ</li>
						<li>ไปที่ขั้นตอนเข้าสู่อีเมล์ ใส่อีเมล์ของท่าน และเลือก <bold>"ดำเนินการต่อโดยไม่ต้องใช้รหัสผ่าน"</bold></li>
						<li>ใส่ข้อมูลการจัดส่ง และเลือกช่องทางการชำระเงินของท่าน</li>
						<li>สั่งซื้อสินค้าของท่าน</li>
					</ol>
					<!-- <p>สำหรับรายละเอียดเพิ่มเติมเกี่ยวกับวิธีการสั่งซื้อคลิกที่นี่ <a href="#!" class="link">www.Tanisha.com/how-to-buy</a></p> -->
					<br>
					<p>เราขอแนะนำให้ท่านสร้างบัญชีผู้ใช้ ซึ่งจะได้รับการแจ้งโปรโมชั่นของ Tanisha ล่าสุดและน่าดึงดูดใจ อีกทั้งเพื่อให้มีข้อมูลและประวัติการสั่งซื้อของท่านถูกบันทึกไว้สำหรับประสบการณ์การช้อปปิ้งออนไลน์ที่ดีที่สุดของท่าน</p>
					<br>
					<h4><i class="fa fa-angle-double-right"></i> ฉันสามารถโทรไป Tanisha เพื่อทำการสั่งซื้อสินค้าได้หรือไม่ ?</h4>
					<p>เราสามารถช่วยเหลือท่านในการทำรายการสั่งซื้อทางโทรศัพท์ หากท่านเลือกการชำระเงินแบบเก็บเงินปลายทางอย่างไรก็ตาม</p>
					<!-- <p>เราขอแนะนำท่านดูรายละเอียดวิธีการสั่งซื้อสินค้าออนไลน์ <a href="#!" class="link">www.Tanisha.com/how-to-buy</a> </p> -->
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
			<?php }else{?>
				<h2 class="text-title">How to buy</h2>
				<div class="transport-wrapper">
					<h4><i class="fa fa-angle-double-right"></i> How do I place an order? ?</h4>
					<img src="<?php echo base_url('assets/images/howto/how-to-buy.png'); ?>" alt="howtopay">
					<br>
					<h4><i class="fa fa-angle-double-right"></i> I placed an order and received a confirmation of the order. what do i have to do next ?</h4>
					<p>An order confirmation will be sent to you via email and SMS after you have placed your order. We will send another email and SMS when your product status changes. You can check the status of your order. <a href="<?php echo base_url('member/transfercustom'); ?>" class="link">click here</a></p>
					<br>
					<h4><i class="fa fa-angle-double-right"></i> How can I place an order without an account on Tanisha's website? ?</h4>
					<p>You can order products with Tanisha without having an account as follows:</p>
					<ol class="service-ol">
						<li>Choose the product you want and order</li>
						<li>Go to the email login step. Enter your email and select <bold>"Continue without password"</bold></li>
						<li>Enter shipping information and choose your payment method</li>
						<li>order your product</li>
					</ol>
					<!-- <p>สำหรับรายละเอียดเพิ่มเติมเกี่ยวกับวิธีการสั่งซื้อคลิกที่นี่ <a href="#!" class="link">www.Tanisha.com/how-to-buy</a></p> -->
					<br>
					<p>We recommend that you create an account. which will be notified of latest and attractive Tanisha's promotions. Also to have your information and order history saved for your best online shopping experience.</p>
					<br>
					<h4><i class="fa fa-angle-double-right"></i> Can I call Tanisha to place an order? ?</h4>
					<p>We can assist you in placing your order over the phone. If you choose cash on delivery, however</p>
					<!-- <p>เราขอแนะนำท่านดูรายละเอียดวิธีการสั่งซื้อสินค้าออนไลน์ <a href="#!" class="link">www.Tanisha.com/how-to-buy</a> </p> -->
					<p>If you are unable to make an online purchase Please contact our customer service department. <a href="<?php echo base_url('contactus'); ?>" class="link">click here</a> We are very happy to help you.</p>
					<br>
					<h4><i class="fa fa-angle-double-right"></i> Can I remove products from How to shopping basket?</h4>
					<p>To remove a product from the shopping cart, you can do the following:</p>
					<p>- Press to select the basket symbol. at the top of the website page to enter your shopping cart</p>
					<p>- press select <bold>“Delete product list”</bold></p>
					<p>After that, the items in your shopping cart will be removed.</p>
					<br>
					<h4><i class="fa fa-angle-double-right"></i> Will I receive an order confirmation after placing an order? ?</h4>
					<p>you will get <bold>Order confirmation and order details</bold> through <bold>Email</bold> after you have made an order We'll notify you again once your item has been shipped.</p>
					<br>
			<?php }?>
				</div>


			</div>

		</div>
	</section>
</main>