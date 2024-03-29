<?php 
	define('BASE_URL', 'http://localhost:80/lms_new/'); 
?>

<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../">

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Land Management System | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="<?php echo BASE_URL ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="<?php echo BASE_URL ?>assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="<?php echo BASE_URL ?>assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/owl.carousel/distassets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/owl.carousel/distassets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo BASE_URL ?>assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?php echo BASE_URL ?>assets/css/demo6/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?php echo BASE_URL ?>assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="demo6/index.html">
					<img alt="Logo" src="<?php echo BASE_URL ?>assets/media/logos/logo-6-sm.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<div class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></div>
				<!-- <div class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></div> -->
				<div class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></div>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
					<!-- begin:: Aside Menu -->

							<?php include('leftmenu.php'); ?>

					<!-- end:: Aside Menu -->
				</div>

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">

						<!-- begin:: Aside -->
						<div class="kt-header__brand kt-grid__item  " id="kt_header_brand">
							<div class="kt-header__brand-logo">
								<a href="demo6/index.html">
									<img alt="Logo" src="<?php echo BASE_URL ?>assets/media/logos/logo-6.png" />
								</a>
							</div>
						</div>

						<!-- end:: Aside -->

						<!-- begin:: Title -->
						<h3 class="kt-header__title kt-grid__item">
							Land Management System
						</h3>

						<!-- end:: Title -->

					<!-- begin:: Header Topbar -->
					<div class="kt-header__topbar">

<!--begin: Search -->
<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
	<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
		<span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
	</div>
	<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
		<div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
			<form method="get" class="kt-quick-search__form">
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
					<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
					<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
				</div>
			</form>
			<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
			</div>
		</div>
	</div>
</div>

<!--end: Search -->

<!--begin: Notifications -->
<div class="kt-header__topbar-item dropdown">
	<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
		<span class="kt-header__topbar-icon kt-header__topbar-icon--success"><i class="flaticon2-bell-alarm-symbol"></i></span>
		<span class="kt-hidden kt-badge kt-badge--danger"></span>
	</div>
	<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
		<form>

			<!--begin: Head -->
			<div class="kt-head kt-head--skin-dark kt-head--fit-x kt-head--fit-b" style="background-image: url(<?php echo BASE_URL ?>assets/media/misc/bg-1.jpg)">
				<h3 class="kt-head__title">
					User Notifications
					&nbsp;
					<span class="btn btn-success btn-sm btn-bold btn-font-md">23 new</span>
				</h3>
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-success kt-notification-item-padding-x" role="tablist">
					<li class="nav-item">
						<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
					</li>
				</ul>
			</div>

			<!--end: Head -->
			<div class="tab-content">
				<div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
					<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-line-chart kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New order has been received
								</div>
								<div class="kt-notification__item-time">
									2 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-box-1 kt-font-brand"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer is registered
								</div>
								<div class="kt-notification__item-time">
									3 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-chart2 kt-font-danger"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									Application has been approved
								</div>
								<div class="kt-notification__item-time">
									3 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-image-file kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New file has been uploaded
								</div>
								<div class="kt-notification__item-time">
									5 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon-security kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer comment recieved
								</div>
								<div class="kt-notification__item-time">
									2 days ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-pie-chart kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer is registered
								</div>
								<div class="kt-notification__item-time">
									3 days ago
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
					<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-psd kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New report has been received
								</div>
								<div class="kt-notification__item-time">
									23 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon-download-1 kt-font-danger"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									Finance report has been generated
								</div>
								<div class="kt-notification__item-time">
									25 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-line-chart kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New order has been received
								</div>
								<div class="kt-notification__item-time">
									2 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-box-1 kt-font-brand"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer is registered
								</div>
								<div class="kt-notification__item-time">
									3 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-chart2 kt-font-danger"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									Application has been approved
								</div>
								<div class="kt-notification__item-time">
									3 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-image-file kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New file has been uploaded
								</div>
								<div class="kt-notification__item-time">
									5 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-bar-chart kt-font-info"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New user feedback received
								</div>
								<div class="kt-notification__item-time">
									8 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-pie-chart-2 kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									System reboot has been successfully completed
								</div>
								<div class="kt-notification__item-time">
									12 hrs ago
								</div>
							</div>
						</a>
		
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-psd kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New report has been received
								</div>
								<div class="kt-notification__item-time">
									23 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon-download-1 kt-font-danger"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									Finance report has been generated
								</div>
								<div class="kt-notification__item-time">
									25 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon-security kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer comment recieved
								</div>
								<div class="kt-notification__item-time">
									2 days ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-pie-chart kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer is registered
								</div>
								<div class="kt-notification__item-time">
									3 days ago
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
					<div class="kt-grid kt-grid--ver" style="min-height: 200px;">
						<div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
							<div class="kt-grid__item kt-grid__item--middle kt-align-center">
								All caught up!
								<br>No new notifications.
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<!--end: Notifications -->

<!--begin: User bar -->
<div class="kt-header__topbar-item kt-header__topbar-item--user">
	<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
		<span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
		<span class="kt-hidden kt-header__topbar-username">Nick</span>
		<img class="kt-hidden" alt="Pic" src="<?php echo BASE_URL ?>assets/media/users/300_21.jpg" />
		<span class="kt-header__topbar-icon kt-hidden-"><i class="flaticon2-user-outline-symbol"></i></span>
	</div>
	<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

		<!--begin: Head -->
		<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?php echo BASE_URL ?>assets/media/misc/bg-1.jpg)">
			<div class="kt-user-card__avatar">
				<img class="kt-hidden" alt="Pic" src="<?php echo BASE_URL ?>assets/media/users/300_25.jpg" />

				<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
				<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
			</div>
			<div class="kt-user-card__name">
				Sean Stone
			</div>
			<div class="kt-user-card__badge">
				<span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
			</div>
		</div>

		<!--end: Head -->

		<!--begin: Navigation -->
		<div class="kt-notification">
			<a href="#" class="kt-notification__item">
				<div class="kt-notification__item-icon">
					<i class="flaticon2-calendar-3 kt-font-success"></i>
				</div>
				<div class="kt-notification__item-details">
					<div class="kt-notification__item-title kt-font-bold">
						My Profile
					</div>
					<div class="kt-notification__item-time">
						Account settings and more
					</div>
				</div>
			</a>
			<a href="#" class="kt-notification__item">
				<div class="kt-notification__item-icon">
					<i class="flaticon2-mail kt-font-warning"></i>
				</div>
				<div class="kt-notification__item-details">
					<div class="kt-notification__item-title kt-font-bold">
						My Messages
					</div>
					<div class="kt-notification__item-time">
						Inbox and tasks
					</div>
				</div>
			</a>
			<a href="#" class="kt-notification__item">
				<div class="kt-notification__item-icon">
					<i class="flaticon2-rocket-1 kt-font-danger"></i>
				</div>
				<div class="kt-notification__item-details">
					<div class="kt-notification__item-title kt-font-bold">
						My Activities
					</div>
					<div class="kt-notification__item-time">
						Logs and notifications
					</div>
				</div>
			</a>
			<a href="#" class="kt-notification__item">
				<div class="kt-notification__item-icon">
					<i class="flaticon2-hourglass kt-font-brand"></i>
				</div>
				<div class="kt-notification__item-details">
					<div class="kt-notification__item-title kt-font-bold">
						My Tasks
					</div>
					<div class="kt-notification__item-time">
						latest tasks and projects
					</div>
				</div>
			</a>
			<a href="#" class="kt-notification__item">
				<div class="kt-notification__item-icon">
					<i class="flaticon2-cardiogram kt-font-warning"></i>
				</div>
				<div class="kt-notification__item-details">
					<div class="kt-notification__item-title kt-font-bold">
						Billing
					</div>
					<div class="kt-notification__item-time">
						billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
					</div>
				</div>
			</a>
			<div class="kt-notification__custom kt-space-between">
				<a href="demo6/custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
				<a href="demo6/custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
			</div>
		</div>

		<!--end: Navigation -->
	</div>
</div>

<!--end: User bar -->

</div>

<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					
					
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-container p-5" id="current_area">
					
							<?php include('dashboard.php'); ?>

					</div>


					<!-- begin:: Footer -->
					<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								<?php echo date('Y');?>&nbsp;&copy;&nbsp;<a href="" target="_blank" class="kt-link">Gasland Info Systems</a>
							</div>
							<div class="kt-footer__menu">
								<a href="" target="_blank" class="kt-footer__menu-link kt-link">Vist Our Site</a>
								<a href="" target="_blank" class="kt-footer__menu-link kt-link">About Us</a>
								<a href="" target="_blank" class="kt-footer__menu-link kt-link">Contact Us</a>
							</div>
						</div>
					</div>





					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#22b9ff",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="<?php echo BASE_URL ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="<?php echo BASE_URL ?>assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/js/demo1/pages/crud/forms/widgets/input-mask.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/js/leftmenu.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/js/all_script.js" type="text/javascript"></script>
		<script src="../assets/js/demo1/pages/components/portlets/tools.js" type="text/javascript"></script>



		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php echo BASE_URL ?>assets/js/demo6/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="<?php echo BASE_URL ?>assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<?php echo BASE_URL ?>assets/js/demo6/pages/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
		<script type="text/javascript">
		function CopyMe(oFileInput, sTargetID){
			document.getElementById(sTargetID).value= oFileInput.value;
		}
		</script>
	
	</body>

	<!-- end::Body -->
</html>