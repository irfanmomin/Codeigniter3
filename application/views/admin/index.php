<?php

if(!$this->session->userdata('login_uname') && !$this->session->userdata('login_pwd'))
{ ?>
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Login Here</h3>
            </div>
            <div style="padding:18px"><?php
                $attributes = array('id' => 'login_form', 'role' => 'form', 'data-toggle' => 'validator');
                 echo form_open( 'admin/index', $attributes); ?>
                <!-- <form action="1212.php" method="POST" role="form" data-toggle="validator"> -->
                    <div class="form-group">
                        <label for="inputUname" class="control-label">User name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </div>
                            <input id="inputUname" placeholder="Enter Your username" class="un-box form-control" type="text" name="login_uname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPwd" class="control-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span> </div>
                            <input id="inputPwd" placeholder="Enter Password" class="pwd-box form-control" type="password" name="login_pwd" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn_login" class="btn btn-success btn_to_login" value="Login">
                        <?php //$segments = array( 'signup');
                                //echo anchor( 'signup', 'sign Up'); ?>
                       <!--  <input type="button" name="go_signup" class="go-signup btn btn-primary" value="SignUp Here"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
