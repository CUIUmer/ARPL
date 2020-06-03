<?php if (isset($_SESSION['is_logged_in'])) : ?>
    <?php if ($_SESSION['user_data']['teacher'] == 'teacher') : ?>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Students List</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Submitted Snap</th>
                            <th>Submitted Readings</th>
                            <th>Total Marks</th>
                            <th>Obtained Marks</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($viewmodel as $item) : ?>
                            <tr>
                                <td><?php echo $item['class_name']; ?></td>
                                <td><?php echo $item['class_code']; ?></td>
                                <td><?php echo $item['class_code']; ?></td>
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
