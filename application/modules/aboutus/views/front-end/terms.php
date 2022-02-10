<main>
	<?php $this->template->load('header/breadcrumb'); ?>

	<section>
		<div class="row">
			<?php $this->load->view('front-end/sidebar'); ?>

			<div class="small-12 medium-9 large-7 columns">
			<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
					<h2 class="text-title">ข้อตกลงและเงื่อนไข</h2>
					<h5>เงื่อนไขและข้อกำหนดในการซื้อขาย</h5>
					<p><bold>1. นิยาม และการตีความ</bold></p>
					<p>เว้นแต่จะกำหนดไว้เป็นอย่างอื่น นิยามและข้อกำหนดในการตีความที่กำหนดไว้ในเอกสารแนบท้าย 1 ให้ใช้บังคับกับเงื่อนไขและข้อกำหนดในการซื้อขายในที่นี้</p>
					<br>

					<p><bold>2. การสั่งซื้อสินค้า</bold></p>
					<p>เงื่อนไขที่ท่านต้องปฏิบัติตาม: ท่านตกลงที่จะปฏิบัติตามแนวปฏิบัติ คำสั่ง ระเบียบการดำเนินงาน และนโยบายและคำแนะนำทั้งหลายเกี่ยวกับการสั่งซื้อสินค้าผ่านแพลตฟอร์ม รวมถึงการแก้ไขเพิ่มเติมใด ๆ ในสิ่งที่กล่าวมาข้างต้นซึ่งออกใช้บังคับ (ในนามของผู้ขาย ไม่ว่าจะเป็นในส่วนของการใช้งานแพลตฟอร์มหรือส่วนที่เกี่ยวข้องกับการซื้อสินค้า) เป็นครั้งคราวไป ทั้งนี้ ทางร้านสงวนสิทธิที่จะปรับปรุงแนวปฏิบัติ คำสั่ง ระเบียบการดำเนินงาน และนโยบายและคำแนะนำดังกล่าวในเวลาใด ๆ ก็ได้ และถือว่าท่านได้รับทราบและยอมรับผูกพันตามการเปลี่ยนแปลงดังกล่าวเมื่อมีการเผยแพร่บนแพลตฟอร์มแล้ว</p>
					<br>

					<p><bold>3. การส่งมอบสินค้า</bold></p>
					<p>- ที่อยู่: การส่งมอบสินค้าให้ทำ ณ ที่อยู่ที่ท่านระบุไว้ในคำสั่งซื้อของท่านไม่ว่าโดยผู้ขาย ในนามของผู้ขาย</p>
					<p>- ค่าบริการในการส่งมอบ & บรรจุหีบห่อ: ค่าบริการในการส่งมอบและบรรจุหีบห่อให้กำหนดไว้ในคำสั่งซื้อ</p>
					<p>-  การติดตามสินค้า: ท่านอาจจะติดตามสถานะการส่งมอบสินค้าได้ที่หน้า “ติดตามคำสั่งซื้อ” ของแพลตฟอร์ม</p>
					<br>

					<p><bold>4. ราคาของสินค้า</bold></p>
					<p>ราคาที่ประกาศขาย: ราคาของสินค้าที่ต้องชำระโดยลูกค้าจะได้แก่ราคาที่ประกาศขาย ณ เวลาที่มีการส่งคำสั่งซื้อจากลูกค้าไปยังผู้ขาย (ผ่านทางแพลตฟอร์ม)</p>
					<br>

					<p><bold>5. การชำระเงิน</bold></p>
					<p>ทั่วไป: ท่านอาจจะชำระเงินสำหรับสินค้าโดยใช้วิธีการการชำระเงินใด ๆ ที่กำหนดในช่วงเวลานั้น ๆ เมื่อท่านส่งคำสั่งซื้อแล้ว การชำระเงินจริงจะเรียกเก็บเฉพาะเมื่อผู้ขายตอบรับคำสั่งซื้อของท่านและเกิดสัญญาที่ทำกับลูกค้าขึ้นแล้ว การชำระเงินทั้งหลายให้กระทำแก่ทางร้าน ไม่ว่าจะรับชำระเงินตามสิทธิของทางร้านเอง หรือในฐานะตัวแทนของผู้ขาย (เมื่อผู้ขายเป็นผู้ขายที่เป็นบุคคลภายนอก) ท่านรับทราบว่าทางร้านมีสิทธิที่จะเรียกให้มีการชำระเงินจากท่านในนามของผู้ขายที่เป็นบุคคลภายนอกได้</p>
					<br>

					<p><bold>6. คำถามและข้อร้องเรียน</bold></p>
					<p>หากท่านมีคำถามหรือข้อร้องเรียนใด ๆ กรุณาติดต่อ โดยใช้เพจ “ติดต่อเรา” บนแพลตฟอร์ม เราจะติดต่อประสานงานกับผู้ขายเกี่ยวกับคำถามและข้อร้องเรียนของท่าน</p>
					<br>

					<p><bold>7. การยกเลิก</bold></p>
					<p>การยกเลิกโดยฝ่ายผู้ขาย: ทั้งนี้ โดยไม่กระทบต่อสิทธิอื่นใดในการยกเลิกสัญญาที่ระบุไว้ในที่อื่นใดในเงื่อนไขและข้อกำหนดในการซื้อขายนี้ ผู้ขาย ที่กระทำการในนามของผู้ขาย อาจจะหยุดการขนส่งสินค้าใด ๆ ระงับการส่งมอบให้แก่ลูกค้า และ/หรือยกเลิกสัญญาที่ทำกับลูกค้าโดยให้มีผลในทันทีโดยการบอกกล่าวเป็นหนังสือไปยังลูกค้า ณ วัน หรือในเวลาใด ๆ หากเกิดเหตุการณ์อย่างหนึ่งอย่างใดดังต่อไปนี้:</p>
					<br>
			<?php }else{?>
				<h2 class="text-title">Terms and Conditions</h2>
					<h5>Terms and Conditions of Sale</h5>
					<p><bold>1. Definition and Interpretation</bold></p>
					<p>unless otherwise specified The definitions and provisions of interpretation set forth in Annex 1 shall apply to the Terms and Conditions of Sale herein.</p>
					<br>

					<p><bold>2. order</bold></p>
					<p>Conditions you must comply with: You agree to abide by the Code of Conduct, Orders, Rules of Conduct. and policies and instructions regarding the purchase of goods through the Platform. including any amendments to the foregoing which come into force. (on behalf of the seller From time to time, the store reserves the right to update the guidelines, directives, operating rules. and such policies and instructions at any time and you are deemed to have acknowledged and agreed to be bound by such changes once they are published on the Platform.</p>
					<br>

					<p><bold>3. Delivery of goods</bold></p>
					<p>- Address: Delivery of the Goods must be made to the address you specify in your Order either by the Seller. on behalf of the seller</p>
					<p>- Delivery & Packing Charges: The delivery and packing charges are set forth in the order.</p>
					<p>- Tracking: You may track the delivery status on the page. “Order Tracking” of the Platform</p>
					<br>

					<p><bold>4. price of goods</bold></p>
					<p>Listing Price: The price of the Goods payable by the Customer will be the Listing Price at the time the Order is sent from the Customer to the Seller. (via platform)</p>
					<br>

					<p><bold>5. payment</bold></p>
					<p>General: You may pay for the Product using any of the payment methods set out at the time when you have submitted your Order. Actual payment will be charged only when the Seller accepts your order and the Customer Contract has been entered into. All payments must be made to the store. Whether to accept payments according to the rights of the shop itself or on behalf of the seller (when the Seller is a Third Party Vendor). You acknowledge that the Store has the right to demand payment from you on behalf of the Third Party Vendor.</p>
					<br>

					<p><bold>6. Questions and Complaints</bold></p>
					<p>If you have any questions or complaints, please contact us using the “Contact Us” page on the Platform. We will liaise with the seller regarding your questions and complaints.</p>
					<br>

					<p><bold>7. cancellation</bold></p>
					<p>Termination by Seller: Without prejudice to any other right of termination elsewhere in these Terms & Conditions of Sale, Seller acting on Seller's behalf. may suspend any shipment of goods, suspend deliveries to the Customer; and/or terminate the Customer Contract with immediate effect by written notice to the Customer on or at any time if any of the following events occur:</p>
			<?php }?>
					<!-- <p><bold>6. การส่งคืนสินค้า</bold></p>
					<p>นโยบายการคืนสินค้า: สินค้าที่ส่งคืนทั้งหลายต้องทำตามคำแนะนำที่กำหนดไว้ใน นโยบายการคืนสินค้า ที่ระบุไว้ใน <a href="#!" class='link'>www.Tanisha/service/refunds</a></p>
					<br> -->

					<!-- <p><bold>7. คำถามและข้อร้องเรียน</bold></p>
					<p>หากท่านมีคำถามหรือข้อร้องเรียนใด ๆ กรุณาติดต่อ โดยใช้เพจ “ติดต่อเรา” บนแพลตฟอร์ม เราจะติดต่อประสานงานกับผู้ขายเกี่ยวกับคำถามและข้อร้องเรียนของท่าน</p>
					<br> -->

					<!-- <p><bold>8. การยกเลิก</bold></p>
					<p>การยกเลิกโดยฝ่ายผู้ขาย: ทั้งนี้ โดยไม่กระทบต่อสิทธิอื่นใดในการยกเลิกสัญญาที่ระบุไว้ในที่อื่นใดในเงื่อนไขและข้อกำหนดในการซื้อขายนี้ ผู้ขาย ที่กระทำการในนามของผู้ขาย อาจจะหยุดการขนส่งสินค้าใด ๆ ระงับการส่งมอบให้แก่ลูกค้า และ/หรือยกเลิกสัญญาที่ทำกับลูกค้าโดยให้มีผลในทันทีโดยการบอกกล่าวเป็นหนังสือไปยังลูกค้า ณ วัน หรือในเวลาใด ๆ หากเกิดเหตุการณ์อย่างหนึ่งอย่างใดดังต่อไปนี้:</p>
					<br> -->
			</div>
		</div>
	</section>
</main>