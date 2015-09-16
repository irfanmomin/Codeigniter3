<div class="main col-sm-6">
    <?php echo validation_errors('<p class="error">'); ?>
    <?php
    $attributes = array('id' => 'signup_form', 'role' => 'form', 'data-toggle' => 'validator');
    echo form_open( 'discovery/signup', $attributes); ?>
        <div class="form-group">
            <label for="inputName" class="control-label">Name</label>
            <input placeholder="Enter Your Name" id="inputName" class="name-box form-control" type="text" name="name" value="<?php echo set_value('name'); ?>" required>
        </div>
        <div class="form-group">
            <span class="glyphicon glyphicon-user"></span><label for="inputUname" class="control-label">User name</label>
            <input id="inputUname" placeholder="Enter Your username" class="un-box form-control" type="text" name="usrname" value="<?php echo set_value('usrname'); ?>" required>
        </div>
        <div class="form-group">
            <label for="inputPwd" class="control-label">Password</label>
            <input id="inputPwd" data-minlength="6" placeholder="Enter Password" class="pwd-box form-control" type="password" name="pwd" required>
            <span class="help-block">Minimum of 6 characters</span>

        </div>
        <div class="form-group">
            <label for="inputPwd1" class="control-label">Re-type Password</label>
            <input id="inputPwd1" data-minlength="6" placeholder="Re-type password" class="pwd1-box form-control" type="password" name="pwd1" required>
        </div>
        <div class="form-group">
           <label for="inputEmail" class="control-label">E-mail</label>
            <input id="inputEmail" placeholder="Enter Your Email address" class="un-box form-control" type="email" name="email" value="<?php echo set_value('email'); ?>"  data-error="Bruh, that email address is invalid" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="inputMobile" class="control-label">Mobile</label>
            <input id="inputMobile" data-minlength="10" placeholder="Enter Your Mobile Number" class="un-box form-control" value="<?php echo set_value('mobile'); ?>" type="text" name="mobile" />
            <span class="help-block">Minimum of 10 numbers</span>
        </div>
       <!--  <div class="form-group">
           <label for="inputCountry" class="control-label">Country</label>
           <div id="countries_states2" class="bfh-selectbox bfh-countries" data-name="country" data-country="US"></div>
       </div>
       <div class="form-group">
           <label for="inputState" class="control-label">State</label>
           <div class="bfh-selectbox bfh-states" id="inputState" data-name="state" data-country="countries_states2"></div>
       </div> -->
        <div class="form-group">
            <label for="inputAddress" class="control-label">Address</label>
            <textarea id="inputAddress"  placeholder="Enter Your Address" class="un-box form-control" name="address"><?php echo set_value('address'); ?></textarea>
        </div>
        <div class="form-group">
            <input type="submit" id="submit_signup" name="btn_signup" class="btn btn-success" value="Signup">
        </div>
    </form>
</div>