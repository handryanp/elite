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

      <!-- Menu -->

      <?php include_once $_SERVER['DOCUMENT_ROOT'] . './elite/features/sidebar.php'; ?>

      <div class="rounded-1 menu-mobile-toggler d-xl-none">
        <a href="javascript:void(0);" class="p-2 rounded-1 text-bg-secondary text-large layout-menu-toggle menu-link">
          <i class="bx bx-menu icon-base"></i>
          <i class="bx-chevron-right bx icon-base"></i>
        </a>
      </div>

      <div class="layout-page">

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

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="flex-grow-1 container-p-y container-xxl">

            <div class="row invoice-edit">
              <!-- Invoice Edit-->
              <div class="mb-6 mb-lg-0 col-lg-9 col-12">
                <div class="p-6 p-sm-12 card invoice-preview-card">
                  <div class="rounded card-body invoice-preview-header">
                    <div class="px-3 text-heading row">
                      <div class="mb-6 mb-md-0 ps-0 col-md-7">
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
                          <span class="ms-50 app-brand-text demo fw-bold">Sneat</span>
                        </div>
                        <p class="mb-2">Office 149, 450 South Brand Brooklyn</p>
                        <p class="mb-2">San Diego County, CA 91905, USA</p>
                        <p class="mb-3">+1 (123) 456 7891, +44 (876) 543 2198</p>
                      </div>
                      <div class="ps-0 ps-md-2 pe-0 col-md-5 col-8">
                        <dl class="mb-0 row gx-4">
                          <dt class="d-md-flex align-items-center justify-content-end mb-2 col-sm-5">
                            <span class="mb-0 text-capitalize text-nowrap h5">Invoice</span>
                          </dt>
                          <dd class="col-sm-7">
                            <input type="text" class="form-control" disabled placeholder="#74909" value="#74909" id="invoiceId" />
                          </dd>
                          <dt class="d-md-flex align-items-center justify-content-end mb-1 col-sm-5">
                            <span class="fw-normal">Date Issued:</span>
                          </dt>
                          <dd class="col-sm-7">
                            <input type="text" class="form-control invoice-date" placeholder="MM/DD/YYYY" />
                          </dd>
                          <dt class="d-md-flex align-items-center justify-content-end col-sm-5">
                            <span class="fw-normal">Due Date:</span>
                          </dt>
                          <dd class="mb-0 col-sm-7">
                            <input type="text" class="form-control due-date" placeholder="MM/DD/YYYY" />
                          </dd>
                        </dl>
                      </div>
                    </div>
                  </div>

                  <div class="px-0 card-body">
                    <div class="row">
                      <div class="mb-6 mb-sm-0 col-md-6 col-sm-5 col-12">
                        <h6>Invoice To:</h6>
                        <select class="mb-4 w-50 form-select">
                          <option value="Jordan Stevenson">Jordan Stevenson</option>
                          <option value="Wesley Burland">Wesley Burland</option>
                          <option value="Vladamir Koschek">Vladamir Koschek</option>
                          <option value="Tyne Widmore">Tyne Widmore</option>
                        </select>
                        <p class="mb-1">Shelby Company Limited</p>
                        <p class="mb-1">Small Heath, B10 0HF, UK</p>
                        <p class="mb-1">718-986-6062</p>
                        <p class="mb-0">peakyFBlinders@gmail.com</p>
                      </div>
                      <div class="col-md-6 col-sm-7">
                        <h6>Bill To:</h6>
                        <table>
                          <tbody>
                            <tr>
                              <td class="pe-4">Total Due:</td>
                              <td>$12,110.55</td>
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
                  <hr class="mt-0 mb-6" />
                  <div class="px-0 pt-0 card-body">
                    <form class="source-item">
                      <div class="mb-4" data-repeater-list="group-a">
                        <div class="pt-0 pt-md-9 repeater-wrapper" data-repeater-item>
                          <div class="position-relative d-flex pe-0 border rounded">
                            <div class="p-6 w-100 row g-6">
                              <div class="mb-3 mb-md-0 col-md-6 col-12">
                                <p class="h6 repeater-title">Item</p>
                                <select class="mb-6 form-select item-details">
                                  <option value="App Design">App Design</option>
                                  <option value="App Customization" selected>App Customization</option>
                                  <option value="ABC Template">ABC Template</option>
                                  <option value="App Development">App Development</option>
                                </select>
                                <textarea class="form-control" rows="2" placeholder="Customization & Bug Fixes"></textarea>
                              </div>
                              <div class="mb-4 mb-md-0 col-md-3 col-12">
                                <p class="h6 repeater-title">Cost</p>
                                <input type="text" class="mb-5 form-control invoice-item-price" value="24" placeholder="24" min="12" />
                                <div class="text-heading">
                                  <div class="mb-1">Discount:</div>
                                  <span class="me-2 discount">0%</span>
                                  <span class="me-2 tax-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">0%</span>
                                  <span class="tax-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">0%</span>
                                </div>
                              </div>
                              <div class="mb-4 mb-md-0 col-md-2 col-12">
                                <p class="h6 repeater-title">Qty</p>
                                <input type="text" class="form-control invoice-item-qty" value="1" placeholder="1" min="1" max="50" />
                              </div>
                              <div class="mt-8 pe-0 col-md-1 col-12">
                                <p class="h6 repeater-title">Price</p>
                                <p class="mb-0 text-heading">$24.00</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-center justify-content-between p-2 border-start">
                              <i class="cursor-pointer icon-base bx bx-x icon-lg" data-repeater-delete></i>
                              <div class="dropdown">
                                <i class="cursor-pointer icon-base bx bx-cog icon-lg more-options-dropdown" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"> </i>
                                <div class="p-4 w-px-300 dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                  <div class="row g-3">
                                    <div class="col-12">
                                      <label for="discountInput" class="form-label">Discount(%)</label>
                                      <input type="number" class="form-control" id="discountInput" min="0" max="100" />
                                    </div>
                                    <div class="col-md-6">
                                      <label for="taxInput1" class="form-label">Tax 1</label>
                                      <select name="tax-1-input" id="taxInput1" class="form-select tax-select">
                                        <option value="0%" selected>0%</option>
                                        <option value="1%">1%</option>
                                        <option value="10%">10%</option>
                                        <option value="18%">18%</option>
                                        <option value="40%">40%</option>
                                      </select>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="taxInput2" class="form-label">Tax 2</label>
                                      <select name="tax-2-input" id="taxInput2" class="form-select tax-select">
                                        <option value="0%" selected>0%</option>
                                        <option value="1%">1%</option>
                                        <option value="10%">10%</option>
                                        <option value="18%">18%</option>
                                        <option value="40%">40%</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="my-4 dropdown-divider"></div>
                                  <button type="button" class="btn btn-label-primary btn-apply-changes">Apply</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <button type="button" class="btn btn-sm btn-primary" data-repeater-create><i class="me-1_5 icon-base bx bx-plus icon-xs"></i>Add Item</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <hr class="my-0" />
                  <div class="px-0 card-body">
                    <div class="row-gap-4 row">
                      <div class="mb-3 mb-md-0 col-md-6">
                        <div class="d-flex align-items-center mb-4">
                          <label for="salesperson" class="me-2 text-heading fw-medium">Salesperson:</label>
                          <input type="text" class="form-control" id="salesperson" placeholder="Edward Crowley" value="Edward Crowley" />
                        </div>
                        <input type="text" class="form-control" id="invoiceMsg" placeholder="Thanks for your business" value="Thanks for your business" />
                      </div>
                      <div class="d-flex justify-content-end col-md-6">
                        <div class="invoice-calculations">
                          <div class="d-flex justify-content-between mb-2">
                            <span class="w-px-100">Subtotal:</span>
                            <span class="text-heading fw-medium">$1800</span>
                          </div>
                          <div class="d-flex justify-content-between mb-2">
                            <span class="w-px-100">Discount:</span>
                            <span class="text-heading fw-medium">$28</span>
                          </div>
                          <div class="d-flex justify-content-between mb-2">
                            <span class="w-px-100">Tax:</span>
                            <span class="text-heading fw-medium">21%</span>
                          </div>
                          <hr class="my-2" />
                          <div class="d-flex justify-content-between">
                            <span class="w-px-100">Total:</span>
                            <span class="text-heading fw-medium">$1690</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-0" />
                  <div class="px-0 pb-0 card-body">
                    <div class="row">
                      <div class="col-12">
                        <div>
                          <label for="note" class="mb-1 text-heading fw-medium">Note:</label>
                          <textarea class="form-control" rows="2" id="note">It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Invoice Edit-->

              <!-- Invoice Actions -->
              <div class="col-lg-3 col-12 invoice-actions">
                <div class="mb-6 card">
                  <div class="card-body">
                    <button class="d-grid w-100 btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                      <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="me-2 icon-base bx bx-paper-plane icon-sm"></i>Send Invoice</span>
                    </button>
                    <div class="d-flex my-4">
                      <a href="<?= $base_url ?>invoice-page/app-invoice-preview.php" class="me-4 w-100 btn btn-label-secondary">Preview</a>
                      <button type="button" class="w-100 btn btn-label-secondary">Save</button>
                    </div>
                    <button class="d-grid w-100 btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#addPaymentOffcanvas">
                      <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="me-1 icon-base bx bx-dollar icon-sm"></i>Add Payment</span>
                    </button>
                  </div>
                </div>
                <div>
                  <label for="acceptPaymentsVia" class="form-label">Accept payments via</label>
                  <select class="mb-6 form-select" id="acceptPaymentsVia">
                    <option value="Bank Account">Bank Account</option>
                    <option value="Paypal">Paypal</option>
                    <option value="Card">Credit/Debit Card</option>
                    <option value="UPI Transfer">UPI Transfer</option>
                  </select>
                  <div class="d-flex justify-content-between mb-2">
                    <label for="payment-terms">Payment Terms</label>
                    <div class="me-n2 form-check form-switch">
                      <input type="checkbox" class="form-check-input" id="payment-terms" checked />
                    </div>
                  </div>
                  <div class="d-flex justify-content-between mb-2">
                    <label for="client-notes">Client Notes</label>
                    <div class="me-n2 form-check form-switch">
                      <input type="checkbox" class="form-check-input" id="client-notes" checked />
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <label for="payment-stub">Payment Stub</label>
                    <div class="me-n2 form-check form-switch">
                      <input type="checkbox" class="form-check-input" id="payment-stub" checked />
                    </div>
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
            <!-- /Add Payment Sidebar -->

            <!-- /Offcanvas -->

          </div>
          <!-- / Content -->

          <?php include_once $SERVER['DOCUMENT_ROOT'] . '/elite/features/footer.php'; ?>


          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
  </div>
</body>

</html>