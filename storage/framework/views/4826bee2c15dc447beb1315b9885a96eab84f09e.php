
<?php $__env->startSection('css'); ?>
<!---Internal  Owl Carousel css-->
<link href="<?php echo e(URL::asset('assets/plugins/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet">
<!--- Internal Sweet-Alert css-->
<link href="<?php echo e(URL::asset('assets/plugins/sweet-alert/sweetalert.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
	</head>
<?php $__env->startSection('page-header'); ?>

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Sweet-Alerts</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<div class="container-fluid">
				<!-- row opened -->
				<div class="row row-deck">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Basic Sweet-alert</h3>
							</div>
							<div class="card-body pt-0">
								<table class="table card-table border">
									<tr>
										<td>Title</td>
										<td><input type='text' class="form-control" placeholder='Title text' id='title'></td>
									</tr>
									<tr>
										<td>Message</td>
										<td><input type='text' class="form-control" placeholder='Your message' id='message'></td>
									</tr>
									<tr>
										<td colspan='2' class="mt-5 text-center">
											<input type='button' class="btn btn-primary mt-2" value='Simple alert' id='but1'>&nbsp;
											<input type='button' class="btn btn-danger mt-2" value='Alert with title' id='but2'>&nbsp;
											<input type='button' class="btn btn-info mt-2" value='Alert with image' id='but3'>&nbsp;
											<input type='button' class="btn btn-warning mt-2" value='With timer' id='but4'>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div><!-- col end -->
				</div><!-- col end -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Alert</h6>
									<p class="text-muted card-sub-title">A Basic Message</p>
								</div>
								<div class="btn ripple btn-primary-gradient" id='swal-basic'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Title alert</h6>
									<p class="text-muted card-sub-title">A title with a text under</p>
								</div>
								<div class="btn ripple btn-danger-gradient" id='swal-title'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Success alert</h6>
									<p class="text-muted card-sub-title">A Success Message</p>
								</div>
								<div class="btn ripple btn-success-gradient" id='swal-success'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Warning alert</h6>
									<p class="text-muted card-sub-title">A warning message</p>
								</div>
								<div class="btn ripple btn-warning-gradient" id='swal-warning'>
									Click me !
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Passing a parameter alert</h6>
									<p class="text-muted card-sub-title">By passing a parameter</p>
								</div>
								<div class="btn ripple btn-purple-gradient" id='swal-parameter'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Image alert</h6>
									<p class="text-muted card-sub-title">A message with custom Image</p>
								</div>
								<div class="btn ripple btn-pink-gradient" id='swal-image'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Timer alert</h6>
									<p class="text-muted card-sub-title">A message with auto close timer</p>
								</div>
								<div class="btn ripple btn-dark-gradient" id='swal-timer'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Ajax Alert</h6>
									<p class="text-muted card-sub-title">With a loader (for a AJAX requests)</p>
								</div>
								<div class="btn ripple btn-info-gradient" id='swal-ajax'>
									Click me !
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

<?php $__env->startSection('js'); ?>
<!--Internal  Datepicker js -->
<script src="<?php echo e(URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')); ?>"></script>
<!-- Internal Select2 js-->
<script src="<?php echo e(URL::asset('assets/plugins/select2/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/rating/ratings.js')); ?>"></script>
<!--Internal  Sweet-Alert js-->
<script src="<?php echo e(URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/sweet-alert/jquery.sweet-alert.js')); ?>"></script>
<!-- Sweet-alert js  -->
<script src="<?php echo e(URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/sweet-alert.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\user\Desktop\mora\resources\views/sweet-alert.blade.php ENDPATH**/ ?>