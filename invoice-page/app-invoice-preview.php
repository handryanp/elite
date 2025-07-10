<?php

session_start();
include_once '../API/config.php'; // Include database connection
include_once '../function.php'; // Include function.php
include_once '../features/header.php'; // Include header.php

if (!isset($_SESSION['username'])) {
  header('Location: ' . $base_url . 'menu-a/login.php');
  exit;
}
?>

<body>
  <div class="layout-content-navbar layout-wrapper">
    <div class="layout-container">

      <?php include_once '../features/sidebar.php'; ?>

      <div class="rounded-1 menu-mobile-toggler d-xl-none">
        <a href="javascript:void(0);" class="p-2 rounded-1 text-bg-secondary text-large layout-menu-toggle menu-link">
          <i class="bx bx-menu icon-base"></i>
          <i class="bx-chevron-right bx icon-base"></i>
        </a>
      </div>

      <div class="layout-page">

        <!-- Navbar -->

        <nav class="align-items-center bg-navbar-theme layout-navbar container-xxl navbar-detached navbar navbar-expand-xl" id="layout-navbar">

          <div class="align-items-xl-center me-4 me-xl-0 layout-menu-toggle navbar-nav d-xl-none">
            <a class="me-xl-6 px-0 nav-item nav-link" href="javascript:void(0)">
              <i class="icon-base bx bx-menu icon-md"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">

            <!-- Search -->
            <div class="align-items-center navbar-nav">
              <div class="mb-0 navbar-search-wrapper nav-item">
                <a class="px-0 search-toggler nav-item nav-link" href="javascript:void(0);">
                  <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
                </a>
              </div>
            </div>
            <!-- /Search -->

            <ul class="flex-row align-items-center ms-md-auto navbar-nav">

              <!-- Style Switcher -->
              <li class="me-2 me-xl-0 nav-item dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="theme-icon-active icon-base bx bx-sun icon-md"></i>
                  <span class="ms-2 d-none" id="nav-theme-text">Toggle theme</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                  <li>
                    <button type="button" class="align-items-center dropdown-item active" data-bs-theme-value="light" aria-pressed="false">
                      <span><i class="me-3 icon-base bx bx-sun icon-md" data-icon="sun"></i>Light</span>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="align-items-center dropdown-item" data-bs-theme-value="dark" aria-pressed="true">
                      <span><i class="me-3 icon-base bx bx-moon icon-md" data-icon="moon"></i>Dark</span>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="align-items-center dropdown-item" data-bs-theme-value="system" aria-pressed="false">
                      <span><i class="me-3 bx-desktop icon-base bx icon-md" data-icon="desktop"></i>System</span>
                    </button>
                  </li>
                </ul>
              </li>
              <!-- / Style Switcher-->

              <!-- Quick links  -->
              <li class="me-2 me-xl-0 nav-item dropdown-shortcuts navbar-dropdown dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                  <i class="bx-grid-alt icon-base bx icon-md"></i>
                </a>
                <div class="p-0 dropdown-menu dropdown-menu-end">
                  <div class="border-bottom dropdown-menu-header">
                    <div class="d-flex align-items-center py-3 dropdown-header">
                      <h6 class="me-auto mb-0">Pintasan</h6>
                    </div>
                  </div>
                  <div class="dropdown-shortcuts-list scrollable-container">
                    <div class="row-bordered overflow-visible row g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="mb-3 rounded-circle dropdown-shortcuts-icon">
                          <i class="text-heading icon-base bx bx-calendar icon-26px"></i>
                        </span>
                        <a href="app-calendar.php" class="stretched-link">Kalender</a>
                        <small>Appointments</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="mb-3 rounded-circle dropdown-shortcuts-icon">
                          <i class="text-heading icon-base bx bx-food-menu icon-26px"></i>
                        </span>
                        <a href="invoice-page/app-invoice-list.php" class="stretched-link">Invoice App</a>
                        <small>Manage Accounts</small>
                      </div>
                    </div>
                    <div class="row-bordered overflow-visible row g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="mb-3 rounded-circle dropdown-shortcuts-icon">
                          <i class="text-heading icon-base bx bx-user icon-26px"></i>
                        </span>
                        <a href="<?= $base_url ?>user/app-user.php" class="stretched-link">User App</a>
                        <small>Manage Users</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="mb-3 rounded-circle dropdown-shortcuts-icon">
                          <i class="text-heading icon-base bx bx-check-shield icon-26px"></i>
                        </span>
                        <a href="<?= $base_url ?>user/app-akses-role.php" class="stretched-link">Role Management</a>
                        <small>Permission</small>
                      </div>
                    </div>
                    <div class="row-bordered overflow-visible row g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="mb-3 rounded-circle dropdown-shortcuts-icon">
                          <i class="text-heading icon-base bx bx-pie-chart-alt-2 icon-26px"></i>
                        </span>
                        <a href="index.php" class="stretched-link">Dashboard</a>
                        <small>User Dashboard</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="mb-3 rounded-circle dropdown-shortcuts-icon">
                          <i class="text-heading icon-base bx bx-cog icon-26px"></i>
                        </span>
                        <a href="<?= $base_url ?>user/app-account-settings.php" class="stretched-link">Setting</a>
                        <small>Account Settings</small>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Quick links -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar">
                    <img src="<?= $base_url ?>assets/img/avatars/1.png" alt class="w-px-40 rounded-circle h-auto" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <img src="<?= $base_url ?>assets/img/avatars/1.png" alt class="w-px-40 rounded-circle h-auto" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="d-block fw-semibold"><?php echo $_SESSION['username']; ?></span>
                          <small class="text-muted">
                            <?php
                            $role_nama = [
                              1 => 'SUPER ADMIN',
                              2 => 'ADMIN',
                              3 => 'BACKOFFICE',
                              4 => 'KEPALA DINAS',
                              5 => 'SEKRETARIS',
                              6 => 'KEPALA BIDANG',
                              7 => 'KEPALA SEKSI',
                            ];
                            echo $role_nama[$_SESSION['role_id']] ?? 'Unknown';
                            ?>
                          </small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?= $base_url ?>user/app-account.php">
                      <i class="me-2 bx bx-user"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?= $base_url ?>user/app-account-settings.php">
                      <i class="me-2 bx bx-cog"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="menu-a/logout.php">
                      <i class="me-2 bx bx-power-off"></i>
                      <span class="align-middle">Keluar</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->

            </ul>
          </div>

        </nav>

        <!-- / Navbar -->


        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="flex-grow-1 container-p-y container-xxl">

            <div class="row invoice-preview">
              <!-- Invoice -->
              <div class="mb-6 mb-md-0 col-xl-9 col-md-8 col-12">
                <div class="p-6 p-sm-12 card invoice-preview-card">
                  <div class="rounded card-body invoice-preview-header">
                    <div class="d-flex flex-column flex-md-column flex-sm-row flex-xl-row align-items-md-start align-items-sm-center align-items-start align-items-xl-center justify-content-between">
                      <div class="mb-6 mb-xl-0 text-heading">
                        <div class="d-flex align-items-center gap-2 mb-6 svg-illustration">
                          <span class="app-brand-logo demo">
                            <span class="text-primary">

                              <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                  <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                                  <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                                  <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                                  <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                                      <g id="Mask" transform="translate(0.000000, 8.000000)">
                                        <mask id="mask-2" fill="white">
                                          <use xlink:href="#path-1"></use>
                                        </mask>
                                        <use fill="currentColor" xlink:href="#path-1"></use>
                                        <g id="Path-3" mask="url(#mask-2)">
                                          <use fill="currentColor" xlink:href="#path-3"></use>
                                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                        </g>
                                        <g id="Path-4" mask="url(#mask-2)">
                                          <use fill="currentColor" xlink:href="#path-4"></use>
                                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                        </g>
                                      </g>
                                      <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                        <use fill="currentColor" xlink:href="#path-5"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                            </span>
                          </span>
                          <span class="ms-50 app-brand-text demo fw-bold lh-1">Sneat</span>
                        </div>
                        <p class="mb-2">Office 149, 450 South Brand Brooklyn</p>
                        <p class="mb-2">San Diego County, CA 91905, USA</p>
                        <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                      </div>
                      <div>
                        <h5 class="mb-6">Invoice #86423</h5>
                        <div class="mb-1 text-heading">
                          <span>Date Issues:</span>
                          <span class="fw-medium">April 25, 2021</span>
                        </div>
                        <div class="text-heading">
                          <span>Date Due:</span>
                          <span class="fw-medium">May 25, 2021</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="px-0 card-body">
                    <div class="row">
                      <div class="mb-6 mb-md-6 mb-sm-0 mb-xl-0 col-xl-6 col-md-12 col-sm-5 col-12">
                        <h6>Invoice To:</h6>
                        <p class="mb-1">Thomas shelby</p>
                        <p class="mb-1">Shelby Company Limited</p>
                        <p class="mb-1">Small Heath, B10 0HF, UK</p>
                        <p class="mb-1">718-986-6062</p>
                        <p class="mb-0">peakyFBlinders@gmail.com</p>
                      </div>
                      <div class="col-xl-6 col-md-12 col-sm-7 col-12">
                        <h6>Bill To:</h6>
                        <table>
                          <tbody>
                            <tr>
                              <td class="pe-4">Total Due:</td>
                              <td class="fw-medium">$12,110.55</td>
                            </tr>
                            <tr>
                              <td class="pe-4">Bank name:</td>
                              <td>American Bank</td>
                            </tr>
                            <tr>
                              <td class="pe-4">Country:</td>
                              <td>United States</td>
                            </tr>
                            <tr>
                              <td class="pe-4">IBAN:</td>
                              <td>ETD95476213874685</td>
                            </tr>
                            <tr>
                              <td class="pe-4">SWIFT code:</td>
                              <td>BR91905</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive border border-top-0 border-bottom-0 rounded">
                    <table class="table m-0">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Description</th>
                          <th>Cost</th>
                          <th>Qty</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-heading text-nowrap">Vuexy Admin Template</td>
                          <td class="text-nowrap">HTML Admin Template</td>
                          <td>$32</td>
                          <td>1</td>
                          <td>$32.00</td>
                        </tr>
                        <tr>
                          <td class="text-heading text-nowrap">Frest Admin Template</td>
                          <td class="text-nowrap">Angular Admin Template</td>
                          <td>$22</td>
                          <td>1</td>
                          <td>$22.00</td>
                        </tr>
                        <tr>
                          <td class="text-heading text-nowrap">Apex Admin Template</td>
                          <td class="text-nowrap">HTML Admin Template</td>
                          <td>$17</td>
                          <td>2</td>
                          <td>$34.00</td>
                        </tr>
                        <tr>
                          <td class="text-heading text-nowrap">Robust Admin Template</td>
                          <td class="text-nowrap">React Admin Template</td>
                          <td>$66</td>
                          <td>1</td>
                          <td>$66.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-borderless m-0">
                      <tbody>
                        <tr>
                          <td class="py-6 ps-0 pe-6 text-body align-top">
                            <p class="mb-1">
                              <span class="me-2 h6">Salesperson:</span>
                              <span>Alfie Solomons</span>
                            </p>
                            <span>Thanks for your business</span>
                          </td>
                          <td class="px-0 w-px-100 py-6">
                            <p class="mb-2">Subtotal:</p>
                            <p class="mb-2">Discount:</p>
                            <p class="mb-2 pb-2 border-bottom">Tax:</p>
                            <p class="mb-0">Total:</p>
                          </td>
                          <td class="px-0 w-px-100 py-6 text-heading text-end fw-medium">
                            <p class="mb-2 fw-medium">$1800</p>
                            <p class="mb-2 fw-medium">$28</p>
                            <p class="mb-2 pb-2 border-bottom fw-medium">21%</p>
                            <p class="mb-0 fw-medium">$1690</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <hr class="mt-0 mb-6" />
                  <div class="p-0 card-body">
                    <div class="row">
                      <div class="col-12">
                        <span class="text-heading fw-medium">Note:</span>
                        <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Invoice -->

              <!-- Invoice Actions -->
              <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                <div class="card">
                  <div class="card-body">
                    <button class="d-grid mb-4 w-100 btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                      <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="me-2 icon-base bx bx-paper-plane icon-sm"></i>Send Invoice</span>
                    </button>
                    <button class="d-grid mb-4 w-100 btn btn-label-secondary">Download</button>
                    <div class="d-flex mb-4">
                      <a class="d-grid me-4 w-100 btn btn-label-secondary" target="_blank" href="<?= $base_url;?>invoice-page/app-invoice-print.php"> Print </a>
                      <a href="<?= $base_url;?>invoice-page/app-invoice-edit.php" class="d-grid w-100 btn btn-label-secondary"> Edit </a>
                    </div>
                    <button class="d-grid w-100 btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#addPaymentOffcanvas">
                      <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="me-2 icon-base bx bx-dollar icon-sm"></i>Add Payment</span>
                    </button>
                  </div>
                </div>
              </div>
              <!-- /Invoice Actions -->
            </div>

            <!-- Offcanvas -->
            <!-- Send Invoice Sidebar -->
            <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
              <div class="mb-6 border-bottom offcanvas-header">
                <h5 class="offcanvas-title">Send Invoice</h5>
                <button type="button" class="text-reset btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="flex-grow-1 pt-0 offcanvas-body">
                <form>
                  <div class="mb-6">
                    <label for="invoice-from" class="form-label">From</label>
                    <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com" />
                  </div>
                  <div class="mb-6">
                    <label for="invoice-to" class="form-label">To</label>
                    <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com" />
                  </div>
                  <div class="mb-6">
                    <label for="invoice-subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods" />
                  </div>
                  <div class="mb-6">
                    <label for="invoice-message" class="form-label">Message</label>
                    <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">
Dear Queen Consolidated,
          Thank you for your business, always a pleasure to work with you!
          We have generated a new invoice in the amount of $95.59
          We would appreciate payment of this invoice by 05/11/2021</textarea>
                  </div>
                  <div class="mb-6">
                    <span class="bg-label-primary badge">
                      <i class="icon-base bx bx-link icon-xs"></i>
                      <span class="align-middle">Invoice Attached</span>
                    </span>
                  </div>
                  <div class="d-flex flex-wrap mb-6">
                    <button type="button" class="me-4 btn btn-primary" data-bs-dismiss="offcanvas">Send</button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /Send Invoice Sidebar -->

            <!-- Add Payment Sidebar -->
            <div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
              <div class="border-bottom offcanvas-header">
                <h5 class="offcanvas-title">Add Payment</h5>
                <button type="button" class="text-reset btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="flex-grow-1 offcanvas-body">
                <div class="d-flex justify-content-between bg-lighter mb-4 p-2">
                  <p class="mb-0">Invoice Balance:</p>
                  <p class="mb-0 fw-medium">$5000.00</p>
                </div>
                <form>
                  <div class="mb-6">
                    <label class="form-label" for="invoiceAmount">Payment Amount</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="text" id="invoiceAmount" name="invoiceAmount" class="form-control invoice-amount" placeholder="100" />
                    </div>
                  </div>
                  <div class="mb-6">
                    <label class="form-label" for="payment-date">Payment Date</label>
                    <input id="payment-date" class="form-control invoice-date" type="text" />
                  </div>
                  <div class="mb-6">
                    <label class="form-label" for="payment-method">Payment Method</label>
                    <select class="form-select" id="payment-method">
                      <option value="" selected disabled>Select payment method</option>
                      <option value="Cash">Cash</option>
                      <option value="Bank Transfer">Bank Transfer</option>
                      <option value="Debit Card">Debit Card</option>
                      <option value="Credit Card">Credit Card</option>
                      <option value="Paypal">Paypal</option>
                    </select>
                  </div>
                  <div class="mb-6">
                    <label class="form-label" for="payment-note">Internal Payment Note</label>
                    <textarea class="form-control" id="payment-note" rows="2"></textarea>
                  </div>
                  <div class="d-flex flex-wrap mb-6">
                    <button type="button" class="me-4 btn btn-primary" data-bs-dismiss="offcanvas">Send</button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                  </div>
                </form>
              </div>
            </div>

          </div>

          <?php
          include_once '../features/footer.php';
          ?>

          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>

  </div>
</body>

</html>