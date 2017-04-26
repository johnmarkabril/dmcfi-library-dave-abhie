    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <div>
                    <img src="<?php echo base_url();?>public/img/logo.png" class="img-responsive" />
                </div>
            </div>
            <h3>Library Portal of Divine Mercy College</h3>
            <p>Create an Account</p>
            <?php
                if ( !empty($message) ) {
            ?>
                    <div class="ibox-content no-border" style="text-align: left;"><?php echo $message; ?></div>
            <div class="padding-top"></div>
            <?php
                }
            ?>
            <form method="POST" action="<?php echo base_url(); ?>signup/create">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="" placeholder="* First Name" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="lname" id="" placeholder="* Last Name" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" id="" placeholder="* Username" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="" placeholder="* Email Address" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pword" id="" placeholder="* Password" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="idno" id="" placeholder="* ID NO" required />
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="year" id="" placeholder="* Grade 1 - 4th Year College w/ Course" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="section" id="" placeholder="* Section Name" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="pnum" id="" placeholder="* Phonenumber" required />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-lg" name="submit" style="width: 100%;background-color: #EB5635;border:0px;" type="submit">Submit</button>
                </div>
            </form>
            <p class="m-t"> <small>Dizon - Faa . Thesis - 2017</small> </p>
        </div>
    </div>