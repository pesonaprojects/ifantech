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
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/select2/select2.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/tagify/tagify.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/bootstrap-select/bootstrap-select.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/css/pages/page-profile.css'?>" />
    <script src="<?=base_url().'assets/vendor/js/helpers.js'?>"></script>
    <script src="<?=base_url().'assets/js/config.js'?>"></script>
    <link rel="stylesheet" href="<?=base_url().'assets/toastr/toastr.css'?>">
    <link rel="stylesheet" href="<?=base_url().'assets/toastr/toastr.min.css'?>">
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
                    <li class="menu-item ">
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
                        <li class="menu-item active">
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
                            <div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="card">
                                    <button type="button" class="btn btn-label-linkedin" data-bs-toggle="modal" data-bs-target="#add_server">
                                        <i class="fas fa-1x fa-plus-circle text-wite"></i> Add Server
                                    </button>
                                    <div class="modal fade" id="add_server" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Add Server</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Server Name</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Name" name="name" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Server Host</label>
                                                                <input type="text" id="host" class="form-control" placeholder="Host" name="host" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button class="btn btn-primary" id="btn_simpan">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card">
                                    <button id="btn_reload" type="button" class="btn btn-label-Github">
                                        <i class="fas fa-1x fa-refresh text-wite"></i> Server
                                    </button>
                                </div>
                                <br>
                                <div class="card">
                                    <button type="button" class="btn btn-label-Github" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="fas fa-1x fa-server text-wite"></i> Server
                                    </button>
                                    <div class="collapse" id="collapseExample">
                                        <div class="list-group" id="data_server">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-6 col-12 mb-4">
                                <div class="card" id="load_data">
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="<?=base_url().'assets/vendor/libs/select2/select2.js'?>"></script>
    <script src="<?=base_url().'assets/js/forms-selects.js'?>"></script>
    <script src="<?=base_url().'assets/js/main.js'?>"></script>
    <script src="<?=base_url().'assets/js/pages-profile.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script src="<?=base_url().'assets/toastr/toastr.min.js'?>"></script>
    <script>
        $(document).ready(function(){
            data_server();

            function data_server() {
                $.ajax({
                    type  : 'GET',
                    url   : '<?php echo base_url()?>ajax/server/data_server',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<a href="javascript:;" class="list-group-item list-group-item-action show" data="'+data[i].id+'"><i class="fas fa-server"></i> '+data[i].name+' <span class="badge bg-primary float-right">ON</span></a>';
                        }
                        console.log(data)
                        $('#data_server').html(html);
                    }

                });
            }

            $('#data_server').on('click','.show',function(){
                var id=$(this).attr('data');
                console.log(id)
                $.ajax({
                    type  : 'POST',
                    url   : '<?php echo base_url()?>ajax/server/load_server',
                    data : {id:id},
                    success: function(data){
                        $('#load_data').html(data);
                    }
                });
            });

            $('#btn_simpan').on('click',function(){
                var name=$('#name').val();
                var host=$('#host').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url()?>ajax/server/add_server",
                    dataType : "JSON",
                    data : {name:name , host:host},
                    success: function(data){
                        $('[name="name"]').val("");
                        $('[name="host"]').val("");
                        data_server();
                    }
                });
                return false;
            });
            $("#btn_reload").on('click',function(){
                data_server();
            });
        });
    </script>
    <script type="text/javascript">
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
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
        <?php 
        if ($this->session->flashdata('success')) { ?>
            toastr.success("<?php echo $this->session->flashdata('success'); ?>");
        <?php }elseif ($this->session->flashdata('info')) { ?>
            toastr.info("<?php echo $this->session->flashdata('info'); ?>");
        <?php }elseif ($this->session->flashdata('warning')) { ?>
            toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
        <?php }elseif ($this->session->flashdata('error')) { ?>
            toastr.error("<?php echo $this->session->flashdata('error'); ?>");
        <?php } ?>
    </script>
</body>
</html>