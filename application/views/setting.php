<ol class="breadcrumb">
    <li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
    <li class="active">Manage Setting</li>

</ol>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Manage Setting</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <div id="update-profile-message"></div>
                </div>

                <div class="col-md-6">
                    <form action="<?php echo base_url('users/updateProfile') ?>" method="post" id="updateProfileForm">
                        <fieldset>
                            <legend>Manage Username</legend>
                            <div class="form-group">
                                <label for="username">Username: </label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="">
                            </div>
                            <div class="form-group">
                                <label for="fname">First Name:  </label>
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" value="">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name: </label>
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Names" value="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="">
                            </div>
                            
                        </fieldset>
                    </form>
                </div>

                <div class="col-md-6">
                    <form action="<?php echo base_url('users/changePassword') ?>" method="post" id="changePasswordForm">
                        <fieldset>
                            <legend>Change Password</legend>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>