<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin Login</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"/>
                        </div>
                        <input class="btn btn-primary" name="submit" type="submit" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>