
<?php 

if($this->getValue('position')=="top"){
    echo "<link rel='stylesheet' href='".$this->domainPath()."css/frontAdminBarStyle.css'>";
}else{
    echo "<link rel='stylesheet' href='".$this->domainPath()."css/frontAdminBarBottomStyle.css'>";
}

;?>


<style>
.m-toper{
    background:<?php
if($this->getValue('color')!==''){
   echo $this->getValue('color');
}else{
    echo '#000';
}

;?>
}
</style>
<div class="m-toper">
<div class="m-toper-wrapper">

<div class="m-toper-left">
<span class="m-toper-user"><i class="uil uil-user-circle"></i> <?php echo $page->username();?></span>
<a class="m-toper-mr" href="<?php echo DOMAIN;?>/admin/edit-content/<?php echo $page->key();?>"><?php echo $language->get('edit'); ?> <i class="uil uil-edit"></i></a>
<a href="<?php echo DOMAIN;?>/admin/new-content/" class="m-toper-mr"><?php echo $language->get('new-content'); ?><i class="uil uil-plus-circle"></i></a>
<a href="<?php echo DOMAIN;?>/admin/content/" class="m-toper-mr"><?php echo $language->get('content'); ?> <i class="uil uil-list-ul"></i></a>
</div>

<div class="m-toper-right m-toper-m10">  


 <a href="<?php echo DOMAIN;?>/admin/" class="m-toper-mr"><?php echo $language->get('dashboard'); ?><i class="uil uil-sliders-v-alt"></i></a>
 <a href="<?php echo DOMAIN;?>/admin/categories/" class="m-toper-mr"><?php echo $language->get('categories'); ?><i class="uil uil-book-open"></i></a>
<a href="<?php echo DOMAIN;?>/admin/users/" class="m-toper-mr"><?php echo $language->get('users'); ?><i class="uil uil-users-alt"></i></a>
<a href="<?php echo DOMAIN;?>/admin/plugins/" class="m-toper-mr"><?php echo $language->get('plugins'); ?> <i class="uil uil-plug"></i></a>
 <a href="<?php echo DOMAIN;?>/admin/themes/" class="m-toper-mr"><?php echo $language->get('themes'); ?> <i class="uil uil-swatchbook"></i></a>
 <a href="<?php echo DOMAIN;?>/admin/settings/" ><?php echo $language->get('settings'); ?> <i class="uil uil-setting"></i></a>
</div>
</div>
</div>