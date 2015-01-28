<?php
    require_once 'DBConnection.php';
    class EventCalendar{
        private $id;
        private $startTime;
        private $endTime;
        private $title;
        private $eventDescription;
        private $readOnly;

        public function  __construct($startTime, $endTime, $title, $eventDescription, $readOnly){
            $this->setStartTime($startTime);
            $this->setEndTime($endTime);
            $this->setTitle($title);
            $this->setEventDescription($eventDescription);
            $this->setReadOnly($readOnly);
        }

        public function setStartTime($startTime){
            $this->startTime = $startTime;
        }

        public function setEndTime($endTime){
            $this->endTime = $endTime;
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function setEventDescription($eventDescription){
            $this->eventDescription = $eventDescription;
        }

        public function setReadOnly($readOnly){
            $this->readOnly = $readOnly;
        }

        public function save(){
            try{
                $query = "insert into tbl_event_calendar values(0, '$this->startTime', '$this->endTime', '$this->title', '$this->eventDescription', $this->readOnly)";
                echo $query;
                DBConnection::save($query);
            }catch(Exception $ex){
                $ex->getMessage();
            }
        }

        public static function update($eventCalendarObj){
            try{
                $query = "update tbl_event_calendar set start_time = '$eventCalendarObj->startTiem', " .
                "end_time = '$eventCalendarObj->endTime', title = '$eventCalendarObj->title', event_description = '$eventCalendarObj->eventDescription', " .
                "read_only = $eventCalendarObj->readOnly where id = $eventCalendarObj->id";
                DBConnection::save($query);
            }catch(Exception $ex){
                $ex->getMessage();
            }
        }

        public static function delete($id){
            try{
                $query = "delete from tbl_event_calendar where id = $id";
                DBConnection::save($query);
            }catch(Exception $ex){
                $ex->getMessage();
            }
        }

        public static function getAllEventCalendars(){
            try{
                $query = "select * from tbl_event_calendar order by id desc";
                $result = DBConnection::read($query);
                return $result;
            }catch(Exception $ex){
                $ex->getMessage();
            }
        }

        public static function getEventCalendar($id){
            try{
                $query = "select * from tbl_event_calendar where id = $id";
                $result = DBConnection::read($query);
                $resultRow = mysql_fetch_object($result);
                return $resultRow;
            }catch(Exception $ex){
                $ex->getMessage();
            }
        }

    }//end class
?>
