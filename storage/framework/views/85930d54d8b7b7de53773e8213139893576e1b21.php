<?php $__env->startSection('content'); ?>

    <div class="col-12 col-lg-12 grid-margin">
        <div class="card">
        <div class="card-body">
        <h2 class="card-title">Add Student</h2>
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
                <h2 class="card-title"><strong>ADD STUDENT INFORMATION</strong></h2>
                <form class="forms-sample"  method="post" action="<?php echo e(URL::to('/save_student')); ?>" enctype="multipart/form-data" >

                    <?php echo e(csrf_field()); ?>



                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter Student Name">

                    </div>



                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Roll</label>
                        <input type="text" class="form-control p-input" name="student_roll" placeholder="Enter Student Roll">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Father's Name</label>
                        <input type="text" class="form-control p-input" name="student_fathername" placeholder="Enter Student Fathers Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Mothers Name</label>
                        <input type="text" class="form-control p-input" name="student_mothername" placeholder="Enter Student Mothers Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Email</label>
                        <input type="email" class="form-control p-input" name="student_email" placeholder="Enter Student Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Phone</label>
                        <input type="text" class="form-control p-input" name="student_phone" placeholder="Enter Student Phone">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Address</label>
                        <input type="text" class="form-control p-input"  name="student_address" placeholder="Enter Student Address">
                    </div>



                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Password</label>
                        <input type="password" class="form-control p-input"  name="student_password" placeholder="Enter Student Password">
                    </div>






                    <div class="form-group">
                        <label>Upload file</label>
                        <div class="row">
                            <div class="col-12">
                                <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                <input type="file" class="form-control"  name="student_image"  id="exampleInputFile2" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Admission Year</label>
                        <input type="date" class="form-control p-input"  name="student_admissionyear" id="calendar" placeholder="Enter Admission Year">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Department</label>
                        <select class="form-control p-input" name="student_department">
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="PHARMACY">PHARMACY</option>
                            <option value="BBA">BBA</option>
                            <option value="SWE">SWE</option>


                        </select>
                    </div>





                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>

        </div>


        </div>

    </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stuenrollment\resources\views/admin/addstudent.blade.php ENDPATH**/ ?>