# Paytm Payments Gateway in PHP
I have added store response in database.
 
 For Original Source, [Refer](https://github.com/Paytm-Payments/Paytm_Web_Sample_Kit_PHP)

## Information

This product is extracted and redesigned from Paytm Source Code of Web Payments Gateway. The Software can be used by Individual Merchants to accept payments using their own website. While we suggest you to use Paytm Payment Links for transactions. This software is free and can be modified to fit Business needs.I have added store response in database if you wana check go to `response.php`

## Usage

* Open `index.html` and Fill the Form.

## Custom Server

* For Deploying to Shared or Dedicated Hosting (with PHP Support).
* Open lib/config.php and Replace with this code.
    ```php
    <?php
    /*
    - Use PAYTM_ENVIRONMENT as 'PROD' if you wanted to do transaction in production environment else 'TEST' for doing transaction in testing environment.
    - Change the value of PAYTM_MERCHANT_KEY constant with details received from Paytm.
    - Change the value of PAYTM_MERCHANT_MID constant with details received from Paytm.
    - Change the value of PAYTM_MERCHANT_WEBSITE constant with details received from Paytm.
    - Above details will be different for testing and production environment.
    */
    
    define('PAYTM_ENVIRONMENT', 'TEST'); // PROD
    define('PAYTM_MERCHANT_KEY', 'XXXXXXXXXXXXXXX'); //Change this constant's value with Merchant key received from Paytm.
    define('PAYTM_MERCHANT_MID', 'XXXXXXXXXXXXXXX'); //Change this constant's value with MID (Merchant ID) received from Paytm.
    define('PAYTM_MERCHANT_WEBSITE', 'DEFAULT'); //Change this constant's value with Website name received from Paytm.
    
    $PAYTM_STATUS_QUERY_NEW_URL = 'https://securegw-stage.paytm.in/order/status';
    $PAYTM_TXN_URL = 'https://securegw-stage.paytm.in/order/process';
    if (PAYTM_ENVIRONMENT == 'PROD') {
        $PAYTM_STATUS_QUERY_NEW_URL = 'https://securegw.paytm.in/merchant-status/getTxnStatus';
        $PAYTM_TXN_URL = 'https://securegw.paytm.in/theia/processTransaction';
    }
    
    define('PAYTM_REFUND_URL', '');
    define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
    define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
    define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
    ?>
    ```

* Replace TEST with PROD for Production Use.
* Merchant Key and Merchant MID with Required Data from https://dashboard.paytm.com/next/apikeys
* Replace Merchant Website from Paytm Site (Default is WEBSITE)

![API KEYS](https://raw.githubusercontent.com/ParveenBhadooOfficial/PaytmPaymentsGatewayPHP/master/images/apikeys.png)

