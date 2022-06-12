<main>
    <section>
        <ul class="bxslider"> <?php #1440x450
            // $image_slider = $this->common_model->getTableOrder('image_slider', 'IS_Order', 'ASC');
            $image_slider = $this->common_model->get_where_custom_order('image_slider', 'IS_Allow', '1', 'IS_Order', 'ASC');
            if (count($image_slider) > 0) {
                foreach ($image_slider as $key => $value) { ?>
                    <li><a href="#"><img src="<?php echo base_url('assets/images/slide/'.$value['IS_Img']); ?>"></a></li>
                    <?php
                }
            }
            else { ?>
                <li><a href="#"><img src="<?php echo base_url('assets/images/slide/1.jpg'); ?>"></a></li>
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
               <div class="small-12 medium-12 columns">
                   <div class="slide-left">
                        <a href="<?php echo site_url('salepage?'.@$_GET['language']);?>">
                       <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                       <a href="<?php echo site_url('aboutus?language='.@$_GET['language']);?>"><img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_2_th.jpg'); ?>"></a>
                       <?php }else{?>
                        <a href="<?php echo site_url('aboutus?language='.@$_GET['language']);?>"><img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_2_en.jpg'); ?>"></a>
                        <?php }?>
                       </a>
                   </div>
               </div>
               <div class="small-12 medium-12 columns">
                   <div class="slide-right">
                        <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                            <a href="<?php echo site_url('product?language='.@$_GET['language']);?>"><img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_3_th.jpg'); ?>"></a>
                       <?php }else{?>
                        <a href="<?php echo site_url('product?language='.@$_GET['language']);?>"><img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_3_en.jpg'); ?>"></a>
                        <?php }?>
                    </div>
                </div>
            </div>
    </section>

    <section class="wrap-vision">
        <div class="row row-vision">

               <div class="small-12 medium-4 columns">
                   <div class="slide-left">
                       <a href="<?php echo site_url('salepage?'.@$_GET['language']);?>">
                       <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                       <img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_41_th.jpg'); ?>">
                       <?php }else{?>
                        <img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_41_en.jpg'); ?>">
                        <?php }?>
                       </a>
                   </div>
               </div>
               <div class="small-12 medium-4 columns">
                   <div class="slide-right">
                    <a href="<?php echo site_url('salepage?'.@$_GET['language']);?>">
                        <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                       <img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_42_th.jpg'); ?>">
                       <?php }else{?>
                        <img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_42_en.jpeg'); ?>">
                        <?php }?>
                    </a>
                    </div>
                </div>
                <div class="small-12 medium-4 columns">
                   <div class="slide-left">
                        <a href="<?php echo site_url('salepage?'.@$_GET['language']);?>">
                       <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                       <img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_43_th.jpg'); ?>">
                       <?php }else{?>
                        <img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_43_en.jpeg'); ?>">
                        <?php }?>
                       </a>
                   </div>
               </div>

            </div>
    </section>

    <section class="wrap-vision">
        <div class="row row-vision">
               <div class="small-12 medium-12 columns">
                   <div class="slide-right">
                        <a href="https://lin.ee/%20hbIO1BG">
                        <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                        <img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_5_th.jpg'); ?>">
                       <?php }else{?>
                        <img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/main_5_en.jpg'); ?>">
                        <?php }?>
                       </a>
                    </div>
                </div>
            </div>
    </section>

    <!--
    <section class="wrap-vision">
        <div class="row row-vision">
               <div class="small-6 medium-6 columns">
                    <div class="" style="width:100%; margin:0 auto;">

                    <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
         
                        <h2 class="text-green">ผลิตภัณฑ์เสริมอาหาร<span class="sub-title-2"> ESTHER</span></h2>
                        <div class="divider-2"></div>
                        <p class="vision-text _dotranslate" style="margin-top:-10px; width:80%; line-height:1.5; text-align:center">
              
                    <b style="font-weight:bold">"จบปัญหาภายในซองเดียวด้วย ESTHER"</b> <br/> ผลิตภัณฑ์เสริมอาหาร ESTHER ช่วยในการดูแลสุขภาพผิวพรรณให้แข็งแรงจากภายใน

                        สู่ความสวยใสเปล่งประกาย สู่ผิวพรรณภายนอก

                        <br/>ผ่านการตรวจสอบจากองค์การอาหารและยา

                        <br/>ขึ้นทะเบียน เลขที่ 13-1-11163-5-0059
                    </p>
                        <?php }else{?>
              
                        <h2 class="text-green">dietary supplement<span class="sub-title-2"> ESTHER</span></h2>
                        <div class="divider-2"></div>
                            <p class="vision-text _dotranslate" style="margin-top:-10px; width:100%; line-height:1.5; text-align:center">
   

                            <b style="font-weight:bold">"Finish the problem in one envelope with ESTHER"</b> <br/> dietary supplement ESTHER helps to maintain healthy skin health from within.

to shine bright to the outer skin

<br/>Passed the inspection from the Food and Drug Administration.

</br/>Registration number 13-1-11163-5-0059
                        </p>
                            <?php }?>
                   </div>
               </div>
               <div class="small-6 medium-6 columns">
                    <div class="" style="width:100%; margin:0 auto;">
                    <br/>
                       <img style="" class="image-center vision-image" src="<?php echo base_url('assets/images/vision/new1.JPG'); ?>">
                   </div>
               </div>
            </div>
    </section>
                        -->
    
    <section>
<!--
        <div class="collection-wrapper-head">
            <div class="title-home">
                <h1 class="text-title-home">New Collecttion</h1>
                <hr class="hr-title-1 hr-width-1">
                <h4><blockquote><cite><span>Know more about our latest collection.</span></cite></blockquote></h4>
            </div>
        </div>




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
<!--
    <section>
        <div class="row row-promotion"  style="min-height: 0;">
            <div class="columns">
                <div class="wrapper-promotion" style="min-height: 0;">
                    <article class="text-promotion">
                        <h1 class="text-title-home">Hot Sale</h1>
                        <hr class="hr-title-2 hr-width-1">
                        <h2 class="sup-title-promotion">Now in Stores</h2>
                        <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                        <a href="<?php echo base_url('product/type/3'); ?>" class="btn-view-store">ดูเพิ่มเติม</a>
                        <?php }else{?>
                        <a href="<?php echo base_url('product/type/3'); ?>" class="btn-view-store">See more</a>
                        <?php }?>
                    </article>
                </div>
            </div>
        </div>
    </section>
                        -->
<!--
    <section>
        <div class="collection-wrapper-head">
            <div style="100%; text-align:center">
                <h1 class="text-title-home">Tanisha Collection</h1>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/mdML1IEw3tI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <br/> <br/> <br/> <br/>        <br/> <br/> <br/> <br/> <br/> <br/><br/> <br/><br/> <br/>
        <div class="collection-wrapper-content">
                -->
            <!-- Collection 1 -->
            <!--
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
                           <!--
                            <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
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
                        <?php }else{?>
                            <div class="_dotranslate">
                               <p>Complete in the envelope. Help.</p>
                            </div>
                            <div class="_notranslate notranslate">
                                <p>Help slow down the cells to be younger, 30 years old or more. Must try. Drink 1 sachet a day. Say goodbye to menopause. Balance hormones for 1 month. Know about it.</p>
                            </div>
                        </div>
                        <div class="collection-more">
                            <a href="<?php echo base_url('product/category/1'); ?>" class="btn-view-store">See more</a>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
                        -->
            <!-- Collection 3 -->
            <section style="display:none;">
            <div class="row row-collection">
                <div class="small-12 medium-expand columns">
                    <div class="collection-list">
                        <div class="collection-item-2"><img src="<?php echo base_url('assets/images/vision/img-vision.JPG'); ?>" alt="Lucky Stair" width="450"></div>
                    </div>
                </div>
                <div class="small-12 medium-expand columns" style="display:none;">
                    <div class="collection-intro">
                        <div class="collection-title">
                            <h2 class="text-green">DIETARY<span class="sub-title-2"> SUPPLEMENT PRODUCT</span></h2>
                            <div class="divider-2"></div>
                            <div class="_dotranslate">
                            <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                                <p>เนียนนุ่ม ลดอาการปวดประจำเดือน <bold>"DIETARY"</bold> ลดริ้วรอย <bold>"SUPLEMENT PRODUCT"</bold> ผิวไส</p>
                                <br>
                                <img src="<?php echo base_url('assets/images/products/stair/sh4.JPG'); ?>" alt="" width="200">
                                <br>
                                <div class="text-green ico-mid"><bold><i class="fa fa-caret-right"></i> Product</bold></div>
                                <p>ครบจบในซอง ช่วย ช่วยชะลอให้เซลล์่อ่อนเยาว์ 30 ปีขึ้นไปต้องลอง ชงดื่มวันละ 1 ซอง บอกลาวัยทอง ปรับสมดุลฮอร์โมน 1 เดือนรู้เรื่อง</p>
                            <?php }else{?>
                                <p>Soft and smooth, reduce menstrual pain <bold>"DIETARY"</bold> reduce wrinkles <bold>"SUPLEMENT PRODUCT"</bold> clear skin</p>
                                <br>
                                <img src="<?php echo base_url('assets/images/products/stair/sh4.JPG'); ?>" alt="" width="200">
                                <br>
                                <div class="text-green ico-mid"><bold><i class="fa fa-caret-right"></i> Product</bold></div>
                                <p>Complete in a sachet. Help to slow down the cells to be younger than 30 years old. Must try. Drink 1 sachet per day. Say goodbye to menopause. Balance hormones for 1 month. Know about it.</p>
                            <?php }?>
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
                        <!--
                        <br><br>
                        <div class="collection-more">
                        <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
                            <a href="<?php echo base_url('product/category/3'); ?>" class="btn-view-store">ดูเพิ่มเติม</a>
                        <?php }else{?>
                            <a href="<?php echo base_url('product/category/3'); ?>" class="btn-view-store">See more</a>
                        <?php }?>
                        </div>
                        -->
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