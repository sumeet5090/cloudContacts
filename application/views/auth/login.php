
<div class="container">
    <div>
        <?php echo (isset($error) ? $error : ''); ?>
    </div>
    
    <?php echo form_open('auth/login', ['id' => 'form_login']); ?>

        <div class="form-group">
            <label for="username">Email address or Phone number</label>
            <?php echo form_error('username'); ?>
            <input type="text" id="username" name="username" placeholder="Username or phone number" class="form-control" value="<?php echo set_value('username'); ?>"/>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <?php echo form_error('password'); ?>
            <input type="password" id="password" name="password" class="form-control" placeholder="password"/>
        </div>

        <button type="submit" class="btn btn-primary" id="login" name="login">Sign In</button>
        <button type="submit" class="btn btn-primary" id="login" name="login">Sign Up</button>
    </form>
</div>


