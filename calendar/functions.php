<?php

function returneazaZileleLibere() {
    global $conn;
    $query = "select * from zile_libere";
    $result = $conn->query($query);
    $libere = array();
    //echo "aici";
    while ($row = $result->fetch_assoc()) {
        array_push($libere, $row['ziua']);
    }
    return $libere;
}

function citeZile($data_actuala, $days = 4) {
    $days = 4;
    $libere = returneazaZileleLibere();
    $data_actuala_plus_patru = date('Y-m-d', strtotime("+4 day", strtotime($data_actuala)));
    $arr = getDatesFromRange($data_actuala, $data_actuala_plus_patru);
    //$day_of_week = date('N', strtotime($this->currentYear . '-' . $this->currentMonth . '-' . ($this->currentDay)));
    foreach ($libere as $zi_libera) {
        if (in_array($zi_libera, $arr)) {
            // echo $zi_libera."  exista";
            $days++;
        }
    }
    // echo " days ".$days;
    //  print_r($arr);
}

function getDatesFromRange($start, $end, $format = 'Y-m-d') {
    $array = array();
    $interval = new DateInterval('P1D');

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

    foreach ($period as $date) {
        $array[] = $date->format($format);
    }

    return $array;
}
function zileLibere() {
    global $conn;
    $query = "select * from zile_libere";
    $result = $conn->query($query);
    $libere = array();
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        array_push($libere, $row['ziua']);
    }
    return $libere;
}





?>
