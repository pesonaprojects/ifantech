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
                    <li class="menu-item active">
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
                            <div class="col-xl-3 col-lg-4 col-md-4 mb-lg-0 mb-4">
                                <h5>eCommerce</h5>
                                <div class="nav-align-left">
                                    <ul class="nav nav-pills w-100 gap-1">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-target="#navs-home" data-bs-toggle="tab" role="tab" aria-controls="navs-home" aria-selected="false">Home</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-target="#navs-n-messages" data-bs-toggle="tab" role="tab" aria-controls="navs-n-messages" aria-selected="false">Normal Message</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-target="#navs-b-messages" data-bs-toggle="tab" role="tab" aria-controls="navs-b-messages" aria-selected="false">Button Message</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-target="#navs-contact" data-bs-toggle="tab" role="tab" aria-controls="navs-contact" aria-selected="false">Contacts</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-8 col-md-8">
                                <div class="tab-content">
                                    <div class="tab-pane fade card overflow-hidden show active" id="navs-home">
                                        <div class="card-body">
                                            <h4 class="d-flex align-items-center mt-2 mb-4">
                                                <span class="badge bg-label-secondary p-2 rounded me-3">
                                                    <i class="bx bx-home bx-sm"></i>
                                                </span>WAAPI.es
                                            </h4>
                                            <p>Endpoint URL : <?=base_url().''?></p>
                                            <div class="d-flex justify-content-between flex-wrap gap-3 my-4">
                                                <h6>Still need help? <a href="javascript:void(0);">Contact us?</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade card overflow-hidden" id="navs-n-messages">
                                        <div class="card-body">
                                            <div class="col-xl-12">
                                                <h6 class="text-muted">Normal Message</h6>
                                                <div class="nav-align-top mb-4">
                                                    <ul class="nav nav-pills mb-3" role="tablist">
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-text" aria-controls="navs-text" aria-selected="true">Text</button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-media" aria-controls="navs-media" aria-selected="true">Image</button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-doc" aria-controls="navs-doc" aria-selected="true">Doc</button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-loc" aria-controls="navs-loc" aria-selected="true">Locations
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="navs-text" role="tabpanel">
                                                            <p>Text Message.</p>
                                                            <code><pre>
$curl = curl_init();
$dataarr = [
  "deviceid" => "Your Device ID",
  "type" => "text",
  "phonenumber" => "Receipt Number",
  "msg" => "Your Message",
];
$datajson = json_encode($dataarr, true);
curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint.'api/message/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $datajson,
  CURLOPT_HTTPHEADER => array(
    'Api-Key: Your Api-Key',
    'Device-Key: Your Device-Key',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
                                                            </pre></code>
                                                        </div>
                                                        <div class="tab-pane fade" id="navs-media" role="tabpanel">
                                                            <p>Media.</p>
                                                            <p class="mb-0">Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy liquorice caramels.</p>
                                                        </div>
                                                        <div class="tab-pane fade" id="navs-doc" role="tabpanel">
                                                            <p>Document.</p>
                                                            <p class="mb-0">Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie jelly.</p>
                                                        </div>
                                                        <div class="tab-pane fade" id="navs-loc" role="tabpanel">
                                                            <p>Locations.</p>
                                                            <code><pre>
$curl = curl_init();
$dataarr = [
  "deviceid" => "Your Device ID",
  "type" => "location",
  "phonenumber" => "Receipt Number",
  "lat" => "51.10363646785272",
  "long" => "5.894508361816407",
];
$datajson = json_encode($dataarr, true);
curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint.'api/message/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $datajson,
  CURLOPT_HTTPHEADER => array(
    'Api-Key: Your Api-Key',
    'Device-Key: Your Device-Key',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
                                                            </pre></code>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade card overflow-hidden" id="navs-b-messages">
                                        <div class="card-body">
                                            <div class="col-xl-12">
                                                <h6 class="text-muted">Button Message</h6>
                                                <div class="nav-align-top mb-4">
                                                    <ul class="nav nav-pills mb-3" role="tablist">
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-list" aria-controls="navs-list" aria-selected="true">List</button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-respons" aria-controls="navs-respons" aria-selected="true">Respons</button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-link" aria-controls="navs-link" aria-selected="true">Link</button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-copy" aria-controls="navs-copy" aria-selected="true">Copy</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="navs-list" role="tabpanel">
                                                            <p>List.</p>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                                                        </div>
                                                        <div class="tab-pane fade" id="navs-respons" role="tabpanel">
                                                            <p>Respons.</p>
                                                            <p class="mb-0">Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy liquorice caramels.</p>
                                                        </div>
                                                        <div class="tab-pane fade" id="navs-link" role="tabpanel">
                                                            <p>Link.</p>
                                                            <code><pre>
$curl = curl_init();
$dataarr = [
  "deviceid" => "Your Device ID",
  "type" => "button-link",
  "phonenumber" => "Receipt Number",
  "text" => "Visit Our Website",
  "button": {
    "text": "Visit",
    "url": "http://waapi.es"
  },
];
$datajson = json_encode($dataarr, true);
curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint.'api/message/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $datajson,
  CURLOPT_HTTPHEADER => array(
    'Api-Key: Your Api-Key',
    'Device-Key: Your Device-Key',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
                                                            </pre></code>
                                                        </div>
                                                        <div class="tab-pane fade" id="navs-copy" role="tabpanel">
                                                            <p>Copy.</p>
                                                            <code><pre>
$curl = curl_init();
$dataarr = [
  "deviceid" => "Your Device ID",
  "type" => "button-copy",
  "phonenumber" => "Receipt Number",
  "text" => "Copy Text",
  "button": {
    "text": "Copy",
    "textCopy": "Im Here"
  },
];
$datajson = json_encode($dataarr, true);
curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint.'api/message/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $datajson,
  CURLOPT_HTTPHEADER => array(
    'Api-Key: Your Api-Key',
    'Device-Key: Your Device-Key',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
                                                            </pre></code>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade card overflow-hidden" id="navs-contact">
                                        <div class="card-body">
                                            <div class="col-xl-12">
                                                <h6 class="text-muted">Contact</h6>
                                                <div class="nav-align-top mb-4">
                                                    <ul class="nav nav-pills mb-3" role="tablist">
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-show-contact" aria-controls="navs-show-contact" aria-selected="true">Show</button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-add-contact" aria-controls="navs-add-contact" aria-selected="true">Add</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="navs-show-contact" role="tabpanel">
                                                            <p>Show Contacts.</p>
                                                            <code><pre>
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint.'api/contacts/show',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Api-Key: Your Api-Key'
  ),
));

$response = curl_exec($curl);
                                                            </pre></code>
                                                        </div>
                                                        <div class="tab-pane fade" id="navs-add-contact" role="tabpanel">
                                                            <p>Add Contact.</p>
                                                            <code><pre>
$curl = curl_init();
$dataarr = [
  "name" => contact name,
  "contacts" => phonenumber,
  "label" => "", //make empty if u not have label ID
];
$datajson = json_encode($dataarr, true);
curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint."api/contacts/add", //You Can Show Endpoint on Home TAB
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $datajson,
  CURLOPT_HTTPHEADER => array(
    'Api-Key: Your API-Key',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
</pre></code>
                                                        </div>
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
</body>
</html>