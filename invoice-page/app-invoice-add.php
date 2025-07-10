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
            <div class="row invoice-add">
              <!-- Invoice Add-->
              <div class="mb-6 mb-lg-0 col-lg-9 col-12">
                <div class="p-6 p-sm-12 card invoice-preview-card">
                  <div class="rounded card-body invoice-preview-header">
                    <div
                      class="d-flex flex-column flex-wrap flex-sm-row justify-content-between text-heading">
                      <div class="mb-6 mb-md-0">
                        <div
                          class="d-flex align-items-center gap-2 mb-6 svg-illustration">
                          <span class="app-brand-logo demo">
                            <span class="text-primary">
                              <img src="<?php echo $base_url; ?>assets/img/icons/brands/fox.png" alt="International Elite Logo" class="w-px-40 h-auto">
                            </span>
                          </span>
                          <span class="ms-50 app-brand-text demo fw-bold">International Elite</span>
                        </div>
                        <p class="mb-2">Office 149, 450 South Brand Brooklyn</p>
                        <p class="mb-2">San Diego County, CA 91905, USA</p>
                        <p class="mb-3">+1 (123) 456 7891, +44 (876) 543 2198</p>
                      </div>
                      <div class="ps-0 ps-md-2 pe-0 col-md-5 col-8">
                        <dl class="mb-0 row gx-4">
                          <dt
                            class="d-md-flex align-items-center justify-content-end mb-2 col-sm-5">
                            <span class="mb-0 text-capitalize text-nowrap h5">Invoice</span>
                          </dt>
                          <dd class="col-sm-7">
                            <input type="text" class="form-control" disabled placeholder="#3905" value="#3905" id="invoiceId" />
                          </dd>
                          <dt
                            class="d-md-flex align-items-center justify-content-end mb-1 col-sm-5">
                            <span class="fw-normal">Date Issued:</span>
                          </dt>
                          <dd class="col-sm-7">
                            <input type="date" class="form-control invoice-date" placeholder="<?= date('m/d/Y') ?>" />
                          </dd>
                          <dt
                            class="d-md-flex align-items-center justify-content-end col-sm-5">
                            <span class="fw-normal">Due Date:</span>
                          </dt>
                          <dd class="mb-0 col-sm-7">
                            <input type="date" class="form-control due-date" placeholder="<?= date('m/d/Y') ?>" />
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
                          <option value="Jordan Stevenson">
                            Jordan Stevenson
                          </option>
                          <option value="Wesley Burland">
                            Wesley Burland
                          </option>
                          <option value="Vladamir Koschek">
                            Vladamir Koschek
                          </option>
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
                        <div
                          class="pt-0 pt-md-9 repeater-wrapper"
                          data-repeater-item>
                          <div
                            class="position-relative d-flex pe-0 border rounded">
                            <div class="p-6 w-100 row g-6">
                              <div class="mb-4 mb-md-0 col-md-6 col-12">
                                <p class="h6 repeater-title">Item</p>
                                <select class="mb-6 form-select item-details">
                                  <option value="App Design">
                                    App Design
                                  </option>
                                  <option value="App Customization" selected>
                                    App Customization
                                  </option>
                                  <option value="ABC Template">
                                    ABC Template
                                  </option>
                                  <option value="App Development">
                                    App Development
                                  </option>
                                </select>
                                <textarea
                                  class="form-control"
                                  rows="2"
                                  placeholder="Customization & Bug Fixes"></textarea>
                              </div>
                              <div class="mb-4 mb-md-0 col-md-3 col-12">
                                <p class="h6 repeater-title">Cost</p>
                                <input
                                  type="text"
                                  class="mb-5 form-control invoice-item-price"
                                  placeholder="24"
                                  min="12" />
                                <div class="text-heading">
                                  <div class="mb-1">Discount:</div>
                                  <span class="me-2 discount">0%</span>
                                  <span
                                    class="me-2 tax-1"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Tax 1">0%</span>
                                  <span
                                    class="tax-2"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Tax 2">0%</span>
                                </div>
                              </div>
                              <div class="mb-4 mb-md-0 col-md-2 col-12">
                                <p class="h6 repeater-title">Qty</p>
                                <input
                                  type="text"
                                  class="form-control invoice-item-qty"
                                  placeholder="1"
                                  min="1"
                                  max="50" />
                              </div>
                              <div class="mt-8 pe-0 col-md-1 col-12">
                                <p class="h6 repeater-title">Price</p>
                                <p class="mb-0 text-heading">$24.00</p>
                              </div>
                            </div>
                            <div
                              class="d-flex flex-column align-items-center justify-content-between p-2 border-start">
                              <i
                                class="cursor-pointer icon-base bx bx-x icon-lg"
                                data-repeater-delete></i>
                              <div class="dropdown">
                                <i
                                  class="cursor-pointer icon-base bx bx-cog icon-lg more-options-dropdown"
                                  role="button"
                                  id="dropdownMenuButton"
                                  data-bs-toggle="dropdown"
                                  data-bs-auto-close="outside"
                                  aria-expanded="false">
                                </i>
                                <div
                                  class="p-4 w-px-300 dropdown-menu dropdown-menu-end"
                                  aria-labelledby="dropdownMenuButton">
                                  <div class="row g-3">
                                    <div class="col-12">
                                      <label
                                        for="discountInput"
                                        class="form-label">Discount(%)</label>
                                      <input
                                        type="number"
                                        class="form-control"
                                        id="discountInput"
                                        min="0"
                                        max="100" />
                                    </div>
                                    <div class="col-md-6">
                                      <label
                                        for="taxInput1"
                                        class="form-label">Tax 1</label>
                                      <select
                                        name="tax-1-input"
                                        id="taxInput1"
                                        class="form-select tax-select">
                                        <option value="0%" selected>
                                          0%
                                        </option>
                                        <option value="1%">1%</option>
                                        <option value="10%">10%</option>
                                        <option value="18%">18%</option>
                                        <option value="40%">40%</option>
                                      </select>
                                    </div>
                                    <div class="col-md-6">
                                      <label
                                        for="taxInput2"
                                        class="form-label">Tax 2</label>
                                      <select
                                        name="tax-2-input"
                                        id="taxInput2"
                                        class="form-select tax-select">
                                        <option value="0%" selected>
                                          0%
                                        </option>
                                        <option value="1%">1%</option>
                                        <option value="10%">10%</option>
                                        <option value="18%">18%</option>
                                        <option value="40%">40%</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="my-4 dropdown-divider"></div>
                                  <button
                                    type="button"
                                    class="btn btn-label-primary btn-apply-changes">
                                    Apply
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <button
                            type="button"
                            class="btn btn-sm btn-primary"
                            data-repeater-create>
                            <i class="me-1_5 icon-base bx bx-plus icon-xs"></i>Add Item
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <hr class="my-0" />
                  <div class="px-0 card-body">
                    <div class="row-gap-4 row">
                      <div class="mb-4 mb-md-0 col-md-6">
                        <div class="d-flex align-items-center mb-4">
                          <label
                            for="salesperson"
                            class="me-2 text-heading fw-medium">Salesperson:</label>
                          <input
                            type="text"
                            class="form-control"
                            id="salesperson"
                            placeholder="Edward Crowley" />
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          id="invoiceMsg"
                          placeholder="Thanks for your business" />
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
                          <label
                            for="note"
                            class="mb-1 text-heading fw-medium">Note:</label>
                          <textarea
                            class="form-control"
                            rows="2"
                            id="note"
                            placeholder="Invoice note">
It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Invoice Add-->

              <!-- Invoice Actions -->
              <div class="col-lg-3 col-12 invoice-actions">
                <div class="mb-6 card">
                  <div class="card-body">
                    <button
                      class="d-grid mb-4 w-100 btn btn-primary"
                      data-bs-toggle="offcanvas"
                      data-bs-target="#sendInvoiceOffcanvas">
                      <span
                        class="d-flex align-items-center justify-content-center text-nowrap"><i
                          class="me-2 icon-base bx bx-paper-plane icon-xs"></i>Send Invoice</span>
                    </button>
                    <a
                      href="<?= $base_url;?>invoice-page/app-invoice-preview.php"
                      class="d-grid mb-4 w-100 btn btn-label-secondary">Preview</a>
                    <button
                      type="button"
                      class="d-grid w-100 btn btn-label-secondary">
                      Save
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
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="payment-terms"
                        checked />
                    </div>
                  </div>
                  <div class="d-flex justify-content-between mb-2">
                    <label for="client-notes">Client Notes</label>
                    <div class="me-n2 form-check form-switch">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="client-notes"
                        checked />
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <label for="payment-stub">Payment Stub</label>
                    <div class="me-n2 form-check form-switch">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="payment-stub"
                        checked />
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Invoice Actions -->
            </div>

            <!-- Offcanvas -->
            <!-- Send Invoice Sidebar -->
            <div
              class="offcanvas offcanvas-end"
              id="sendInvoiceOffcanvas"
              aria-hidden="true">
              <div class="mb-6 border-bottom offcanvas-header">
                <h5 class="offcanvas-title">Send Invoice</h5>
                <button
                  type="button"
                  class="text-reset btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
              </div>
              <div class="flex-grow-1 pt-0 offcanvas-body">
                <form>
                  <div class="mb-6">
                    <label for="invoice-from" class="form-label">From</label>
                    <input
                      type="text"
                      class="form-control"
                      id="invoice-from"
                      value="shelbyComapny@email.com"
                      placeholder="company@email.com" />
                  </div>
                  <div class="mb-6">
                    <label for="invoice-to" class="form-label">To</label>
                    <input
                      type="text"
                      class="form-control"
                      id="invoice-to"
                      value="qConsolidated@email.com"
                      placeholder="company@email.com" />
                  </div>
                  <div class="mb-6">
                    <label for="invoice-subject" class="form-label">Subject</label>
                    <input
                      type="text"
                      class="form-control"
                      id="invoice-subject"
                      value="Invoice of purchased Admin Templates"
                      placeholder="Invoice regarding goods" />
                  </div>
                  <div class="mb-6">
                    <label for="invoice-message" class="form-label">Message</label>
                    <textarea
                      class="form-control"
                      name="invoice-message"
                      id="invoice-message"
                      cols="3"
                      rows="8">
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
                    <button
                      type="button"
                      class="me-4 btn btn-primary"
                      data-bs-dismiss="offcanvas">
                      Send
                    </button>
                    <button
                      type="button"
                      class="btn btn-label-secondary"
                      data-bs-dismiss="offcanvas">
                      Cancel
                    </button>
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