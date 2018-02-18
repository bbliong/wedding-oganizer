<?php $__env->startSection('title'); ?>
<title> Paket Admin </title>
<link rel="stylesheet" href="/plugins/Croppie-master/croppie.css" />
<script src="/plugins/Croppie-master/croppie.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form method="post" action="/admin/paket/update/<?php echo e($view->id_package); ?>" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<input type="hidden" name="_method" value="PUT">
<div class="container-gallery">
	<div class="header-gallery">
		<h3> Paket </h3>
	</div>
	<div class="body-right-gallery col-md-6">
		<input type="text" name="package_name" class="form-control" placeholder="Nama Paket" value="<?php echo e($view->name); ?>"></br>
		<input type="text" name="package_description" class="form-control" placeholder="Deskirpsi" value="<?php echo e($view->description); ?>"></br>
		<textarea type="text" name="package_price" class="form-control" placeholder="Range Harga" ><?php echo e($view->price); ?></textarea> </br>
		<input type="submit" name="simpan" value="Save" class="form-control" style="background-color : #4169a2;color : #fff;">
	</div>
	<div class="body-left-gallery col-md-6">
		<div class="tooltips">
			<span class="tooltiptext">High resolution Please</span>
			<p> Feature Image</p></br>
		  	<input name="package_img" onchange="preview_image_logo()" id="preview_image" type="file">
			<div id="image_preview" class="img_preview_paket"><img src="/uploads/<?php echo e($view->featured_img); ?>"></div>
		</div>
	</div>
	<div class="col-lg-12">
        <textarea id="mytextarea" name="package_detail"><?php echo e($view->detail); ?></textarea>
  	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_tambah'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>