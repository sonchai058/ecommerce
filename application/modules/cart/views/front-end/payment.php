<main>
    <?php $this->template->load('header/breadcrumb'); ?>
    <section> <?php
        if ($this->cart->contents()) { ?>
            <div class="row">
                <div class="small-12 medium-8 columns">
                    <div class="login-wrapper">
                    <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                        <h4>เลือกการชำระเงิน</h4> 
                    <?php }else{?>
                        <h4>choose payment</h4> 
                    <?php }?>
                        <?php
                        $attributes = array(
                            'id' => 'cart_order_payment',
                        );
                        echo form_open('cart/cartOrderSaved?language='.@$_GET['language'], $attributes); ?>
                            <div class="row">
                                <!-- <fieldset class="small-4 columns">
                                    <legend>
                                        <img src="<?php echo base_url('assets/images/payment/paypal.png'); ?>" alt="PayPal">
                                    </legend>
                                    <input type="radio" name="payment" value="150" id="paypal" required checked>
                                    <label for="paypal">+฿150</label>
                                </fieldset> -->
                                <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                                <fieldset class="small-4 columns">
                                    <label for="transfer">
                                        <img src="<?php echo base_url('assets/images/payment/transfer.png'); ?>" alt="transfer">
                                    </label>
                                    <input type="radio" name="payment" value="150" id="transfer" required checked>
                                    <!-- <label for="transfer">+฿0</label> -->
                                    <label for="transfer">โอนเงิน</label>
                                </fieldset>
                                <fieldset class="small-4 columns">
                                    <label for="credit-card">
                                        <img src="<?php echo base_url('assets/images/payment/credit-card.png'); ?>" alt="credit-card">
                                    </label>
                                    <input type="radio" name="payment" value="150" id="credit-card" required>
                                    <!-- <label for="credit-card">+฿0</label> -->
                                    <label for="credit-card">บัตรเครดิต</label>
                                </fieldset>
                                <fieldset class="small-4 columns">
                                    <label  for="cvv2">
                                        <img src="<?php echo base_url('assets/images/payment/cvv2.png'); ?>" alt="cvv2">
                                    </label>
                                    <input type="radio" name="payment" value="150" id="cvv2" required>
                                    <!-- <label for="cvv2">+฿0</label> -->
                                    <label for="cvv2">บัตรเดบิต</label>
                                </fieldset>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="small-12 medium-3 large-offset-9 columns">
                                    <a href="#" class="button btn-checkout" id="btn_cart_payment">ดำเนินการต่อไป</a>
                                </div>
                            </div> 
                            <?php }else{?>
                                <fieldset class="small-4 columns">
                                    <label for="transfer">
                                        <img src="<?php echo base_url('assets/images/payment/transfer.png'); ?>" alt="transfer">
                                    </label>
                                    <input type="radio" name="payment" value="150" id="transfer" required checked>
                                    <!-- <label for="transfer">+฿0</label> -->
                                    <label for="transfer">transfer money</label>
                                </fieldset>
                                <fieldset class="small-4 columns">
                                    <label for="credit-card">
                                        <img src="<?php echo base_url('assets/images/payment/credit-card.png'); ?>" alt="credit-card">
                                    </label>
                                    <input type="radio" name="payment" value="150" id="credit-card" required>
                                    <!-- <label for="credit-card">+฿0</label> -->
                                    <label for="credit-card">debit card</label>
                                </fieldset>
                                <fieldset class="small-4 columns">
                                    <label  for="cvv2">
                                        <img src="<?php echo base_url('assets/images/payment/cvv2.png'); ?>" alt="cvv2">
                                    </label>
                                    <input type="radio" name="payment" value="150" id="cvv2" required>
                                    <!-- <label for="cvv2">+฿0</label> -->
                                    <label for="cvv2">debit card</label>
                                </fieldset>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="small-12 medium-3 large-offset-9 columns">
                                    <a href="#" class="button btn-checkout" id="btn_cart_payment">continue</a>
                                </div>
                            </div> 

                            <?php }?>
                            
                            <?php
                        echo form_close(); ?>
                    </div>
                </div>

                <!-- Summary -->
                <?php $this->load->view('front-end/summary'); ?>
            </div>
            <a href="#!"></a> <?php
        } ?>
    </section>
</main>
<script type="text/javascript">
    $(document).ready(function() {
        $('#btn_cart_payment').click(function() {
            <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
            if (confirm('ท่านได้ตรวจรายการสินค้าของท่านแล้ว ยืนยันการสั่งซื้อ?') === true)
            <?php }else{?>
                if (confirm('You have checked your product list. order confirmation?') === true)
            <?php }?>
                $('#cart_order_payment').submit();
        });
    });
</script>