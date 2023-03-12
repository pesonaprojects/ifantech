<!DOCTYPE html>
<html
lang="en"
class="light-style customizer-hide"
dir="ltr"
data-theme="theme-default"
data-assets-path="../../assets/"
data-template="vertical-menu-template-no-customizer"
>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
	<title><?=$title?></title>
	<meta name="description" content="" />
	<link rel="icon" type="image/x-icon" href="<?=base_url().'assets/img/favicon/favicon.ico'?>"/>
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
	<link rel="stylesheet" href="<?=base_url().'assets/vendor/libs/formvalidation/dist/css/formValidation.min.css'?>"/>
	<link rel="stylesheet" href="<?=base_url().'assets/vendor/css/pages/page-auth.css'?>" />
	<script src="<?=base_url().'assets/vendor/js/helpers.js'?>"></script>
	<script src="<?=base_url().'assets/js/config.js'?>"></script>
</head>
<body>
	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner py-4">
				<div class="card">
					<div class="card-body">
						<div class="app-brand justify-content-center">
							<a href="<?=base_url().'login'?>" class="app-brand-link gap-2">
								<img width="100%" src="<?=base_url().'Waapi/waapi.es.png'?>">
							</a>
						</div>
						<h4 class="mb-2">Welcome to WAAPI.es!</h4>
						<p class="mb-4">Please sign-in to your account and start the adventure</p>
						<form id="formAuthentication" class="mb-3" action="index.html" method="POST">
							<div class="mb-3">
								<label for="email" class="form-label">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus/>
							</div>
							<div class="mb-3 form-password-toggle">
								<div class="d-flex justify-content-between">
									<label class="form-label" for="password">Password</label>
									<a href="auth-forgot-password-basic.html">
										<small>Forgot Password?</small>
									</a>
								</div>
								<div class="input-group input-group-merge">
									<input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
									<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
								</div>
							</div>
							<div class="mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="remember-me" />
									<label class="form-check-label" for="remember-me"> Remember Me </label>
								</div>
							</div>
							<div class="mb-3">
								<button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
							</div>
							<div>
								<span>Username : admin</span><br>
								<span>Password : admin</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?=base_url().'assets/vendor/libs/jquery/jquery.js'?>"></script>
	<script src="<?=base_url().'assets/vendor/libs/popper/popper.js'?>"></script>
	<script src="<?=base_url().'assets/vendor/js/bootstrap.js'?>"></script>
	<script src="<?=base_url().'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'?>"></script>
	<script src="<?=base_url().'assets/vendor/libs/hammer/hammer.js'?>"></script>
	<script src="<?=base_url().'assets/vendor/libs/i18n/i18n.js'?>"></script>
	<script src="<?=base_url().'assets/vendor/libs/typeahead-js/typeahead.js'?>"></script>
	<script src="<?=base_url().'assets/vendor/js/menu.js'?>"></script>
	<script src="<?=base_url().'assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js'?>"></script>
	<script src="<?=base_url().'assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js'?>"></script>
	<script src="<?=base_url().'assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js'?>"></script>
	<script src="<?=base_url().'assets/js/main.js'?>"></script>
	<script src="<?=base_url().'assets/js/pages-auth.js'?>"></script>
</body>
</html>