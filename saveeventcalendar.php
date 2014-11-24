<?php    
    require_once 'classes/EventCalendar.php';
    $start = $_POST['start'];
    $end = $_POST['end'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $readOnly = $_POST['readOnly'];
    //echo "$start $end $title $body $readOnly";
    //now save this information to the database...
    $eventCalendarObj = new EventCalendar($start, $end, $title, $body, $readOnly);
    $eventCalendarObj->save();
?>
