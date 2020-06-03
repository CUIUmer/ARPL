<?php if (isset($_SESSION['is_logged_in'])) : ?>
    <?php if ($_SESSION['user_data']['teacher'] == 'teacher') : ?>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Add Classroom</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Code</label>
                            <input type="text" name="code" class="form-control"/>
                        </div>
                        <input class="btn btn-primary" name="submit" type="submit" value="Submit"/>
                    </form>
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
