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
                <form class="form" role="form" method="post" action="<?php echo URLROOT.'/users/register';?>">
                    <div class="form-group">
                        <label for="name">Name<sup>*</sup></label>
                        <input type="text" placeholder="Full name" name="name" class="form-control
                        <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '';?>"
                               value="<?php echo $data['name'];?>" id="name">
                    <span class="invalid-feedback">
                        <?php echo $data['name_err'];?></span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email<sup>*</sup></label>
                        <input type="text" placeholder="Email"
                               name="email" class="form-control
                               <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>"
                               id="email"
                               value="<?php echo $data['email'];?>">
                        <span class="invalid-feedback">
                        <?php echo $data['email_err'];?></span>
                    </div>


                    <div class="form-group">
                        <label for="password">Password<sup>*</sup></label>
                        <input type="password" placeholder="Password" name="password"
                               class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>" id="password">
                        <span class="invalid-feedback">
                        <?php echo $data['password_err'];?></span>
                    </div>



                    <div class="form-group">
                        <label for="confirm_password">Confirm password<sup>*</sup></label>
                        <input type="password" placeholder="Confirm password" name="confirm_password"
                               class="form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : '';?>" id="confirm_password">
                        <span class="invalid-feedback">
                        <?php echo $data['confirm_password_err'];?></span>
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

