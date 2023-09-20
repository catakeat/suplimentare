<?php

function auth() {

    if (!isset($_SESSION['username'])) {
        header('Location: login.php'); // Redirect to the login page if not logged in.
        exit();
    }
}

function banner() {
    ?> <div class="container-fluid p-1 text-white text-center site-banner">
        <div id="banner_title">
            <h1>Ore suplimentare</h1>
            <p>Uz intern UPT</p>
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    echo "Welcome " . $_SESSION['username'] . " " . $_SESSION['id'];
    print_r($_SESSION['entitati']);
    echo count($_SESSION['entitati']);
}

function footer() {
    ?><script>
        $('.sub-menu ul').hide();
        $(".sub-menu a").click(function () {
            $(this).parent(".sub-menu").children("ul").slideToggle("100");
            $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
        });

        function classic(obiect = 'calendar/index.php?month=05&year=2021') {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {

                    document.getElementById("calendarul").innerHTML = this.responseText;

                }
            };
            xhttp.open("GET", obiect, true);
            xhttp.send();

            return false;// ca sa nu mearga dupa link
        }
    </script>
    </body>
    </html>  <?php
}

function sidebar($entitati = null) {
    ?>
    <div class="col col-lg-2">
        <nav class='animated bounceInDown bg-dark'>
            <ul>
                <li><a href='calendar.php'>Calendar</a></li>
                <li><a href='#message'>Messages</a></li>
                <?php
                if ($entitati != null) {
                    ?>
                    <li class='sub-menu'><a href='#settings'>Echipa<div class='fa fa-caret-down right'></div></a>
                        <ul>
                            <?php
                            foreach ($entitati as $value) {
                                ?>
                                <li><a href='echipa.php'><?php print_r($value); ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>

                </li>
                <li class='sub-menu'><a href='#message'>Help<div class='fa fa-caret-down right'></div></a>
                    <ul>
                        <li><a href='#settings'>FAQ's</a></li>
                        <li><a href='#settings'>Submit a Ticket</a></li>
                        <li><a href='#settings'>Network Status</a></li>
                    </ul>
                </li>
                <li><a href='logout.php'>Logout</a></li>
            </ul>
        </nav>

    </div>    

    <?php
}

function makeTable($result, $column_names, $extracolumns = null) {// $extracolumns e un array asociativ , key -value
    ?>
    <table style="width:100%"  class="table table-bordered table-striped table-hover">
        <tr >
            <?php
            foreach ($column_names as $column) {
                echo "<th>$column</th>";
            }
            if ($extracolumns!=null && count($extracolumns) > 0) {
                foreach ($extracolumns as $key => $value) {
                    echo "<th>$key</th>";
                }
            }
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($column_names as $column) {
                    echo "<td>" . $row[$column] . "</td>";
                }
                if($extracolumns!=null && count($extracolumns)>0)  
                {
                    foreach($extracolumns as $key=>$value){
                        echo "<td>" . $value . "</td>";
                    }
                }
                echo "</tr>";
            }

            mysqli_free_result($result);
            echo "</table>";
        }

        function rightbar() {
            ?>
        <div class="col col-lg-3">
            <h3>Column 3</h3>        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitTest</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisTest</p>
        </div>
    <?php
}
?>