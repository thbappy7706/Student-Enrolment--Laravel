<?php $__env->startSection('content'); ?>

    <div class="col-12 col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"></h2>
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






                <div class="col-12 col-lg-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"><strong>UPDATE STUDENT INFORMATION</strong></h2>
                            <br>
                            <form class="forms-sample"  method="post" action="<?php echo e(URL::to('/update_student',$student_description_profile->student_id)); ?>" enctype="multipart/form-data" >

                                <?php echo e(csrf_field()); ?>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Student Name</label>
                                    <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value ="<?php echo e($student_description_profile->student_name); ?>">

                                </div>



                                <div class="form-group">
                                    <label for="exampleInputPassword1">Student Roll</label>
                                    <input type="text" class="form-control p-input" name="student_roll" value ="<?php echo e($student_description_profile->student_roll); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Student Father's Name</label>
                                    <input type="text" class="form-control p-input" name="student_fathername" value ="<?php echo e($student_description_profile->student_fathername); ?>">


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Student Mothers Name</label>
                                    <input type="text" class="form-control p-input" name="student_mothername"  value ="<?php echo e($student_description_profile->student_mothername); ?>" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Student Email</label>
                                    <input type="email" class="form-control p-input" name="student_email" value ="<?php echo e($student_description_profile->student_email); ?>" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Student Phone</label>
                                    <input type="text" class="form-control p-input" name="student_phone"  value ="<?php echo e($student_description_profile->student_phone); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Student Address</label>
                                    <input type="text" class="form-control p-input"  name="student_address"   value ="<?php echo e($student_description_profile->student_address); ?>">
                                </div>








                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Student Password</label>
                                        <input type="password" class="form-control p-input"  name="student_password"  value ="<?php echo e($student_description_profile->student_password); ?>">
                                    </div>





                                <div class="form-group">
                                    <label for="exampleInputPassword1">Admission Year</label>
                                    <input type="date" class="form-control p-input"  name="student_admissionyear" id="calendar" value ="<?php echo e($student_description_profile->student_admissionyear); ?>">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Student Department</label>
                                    <select class="form-control p-input" name="student_department" value ="<?php echo e($student_description_profile->student_department); ?>">
                                        <option value="CSE">CSE</option>
                                        <option value="EEE">EEE</option>
                                        <option value="PHARMACY">PHARMACY</option>
                                        <option value="BBA">BBA</option>
                                        <option value="SWE">SWE</option>


                                    </select>
                                </div>





                                <button type="submit" class="btn btn-success btn-block">Update</button>
                           </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stuenrollment\resources\views/admin/stedit.blade.php ENDPATH**/ ?>