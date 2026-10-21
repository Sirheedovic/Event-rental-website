<?php

return [

    /*
    |--------------------------------------------------------------------------
    | WhatsApp Number
    |--------------------------------------------------------------------------
    |
    | The number every WhatsApp button and quote request is sent to. Set
    | WHATSAPP_NUMBER in .env to change it; any format works ("+234 808 600
    | 8207", "2348086008207") because everything except digits is stripped.
    | Include the country code and drop the leading 0 of the local number.
    | If WHATSAPP_NUMBER is missing, blank or has no digits, the default
    | below is used so the buttons never open WhatsApp without a recipient.
    |
    */

    'whatsapp_number' => preg_replace('/\D/', '', (string) env('WHATSAPP_NUMBER')) ?: '2348086008207',

];
