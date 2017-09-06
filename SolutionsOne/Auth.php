<?php

class Auth{
    
    private $username;
    private $password;

    public function __constructor($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function success(){
        var_dump( $this->username );
    }
}

/*  exit;


    $model = array(
        "MerchantKey" => "641d7e8d6865e711a96be239fa066f1b",
        "ContractMode" => "Recurrent",
        "PaymentMode" => "Credit",
        "Frequency" => "Monthly",
        "Value" => 0.20,
        "ValueTotal" => 2.00,
        "CurrencyCode" => "986",
        "FirstInstallmentValue" => 0.21,
        "NumberOfInstallments" => 12,
        "DuoExpiration" => 10,
        "StartDate" => "2017-09-05T00:00:00.000-03:00",
        "FinishDate" => "2018-09-05T00:00:00.000-03:00",
        "PaymentDate" => "2017-09-05T00:00:00.000-03:00",
        "OurCode" => "20170903Sone01",
        "Infinite" => false,
        "AutoRenew" => false,
        "NumberRenew" => 0,
        "Customer" => array(
            "Name" => "Moreira Moreirinha",
            "Document" => "28676011699",
            "DocumentType" => "CPF",
            "Birthdate" => "1982-11-11T00:00:00.000-03:00",
            "Gender" => "M",
            "Address" => "Av Central do Brasil",
            "Number" => "8122",
            "Complement" => "1025",
            "City" => "Belo Horizonte",
            "PostalCode" => "32663310",
            "SubDivisionCode" => "BR-MG",
            "CountryCode" => "BRA",
            "Phone" => "5531988889898",
            "Phone2" => "5531988889898",
            "Email" => "randolf.brito@solutionsone.com.br",
            "Email2" => "thiago.nascimento@solutionsone.com.br",
            "Complementary" => null
        ),
        "Payers" => array(
            array(
                "Percent" => 100,
                "Name" => "Moreira Moreirinha",
                "Document" => "28676011699",
                "DocumentType" => "CPF",
                "Credit" => array(
                    "CardHolder" => "Moreira Moreirinha",
                    "CardNumber" => "4984319030571984",
                    "SecurityCode" => "391",
                    "Brand" => "Hipercard",
                    "CardInvoiceDay" => 10,
                    "CardBestBuyDay" => 10,
                    "CardExpiration" => "202111"
                )
            )
        ),
        "Complementary" => null
    );

    $headers = array(
        "Content-type: application/json",
        "Accept: text/json",
        "Authorization: Bearer AW7wNTRrXSbAg6IlgF96D1vmXkY5EAWUASE2yP9XrW_jy198NinoZRpRAfwI4V-g6C214GW4bbk2yuc8HYo1Gr95Kr8YnMKEbZMFB6M8heGvH4zMU5wCh5XwChFTVnULitY8RsFy8qMwWfjQCHiDG9Zq03Absm8gXjhX2VRNPFXNCAFCk1srwi7DI62_rjL7NO5FDy92WCMaVeavgiC5VN1WurIPERoOCpIx2WvNyptdWLbv-8KEaNPoTp4XdDpGuDtfwjB4ExyMzn1aPILHCE2LZlLZ-n0Faqvd1z8Ywfa9753K-j6VKpxPbfMIabJwYqPvZU0VlvlgYQQhpr1WLXTG440MS7XihpDmkmzX2c9MWlb63FiRY4wI7uEM62S9-dNB2658wwc0ezAjcPzZLmVS4Oq9n4CcVJIrOZIkx_H23wcAsKMQdKO5Yy-bszsljwrwjF6UcZvmngE6KJeYubkej79h4szp_Fv0XsnVZWNRPcHaSK6a60Jr89HKJISppEdhewKyX2U0YT6CNZV4jg"
    );

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $serviceUrl);
    curl_setopt($curl, CURLOPT_POST, count($model));
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($model));
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_SSLVERSION, 6);

    $result = curl_exec($curl); */



    /*
    require_once( __DIR__ . '/SolutionsOne/Billing.php');

    function callback_success( $success ){
        echo $success;
    }

    function callback_error( $errors ){
        var_dump($errors);
    } 


    $model = array(
        "MerchantKey" => "641d7e8d6865e711a96be239fa066f1b",
        "ContractMode" => "Recurrent",
        "PaymentMode" => "Credit",
        "Frequency" => "Monthly",
        "Value" => 0.20,
        "ValueTotal" => 2.00,
        "CurrencyCode" => "986",
        "FirstInstallmentValue" => 0.21,
        "NumberOfInstallments" => 12,
        "DuoExpiration" => 10,
        "StartDate" => "2017-09-05T00:00:00.000-03:00",
        "FinishDate" => "2018-09-05T00:00:00.000-03:00",
        "PaymentDate" => "2017-09-05T00:00:00.000-03:00",
        "OurCode" => "20170903Sone01",
        "Infinite" => false,
        "AutoRenew" => false,
        "NumberRenew" => 0,
        "Customer" => array(
            "Name" => "Moreira Moreirinha",
            "Document" => "28676011699",
            "DocumentType" => "CPF",
            "Birthdate" => "1982-11-11T00:00:00.000-03:00",
            "Gender" => "M",
            "Address" => "Av Central do Brasil",
            "Number" => "8122",
            "Complement" => "1025",
            "City" => "Belo Horizonte",
            "PostalCode" => "32663310",
            "SubDivisionCode" => "BR-MG",
            "CountryCode" => "BRA",
            "Phone" => "5531988889898",
            "Phone2" => "5531988889898",
            "Email" => "randolf.brito@solutionsone.com.br",
            "Email2" => "thiago.nascimento@solutionsone.com.br",
            "Complementary" => null
        ),
        "Payers" => array(
            array(
                "Percent" => 100,
                "Name" => "Moreira Moreirinha",
                "Document" => "28676011699",
                "DocumentType" => "CPF",
                "Credit" => array(
                    "CardHolder" => "Moreira Moreirinha",
                    "CardNumber" => "4984319030571984",
                    "SecurityCode" => "391",
                    "Brand" => "Hipercard",
                    "CardInvoiceDay" => 10,
                    "CardBestBuyDay" => 10,
                    "CardExpiration" => "202111"
                )
            )
        ),
        "Complementary" => null
    );


    if( class_exists('Billing') )
        Billing::contract( $model , 'callback_success', 'callback_error');
    */