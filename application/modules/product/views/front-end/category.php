<div class="small-12 medium-3 large-2 columns">
    <!-- SideMenu -->
    <ul class="menu vertical product-menu" data-accordion-menu>
    <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
        <li class="menu-head"><a href="<?php echo site_url('review')."?language=".@$_GET['language'];?>"><h3>ผลิตภัณฑ์</h3></a></li>
        <li><a href="<?php echo site_url('review')."?language=".@$_GET['language'];?>" class="<?php if (uri_seg(1) === 'review' && !uri_seg(2)) echo 'menu-title'; ?>">ข้อมูล และ รีวิวผลิตภัณฑ์</a></li>
    <?php }else{?>
        <li class="menu-head"><a href="<?php echo site_url('review')."?language=".@$_GET['language'];?>"><h3>Product</h3></a></li>
        <li><a href="<?php echo site_url('review')."?language=".@$_GET['language'];?>" class="<?php if (uri_seg(1) === 'review' && !uri_seg(2)) echo 'menu-title'; ?>">Product Information and Review Product</a></li>
    <?php }?>
    <!--
        <li><a href="<?php echo base_url('product'."?language=".@$_GET['language']); ?>" class="<?php if (uri_seg(1) === 'product' && !uri_seg(2)) echo 'menu-title'; ?>">Products</a></li> <?php
        foreach ($type_query as $key => $value) { ?>
            <li><a href="<?php echo base_url('product/type/'.$value['PT_ID']."?language=".@$_GET['language']); ?>" class="<?php if (uri_seg(1) === 'product' && uri_seg(2) === 'type' && uri_seg(3) === $value['PT_ID']) echo 'menu-title'; ?>"><?php echo $value['PT_Name']; ?></a></li> <?php
        } ?>
        <li><a href="#" class="<?php if (uri_seg(1) === 'product' && uri_seg(2) === 'category') echo 'menu-title'; ?>">
        <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
        สินค้าแยกตามหมวดหมู่
        <?php }else{?>
            Products classified by category
        <?php }?>
    </a>
            <ul class="menu vertical is-active"> <?php
                foreach ($category_query as $key => $value) { ?>
                    <li class="sub-menu"><a href="<?php echo base_url('product/category/'.$value['C_ID']."?language=".@$_GET['language']); ?>" class="<?php if (uri_seg(1) === 'product' && uri_seg(2) === 'category' && uri_seg(3) === $value['C_ID']) echo 'menu-title'; ?>"><?php echo $value['C_Name']; ?></a></li> <?php
                } ?>
            </ul>
        </li>
    -->
    </ul>
</div>