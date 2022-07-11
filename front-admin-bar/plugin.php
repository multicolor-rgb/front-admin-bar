<?php

    class frontAdminBar extends Plugin {

        public function init(){
            $this->dbFields = array(
        'color'=> '',
        'position'=> '', 
            );
        }
    
        public function  siteBodyBegin(){
 
            $login = new Login();
             
            if ($login->isLogged()){
 
                global $page;
                global $site;
                global $user;
                global $language;

                include($this->phpPath().'php/bar.php');
                
            };

        }

        public function form(){

            $html = '

            <p> Panel Color</p>
            
            <input type="color" value="'.$this->getValue('color').'" class="form-control form-color" name ="color">

            <br>
            
            <p> Panel position</p>
            
            <select name="position">

            <option value="top" '.($this->getValue('position')==="top"?"selected":"").'>Top</option>
            <option value="bottom" '.($this->getValue('position')==="bottom"?"selected":"").'>Bottom</option>

            </select>

            ';

            return $html;


        }
    }
?>