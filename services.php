<?php
include_once "Database.php";
include_once "Operations.php";

class services extends Database implements Operations
{
    var //$eventID,
        $serviceName,
        $servicePrice,
        $serviceStatus,
        $servicePaymentWay,
        $servicePaymentPercentage;

    // function getEventID()
    // {
    //     return $this->eventID;
    // }
    // function setEventID($id)
    // {
    //     $this->eventID = $id;
    // }

    function getServiceName()
    {
        return $this->serviceName;
    }
    function setServiceName($name)
    {
        $this->serviceName = $name;
    }

    function getServicePrice()
    {
        return $this->servicePrice;
    }
    function setServicePrice($price)
    {
        $this->servicePrice = $price;
    }

    function getServiceStatus()
    {
        return $this->serviceStatus;
    }
    function setServiceStatus($status)
    {
        $this->serviceStatus = $status;
    }

    function getServicePaymentWay()
    {
        return $this->servicePaymentWay;
    }
    function setServicePaymentWay($paymentWay)
    {
        $this->servicePaymentWay = $paymentWay;
    }

    function getServicePaymentPercentage()
    {
        return $this->servicePaymentPercentage;
    }
    function setServicePaymentPercentage($paymentPercentage)
    {
        $this->servicePaymentPercentage = $paymentPercentage;
    }

    public function Add()
    { }
    public function Update()
    { }
    public function Delete()
    { }
    public function Search()
    {
        $serviceRow = parent::RUNSearch("Select * From Services");
        return $serviceRow;
    }
    
    // function searchByCategory(){
    //     return parent::RUNSearch("Select * From Services where Category_ID='" . $this->getUserTaxRecord() . "'")
    // }
}
