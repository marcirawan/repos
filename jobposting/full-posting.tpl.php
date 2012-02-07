


<div id="jobposting-view-<?php print $jobtitle ?>" class ="jobposting-view">
  <div class="jobposting-jobtitle">
  	<h2><?php print $jobtitle; ?></h2>
  </div>	
  
  <?php if($company): ?>
  <div class = "jobposterprofile-company">
    <div class = "field-label"><b><?php print t('Company') ?>:</b> </div>  
    <div class = "field-item" ><?php print'<a href="'.$companylink.'">'.$company.'</a>' ?> </div>
  </div>
  <?php endif;?>
  
    <?php if($webpage): ?>
  <div class = "jobposterprofile-website">
    <div class = "field-label"><b><?php print t('Website') ?>:</b> </div>  
    <div class = "field-item" ><?php print'<a href="'.$webpage.'">'.$webpage.'</a>' ?> </div>
  </div>
  <?php endif;?>
  
  <?php if($description): ?>
  <div class = "jobposting-description">
    <div class = "field-label"><b><?php print t('Description') ?>:</b> </div>  
    <div class = "field-item" ><?php print $description; ?> </div>
  </div>
  <?php endif;?>
  
  
   <?php if($education_level): ?>
  <div class = "jobposting-educationlevel">
    <div class = "field-label"><b><?php print t('Highest Education Level Completed') ?>:</b> </div> 
    <div class = "field-item" ><?php 
        switch($education_level){
        	case 1;
        	echo "BSc";
        	break;
        	case 2;
        	echo "Masters";
        	break;
        	case 3; 
        	echo "Ph.D.";
        	default;
        	echo "";
        	break;
        	
        }?></div>
  </div>
  <?php endif;?>
  
  
  <?php if($job_type): ?>
  <div class = "jobposting-jobtype">
    <div class = "field-label"><b><?php print t('Interest In Job Type') ?>:</b> </div> 
    <div class = "field-item" ><?php 
    switch($job_type) {
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
   
 <?php if($email): ?>
  <div class = "jobposting-email">
    <div class = "field-label"><b><?php print t('Email') ?>:</b> </div> 
    <div class = "field-item" ><?php print $email; ?> </div>
  </div>
  <?php endif;?>
  
 <?php if($phone): ?>
  <div class = "jobposting-phone">
    <div class = "field-label"><b><?php print t('Phone') ?>:</b> </div> 
    <div class = "field-item" ><?php print $phone; ?> </div>
  </div>
  <?php endif;?>
  

 <?php if($address_street || $address_city || $address_province || $address_country): ?>
  <div class = "jobposting-address_street">
    <?php if($address_street)?>
    <div class = "field-label"><b><?php print t('Address') ?>:</b> </div> 
    <div class = "field-item" ><?php print $address_street; ?> </div>
    <?php if($address_city)?>
    <div class = "field-label"><b><?php print t('City') ?>:</b> </div> 
    <div class = "field-item" ><?php print $address_city; ?> </div>
     <?php if($address_province)?>
    <div class = "field-label"><b><?php print t('Province') ?>:</b> </div> 
    <div class = "field-item" ><?php print $address_province; ?> </div>
    <?php if($address_country)?>
    <div class = "field-label"><b><?php print t('Country') ?>:</b> </div> 
    <div class = "field-item" ><?php print $address_country; ?> </div>
  </div>
  <?php endif;?>
  
  <?php if($expiredate): ?>
  <div class = "jobposting-expiredate">
    <div class = "field-label"><b><?php print t('Expiry Date') ?>:</b> </div> 
    <div class = "field-item" ><?php print $expiredate; ?> </div>
  </div>
  <?php endif;?>
  
 

<?php if($filename): ?>
  <div class = "jobposting-pdf">
 <?php print '<iframe src="http://docs.google.com/gview?url='.$filename.'&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>'?>
 </div>
<?php endif; ?>
