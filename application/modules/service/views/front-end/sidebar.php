<div class="small-12 medium-3 columns">
	<ul class="menu vertical categories">
	<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
		<li class="categoires-head"><h3>ฝ่ายบริการลูกค้า</h3></li>
		<li><a href="<?php echo base_url('service'."?language=".@$_GET['language']); ?>" 			class="categoires-title <?php if (uri_seg(1) === 'service' && !uri_seg(2)) echo 'active'; ?>">ศูนย์ให้ความช่วยเหลือ</a></li>
	<?php }else{?>
		<li class="categoires-head"><h3>Customer Service</h3></li>
		<li><a href="<?php echo base_url('service'."?language=".@$_GET['language']); ?>" 			class="categoires-title <?php if (uri_seg(1) === 'service' && !uri_seg(2)) echo 'active'; ?>"> Help Center</a></li>
	<?php }?>
		<!--<li><a href="<?php echo base_url('service/transports'."?language=".@$_GET['language']); ?>" class="categoires-title <?php if (uri_seg(1) === 'service' &&  uri_seg(2) === 'transports'	) echo 'active'; ?>">การขนส่ง และการจัดส่ง</a></li>-->
<!-- 		<li><a href="<?php echo base_url('service/refunds'."?language=".@$_GET['language']); ?>" 	class="categoires-title <?php if (uri_seg(1) === 'service' &&  uri_seg(2) === 'refunds'		) echo 'active'; ?>">การคืนสินค้า และการคืนเงิน</a></li>
		<li><a href="<?php echo base_url('service/returns'."?language=".@$_GET['language']); ?>" 	class="categoires-title <?php if (uri_seg(1) === 'service' &&  uri_seg(2) === 'returns'		) echo 'active'; ?>">วิธีการคืนสินค้า</a></li> -->
	</ul>
</div>