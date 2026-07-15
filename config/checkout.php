<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Gateway de pagamento
    |--------------------------------------------------------------------------
    |
    | Ainda não definido. Quando escolher (Stripe, Mercado Pago, Asaas, etc.),
    | atualize este valor e implemente a integração em CheckoutController.
    |
    | null = checkout em modo preparação (sem cobrança ativa)
    |
    */

    'gateway' => env('PAYMENT_GATEWAY'),

    'product_slug' => 'diagnostico-financeiro',

];
