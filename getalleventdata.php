<?php
    require_once 'classes/EventCalendar.php';
    $eventCalendarList = EventCalendar::getAllEventCalendars();

    $events = array();
    $eventCalendarArray = array();

    while($eventCalendarRow = mysql_fetch_object($eventCalendarList)){
      $id = $eventCalendarRow->id;
      $start = $eventCalendarRow->start_time;
      $startTimestamp = strtotime($start);
      $startTimestampFormatted = date("Y:m:d:h:i", $startTimestamp);
      //echo $startTimestampFormatted;
      //$startTimestampFormatted = date("D M d Y h : i : s", $startTimestamp);
      //$startTimestampFormatted .= " GMT-0500 (EST)";
      $end = $eventCalendarRow->end_time;
      $endTimestamp = strtotime($end);
      $endTimestampFormatted = date("Y:m:d:h:i", $endTimestamp);
      //$endTimestampFormatted .= " GMT-0500 (EST)";
      $title = $eventCalendarRow->title;
      $body = $eventCalendarRow->event_description;
      $readOnly = $eventCalendarRow->read_only;
      $events[] = array('id' => $id, 'start' => $startTimestampFormatted, 'end' => $endTimestampFormatted, 'title' => $title);//, 'body' => $body, 'readOnly' => $readOnly);
    }//end while loop

    $eventCalendarArray['events'] = $events;
    //var_dump($eventCalendarArray);
    echo json_encode($eventCalendarArray);
?>
