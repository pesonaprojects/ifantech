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
    <title data-i18n="Send media">Send media</title>
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
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/bootstrap-select/bootstrap-select.css'?>"/>
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/toastr/toastr.css'?>" />
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
                    <li class="menu-item active open">
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
                            <li class="menu-item active">
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
                    <li class="menu-item" hidden>
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
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <h5 class="card-header" data-i18n="Send Media">Send Media</h5>
                                    <div class="card-body">
                                        <div class="card shadow-none text-center border mb-3">
                                            <div class="card-header border-bottom">
                                                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-within-card-active" aria-controls="navs-within-card-active" aria-selected="true">Image</button>
                                                    </li>
                                                    <li class="nav-item">
                                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-within-card-link" aria-controls="navs-within-card-link" aria-selected="false">Document</button>
                                                    </li>
                                                    <li class="nav-item">
                                                        <button type="button" class="nav-link disabled" data-bs-toggle="tab" role="tab" aria-selected="false">Video</button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="navs-within-card-active" role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Phone</label>
                                                        <select id="phonenumber" class="selectpicker w-100" data-style="btn-default">
                                                            <?php foreach($contact->result() as $c): ?>
                                                                <option value="<?=$c->contacts?>"><?=$c->name?> | <?=$c->contacts?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Caption</label>
                                                        <textarea id="autosize-demo" rows="3" class="form-control"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">Image</label>
                                                        <input id="image-input" accept="image/*" class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <div class="mb-3">
                                                        <button type="button" id="text-image" class="btn rounded-pill btn-primary">
                                                            <span class="tf-icons bx bx-send"></span>&nbsp; Send
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="navs-within-card-link" role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Phone</label>
                                                        <select id="phonenumber" class="selectpicker w-100" data-style="btn-default">
                                                            <?php foreach($contact->result() as $c): ?>
                                                                <option value="<?=$c->contacts?>"><?=$c->name?> | <?=$c->contacts?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">Document</label>
                                                        <input id="doc-input" class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <div class="mb-3">
                                                        <button id="btn-doc" type="button" class="btn rounded-pill btn-primary">
                                                            <span class="tf-icons bx bx-send"></span>&nbsp; Send
                                                        </button>
                                                    </div>
                                                </div>
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
        <div id="host" data="<?=$host?>"></div>
        <div id="deviceid" data="<?=$deviceid?>"></div>
    </div>
	<script src="<?=base_url().'assets/vendor/libs/jquery/jquery.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/popper/popper.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/js/bootstrap.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/hammer/hammer.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/i18n/i18n.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/typeahead-js/typeahead.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/js/menu.js'?>"></script>
    <script src="<?=base_url().'assets/js/main.js'?>"></script>
    <script src="<?=base_url().'assets/js/pages-profile.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/autosize/autosize.js'?>"></script>
    <script src="<?=base_url().'assets/js/forms-extras.js'?>"></script>
    <script src="<?=base_url().'/assets/vendor/libs/bootstrap-select/bootstrap-select.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/toastr/toastr.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/toastr/toastr.js'?>"></script>
    <script src="<?=base_url().'js/ws.js'?>"></script>
</body>
</html>