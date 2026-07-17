<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Finalize a compra do {{ $product['name'] }} (Raio-X do CPF) | Grupo Candle">
    <meta name="robots" content="noindex, follow">
    <meta name="theme-color" content="#0a1941">
    <title>Checkout | {{ $product['name'] }} | Grupo Candle</title>
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('images/lp/favicon.png') }}" type="image/png" sizes="any">
    <link rel="icon" href="{{ asset('images/lp/icons/favicon-32.png') }}" type="image/png" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('images/lp/icons/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bricolage-grotesque:600,700,800|figtree:400,500,600,700" rel="stylesheet">
    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
</head>
<body class="page-checkout">
    <a class="skip-link" href="#checkout">Ir para o checkout</a>

    <header class="nav nav--solid">
        <div class="nav__shell">
            <div class="nav__bar">
                <a class="nav__brand" href="{{ route('home') }}" aria-label="Grupo Candle, voltar ao início">
                    <img
                        class="nav__logo"
                        src="{{ asset('images/lp/logo-candle.png') }}"
                        srcset="{{ asset('images/lp/icons/logo-nav.png') }} 256w, {{ asset('images/lp/logo-candle.png') }} 2400w"
                        sizes="72px"
                        alt="Logo Grupo Candle"
                        width="256"
                        height="256"
                        decoding="async"
                    >
                </a>
                <a class="nav__cta" href="{{ route('home') }}">Voltar à oferta</a>
            </div>
        </div>
    </header>

    <main id="checkout" class="checkout">
        <div class="checkout__inner">
            <header class="checkout__intro">
                <p class="section__label">Checkout</p>
                <h1 class="checkout__title">{{ $product['name'] }}</h1>
                <p class="checkout__subtitle">{{ $product['subtitle'] }}</p>
                <p class="checkout__lead">{{ $product['description'] }}</p>
            </header>

            <div class="checkout__layout">
                <aside class="checkout__summary" aria-labelledby="checkout-summary-title">
                    <h2 class="checkout__summary-title" id="checkout-summary-title">Resumo do pedido</h2>
                    <p class="checkout__product">
                        <strong>Raio-X do CPF</strong>
                        <span>Diagnóstico das 3 camadas: Cadastro, Comportamento e Capacidade</span>
                    </p>
                    <ul class="checkout__includes">
                        <li>Causa real da recusa de crédito</li>
                        <li>Ordem de prioridade do que resolver</li>
                        <li>Prazo estimado e indicação de caminho</li>
                        <li>Ou a confirmação de que você não precisa contratar nada</li>
                    </ul>
                    <div class="checkout__price-box">
                        <p class="checkout__price-label">Investimento</p>
                        <p class="checkout__price">R$ [valor]</p>
                        <p class="checkout__price-note">ou [X]x de R$ [valor]</p>
                    </div>
                </aside>

                <section class="checkout__panel" aria-labelledby="checkout-pay-title">
                    <h2 class="checkout__panel-title" id="checkout-pay-title">Pagamento</h2>

                    @if ($gateway)
                        <p class="checkout__ready">
                            Gateway configurado: <strong>{{ $gateway }}</strong>
                        </p>
                        <p class="checkout__hint">A integração de cobrança será exibida aqui.</p>
                    @else
                        <div class="checkout__status" role="status">
                            <span class="checkout__status-dot" aria-hidden="true"></span>
                            <div>
                                <p class="checkout__status-title">Pagamento em preparação</p>
                                <p class="checkout__status-text">
                                    Estamos finalizando a integração do gateway. Em breve você conclui a compra
                                    direto nesta página, com Pix, cartão ou boleto.
                                </p>
                            </div>
                        </div>
                    @endif

                    <div class="checkout__actions">
                        <a class="btn btn--flame btn--block" href="{{ route('home') }}#investimento">
                            Voltar e ver o investimento
                        </a>
                        <a class="checkout__secondary" href="{{ route('home') }}">Ir para a página inicial</a>
                    </div>
                </section>
            </div>

            <p class="checkout__trust">
                Análise no sistema real. Não é print, não é PDF genérico, não é consulta de terceiro.
            </p>
        </div>
    </main>
</body>
</html>
