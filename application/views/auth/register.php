
<div class="container">
    <div>
        <?php echo (isset($error) ? $error : ''); ?>
    </div>
    
    <?php echo form_open('auth/register', ['id' => 'form_register']); ?>

    
        <div class="form-group">
            <label for="fname">First Name</label>
            <?php echo form_error('fname'); ?>
            <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control" value="<?php echo set_value('fname'); ?>"/>
        </div>
        
        <div class="form-group">
            <label for="lname">Last Name</label>
            <?php echo form_error('lname'); ?>
            <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-control" value="<?php echo set_value('lname'); ?>"/>
        </div>
        
        <div class="form-group">
            <label for="email">Email address</label>
            <?php echo form_error('email'); ?>
            <input type="email" id="email" name="email" placeholder="Username" class="form-control" value="<?php echo set_value('email'); ?>"/>
        </div>

        <div class="form-group">
            <label for="phone">Phone number</label>
            <?php echo form_error('phone'); ?>
            <input type="tel" id="phone" name="phone" placeholder="Phone Number" class="form-control" value="<?php echo set_value('phone'); ?>"/>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <?php echo form_error('password'); ?>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
        </div>

        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <?php echo form_error('cpassword'); ?>
            <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Confirm Password"/>
        </div>

        <button type="submit" class="btn btn-primary" id="register" name="register" >Sign Up</button>
    </form>
</div>


