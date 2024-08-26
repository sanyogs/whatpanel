<?php 
/*
 * This file is part of WHATPANEL.
 *
 * @package     WHAT PANEL – Web Hosting Access Terminal Panel.
 * @copyright   2023-2024 Version Next Technologies and MadPopo. All rights reserved.
 * @license     BSL; see LICENSE.txt
 * @link        https://www.version-next.com
 */

error_reporting(E_ALL);
ini_set("display_errors", "1");

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$session = \Config\Services::session();

use App\Libraries\AppLib;

use App\Helpers\custom_name_helper;

use App\Models\User;

$db = \Config\Database::connect();
$session = \Config\Services::session();

$custom_helper = new custom_name_helper();

$cart = $session->get('cart') ? $session->get('cart') : [];

// $cart = $db->table('hd_carts')->get()->getResult();
$total = 0;
$tax = false;
$tax_total = 0;
foreach ($cart as $row) {
    if (floatval($row->tax) > 0) {
        $tax_total += $row->tax;
        $tax = true;
    }
}
?>

<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class='custom-section-top-pad'>

</section>
<!-- TopBarText End -->

</section>

<section id="cart-wrap" class="bg-silver-light frontend-cart">
    <div class="cart-row">
        <div class="col-md-12 col-12">
            <div class="cart-table-wrap">
                <div class="cart-table-title">
                    <h3>Shopping Cart</h3>
                </div>
                <div class="table-responsive">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th style='width: calc(100% / 6);' ><?= lang('hd_lang.item') ?></th>
                                <th style='width: calc(100% / 6);'><?= lang('hd_lang.domain') ?></th>
                                <th style='width: calc(100% / 6);'><?= lang('hd_lang.billed') ?></th>
                                <th style='width: calc(100% / 6);'><?= lang('hd_lang.amount') ?></th>
                                <?php if ($tax) { ?>
                                    <th style='width: calc(100% / 6);'><?= lang('hd_lang.tax') ?></th>
                                <?php } ?>
                                <th style='width: calc(100% / 6);'><?= lang('hd_lang.action') ?></th>
                            </tr>
                        </thead>
                        <tbody id="domains">
							
                            <?php
								// Loop through each item in the cart
								foreach ($cart as $item) {
									// Check if the item object has the 'item' property and modify if necessary
									if (isset($item->item)) {
										// Remove the [" characters from the item property value
										$item->item = str_replace('["', '[', $item->item);
									}
								}
									
                                $cart_id = '';
                            foreach ($cart as $row) {
                                $cart_id = $row->cart_id;
                                $total += (float)$row->price;
                            ?>
                                <tr>
                                    <td style='width: calc(100% / 6);' ><?= $row->name ?></td>
                                    <td style='width: calc(100% / 6);' ><?= $row->domain ?></td>
                                    <td style='width: calc(100% / 6);' ><?= $row->renewal ?></td>
                                    <td style='width: calc(100% / 6);' ><?= AppLib::format_currency($row->price, 'default_currency') ?></td>
                                    <?php if ($tax) { ?>
                                        <td style='width: calc(100% / 6);' ><?= AppLib::format_currency($row->tax, 'default_currency') ?></td>
                                    <?php } ?>
                                    <td style='width: calc(100% / 6);' >
                                        <a href="<?= base_url('cart/remove/' . $row->cart_id) ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M13.3332 6.66666C13.1769 6.51043 12.965 6.42267 12.744 6.42267C12.5231 6.42267 12.3111 6.51043 12.1549 6.66666L9.99988 8.82166L7.84488 6.66666C7.68771 6.51486 7.47721 6.43086 7.25871 6.43276C7.04021 6.43466 6.8312 6.5223 6.67669 6.67681C6.52219 6.83132 6.43455 7.04033 6.43265 7.25882C6.43075 7.47732 6.51475 7.68782 6.66654 7.84499L8.82154 9.99999L6.66654 12.155C6.51475 12.3122 6.43075 12.5227 6.43265 12.7412C6.43455 12.9597 6.52219 13.1687 6.67669 13.3232C6.8312 13.4777 7.04021 13.5653 7.25871 13.5672C7.47721 13.5691 7.68771 13.4851 7.84488 13.3333L9.99988 11.1783L12.1549 13.3333C12.312 13.4851 12.5225 13.5691 12.741 13.5672C12.9595 13.5653 13.1686 13.4777 13.3231 13.3232C13.4776 13.1687 13.5652 12.9597 13.5671 12.7412C13.569 12.5227 13.485 12.3122 13.3332 12.155L11.1782 9.99999L13.3332 7.84499C13.4894 7.68872 13.5772 7.47679 13.5772 7.25582C13.5772 7.03485 13.4894 6.82293 13.3332 6.66666Z" fill="#C51414" />
                                                <path d="M10 0C8.02219 0 6.08879 0.58649 4.4443 1.6853C2.79981 2.78412 1.51809 4.3459 0.761209 6.17316C0.00433286 8.00043 -0.1937 10.0111 0.192152 11.9509C0.578004 13.8907 1.53041 15.6725 2.92894 17.0711C4.32746 18.4696 6.10929 19.422 8.0491 19.8078C9.98891 20.1937 11.9996 19.9957 13.8268 19.2388C15.6541 18.4819 17.2159 17.2002 18.3147 15.5557C19.4135 13.9112 20 11.9778 20 10C19.9971 7.34871 18.9426 4.80684 17.0679 2.9321C15.1932 1.05736 12.6513 0.00286757 10 0ZM10 18.3333C8.35182 18.3333 6.74066 17.8446 5.37025 16.9289C3.99984 16.0132 2.93174 14.7117 2.30101 13.189C1.67028 11.6663 1.50525 9.99075 1.82679 8.37425C2.14834 6.75774 2.94201 5.27288 4.10745 4.10744C5.27288 2.94201 6.75774 2.14833 8.37425 1.82679C9.99076 1.50525 11.6663 1.67027 13.189 2.301C14.7117 2.93173 16.0132 3.99984 16.9289 5.37025C17.8446 6.74066 18.3333 8.35182 18.3333 10C18.3309 12.2094 17.4522 14.3276 15.8899 15.8899C14.3276 17.4522 12.2094 18.3309 10 18.3333Z" fill="#C51414" />
                                            </svg>
                                        </a>
                                    </td>
                                <?php
                            } ?>
                                </tr>
                                <tr>
                                    <td style='width: calc(100% / 6);' ></td>
                                    <td style='width: calc(100% / 6);' ></td>
                                    <td style='width: calc(100% / 6);' ></td>
                                    <td style='width: calc(100% / 6);' ><?= lang('hd_lang.total') ?></td>
                                    <td style='width: calc(100% / 6);' id="total" ><strong><?= AppLib::format_currency($total, 'default_currency') ?></strong></td>
                                    <td style='width: calc(100% / 6);' ><a href="<?= base_url('cart/remove_all') ?>" id="remove_all" class="common-button bg-warning w-100">Remove all</a></td>
                                </tr>
                                <tr>
                                    <td style='width: calc(100% / 6);' ></td>
                                    <td style='width: calc(100% / 6);' ></td>
                                    <td style='width: calc(100% / 6);' ></td>
                                    <td style='width: calc(100% / 6);' >Discount Coupon :</td>
                                    <td style='width: calc(100% / 6);' ><input type="text" name="discount_code" id="discount_code" class="common-input m-0" style='border: 1px solid #172f78 !important;' ></td>
                                    <td style='width: calc(100% / 6);' ><button id="validate_disc_code" class="common-button w-100">Validate</button></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="continue-shopping">
                    <div class="row">
                        <div class="col-md-6 col-12 text-start">
                            <a class='custom-cart-rp' href="<?= (!User::is_logged_in()) ? base_url('carts/hosting_packages')  : base_url('cart/hosting_packages') ?>">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="16" viewBox="0 0 23 16" fill="none">
                                        <path d="M22 9C22.5523 9 23 8.55228 23 8C23 7.44772 22.5523 7 22 7L22 9ZM0.292892 7.2929C-0.0976315 7.68342 -0.0976314 8.31658 0.292893 8.70711L6.65686 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928933C7.68054 0.538409 7.04738 0.538409 6.65685 0.928934L0.292892 7.2929ZM22 7L1 7L1 9L22 9L22 7Z" fill="#172F78" />
                                    </svg>
                                </span>
                                <?= lang('hd_lang.continue_shopping') ?>
                            </a>
                        </div>
                        <div class="col-md-6 col-12 text-end">
                            <a href="<?= base_url('carts/checkout') ?>" id="submitOrder" class='custom-cart-rp'>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="16" viewBox="0 0 23 16" fill="none">
                                        <path d="M22 9C22.5523 9 23 8.55228 23 8C23 7.44772 22.5523 7 22 7L22 9ZM0.292892 7.2929C-0.0976315 7.68342 -0.0976314 8.31658 0.292893 8.70711L6.65686 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928933C7.68054 0.538409 7.04738 0.538409 6.65685 0.928934L0.292892 7.2929ZM22 7L1 7L1 9L22 9L22 7Z" fill="#172F78" />
                                    </svg>
                                </span>
                                <?= lang('hd_lang.submit_order') ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function(e) {
                    $('#validate_disc_code').on('click', function(e) {
                        e.preventDefault();

                        var promoCode = $('#discount_code').val();

                        var cart_id = <?php echo $cart_id; ?>;
                        
                        $.ajax({
                            url: '<?= site_url('promotions/validate_code') ?>', // URL to your controller method
                            method: 'POST',
                            dataType: 'json',
                            data: {
                                promo_code: promoCode
                            },
                            success: function(response) {
                                $('#promoCodeMessage').html(response.msg);

                                if (response.disc_amount) {
                                    // Update product price display with the discounted price
                                    $('#discountedPrice').html(response.disc_amount);
                                    // Subtract the discount from the total
                                    var currentTotal = parseFloat($('#total').text().replace(/[^0-9.-]+/g, ''));
                                    var newTotal = currentTotal - response.disc_amount;
                                    $('#total').html('<strong>' + newTotal.toFixed(2) + '</strong>');

                                    $.ajax({
                                        url: '<?= site_url('promotions/update_promotion_code') ?>', // URL to your controller method
                                        method: 'POST',
                                        dataType: 'json',
                                        data: {
                                            newTotal: response.disc_amount,
                                            disc_type: response.disc_type,
                                            cart_id: cart_id
                                        },
                                        success: function(response) {},
                                        error: function(xhr, status, error) {}
                                    });
                                }

                                if (response.disc_percentage) {
                                    // Update product price display with the discounted price
                                    $('#discountedPrice').html(response.disc_percentage);
                                    // Calculate the discounted amount based on percentage
                                    var currentTotal = parseFloat($('#total').text().replace(/[^0-9.-]+/g, ''));
                                    var discountPercent = parseFloat(response.disc_percentage); // Assuming response.discounted_amount contains the percentage
                                    var discountAmount = (currentTotal * discountPercent) / 100; // Calculate discount amount
                                    var newTotal = currentTotal - discountAmount; // Subtract the discount amount from the total
                                    $('#total').html('<strong>' + newTotal.toFixed(2) + '</strong>');

                                    $.ajax({
                                        url: '<?= site_url('promotions/update_promotion_code') ?>', // URL to your controller method
                                        method: 'POST',
                                        dataType: 'json',
                                        data: {
                                            newTotal: discountAmount,
                                            disc_type: response.disc_type,
                                            cart_id: cart_id,
                                            disc_percentage: discountPercent
                                        },
                                        success: function(response) {},
                                        error: function(xhr, status, error) {}
                                    });
                                }
                            }
                        });
                    });
                });
            </script>
        </div>
    </div>
</section>
<?= $this->endSection() ?>