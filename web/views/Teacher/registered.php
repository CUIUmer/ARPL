<?php if (isset($_SESSION['is_logged_in'])) : ?>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Admin List</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($viewmodel as $item) : ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['email']; ?></td>
                            <td>
                                <form class="form-horizontal" method="post"
                                      action="<?php $_SERVER['PHP_SELF']; ?>">
                                    <input style="display: none" class="hidden" name="adminDel" type="text"
                                           value="<?php echo $item['admin_id']; ?>"/>
                                    <input class="btn btn-danger" name="sub" type="submit"
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
<?php if (!isset($_SESSION['is_logged_in'])) : ?>
    <script>
        $url = "<?php echo ROOT_URL; ?>";
        location.replace($url + 'admin/login');
    </script>
<?php endif; ?>