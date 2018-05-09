<!-- <style type="text/css">

</style> -->
<main >
	<div class="parallax">
		<h2 class="animated fadeInUp">Get Around The Edge</h2>
	</div>
	<div style="height:500px;background-color:white;font-size:36px">
    <div class="container">
        As the rapid evolution in information technology has changed our communications ways, it also has an impact on social behaviors across multiple devices. It enlightens what interacting tool people are using to disseminate information and what is the most used channel of communication. Long studies have been conducted to determine ratios of mobile and desktop users in several countries, including Dubai. With increasing time, mobile users have greatly jumped over desktop users, but in Dubai, uses of both devices are really close and competing well.
    </div>
</div>
<div class="parallax2">
	<center>
        <?php if ($_COOKIE["login"] == "admin" ) : $loca=base_url().'admin_panel';header('Location:'. $loca); else:?>
	<button type="button" class="btn btn-primary" style="background-color:#ef5350;" data-toggle="modal" data-target="#modalLoginAvatarDemo">
    Login</button>
<?php endif; ?>
</center>
</div>
</main>
<div class="modal fade" id="modalLoginAvatarDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
            <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                <!--Content-->
                <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header">
                        <img src="<?php echo base_url(); ?>img/admin_user.jpeg" class="rounded-circle img-responsive" alt="Avatar photo">
                    </div>
                    <!--Body-->
                    <div class="modal-body text-center mb-1">
                        <input type="hidden" id="siteUrl" value="<?php echo base_url();?>" >
                        <div class="am_log1" >
                            <h5 class="mt-1 mb-2">Admin User</h5>

                            <div class="md-form ml-0 mr-0">
                                <input type="text" id="adminUsr" class="form-control ml-0">
                                <label for="adminUsr" class="ml-0">Enter username</label>
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-cyan waves-effect waves-light" onclick="adminLogin($('input#adminUsr').val(),'next',$('input#siteUrl').val())">Next
                                    <!-- <i class="fa fa-sign-in ml-1"></i> -->
                                </button>
                            </div>
                        </div>
                        <div class="am_log2"  style="display: none;">
                            <h5 class="mt-1 mb-2" id="WelAdm">Admin User</h5>

                            <div class="md-form ml-0 mr-0">
                                <input type="password" id="adminPw" class="form-control ml-0">
                                <label for="adminPw" class="ml-0">Enter password</label>
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-cyan waves-effect waves-light" onclick="adminLogin($('input#adminUsr').val(),$('input#adminPw').val(),$('input#siteUrl').val())">Login
                                    <i class="fa fa-sign-in ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Floating buttons for logged in users -->

<script type="text/javascript">
	scrllNav('adminUI');
</script>