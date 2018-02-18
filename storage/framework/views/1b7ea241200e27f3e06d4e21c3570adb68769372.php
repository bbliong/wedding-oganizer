<?php $__env->startSection('title'); ?>
<?php echo e($paket->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_text'); ?>
<h1><?php echo e($view->title_page); ?></h1>
<p><?php echo e($view->jumbotron); ?></p>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_image'); ?>
<?php echo e($paket->featured_img); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_image_text'); ?>
<div class="header">
	<h1><?php echo e($paket->name); ?></h2>
	<p><?php echo e($paket->description); ?>Harga : <?php echo e($paket->price); ?></p>
	<?php 
		$date = date_format($paket->created_at, "F d,Y");
	 ?>
	&nbsp<p class="fa-inline"><i class="fa fa-user" aria-hidden="true"></i>&nbspAdmin</p>&nbsp&nbsp&nbsp <p class="fa-inline"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp<?php echo e($date); ?></p>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('leftSide'); ?>
<div class="content">
<?php echo $paket->detail; ?>


</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSide'); ?>

<div class="col-md-10  profile">
	<div class="col-md-12 title-user">
		<p>-About Us-</p>
	</div>
	<div class="col-md-12 desc">
		<img src="/img/user.png" class="user_photo">
		<p> Nama saya aria samudera elhamidy, ya ini sih salah satu hobi saya untuk ngebuat website </p>
		<p class="fa-inline">
			<a href=""><i class="fa .fa-inline fa-facebook-square" aria-hidden="true"></i><a>&nbsp&nbsp
			<a href=""><i class="fa .fa-inline fa-twitter-square" aria-hidden="true"></i><a>
			&nbsp&nbsp
			<a href=""><i class="fa .fa-inline fa-instagram" aria-hidden="true"></i><a>
			&nbsp&nbsp
			<a href=""><i class="fa .fa-inline fa-linkedin" aria-hidden="true"></a></i>
		</p>	
	</div>
</div>

<div class="col-md-10 newslater">
	<fieldset class="border-fieldset">
		<h3> ~ Subscribe Our Team ~ </h3>
		<input type="text" class="form-control" name="email">
		<input type="submit"  class="form-control" name="submit">
	</fieldset>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.single', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>