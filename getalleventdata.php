<?php
    //header("content-type:application/json");

    $events = array();
    $response = array();

    /*$events = array(
      array(
        "first_name" => "Darian",
        "last_name" => "Brown",
        "age" => "28",
        "email" => "darianbr@example.com"
      ),
      array(
        "first_name" => "John",
        "last_name" => "Doe",
        "age" => "47",
        "email" => "john_doe@example.com"
      )
    );

    $events[] = array(
      "first_name" => "Darian",
      "last_name" => "Brown",
      "age" => "28",
      "email" => "darianbr@example.com"
    );

    $events[] = array(
      "first_name" => "John",
      "last_name" => "Doe",
      "age" => "47",
      "email" => "john_doe@example.com"
    );

    $response['events'] = $events;

    //$eventCalendarArray['events'] = $events;

    echo json_encode($response);*/

    require_once 'classes/EventCalendar.php';
    $eventCalendarList = null;
    $eventCalendarList = EventCalendar::getAllEventCalendars();

    $events = array();
    $response = array();

    while($eventCalendarRow = mysql_fetch_array($eventCalendarList)){
      $id = $eventCalendarRow['id'];
      $start = $eventCalendarRow['start_time'];
      $end = $eventCalendarRow['end_time'];
      $title = $eventCalendarRow['title'];
      $body = $eventCalendarRow['event_description'];
      $readOnly = $eventCalendarRow['read_only'];

      $events[] = array('id'=> $id, 'title'=> $title, 'start'=> $start, 'end'=> $end, 'body'=> $body, 'readOnly'=> $readOnly);
    }//end while loop

    $response['events'] = $events;
    echo json_encode($response, JSON_PRETTY_PRINT);
?>
