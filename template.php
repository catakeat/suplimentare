<?php
/*  NEFOLOSIT  , A FOST INITIAL*/
require_once('inc/header.php');
banner();
?>
<div class="container-fluid mt-5">
    <div class="row">
        <?php
     sidebar($_SESSION['entitati']);
      echo " <div class=\"col col-lg-7\">";
      /*  CONTINUT   */
      echo "</div>";
      rightbar();
        ?>
    </div>
</div>
<?php
footer();
?>
