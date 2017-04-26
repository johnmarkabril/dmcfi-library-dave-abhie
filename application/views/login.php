    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <div>
                    <img src="<?php echo base_url();?>public/img/logo.png" class="img-responsive" />
                </div>
            </div>
            <h3>Library Portal of Divine Mercy College</h3>
            <p>Login in.</p>
            <?php
                if ( !empty($message) ) {
            ?>
                    <div class="ibox-content no-border" style="text-align: left;"><?php echo $message; ?></div>
                    <div class="padding-top"></div>
            <?php
                }
            ?>
            <?php 
                echo form_open('Login');
            ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="login_idnum" id="login-idnum" placeholder="ID Number">

                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="login_password" id="login-password"  placeholder="Password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                    <p class="text-muted text-center"><small>Do not have an account?</small></p>
                    <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url(); ?>signup">Create an account</a>
                </form>
            <p class="m-t"> <small>Dizon - Faa . Thesis - 2017</small> </p>
        </div>
    </div>