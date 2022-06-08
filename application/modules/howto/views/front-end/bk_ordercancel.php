<main>
	<?php $this->template->load('header/breadcrumb'); ?>

	<section>
		<div class="row">
			<?php $this->load->view('front-end/sidebar'); ?>

			<div class="small-12 medium-9 large-7 columns">
			<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
				<h2 class="text-title">การยกเลิกสั่งซื้อ</h2>
				<div class="transport-wrapper">
					<h4 class="text-title"><i class="fa fa-angle-double-right"></i> ฉันจะยกเลิกคำสั่งซื้อของฉันได้อย่างไร ?</h4>
					<p>คุณสามารถยกเลิกคำสั่งซื้อสินค้าได้อย่างรวดเร็วและง่ายดายด้วยแบบฟอร์มการยกเลิกออนไลน์ของเรา ซึ่งคุณสามารถดำเนินการได้นานถึง 4 ชั่วโมงหลังจากที่คุณสั่งซื้อสินค้า โดยสินค้าไม่ได้อยู่ในสถานะระหว่างการจัดส่ง ในการใช้แบบฟอร์มคุณต้องสั่งซื้อสินค้ากับบัญชี Tanisha ของคุณ </p>
					<p>หากคุณได้สั่งซื้อแบบไม่ได้เป็นสมาชิก กรุณาสมัครสมาชิกโดยใช้อีเมล์เดียวกันกับที่คุณสั่งซื้อ (ลงทะเบียน<a href="#!" class="link">ที่นี่</a>ถ้าคุณยังไม่มีบัญชี)</p>
					<br>
					<p>การยกเลิกคำสั่งซื้อของคุณโดยใช้แบบฟอร์มการยกเลิกออนไลน์เป็นไปตามขั้นตอนดังต่อไปนี้</p>
					<ol class="service-ol">
						<li>เข้าสู่ระบบบัญชีของคุณ</li>
						<li>ไปที่หน้าจอ "สินค้าของฉัน" และเลือก "ยกเลิก" ตรงคำสั่งซื้อที่คุณต้องการที่จะยกเลิก</li>
						<li>กรอกข้อมูลในรูปแบบ:
							<p>- เลือกรายการสินค้าที่คุณต้องการยกเลิก</p>
							<p>- เลือกเหตุผลที่คุณยกเลิกสินค้า</p>
							<p>- อ่านและยอมรับนโยบายการยกเลิกของ Tanisha</p>
							<p>- คลิกที่ปุ่ม <bold>"NEXT"</bold></p>
						</li>
					</ol>
					<p>สถานะการสั่งซื้อของคุณจะปรับเป็น "ยกเลิก" ภายใน 60 นาที</p>
					<br>
					<p><bold>หมายเหตุ</bold>: การยกเลิกสามารถทำได้ก่อนที่จะเริ่มต้นการจัดส่ง คุณจะไม่สามารถเข้าแบบฟอร์มการยกเลิกออนไลน์หลังจากที่สินค้าของคุณได้รับการจัดส่งแล้ว</p>
					<br>
					<p>หากคุณไม่ได้มีบัญชี Tanisha กรุณาติดต่อเรา <a href="<?php echo base_url('contactus'."?language=".@$_GET['language']); ?>" class="link">คลิกที่นี่</a> เพื่อการยกเลิกคำสั่งซื้อของคุณ</p>
					<br>

					<h4 class="text-title"><i class="fa fa-angle-double-right"></i> นโยบายการยกเลิกของ Tanisha เป็นอย่างไร ?</h4>
					<p>ก่อนที่จะยกเลิกคำสั่งซื้อโปรดอ่านและทำความเข้าใจเงื่อนไขดังต่อไปนี้:</p>
					<ol class="service-ol">
						<li>คำสั่งซื้อที่ถูกยกเลิกจะไม่สามารถกู้คืนได้ในระบบของเรา</li>
						<li>ส่วนลดหรือโปรโมชั่นใดๆที่ใช้ในการสั่งซื้อจะไม่สามารถนำกลับมาใช้ได้</li>
						<li>ราคาสินค้าอาจมีการเปลี่ยนแปลงขึ้นอยู่กับโปรโมชั่นของ Tanishaoor เราอาจไม่สามารถนำเสนอสินค้าในราคาเดิมได้ถ้าคุณยกเลิกและสั่งซื้อใหม่</li>
						<li>ในกรณีที่ชำระเงินล่วงหน้าผ่านบัตรเครดิตหรือเดบิต คุณจะได้รับยอดเงินคืนโดยอัตโนมัติไปยังบัญชีของคุณภายในรอบบิลหนึ่งเดือนหรือ 45 วันขึ้นอยู่กับนโยบายของธนาคารของคุณ</li>
						<li>ในกรณีที่มีการชำระเงินล่วงหน้าผ่านเคาน์เตอร์บริการชำระเงิน ฝ่ายบริการลูกค้าของเราจะติดต่อคุณสำหรับข้อมูลธนาคารของคุณเพื่อดำเนินการคืนเงิน</li>
						<li>หากคุณใช้คูปองแทนเงินสดในการสั่งซื้อ ทางเราจะส่งรหัสใหม่ให้คุณผ่านทางอีเมลภายในสามวันทำการ</li>
					</ol>
					<br>

					<h4 class="text-title"><i class="fa fa-angle-double-right"></i> ฉันสามารถยกเลิกหลายรายการในคำสั่งซื้อของฉันได้ไหม ?</h4>
					<p>คุณสามารถยกเลิกสินค้าในคำสั่งซื้อของคุณภายใต้เงื่อนไขดังต่อไปนี้:</p>
					<ol class="service-ol-2">
						<li>รายการสั่งซื้อที่สามารถทำการยกเลิกผ่านออนไลน์ได้ ต้องเป็นรายการที่ถูกกดสั่งซื้ออย่างสมบูรณ์ไม่เกิน 4 ชั่วโมงก่อนที่จะส่งแบบฟอร์ม</li>
						<li>สินค้าชองคุณไม่อยู่ในระหว่างการจัดส่ง</li>
						<li>หากมูลค่าการสั่งซื้อที่เหลือหลังจากที่คุณยกเลิกหนึ่งหรือหลายรายการในคำสังซื้อนั้น ไม่ถึงเงื่อนไขสำหรับส่วนลด โปรโมชั่น หรือการยกเว้นค่าธรรมเนียม คำสั่งซื้อของคุณจะถูกยกเลิก</li>
					</ol>
					<br>

					<h4 class="text-title"><i class="fa fa-angle-double-right"></i> ฉันต้องจ่ายค่าใช้จ่ายใดๆ เพิ่มเติมสำหรับการยกเลิกคำสั่งซื้อ ?</h4>
					<p>การยกเลิกสินค้าไม่มีค่าใช้จ่าย</p>
					<br>
					<p>มูลค่าการสั่งซื้อที่เหลืออยู่หลังจากที่คุณยกเลิกหนึ่งหรือหลายรายการไม่ถึงเงื่อนไขสำหรับส่วนลด โปรโมชั่น หรือการยกเว้นค่าธรรมเนียม เราจะยกเลิกคำสั่งซื้อทั้งหมด หากคุณยังต้องการได้สินค้ากรุณาสั่งซื้อใหม่อีกครั้ง</p>
					<br>

					<h4 class="text-title"><i class="fa fa-angle-double-right"></i> ฉันจะรู้ว่าการยกเลิกคำสั่งซื้อของฉันสำเร็จได้อย่างไร ?</h4>
					<p>หลังจากที่กรอกแบบฟอร์มการยกเลิกสินค้าออนไลน์คุณจะเห็นประโยค "ยกเลิกคำสั่งซื้อของคุณเรียบร้อยแล้ว" ขึ้นบนเว็บไซต์ หลังจากนั้นเราจะดำเนินการตามคำขอของคุณภายใน 60 นาที</p>
					<br>
					<p>หากต้องการตรวจสอบว่าคำสั่งซื้อของคุณถูกยกเลิกหรือไม่คุณสามารถเข้าสู่บัญชี Tanisha ของคุณ และไปที่ "สินค้าของฉัน" หากสถานะของสินค้าแสดงว่า "ยกเลิก" คุณสามารถมั่นใจได้ว่าการยกเลิกได้ประสบความสำเร็จ</p>
					<br>
					<p>ในกรณีที่การยกเลิกของคุณไม่ได้มีการตอบรับจาก Tanisha ภายใน 60 นาที สินค้าของคุณอาจจะอยู่ในการจัดส่งและไม่สามารถยกเลิกได้ กรุณาติดต่อเรา <a href="<?php echo base_url('contactus'."?language=".@$_GET['language']); ?>" class="link">คลิกที่นี่</a> สำหรับความช่วยเหลือเพิ่มเติม</p>
					<br>
		<?php }else{?>
			<h2 class="text-title">order cancellation</h2>
				<div class="transport-wrapper">
					<h4 class="text-title"><i class="fa fa-angle-double-right"></i> How do I cancel my order? ?</h4>
					<p>You can cancel an order quickly and easily with our online cancellation form. This can be done up to 4 hours after you place your order. The product is not in delivery status. To use the form, you must place an order with your Tanisha account. </p>
					<p>If you have purchased as a non-member Please register using the same email address you ordered (register<a href="#!" class="link">here</a>If you don't have an account)</p>
					<br>
					<p>To cancel your order using the online cancellation form, follow the steps below.</p>
					<ol class="service-ol">
						<li>Login to your account</li>
						<li>Go to the "My Products" screen and select "Cancel" on the order you wish to cancel.</li>
						<li>fill in the form:
							<p>- Select the item you wish to cancel.</p>
							<p>- Select the reason for your cancellation.</p>
							<p>- Read and accept Tanisha's cancellation policy.</p>
							<p>- click on the button <bold>"NEXT"</bold></p>
						</li>
					</ol>
					<p>Your order status will be "Cancelled" within 60 minutes.</p>
					<br>
					<p><bold>note</bold>: Cancellations can be made prior to the start of delivery. You will not be able to access the online cancellation form after your order has been shipped.</p>
					<br>
					<p>If you don't have a Tanisha account, please contact us. <a href="<?php echo base_url('contactus'."?language=".@$_GET['language']); ?>" class="link">click here</a> to cancel your order</p>
					<br>

					<h4 class="text-title"><i class="fa fa-angle-double-right"></i> What is Tanisha's cancellation policy??</h4>
					<p>What is Tanisha's cancellation policy?:</p>
					<ol class="service-ol">
						<li>Canceled orders cannot be restored in our system.</li>
						<li>Any discounts or promotions used in the purchase will not be refunded.</li>
						<li>Product prices are subject to change depending on Tanishaoor promotions. We may not be able to offer the same product at the same price if you cancel and re-order.</li>
						<li>In the case of prepayment via credit or debit card You will be automatically refunded to your account within a one-month or 45-day billing cycle depending on your bank's policy.</li>
						<li>In the case of prepayment via the payment service counter Our customer service will contact you for your bank information to process the refund.</li>
						<li>If you use a coupon instead of cash for your purchase We will send you a new code via email within three business days.</li>
					</ol>
					<br>

					<h4 class="text-title"><i class="fa fa-angle-double-right"></i> Can I cancel multiple items in my order? ?</h4>
					<p>You can cancel the product in your order under the following conditions.:</p>
					<ol class="service-ol-2">
						<li>Orders that can be canceled online Items must be fully ordered no later than 4 hours prior to submitting the form.</li>
						<li>Your item is not in delivery.</li>
						<li>If the remaining order value after you cancel one or more items in that order Conditions for discounts, promotions or fee waivers are not met. Your order will be cancelled.</li>
					</ol>
					<br>

					<h4 class="text-title"><i class="fa fa-angle-double-right"></i> Do I have to pay any expenses? More for canceling an order ?</h4>
					<p>Product cancellation is free of charge.</p>
					<br>
					<p>The remaining order value after you cancel one or more items does not qualify for a discount, promotion or fee waiver. We will cancel all orders. If you still want the product, please order again.</p>
					<br>

					<h4 class="text-title"><i class="fa fa-angle-double-right"></i> How do I know if my order has been cancelled? ?</h4>
					<p>After filling out the online product cancellation form, you will see a sentence. "Your order has been canceled successfully" appears on the website. After that we will process your request within 60 minutes.</p>
					<br>
					<p>To check if your order has been canceled, you can log in to your Tanisha account and go to "My Products". If the status of the product shows "Cancelled", you can rest assured that the cancellation was successful.</p>
					<br>
					<p>In the event that your cancellation is not received from Tanisha within 60 minutes, your item may be in delivery and cannot be cancelled. please contact us <a href="<?php echo base_url('contactus'."?language=".@$_GET['language']); ?>" class="link">click here</a> for more help</p>
		<?php }?>
					<!-- <h4 class="text-title"><i class="fa fa-angle-double-right"></i> ฉันเพิ่งยกเลิกคำสั่งซื้อของฉัน การคืนเงินจะใช้เวลาเท่าไหร่ ?</h4>
					<p>ในกรณีที่มีการยกเลิกสินค้า การคืนเงินจะดำเนินการภายในสองวันทำการของการส่งแบบฟอร์มการยกเลิกออนไลน์</p>
					<br>
					<p>คุณจะได้รับอีเมลและ SMS ในกรณีที่การคืนเงินของคุณเข้าสู่กระบวนการการคืนเงินทั้งหมด ทั้งนี้ขึ้นอยู่กับวิธีการคืนเงินและธนาคารของคุณ</p>
					<br>
					<p><a href="#!" class="link">คลิกที่นี่</a> เพื่อดูรายละเอียดเพิ่มเติมเกี่ยวกับการคืนเงิน</p> -->
				</div>

			</div>
		</div>
	</section>
</main>