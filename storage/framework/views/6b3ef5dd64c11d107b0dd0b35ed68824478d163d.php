<?php $__env->startSection('title'); ?>
<title> Gallery </title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form method="post" action="/admin/gallery">
<div class="container-gallery">
    <div class="header-gallery">
        <h3> Gallery </h3>
    </div>
    <div class=" col-md-12">
        <input type="text" name="gallery_name" class="form-control" placeholder="Nama Gallery"></br>
        <textarea type="text" name="gallery_description" class="form-control" placeholder="Deskripsi Gallery"></textarea> </br>
        <input type="submit" name="simpan" value="Save" class="form-control" style="background-color : #4169a2;color : #fff;">
       <?php echo e(csrf_field()); ?>

    </div>
</div>
</form>
<div class="container-gallery">
    <div class="header-gallery">
        <h3> Gallery photo </h3>
    </div>
    <div class="col-xs-12">
        <div class="card-body table-responsive">
          <table class="datatable table table-striped " id="myTable" cellspacing="0" width="100%">
            <thead>
        <tr>
            <th>ID</th>
            <th>Gallery Name</th>
            <th>Description</th>
            <th>Photo Count</th>
            <th>Edit ||  Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $views; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($view->id_gallery); ?> </td>
        <td><?php echo e($view->name); ?></td>
        <td><?php echo e($view->description); ?></td>
        <td><?php echo e($view->singles->count()); ?></td>
        <td><a href="/admin/gallery/<?php echo e($view->id_gallery); ?>">Edit</a> <a href="/admin/gallery/delete/<?php echo e($view->id_gallery); ?>">Delete</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        </div>
      </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>