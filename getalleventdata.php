<?php
    require_once 'classes/EventCalendar.php';
    $eventCalendarList = EventCalendar::getAllEventCalendars();
    
    $events = array();
    $eventCalendarArray = array();

    while($eventCalendarRow = mysql_fetch_object($eventCalendarList)){
      $id = $eventCalendarRow->id;
      $start = $eventCalendarRow->start_time;
      $end = $eventCalendarRow->end_time;
      $title = $eventCalendarRow->title;
      $body = $eventCalendarRow->event_description;
      $readOnly = $eventCalendarRow->read_only;
      $events[] = array('id' => $id, 'start' => $start, 'end' => $end, 'title' => $title, 'body' => $body, 'readOnly' => $readOnly);
    }//end while loop

    $eventCalendarArray['events'] = $events;
    //var_dump($eventCalendarArray);
    echo json_encode($eventCalendarArray);
?>
