<style type="text/css">
	body{background-image: url('img/reg_bg.jpg');
	background-size: cover;}
    .foot-def{ display: none; }
</style>

<main class="reg_usr">
	<div class="container">
        <?php  echo validation_errors(); ?>
		<div class="row">
			 <div class="col-md-4">
			 	 
			 </div>
			 <div class="col-md-5">
			 	
<!-- Card -->
<div class="card">

    <!-- Card body -->
    <div class="card-body">

        <!-- Material form register -->
<form autocomplete="off">
            <p class="h4 text-center py-4">Sign up</p>

            <!-- Material input text -->
            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="Name" class="form-control" autofocus>
                <label for="Name" class="font-weight-light">Your name</label>
                <div class="chk1"></div>
            </div>

            <!-- Material input email -->
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="email" id="uemail" class="form-control" >
                <label for="uemail" class="font-weight-light">Your email</label>
                <div class="chk2"></div>
            </div>

            <!-- Material input email -->
            <div class="md-form">
                <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                <input type="email" id="cuemail" class="form-control" >
                <label for="cuemail" class="font-weight-light">Confirm your email</label>
                <div class="chk3"></div>
            </div>

            <!-- Material input password -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="password" id="upassword" class="form-control" >
                <label for="upassword" class="font-weight-light">Your password</label>
                <div class="chk4"></div>
            </div>
				<input type="hidden" id="siteUl" value="<?php echo base_url(); ?>">
            <div class="text-center py-4 mt-3">
                <button class="btn btn-cyan" type="submit" onclick="UserRegister($('#UserEmail').val(),$('#UserPassword').val(),$('input#siteUl').val());"">Register</button>
            </div>
       </form>
        <!-- Material form register -->
		Already have an account? <a href="<?php echo base_url();?>login">Sign in</a>
    </div>
    <!-- Card body -->

</div>
<!-- Card -->
                      
			 </div>
		</div>
	</div>
</main>
<section>
	<!--Footer-->
<footer class="page-footer font-small pt-0">



    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="<?php echo base_url(); ?>"> Mobshop </a>
    </div>
    <!--/Copyright-->

</footer>
</section>
<!-- JS Part -->
<script type="text/javascript">
	scrllNav('registration');
</script>