<?php if (isset($_SESSION['is_logged_in'])) : ?>
    <?php if (isset($_SESSION['user_data']['admin'])) : ?>
        <?php if ($_SESSION['user_data']['admin'] == 'zx2cv') : ?>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Teachers List</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>School</th>
                                <th>Delete</th>
                                <th>Approve</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
//                            $user = new AdminModel();
//                            $viewmodel = $user->loadTeacher();
//                            print_r($viewmodel);
                            foreach ($viewmodel as $item) : ?>
                                <tr>
                                    <td><?php echo $item['name']; ?></td>
                                    <td><?php echo $item['email']; ?></td>
                                    <td><?php echo $item['school']; ?></td>
                                    <td>
                                        <form class="form-horizontal" method="post"
                                              action="<?php $_SERVER['PHP_SELF']; ?>">
                                            <input style="display: none" class="hidden" name="deleteT" type="text"
                                                   value="<?php echo $item['teacher_id']; ?>"/>
                                            <!--                                    <span class="fa fa-remove">-->
                                            <input class="btn btn-danger" name="submit" type="submit"
                                                   value="X"/>
                                            <!--                                        </span>-->
                                        </form>
                                    </td>
                                    <td>
                                        <form class="form-horizontal" method="post"
                                              action="<?php $_SERVER['PHP_SELF']; ?>">
                                            <input style="display: none" class="hidden" name="approveT" type="text"
                                                   value="<?php echo $item['teacher_id']; ?>"/>
                                            <!--                                    <span class="fa fa-remove">-->
                                            <input class="btn btn-success" name="submit" type="submit"
                                                   value="A"/>
                                            <!--                                        </span>-->
                                        </form>
                                    </td>


                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
<?php if (!isset($_SESSION['is_logged_in'])) : ?>
    <script>
        $url = "<?php echo ROOT_URL; ?>";
        location.replace($url + 'admin/login');
    </script>
<?php endif; ?>
