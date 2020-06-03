<?php if (!isset($_SESSION['is_logged_in'])) : ?>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong>Register</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>School</label>
                            <input type="text" name="school" class="form-control"/>
                        </div>
                        <input class="btn btn-primary" name="submit" type="submit" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
<?php endif; ?>