<?php
session_start();
include_once 'API/config.php'; // Include database connection
include_once 'features/controller_user.php'; // Include controller_user.php
include_once 'function.php'; // Include function.php
include_once 'features/header.php'; // Include header.php

// Cek jika pengguna belum login, redirect ke login.php
if (!isset($_SESSION['username'])) {
  header('Location: menu-a/login.php');
  exit;
}
?>

<!DOCTYPE html>

<html lang="en" class="layout-menu-fixed layout-navbar-fixed layout-compact" dir="ltr" data-skin="default" data-assets-path="assets/" data-template="vertical-menu-template" data-bs-theme="light">

<body>

  <div class="layout-content-navbar layout-wrapper">
    <div class="layout-container">

      <!-- Menu -->

      <?php
      include_once 'features/sidebar.php';
      ?>

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
              <div class="mb-0 nav-item navbar-search-wrapper">
                <a class="px-0 nav-item nav-link search-toggler" href="javascript:void(0);">
                  <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
                </a>
              </div>
            </div>

            <!-- /Search -->
            <ul class="flex-row align-items-center ms-md-auto navbar-nav">

              <!-- Style Switcher -->
              <li class="me-2 me-xl-0 nav-item dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="icon-base bx bx-sun icon-md theme-icon-active"></i>
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
                      <span><i class="me-3 icon-base bx bx-desktop icon-md" data-icon="desktop"></i>System</span>
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
                        <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                        <small>Manage Accounts</small>
                      </div>
                    </div>
                    <div class="row-bordered overflow-visible row g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="mb-3 rounded-circle dropdown-shortcuts-icon">
                          <i class="text-heading icon-base bx bx-user icon-26px"></i>
                        </span>
                        <a href="app-user.php" class="stretched-link">User App</a>
                        <small>Manage Users</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="mb-3 rounded-circle dropdown-shortcuts-icon">
                          <i class="text-heading icon-base bx bx-check-shield icon-26px"></i>
                        </span>
                        <a href="app-akses-role.php" class="stretched-link">Role Management</a>
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
                        <a href="app-account.php" class="stretched-link">Setting</a>
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
                  <div class="avatar avatar-online">
                    <img src="assets/img/avatars/1.png" alt class="w-px-40 rounded-circle h-auto" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="assets/img/avatars/1.png" alt class="w-px-40 rounded-circle h-auto" />
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
                    <a class="dropdown-item" href="#">
                      <i class="me-2 bx bx-user"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
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
        <class="content-wrapper">
          <!-- Content -->
          <div class="flex-grow-1 container-p-y container-xxl">

            <div class="card app-calendar-wrapper">
              <div class="row g-0">
                <!-- Calendar Sidebar -->
                <div class="border-end col app-calendar-sidebar" id="app-calendar-sidebar">
                  <div class="my-sm-0 mb-4 p-6 border-bottom">
                    <button class="w-100 btn btn-primary btn-toggle-sidebar">
                      <i class="me-2 icon-base bx bx-plus icon-16px"></i>
                      <span class="align-middle">Add Event</span>
                    </button>
                  </div>
                  <div class="px-3 pt-2">
                    <!-- inline calendar (flatpicker) -->
                    <div class="inline-calendar"></div>
                  </div>
                  <hr class="mx-n4 mt-3 mb-6" />
                  <div class="px-6 pb-2">
                    <!-- Filter -->
                    <div>
                      <h5>Event Filters</h5>
                    </div>

                    <div class="ms-2 mb-5 form-check form-check-secondary">
                      <input class="select-all form-check-input" type="checkbox" id="selectAll" data-value="all" checked />
                      <label class="form-check-label" for="selectAll">View All</label>
                    </div>

                    <div class="text-heading app-calendar-events-filter">
                      <div class="ms-2 mb-5 form-check form-check-danger">
                        <input class="form-check-input input-filter" type="checkbox" id="select-personal" data-value="personal" checked />
                        <label class="form-check-label" for="select-personal">Personal</label>
                      </div>
                      <div class="ms-2 mb-5 form-check">
                        <input class="form-check-input input-filter" type="checkbox" id="select-business" data-value="business" checked />
                        <label class="form-check-label" for="select-business">Business</label>
                      </div>
                      <div class="ms-2 mb-5 form-check form-check-warning">
                        <input class="form-check-input input-filter" type="checkbox" id="select-family" data-value="family" checked />
                        <label class="form-check-label" for="select-family">Family</label>
                      </div>
                      <div class="ms-2 mb-5 form-check form-check-success">
                        <input class="form-check-input input-filter" type="checkbox" id="select-holiday" data-value="holiday" checked />
                        <label class="form-check-label" for="select-holiday">Holiday</label>
                      </div>
                      <div class="ms-2 form-check form-check-info">
                        <input class="form-check-input input-filter" type="checkbox" id="select-etc" data-value="etc" checked />
                        <label class="form-check-label" for="select-etc">ETC</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Calendar Sidebar -->

                <!-- Calendar & Modal -->
                <div class="col app-calendar-content">
                  <div class="shadow-none border-0 card">
                    <div class="pb-0 card-body">
                      <!-- FullCalendar -->
                      <div id="calendar"></div>
                    </div>
                  </div>
                  <div class="app-overlay"></div>
                  <!-- FullCalendar Offcanvas -->
                  <div class="offcanvas offcanvas-end event-sidebar" id="addEventSidebar">
                    <div class="border-bottom offcanvas-header">
                      <h5 class="offcanvas-title" id="addEventSidebarLabel">Add Event</h5>
                      <button type="button" class="text-reset btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <form class="pt-0 event-form" id="eventForm" onsubmit="return false">
                        <div class="mb-6 form-control-validation">
                          <label class="form-label" for="eventTitle">Title</label>
                          <input type="text" class="form-control" id="eventTitle" name="eventTitle" placeholder="Event Title" />
                        </div>
                        <div class="mb-6">
                          <label class="form-label" for="eventLabel">Label</label>
                          <select class="select-event-label select2 form-select" id="eventLabel" name="eventLabel">
                            <option data-label="primary" value="Business" selected>Business</option>
                            <option data-label="danger" value="Personal">Personal</option>
                            <option data-label="warning" value="Family">Family</option>
                            <option data-label="success" value="Holiday">Holiday</option>
                            <option data-label="info" value="ETC">ETC</option>
                          </select>
                        </div>
                        <div class="mb-6 form-control-validation">
                          <label class="form-label" for="eventStartDate">Start Date</label>
                          <input type="text" class="form-control" id="eventStartDate" name="eventStartDate" placeholder="Start Date" />
                        </div>
                        <div class="mb-6 form-control-validation">
                          <label class="form-label" for="eventEndDate">End Date</label>
                          <input type="text" class="form-control" id="eventEndDate" name="eventEndDate" placeholder="End Date" />
                        </div>
                        <div class="mb-6">
                          <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input allDay-switch" id="allDaySwitch" />
                            <label class="form-check-label" for="allDaySwitch">All Day</label>
                          </div>
                        </div>
                        <div class="mb-6">
                          <label class="form-label" for="eventURL">Event URL</label>
                          <input type="url" class="form-control" id="eventURL" name="eventURL" placeholder="https://www.google.com/" />
                        </div>
                        <div class="mb-4 select2-primary">
                          <label class="form-label" for="eventGuests">Add Guests</label>
                          <select class="select-event-guests select2 form-select" id="eventGuests" name="eventGuests" multiple>
                            <option data-avatar="1.png" value="Jane Foster">Jane Foster</option>
                            <option data-avatar="3.png" value="Donna Frank">Donna Frank</option>
                            <option data-avatar="5.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                            <option data-avatar="7.png" value="Lori Spears">Lori Spears</option>
                            <option data-avatar="9.png" value="Sandy Vega">Sandy Vega</option>
                            <option data-avatar="11.png" value="Cheryl May">Cheryl May</option>
                          </select>
                        </div>
                        <div class="mb-6">
                          <label class="form-label" for="eventLocation">Location</label>
                          <input type="text" class="form-control" id="eventLocation" name="eventLocation" placeholder="Enter Location" />
                        </div>
                        <div class="mb-6">
                          <label class="form-label" for="eventDescription">Description</label>
                          <textarea class="form-control" name="eventDescription" id="eventDescription"></textarea>
                        </div>
                        <div class="d-flex justify-content-sm-between justify-content-start gap-2 mt-6">
                          <div class="d-flex">
                            <button type="submit" id="addEventBtn" class="me-4 btn btn-primary btn-add-event">Add</button>
                            <button type="reset" class="me-1 me-sm-0 btn btn-label-secondary btn-cancel" data-bs-dismiss="offcanvas">Cancel</button>
                          </div>
                          <button class="btn btn-label-danger btn-delete-event d-none">Delete</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Calendar & Modal -->
              </div>
            </div>

          </div>
          <!-- / Content -->

          <?php
          include_once 'features/footer.php';
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