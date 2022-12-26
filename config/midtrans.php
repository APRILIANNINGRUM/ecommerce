<?php 

return [

    /*
    |--------------------------------------------------------------------------
    | Midtrans Configuration
    |--------------------------------------------------------------------------
    |
    | This is the default configuration for Midtrans PHP SDK
    | which you can use to change the default behavior of the SDK.
    |
    | For more detail about the available configuration, visit:
    |
    |
    */
    //merchant id from env
    'merchant_id' => env('MIDTRANS_MERCHANT_ID'),
    //server key from env
    'server_key' => env('MIDTRANS_SERVER_KEY'),
    //client key from env
    'client_key' => env('MIDTRANS_CLIENT_KEY'),
    //set true for production
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    //set true for 3ds transaction
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
    //set array for allowed payment methods
];

?>