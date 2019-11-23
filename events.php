<?php
include_once "Database.php";
include_once "Operations.php";

class events extends Database implements Operations
{
    var //$eventID,
        $eventName,
        $eventType,
        $eventDetails,
        $eventTotal,
        $eventValue,
        $eventPercentage;//= $eventValue * 100 / $eventTotal;

    // function getEventID()
    // {
    //     return $this->eventID;
    // }
    // function setEventID($id)
    // {
    //     $this->eventID = $id;
    // }

    function getEventName()
    {
        return $this->eventName;
    }
    function setEventName($name)
    {
        $this->eventName = $name;
    }

    function getEventType()
    {
        return $this->eventType;
    }
    function setEventType($type)
    {
        $this->eventType = $type;
    }

    function getEventDetails()
    {
        return $this->eventDetails;
    }
    function setEventDetails($details)
    {
        $this->eventDetails = $details;
    }

    function getEventTotal()
    {
        return $this->eventTotal;
    }
    function setEventTotal($total)
    {
        $this->eventTotal = $total;
    }

    function getEventValue()
    {
        return $this->eventValue;
    }
    function setEventValue($value)
    {
        $this->eventValue = $value;
    }

    function getEventPercentage()
    {
        return $this->eventPercentage;
    }
    function setEventPercentage($percentage)
    {
        $this->eventPercentage = $percentage;
    }

    public function Add()
    { }
    public function Update()
    { }
    public function Delete()
    { }
    public function Search()
    {
        $eventRow = parent::RUNSearch("Select * From Events");
        return $eventRow;
    }

    function searchUser(){
        return parent::RUNSearch("Select Username from users where post.PostID");
    }
}