<?php
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
            $this->setReadOnly($readOnly)
        }

        public function setStartTime(){

        }

        public function setEndTime(){
          
        }

    }//end class
?>
