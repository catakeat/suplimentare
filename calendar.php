<?php
require_once('inc/header.php');
banner();
?>
<div class="container-fluid mt-5">
    <div class="row">
        <?php
        sidebar($_SESSION['entitati']);
        ?>
        <div class="col col-lg-7">
            <div class="form-group"  id='calendarul'>
                <?php
                require_once 'calendar/functions.php';
                include('calendar/calendar_nou.php');
                $libere = null;
                $month = null;
                $year = null;
                $calendar = new Calendar($libere, $month, $year);
                echo $calendar->show();
                ?>
            </div>
        </div>
        <?php
        rightbar();
        ?>  
</div>
</div>
<?php
footer();
?>