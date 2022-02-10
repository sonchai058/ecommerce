<main>
    <?php
        $this->template->load('header/breadcrumb');
        $grand_total = 0;
    ?>

<?php
/*
require_once(APPPATH."libraries/lib/PromptPayQR.php");
$PromptPayQR = new PromptPayQR(); // new object
$PromptPayQR->size = 5; // Set QR code size to 8
$PromptPayQR->id = '0505564012718'; // PromptPay ID
$PromptPayQR->amount = 200; // Set amount (not necessary)
$qr = '<img src="' . $PromptPayQR->generate() . '" />';
*/
?>

    <section>
    <style>
		.email-order-list	{ width: 100%; 					}
		.po-code 			{ color: #4078C0; 				}
		.po-status 			{ color: #BD2C00; 				}
		th 					{ background-color: #E6E6E6; 	}
	</style>
	<div class="row">
		<div class="columns small-12">
		<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
			<h4>การสั่งซื้อเสร็จสิ้น</h4>
			<p>
				<b>โอนเงินเข้าบัญชีธนาคาร</b><br>
				ธนาคาร กสิกรไทย : 107-3-97034-9 , ชื่อบัญชี: บจก.ธนิชา อินเตอร์เนชั่นแนล<br>
			</p>
		<?php
		}else{ 
		?>
					<h4>order completed</h4>
			<p>
				<b>transfer money to bank account</b><br>
				Kasikorn Bank : 107-3-97034-9 , Account Name: Thanicha International Co., Ltd.<br>
			</p>
		<?php }?>
			<!--
			<p>
				<b>Promtpay</b> : 0505564012718<br>
			</p>
			-->
			<p>
				<?php
					echo "<img src='".base_url('assets/images/pp.png')."'/>";
				?>
			</p>
			<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
			<p>แจ้งโอนเงิน <a href="<?php echo site_url('member/transfercustom?code='.$order['OD_Code']);?>" target="_blank"><u>คลิกที่นี่</u></a></p>
			<br>
			<h4>รายละเอียด</h4>
			<?php
		}else{ 
		?>
			<p>transfer money <a href="<?php echo site_url('member/transfercustom?code='.$order['OD_Code']);?>" target="_blank"><u>click here</u></a></p>
			<br>
			<h4>details</h4>
		<?php }?>
			<p>
				<table>
<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
					<tr>
						<td>วันเวลาที่สั่งซื้อ: </td>
						<?php $day = date('d'); $month = date('m'); $year = date('Y') + 543; $hour = date('H'); $minute = date('i'); $second = date('s'); ?>
						<td><?php echo $day.'-'.$month.'-'.$year.' '.$hour.':'.$minute.':'.$second; ?></td>
					</tr>
					<tr>
						<td>รหัสใบสั่งซื้อ: </td>
						<td class="po-code"><?php echo $order['OD_Code']; ?></td>
					</tr>
					<tr>
						<td>สถานะใบสั่งซื้อ: </td>
						<td class="po-status"><?php echo $order['OD_Allow']; ?></td>
					</tr>
				</table>
			</p>
			<p>
				<b>ที่อยู่สำหรับจัดส่งสินค้า</b>
				<table>
					<tr>
						<td>ชื่อ-นามสกุล: </td>
						<td><?php echo $order_address['OD_Name']; ?></td>
					</tr>
					<tr>
						<td>ที่อยู่: </td>
						<td><?php echo $order_address['OD_Address']; ?></td>
					</tr>
					<tr>
						<td>เบอร์โทรศัพท์: </td>
						<td><?php echo $order_address['OD_Tel']; ?></td>
					</tr>
				</table>
			</p>
			<br>
			<p>
				<h4>รายการสินค้า</h4>
				<?php
		}else{ 
		?>
					<tr>
						<td>order date: </td>
						<?php $day = date('d'); $month = date('m'); $year = date('Y') + 543; $hour = date('H'); $minute = date('i'); $second = date('s'); ?>
						<td><?php echo $day.'-'.$month.'-'.$year.' '.$hour.':'.$minute.':'.$second; ?></td>
					</tr>
					<tr>
						<td>Order ID: </td>
						<td class="po-code"><?php echo $order['OD_Code']; ?></td>
					</tr>
					<tr>
						<td>Order Status: </td>
						<td class="po-status"><?php echo $order['OD_Allow']; ?></td>
					</tr>
				</table>
			</p>
			<p>
				<b>Shipping address</b>
				<table>
					<tr>
						<td>name-surname: </td>
						<td><?php echo $order_address['OD_Name']; ?></td>
					</tr>
					<tr>
						<td>address: </td>
						<td><?php echo $order_address['OD_Address']; ?></td>
					</tr>
					<tr>
						<td>telephone number: </td>
						<td><?php echo $order_address['OD_Tel']; ?></td>
					</tr>
				</table>
			</p>
			<br>
			<p>
				<h4>product list</h4>
<?php 
		}
?>

						<table class="table-cart" width="70%">
                            <thead>
                                <tr>
								<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                                   	<th align="center">ลำดับที่</th>
									<th align="center">รูป</th>
									<th align="center">ชื่อ</th>
									<th align="center">ราคา</th>
									<th align="center">จำนวน</th>
									<th align="center">ราคารวม</th>
									<?php
		}else{ 
		?>
                                   	<th align="center">No.</th>
									<th align="center">Photo</th>
									<th align="center">name</th>
									<th align="center">price</th>
									<th align="center">quantity</th>
									<th align="center">total price</th>
<?php 
		}
?>
                                </tr>
                            </thead>
                            <tbody> <?php
						foreach ($order_list as $key => $value) { ?>
							<tr>
								<td align="center"><?php echo ($key + 1); ?></td>
								<td align="center"><img width="50" src="<?php echo base_url('assets/uploads/user_uploads_img/'.$value['P_Img']); ?>" alt="<?php echo $value['P_Name']; ?>" title="<?php echo $value['P_Name']; ?>"></td>
								<td align="left"><?php echo $value['P_IDCode'].' '.trim($value['P_Name']); ?></td>
								<td align="center"><?php echo number_format($value['ODL_Price'], 2, '.', ','); ?></td>
								<td align="center"><?php echo $value['ODL_Amount']; ?></td>
								<td align="right"><?php echo number_format($value['ODL_FullSumPrice'], 2, '.', ','); ?></td>
							</tr> <?php
						} ?>
					</tbody>
                           
                            <tfoot>
							<?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
								<tr style="border-bottom: 0px;text-align:right">
									<th colspan="5" style="text-align:right">ยอดรวม</th>
									<th colspan="1" style="text-align:right"><?php echo number_format($order['OD_SumPrice'], 2, '.', ','); ?></th>
								</tr>
								<tr style="border-bottom: 0px">
									<th colspan="5" style="text-align:right">ขนส่งสินค้า</th>
									<?php $OD_Transfer = $order['OD_FullSumPrice']; if ($order['OD_FullSumPrice'] > $order['OD_SumPrice']) $OD_Transfer = $order['OD_FullSumPrice'] - $order['OD_SumPrice']; ?>
									<th colspan="1" style="text-align:right"><?php echo number_format($OD_Transfer, 2, '.', ','); ?></th>
								</tr>
								<tr style="border-bottom: 0px">
									<th colspan="5" style="text-align:right">ยอดสุทธิ</th>
									<th colspan="1" style="text-align:right"><?php echo number_format($order['OD_FullSumPrice'], 2, '.', ','); ?></th>
								</tr>
								<?php
		}else{ 
		?>
								<tr style="border-bottom: 0px;text-align:right">
									<th colspan="5" style="text-align:right">total</th>
									<th colspan="1" style="text-align:right"><?php echo number_format($order['OD_SumPrice'], 2, '.', ','); ?></th>
								</tr>
								<tr style="border-bottom: 0px">
									<th colspan="5" style="text-align:right">cargo</th>
									<?php $OD_Transfer = $order['OD_FullSumPrice']; if ($order['OD_FullSumPrice'] > $order['OD_SumPrice']) $OD_Transfer = $order['OD_FullSumPrice'] - $order['OD_SumPrice']; ?>
									<th colspan="1" style="text-align:right"><?php echo number_format($OD_Transfer, 2, '.', ','); ?></th>
								</tr>
								<tr style="border-bottom: 0px">
									<th colspan="5" style="text-align:right">net amount</th>
									<th colspan="1" style="text-align:right"><?php echo number_format($order['OD_FullSumPrice'], 2, '.', ','); ?></th>
								</tr>
<?php 
		}
?>
							</tfoot>
                        </table>

			</p>
			
		</div>
		
	</div>
	
    </section>
</main>



	