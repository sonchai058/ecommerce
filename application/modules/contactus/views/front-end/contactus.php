<?php $site = $this->webinfo_model->getOnceWebMain(); ?>
<main>
	<?php $this->template->load('header/breadcrumb'); ?>

	<section>
		<div class="row">
			<div class="columns">
				<div class="wrapper-contact-title">
				<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
					<h1><?php echo $title; ?></h1>
				<?php }else{?>
					<h1><?php echo 'Contact Us'; ?></h1>
				<?php }?>
					<div class="contact-desc">
						<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
						<h4>ในกรณีที่ศูนย์บริการของเราได้มีความต้องการอย่างสูงจากลูกค้าคุณสามารถส่งข้อความ คำถามใดๆ หรือข้อเสนอแนะให้เราผ่านทางเว็บฟอร์มด้านล่าง</h4>
						<?php }else{?>
							<h4>In the event that our service center has high demand from customers, you can send us a message, any questions or suggestions via the web form below.</h4>
						<?php }?>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="small-12 medium-6 columns">
				<div class="form-contact">
				<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
					<h5>- คุณสามารถหาคำตอบอย่างสะดวกและรวดเร็วได้ที่: <a href="<?php echo base_url('service'."?language=".@$_GET['language']); ?>" class="help">ศูนย์ช่วยเหลือ</a> ของเรา</h5>
					<!--<h5>- หากคุณต้องการติดตามสถานะคำสั่งซื้อ: กรุณาคลิกที่ <a href="<?php if (get_session('C_ID') != '') echo base_url('member/history'); else echo base_url('member/transfercustom'); ?>" class="help">ติดตามสถานะคำสั่งซื้อ</a> ของเรา</h5> -->
				<?php }else{?>
					<h5>- You can find answers easily and quickly at: <a href="<?php echo base_url('service'."?language=".@$_GET['language']); ?>" class="help">Help Center</a></h5>
					<!--<h5>- หากคุณต้องการติดตามสถานะคำสั่งซื้อ: กรุณาคลิกที่ <a href="<?php if (get_session('C_ID') != '') echo base_url('member/history'); else echo base_url('member/transfercustom'); ?>" class="help">ติดตามสถานะคำสั่งซื้อ</a> ของเรา</h5>--> 
				<?php }
					$attributes = array(
						'class' => 'form-contact-to-email'
					);
					if(@$_GET['language']==''|| @$_GET['language']=='thai'){
					echo form_open('contactus', $attributes);
					if (validation_errors()) { ?> <font color="red"><?php echo form_error('name'); ?></font> <?php }
					$data = array(
						'type'			=> 'text',
						'id' 			=> 'name',
						'name' 			=> 'name',
						'placeholder' 	=> 'ชื่อ-นามสกุล...',
						'required' 		=> 'required',
						'title' 		=> 'ชื่อ-นามสกุล',
					);
					echo form_input($data);
					if (validation_errors()) { ?> <font color="red"><?php echo form_error('email'); ?></font> <?php }
					$data = array(
						'type'			=> 'email',
						'id' 			=> 'email',
						'name' 			=> 'email',
						'placeholder' 	=> 'อีเมล...',
						'required' 		=> 'required',
						'title' 		=> 'อีเมล',
					);
					echo form_input($data);
					if (validation_errors()) { ?> <font color="red"><?php echo form_error('subject'); ?></font> <?php }
					$data = array(
						'type'			=> 'text',
						'id' 			=> 'subject',
						'name' 			=> 'subject',
						'placeholder' 	=> 'หัวข้อ...',
						'required' 		=> 'required',
						'title' 		=> 'หัวข้อ',
					);
					echo form_input($data);
					if (validation_errors()) { ?> <font color="red"><?php echo form_error('message'); ?></font> <?php }
					$data = array(
						'id' 			=> 'message',
						'name' 			=> 'message',
						'placeholder' 	=> 'ข้อความ...',
						'required' 		=> 'required',
						'cols' 			=> '30',
						'rows' 			=> '7',
						'title' 		=> 'ข้อความ',
					);
					echo form_textarea($data); 
					}else{
						echo form_open('contactus', $attributes);
						if (validation_errors()) { ?> <font color="red"><?php echo form_error('name'); ?></font> <?php }
						$data = array(
							'type'			=> 'text',
							'id' 			=> 'name',
							'name' 			=> 'name',
							'placeholder' 	=> 'name-lastname...',
							'required' 		=> 'required',
							'title' 		=> 'name-lastname',
						);
						echo form_input($data);
						if (validation_errors()) { ?> <font color="red"><?php echo form_error('email'); ?></font> <?php }
						$data = array(
							'type'			=> 'email',
							'id' 			=> 'email',
							'name' 			=> 'email',
							'placeholder' 	=> 'email...',
							'required' 		=> 'required',
							'title' 		=> 'email',
						);
						echo form_input($data);
						if (validation_errors()) { ?> <font color="red"><?php echo form_error('subject'); ?></font> <?php }
						$data = array(
							'type'			=> 'text',
							'id' 			=> 'subject',
							'name' 			=> 'subject',
							'placeholder' 	=> 'topic...',
							'required' 		=> 'required',
							'title' 		=> 'topic',
						);
						echo form_input($data);
						if (validation_errors()) { ?> <font color="red"><?php echo form_error('message'); ?></font> <?php }
						$data = array(
							'id' 			=> 'message',
							'name' 			=> 'message',
							'placeholder' 	=> 'message...',
							'required' 		=> 'required',
							'cols' 			=> '30',
							'rows' 			=> '7',
							'title' 		=> 'message',
						);
						echo form_textarea($data); 
					}
 ?>
					<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
					<a href="#" class="btn-form-submit">ส่งข้อความ</a> 
					<?php }else{?>
						<a href="#" class="btn-form-submit">Send</a> 
					<?php }?>
					<?php
					echo form_hidden('contacted', 'contacted');
					echo form_close(); ?>
  				</div>
			</div>
			<div class="small-12 medium-6 columns">
				<div class="img-contact">
					<img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="">
				</div>
				<div class="home-adr _dotranslate">
					<?php $this->template->load('content/address'); ?>
				</div>
				<div class="home-adr _notranslate notranslate">
				<div class="adr-1">
					<p>
					<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
						บริษัท ธนิชา อินเตอร์เนชั่นแนล จำกัด.<br>
						สำนักงานใหญ่ : เลขที่ 86/13 ถนนเสาหิน ซอย.18 ตำบลหนองหอย อำเภอเมือง จังหวัดเชียงใหม่ 50000 <br>
						Tax ID : 0505564012718<br/>
						tanisha.inter@gmail.com
					<?php }else{?>
						TANISHA INTERNATIONAL COMPANY LIMITED
						HEAD OFFICE : No.86/13 , SAO HIN ROAD, 
						LAND 18, NONG HOI DISTRICT, MUANG AREA, CHIANG MAI THAILAND 50000
						PHONE : (+66)53-282-149 
					<?php }?>
						<a class="help" href="<?php echo base_url('assets/images/map/Tanisha.jpg'); ?>" target="_blank">>> Click to view the map.</a>
					</p>
					<p>
						Phone: (099) 367-4224 &nbsp; Fax: -
					</p>
				</div>
				<!--
				<div class="adr-2">
					<p>
						J. Wood Industry Co., Ltd.<br>
						61 Moo 4 Tambon Buakkhang, Sankamphaeng district, Chiangmai
						<a class="help" href="<?php echo base_url('assets/images/map/jwood.jpg'); ?>" target="_blank">>> Click to view the map.</a>
					</p>
					<p>
						Phone: (099) 367 4224 &nbsp; Fax: -
					</p>
				</div>
				-->
			</div>
				<div>
					<img class="lineQRC" width="165" style="float: left;" src="<?php echo base_url("assets/images/line_qr.png")?>">
					<div class="contact_info" style="float: left;margin-top: 20px;">
						<span style="font-size: 19px;font-weight: bold;">Line ID :</span> <span><a href="https://lin.ee/ZSlO3GH">Tanisha Official</a></span> 
						<a href="https://lin.ee/ZSlO3GH"><img width="128" src="<?php echo site_url('assets/images/add-line-icon.png')?>"></a>
						<br>
						<span style="font-size: 19px;font-weight: bold;">Facebook :</span> <a target="_blank" class="help" href="https://www.facebook.com/thanishaofficial">Link</a><br>
						<span style="font-size: 19px;font-weight: bold;">Youtube :</span> <a target="_blank" class="help" href="https://youtube.com/channel/UC2Ih0xjIfUTHN2xb6cBPp2Q">Link</a><br>
						<span style="font-size: 19px;font-weight: bold;">Instragram :</span> <a target="_blank" class="help" href="https://instagram.com/tanisha.thailand?utm_medium=copy_link">Link</a><br>
						<span style="font-size: 19px;font-weight: bold;">Call center :</span> <span>053-282-149</span><br>
						<span style="font-size: 19px;font-weight: bold;">E-Mail :</span> <span>tanisha.inter@gmail.com</span><br>
						<a target="_blank" class="help" href="https://tanisha-international.com/">www.tanisha-international.com</a>
					</div>
				</div>
			</div>
		</div>
		<style type="text/css">
        /* Set the size of the div element that contains the map */
        
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
	<br/>
		<div class="row">
			<div class="columns">
				<!--
				<div class="contact-map" id="map"></div>
				-->
				<div id="map"></div>
			</div>
		</div>
	</section>
</main> <?php
$WD_Name 			= '';
$WD_ImgMap 			= '';
$WD_Latitude 		= 0;
$WD_Longjitude 		= 0;
if (count($site) 	> 0) {
	if ($site['WD_Name'] 		!= '') $WD_Name 		= $site['WD_Name'];
	if ($site['WD_Latitude'] 	!= '') $WD_Latitude 	= $site['WD_Latitude'];
	if ($site['WD_Longjitude'] 	!= '') $WD_Longjitude 	= $site['WD_Longjitude'];
	if ($site['WD_ImgMap'] 		!= '') $WD_ImgMap 		= base_url('assets/images/webconfig/'.$site['WD_ImgMap']);
} ?>
<!--
<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<script>
	var WD_Name 		= '';
	// var WD_ImgMap 		= '';
	var WD_ImgMap 		= [];
	var WD_Latitude 	= 0;
	var WD_Longjitude 	= 0;
	var latLngLenght 	= 0;

	var WD_markname 	= ['TANISHA INTERNATIONAL COMPANY LIMITED'];
	var WD_Addmaps 		= ['Tanisha.jpg', 'jwood.jpg'];

	var WD_Address 		= [];
	var WD_Tel 			= [];
	var WD_Fax 			= [];

	function address(handleData) {
		var request = $.ajax({
			url: "<?php echo base_url('main/address'."?language=".@$_GET['language']); ?>"
		});
        request.done(function(msg) {
        	handleData(JSON.parse(msg));
        });
        request.fail(function(jqXHR, textStatus) {
        	alert('Request failed: ' + textStatus);
        });
	}

	function tel(handleData) {
		var request = $.ajax({
			url: "<?php echo base_url('main/tel'."?language=".@$_GET['language']); ?>"
		});
        request.done(function(msg) {
        	handleData(JSON.parse(msg));
        });
        request.fail(function(jqXHR, textStatus) {
        	alert('Request failed: ' + textStatus);
        });
	}

	function fax(handleData) {
		var request = $.ajax({
			url: "<?php echo base_url('main/fax'."?language=".@$_GET['language']); ?>"
		});
        request.done(function(msg) {
        	handleData(JSON.parse(msg));
        });
        request.fail(function(jqXHR, textStatus) {
        	alert('Request failed: ' + textStatus);
        });
	}
/*
  	function initialize() {
  		address(function(output){ WD_Address = output; });
  		tel(function(output){ WD_Tel = output; });
  		fax(function(output){ WD_Fax = output; });

  		setTimeout(function() {
	  		WD_Name 		= "<?php echo $WD_Name; 		?>";
	  		WD_ImgMap[0] 	= "<?php echo $WD_ImgMap; 		?>";
	  		WD_ImgMap[1] 	= "<?php echo base_url('assets/images/webconfig/jwood.jpg'); ?>";
	  		WD_Latitude 	= "<?php echo $WD_Latitude; 	?>".split(",");
	  		WD_Longjitude 	= "<?php echo $WD_Longjitude; 	?>".split(",");

	  		var latLng = {
				lat: parseFloat(WD_Latitude[0]),
				lng: parseFloat(WD_Longjitude[0])
			};

	        var mapCanvas = document.getElementById('map');
	        var mapOption = {
	          	center: 	latLng,
		        zoom: 		7,
		        mapTypeId: 	google.maps.MapTypeId.ROADMAP,
		    }
		    var map = new google.maps.Map(mapCanvas, mapOption);
		    // var iconBase = WD_ImgMap;

		    		if (WD_Latitude.length 		> 	WD_Longjitude.length) latLngLenght = WD_Latitude.length;
		    else 	if (WD_Longjitude.length 	> 	WD_Latitude.length	) latLngLenght = WD_Longjitude.length;
		    else 	if (WD_Latitude.length 		== 	WD_Longjitude.length) latLngLenght = WD_Latitude.length;

		    var bounds = new google.maps.LatLngBounds();
		    for (var i = 0; i < latLngLenght; i++) {
		    	var content =
		        	'<div id="content' + i + '">' +
		            	'<div id="siteNotice' + i + '"></div>' +
		            	'<h5 id="firstHeading' + i + '" class="firstHeading">' + WD_markname[i] + '</h5>' +
		            	'<div id="bodyContent' + i + '">' +
		            		'<p>' + WD_Address[i] + '</p>' +
		            		'<p>โทรศัพท์: ' + WD_Tel[i] + ' &nbsp; โทรสาร: ' + WD_Fax[i] + '</p>' +
		            	'</div>' +
		            '</div>';
	  			var infowindow = new google.maps.InfoWindow();
		    	var iconBase = WD_ImgMap[i];
		    	var marker = new google.maps.Marker({
		  			position: 	{
		  				lat: parseFloat(WD_Latitude[i]),
		  				lng: parseFloat(WD_Longjitude[i])
		  			},
		  			map: 		map,
		  			title: 		WD_markname[i],
		  			icon: 		iconBase,
		  			animation: 	google.maps.Animation.DROP,
		  			zIndex: 	i,
		  			// url: 		'assets/images/map/' + WD_Addmaps[i],
				});
				bounds.extend(marker.position);
				// google.maps.event.addListener(marker, 'click', function() {
	  				// window.open(this.url, '_blank');
				// });
				google.maps.event.addListener(marker, 'click', (function(marker, content, infowindow) {
				    return function() {
				        infowindow.setContent(content);
				        infowindow.open(map, marker);
				    };
				})(marker,content,infowindow));
			}
			map.fitBounds(bounds);
			var listener = google.maps.event.addListener(map, "idle", function () {
	    		map.setZoom(7);
	    		google.maps.event.removeListener(listener);
			});
		}, 500);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
*/

	$(document).ready(function() {
		$('#name').focus();
	    $('.btn-form-submit').click(function() {
	    	$('.form-contact-to-email').submit();
	    });
	    $('.form-contact-to-email').find('input, textarea').each(function(index) {
            $(this).keypress(function(e) {
                if (e.which == 13)
                    $('.form-contact-to-email').submit();
            });
        });
	});
</script>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7dyF_jIgyLNKFTFp9uiadMBmnYMWdX1A&callback=initMap&libraries=&v=weekly&channel=2" async></script>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = {
                lat: <?php echo $WD_Latitude;?>,
                lng: <?php echo $WD_Longjitude;?>
            };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
    </script>