<style type="text/css">
	/*header{display: none;}*/
	.foot-def{ display: none; }
	body{background-image: url('img/lgin_bg.jpg');
	background-size: cover;
}
span{ color:green; }
h2{padding-top: 5em; padding-bottom: 5em;}
</style>
<main class="login_pg">
	<div class="container">
		 <?php if($this->session->flashdata('login_failed')):?>
    <?php echo '<p>'.$this->session->flashdata('post_deleted').'</p>';?>
 <?php  endif;?>
		<br><br>
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-5">
					<!-- Card -->
				<div class="card">

				    <!-- Card body -->
				    <div class="card-body">
						<div id="non-logged">
				        <!-- Material form register -->
				        <?php echo form_open('login'); ?>
				            <p class="h4 text-center py-4">Sign in</p>

				            <!-- Material input email -->
				            <div class="md-form">
				                <i class="fa fa-envelope prefix grey-text"></i>
				                <input type="email" id="UserEmail" name="username" class="form-control">
				                <label for="UserEmail" class="font-weight-light">Your email</label>
				            </div>

				            <!-- Material input password -->
				            <div class="md-form">
				                <i class="fa fa-lock prefix grey-text"></i>
				                <input type="password" name="password" id="UserPassword" class="form-control">
				                <label for="UserPassword" class="font-weight-light">Your password</label>
				            </div>

				            <div class="text-center py-4 mt-3">
				                <button class="btn btn-cyan" id="Loginbtn" type="submit" >Sign in</button>
				            </div>
				            <input type="hidden" id="siteUl" value="<?php echo base_url(); ?>">
				        <?php echo form_close();?>
				        <!-- Material form register -->
						New here? <a href="<?php echo base_url();?>registration">click to register</a>
					</div>
						<h2 style="display: none;" class="text-center">Welcome <span id="LoggedUser"></span></h2>
				    </div>
				    <!-- Card body -->

				</div>
				<!-- Card -->
	      </div>
	  </div>
	</div>
</main>
<script type="text/javascript">
	scrllNav('login');
</script>