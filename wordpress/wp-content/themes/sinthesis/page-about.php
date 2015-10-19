<?php
/**
 * Template Name:  Page About Us
 */
?>

<?php get_header(); ?>
<section class="container">
		<div class="page">
			<div class="content">
              
 <ul class="nav nav-tabs aboutus">
  <li class="active"><a data-toggle="tab" href="#sxetikameemas"><?php the_field('aboutus_tab_title1'); ?></a></li>
  <li ><a data-toggle="tab" href="#proswpa"><?php the_field('aboutus_tab_title2'); ?></a></li>
       <div class="clear-shadow"></div>
</ul>
				<article class="col-md-12">


                  
     
 

                        <div class="letter">    
						<section>
							<div class="media">
                                	                         
                           
                                <div class="tab-content">
  <div id="sxetikameemas" class="tab-pane fade in active">
   <?php the_field('aboutus_tab_content1'); ?>
  </div>
  <div id="proswpa" class="tab-pane fade">
   <?php the_field('aboutus_tab_content2'); ?>
  </div>
  
</div>
									
                               
                                
								
							</div>
						</section>
                            
                            
                            
						<div class="clearfix"></div>
						</div>

					
                    
                    
            	</article>    
	</div><!-- end of content -->
	</div><!-- end of page -->
	</section><!-- end of section -->
<?php get_footer(); ?>