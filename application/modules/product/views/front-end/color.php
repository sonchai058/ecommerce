<?php
    if (count($product) > 0) {
        $colors = explode(",", $product['P_Color']); ?>
        <select name="cart[<?php echo $value['id']; ?>][options][color]">
        <?php if(@$_GET['language']==''|| @$_GET['language']=='thai'){?>
           <option disabled selected>เลือกสี</option> 
           <?php }else{?>
            <option disabled selected>Color</option> 
            <?php }?>
           <?php
            foreach ($colors as $key => $values) {
                $product_color = rowArray($this->common_model->get_where_custom('product_color', 'PC_ID', $values));
                if (count($product_color) > 0) { ?>
                    <option value="<?php echo $product_color['PC_ID']; ?>"><?php echo $product_color['PC_Name']; ?></option> <?php
                }
            } ?>
        </select> <?php
    }
?>