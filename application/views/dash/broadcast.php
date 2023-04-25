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
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/toastr/toastr.css'?>" />
    <link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/spinkit/spinkit.css'?>" />
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="<?=base_url().'home'?>" class="app-brand-link">
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
                    <li class="menu-item ">
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
                    <li class="menu-item active">
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
                            <div class="col-lg-12 col-md-6 col-12 mb-4">
                                <div class="card">
                                    <a href="<?=site_url().'broadcast/add'?>" class="btn btn-label-linkedin"><i class="fas fa-1x fa-plus-circle text-wite"></i> Add Broadcast</a>
                                </div>
                                <hr>
                                <div class="card">
                                    <div class="card-body">
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>EventID</th>
                                                    <th>Broadcast Name</th>
                                                    <th>Device</th>
                                                    <th>Contact</th>
                                                    <th>Broadcast Date</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($broadcast->result() as $c): ?>
                                                    <tr>
                                                        <td><?=$c->eventid?></td>
                                                        <td><?=$c->bc_name?></td>
                                                        <td>
                                                            <?php 
                                                            $GetDevice = $this->db->get_where('i_device', ['id' => $c->bc_device])->row_array();
                                                            ?>
                                                            <span class="badge rounded-pill  bg-label-info"><?=$GetDevice['devicename']?></span>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                            $GetContact = $this->db->get_where('i_label', ['id' => $c->bc_contact])->row_array();
                                                            $userid = $this->session->userdata('userid');
                                                            $query = $this->db->query("SELECT * FROM i_contacts WHERE userid='$userid' AND label='$c->bc_contact'");
                                                            $query2 = $this->db->query("SELECT * FROM i_contacts WHERE userid='$userid'");
                                                            $total =  $query->num_rows();
                                                            $total2 =  $query2->num_rows();
                                                            if ($c->bc_contact == 0) {
                                                                $tampilinfo = 'All Contacts ('.$total2.')';
                                                            }else{
                                                                $tampilinfo = $GetContact['name'].' ('.$total.')';
                                                            }
                                                            ?><?=$tampilinfo?>
                                                        </td>
                                                        <td><?=$c->bc_tgl?></td>
                                                        <td>
                                                            <?php 
                                                            if ($c->bc_status == 1) { ?>
                                                                <span class="badge rounded-pill bg-label-success">Send</span>
                                                            <?php }else{ ?>
                                                                <span class="badge rounded-pill bg-label-primary">Unsent</span>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn rounded-pill btn-icon btn-label-primary" data-bs-toggle="modal" data-bs-target="#edit<?=$c->id?>">
                                                                <span class="tf-icons bx bx-pencil"></span>
                                                            </button>
                                                            <button type="button" class="btn rounded-pill btn-icon btn-label-danger" data-bs-toggle="modal" data-bs-target="#hapus<?=$c->id?>">
                                                                <span class="tf-icons bx bx-trash"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach;?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>EventID</th>
                                                    <th>Broadcast Name</th>
                                                    <th>Device</th>
                                                    <th>Contact</th>
                                                    <th>Broadcast Date</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
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
    <script src="<?=base_url().'assets/vendor/libs/select2/select2.js'?>"></script>
    <script src="<?=base_url().'assets/js/forms-selects.js'?>"></script>
    <script src="<?=base_url().'assets/js/main.js'?>"></script>
    <script src="<?=base_url().'assets/js/pages-profile.js'?>"></script>
    <script src="<?=base_url().'assets/vendor/libs/clipboard/clipboard.js'?>"></script>
    <script src="<?=base_url().'assets/js/extended-ui-misc-clipboardjs.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script src="<?=base_url().'assets/vendor/libs/toastr/toastr.js'?>"></script>
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