<?php
/**
 * A template php file to view each Grad Profile node.
 */
?>


<div id="gradprofile-view-<?php print $title ?>" class ="gradprofile-view">
  <div class="gradprofile-title">
  	<h2><?php print $name; ?></h2>
  </div>	
  <?php if($aboutme): ?>
  <div class = "gradprofile-aboutme">
    <div class = "field-label"><b><?php print t('About Me') ?>:</b> </div>  
    <div class = "field-item" ><?php print $aboutme; ?> </div>
  </div>
  <?php endif;?>
 
 <?php if($email): ?>
  <div class = "gradprofile-email">
    <div class = "field-label"><b><?php print t('Email') ?>:</b> </div> 
    <div class = "field-item" ><?php print $email; ?> </div>
  </div>
  <?php endif;?>
  
 <?php if($phone): ?>
  <div class = "gradprofile-phone">
    <div class = "field-label"><b><?php print t('Phone') ?>:</b> </div> 
    <div class = "field-item" ><?php print $phone; ?> </div>
  </div>
  <?php endif;?>

 <?php if($address || $city || $province || $country): ?>
  <div class = "gradprofile-address">
    <?php if($address)?>
    <div class = "field-label"><b><?php print t('Address') ?>:</b> </div> 
    <div class = "field-item" ><?php print $address; ?> </div>
    <?php if($city)?>
    <div class = "field-label"><b><?php print t('City') ?>:</b> </div> 
    <div class = "field-item" ><?php print $city; ?> </div>
     <?php if($province)?>
    <div class = "field-label"><b><?php print t('Province') ?>:</b> </div> 
    <div class = "field-item" ><?php print $province; ?> </div>
    <?php if($country)?>
    <div class = "field-label"><b><?php print t('Country') ?>:</b> </div> 
    <div class = "field-item" ><?php print $country; ?> </div>
  </div>
  <?php endif;?>


   <?php if($educationlevel): ?>
  <div class = "gradprofile-educationlevel">
    <div class = "field-label"><b><?php print t('Highest Education Level Completed') ?>:</b> </div> 
    <div class = "field-item" ><?php 
        echo $educationlevel;?></div>
  </div>
  <?php endif;?>
  
  <?php if($jobtype): ?>
  <div class = "gradprofile-jobtype">
    <div class = "field-label"><b><?php print t('Interest In Job Type') ?>:</b> </div> 
    <div class = "field-item" ><?php 
    switch($jobtype) {
     case 0;
        echo "";
        break;
      case 1:
        echo "Full Time";
        break;
      case 2:
        echo "Part Time";
        break;
      case 3:
        echo "Internship";
        break;
      case 4:
        echo "Contract";
        break;
    }?></div>
  </div>
  <?php endif;?>
</div>
<?php if($filename): ?>
  <div class = "gradprofile-resume">
 <?php print '<iframe src="http://docs.google.com/gview?url='.$filename.'&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>'?>
 </div>
<?php endif; ?>

