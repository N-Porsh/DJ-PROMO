<div id="SignInOrReg" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                    <ul class="nav nav-tabs text-uppercase" role="tablist">
                        <li class="active"><a href="#signin" data-toggle="tab">SIGN IN</a></li>
                        <li><a href="#registration" data-toggle="tab">REGISTRATION</a></li>
                    </ul>

                    <div class="tab-content">
                        <br>
                        <div class="tab-pane fade in active" id="signin">

                            <div class="row">
                                <div class="col-xs-6">
                                        <?php echo form_open('auth/login', 'id="user_auth"'); ?>
                                        <div class="form-group">
                                            <label class="control-label" for="name">Username</label>
                                            <?php echo form_input('username', '', 'class="form-control col-xs-12" placeholder="Your username..." id="username" maxlength="45"'); ?>

                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="log_pw">Password</label>
                                            <?php echo form_password('log_pw', '', 'class="form-control col-xs-12" placeholder="Your password..." id="log_pw" maxlength="64"'); ?>
                                        </div>
                                        <a href="#forgotpassword" data-toggle="tab" class="input-group-forgotpw small">Forgot password ?</a>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <?php
                                                $btn = array(
                                                    'name' => 'button',
                                                    'type' => 'submit',
                                                    'class'=> 'btn btn-primary',
                                                    'content' => 'Sign In'
                                                );
                                             ?>
                                            <?php echo form_button($btn); ?>
                                        </div>
                                    <?php echo form_close(); ?>
                                </div>
                                <div class="col-xs-6">
                                    <form role="form" >
                                        <div class="form-group">
                                            <label class="control-label" for="auth_fb">Facebook</label>
                                            <a id="auth_fb" class="btn btn-block btn-social btn-facebook nounderline form-control col-xs-12">
                                              <i class="fa fa-facebook"></i>
                                              Sign in with Facebook
                                            </a>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="auth_sc">SoundCloud</label>
                                            <a id="auth_sc" class="btn btn-block btn-social btn-soundcloud nounderline form-control col-xs-12">
                                              <i class="fa fa-soundcloud"></i>
                                              Sign in with SoundCloud
                                            </a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="registration">

                            <?php echo form_open('auth/create_user', 'id="reg_form"'); ?>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="reg_username">username</label>
                                        <?php echo form_input('reg_username','', 'class="form-control col-xs-12" placeholder="Your username..." maxlength="45"' ); ?>

                                    </div>
                                    <div class="form-group">
                                        <label for="reg_email">Email</label>

                                        <?php
                                        $email = array(
                                              'name'        => 'reg_email',
                                              'type'        => 'email',
                                              'id'          => 'reg_email',
                                              'value'       => '',
                                              'maxlength'   => '100',
                                              'size'        => '100',
                                              'placeholder' => 'Your e-mail address...',
                                              'class'       => 'form-control col-xs-12'
                                            );

                                        echo form_input($email);
                                          ?>
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


                                          <?php
                                                $btn = array(
                                                    'name' => 'reg_submit',
                                                    'type' => 'submit',
                                                    'class'=> 'btn btn-primary',
                                                    'content' => 'Register'
                                                );
                                             ?>
                                            <?php echo form_button($btn); ?>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label  for="reg_pw">Password</label>
                                        <?php echo form_password('reg_pw','', 'class="form-control col-xs-12" placeholder="Your password..." maxlength="45" id="reg_pw"' ); ?>

                                    </div>
                                    <div class="form-group">
                                        <label for="reg_pw2">Password again</label>
                                        <?php echo form_password('reg_pw2','', 'class="form-control col-xs-12" placeholder="Password again..." maxlength="64"' ); ?>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>

                        <div class="tab-pane" id="forgotpassword">
                            <form role="form" id="auth_restore">

                                <div class="form-group">
                                    <div class="input-group">
                                        <label  for="email_restore">Forgot password ?</label>
                                        <input type="email" class="form-control" placeholder="Your e-mail address" maxlength="65" required>
                                    </div>
                                    <a href="#signin" data-toggle="tab" class="input-group-forgotpw small">Back</a>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Restore password</button>
                                </div>
                            </form>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>