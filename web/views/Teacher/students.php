<?php if (isset($_SESSION['is_logged_in'])) : ?>
    <?php if ($_SESSION['user_data']['teacher'] == 'teacher') : ?>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Classrooms</strong>
                </div>
                <div class="card-body">
                    <?php
                    foreach ($viewmodel as $item) : ?>
                        <form class="form-horizontal" method="post"
                              action="<?php $_SERVER['PHP_SELF']; ?>">
                            <input style="display: none" class="hidden" name="classCode" type="text"
                                   value="<?php echo $item['class_code']; ?>"/>
                            <input class="btn btn-primary" name="submit" type="submit"
                                   value="<?php echo $item['class_name']; ?>"/>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>

            <!--            Student List     -->
            <?php

            $model = new TeacherModel();
            $studentList = $model->returnStudent();

            if ($studentList != false) : ?>

                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Student List for Class
                            Code: <?php echo($studentList[0]['class_code']); ?></strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Roll Number</th>
                                <th>Student Name</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            foreach ($studentList as $student) : ?>
                                <tr>
                                    <td><?php echo $student['roll_no']; ?></td>
                                    <td><?php echo $student['name']; ?></td>
                                    <td>
                                        <form class="form-horizontal" method="post"
                                              action="<?php $_SERVER['PHP_SELF']; ?>">
                                            <input style="display: none" class="hidden" name="deleteS" type="text"
                                                   value="<?php echo $student['student_id']; ?>"/>
                                            <input class="btn btn-danger" name="submit" type="submit"
                                                   value="X"/>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            <?php endif; ?>

        </div>
    <?php endif; ?>
<?php endif; ?>
<?php if (!isset($_SESSION['is_logged_in'])) : ?>
    <script>
        $url = "<?php echo ROOT_URL; ?>";
        location.replace($url + 'admin/login');
    </script>
<?php endif; ?>
