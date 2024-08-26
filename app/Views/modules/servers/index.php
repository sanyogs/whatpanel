<?= $this->extend('layouts/users') ?>

<?= $this->section('content') ?>
<?php 
/*
 * This file is part of WHATPANEL.
 *
 * @package     WHAT PANEL – Web Hosting Access Terminal Panel.
 * @copyright   2023-2024 Version Next Technologies and MadPopo. All rights reserved.
 * @license     BSL; see LICENSE.txt
 * @link        https://www.version-next.com
 */

use Modules\cyberpanel\controllers\Cyberpanel;
use Modules\bitcoin\controllers\Bitcoin;
use Modules\cwp\controllers\CWP;
use Modules\cpanel\controllers\Cpanel;
use Modules\coinpayments\controllers\Coinpayments;
use Modules\checkout\controllers\Checkout;
use Modules\directadmin\controllers\Directadmin;
use Modules\ispconfig\controllers\Ispconfig;
use Modules\plesk\controllers\Plesk;
use Modules\whoisxmlapi\controllers\Whoisxmlapi;
use Modules\razorpay\controllers\Razorpay;
use Modules\stripepay\controllers\Stripepay;
use Modules\paypal\controllers\Paypal;
use Modules\payfast\controllers\Payfast;

use App\ThirdParty\MX\Modules;

$session = \Config\Services::session();
?>
<section id="hosting-services-wrap">
  <div class="container px-0">
    <div class="hs-topbar-wrap">
      <div class="hs-title-wrap">
        <h3>Servers</h3>
        <p>Showing server list</p>
      </div>
      <div class="hs-search-wrap">
        <div class="hs-InputWrap">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15" fill="none">
              <path d="M1.36083 13.5869L4.9727 11.4839C6.06246 12.9679 7.67959 13.9784 9.4916 14.3078C11.3036 14.6371 13.1727 14.2602 14.7147 13.2545C16.2566 12.2488 17.3542 10.6908 17.7816 8.90083C18.2091 7.11086 17.934 5.22499 17.0129 3.63098C16.0918 2.03698 14.5947 0.856004 12.8295 0.330892C11.0642 -0.19422 9.16497 -0.0235551 7.52228 0.807794C5.87959 1.63914 4.61831 3.06798 3.99777 4.80052C3.37723 6.53306 3.44461 8.4376 4.18605 10.1225L0.580387 12.2024C0.488711 12.2548 0.408327 12.3248 0.343873 12.4084C0.279418 12.492 0.232171 12.5875 0.204853 12.6895C0.177535 12.7914 0.170689 12.8978 0.18471 13.0024C0.198731 13.107 0.233342 13.2079 0.286544 13.2991C0.39336 13.4769 0.565107 13.6063 0.765541 13.66C0.965975 13.7137 1.17942 13.6875 1.36083 13.5869ZM5.34694 5.79003C5.63343 4.72083 6.23079 3.76066 7.06346 3.03094C7.89614 2.30122 8.92674 1.83472 10.0249 1.69044C11.1231 1.54616 12.2396 1.73058 13.2332 2.22037C14.2267 2.71016 15.0528 3.48332 15.6068 4.4421C16.1608 5.40087 16.418 6.50218 16.3457 7.60677C16.2735 8.71136 15.8751 9.76962 15.201 10.6477C14.5268 11.5258 13.6071 12.1843 12.5583 12.5399C11.5094 12.8956 10.3785 12.9323 9.3085 12.6456C7.87365 12.2612 6.65019 11.3229 5.90726 10.0372C5.16432 8.75154 4.96277 7.22378 5.34694 5.79003Z" fill="white" />
            </svg>
          </span>
          <form method='get' action="<?php echo base_url('servers'); ?>" id="searchForm">
            <input type="text" name="search" placeholder="Search for Code" />
            <a href="<?php echo base_url('servers'); ?>" class="btn new-hosting-div bg-danger clrBtn">Clear</a>
          </form>
        </div>
        <!-- <a href="<? //= site_url('servers/add_servers') 
                      ?>" class="new-hosting-div"
		   data-bs-toggle="modal"
		   data-bs-target="#add-new-hosting-modal"> -->
        <a href="<?= site_url('servers/add_servers') ?>" class="new-hosting-div" data-toggle="ajaxModal">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M10.6667 10.3333C10.6667 10.5101 10.5964 10.6797 10.4714 10.8047C10.3464 10.9298 10.1768 11 10 11H8.66667V12.3333C8.66667 12.5101 8.59643 12.6797 8.47141 12.8047C8.34638 12.9298 8.17681 13 8 13C7.82319 13 7.65362 12.9298 7.5286 12.8047C7.40357 12.6797 7.33333 12.5101 7.33333 12.3333V11H6C5.82319 11 5.65362 10.9298 5.5286 10.8047C5.40357 10.6797 5.33333 10.5101 5.33333 10.3333C5.33333 10.1565 5.40357 9.98695 5.5286 9.86193C5.65362 9.73691 5.82319 9.66667 6 9.66667H7.33333V8.33333C7.33333 8.15652 7.40357 7.98695 7.5286 7.86193C7.65362 7.73691 7.82319 7.66667 8 7.66667C8.17681 7.66667 8.34638 7.73691 8.47141 7.86193C8.59643 7.98695 8.66667 8.15652 8.66667 8.33333V9.66667H10C10.1768 9.66667 10.3464 9.73691 10.4714 9.86193C10.5964 9.98695 10.6667 10.1565 10.6667 10.3333ZM16 5.66667V12.3333C15.9989 13.2171 15.6474 14.0643 15.0225 14.6892C14.3976 15.3141 13.5504 15.6656 12.6667 15.6667H3.33333C2.4496 15.6656 1.60237 15.3141 0.97748 14.6892C0.352588 14.0643 0.00105857 13.2171 0 12.3333L0 4.33333C0.00105857 3.4496 0.352588 2.60237 0.97748 1.97748C1.60237 1.35259 2.4496 1.00106 3.33333 1H5.01867C5.32893 1.00026 5.63493 1.07236 5.91267 1.21067L8.01667 2.26667C8.10963 2.31128 8.21155 2.33408 8.31467 2.33333H12.6667C13.5504 2.33439 14.3976 2.68592 15.0225 3.31081C15.6474 3.93571 15.9989 4.78294 16 5.66667ZM1.33333 4.33333V5H14.544C14.4066 4.61139 14.1525 4.27473 13.8165 4.03606C13.4804 3.79739 13.0788 3.66838 12.6667 3.66667H8.31467C8.0044 3.66641 7.6984 3.5943 7.42067 3.456L5.31667 2.40333C5.22398 2.35757 5.12204 2.33362 5.01867 2.33333H3.33333C2.8029 2.33333 2.29419 2.54405 1.91912 2.91912C1.54405 3.29419 1.33333 3.8029 1.33333 4.33333ZM14.6667 12.3333V6.33333H1.33333V12.3333C1.33333 12.8638 1.54405 13.3725 1.91912 13.7475C2.29419 14.1226 2.8029 14.3333 3.33333 14.3333H12.6667C13.1971 14.3333 13.7058 14.1226 14.0809 13.7475C14.456 13.3725 14.6667 12.8638 14.6667 12.3333Z" fill="white" />
            </svg>
          </span>
          <p><?= lang('hd_lang.add_server') ?></p>
        </a>
      </div>
    </div>
	<?php if (session()->getFlashdata('message')): ?>
			<div class="alert alert-<?php echo session()->getFlashdata('response_status'); ?> alert-dismissible">
				<?php echo session()->getFlashdata('message'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
    <div class="hs-table-wrap">
      <div class="tableInfoHead">
        <div class="showEntriesWrap">
          <span>Show</span>
          <form action="<?php echo base_url('servers'); ?>" method="get">
            <select name="recordsPerPage" onchange="this.form.submit()">
              <?php $options = [10, 25, 50, 100]; ?>
              <?php foreach ($options as $option) : ?>
                <option value="<?= $option ?>" <?= ($option == $perPage) ? 'selected' : '' ?>>
                  <?= $option ?>
                </option>
              <?php endforeach; ?>
            </select>
          </form>
          <span>Entries</span>
        </div>
      </div>
		<div id="success-alert" class="alert alert-success hidden-print common-p text-success my-3" style="display: none;">
		<button type="button" class="close border-0 p-2 rounded-5" data-dismiss="alert">×</button>
		<i class="fa fa-warning"></i>
		<?= lang('hd_lang.test_success') ?>
		</div>
      <div class="hs-table-overflow table-responsive">
        <table class="hs-table">
          <tr>
            <th><?= lang('hd_lang.server_name') ?></th>
            <th><?= lang('hd_lang.server_host') ?></th>
            <th><?= lang('hd_lang.port') ?></th>
            <th><?= lang('hd_lang.default') ?></th>
            <th><?= lang('hd_lang.options') ?></th>
          </tr>
          <?php foreach ($servers as $key => $r) { ?>
            <tr style='text-wrap: nowrap;'>
              <td><?= $r->name ?></td>
              <td><?= $r->hostname ?></td>
              <td><?= $r->port ?></td>
              <td><?= ($r->selected == 1) ? '<i class="fa fa-check"></i>' : '' ?></td>
              <td>
                <div class="d-flex gap-2 justify-content-center align-items-center">
                <?php
                  switch ($r->type) {
                    case 'plesk':
                      $plesk = new Plesk();
                      $configuration = $plesk->admin_options($r);
                      break;
                    case 'ispconfig':
                      $ispconfig = new Ispconfig();
                      $configuration = $ispconfig->admin_options($r);
                      break;
                    case 'directadmin':
                      $directadmin = new Directadmin();
                      $configuration = $directadmin->admin_options($r);
                      break;
                    case 'cyberpanel':
                      $cyberpanel = new Cyberpanel();
                      $configuration = $cyberpanel->admin_options($r);
                      break;
                    case 'cwp':
                      $cwp = new Cwp();
                      $configuration = $cwp->admin_options($r);
                      break;
                    case 'cpanel':
                      $cpanel = new Cpanel();
                      $configuration = $cpanel->admin_options($r);
                      break;
                    default:
                      $configuration = '';
                      break;
                  }
                  echo $configuration;
                ?>
                </div>
              </td>
            </tr>
          <?php }  ?>
        </table>
      </div>
      <div class="hs-table-pagination">
		  <div class="showingEntriesWrap">
			  <?php
			  $totalItems = $pager->getTotal(); // Get total number of items from the pager
			  $currentStart = ($pager->getCurrentPage() - 1) * $perPage + 1; // Calculate the start index of the current page
			  $currentEnd = min($currentStart + $perPage - 1, $totalItems); // Calculate the end index of the current page

			  $showEntry = "Showing $currentStart to $currentEnd of $totalItems entries";

			  ?>
			  <p><?= $showEntry; ?></p>
		  </div>
        <div class="hs-pagination-wrap">
          <ul class="hs-pagination">
            <div class="row">
              <?php if (!empty($servers)) : ?>
                <!-- If there are items, display the pagination links -->
                <?php if ($pager) : ?>
                  <ul class="pagination">
                    <?php
                    $pager->setPath('servers');

                    // Output Pagination Links
                    echo $pager->links();
                    ?>
                  </ul>
                <?php endif; ?>

              <?php else : ?>
                <!-- If there are no items, display the message -->
                <div class="col-12 text-center">
                  <h1 class="text-center"><?= esc($message) ?></h1>
                </div>
              <?php endif ?>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    // JavaScript to show the success alert when the button is clicked
    document.getElementById('test-connection-btn').addEventListener('click', function(event) {
        // Assuming the connection test was successful, you can replace this with your logic
        var success = true; // Replace with your actual logic
        if (success) {
            document.getElementById('success-alert').style.display = 'block';
        }
    });
</script>
<?= $this->endSection() ?>