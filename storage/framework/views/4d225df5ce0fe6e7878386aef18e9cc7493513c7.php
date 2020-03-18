<?php $__env->startSection('content'); ?>


    <div class="col-12 col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Data table</h2>

                <p class="alert-success">
                    <?php
                    $exception = Session::get('exception');
                    if($exception)
                    {
                        echo $exception;
                        Session::put ('exception',null);

                    }



                    ?>




                </p>




                <div class="row">

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

                            <?php $__currentLoopData = $all_Student_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <tr>
                                <td><?php echo e($key->student_roll); ?></td>
                                <td><?php echo e($key->student_name); ?></td>
                                <td><?php echo e($key->student_phone); ?></td>
                               
                                <td>
                                    <img src= "images/h.png"  alt="photo" height="45px"; width="60px"; style="border-radius: 50%">

                                </td>

                                <td><?php echo e($key->student_address); ?></td>
                                <td><?php echo e($key->student_department); ?></td>
                                <td>



                                 <a href="<?php echo e(URL::to('/studentview/'.$key->student_id)); ?>">  <button class="btn btn-outline-primary">View</button>  </a>

                                  <a href="<?php echo e(URL::to('/studentedit/'.$key->student_id)); ?>">   <button class="btn btn-outline-primary">Edit</button></a>




                                  <a href="<?php echo e(URL::to('/student_dlt/'.$key->student_id)); ?>"   id ="delete">  <button class="btn btn-outline-primary">Delete</button>  </a>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stuenrollment\resources\views/admin/allstudent.blade.php ENDPATH**/ ?>