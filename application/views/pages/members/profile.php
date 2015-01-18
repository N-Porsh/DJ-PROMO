<article>
    <header>
        <h2>My Profile</h2>
        <p>Add / Edit your personal data</p>
    </header>

        <!-- Nav tabs -->
    <ul class="nav nav-tabs text-uppercase" role="tablist">
      <li class="active"><a href="#data" role="tab" data-toggle="tab">Current Data</a></li>
      <li><a href="#edit_data" role="tab" data-toggle="tab">Edit Data</a></li>
      <li><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" id="profile_data">
    <br>
      <div class="tab-pane fade in active" id="data">
        <form class="form-horizontal" >

            <div class="form-group">
                <label class="control-label col-xs-4">Name</label>
                <div class="col-xs-7">
                    <p class="form-control-static"><?php echo $user_data['name'] ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-4">Surname</label>
                <div class="col-xs-7">
                    <p class="form-control-static"><?php echo $user_data['surname'] ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-4">E-Mail</label>
                <div class="col-xs-7">
                    <p class="form-control-static"><?php echo $user_data['email'] ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-4">Pseudonym</label>
                <div class="col-xs-7">
                    <p class="form-control-static"><?php echo $user_data['pseudonym'] ?> </p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-4">Country</label>
                <div class="col-xs-7">
                    <p class="form-control-static"><?php echo $user_data['country'] ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-4">Phone Nr.</label>
                <div class="col-xs-7">
                    <p class="form-control-static"><?php echo $user_data['phone'] ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-4">Favorite music genre</label>
                <div class="col-xs-7">
                    <p class="form-control-static"><?php echo $user_data['fav_music_genre'] ?></p>
                </div>
            </div>

        </form>

      </div>
      <div class="tab-pane fade" id="edit_data">

            <?php echo form_open('members/profile/edit_user', 'class="form-horizontal" id="usr_edit"'); ?>
            <div class="form-group">
                <label for="usr_name" class="control-label col-xs-4">Name</label>
                <div class="col-xs-7">
                    <?php echo form_input('usr_name',  $user_data['name'], 'class="form-control" id="usr_name" placeholder="Your name..."'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="usr_surname" class="control-label col-xs-4">Surname</label>
                <div class="col-xs-7">
                    <?php echo form_input('usr_surname',  $user_data['surname'], 'class="form-control" id="usr_surname" placeholder="Your surname..."'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="usr_email" class="control-label col-xs-4">E-Mail</label>
                <div class="col-xs-7">
                    <?php
                    $email = array(
                          'name'        => 'usr_email',
                          'type'        => 'email',
                          'id'          => 'usr_email',
                          'value'       => $user_data['email'],
                          'maxlength'   => '100',
                          'size'        => '50',
                          'placeholder' => 'Your e-mail...',
                          'class'       => 'form-control'
                        );

                    echo form_input($email);
                     ?>

                </div>
            </div>
            <div class="form-group">
                <label for="usr_pseudo" class="control-label col-xs-4">Pseudonym</label>
                <div class="col-xs-7">
                    <?php echo form_input('usr_pseudo',  $user_data['pseudonym'], 'class="form-control" id="usr_pseudo" placeholder="Your pseudonym..."'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="usr_country" class="control-label col-xs-4">Country</label>
                <div class="col-xs-7">

                    <?php
                    //TODO REPLACE WITH DB/TEXT OPTIONS
                    $countries = array(
                              '' => 'Your country...',
                              'Estonia' => 'Estonia',
                              'Finland' => 'Finland',
                              'Sweden' => 'Sweden',
                              'Russia' => 'Russia',
                    );

                    $shirts_on_sale = array('small', 'large');

                    echo form_dropdown('usr_country', $countries, $user_data['country'], 'class="form-control" id="usr_country"');
                     ?>

                </div>
            </div>
            <div class="form-group">
                <label for="usr_phone" class="control-label col-xs-4">Phone Nr.</label>
                <div class="col-xs-7">
                    <?php echo form_input('usr_phone',  $user_data['phone'], 'class="form-control" id="usr_phone" placeholder="Your phone Nr..."'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="usr_fav_mus_genre" class="control-label col-xs-4">Favorite music genre</label>
                <div class="col-xs-7">
                    <?php echo form_input('usr_fav_mus_genre',  $user_data['fav_music_genre'], 'class="form-control" id="usr_fav_mus_genre" placeholder="Your favorite music genre..."'); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-offset-4 col-xs-4">
                    <button type="submit" class="btn btn-primary">Save / Update</button>
                </div>
            </div>
        <?php echo form_close(); ?>
      </div>
      <div class="tab-pane fade" id="settings">
         <header>
         <p>Change password:</p>
         </header><!-- /header -->
            <?php echo form_open('auth/change_password', 'class="form-horizontal" id="usr_pw_change"'); ?>

            <div class="form-group">
                <label for="old_password" class="control-label col-xs-4">Current Password</label>
                <div class="col-xs-7">
                    <?php echo form_password('old_password', '', 'class="form-control" id="old_password" placeholder="Your current password..."'); ?>
                </div>
                <div class="col-xs-11">
                   <a href="#" class="col-xs-offset-5 small toolt" data-toggle="tooltip" data-placement="right" title="Click here to send new password on your E-mail address">Forgot password?</a>
                </div>
            </div>
            <div class="form-group">
                <label for="new_password" class="control-label col-xs-4">New Password</label>
                <div class="col-xs-7">
                    <?php echo form_password('new_password', '', 'class="form-control" id="new_password" placeholder="New password..."'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="new_password_confirm" class="control-label col-xs-4">New Password Confirm</label>
                <div class="col-xs-7">
                    <?php echo form_password('new_password_confirm', '', 'class="form-control" id="new_password_confirm" placeholder="New password confirm..."'); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-offset-4 col-xs-4">
                    <button type="submit" class="btn btn-primary">Change password</button>
                </div>
            </div>
        <?php echo form_close(); ?>
         <header>
         <p>Other settings:</p>
         </header><!-- /header -->
         <form class="form-horizontal" >
            <div class="form-group">
                <label for="usr_newpw_2" class="control-label col-xs-4">Account status</label>
                <div class="col-xs-7">
                    <button type="submit" class="btn btn-primary">Active</button>
                </div>
            </div>


        </form>
      </div>
    </div>

</article>