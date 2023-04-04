<!DOCTYPE html>
<html
lang="en"
class="light-style layout-navbar-fixed layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="<?=base_url().'assets/'?>"
data-template="vertical-menu-template-no-customizer"
>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title><?=$title?></title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="<?=base_url().'assets/img/favicon/favicon.ico'?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/fonts/boxicons.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/fonts/fontawesome.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/fonts/flag-icons.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/css/rtl/core.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/css/rtl/theme-default.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/css/demo.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/typeahead-js/typeahead.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/apex-charts/apex-charts.css'?>" />
    <script src="<?=base_url().'assets/vendor/js/helpers.js'?>"></script>
    <script src="<?=base_url().'assets/js/config.js'?>"></script>
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <img width="150px" src="<?=base_url().'Waapi/waapi.es.png'?>">
                    </a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
                        <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
                    </a>
                </div>
                <div class="menu-divider mt-0"></div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item active">
                        <a href="<?=base_url().''?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?=base_url().'device'?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-desktop"></i>
                            <div data-i18n="Device">Device</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-send"></i>
                            <div data-i18n="Send Message">Send Message</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?=base_url().'send/text'?>" class="menu-link">
                                    <div data-i18n="Text Message">Text Message</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?=base_url().'send/media'?>" class="menu-link">
                                    <div data-i18n="Media Message">Media Message</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?=base_url().'send/button'?>" class="menu-link">
                                    <div data-i18n="Button Message">Button Message</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?=base_url().'send/location'?>" class="menu-link">
                                    <div data-i18n="Location Message">Location Message</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="<?=base_url().'schedule'?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-time"></i>
                            <div data-i18n="Scheduling">Scheduling</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?=base_url().'broadcast'?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-broadcast"></i>
                            <div data-i18n="Broadcast">Broadcast</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?=base_url().'contact'?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-book"></i>
                            <div data-i18n="Contacts">Contacts</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?=base_url().'documentation'?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-code"></i>
                            <div data-i18n="Documentation">Documentation</div>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('role') == 1): ?>
                        <li class="menu-header small text-uppercase"><span class="menu-header-text">Administrator</span></li>
                        <li class="menu-item active">
                            <a href="<?=base_url().'admin/users'?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-user"></i>
                                <div data-i18n="Users">Users</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="<?=base_url().'admin/server'?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-server"></i>
                                <div data-i18n="Server">Server</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="<?=base_url().'admin/settings'?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-cog"></i>
                                <div data-i18n="Settings">Settings</div>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="container-fluid">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>
                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <?php $this->load->view('options/locales') ?>
                                <?php $this->load->view('options/userprofile') ?>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h3 class="card-title mb-2">Congratulations Ifantech!</h3>
                                        <span class="d-block mb-4 text-nowrap">Best seller of the month</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-end">
                                            <div class="col-6">
                                                <h1 class="display-6 text-primary mb-2 pt-4 pb-1">$89k</h1>
                                                <small class="d-block mb-3">You have done 57.6% <br />more sales today.</small>
                                                <a href="javascript:;" class="btn btn-sm btn-primary">View sales</a>
                                            </div>
                                            <div class="col-6">
                                                <img src="../../assets/img/illustrations/prize-light.png" width="140" height="150" class="rounded-start" alt="View Sales" data-app-light-img="illustrations/prize-light.png" data-app-dark-img="illustrations/prize-dark.png"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12 mb-4">
                                <div class="row">
                                    <div class="col-6 col-md-3 col-lg-4 mb-4">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-success">
                                                        <i class="bx bx-time fs-4"></i>
                                                    </span>
                                                </div>
                                                <span class="d-block text-nowrap" data-i18n="Contacts">Contacts</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 col-lg-4 mb-4">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-danger">
                                                        <i class="bx bx-cart fs-4"></i>
                                                    </span>
                                                </div>
                                                <span class="d-block text-nowrap" data-i18n="Scheduling">Schedule</span>
                                                <h2 class="mb-0">40</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 col-lg-4 mb-4">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-danger">
                                                        <i class="bx bx-broadcast fs-4"></i>
                                                    </span>
                                                </div>
                                                <span class="d-block text-nowrap" data-i18n="Broadcast">Broadcast</span>
                                                <h2 class="mb-0">40</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $this->load->view('options/footer') ?>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>
	<script src="<?=base_url().'assets/vendor/libs/jquery/jquery.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/popper/popper.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/js/bootstrap.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/hammer/hammer.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/i18n/i18n.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/typeahead-js/typeahead.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/js/menu.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/apex-charts/apexcharts.js'?>"></script>
    <script src="<?=base_url().'assets/js/main.js'?>"></script>
    <script src="<?=base_url().'assets/js/dashboards-ecommerce.js'?>"></script>
</body>
</html>