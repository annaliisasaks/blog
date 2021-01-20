<?php require_once  APPROOT.'/views/inc/header.php';?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <!-- form register-->
        <div class="card card-outline-secondary mt-5">
            <div class="card-header">
                <h5 class="mb-8">Sign up</h5>
                <p class="mt-2">Please fill the fields below to register</p>
            </div>
            <div class="card-body">
                <form class="form" role="form" method="post" action="<?php echo URLROOT.'/users/register'?>">
                    <div class="form-group">
                        <label for="name">Name<sup>*</sup></label>
                        <input type="text" placeholder="Full name" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email<sup>*</sup></label>
                        <input type="text" placeholder="Email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password<sup>*</sup></label>
                        <input type="password" placeholder="Password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm password<sup>*</sup></label>
                        <input type="password" placeholder="Confirm password" name="confirm_password" class="form-control" id="confirm_password">
                    </div>
                    <div class="form-group">
                    <button class="btn btn-success btn-lg float-right" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once  APPROOT.'/views/inc/footer.php'; ?>

