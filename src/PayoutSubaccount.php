<?php
namespace Laravel\Flutterwave;

use Laravel\Flutterwave\RaveImplementAbstract;

class PayoutSubaccount extends RaveImplementAbstract
{
    public function createSubaccount($array)
    {
        //set the payment handler 
        $this->rave->eventHandler($this->getEventHandler())
        //set the endpoint for the api call
        ->setEndPoint("v3/payout-subaccounts");
        //returns the value from the results`
        return $this->rave->createSubaccount($array);
    }

    public function getSubaccounts()
    {
        //set the payment handler
        $this->rave->eventHandler($this->getEventHandler())
        //set the endpoint for the api call
        ->setEndPoint("v3/payout-subaccounts");
        //returns the value from the results
        return $this->rave->getSubaccounts();
    }

    public function fetchSubaccount($array)
    {
        if (!isset($array['id'])) {
            throw new \Exception("Missing id Parameter in the payload", 1);
        }

        //set the payment handler
        $this->rave->eventHandler($this->getEventHandler())
        //set the endpoint for the api call
        ->setEndPoint("v3/payout-subaccounts/".$array['id']);
        //returns the value from the results
        return $this->rave->fetchSubaccount();
    }
    public function fetchSubaccountBalance($array)
    {
        if (!isset($array['id'])) {
            throw new \Exception("Missing id Parameter in the payload", 1);
        }

        //set the payment handler
        $this->rave->eventHandler($this->getEventHandler())
        //set the endpoint for the api call
        ->setEndPoint("v3/payout-subaccounts/".$array['id']);
        //returns the value from the results
        return $this->rave->fetchSubaccount();
    }

    public function updateSubaccount($array)
    {
        if (!isset($array['id'])) {
            throw new \Exception("Missing id Parameter in the payload", 1);
        }

        //set the payment handler
        $this->rave->eventHandler($this->getEventHandler())
        //set the endpoint for the api call
        ->setEndPoint("v3/payout-subaccounts/".$array['id']);
        //returns the value from the results
        return $this->rave->updateSubaccount($array);
    }

    public function deleteSubaccount($array)
    {
        if (!isset($array['id'])) {
            throw new \Exception("Missing id Parameter in the payload", 1);
        }
        //set the payment handler
        $this->rave->eventHandler($this->getEventHandler())
        //set the endpoint for the api call
        ->setEndPoint("v3/payout-subaccounts/".$array['id']);
        //returns the value from the results
        return $this->rave->deleteSubaccount();
    }

    public function getPayoutTransactions($array)
    {
        if (!isset($array['id'] )) {
            throw new \Exception("Missing ac_ref Parameter in the payload", 1);
        }

        //set the payment handler
        $this->rave->eventHandler($this->getEventHandler())
        //set the endpoint for the api call
        ->setEndPoint("v3/payout-subaccounts/" .$array['id'] . "/transactions/");
        //returns the value from the results
        return $this->rave->getAllTransactions();
    }
    
    public function getSubaccountBalance($array)
    {
        if (!isset($array['id'] )) {
            throw new \Exception("Missing ac_ref Parameter in the payload", 1);
        }

        //set the payment handler
        $this->rave->eventHandler($this->getEventHandler())
        //set the endpoint for the api call
        ->setEndPoint("v3/payout-subaccounts/" .$array['id'] . "/balances/");
        //returns the value from the results
        return $this->rave->getSubaccountBalance();
    }
}