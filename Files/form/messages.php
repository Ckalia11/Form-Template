<?php

if (isset($_POST['submit'])) :
 if (($insert == true) && ($execute == true)) : ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
   Data was inserted successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
 <?php else : ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
   The Information Entered Contained Errors.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <?php endif; ?>
<?php endif; ?>

<div class="alert alert-info" role="alert">
Please Fill Out The Information Below
</div>