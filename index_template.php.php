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


            <h3>Column 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitTest</p>

            <h2>Striped Table</h2>
            <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p>

            <table style="width:100%"   class="table table-bordered table-striped table-hover">
                <tr>
                    <th>MON</th>
                    <th>TUE</th>
                    <th>WED</th>
                    <th>THU</th>
                    <th>FRI</th>
                    <th>SAT</th>
                    <th>SUN</th>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>



        </div>
        <?php
        rightbar();
        ?>
    </div>
</div>

<?php
footer();
?>
