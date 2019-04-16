<?php

if (isset($_POST['submit'])) :
 if (($insert == true) && ($execute == true)) : ?>
  <div class="message">
  <p class = "success">Data was inserted successfully</p>
 <?php else : ?>
  <p class = "error">The Information Entered Contained Errors.</p>
  <?php endif; ?>
   </div>
   <?php endif; ?>

<div class="first">
<p> Please Fill Out The Information Below.</p>
</div>