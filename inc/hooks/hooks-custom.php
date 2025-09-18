<?php
function custom_woocommerce_single_product_after_one() {
    ?>
    <ul class="salesgen-bmsm-items" data-discount_type="items" data-style="style1">
        <li>
            <div class="salesgen-bmsm-item-text">
                <span class="salesgen-bmsm-item-label">HOTLINE TƯ VẤN</span>
                <span class="salesgen-bmsm-item-title-wrp">
                    <span class="salesgen-bmsm-item-title"> 034 575 2236 </span> (TEL &amp; ZALO)
                </span>
            </div>
        </li>
        <li>
            <div class="salesgen-bmsm-item-text">
                <span class="salesgen-bmsm-item-label">EMAIL BÁO GIÁ</span>
                <span class="salesgen-bmsm-item-title-wrp">
                    <span class="salesgen-bmsm-item-title"> synex.contact@gmail.com </span> báo giá, tư vấn
                </span>
            </div>
        </li>
    </ul>
    <?php
}

add_action('woocommerce_single_product_after_one', 'custom_woocommerce_single_product_after_one');
