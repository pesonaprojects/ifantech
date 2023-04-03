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
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/css/pages/page-profile.css'?>" />
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
                    <li class="menu-item">
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
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Administrator</span></li>
                    <li class="menu-item">
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
            				<div class="col-12">
            					<div class="card mb-4">
            						<div class="user-profile-header-banner">
            							<img src="../../assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top" />
            						</div>
            						<div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
            							<div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
            								<img src="../../assets/img/avatars/1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img"/>
            							</div>
            							<div class="flex-grow-1 mt-3 mt-sm-5">
            								<div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            									<div class="user-profile-info">
            										<h4>John Doe</h4>
            										<ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
            											<li class="list-inline-item fw-semibold">
            												<i class="bx bx-calendar-alt"></i> Joined April 2021
            											</li>
            										</ul>
            									</div>
            									<a href="javascript:void(0)" class="btn btn-primary text-nowrap">
            										<i class="bx bx-user-check"></i> Connected
            									</a>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<div class="row">
            				<div class="col-xl-4 col-lg-5 col-md-5">
            					<div class="card mb-4">
            						<div class="card-body">
            							<small class="text-muted text-uppercase">About</small>
            							<ul class="list-unstyled mb-4 mt-3">
            								<li class="d-flex align-items-center mb-3">
            									<i class="bx bx-user"></i><span class="fw-semibold mx-2">Full Name:</span>
            									<span>John Doe</span>
            								</li>
            								<li class="d-flex align-items-center mb-3">
            									<i class="bx bx-check"></i><span class="fw-semibold mx-2">Status:</span> <span>Active</span>
            								</li>
            								<li class="d-flex align-items-center mb-3">
            									<i class="bx bx-star"></i><span class="fw-semibold mx-2">Role:</span> <span>Developer</span>
            								</li>
            								<li class="d-flex align-items-center mb-3">
            									<i class="bx bx-flag"></i><span class="fw-semibold mx-2">Country:</span> <span>USA</span>
            								</li>
            								<li class="d-flex align-items-center mb-3">
            									<i class="bx bx-detail"></i><span class="fw-semibold mx-2">Languages:</span>
            									<span>English</span>
            								</li>
            							</ul>
            							<small class="text-muted text-uppercase">Contacts</small>
            							<ul class="list-unstyled mb-4 mt-3">
            								<li class="d-flex align-items-center mb-3">
            									<i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span>
            									<span>(123) 456-7890</span>
            								</li>
            								<li class="d-flex align-items-center mb-3">
            									<i class="bx bx-chat"></i><span class="fw-semibold mx-2">Skype:</span> <span>john.doe</span>
            								</li>
            								<li class="d-flex align-items-center mb-3">
            									<i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span>
            									<span>john.doe@example.com</span>
            								</li>
            							</ul>
            							<small class="text-muted text-uppercase">Teams</small>
            							<ul class="list-unstyled mt-3 mb-0">
            								<li class="d-flex align-items-center mb-3">
            									<i class="bx bxl-github text-primary me-2"></i>
            									<div class="d-flex flex-wrap">
            										<span class="fw-semibold me-2">Backend Developer</span><span>(126 Members)</span>
            									</div>
            								</li>
            								<li class="d-flex align-items-center">
            									<i class="bx bxl-react text-info me-2"></i>
            									<div class="d-flex flex-wrap">
            										<span class="fw-semibold me-2">React Developer</span><span>(98 Members)</span>
            									</div>
            								</li>
            							</ul>
            						</div>
            					</div>
            				</div>
            				<div class="col-xl-8 col-lg-7 col-md-7">
            					<div class="card card-action mb-4">
            						<div class="card-header align-items-center">
            							<h5 class="card-action-title mb-0"><i class="bx bx-list-ul bx-sm me-2"></i>Activity Timeline</h5>
            						</div>
            						<div class="card-body">
            							<ul class="timeline ms-2">
            								<li class="timeline-item timeline-item-transparent">
            									<span class="timeline-point timeline-point-success"></span>
            									<div class="timeline-event pb-0">
            										<div class="timeline-header mb-1">
            											<h6 class="mb-0">Project status updated</h6>
            											<small class="text-muted">10 Day Ago</small>
            										</div>
            										<p class="mb-0">Woocommerce iOS App Completed</p>
            									</div>
            								</li>
            								<li class="timeline-end-indicator">
            									<i class="bx bx-check-circle"></i>
            								</li>
            							</ul>
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
    <script src="<?=base_url().'assets/vendor/libs/datatables/jquery.dataTables.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/datatables-responsive/datatables.responsive.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js'?>"></script>
    <script src="<?=base_url().'assets/js/main.js'?>"></script>
    <script src="<?=base_url().'assets/js/pages-profile.js'?>"></script>
</body>
</html>