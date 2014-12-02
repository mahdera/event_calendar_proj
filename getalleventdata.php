<?php
    require_once 'classes/EventCalendar.php';
    $eventCalendarList = null;
    $eventCalendarList = EventCalendar::getAllEventCalendars();

    $events = array();

    while( $r = mysql_fetch_assoc($eventCalendarList) ){
        var_dump($r);
        $events = $r;
    }//end while loop

    echo json_encode($events);

    /*$eventCalendarArray = array();

    while($eventCalendarRow = mysql_fetch_array($eventCalendarList)){
      $id = $eventCalendarRow['id'];
      $start = $eventCalendarRow['start_time'];
      $end = $eventCalendarRow['end_time;'];
      $title = $eventCalendarRow['title'];
      $body = $eventCalendarRow['event_description'];
      $readOnly = $eventCalendarRow['read_only'];

      $events[] = array('id'=> $id, 'title'=> $title, 'start'=> $start, 'end'=> $end, 'body'=> $body, 'readOnly'=> $readOnly);
    }//end while loop

    $eventCalendarArray['events'] = $events;

    echo json_encode($eventCalendarArray);*/

?>
