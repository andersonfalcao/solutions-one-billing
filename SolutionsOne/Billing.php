<?php

require_once( __DIR__ .'/models/Contract.model.php');

class Billing{

    private static $instance;
    private $error;
    private $success;
    private $callbackSuccess;
    private $callbackFailure;

    public function __constructor(){
        self::$instance =& $this;
    }

    /*
     * Contract
     * Execute the contract flow, validating all required resources.
     * @model [ Array ] ( Required ) - The contract model
     * @callbackSuccess [ Function ] ( Required ) - Callback on success result
     * @callbackFailure [ Function ] ( Required ) - Callback on failure result
     */
    static public function contract( $model, $callbackSuccess, $callbackFailure ){

        self::checkIsValidCallback('callbackSuccess',  $callbackSuccess );
        self::checkIsValidCallback('callbackFailure',  $callbackFailure );

        self::validateContractModel( $model );
        
        //call_user_func( self::$instance->callbackFailure );
    }

    /* CheckIsValidCallback
     * Check if callback is a valid function and set the iguals property on class.
     * @property [ String ] ( Required )
     * @callback [ Function ] ( Required )
     */
    private function checkIsValidCallback( $property,  $callback ){
        try{
            if(!is_callable( $callback )) 
                throw new Exception("Callback " . $callback . " is not a valid function");

            self::$instance->$property = $callback;

        }catch(Exception $message){
            echo $message->getMessage();
            exit;
        }
    }

    /* ValidateContractModel
     *
     */
    private function validateContractModel( $model ){
        
        try{

            $contract = new ContractDataModel( $model );
            
            $isValidModel = $contract->isValidContractModel();

            if( $isValidModel !== true )
                throw new Exception( $isValidModel );
            
            call_user_func(self::$instance->callbackSuccess,  'ok' );

        }catch(Exception $exception){
            call_user_func(self::$instance->callbackFailure, json_decode($exception->getMessage()));
        }
    }
}