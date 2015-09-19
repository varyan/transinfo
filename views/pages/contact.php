<div class="row margin-lg">
    <div class="col-md-7">
        <h4><?=$system_title['contact_title']?></h4>
        <p><?=$system_title['contact_text']?></p>

        <form class="contact-form animated slideInLeft animation-delay2">
            <div class="form-group">
                <label for="exampleInputPassword1"><?=$system_title['name']?></label>
                <input type="password" class="form-control animated bounceIn animation-delay3" id="exampleInputPassword1">
            </div><!-- /form-group -->
            <div class="form-group">
                <label for="exampleInputEmail1"><?=$system_title['email']?></label>
                <input type="email" class="form-control  animated bounceIn animation-delay4" id="exampleInputEmail1">
            </div><!-- /form-group -->
            <div class="form-group">
                <label for="exampleInputEmail1"><?=$system_title['messages']?></label>
                <textarea class="form-control  animated bounceIn animation-delay5" rows="7"></textarea>
            </div><!-- /form-group -->
            <button type="submit" class="btn btn-sm btn-primary  animated bounceIn animation-delay6"><i class="fa fa-envelope"></i> <?=$system_title['send']?></button>
        </form>
    </div><!-- /.col -->
    <div class="col-md-4 col-md-offset-1">
        <h4 class="text-primary"><?=$system_title['contact_info']?></h4>

        <address class=" animated slideInLeft animation-delay7">
            <strong>Twitter, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            <div class="seperator"></div>
            <strong>Phone : <span class="theme-font">(123) 456-7890</span></strong><br>
            <strong>Email : <span class="theme-font">endless.themes@gmail.com</span></strong><br>
            <strong>Website : <span class="theme-font">Your website</span></strong>
        </address>
        <hr>
    </div>
</div>