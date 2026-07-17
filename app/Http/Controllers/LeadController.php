<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Throwable;

class LeadController extends Controller
{
    public function index(): View
    {
        return view('landing');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:160'],
            'message' => ['nullable', 'string', 'max:2000'],
        ], [
            'name.required' => 'Informe o seu nome.',
            'phone.required' => 'Informe o WhatsApp.',
            'email.required' => 'Informe o e-mail.',
            'email.email' => 'Informe um e-mail válido.',
        ]);

        try {
            Lead::create($validated);
        } catch (Throwable $e) {
            // Na Vercel (serverless) não há SQLite persistente; o lead fica no log até haver um banco externo.
            Log::warning('Lead recebido sem persistência em banco', [
                'lead' => $validated,
                'error' => $e->getMessage(),
            ]);
        }

        return redirect()
            ->route('home')
            ->with('success', 'Recebemos o seu pedido! Em breve o Grupo Candle entra em contato.')
            ->withFragment('contato');
    }
}

