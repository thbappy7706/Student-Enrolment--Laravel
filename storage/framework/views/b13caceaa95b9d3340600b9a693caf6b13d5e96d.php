<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Data table</h2>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                        <tr>
                            <th>St-Roll #</th>
                            <th>St-Name</th>
                            <th>Phone</th>
                            <th>Image</th>
                            <th>Address</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $swe_Student_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <tr>



                                <td><?php echo e($key->student_roll); ?></td>
                                <td><?php echo e($key->student_name); ?></td>
                                <td><?php echo e($key->student_phone); ?></td>
                                <td> <img style="height: 45px"; width="60px" src="<?php echo e($key->student_image); ?>">    </td>


                                <td><?php echo e($key->student_address); ?></td>
                                <td><?php echo e($key->student_department); ?></td>


                                <td>



                                    <button class="btn btn-outline-primary">View</button>
                                    <button class="btn btn-outline-primary">Edit</button>
                                    <button class="btn btn-outline-primary">Delete</button>
                                </td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stuenrollment\resources\views/admin/swe.blade.php ENDPATH**/ ?>