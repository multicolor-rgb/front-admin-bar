
<?php 

if($this->getValue('position')=="top"){
    echo "<link rel='stylesheet' href='".$this->domainPath()."css/frontAdminBarStyle.css?v=1'>";
}elseif($this->getValue('position')=="bottom"){
    echo "<link rel='stylesheet' href='".$this->domainPath()."css/frontAdminBarBottomStyle.css?v=2'>";
}elseif($this->getValue('position')=="left"){
    echo "<link rel='stylesheet' href='".$this->domainPath()."css/frontAdminBarLeftStyle.css?v=3'>";
}elseif($this->getValue('position')=="right"){
    echo "<link rel='stylesheet' href='".$this->domainPath()."css/frontAdminBarRightStyle.css?v=4'>";
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
<span class="m-toper-user"><i class="uil uil-user-circle"></i> <?php echo Session::get('username');?></span>

<?php
global $WHERE_AM_I;

if($WHERE_AM_I=='page'){
    echo '<a class="m-toper-mr" href="'.$site->url().'/admin/edit-content/'.$page->key().'">'.$language->get('edit').'<i class="uil uil-edit"></i></a>';
}else{
    echo '';
}

;?>

<a href="<?php echo $site->url();?>/admin/new-content/" class="m-toper-mr"><?php echo $language->get('new-content'); ?><i class="uil uil-plus-circle"></i></a>
<a href="<?php echo $site->url();?>/admin/content/" class="m-toper-mr"><?php echo $language->get('content'); ?> <i class="uil uil-list-ul"></i></a>
</div>

<div class="m-toper-right m-toper-m10">  


 <a href="<?php echo $site->url();?>/admin/" class="m-toper-mr"><?php echo $language->get('dashboard'); ?><i class="uil uil-sliders-v-alt"></i></a>
 <a href="<?php echo $site->url();?>/admin/categories/" class="m-toper-mr"><?php echo $language->get('categories'); ?><i class="uil uil-book-open"></i></a>
<a href="<?php echo $site->url();?>/admin/users/" class="m-toper-mr"><?php echo $language->get('users'); ?><i class="uil uil-users-alt"></i></a>
<a href="<?php echo $site->url();?>/admin/plugins/" class="m-toper-mr"><?php echo $language->get('plugins'); ?> <i class="uil uil-plug"></i></a>
 <a href="<?php echo $site->url();?>/admin/themes/" class="m-toper-mr"><?php echo $language->get('themes'); ?> <i class="uil uil-swatchbook"></i></a>
 <a href="<?php echo $site->url();?>/admin/settings/" ><?php echo $language->get('settings'); ?> <i class="uil uil-setting"></i></a>
</div>
</div>
</div>