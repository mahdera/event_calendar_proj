<?php
    require_once 'classes/EventCalendar.php';
    $eventCalendarList = EventCalendar::getAllEventCalendars();
    $events = array();
    $eventCalendarArray = array();

    $i = 0;
    while($eventCalendarRow = mysql_fetch_object($eventCalendarList)){
      //$events[$i] = $eventCalendarRow;
      $id = $eventCalendarRow->id;
      $start = $eventCalendarRow->start;
      $end = $eventCalendarRow->end;
      $title = $eventCalendarRow->title;
      $body = $eventCalendarRow->







      ;
      $readOnly;
      $i++;
    }//end while loop

    $eventCalendarArray['events'] = $events;

    echo json_encode($eventCalendarArray);
?>
