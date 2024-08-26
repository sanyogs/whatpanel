<?php 
/*
 * This file is part of WHATPANEL.
 *
 * @package     WHAT PANEL – Web Hosting Access Terminal Panel.
 * @copyright   2023-2024 Version Next Technologies and MadPopo. All rights reserved.
 * @license     BSL; see LICENSE.txt
 * @link        https://www.version-next.com
 */
use App\Libraries\AppLib;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Item;
use App\Models\Plugin;
use App\Models\User;

use App\Helpers\custom_name_helper;

$custom = new custom_name_helper();

?>

<div class="modal-dialog my-modal">
    <div class="modal-content">
        <div class="modal-header row-reverse"> <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><?=lang('hd_lang.edit_rate')?></h4>
        </div>
        <?php $r = Invoice::tax_by_id($id);?>

        <?php
			 $attributes = array('class' => 'bs-example form-horizontal');
          echo form_open(base_url().'tax_rates/edit',$attributes); ?>
        <input type="hidden" name="tax_rate_id" value="<?=$r->tax_rate_id?>">
        <input type="hidden" name="r_url" value="<?=base_url('tax_rates')?>">
        <div class="modal-body">

            <div class="form-group">
                <label class="col-lg-4 control-label common-label"><?=lang('hd_lang.tax_rate_name')?> <span
                        class="text-danger">*</span></label>
                <div class="col-lg-8">
                    <input type="text" class="form-control common-input" required value="<?=$r->tax_rate_name?>"
                        name="tax_rate_name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-4 control-label common-label"><?=lang('hd_lang.tax_rate_percent')?> <span
                        class="text-danger">*</span></label>
                <div class="col-lg-8">
                    <input type="text" class="form-control money common-input" required value="<?=$r->tax_rate_percent?>"
                        name="tax_rate_percent">
                </div>
            </div>
        </div>
        <div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal"><?=lang('hd_lang.close')?></a>
            <button type="submit" class="btn btn-<?=$custom->getconfig_item('theme_color');?> common-button"><?=lang('hd_lang.save_changes')?></button>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
<script src="<?=base_url()?>resource/js/libs/jquery.maskMoney.min.js" type="text/javascript"></script>
<script>
(function($) {
    "use strict";
    $('.money').maskMoney();
})(jQuery);
</script>