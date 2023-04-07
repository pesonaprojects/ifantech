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
                    <li class="menu-item active">
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
                            <div class="col-lg-12 col-md-6 col-12 mb-4">
                                <div class="card">
                                    <?php 
                                    if ($device == 0) { ?>
                                        <button type="button" class="btn btn-label-linkedin" data-bs-toggle="modal" data-bs-target="#add_contacts">
                                            <i class="fas fa-1x fa-plus-circle text-wite"></i> Setup Device
                                        </button>
                                    <?php }else{ ?>
                                        <center><h3>Detail Device</h3></center>
                                    <?php }?>
                                    <div class="modal fade" id="add_contacts" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Setup Device</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="<?=base_url().'device/setup'?>" method="POST">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Name</label>
                                                                <input type="text" id="nameSmall" class="form-control" placeholder="Enter Name" name="name" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Webhook</label>
                                                                <input type="url" id="nameSmall" class="form-control" placeholder="Webhook URL" name="webhook"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3" hidden>
                                            <label class="form-label">Host</label>
                                            <input type="text" class="form-control" value="<?=$host?>" aria-describedby="defaultFormControlHelp" id="" />
                                        </div>
                                        <div class="row">
                                            <label class="form-label">Device Key</label>
                                            <div class="col-md-10 mb-3">
                                                <input class="form-control" id="clipboard-example" type="text" value="<?=$devicekey?>" readonly/>
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                <button class="clipboard-btn btn btn-primary me-2" data-clipboard-action="copy" data-clipboard-target="#clipboard-example">Copy</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Device ID</label>
                                            <input type="text" class="form-control" value="<?=$deviceid?>" readonly/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Device Name</label>
                                            <input type="text" class="form-control" value="<?=$devicename?>" readonly/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nomer Whatsapp</label>
                                            <input type="text" class="form-control" id="nomor-client" name="nomor-client" readonly/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Whatsapp</label>
                                            <input type="text" class="form-control" value="" id="name-client" name="name-client" readonly/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Webhook</label>
                                            <input type="text" class="form-control" placeholder="" readonly/>
                                        </div>
                                        <div class="mb-3">
                                            <button type="button" name="btn-scan" id="btn-scan" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                                                <span class="tf-icons bx bx-qr-scan" title="Scan QR"></span>
                                          </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel3">Connect Device</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="text-normal">Untuk menyambungkan whatsapp ke Ifantech Gateway scan kode qr berikut:</div>
                                            <ol>
                                                <li>Buka WhatsApp di telepon Anda</li>
                                                <li><span dir="ltr" class="i0jNr">Ketuk <strong><span dir="ltr" class="i0jNr">Menu <span class="_30yMe"><svg height="24px" viewBox="0 0 24 24" width="24px">
                                                    <rect fill="#f2f2f2" height="24" rx="3" width="24"></rect>
                                                    <path d="m12 15.5c.825 0 1.5.675 1.5 1.5s-.675 1.5-1.5 1.5-1.5-.675-1.5-1.5.675-1.5 1.5-1.5zm0-2c-.825 0-1.5-.675-1.5-1.5s.675-1.5 1.5-1.5 1.5.675 1.5 1.5-.675 1.5-1.5 1.5zm0-5c-.825 0-1.5-.675-1.5-1.5s.675-1.5 1.5-1.5 1.5.675 1.5 1.5-.675 1.5-1.5 1.5z" fill="#818b90"></path>
                                                </svg></span></span></strong> atau <strong><span dir="ltr" class="i0jNr">Setelan <span class="_30yMe"><svg width="24" height="24" viewBox="0 0 24 24">
                                                    <rect fill="#F2F2F2" width="24" height="24" rx="3"></rect>
                                                    <path d="M12 18.69c-1.08 0-2.1-.25-2.99-.71L11.43 14c.24.06.4.08.56.08.92 0 1.67-.59 1.99-1.59h4.62c-.26 3.49-3.05 6.2-6.6 6.2zm-1.04-6.67c0-.57.48-1.02 1.03-1.02.57 0 1.05.45 1.05 1.02 0 .57-.47 1.03-1.05 1.03-.54.01-1.03-.46-1.03-1.03zM5.4 12c0-2.29 1.08-4.28 2.78-5.49l2.39 4.08c-.42.42-.64.91-.64 1.44 0 .52.21 1 .65 1.44l-2.44 4C6.47 16.26 5.4 14.27 5.4 12zm8.57-.49c-.33-.97-1.08-1.54-1.99-1.54-.16 0-.32.02-.57.08L9.04 5.99c.89-.44 1.89-.69 2.96-.69 3.56 0 6.36 2.72 6.59 6.21h-4.62zM12 19.8c.22 0 .42-.02.65-.04l.44.84c.08.18.25.27.47.24.21-.03.33-.17.36-.38l.14-.93c.41-.11.82-.27 1.21-.44l.69.61c.15.15.33.17.54.07.17-.1.24-.27.2-.48l-.2-.92c.35-.24.69-.52.99-.82l.86.36c.2.08.37.05.53-.14.14-.15.15-.34.03-.52l-.5-.8c.25-.35.45-.73.63-1.12l.95.05c.21.01.37-.09.44-.29.07-.2.01-.38-.16-.51l-.73-.58c.1-.4.19-.83.22-1.27l.89-.28c.2-.07.31-.22.31-.43s-.11-.35-.31-.42l-.89-.28c-.03-.44-.12-.86-.22-1.27l.73-.59c.16-.12.22-.29.16-.5-.07-.2-.23-.31-.44-.29l-.95.04c-.18-.4-.39-.77-.63-1.12l.5-.8c.12-.17.1-.36-.03-.51-.16-.18-.33-.22-.53-.14l-.86.35c-.31-.3-.65-.58-.99-.82l.2-.91c.03-.22-.03-.4-.2-.49-.18-.1-.34-.09-.48.01l-.74.66c-.39-.18-.8-.32-1.21-.43l-.14-.93a.426.426 0 00-.36-.39c-.22-.03-.39.05-.47.22l-.44.84-.43-.02h-.22c-.22 0-.42.01-.65.03l-.44-.84c-.08-.17-.25-.25-.48-.22-.2.03-.33.17-.36.39l-.13.88c-.42.12-.83.26-1.22.44l-.69-.61c-.15-.15-.33-.17-.53-.06-.18.09-.24.26-.2.49l.2.91c-.36.24-.7.52-1 .82l-.86-.35c-.19-.09-.37-.05-.52.13-.14.15-.16.34-.04.51l.5.8c-.25.35-.45.72-.64 1.12l-.94-.04c-.21-.01-.37.1-.44.3-.07.2-.02.38.16.5l.73.59c-.1.41-.19.83-.22 1.27l-.89.29c-.21.07-.31.21-.31.42 0 .22.1.36.31.43l.89.28c.03.44.1.87.22 1.27l-.73.58c-.17.12-.22.31-.16.51.07.2.23.31.44.29l.94-.05c.18.39.39.77.63 1.12l-.5.8c-.12.18-.1.37.04.52.16.18.33.22.52.14l.86-.36c.3.31.64.58.99.82l-.2.92c-.04.22.03.39.2.49.2.1.38.08.54-.07l.69-.61c.39.17.8.33 1.21.44l.13.93c.03.21.16.35.37.39.22.03.39-.06.47-.24l.44-.84c.23.02.44.04.66.04z" fill="#818b90"></path>
                                                </svg></span></span></strong> dan pilih <strong>Perangkat tertaut</strong></span></li>
                                                <li>Arahkan telepon Anda ke layar ini untuk memindai kode tersebut</li>
                                            </ol>
                                        </div>
                                        <div class="col-md-6 mb-3 text-center" id="qrcode">
                                            <center>
                                                <div class="sk-grid sk-primary">
                                                    <div class="sk-grid-cube"></div>
                                                    <div class="sk-grid-cube"></div>
                                                    <div class="sk-grid-cube"></div>
                                                    <div class="sk-grid-cube"></div>
                                                    <div class="sk-grid-cube"></div>
                                                    <div class="sk-grid-cube"></div>
                                                    <div class="sk-grid-cube"></div>
                                                    <div class="sk-grid-cube"></div>
                                                    <div class="sk-grid-cube"></div>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close
                                    </button>
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
    <script>
        var server = "<?=$host?>";
        var id = "<?=$deviceid?>";
        ws = new WebSocket(`ws://${server}?token=${id}`);
        ws.onopen = () => {
            console.log('connect')
            handle(ws)
            user = id
            ws.send('status')
            ws.send('info')
        }
        ws.onmessage = (ev) => {
            try {
                const data = JSON.parse(ev.data)
                switch (data.type) {
                    case 'info':
                    if(data.data.webhook){
                        $('#add-webhook').hide();
                        $('#input-webhook').val(data.data.webhook);
                        $('#remove-webhook').show();
                    }
                    $('#nomor-client').val(data.data.nomor);
                    $('#name-client').val(data.data.name);
                    break;
                    case 'status':
                    if(!data.data || (data.data && data.data == 'idle')){
                        $('#qrcode').html(`<b>Silahkan lakukan scan</b>`)
                    }else if(data.data && data.data == 'running'){
                        $('#qrcode').html(`<b>terhubung ke whatsapp</b>`)
                    }
                    else{
                        $('#btn-scan').attr('disabled', '');
                    }
                    break;
                    case 'qr':
                    $('#qrcode').html(`<img src="${data.data}"/>`)
                    break;
                    default:
                    break;
                }
            } catch (error) {
                $('#log').append(`<p>${ev.data}</p>`)
            }
        }
        ws.onclose = () => {
            $('#log').prepend(`<p>Gagal Terhubung</p>`)
            ws = null
        }
        ws.onerror = () => {
            ws.close()
        }
        const handle = (ws) => {
            $('#btn-scan').click(function (e) { 
                e.preventDefault();
                ws.send('start')
                $('#qrcode').html()
            });
        }
    </script>
</body>
</html>