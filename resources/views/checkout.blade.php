<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Checkout do {{ $product['name'] }} | Grupo Candle">
    <title>Checkout | {{ $product['name'] }} | Grupo Candle</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bricolage-grotesque:600,700,800|figtree:400,500,600,700" rel="stylesheet">
    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
</head>
<body>
    <a class="skip-link" href="#checkout">Ir para o checkout</a>

    <header class="nav nav--solid">
        <a class="nav__brand" href="{{ route('home') }}">Grupo Candle</a>
        <a class="nav__cta" href="{{ route('home') }}">Voltar</a>
    </header>

    <main id="checkout" class="checkout">
        <div class="checkout__inner">
            <p class="section__label">Checkout</p>
            <h1 class="checkout__title">{{ $product['name'] }}</h1>
            <p class="checkout__subtitle">{{ $product['subtitle'] }}</p>
            <p class="section__text">{{ $product['description'] }}</p>

            <div class="checkout__panel">
                @if ($gateway)
                    {{-- Integração do gateway será renderizada aqui --}}
                    <p class="checkout__ready">Gateway configurado: <strong>{{ $gateway }}</strong></p>
                @else
                    <p class="checkout__pending">
                        O pagamento online será liberado em breve. Estamos finalizando a integração do gateway.
                    </p>
                    <p class="form__hint" style="color: var(--ink-soft); margin-top: 0.75rem;">
                        Enquanto isso, deixe seus dados na landing ou fale com a equipe do Grupo Candle.
                    </p>
                    <div class="checkout__actions">
                        <a class="btn btn--flame" href="{{ route('home') }}#diagnostico">Deixar meu contato</a>
                        <a class="btn btn--outline" href="{{ route('home') }}">Voltar para a página</a>
                    </div>
                @endif
            </div>
        </div>
    </main>
</body>
</html>
