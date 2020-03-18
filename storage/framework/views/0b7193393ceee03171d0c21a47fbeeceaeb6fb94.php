<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <h1 class="page-title" style="color: #0000cc ; font-size:25px; font-weight: bold;">User Profile</h1>
        <div class="row user-profile">
            <div class="col-lg-12 side-left">
                <div class="card mb-4">
                    <div class="card-body avatar">
                        <h2 class="card-title">Info</h2>
                        <img src="<?php echo e($student_description_profile->student_image); ?>" alt="">
                        <p class="name"><?php echo e($student_description_profile->student_name); ?></p>
                        <p class="designation">-<?php echo e($student_description_profile->student_department); ?>-</p>
                        <a class="email" href="#"><?php echo e($student_description_profile->student_email); ?></a>
                        <a class="number" href="#"><?php echo e($student_description_profile->student_phone); ?></a>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body overview">
                        <ul class="achivements">
                         <h3 style="color: #0000cc ; font-size:25px; font-weight: bold;">Daffodil International University</h3>
                        </ul>
                        <div class="wrapper about-user">
                            <h2 class="card-title mt-4 mb-3" style="color: #0000cc ; font-size:25px; font-weight: bold;">About</h2>
                            <p>The Entire student information of this student are give below</p>
                        </div>
                        <div class="info-links">


                            <a class="website" >
                                <i class="icon-globe icon" style="font-size: 20px">Student Roll:</i>
                                <span style="font-family: 'Mongolian Baiti'; font-weight: normal;font-size: 18px;">  <?php echo e($student_description_profile->student_roll); ?> </span>
                            </a>


                            <a class="website" >
                                <i class="icon-globe icon" style="font-size: 20px">Fathers Name:</i>
                                <span style="font-family: 'Mongolian Baiti'; font-weight: normal;font-size: 18px;">  <?php echo e($student_description_profile->student_fathername); ?> </span>
                            </a>



                            <a class="website" >
                                <i class="icon-globe icon" style="font-size: 20px">Mothers Name:</i>
                                <span style="font-family: 'Mongolian Baiti'; font-weight: normal;font-size: 18px;">  <?php echo e($student_description_profile->student_mothername); ?> </span>
                            </a>



                            <a class="website" >
                                <i class="icon-globe icon" style="font-size: 20px">Address:</i>
                                <span style="font-family: 'Mongolian Baiti'; font-weight: normal;font-size: 18px;">  <?php echo e($student_description_profile->student_address); ?> </span>
                            </a>



                            <a class="website" >
                                <i class="icon-globe icon" style="font-size: 20px">Admission Date:</i>
                                <span style="font-family: 'Mongolian Baiti'; font-weight: normal;font-size: 18px;">  <?php echo e($student_description_profile->student_admissionyear); ?> </span>
                            </a>







                        </div>
                    </div>
                </div>
            </div>

    </div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stuenrollment\resources\views/admin/stview.blade.php ENDPATH**/ ?>