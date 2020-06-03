<?php if (isset($_SESSION['is_logged_in'])) : ?>
    <?php if ($_SESSION['user_data']['teacher'] == 'teacher') : ?>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Classroom List</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($viewmodel as $item) : ?>
                            <tr>
                                <td><?php echo $item['class_name']; ?></td>
                                <td><?php echo $item['class_code']; ?></td>
                                <td>
                                    <form class="form-horizontal" method="post"
                                          action="<?php $_SERVER['PHP_SELF']; ?>">
                                        <input style="display: none" class="hidden" name="deleteC" type="text"
                                               value="<?php echo $item['class_code']; ?>"/>
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
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php if (!isset($_SESSION['is_logged_in'])) : ?>
    <script>
        $url = "<?php echo ROOT_URL; ?>";
        location.replace($url + 'admin/login');
    </script>
<?php endif; ?>
