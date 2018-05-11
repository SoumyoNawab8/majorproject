<section class="top_nav">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
    <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
    <li class="breadcrumb-item active"><?php echo $title;?></li>
</ol>

</section>
<main>
	<!-- Section: Features v.3 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5"><?php echo $title;?></h2>
  <!-- Section description -->
  <!-- <p class="lead grey-text text-center w-responsive mx-auto mb-5"><?php?></p> -->

  <!-- Grid row -->
  <div class="row">
<?php 
//fetching images from dBase
$img=explode(" , ", $images);
?>
    <!-- Grid column -->
    <div class="col-lg-5 text-center text-lg-left">
      <div class="row">
      	 <div class="col-md-4">
      	 	<?php foreach($img as $image):?>
      	 	<div class="col-md-8">
      	 		<img  class="img-fluid" src="<?php echo $image;?>" alt="Sample image">
      	 	</div>
      	 	<?php endforeach; ?>
      	 </div>
      	 <div class="col-md-8">
      	 	<img  class="img-fluid img_pview" src="<?php echo $img[0];?>" alt="Sample image" >
      	 </div>
      </div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">
     <?php $short_demo=explode(" / ",$sdesc);
     foreach ($short_demo as $sd) :
     ?>
      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fa fa-mail-forward fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <!-- <h5 class="font-weight-bold mb-3">Safety</h5> -->
          <p class="grey-text"><?php echo $sd; ?></p>
        </div>
        <!-- Grid column -->

      </div>
     
<?php endforeach; ?>
      
      <!-- Grid row -->
      <div class="row mb-3">


        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <!-- <h5 class="font-weight-bold mb-3">Safety</h5> -->
           <!--Deep-purple-->
<button type="button" class="btn btn-deep-purple">Add to Cart</button>
        </div>
        <!-- Grid column -->

      </div>
    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.3 -->
            
<section class="prd-det">
	<div class="container-fluid">
		<p>
			<?php echo $desc;?>
		</p>
	</div>
</section>
</main>
<script type="text/javascript">
// For changing the page title
	// $(function(){

   // $(document).attr("title", "New Title");

// });

</script>