<main>
	<?php $this->template->load('header/breadcrumb'); ?>

	<section>
		<div class="row">
		<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
			<div class="wrapper-about-title">
				<h1>เกี่ยวกับเรา</h1>
				<div class="about-desc">
					<h4>ยินดีต้อนรับสู่เว็บไซต์ Tanisha</h4>
				</div>
			</div>
			<div class="small-12 columns">
				<br>
				<h4 class="text-bk"><bold>Tanisha Vision</bold></h4>
				<div class="_dotranslate">
					<p>ประกอบกิจการจำหน่าย นำเข้า ส่งออก ผลิตภัณฑ์เสริมอาหาร อาหารบำรุงสุขภาพสินค้าอุปโภค บริโภคหมวดธุรกิจ : ร้านขายปลีกสินค้าทางเภสัชภัณฑ์และเวชภัณฑ์</p>
				</div>
				<br/>
				<div class="_notranslate notranslate">
					<p>Business selling, importing, exporting food supplements. Healthy food, consumer products Business Consumption : Pharmacy and medical supplies retail store</p>
				</div>
				<br>
				<h4 class="text-bk"><bold>ประสบการณ์การช้อปปิ้งที่สะดวกสบายบนเว็บไซต์</bold></h4>
				<p>หมดปัญหารถติด เบียดเสียดกับผู้คน และรอต่อคิวอันยาวเหยียด เพียงคุณมีคอมพิวเตอร์หรือโทรศัพท์มือถือ ก็สามารถช้อปปิ้งผ่านเว็บไซต์ได้จากทุกที่ทุกเวลาที่คุณต้องการ ด้วยระบบบริการจัดส่งสินค้าที่รวดเร็วและเชื่อถือได้ ผลิตภัณฑ์ที่คุณสั่งจะส่งตรงถึงหน้าบ้านคุณ</p>
				<br>
				<h4 class="text-bk"><bold>ประสบการณ์การช้อปปิ้งที่สะดวกสบายบนเว็บไซต์</bold></h4>
				<p>เข้าถึงฐานลูกค้าผ่านระบบที่ครอบคลุมทั้งกระบวนการขาย</p>
				<br>
				<h4 class="text-bk"><bold>ฝ่ายบริการลูกค้า</bold></h4>
				<p>หากท่านมีคำถามหรือข้อเสนอแนะใดๆ โปรดติดต่อฝ่ายบริการลูกค้าของ Tanisha <a href="<?php echo base_url('contactus'); ?>" class="link">คลิกที่นี่</a> ทางเจ้าหน้าที่จะรีบดำเนินการตรวจสอบ และติดต่อกลับท่านภายใน 24 ชม.</p>
			</div>
		<?php }else{?>
			<div class="wrapper-about-title">
				<h1>about us</h1>
				<div class="about-desc">
					<h4>Welcome to the Tanisha website.</h4>
				</div>
			</div>
			<div class="small-12 columns">
				<br>
				<h4 class="text-bk"><bold>Tanisha Vision</bold></h4>
				<div class="_dotranslate">
					<p>Business selling, importing, exporting food supplements. Health food, consumer products Business Consumption : Pharmacy and medical supplies retail store</p>
				</div>
				<br/>
				<div class="_notranslate notranslate">
					<p>Business selling, importing, exporting food supplements. Healthy food, consumer products Business Consumption : Pharmacy and medical supplies retail store</p>
				</div>
				<br>
				<h4 class="text-bk"><bold>Convenient shopping experience on the website</bold></h4>
				<p>get rid of traffic jams crowd with people and wait in long queues All you need is a computer or mobile phone. You can shop through the website anytime and anywhere you want. with a fast and reliable delivery service system The products you order will be delivered directly to your doorstep.</p>
				<br>
				<h4 class="text-bk"><bold>Convenient shopping experience on the website</bold></h4>
				<p>Access to the customer base through a system that covers the whole sales process.</p>
				<br>
				<h4 class="text-bk"><bold>customer service</bold></h4>
				<p>If you have any questions or suggestions Please contact Tanisha customer service. <a href="<?php echo base_url('contactus'); ?>" class="link">click here</a> The staff will hurry to investigate. and contact you within 24 hours.</p>
			</div>
		<?php }?>
		</div>
	</section>
</main>