<div class="col-sm-5" style="margin-left: auto; margin-right: auto; width: 50%">
    <div class="card">
        <div class="card-header">
            <strong>Admin</strong>
        </div>
        <div class="card-body">
            <?php if (isset($_SESSION['is_logged_in'])) : ?>
                <a class="btn btn-primary btn-sm"
                   href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
                <a class="btn btn-primary btn-sm" href="<?php echo ROOT_URL; ?>admin/logout">Logout</a>
            <?php else : ?>
                <a class="btn btn-primary btn-block" href="<?php echo ROOT_URL; ?>admin/login">Login</a>
<!--                <a class="btn btn-primary btn-block" href="--><?php //echo ROOT_URL; ?><!--admin/register">Register</a>-->
            <?php endif; ?>
        </div>
        <div class="card-header">
            <strong>Teacher</strong>
        </div>
        <div class="card-body">
            <?php if (isset($_SESSION['is_logged_in'])) : ?>
                <a class="btn btn-primary btn-sm"
                   href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
                <a class="btn btn-primary btn-sm" href="<?php echo ROOT_URL; ?>teacher/logout">Logout</a>
            <?php else : ?>
                <a class="btn btn-primary btn-block" href="<?php echo ROOT_URL; ?>teacher/login">Login</a>
                <a class="btn btn-primary btn-block" href="<?php echo ROOT_URL; ?>teacher/register">Register</a>
            <?php endif; ?>
        </div>
    </div>
</div>