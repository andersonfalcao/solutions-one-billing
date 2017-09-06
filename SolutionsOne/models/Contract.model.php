<?php

class ContractDataModel{
    
    private $MerchantKey;
    private $ContractMode;
    private $PaymentMode;
    private $Frequency;
    private $Value;
    private $ValueTotal;
    private $CurrencyCode;
    private $FirstInstallmentValue;
    private $NumberOfInstallments;
    private $DuoExpiration;
    private $StartDate;
    private $FinishDate;
    private $PaymentDate;
    private $OurCode;
    private $Infinite = false;
    private $AutoRenew = false;
    private $NumberRenew = 0;
    private $Customer;
    private $Payers;
    private $Complementary = null;
    private static $instance;
    private $requiredFields = array(
        'MerchantKey', 
        'ContractMode', 
        'PaymentMode', 
        'Frequency', 
        'Value', 
        'ValueTotal', 
        'CurrencyCode', 
        'NumberOfInstallments', 
        'DuoExpiratio',
        'StartDate',
        'FinishDate',
        'PaymentDate',
        'Customer'
    );

    public function __constructor( $model ){
        self::$instance =& $this;
    }

    /*
        Check if exists a property on this class
        @property [ String ] ( Required )
    */
    private function isValidProperty($property){
        return property_exists('ContractModel', $property );
    }

    /*
        Set a new value in a valid property on model
        @property [ String ] ( Required )
        @value [ String ] ( Requried )
    */
    public function set($property, $value){
        try{
            if(!$property) 
                throw new Exception("The property param is required");

            if(!$this->isValidProperty($property)) 
                throw new Exception("Invalid property on Contract Model");
            
            $this->$property = $value;
            return $this;

        }catch(Exception $message){
            echo $message;
        }
    }

    public function isValidContractModel(){
        try{
            $errors = array();
            
            foreach( get_object_vars($this) as $property => $value ){
                if( in_array( $property , $this->requiredFields ) && $this->$property == "" )
                    array_push( $errors, array('property'=> $property, 'message'=> 'The field ' . $property . ' is required' ) );
            }
            
            if( count($errors) > 0 )
                throw new Exception( json_encode( array('fields_required' => $errors) ) );

            return true;
            
        }catch(Exception $exception){
            return $exception->getMessage();
        }
    }
}