<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CheckoutController extends Controller
{
    /**
     * Página de checkout do Diagnóstico Financeiro.
     * Gateway de pagamento será acoplado aqui quando definido.
     */
    public function show(): View
    {
        return view('checkout', [
            'product' => [
                'name' => 'Diagnóstico Financeiro',
                'subtitle' => 'Raio-X do CPF, Grupo Candle',
                'description' => 'Análise completa da sua situação financeira para descobrir o motivo real das recusas de crédito.',
            ],
            'gateway' => config('checkout.gateway'),
        ]);
    }
}
