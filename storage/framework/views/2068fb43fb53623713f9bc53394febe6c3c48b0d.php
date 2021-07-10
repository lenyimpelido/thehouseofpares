<?php $__env->startSection('content'); ?>
<h1>Add Menu</h1>
<div class="mx-auto" style="width: 800px;">
<form method ="post" action="">
<?php echo csrf_field(); ?>
  <div class="form-group">
    <label>Menu</label>
    <input type="text" name="Menu" class="form-control" placeholder="Enter menu">
  </div>

  <div class="form-group">
    <label>Price</label>
    <input type="text" name="Price" class="form-control" placeholder="Enter price">
  </div>
  <div class="form-group">
    <label>Additional Fee for Take Out</label>
    <input type="text" name="AdditionalFee" class="form-control" placeholder="Enter additional fee">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Acer\Documents\laravel\firstproject\resources\views/add.blade.php ENDPATH**/ ?>