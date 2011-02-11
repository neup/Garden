<?php if (!defined('APPLICATION')) exit();
// If the photo contains an http://, it is just an icon, don't show it here.
if ($this->User->Photo != '' 
      && strtolower(substr($this->User->Photo, 0, 7)) != 'http://'
      && strtolower(substr($this->User->Photo, 0, 8)) != 'https://') {
   ?>
   <div class="Photo">
      <?php 
         $UserPhoto = sprintf('uploads/userpics/%s', ChangeBasename($this->User->Photo, 'p%s'));
         echo Img(Gdn_Upload::Url($UserPhoto)); 
      ?>
   </div>
   <?php
}
