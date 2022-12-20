
<?php 

if($this->getValue('position')=="top"){
    echo "<link rel='stylesheet' href='".$this->domainPath()."css/frontAdminBarStyle.css?v=6'>";
}elseif($this->getValue('position')=="bottom"){
    echo "<link rel='stylesheet' href='".$this->domainPath()."css/frontAdminBarBottomStyle.css?v=7'>";
}elseif($this->getValue('position')=="left"){
    echo "<link rel='stylesheet' href='".$this->domainPath()."css/frontAdminBarLeftStyle.css?v=8'>";
}elseif($this->getValue('position')=="right"){
    echo "<link rel='stylesheet' href='".$this->domainPath()."css/frontAdminBarRightStyle.css?v=9'>";
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
<span class="m-toper-user">
<img src="<?php echo $this->domainPath().'img/usercircle.svg';?>" alt="<?php echo Session::get('username'); ?>">    
<p> <?php echo Session::get('username');?></p>   
</span>

<?php
global $WHERE_AM_I;

if($WHERE_AM_I=='page'){
    echo '<a class="m-toper-mr" href="'.DOMAIN_ADMIN.'edit-content/'.$page->key().'"><span>'.$language->get('edit').'</span>
    <img src="'.$this->domainPath().'img/edit.svg" alt="'.$language->get('edit').'">    
    
    </a>';
}else{
    echo '';
}

;?>

<a href="<?php echo DOMAIN_ADMIN;?>new-content/" class="m-toper-mr"><span><?php echo $language->get('new-content'); ?></span> 
<img src="<?php echo $this->domainPath().'img/plus.svg';?>" alt="<?php echo $language->get('new-content'); ?>">
</a>
<a href="<?php echo DOMAIN_ADMIN;?>content/" class="m-toper-mr"><span><?php echo $language->get('content'); ?></span> 
<img src="<?php echo $this->domainPath().'img/list.svg';?>" alt="<?php echo $language->get('content'); ?>">
</a>
</div>

<div class="m-toper-right m-toper-m10">  


 <a href="<?php echo DOMAIN_ADMIN;?>" class="m-toper-mr"><span><?php echo $language->get('dashboard'); ?></span>
 <img src="<?php echo $this->domainPath().'img/set.svg';?>" alt="<?php echo $language->get('dashboard'); ?>">
</a>
 <a href="<?php echo DOMAIN_ADMIN;?>categories/" class="m-toper-mr"><span><?php echo $language->get('categories'); ?></span>
 <img src="<?php echo $this->domainPath().'img/book.svg';?>" alt="<?php echo $language->get('categories'); ?>">
</a>
<a href="<?php echo DOMAIN_ADMIN;?>users/" class="m-toper-mr"><span><?php echo $language->get('users'); ?></span>
<img src="<?php echo $this->domainPath().'img/users.svg';?>" alt="<?php echo $language->get('users'); ?>">

</a>
<a href="<?php echo DOMAIN_ADMIN;?>plugins/" class="m-toper-mr"><span><?php echo $language->get('plugins'); ?></span>
<img src="<?php echo $this->domainPath().'img/plugin.svg';?>" alt="<?php echo $language->get('plugins'); ?>">
</a>
 <a href="<?php echo DOMAIN_ADMIN;?>themes/" class="m-toper-mr"><span><?php echo $language->get('themes'); ?></span>
<img src="<?php echo $this->domainPath().'img/theme.svg';?>" alt="<?php echo $language->get('themes'); ?>">
</a>

 <a href="<?php echo DOMAIN_ADMIN;?>settings/" ><span><?php echo $language->get('settings'); ?></span>
<img src="<?php echo $this->domainPath().'img/settings.svg';?>" alt="<?php echo $language->get('settings'); ?>">
</a>
</div>
</div>
</div>