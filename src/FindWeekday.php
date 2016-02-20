<?php

class FindWeekday {
    private $day;
    private $month;
    private $year;
    //
    // function setTimeZone(){
    //     date_default_timezone_set('America/Los_Angeles');
    }
    function __construct($newday, $newmonth, $newyear)
    {
        $this->day = $newday;
        $this->month = $newmonth;
        $this->year = $newyear;
    }
    function getDay()
    {
        return $this->day;
    }
    function setDay($newday)
    {
        $this->day = $day;
    }
    function getMonth()
    {
        return $this->month;
    }
    function setMonth($newmonth)
    {
        $this->month = $month;
    }
    function getYear()
    {
        return $this->year;
    }
    function setYear($newyear)
    {
        $this->year = $year;
    }
    
    function getWeekday()
    {
        // $date = date("l", mktime(0, 0, 0, $this->getMonth(), $this->getDay(), $this->getYear()));
        // echo time();
        // return $date;
        $m = $this->month;
        $y = $this->year;
        $d = $this->day;
        if ($m == 1 || $m == 2){
             $m = $m + 12;
             $y = $y - 1;

        }

        $dayDistance = floor(365*$y) + floor($y/4) - floor($y/100) + floor($y/400) + $d + floor((153*$m+8)/5) ;


        $daysBeforeFeb1816Th = 736411 - $dayDistance;

        $weekOffset = ($daysBeforeFeb1816Th % 7);

        if ($weekOffset == 0 ){
            return "Thursday";
        }elseif ($weekOffset == -1 || $weekOffset == 6 ){
            return "Friday";
        }elseif ($weekOffset == -2 || $weekOffset == 5){
            return "Saturday";
        }elseif ($weekOffset == -3 || $weekOffset == 4){
            return "Sunday";
        }elseif ($weekOffset == -4 || $weekOffset == 3){
            return "Monday";
        }elseif ($weekOffset == -5 || $weekOffset == 2){
            return "Tuesday";
        }elseif ($weekOffset == -6 || $weekOffset == 1){
            return "Wednesday";
        }


    }
//365*year + year/4 - year/100 + year/400 + date + (153*month+8)/5    jan and feb are 13 14 of prev year
 ?>
