<?php $__env->startSection('content'); ?>
<div class="mx-auto" style="width: 800px;">
<h1>Here is the Menu</h1>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Menu</th>
      <th scope="col">Price</th>
      <th scope="col">Additional Fee for Takeout</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($item->Menu); ?></th>
      <td><?php echo e($item->Price); ?></td>
      <td><?php echo e($item->AdditionalFee); ?></td>
     
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Acer\Documents\laravel\firstproject\resources\views/list.blade.php ENDPATH**/ ?>