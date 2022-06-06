
<div class="container">
    <div>
        <?php echo (isset($error) ? $error : ''); ?>
    </div>
    <?php echo validation_errors(); ?>
    <?php echo form_open('auth/login', ['id' => 'form_login']); ?>

        <div>
            <label for="username">Email address or Phone number</label>
            <?php echo form_error('username'); ?>
            <input type="text" id="username" name="username" placeholder="Username or phone number" class="form-control" value="<?php echo set_value('username'); ?>"/>
        </div>

        <div>
            <label for="password">Password</label>
            <?php echo form_error('password'); ?>
            <input type="password" id="password" name="password" class="form-control" placeholder="password"/>
        </div>

        <input type="submit" id="login" name="login" value="Sign In" />
    </form>
</div>


