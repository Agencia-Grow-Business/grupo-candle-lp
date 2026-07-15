<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grupo Candle: Diagnóstico Financeiro (Raio-X do CPF). Descubra o motivo real das recusas de crédito antes de contratar qualquer serviço.">
    <title>Grupo Candle | Diagnóstico Financeiro: Raio-X do CPF</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bricolage-grotesque:600,700,800|figtree:400,500,600,700" rel="stylesheet">
    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
</head>
<body>
    <a class="skip-link" href="#conteudo">Ir para o conteúdo</a>

    <header class="nav">
        <a class="nav__brand" href="#topo">Grupo Candle</a>
        <a class="nav__cta btn btn--flame btn--sm" href="{{ route('checkout.show') }}">
            <span class="nav__cta-full">Comprar diagnóstico</span>
            <span class="nav__cta-short">Comprar</span>
        </a>
    </header>

    <main id="conteudo">
        {{-- ================= HERO ================= --}}
        <section class="hero" id="topo" aria-label="Apresentação">
            <div class="hero__media" aria-hidden="true">
                <div class="hero__mesh"></div>
                <div class="hero__grain"></div>
            </div>
            <div class="hero__scrim" aria-hidden="true"></div>

            <div class="hero__shell">
                <div class="hero__visual" aria-hidden="true">
                    <svg class="hero__svg" viewBox="0 0 420 520" xmlns="http://www.w3.org/2000/svg" role="presentation">
                        <defs>
                            <linearGradient id="docShine" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#ffffff" stop-opacity="0.14"/>
                                <stop offset="55%" stop-color="#ffffff" stop-opacity="0.04"/>
                                <stop offset="100%" stop-color="#c98a22" stop-opacity="0.08"/>
                            </linearGradient>
                            <linearGradient id="scanBeam" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#e0b25a" stop-opacity="0"/>
                                <stop offset="45%" stop-color="#e0b25a" stop-opacity="0.7"/>
                                <stop offset="55%" stop-color="#f0c878" stop-opacity="0.35"/>
                                <stop offset="100%" stop-color="#e0b25a" stop-opacity="0"/>
                            </linearGradient>
                            <radialGradient id="lensGlow" cx="50%" cy="50%" r="50%">
                                <stop offset="0%" stop-color="#e0b25a" stop-opacity="0.28"/>
                                <stop offset="70%" stop-color="#218a8e" stop-opacity="0.1"/>
                                <stop offset="100%" stop-color="#218a8e" stop-opacity="0"/>
                            </radialGradient>
                            <filter id="softBlur" x="-20%" y="-20%" width="140%" height="140%">
                                <feGaussianBlur stdDeviation="6"/>
                            </filter>
                        </defs>

                        <circle class="scan-ring" cx="210" cy="250" r="198" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="1"/>
                        <circle class="scan-ring scan-ring--delayed" cx="210" cy="250" r="168" fill="none" stroke="rgba(224,178,90,0.12)" stroke-width="1" stroke-dasharray="4 10"/>
                        <circle cx="210" cy="250" r="130" fill="url(#lensGlow)" filter="url(#softBlur)" opacity="0.75"/>

                        <g stroke="rgba(255,255,255,0.07)" stroke-width="1">
                            <path d="M48 70 H372 M48 120 H372 M48 170 H372 M48 220 H372 M48 270 H372 M48 320 H372 M48 370 H372 M48 420 H372"/>
                            <path d="M70 48 V472 M120 48 V472 M170 48 V472 M220 48 V472 M270 48 V472 M320 48 V472 M370 48 V472"/>
                        </g>

                        <g class="scan-doc">
                            <rect x="96" y="78" width="228" height="340" rx="22" fill="rgba(10,18,28,0.45)" stroke="rgba(255,255,255,0.22)" stroke-width="1.5"/>
                            <rect x="96" y="78" width="228" height="340" rx="22" fill="url(#docShine)"/>

                            <path d="M112 98 H132 M112 98 V118" fill="none" stroke="#e0b25a" stroke-width="2" stroke-linecap="round"/>
                            <path d="M308 98 H288 M308 98 V118" fill="none" stroke="#e0b25a" stroke-width="2" stroke-linecap="round"/>
                            <path d="M112 398 H132 M112 398 V378" fill="none" stroke="rgba(33,138,142,0.85)" stroke-width="2" stroke-linecap="round"/>
                            <path d="M308 398 H288 M308 398 V378" fill="none" stroke="rgba(33,138,142,0.85)" stroke-width="2" stroke-linecap="round"/>

                            <text x="120" y="118" fill="rgba(255,255,255,0.55)" font-family="Figtree, sans-serif" font-size="11" font-weight="600" letter-spacing="1.5">RAIO-X DO CPF</text>
                            <rect x="120" y="132" width="88" height="8" rx="2" fill="rgba(255,255,255,0.14)"/>
                            <rect x="120" y="148" width="160" height="6" rx="2" fill="rgba(255,255,255,0.08)"/>
                            <rect x="120" y="162" width="132" height="6" rx="2" fill="rgba(255,255,255,0.06)"/>

                            <g class="scan-pulse">
                                <circle cx="210" cy="248" r="54" fill="none" stroke="rgba(224,178,90,0.55)" stroke-width="2"/>
                                <circle cx="210" cy="248" r="36" fill="none" stroke="rgba(33,138,142,0.65)" stroke-width="1.5"/>
                                <circle cx="210" cy="248" r="6" fill="#e0b25a" opacity="0.9"/>
                                <path d="M210 182 V204 M210 292 V314 M144 248 H166 M254 248 H276" stroke="rgba(255,255,255,0.35)" stroke-width="1.5" stroke-linecap="round"/>
                            </g>

                            <g fill="rgba(255,255,255,0.18)">
                                <rect x="128" y="328" width="72" height="7" rx="2"/>
                                <rect x="212" y="328" width="96" height="7" rx="2" fill="rgba(224,178,90,0.35)"/>
                                <rect x="128" y="348" width="64" height="7" rx="2"/>
                                <rect x="204" y="348" width="104" height="7" rx="2" fill="rgba(33,138,142,0.4)"/>
                                <rect x="128" y="368" width="80" height="7" rx="2"/>
                                <rect x="220" y="368" width="88" height="7" rx="2"/>
                            </g>

                            <g font-family="Figtree, sans-serif" font-size="10" font-weight="700">
                                <rect x="120" y="388" width="74" height="20" rx="4" fill="rgba(33,138,142,0.28)" stroke="rgba(120,210,200,0.35)"/>
                                <text x="157" y="402" text-anchor="middle" fill="rgba(180,235,225,0.95)">SCORE</text>
                                <rect x="204" y="388" width="74" height="20" rx="4" fill="rgba(224,178,90,0.2)" stroke="rgba(224,178,90,0.4)"/>
                                <text x="241" y="402" text-anchor="middle" fill="rgba(240,200,120,0.95)">RATING</text>
                            </g>
                        </g>

                        <rect class="scan-line" x="96" y="90" width="228" height="56" fill="url(#scanBeam)" opacity="0.9"/>
                    </svg>
                </div>

                <div class="hero__content">
                    <p class="hero__kicker">
                        <span class="hero__kicker-line" aria-hidden="true"></span>
                        Diagnóstico Financeiro
                    </p>
                    <p class="hero__brand">Grupo Candle</p>
                    <h1 class="hero__title">Descubra por que o banco recusa o seu crédito</h1>
                    <p class="hero__lead">Raio-X do CPF: análise completa da sua situação financeira antes de qualquer solução.</p>

                    <p class="hero__meta">
                        <span>Score</span>
                        <span class="hero__meta-dot" aria-hidden="true"></span>
                        <span>Rating</span>
                        <span class="hero__meta-dot" aria-hidden="true"></span>
                        <span>Renda</span>
                        <span class="hero__meta-dot" aria-hidden="true"></span>
                        <span>Pendências</span>
                    </p>

                    <div class="hero__actions">
                        <x-buy-cta label="Quero meu diagnóstico" />
                        <a class="btn btn--ghost" href="#o-que-e">Como funciona</a>
                    </div>

                    <p class="hero__note">A causa real primeiro, para você não gastar com o serviço errado.</p>
                </div>
            </div>

            <a class="hero__scroll" href="#dores" aria-label="Rolar para a próxima seção">
                <span></span>
            </a>
        </section>

        {{-- ================= DORES: grid de depoimentos/frustrações ================= --}}
        <section class="section pains" id="dores" aria-labelledby="dores-title">
            <div class="section__inner">
                <header class="section-head" data-reveal="up">
                    <p class="section__label">Isso parece familiar?</p>
                    <h2 class="section__title" id="dores-title">Nome limpo. Score alto. Crédito negado.</h2>
                    <p class="section__text">Milhares de pessoas vivem essa frustração todos os dias e ninguém explica o motivo. O mercado enxerga o seu CPF de um jeito que você ainda não vê.</p>
                </header>

                <div class="pain-grid">
                    <blockquote class="pain-card" data-reveal="up" style="--d:.05s">Meu nome está limpo e mesmo assim nenhum banco aprova.</blockquote>
                    <blockquote class="pain-card" data-reveal="up" style="--d:.1s">Não consigo financiamento de jeito nenhum.</blockquote>
                    <blockquote class="pain-card" data-reveal="up" style="--d:.15s">Meu empréstimo sempre é negado.</blockquote>
                    <blockquote class="pain-card" data-reveal="up" style="--d:.2s">Meu cartão nunca aumenta o limite.</blockquote>
                    <blockquote class="pain-card" data-reveal="up" style="--d:.25s">Tenho Score alto e continuo sendo recusado.</blockquote>
                    <blockquote class="pain-card pain-card--accent" data-reveal="zoom" style="--d:.3s">
                        Não sei o motivo das recusas.
                        <span class="pain-card__tag">É aqui que entramos</span>
                    </blockquote>
                </div>

                <div class="pains__footer" data-reveal="up">
                    <p>Se você se reconheceu em alguma dessas frases, o problema não é falta de tentativa. É falta de diagnóstico.</p>
                    <x-buy-cta label="Descobrir o motivo real" variant="ink" />
                </div>
            </div>
        </section>

        {{-- ================= PRODUTO: split statement + passos ================= --}}
        <section class="section section--ink product" id="o-que-e" aria-labelledby="oque-title">
            <div class="section__inner product__grid">
                <div class="product__intro" data-reveal="left">
                    <p class="section__label">O produto</p>
                    <h2 class="section__title" id="oque-title">O Raio-X completo do seu CPF</h2>
                    <p class="section__text">Diferente de quem vende solução sem olhar o seu caso, nós descobrimos a causa do problema primeiro. Em muitos casos, o cliente descobre que nem precisava contratar nada.</p>
                    <div class="product__cta">
                        <x-buy-cta label="Comprar meu Raio-X" />
                    </div>
                </div>

                <ol class="steps">
                    <li class="step" data-reveal="right" style="--d:.05s">
                        <span class="step__num">01</span>
                        <div>
                            <h3>Você garante o diagnóstico</h3>
                            <p>Compra rápida e segura. Sem burocracia, sem visitas, 100% online.</p>
                        </div>
                    </li>
                    <li class="step" data-reveal="right" style="--d:.15s">
                        <span class="step__num">02</span>
                        <div>
                            <h3>Analisamos tudo no seu CPF</h3>
                            <p>Score, Rating, dívidas, restrições, comprometimento de renda e pendências ocultas.</p>
                        </div>
                    </li>
                    <li class="step" data-reveal="right" style="--d:.25s">
                        <span class="step__num">03</span>
                        <div>
                            <h3>Você recebe o mapa exato</h3>
                            <p>O que está travando o crédito, o que fazer, quanto tempo leva e qual solução serve para o seu caso.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        {{-- ================= ANÁLISE: cards com ícones ================= --}}
        <section class="section section--muted analysis-sec" id="analise" aria-labelledby="analise-title">
            <div class="section__inner">
                <header class="section-head section-head--center" data-reveal="up">
                    <p class="section__label">Abrangência</p>
                    <h2 class="section__title" id="analise-title">O que analisamos no seu CPF</h2>
                    <p class="section__text">Uma visão completa de como bancos e instituições classificam você, muito além do Score.</p>
                </header>

                <div class="analysis-grid">
                    <article class="a-card" data-reveal="up" style="--d:.05s">
                        <span class="a-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="11" r="2"/><path d="M13.5 9.5h4M13.5 12.5h4M5.5 16.5h13"/></svg>
                        </span>
                        <h3>Situação cadastral</h3>
                        <p>Nome negativado, pendências financeiras, dívidas ativas e restrições no mercado.</p>
                    </article>
                    <article class="a-card" data-reveal="up" style="--d:.1s">
                        <span class="a-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a8 8 0 1 1 16 0"/><path d="M12 14l3.5-3.5"/><path d="M2 19h20"/></svg>
                        </span>
                        <h3>Rating de crédito</h3>
                        <p>Mesmo com nome limpo, Rating baixo barra financiamento, cartão e crédito empresarial.</p>
                    </article>
                    <article class="a-card" data-reveal="up" style="--d:.15s">
                        <span class="a-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20V10M10 20V4M16 20v-8M21 20H3"/></svg>
                        </span>
                        <h3>Score e birôs</h3>
                        <p>Como está o seu Score nos birôs de crédito e se ele realmente impacta as aprovações.</p>
                    </article>
                    <article class="a-card" data-reveal="up" style="--d:.2s">
                        <span class="a-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="12" rx="2"/><path d="M3 11h18M7 15h4"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                        </span>
                        <h3>Comprometimento de renda</h3>
                        <p>Quanto da sua renda já está comprometida, muitas vezes o verdadeiro motivo da recusa.</p>
                    </article>
                    <article class="a-card" data-reveal="up" style="--d:.25s">
                        <span class="a-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 4v5c0 4.4-3 7.5-7 9-4-1.5-7-4.6-7-9V7z"/><path d="M9.5 12l1.8 1.8L15 10"/></svg>
                        </span>
                        <h3>Classificação comercial</h3>
                        <p>Como bancos e instituições financeiras classificam você como consumidor.</p>
                    </article>
                    <article class="a-card" data-reveal="up" style="--d:.3s">
                        <span class="a-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 8v4M12 16h.01"/></svg>
                        </span>
                        <h3>Pendências ocultas</h3>
                        <p>Inconsistências e situações que você desconhece e que derrubam análises automáticas.</p>
                    </article>
                </div>

                <div class="analysis-sec__cta" data-reveal="up">
                    <x-buy-cta label="Quero essa análise completa" variant="ink" />
                </div>
            </div>
        </section>

        {{-- ================= DESCOBERTAS: split com destaque numérico ================= --}}
        <section class="section section--ink discover-sec" id="descobertas" aria-labelledby="descobertas-title">
            <div class="section__inner discover-sec__grid">
                <div class="discover-sec__intro" data-reveal="left">
                    <p class="section__label">Clareza total</p>
                    <h2 class="section__title" id="descobertas-title">Você sai com respostas, não com achismo</h2>
                    <p class="section__text">Ao final do Diagnóstico, você entende exatamente o que trava o seu crédito e o caminho para resolver.</p>
                    <p class="discover-sec__stat">
                        <strong>10</strong>
                        <span>respostas objetivas<br>sobre o seu CPF</span>
                    </p>
                </div>

                <ul class="discover">
                    <li data-reveal="up" style="--d:.02s"><span class="discover__mark" aria-hidden="true">✓</span> Por que está sendo recusado</li>
                    <li data-reveal="up" style="--d:.06s"><span class="discover__mark" aria-hidden="true">✓</span> Se o problema é Score</li>
                    <li data-reveal="up" style="--d:.1s"><span class="discover__mark" aria-hidden="true">✓</span> Se o problema é Rating</li>
                    <li data-reveal="up" style="--d:.14s"><span class="discover__mark" aria-hidden="true">✓</span> Se é excesso de dívidas</li>
                    <li data-reveal="up" style="--d:.18s"><span class="discover__mark" aria-hidden="true">✓</span> Se existe negativação</li>
                    <li data-reveal="up" style="--d:.22s"><span class="discover__mark" aria-hidden="true">✓</span> Se a renda está comprometida</li>
                    <li data-reveal="up" style="--d:.26s"><span class="discover__mark" aria-hidden="true">✓</span> Se há informações incorretas</li>
                    <li data-reveal="up" style="--d:.3s"><span class="discover__mark" aria-hidden="true">✓</span> O que realmente precisa ser feito</li>
                    <li data-reveal="up" style="--d:.34s"><span class="discover__mark" aria-hidden="true">✓</span> Quanto tempo leva para resolver</li>
                    <li data-reveal="up" style="--d:.38s"><span class="discover__mark" aria-hidden="true">✓</span> Qual solução serve para o seu caso</li>
                </ul>
            </div>
            <div class="section__inner discover-sec__cta" data-reveal="up">
                <x-buy-cta label="Quero essas respostas" />
            </div>
        </section>

        {{-- ================= DIFERENCIAL: comparação lado a lado ================= --}}
        <section class="section section--teal versus" id="diferencial" aria-labelledby="diff-title">
            <div class="section__inner">
                <header class="section-head section-head--center" data-reveal="up">
                    <p class="section__label">Diferencial</p>
                    <h2 class="section__title" id="diff-title">Evite gastar com o serviço errado</h2>
                </header>

                <div class="versus__grid">
                    <div class="versus__panel versus__panel--wrong" data-reveal="left">
                        <h3>Sem diagnóstico</h3>
                        <ul>
                            <li>Contrata Limpa Nome quando o problema é Rating</li>
                            <li>Tenta aumentar Score quando a renda está comprometida</li>
                            <li>Paga por serviços que não resolvem a causa</li>
                            <li>Às vezes o CPF já está apto e a pessoa nem sabe</li>
                        </ul>
                    </div>

                    <div class="versus__divider" aria-hidden="true"><span>vs</span></div>

                    <div class="versus__panel versus__panel--right" data-reveal="right">
                        <h3>Com o Diagnóstico Candle</h3>
                        <ul>
                            <li>Identifica exatamente o cenário antes de contratar</li>
                            <li>Aponta a causa real da recusa</li>
                            <li>Indica só o que realmente precisa ser feito</li>
                            <li>Economiza tempo, dinheiro e frustração</li>
                        </ul>
                    </div>
                </div>

                <div class="versus__cta" data-reveal="up">
                    <x-buy-cta label="Começar pelo diagnóstico certo" />
                </div>
            </div>
        </section>

        {{-- ================= BENEFÍCIOS: lista numerada + card resumo ================= --}}
        <section class="section benefits-sec" id="beneficios" aria-labelledby="beneficios-title">
            <div class="section__inner benefits-sec__grid">
                <div class="benefits-sec__list">
                    <header class="section-head" data-reveal="up">
                        <p class="section__label">Resultado</p>
                        <h2 class="section__title" id="beneficios-title">O que você leva</h2>
                    </header>
                    <ol class="benefits">
                        <li data-reveal="up" style="--d:.02s">Descobre o motivo real das recusas</li>
                        <li data-reveal="up" style="--d:.06s">Evita contratar serviços desnecessários</li>
                        <li data-reveal="up" style="--d:.1s">Recebe uma análise profissional</li>
                        <li data-reveal="up" style="--d:.14s">Entende como o mercado enxerga o seu CPF</li>
                        <li data-reveal="up" style="--d:.18s">Sabe exatamente o que precisa ser feito</li>
                        <li data-reveal="up" style="--d:.22s">Economiza tempo e dinheiro</li>
                        <li data-reveal="up" style="--d:.26s">Aumenta as chances de aprovação futura</li>
                    </ol>
                </div>

                <aside class="benefits-sec__card" data-reveal="zoom">
                    <p class="benefits-sec__card-label">Diagnóstico Financeiro</p>
                    <p class="benefits-sec__card-title">Raio-X do CPF</p>
                    <ul>
                        <li>Análise completa e individual</li>
                        <li>Score, Rating, dívidas e renda</li>
                        <li>Direcionamento exato do que fazer</li>
                        <li>100% online</li>
                    </ul>
                    <x-buy-cta label="Garantir meu diagnóstico" block />
                    <p class="benefits-sec__card-note">Pagamento seguro · confirmação imediata</p>
                </aside>
            </div>
        </section>

        {{-- ================= CTA FINAL ================= --}}
        <section class="section section--ink final" id="diagnostico" aria-labelledby="cta-title">
            <div class="section__inner final__grid">
                <div class="final__pitch" data-reveal="left">
                    <p class="section__label">Pronto para começar</p>
                    <h2 class="section__title" id="cta-title">Pare de tentar no escuro</h2>
                    <p class="section__text">Cada recusa de crédito deixa rastro. Descubra de uma vez o que o mercado vê no seu CPF e o caminho certo para destravar.</p>
                    <div class="final__cta">
                        <x-buy-cta label="Ir para o checkout" />
                    </div>
                    <p class="final__hint">Leva menos de 2 minutos para garantir o seu.</p>
                </div>

                <form class="form" data-reveal="right" method="POST" action="{{ route('leads.store') }}" novalidate>
                    @csrf

                    @if (session('success'))
                        <div class="alert alert--success" role="status">{{ session('success') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert--error" role="alert">
                            <ul class="errors">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <p class="form__alt">Prefere falar com a gente antes?</p>
                    <p class="form__sub">Deixe seus dados e nossa equipe retorna em horário comercial.</p>

                    <label>
                        Nome completo
                        <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Seu nome">
                    </label>
                    <label>
                        WhatsApp
                        <input type="tel" name="phone" value="{{ old('phone') }}" required autocomplete="tel" placeholder="(00) 00000-0000">
                    </label>
                    <label>
                        E-mail
                        <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="voce@email.com">
                    </label>
                    <label>
                        Conte um pouco do seu caso <span class="form__optional">(opcional)</span>
                        <textarea name="message" rows="3" placeholder="Ex.: financiamento negado, cartão sem aumento de limite…">{{ old('message') }}</textarea>
                    </label>
                    <button type="submit" class="btn btn--ghost btn--block">Solicitar contato</button>
                    <p class="form__hint">Seus dados são usados apenas para retorno comercial do Grupo Candle.</p>
                </form>
            </div>
        </section>
    </main>

    <div class="mobile-bar" role="complementary" aria-label="Comprar diagnóstico">
        <p class="mobile-bar__text">
            <strong>Raio-X do CPF</strong>
            <span>Descubra o motivo das recusas</span>
        </p>
        <a class="btn btn--flame btn--sm" href="{{ route('checkout.show') }}">Comprar</a>
    </div>

    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__top">
                <div class="footer__brand">
                    <p class="footer__logo">Grupo Candle</p>
                    <p class="footer__tagline">Diagnóstico Financeiro: clareza antes de qualquer solução. Descubra a causa real das recusas de crédito antes de contratar qualquer serviço.</p>
                    <a class="btn btn--flame btn--sm footer__buy" href="{{ route('checkout.show') }}">Comprar diagnóstico</a>
                </div>

                <nav class="footer__col" aria-label="Navegação">
                    <p class="footer__col-title">Navegue</p>
                    <a href="#dores">O problema</a>
                    <a href="#o-que-e">Como funciona</a>
                    <a href="#analise">O que analisamos</a>
                    <a href="#beneficios">Benefícios</a>
                </nav>

                <div class="footer__col">
                    <p class="footer__col-title">Comece agora</p>
                    <a href="{{ route('checkout.show') }}">Comprar diagnóstico</a>
                    <a href="#diagnostico">Falar com a equipe</a>
                </div>
            </div>

            <div class="footer__bottom">
                <p>© {{ date('Y') }} Grupo Candle. Todos os direitos reservados.</p>
                <a class="footer__back" href="#topo">Voltar ao topo ↑</a>
            </div>
        </div>
    </footer>
</body>
</html>
