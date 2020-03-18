<?php $__env->startSection('content'); ?>






    <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">All Students</h2>
                <?php
                    $student =DB::table('student_tbl')
                              ->count('student_id')

                ?>

                <p style="font-size: 30px;font-weight: bold;font-family: cursive;text-align: center;"><?php echo e($student); ?></p>
            </div>
            <div class="dashboard-chart-card-container">
                <div id="dashboard-card-chart-1" class="card-float-chart"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">All Teachers</h2>

                <?php
                    $teacher =DB::table('teachers_tbl')
                              ->count('teachers_id')

                ?>
                <p style="font-size: 30px;font-weight: bold;font-family: cursive;text-align: center;"><?php echo e($teacher); ?></p>


            </div>
            <div class="dashboard-chart-card-container">
                <div id="dashboard-card-chart-2" class="card-float-chart"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Tution Fee</h2>
                <p style="font-size: 30px;font-weight: bold;font-family: cursive;text-align: center;">Monthly:3000 TK</p>
            </div>
            <div class="dashboard-chart-card-container">
                <div id="dashboard-card-chart-3" class="card-float-chart"></div>
            </div>
        </div>
    </div>



    <div class="col-sm-6 col-md-3 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Revenue</h2>
                <p style="font-size: 30px;font-weight: bold;font-family: cursive;text-align: center;">Not Showing</p>
            </div>
            <div class="dashboard-chart-card-container">
                <div id="dashboard-card-chart-4" class="card-float-chart"></div>
            </div>
        </div>
    </div>








<?php $__env->stopSection(); ?>


<?php echo $__env->make('s_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stuenrollment\resources\views/student/dashboard.blade.php ENDPATH**/ ?>