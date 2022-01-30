<main>
    <section>
        <ul class="bxslider"> <?php #1440x450
            // $image_slider = $this->common_model->getTableOrder('image_slider', 'IS_Order', 'ASC');
            $image_slider = $this->common_model->get_where_custom_order('image_slider', 'IS_Allow', '1', 'IS_Order', 'ASC');
            if (count($image_slider) > 0) {
                foreach ($image_slider as $key => $value) { ?>
                    <li><a href="#"><img src="<?php echo base_url('assets/images/newslide/'.$value['IS_Img']); ?>"></a></li>
                    <?php
                }
            }
            else { ?>
                <li><a href="#"><img src="<?php echo base_url('assets/images/newslide/1.jpg'); ?>"></a></li>
                <?php
            } ?>
            <!-- <li><a href="#"><img src="<?php echo base_url('assets/images/slide/slide-2.jpg'); ?>" height="450"></a></li>
            <li><a href="#"><img src="<?php echo base_url('assets/images/slide/slide-3.jpg'); ?>"></a></li>
            <li><a href="#"><img src="<?php echo base_url('assets/images/slide/slide-1.jpg'); ?>"></a></li> -->
        </ul>
    </section>

            <!--
    <section class="wrap-vision">
        <div class="row row-vision">
               <div class="small-12 medium-12 columns">
                   <div class="animation-element slide-left">
                   <video width="320" height="240" controls autoplay>
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                    </video>
                   </div>
               </div>
            </div>
    </section>
        -->

    <section class="wrap-vision">
        <div class="row row-vision">
               <div class="small-12 medium-5 columns">
                   <div class="slide-left">
                       <img class="image-center vision-image" src="<?php echo base_url('assets/images/vision/img-vision.JPG'); ?>">
                   </div>
               </div>
               <div class="small-12 medium-7 columns">
                   <div class="slide-right">
                       <div class="vision-text _dotranslate">
                            <h2>ทำไมต้องเป็น <span class="green">Tanisha</span></h2>
                            <p>ผลิตภัณฑ์เสริมอาหาร ESTHER (ชงดื่ม) ตอบโจทย์ผู้ที่หญิงที่ปัญหาสุขภาพ ประกอบกิจการจำหน่าย นำเข้า ส่งออก ผลิตภัณฑ์เสริมอาหาร อาหารบำรุงสุขภาพสินค้าอุปโภค บริโภค
หมวดธุรกิจ : ร้านขายปลีกสินค้าทางเภสัชภัณฑ์และเวชภัณฑ์</p>
                        </div>
                        <div class="vision-text _notranslate notranslate">
                            <h2>အဘယ်ကြောင့်နည်း။ <span class="green">Tanisha?</span></h2>
                            <p>အစားအသောက်ဖြည့်စွက်စာ ESTHER (သောက်ခြင်း) သည် ကျန်းမာရေးပြဿနာရှိသော အမျိုးသမီးများ၏ လိုအပ်ချက်များကို ဖြည့်ဆည်းပေးသည်။</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="collection-wrapper-head">
            <div class="title-home">
                <h1 class="text-title-home">New Collecttion</h1>
                <hr class="hr-title-1 hr-width-1">
                <h4><blockquote><cite><span>Know more about our latest collection.</span></cite></blockquote></h4>
            </div>
        </div>
        <div class="row row-feature"> <?php
            foreach ($feature_items as $key => $value) {
                $feature_stocks = rowArray($this->common_model->custom_query(
                    "   SELECT * FROM `product_stock`
                        WHERE `P_ID` = '{$value['P_ID']}'
                        AND `PS_Allow` = '1'
                        ORDER BY `PS_ID` DESC LIMIT 1   "
                ));
                $feature_promotions = rowArray($this->common_model->custom_query(
                    "   SELECT * FROM `product_price`
                        WHERE `P_ID` = '{$value['P_ID']}'
                        AND `PP_Special` = '1'
                        AND `PP_Allow` = '1'
                        ORDER BY `PP_ID` DESC LIMIT 1   "
                )); ?>
                <div class="small-12 medium-6 large-3 columns">
                    <div class="product">
                        <div class="product-img"> <?php
                            if ($value['P_Img'] !== '') { ?>
                                <img src="<?php echo base_url('assets/uploads/user_uploads_img/'.$value['P_Img']); ?>" alt="<?php echo $value['P_Name']; ?>"> <?php
                            }
                            else { ?>
                                <img src="<?php echo base_url('assets/images/noimage.gif'); ?>" alt="<?php echo $value['P_Name']; ?>"> <?php
                            } ?>
                        </div>
                        <h3 class="product-title"><?php echo $value['P_IDCode']; ?></h3>
                        <p> <?php
                                 if ($value['P_Title']   !== '') mb_substr(strip_tags($value['P_Title']), 0, 37,'UTF-8').'...';
                            else if ($value['P_Detail']  !== '') mb_substr(strip_tags($value['P_Detail']), 0, 37,'UTF-8').'...'; ?>
                        </p>
                        <h3 class="home-product-price"> <?php
                                 if (count($feature_promotions) > 0) echo '฿'.number_format($feature_promotions['PP_Price'],    2, '.', ',');
                            else if (count($feature_stocks)     > 0) echo '฿'.number_format($feature_stocks['PS_Price'],        2, '.', ','); ?>
                        </h3>
                        <!-- <div class="wrap-price-sale">
                            <h5>
                                <span class="price-sale"><?php if (count($feature_promotions) > 0 && count($feature_stocks) > 0) echo '฿'.number_format($feature_stocks['PS_Price'], 2, '.', ','); ?></span><?php
                                if (count($feature_promotions) > 0 && count($feature_stocks) > 0) { ?>
                                    <span class="price-per-sale"><?php echo number_format(((1 - ($feature_promotions['PP_Price'] / $feature_stocks['PS_Price'])) * 100), 0, '.', ',').'%'; ?></span> <?php
                                } ?>
                            </h5>
                        </div> -->
                        <div class="field-btn"> <?php
                            $product = rowArray($this->common_model->get_where_custom('product', 'P_ID', $value['P_ID']));
                            if (count($product) > 0) {
                                $colors = explode(",", $product['P_Color']); ?>
                                <select class="color-picker">
                                    <option value="0" disabled selected>Colors</option> <?php
                                    foreach ($colors as $key => $values) {
                                        $product_color = rowArray($this->common_model->get_where_custom('product_color', 'PC_ID', $values));
                                        if (count($product_color) > 0) { ?>
                                            <option value="<?php echo $product_color['PC_ID']; ?>"><?php echo $product_color['PC_Name']; ?></option> <?php
                                        }
                                    } ?>
                                </select>
                                <br><br> <?php
                            } ?>
                            <a href="<?php echo base_url('product/detail/'.$value['P_ID']); ?>" class="btn-view-detail"><i class="fa fa-search"></i> View Detail</a>
                            <a href="#" class="btn-buy-now" onclick="addToCart('<?php echo $value['P_ID']; ?>')"><i class="fa fa-cart-plus"></i> Buy Now</a>
                        </div>
                    </div>
                </div> <?php
            } ?>


            <!-- <div class="small-6 medium-3 columns">
                <div class="product">
                    <div class="product-img">
                        <img src="<?php echo base_url('assets/images/products/showcase/IMG_0354.png'); ?>" alt="IMG_0354">
                        <div class="product-hvr">
                            <a href="<?php echo base_url('product'); ?>" class="btn-buy-now"><i class="fa fa-search"></i> ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <h3 class="product-title">Modern Outdoor</h3>
                    <p>ประตูสไตล์ modern มีความแข็งแรง ทนทานสูง</p>
                    <h3 class="home-product-price">5,206 THB</h3>

                    <div class="wrap-price-sale">
                        <h5>
                            <span class="price-sale">5,206 THB</span>
                            <span class="price-per-sale">SALE 11%</span>
                        </h5>
                    </div>

                    <div class="field-btn">
                        <a href="#!" class="btn-view-detail"><i class="fa fa-search"></i> View Detail</a>
                        <a href="#!" class="btn-buy-now"><i class="fa fa-search"></i> Buy Now</a>
                    </div>

                </div>
            </div>
            <div class="small-6 medium-3 columns">
                <div class="product">
                    <div class="product-img">
                        <img src="<?php echo base_url('assets/images/products/showcase/IMG_0541.png'); ?>" alt="IMG_0354">
                        <div class="product-hvr">
                            <a href="<?php echo base_url('product'); ?>" class="btn-buy-now"><i class="fa fa-search"></i> ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <h3 class="product-title">Modern Outdoor</h3>
                    <p>ประตูสไตล์ modern มีความแข็งแรง ทนทานสูง</p>
                    <h3 class="home-product-price">5,206 THB</h3>

                    <div class="wrap-price-sale">
                        <h5>
                            <span class="price-sale">5,206 THB</span>
                            <span class="price-per-sale">SALE 11%</span>
                        </h5>
                    </div>

                    <div class="field-btn">
                        <a href="#!" class="btn-view-detail"><i class="fa fa-search"></i> View Detail</a>
                        <a href="#!" class="btn-buy-now"><i class="fa fa-search"></i> Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="small-6 medium-3 columns">
                <div class="product">
                    <div class="product-img">
                        <img src="<?php echo base_url('assets/images/products/showcase/IMG_0103.png'); ?>" alt="IMG_0354">
                        <div class="product-hvr">
                            <a href="<?php echo base_url('product'); ?>" class="btn-buy-now"><i class="fa fa-search"></i> ดูเพิ่มเติม</a>
                        </div>
                    </div>
                    <h3 class="product-title">Modern Outdoor</h3>
                    <p>ประตูสไตล์ modern มีความแข็งแรง ทนทานสูง</p>
                    <h3 class="home-product-price">5,206 THB</h3>

                    <div class="wrap-price-sale">
                        <h5>
                            <span class="price-sale">5,206 THB</span>
                            <span class="price-per-sale">SALE 11%</span>
                        </h5>
                    </div>

                    <div class="field-btn">
                        <a href="#!" class="btn-view-detail"><i class="fa fa-search"></i> View Detail</a>
                        <a href="#!" class="btn-buy-now"><i class="fa fa-search"></i> Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="small-6 medium-3 columns">
                <div class="product">
                    <a href="#!">
                        <div class="product-img">
                            <img src="<?php echo base_url('assets/images/products/showcase/IMG_0427.png'); ?>" alt="IMG_0354">
                            <div class="product-hvr">
                                <a href="<?php echo base_url('product'); ?>" class="btn-buy-now"><i class="fa fa-search"></i> ดูเพิ่มเติม</a>
                            </div>
                        </div>
                        <h3 class="product-title">Modern Outdoor</h3>
                        <p>ประตูสไตล์ modern มีความแข็งแรง ทนทานสูง</p>
                        <h3 class="home-product-price">5,206 THB</h3>

                        <div class="wrap-price-sale">
                            <h5>
                                <span class="price-sale">5,206 THB</span>
                                <span class="price-per-sale">SALE 11%</span>
                            </h5>
                        </div>

                        <div class="field-btn">
                            <a href="#!" class="btn-view-detail"><i class="fa fa-search"></i> View Detail</a>
                            <a href="#!" class="btn-buy-now"><i class="fa fa-search"></i> Buy Now</a>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>
    </section>

    <section>
        <div class="row row-promotion">
            <div class="columns">
                <div class="wrapper-promotion">
                    <article class="text-promotion">
                        <h1 class="text-title-home">Hot Sale</h1>
                        <hr class="hr-title-2 hr-width-1">
                        <h2 class="sup-title-promotion">Now in Stores</h2>
                        <a href="<?php echo base_url('product/type/3'); ?>" class="btn-view-store">ดูเพิ่มเติม</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="collection-wrapper-head">
            <div class="title-home">
                <h1 class="text-title-home">Tanisha Collection</h1>
                <hr class="hr-title-1 hr-width-2">
                <!-- <h4>KNOW MORE ABOUT OUR LATEST COLLECTION</h4> -->
                <h4><blockquote><cite><span>Know more about our latest collection.</span></cite></blockquote></h4>
            </div>
        </div>
        <div class="collection-wrapper-content">

            <!-- Collection 1 -->
            <div class="row row-collection">
                <div class="small-12 medium-expand columns">
                    <div class="collection-list">
                        <div class="collection-item-1">
                            <div class="collection-item-img">
                                <img src="<?php echo base_url('assets/images/products/showcase/sh1.png'); ?>" alt="">
                            </div>
                            <div class="item-model"><small>( CF-0001 )</small></div>
                        </div>
                        <div class="collection-item-1">
                            <div class="collection-item-img">
                                <img src="<?php echo base_url('assets/images/products/showcase/sh0.png'); ?>" alt="">
                            </div>
                            <div class="item-model"><small>( CF-0001 )</small></div>
                        </div>
                        <div class="collection-item-1">
                            <div class="collection-item-img">
                               <img src="<?php echo base_url('assets/images/products/showcase/sh1.png'); ?>" alt="">
                            </div>
                            <div class="item-model"><small>( CF-0001 )</small></div>
                        </div>
                    </div>
                </div>
                <div class="small-12 medium-expand columns">
                    <div class="collection-intro">
                        <div class="collection-title">
                            <h2 class="text-green">Esther <span class="sub-title-1">Dietary Supplement Product</span></h2>
                            <div class="divider"></div>
                            <!-- <p>ถ้าจะพูดถึงประตูในอดีตพวกเราจะคิดถึงประตูทำจากไม้มีฝัก 4, ฝัก 5, ฝัก 8 หรือบานไม้สักแกะลายเป็นต้นแต่ในปัจจุบัน มีการณรงค์ให้ดูแลสิ่งแวดล้อมกันมากขึ้นมา แต่ยังให้ความรู้สึกเหมือนไม้แถมยังปรับปรุงจุดอ่อนต่างๆของไม้ได้อักด้วย ด้วยเหตุนี้ “<bold>Tanisha</bold>” จึงนำวัสดุเหล่านี้มาผสมผสานกับไม้ และพัฒนาออกมาในรูปแบบของประตูแบบต่างๆ ที่สามารถใช้ได้ทั้งภายนอกและภายใน เพื่อตอบสนองความต้องการทั้งรูปแบบและสีสันที่สวยงาม ทั้งยังคงให้ความรู้สึกที่ยังคงเป็นธรรมชาติและอนุรักษ์สิ่งแวดล้อมให้กับโลกต่อไป</p> -->
                            <div class="_dotranslate">
                               <p>ครบจบในซอง ช่วย</p>
                            </div>
                            <div class="_notranslate notranslate">
                                <p>ช่วยชะลอให้เซลล์่อ่อนเยาว์ 30 ปีขึ้นไปต้องลอง ชงดื่มวันละ 1 ซอง บอกลาวัยทอง ปรับสมดุลฮอร์โมน 1 เดือนรู้เรื่อง</p>
                            </div>
                            

                        </div>
                        <div class="collection-more">
                            <a href="<?php echo base_url('product/category/1'); ?>" class="btn-view-store">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Collection 2 -->
            <div class="row row-collection">
                <div class="column order-1 medium-order-2 small-12 medium-expand">
                        <div class="collection-list">
                        <div class="collection-item-img">
                            <img src="<?php echo base_url('assets/images/products/showcase/sh1.JPG'); ?>" alt="MDP-W-0003.3">
                        </div>
                        
                            <!--
                            <div class="collection-item-1">
                                <div class="collection-item-img">
                                    <img src="<?php echo base_url('assets/images/products/showcase/MDP-W-0003.3.png'); ?>" alt="MDP-W-0003.3">
                                </div>
                                <div class="item-model"><small>( MDP-W-0001 )</small></div>
                            </div>
                            <div class="collection-item-1">
                                <div class="collection-item-img">
                                    <img src="<?php echo base_url('assets/images/products/showcase/MDP-G-0011.3.png'); ?>" alt="MDP-G-0011.3">
                                </div>
                                <div class="item-model"><small>( MDP-W-001 )</small></div>
                            </div>
                            <div class="collection-item-1">
                                <div class="collection-item-img">
                                    <img src="<?php echo base_url('assets/images/products/showcase/MDP-G-0003.4.png'); ?>" alt="MDP-G-0003.4">
                                </div>
                                <div class="item-model"><small>( MDP-W-001 )</small></div>
                            </div>
                            -->
                        </div>
                </div>
                <div class="column order-2 medium-order-1 small-12 medium-expand">
                    <div class="collection-intro collection-reverse">
                        <div class="collection-title">
                            <h2 class="notranslate text-green">EAT<span class="sub-title-1">NO SUGAR</span></h2>
                            <div class="divider-reverse"></div>
                             <!--<p>ถ้าจะพูดถึงประตูในอดีตพวกเราจะคิดถึงประตูทำจากไม้มีฝัก 4, ฝัก 5, ฝัก 8 หรือบานไม้สักแกะลายเป็นต้นแต่ในปัจจุบัน มีการณรงค์ให้ดูแลสิ่งแวดล้อมกันมากขึ้นมา แต่ยังให้ความรู้สึกเหมือนไม้แถมยังปรับปรุงจุดอ่อนต่างๆของไม้ได้อักด้วย ด้วยเหตุนี้ “<bold>Tanisha</bold>” จึงนำวัสดุเหล่านี้มาผสมผสานกับไม้ และพัฒนาออกมาในรูปแบบของประตูแบบต่างๆ ที่สามารถใช้ได้ทั้งภายนอกและภายใน เพื่อตอบสนองความต้องการทั้งรูปแบบและสีสันที่สวยงาม ทั้งยังคงให้ความรู้สึกที่ยังคงเป็นธรรมชาติและอนุรักษ์สิ่งแวดล้อมให้กับโลกต่อไป</p> -->
                            <div class="_dotranslate">
                                <p>ใสแบบเพียวๆ คอลลาเจน และดงกุยนำเข้า ไม่มีแป้ง ไม่มีกลิ่นคาว</p>
                            </div>
                            
                            <div class="_notranslate notranslate">
                                <p>ကြည်လင်သန့်ရှင်းသော ကော်လာဂျင်နှင့် တင်သွင်းထားသော Dong Quai တို့ဖြစ်သည်။ အမှုန့်မရှိ၊ ငါးအနံ့မရှိ၊</p>
                            </div>
                        </div>
                        <div class="collection-more">
                            <a href="<?php echo base_url('product/category/2'); ?>" class="btn-view-store">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Collection 3 -->
            <div class="row row-collection">
                <div class="small-12 medium-expand columns">
                    <div class="collection-list">
                        <div class="collection-item-2"><img src="<?php echo base_url('assets/images/products/stair/sh3.JPG'); ?>" alt="Lucky Stair" width="450"></div>
                    </div>
                </div>
                <div class="small-12 medium-expand columns">
                    <div class="collection-intro">
                        <div class="collection-title">
                            <h2 class="text-green">DIETARY<span class="sub-title-2"> SUPPLEMENT PRODUCT</span></h2>
                            <div class="divider-2"></div>
                            <div class="_dotranslate">
                                <p>เนียนนุ่ม ลดอาการปวดประจำเดือน <bold>"DIETARY"</bold> ลดริ้วรอย <bold>"SUPLEMENT PRODUCT"</bold> ผิวไส</p>
                                <br>
                                <img src="<?php echo base_url('assets/images/products/stair/sh4.JPG'); ?>" alt="" width="200">
                                <br>
                                <div class="text-green ico-mid"><bold><i class="fa fa-caret-right"></i> Product</bold></div>
                                <p>ครบจบในซอง ช่วย ช่วยชะลอให้เซลล์่อ่อนเยาว์ 30 ปีขึ้นไปต้องลอง ชงดื่มวันละ 1 ซอง บอกลาวัยทอง ปรับสมดุลฮอร์โมน 1 เดือนรู้เรื่อง</p>
<!--
                                <br>
                                <img src="<?php echo base_url('assets/images/products/stair/sw-core2.png'); ?>" alt="" width="200">
                                <br>
                                <div class="text-green ico-mid"><bold><i class="fa fa-caret-right"></i> Finger-Joint Core</bold></div>
                                <p>เป็นการนำไม้ที่มีความหนาขนาด 30 mm. มาต่อและเรียงเป็นแนวให้ได้ขนาดความกว้างที่ต้องการโดยใช้กาวเป็นตัวยึดด้านข้างระหว่างชิ้นต่อชิ้นละเสริมด้วยแกนกระดูกด้านหลังเพื่อป้องกันการบิดงอของชิ้นไม้</p>
                            </div>
                            <div class="_notranslate notranslate">
                                <p>In the past, Thailand is said to be rich in natural resources, especially trees. We were used to using up tree resources extravagantly due to the fact that trees were so easy to find. However, trees become scarce and valuable nowadays. Teakwood, black rose wood, Siamese rosewood and rosewood are expensive. This is the reason why “Lucky Stair” produces stair products. We use various manufacturing procedures to provide the beauty, durability and the sensation of wood. The “Lucky Stairs” are resistant against insects and moist. The products do not bend nor twist.</p>
                                <br>
                                <img src="<?php echo base_url('assets/images/products/stair/sw-core.png'); ?>" alt="" width="200">
                                <br>
                                <div class="text-green ico-mid"><bold><i class="fa fa-caret-right"></i> Sandwich Core</bold></div>
                                <p>Sandwich – Core is made with thin layers of wood. The 8 mm. thick wood layers are stacked, using the special glue that’s resistance to heat and moist. Each layer of wood is stacked in opposite direction, in order to prevent the wood from bending. The product is therefore durable and stable for a long period of time.</p>
                                <br>
                                <img src="<?php echo base_url('assets/images/products/stair/sw-core2.png'); ?>" alt="" width="200">
                                <br>
                                <div class="text-green ico-mid"><bold><i class="fa fa-caret-right"></i> Finger-Joint Core</bold></div>
                                <p>Finger –Joint core is made with 30 mm. wood. Pieces of wood are laid in lines to the desired width. Then, the glue is used to fix the pieces together one by one on the side. The product is supported by the wooden core at the back, in order to prevent from bending.</p>
-->
                            </div>
                        </div>
                        <br><br>
                        <div class="collection-more">
                            <a href="<?php echo base_url('product/category/3'); ?>" class="btn-view-store">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script type="text/javascript">
    var color_value = '';

    function addToCart(this_id) {
        window.location.href = "<?php echo base_url('cart/addToCart'); ?>/" + this_id + "/" + color_value;
    }

    $(document).ready(function() {
        $('.color-picker').change(function() {
            color_value = $(this).val();
        });
    });
</script>