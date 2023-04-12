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
            				<div class="col-xl-12">
                                <div class="nav-align-top mb-4">
                                    <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#account" aria-controls="account" aria-selected="true">
                                                <i class="tf-icons bx bx-user"></i> Account
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#security" aria-controls="security" aria-selected="false">
                                                <i class="tf-icons bx bx-lock-alt"></i> Security
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#api-key" aria-controls="api-key" aria-selected="false">
                                                <i class="tf-icons bx bx-code"></i> API Key
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="account" role="tabpanel">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                    <div id="image"></div>
                                                    <div class="button-wrapper" hidden>
                                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                            <span class="d-none d-sm-block">Upload new photo</span>
                                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                                            <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg"/>
                                                        </label>
                                                        <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Reset</span>
                                                        </button>
                                                        <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-0" />
                                            <div class="card-body">
                                                <form id="formAccountSettings" method="POST" onsubmit="return false">
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Fullname</label>
                                                            <input class="form-control" type="text" value="<?=$fullname?>" autofocus readonly/>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Username</label>
                                                            <input class="form-control" type="text" value="<?=$username?>" autofocus readonly/>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">E-Mail</label>
                                                            <input class="form-control" type="text" value="<?=$email?>" autofocus readonly/>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Phone number</label>
                                                            <input class="form-control" type="text" value="<?=$phone?>" autofocus readonly/>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Role</label>
                                                            <?php 
                                                            if ($role == 1) {
                                                                $role = "Admin";
                                                            }elseif ($role == 2) {
                                                                $role = "Member";
                                                            } ?>
                                                            <input class="form-control" type="text" value="<?=$role?>" autofocus readonly/>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Device</label>
                                                            <?php 
                                                            if ($device == 1) {
                                                                $device = "Active";
                                                            }elseif ($device == 0) {
                                                                $device = "Not Set";
                                                            } ?>
                                                            <input class="form-control" type="text" value="<?=$device?>" autofocus readonly/>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">status</label>
                                                            <?php 
                                                            if ($status == 1) {
                                                                $status = "Active";
                                                            }elseif ($status == 2) {
                                                                $status = "Nonaktif";
                                                            } ?>
                                                            <input class="form-control" type="text" value="<?=$status?>" autofocus readonly/>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">created</label>
                                                            <?php  
                                                            $created = date('d M Y - H:i:s',strtotime($created)) ?>
                                                            <input class="form-control" type="text" value="<?=$created?>" autofocus readonly/>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="security" role="tabpanel">
                                            <form id="formAccountPassword" method="POST" onsubmit="return false">
                                                <div class="row">
                                                    <div class="mb-3 col-md-6 form-password-toggle">
                                                        <label class="form-label" for="currentPassword">Current Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <input class="form-control" type="password" name="currentPassword" id="currentPassword" placeholder="············"/>
                                                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6 form-password-toggle">
                                                        <label class="form-label" for="newPassword">New Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <input class="form-control" type="password" id="newPassword" name="newPassword" placeholder="············"/>
                                                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-md-6 form-password-toggle">
                                                        <label class="form-label" for="confirmPassword">Confirm New Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="············"/>
                                                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <p class="fw-semibold mt-2">Password Requirements:</p>
                                                        <ul class="ps-3 mb-0">
                                                            <li class="mb-1">Minimum 8 characters long - the more, the better</li>
                                                            <li class="mb-1">At least one lowercase character</li>
                                                            <li>At least one number, symbol, or whitespace character</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12 mt-1">
                                                        <button id="btnchangepass" type="submit" class="btn btn-primary me-2">Save changes</button>
                                                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="api-key" role="tabpanel">
                                            <div class="row">
                                                <label class="form-label">API Key</label>
                                                <div class="col-md-12 mb-3">
                                                    <input class="form-control" id="clipboard-example" type="text" value="<?=$devicekey?>" readonly/>
                                                </div>
                                                <div class="col-md-2 col-sm-12">
                                                    <button class="clipboard-btn btn btn-primary me-2" data-clipboard-action="copy" data-clipboard-target="#clipboard-example">Copy</button>
                                                </div>
                                            </div>
                                            <br>
                                            <form id="formAccountDeactivation" onsubmit="return false">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" name="checklist" id="checklist"/>
                                                    <label class="form-check-label" for="accountActivation">I confirm to revoke API Key</label>
                                                </div>
                                                <button id="btnrevoke" type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                                            </form>
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
    <script src="<?=base_url().'assets/vendor/libs/datatables/jquery.dataTables.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/datatables-responsive/datatables.responsive.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js'?>"></script>
    <script src="<?=base_url().'assets/js/main.js'?>"></script>
    <script src="<?=base_url().'assets/js/pages-profile.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/toastr/toastr.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/clipboard/clipboard.js'?>"></script>
    <script src="<?=base_url().'assets/js/extended-ui-misc-clipboardjs.js'?>"></script>
    <script src="<?=base_url().'js/base64.min.js'?>"></script>
    <script src="<?=base_url().'js/md5.min.js'?>"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        $(document).ready(function(){
            getapikey();
            show_picture();
            var userid = '<?=$this->session->userdata('userid')?>';
            var img_dir = '<?=base_url()?>assets/img/users/';
            function getapikey() {
                $.ajax({
                    type : 'GET',
                    url : '<?php echo base_url()?>ajax/profile/GetApi',
                    async : true,
                    success : function(data) {
                        $('#clipboard-example').val(data)
                    }
                });
            }
            $('#btnrevoke').on('click',function(){
                const cb = document.querySelector('#checklist')
                if (cb.checked == true) {
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url('ajax/profile/revoke')?>",
                        dataType : "JSON",
                        data : {userid:userid},
                        success: function(data){
                            $('[name="checklist"]').val("");
                            getapikey();
                            toastr.success('Revoke APIKey Successfully');
                        }
                    });
                    return false;
                }else{
                    toastr.warning('Please Check Confirm before click button');
                }
            });
            $('#btnchangepass').on('click', function() {
                const currentPassword = $('#currentPassword').val();
                const newPassword = $('#newPassword').val();
                const confirmPassword = $('#confirmPassword').val();
                const hash = Base64.encode(md5(currentPassword));
                const LastPassword = "<?=$password?>";
                const hasNewPassword = Base64.encode(md5(newPassword));
                if(LastPassword == hash){
                    if(newPassword == confirmPassword){
                        $.ajax({
                            type : "POST",
                            url  : "<?php echo base_url('ajax/profile/ChangePassword')?>",
                            dataType : "JSON",
                            data : {userid:userid, hasNewPassword:hasNewPassword},
                            success: function(data){
                                $('#currentPassword').val("");
                                $('#newPassword').val("");
                                $('#confirmPassword').val("");
                                toastr.success('Change Password Successfully');
                            }
                        });
                        return false;
                    }else{
                        toastr.warning('Confirmasi Password not Valid');
                    }
                }else{
                    toastr.warning('Current Password not Valid');
                }
            });
            function show_picture() {
                $.ajax({
                    type  : 'GET',
                    url   : '<?php echo base_url()?>ajax/profile/show',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<img src="'+img_dir+data[i].image+'" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>';
                        }
                        $('#image').html(html);
                    }
                });
            }
        });
    </script>
</body>
</html>