<?php
    require_once 'classes/EventCalendar.php';
    $start = addslashes($_POST['start']);
    $end = addslashes($_POST['end']);
    $title = addslashes($_POST['title']);
    $body = addslashes($_POST['body']);
    $readOnly = $_POST['readOnly'];
    //echo "$start $end $title $body $readOnly";
    //now save this information to the database...
    $eventCalendarObj = new EventCalendar($start, $end, $title, $body, $readOnly);
    $eventCalendarObj->save();
?>
