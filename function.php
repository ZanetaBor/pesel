<?php

// gets date of birth from the pesel number
function peselNumb($pesel) {
    $year=substr($pesel,4,4);
    $month=substr($pesel,2,2);	
    $day=substr($pesel,0,2);	
    echo "year of birth:  ".$year."</br>";	
    echo "month of birth:  ".$month."</br>";
    echo "day of birth:  ".$day;
}	       
        
?>