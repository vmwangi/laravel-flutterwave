<?php

namespace Laravel\Flutterwave;

use Laravel\Flutterwave\RaveImplementAbstract;

class Bvn extends RaveImplementAbstract
{
    public function verifyBVN($bvn)
    {
        //set the payment handler
        $this->rave->eventHandler($this->getEventHandler())
        ->setEndPoint("v3/kyc/bvns");
        //returns the value from the results
        return $this->rave->bvn($bvn);
    }

    public function initiateBVNConsent($array)
    {

        if (!isset($array['bvn'])) {
            throw new \Exception("Missing bvn Parameter in the payload", 1);
        }

        if (!isset($array['firstname'])) {
            throw new \Exception("Missing firstname Parameter in the payload", 1);
        }

        if (!isset($array['lastname'])) {
            throw new \Exception("Missing lastname Parameter in the payload", 1);
        }

        //set the payment handler
        $this->rave->eventHandler($this->getEventHandler())
        ->setEndPoint("v3/bvn/verifications");
        //returns the value from the results
        return $this->rave->initiateBVNConsent($array);
    }


    public function verifyBVNConsent($reference)
    {
        //set the payment handler
        $this->rave->eventHandler($this->getEventHandler())
        ->setEndPoint("v3/bvn/verifications/");
        //returns the value from the results
        return $this->rave->verifyBVNConsent($reference);
    }

    
}
