@php
    $seoTitle = 'Raio-X do CPF | Diagnóstico Financeiro Grupo Candle';
    $seoDescription = 'Descubra o motivo real das recusas de crédito, mesmo com o nome limpo. O Raio-X do CPF analisa Cadastro, Comportamento e Capacidade e mostra o que fazer a seguir.';
    $seoUrl = url()->current();
    $seoImage = asset('images/lp/grupo-candle-img-01.jpg');
    $seoLogo = asset('images/lp/logo-candle.png');
    $seoSiteName = 'Grupo Candle';
@endphp
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords" content="Raio-X do CPF, diagnóstico financeiro, recusa de crédito, nome limpo crédito negado, análise de CPF, Score, Rating, Grupo Candle, Danylo Karran">
    <meta name="author" content="Grupo Candle">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#0a1941">
    <meta name="color-scheme" content="dark">
    <link rel="canonical" href="{{ $seoUrl }}">

    <link rel="icon" href="{{ asset('images/lp/favicon.png') }}" type="image/png" sizes="any">
    <link rel="icon" href="{{ asset('images/lp/icons/favicon-32.png') }}" type="image/png" sizes="32x32">
    <link rel="icon" href="{{ asset('images/lp/icons/favicon-48.png') }}" type="image/png" sizes="48x48">
    <link rel="apple-touch-icon" href="{{ asset('images/lp/icons/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="{{ $seoSiteName }}">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:url" content="{{ $seoUrl }}">
    <meta property="og:image" content="{{ $seoImage }}">
    <meta property="og:image:alt" content="Danylo Karran, especialista em crédito do Grupo Candle">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seoTitle }}">
    <meta name="twitter:description" content="{{ $seoDescription }}">
    <meta name="twitter:image" content="{{ $seoImage }}">
    <meta name="twitter:image:alt" content="Danylo Karran, especialista em crédito do Grupo Candle">

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'Organization',
                    '@id' => url('/').'/#organization',
                    'name' => 'Grupo Candle',
                    'url' => url('/'),
                    'logo' => [
                        '@type' => 'ImageObject',
                        'url' => $seoLogo,
                    ],
                    'description' => 'Especialistas em diagnóstico financeiro e reabilitação de crédito. O Raio-X do CPF revela a causa real das recusas bancárias.',
                ],
                [
                    '@type' => 'WebSite',
                    '@id' => url('/').'/#website',
                    'url' => url('/'),
                    'name' => 'Grupo Candle',
                    'publisher' => ['@id' => url('/').'/#organization'],
                    'inLanguage' => 'pt-BR',
                ],
                [
                    '@type' => 'WebPage',
                    '@id' => $seoUrl.'#webpage',
                    'url' => $seoUrl,
                    'name' => $seoTitle,
                    'description' => $seoDescription,
                    'isPartOf' => ['@id' => url('/').'/#website'],
                    'about' => ['@id' => url('/').'/#service'],
                    'primaryImageOfPage' => [
                        '@type' => 'ImageObject',
                        'url' => $seoImage,
                    ],
                    'inLanguage' => 'pt-BR',
                ],
                [
                    '@type' => 'Service',
                    '@id' => url('/').'/#service',
                    'name' => 'Raio-X do CPF',
                    'alternateName' => 'Diagnóstico Financeiro',
                    'serviceType' => 'Diagnóstico de crédito',
                    'description' => $seoDescription,
                    'provider' => ['@id' => url('/').'/#organization'],
                    'areaServed' => [
                        '@type' => 'Country',
                        'name' => 'Brasil',
                    ],
                    'audience' => [
                        '@type' => 'Audience',
                        'audienceType' => 'Pessoas com nome limpo e crédito recusado',
                    ],
                ],
                [
                    '@type' => 'FAQPage',
                    '@id' => $seoUrl.'#faq',
                    'mainEntity' => [
                        [
                            '@type' => 'Question',
                            'name' => 'O que é o Raio-X do CPF, exatamente?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'É um diagnóstico. Uma análise completa das três camadas da sua ficha de crédito: Cadastro, Comportamento e Capacidade. Ele aponta a causa real das recusas. Não é Limpa Nome. É o exame que diz se você precisa disso ou de outra coisa.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Vocês limpam o meu nome?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'O Grupo Candle tem serviços de reabilitação de crédito, sim. Mas o diagnóstico vem antes e é independente: ele existe justamente para descobrir se você precisa deles. Se não precisar, a gente vai te dizer.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Isso garante que eu vou conseguir crédito?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'Não. E desconfie de quem garantir. O que o Raio-X garante é que você vai saber o que está travando o seu crédito e o que fazer a respeito. Aprovação depende da instituição.',
                            ],
                        ],
                        [
                            '@type' => 'Question',
                            'name' => 'Qual a diferença para a consulta gratuita do aplicativo?',
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => 'A consulta gratuita mostra Score e negativações, a camada de cima. O Raio-X lê Rating, Classificação Comercial, comprometimento de renda, inconsistências cadastrais e pendências ocultas. É a diferença entre olhar a temperatura e fazer o exame de sangue.',
                            ],
                        ],
                    ],
                ],
            ],
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bricolage-grotesque:600,700,800|figtree:400,500,600,700" rel="stylesheet">
    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
</head>
<body>
    <a class="skip-link" href="#conteudo">Ir para o conteúdo</a>

    <header class="nav" id="nav">
        <div class="nav__shell">
            <div class="nav__bar">
                <a class="nav__brand" href="#topo" aria-label="Grupo Candle, início">
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

                <nav class="nav__links" id="nav-links" aria-label="Seções">
                    <a href="#problema">O problema</a>
                    <a href="#para-quem">Para quem é</a>
                    <a href="#como-funciona">Como funciona</a>
                    <a href="#incluso">O que inclui</a>
                    <a href="#investimento">Investimento</a>
                    <a href="#faq">FAQ</a>
                    <a class="nav__links-cta" href="{{ route('checkout.show') }}">Comprar diagnóstico</a>
                </nav>

                <div class="nav__actions">
                    <a class="nav__cta" href="{{ route('checkout.show') }}">
                        <span class="nav__cta-full">Comprar diagnóstico</span>
                        <span class="nav__cta-short">Comprar</span>
                    </a>
                    <button
                        class="nav__toggle"
                        type="button"
                        id="nav-toggle"
                        aria-expanded="false"
                        aria-controls="nav-links"
                        aria-label="Abrir menu"
                    >
                        <span class="nav__toggle-bar" aria-hidden="true"></span>
                        <span class="nav__toggle-bar" aria-hidden="true"></span>
                        <span class="nav__toggle-bar" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="nav__backdrop" id="nav-backdrop" hidden></div>
    </header>

    <main id="conteudo">
        {{-- ================= HERO ================= --}}
        <section class="hero" id="topo" aria-label="Apresentação">
            <div class="hero__media" aria-hidden="true">
                <div class="hero__grid"></div>
                <div class="hero__mesh"></div>
                <div class="hero__grain"></div>
            </div>
            <div class="hero__scrim" aria-hidden="true"></div>

            <div class="hero__shell">
                <div class="hero__top">
                    <p class="hero__badge">
                        <svg class="hero__badge-icon" viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="7"/>
                            <path d="M20 20l-3.5-3.5" stroke-linecap="round"/>
                        </svg>
                        Diagnóstico Financeiro
                    </p>

                    <h1 class="hero__title">
                        Descubra em poucos minutos o motivo real pelo qual o banco
                        <em>recusa o seu crédito</em>, mesmo com o nome limpo.
                    </h1>
                </div>

                <div class="hero__visual">
                    <div class="hero__video-wrap">
                        <video
                            class="hero__video"
                            src="{{ asset('videos/lp/hero/video-hero-01.mp4') }}"
                            poster="{{ asset('images/lp/hero/video-hero-01-poster.jpg') }}"
                            playsinline
                            preload="metadata"
                            aria-label="Vídeo de apresentação do Raio-X do CPF"
                        ></video>
                        <button class="hero__play" type="button" aria-label="Assistir ao vídeo de apresentação">
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5.14v13.72L19 12 8 5.14z"/></svg>
                        </button>
                    </div>
                    <button class="hero__video-cta" type="button" aria-label="Assistir ao vídeo de apresentação">
                        <span class="hero__video-cta-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.14v13.72L19 12 8 5.14z"/></svg>
                        </span>
                        Quero o Raio-X do meu CPF
                    </button>
                </div>

                <div class="hero__bottom">
                    <p class="hero__lead">
                        O Raio-X do CPF lê as três camadas que o banco lê em segundos e você nunca leu na vida: Cadastro, Comportamento e Capacidade. Você recebe o motivo exato da recusa, o que precisa ser feito e em quanto tempo, ou a confirmação de que não precisa contratar nada.
                    </p>

                    <div class="hero__actions">
                        <x-buy-cta label="Quero o Raio-X do meu CPF" class="hero__cta-primary" />
                        <a class="hero__link" href="#como-funciona">
                            Como funciona
                            <span aria-hidden="true">↓</span>
                        </a>
                    </div>

                    <p class="hero__note">Análise no sistema real. Não é print, não é PDF, não é consulta de terceiro.</p>

                    <ul class="hero__stats" aria-label="Diferenciais do diagnóstico">
                        <li>
                            <strong>Sistema real</strong>
                            <span>Não é consulta comum</span>
                        </li>
                        <li>
                            <strong>Score vs Rating</strong>
                            <span>O número que mostra e o que decide</span>
                        </li>
                        <li>
                            <strong>3 camadas</strong>
                            <span>Cadastro, comportamento e capacidade</span>
                        </li>
                    </ul>

                    <div class="hero__trust">
                        <div class="hero__avatars" aria-hidden="true">
                            <span>SC</span>
                            <span>MR</span>
                            <span>AL</span>
                            <span>JP</span>
                        </div>
                        <div class="hero__trust-copy">
                            <p class="hero__stars" aria-label="Avaliação">★★★★★</p>
                            <p>Danylo Karran explica em 9 minutos por que o seu crédito é negado, e por que quase todo mundo tenta resolver a coisa errada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ================= PROBLEMA ================= --}}
        <section class="section section--ink problem" id="problema" aria-labelledby="problema-title">
            <div class="section__inner problem__grid">
                <div class="problem__top" data-reveal="left">
                    <p class="section__label">Você não está sozinho</p>
                    <h2 class="section__title" id="problema-title">Você não está sozinho nessa. E você não está sendo recusado por acaso.</h2>
                </div>

                <div class="problem__visual" data-reveal="right">
                    <figure class="problem__figure">
                        <img
                            class="problem__img"
                            src="{{ asset('images/lp/grupo-candle-img-01.jpg') }}"
                            alt="Danylo Karran, especialista em crédito do Grupo Candle"
                            width="720"
                            height="900"
                            loading="lazy"
                            decoding="async"
                        >
                    </figure>

                    <blockquote class="problem__quote">
                        <p>“Meu nome está limpo e mesmo assim nenhum banco aprova.”</p>
                        <p>Se essa frase é sua, existe uma explicação, e ela tem nome. O Raio-X do CPF abre as três camadas da sua ficha e te mostra, preto no branco, qual delas está te derrubando. Em poucos minutos, você sai com o diagnóstico completo e o caminho definido. Sem chute. Sem contratar serviço torcendo pra dar certo.</p>
                    </blockquote>
                </div>

                <div class="problem__copy" data-reveal="left">
                    <ul class="problem__quotes problem__quotes--inline">
                        <li>“Nome limpo e nenhum banco aprova.”</li>
                        <li>“Score alto e crédito negado.”</li>
                        <li>“Não sei o motivo das recusas.”</li>
                    </ul>

                    <ul class="problem__chips">
                        <li><strong>Cadastro</strong><span>Dados, vínculos e pendências</span></li>
                        <li><strong>Comportamento</strong><span>Histórico, Score e Rating</span></li>
                        <li><strong>Capacidade</strong><span>Renda, margem e comprometimento</span></li>
                    </ul>

                    <p class="section__text">Milhões de brasileiros com o nome limpo são recusados todos os dias e nunca recebem uma explicação. Nem do banco, nem da financeira, nem do gerente. Só o “não foi possível aprovar neste momento”, e o silêncio depois.</p>
                    <p class="section__text"><strong>Isso não é falta de sorte. É falta de informação.</strong></p>
                    <p class="section__text">Todo CPF é lido por um algoritmo em três camadas. Quem descobre qual das três está travando o próprio crédito para de gastar dinheiro no escuro e passa a resolver a coisa certa, na ordem certa. Foi exatamente isso que aconteceu com 2 mil pessoas que já fizeram o Raio-X do CPF com o Grupo Candle.</p>

                    <div class="section__cta">
                        <a class="btn btn--ink" href="#investimento">Ver o valor do diagnóstico ↓</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- ================= PROVAS ================= --}}
        <section class="section section--ink situations" id="resultados" aria-labelledby="resultados-title">
            <div class="section__inner">
                <header class="section-head section-head--center" data-reveal="up">
                    <p class="section__label">Provas</p>
                    <h2 class="section__title" id="resultados-title">Não acredite em mim. Olhe.</h2>
                    <p class="section__text">[provas sociais em prints]</p>
                </header>

                <div class="logic" data-reveal="up">
                    <p class="logic__item"><span>Você já sabe que o banco não decide no feeling. Ele decide por algoritmo.</span> <strong>✔ Concorda.</strong></p>
                    <p class="logic__item"><span>Você já sabe que esse algoritmo lê dados sobre você. Cadastro, histórico, renda.</span> <strong>✔ Concorda.</strong></p>
                    <p class="logic__item"><span>Então: se a decisão é tomada com base em dados, a recusa tem uma causa específica. Não é “o sistema”. É um dado.</span> <strong>✔ Concorda.</strong></p>
                    <p class="section__text">E aqui está o problema: você nunca viu esses dados. Está tentando consertar uma máquina sem nunca ter aberto a tampa.</p>
                    <p class="section__text"><strong>Logo:</strong> antes de contratar qualquer serviço, a decisão mais barata que existe é descobrir a causa. Ler a ficha custa uma fração do que custa tratar a coisa errada por dois anos.</p>
                </div>

                <aside class="authority" data-reveal="up">
                    <p class="authority__label">Autoridade</p>
                    <p class="authority__text">Danylo Karran trabalha com crédito desde 2010, do lado de quem constrói a análise, não de quem sofre com ela. Professor de MBA em investimentos pela UNIP · Mentor na mesa AAA do Santander · Formou analistas CNPI pela BTG Pactual e pela XP Investimentos · 1.600 escritórios parceiros cadastrados no Brasil.</p>
                </aside>

                <div class="section__cta section__cta--center" data-reveal="up">
                    <x-buy-cta label="Quero o Raio-X do meu CPF" />
                </div>
            </div>
        </section>

        {{-- ================= PARA QUEM É ================= --}}
        <section class="section for-who" id="para-quem" aria-labelledby="para-quem-title">
            <div class="section__inner for-who__grid">
                <div class="for-who__copy" data-reveal="left">
                    <p class="section__label">Para quem é</p>
                    <h2 class="section__title" id="para-quem-title">Este é o exame que mostra exatamente por que o seu crédito é negado, e o que fazer a respeito.</h2>
                    <p class="section__text">Em poucos minutos, sem sair de casa, sem enviar documento pra desconhecido.</p>
                    <p class="section__text"><strong>O que você provavelmente já tentou:</strong></p>

                    <ul class="check-list">
                        <li>Limpou o nome e continuou sendo recusado, porque o nome sujo era só a camada de cima</li>
                        <li>Ficou meses tentando “subir o Score”, e ninguém te contou que Score não é o número que decide</li>
                        <li>Pagou por serviço que não resolvia o seu caso, porque ninguém analisou o seu caso antes de vender</li>
                        <li>Pediu crédito em cinco lugares diferentes, e cada recusa deixou marca na sua ficha, piorando o cenário</li>
                        <li>Desistiu de um objetivo concreto (casa, carro, limite, crédito pra empresa), achando que “não dava”</li>
                    </ul>

                    <p class="section__text"><strong>E existe um cenário pior que todos esses:</strong> ter o CPF apto para crédito, poder comprar a casa hoje, e não comprar porque ninguém nunca te disse.</p>

                    <div class="section__cta">
                        <x-buy-cta label="Quero ler minha ficha" variant="ink" />
                    </div>
                </div>

                <aside class="for-who__aside" data-reveal="right">
                    <p class="for-who__aside-label">A virada</p>
                    <p class="for-who__aside-title">Score mostra. Rating decide.</p>
                    <p>Seu Score pode estar alto e ainda assim o Rating travar a aprovação. O Raio-X revela a camada que decide de verdade e mostra se o problema é cadastro, comportamento ou capacidade.</p>
                </aside>
            </div>
        </section>

        {{-- ================= CINCO CENÁRIOS ================= --}}
        <section class="section section--teal versus" id="diferencial" aria-labelledby="diff-title">
            <div class="section__inner">
                <header class="section-head section-head--center" data-reveal="up">
                    <p class="section__label">Exclusividade</p>
                    <h2 class="section__title" id="diff-title">Se você chegou até aqui, o seu caso é provavelmente um destes cinco.</h2>
                    <p class="section__text">Depois de mais de uma década lendo CPF, eu te digo: quase toda recusa “sem motivo” cai em um destes cenários. Veja qual é o seu.</p>
                </header>

                <div class="scenarios">
                    <article class="scenario" data-reveal="up" style="--d:.02s">
                        <span class="scenario__num">01</span>
                        <h3>O problema é o Rating, e você nem sabe o que é isso</h3>
                        <p>Seu nome está limpo. Seu Score está bom. E o banco continua dizendo não. O Rating é a nota que o mercado financeiro dá ao seu CPF, e é ela que decide de verdade. É um número fechado, que você não consegue abrir sozinho, e que praticamente ninguém no Brasil sabe que existe. Você pode passar cinco anos consertando o que não estava quebrado.</p>
                    </article>
                    <article class="scenario" data-reveal="up" style="--d:.06s">
                        <span class="scenario__num">02</span>
                        <h3>O problema é comprometimento de renda</h3>
                        <p>Nome limpo, Rating razoável, e a recusa continua. Porque no papel, a sua renda já está toda comprometida. Não sobra margem. E enquanto você tenta melhorar Score, o algoritmo está olhando pra uma conta de dividir que já não fecha. Nenhum serviço de limpa nome resolve isso, mas quase todos vão te vender um.</p>
                    </article>
                    <article class="scenario" data-reveal="up" style="--d:.1s">
                        <span class="scenario__num">03</span>
                        <h3>Existe informação errada na sua ficha</h3>
                        <p>Endereço que não é mais seu. Vínculo que acabou. Dado de dez anos atrás. Coisa que nem é sua. A análise automática não pergunta se é verdade. Ela lê e decide. E um dado inconsistente derruba aprovação sem que ninguém nunca te avise que foi por isso.</p>
                    </article>
                    <article class="scenario" data-reveal="up" style="--d:.14s">
                        <span class="scenario__num">04</span>
                        <h3>Existe pendência oculta</h3>
                        <p>Dívida que você não sabe que tem. Registro que apareceu sem você ver. Protesto de anos atrás. São coisas que não aparecem na consulta gratuita que você faz no celular, mas aparecem pra quem tem acesso ao sistema real. E é isso que está te travando.</p>
                    </article>
                    <article class="scenario scenario--accent" data-reveal="up" style="--d:.18s">
                        <span class="scenario__num">05</span>
                        <h3>Nada disso. O seu CPF já está apto.</h3>
                        <p>Esse é o cenário que mais me incomoda. Tem gente que já podia ter financiado. Que já podia ter aumentado o limite. Que já podia ter aberto o crédito da empresa. E não fez, porque presumiu que não dava, ou porque um golpista disse que precisava pagar por um serviço primeiro.</p>
                    </article>
                </div>

                <p class="scenarios__close" data-reveal="up">A verdade é simples: enquanto você não souber em qual dos cinco você está, qualquer dinheiro que você gastar é aposta.</p>

                <div class="section__cta section__cta--center" data-reveal="up">
                    <x-buy-cta label="Quero o diagnóstico certo" />
                </div>
            </div>
        </section>

        {{-- ================= INSIGHTS ================= --}}
        <section class="section section--ink insights" aria-labelledby="insights-title">
            <div class="section__inner">
                <header class="section-head section-head--center" data-reveal="up">
                    <h2 class="section__title" id="insights-title">Pare de tentar no escuro. Descubra a causa em poucos minutos com o Raio-X do CPF.</h2>
                </header>

                <div class="insights__grid">
                    <article class="insight" data-reveal="up" style="--d:.02s">
                        <h3>Nunca mais receba um “não” sem explicação</h3>
                        <p>O Raio-X abre as três camadas da sua ficha (Cadastro, Comportamento e Capacidade) e aponta exatamente qual delas está gerando a recusa. Você sai com o motivo escrito, não com uma teoria.</p>
                    </article>
                    <article class="insight" data-reveal="up" style="--d:.06s">
                        <h3>Nunca mais pague pelo serviço errado</h3>
                        <p>O diagnóstico vem antes do tratamento. Se o seu problema é Rating, você não vai comprar Limpa Nome. Se é comprometimento de renda, você não vai gastar tentando subir Score. Você resolve o que precisa ser resolvido, e só isso.</p>
                    </article>
                    <article class="insight" data-reveal="up" style="--d:.1s">
                        <h3>Pare de piorar a sua ficha tentando</h3>
                        <p>Cada solicitação negada entra no seu histórico. Quanto mais você chuta, pior fica. O Raio-X interrompe o ciclo: você para de pedir no escuro e passa a pedir quando faz sentido pedir.</p>
                    </article>
                    <article class="insight" data-reveal="up" style="--d:.14s">
                        <h3>Saiba quanto tempo leva, antes de começar</h3>
                        <p>O diagnóstico te dá o prazo real de resolução do seu caso. Você para de viver no “será que ano que vem dá?” e passa a ter uma data pra trabalhar.</p>
                    </article>
                    <article class="insight" data-reveal="up" style="--d:.18s">
                        <h3>Tome a decisão com o número na mão, não com fé</h3>
                        <p>Você vai ver a sua ficha como o banco vê. Não a versão do aplicativo. A versão que decide.</p>
                    </article>
                </div>

                <div class="section__cta section__cta--center" data-reveal="up">
                    <x-buy-cta label="Quero parar de tentar no escuro" variant="ink" />
                </div>
            </div>
        </section>

        {{-- ================= COMO FUNCIONA ================= --}}
        <section class="section section--ink steps-sec" id="como-funciona" aria-labelledby="como-title">
            <div class="section__inner">
                <header class="section-head section-head--center" data-reveal="up">
                    <p class="section__label">Passo a passo</p>
                    <h2 class="section__title" id="como-title">Como funciona o Raio-X do CPF</h2>
                    <p class="section__text">Três passos. Você não precisa fazer nada além do primeiro.</p>
                </header>

                <ol class="flow">
                    <li class="flow__item" data-reveal="up" style="--d:.02s">
                        <span class="flow__num">01</span>
                        <div>
                            <h3>Você solicita e envia seus dados</h3>
                            <p>Você clica no botão, faz o pagamento e preenche um formulário curto com os dados necessários para a análise.</p>
                            <p class="flow__meta"><strong>O que acontece:</strong> o seu CPF entra na fila de análise no mesmo dia.</p>
                            <p class="flow__meta"><strong>O seu benefício:</strong> em poucos minutos. É a última coisa que você precisa fazer.</p>
                        </div>
                    </li>
                    <li class="flow__item" data-reveal="up" style="--d:.06s">
                        <span class="flow__num">02</span>
                        <div>
                            <h3>Nós abrimos as três camadas do seu CPF</h3>
                            <p>Nossa equipe acessa o sistema real e lê Cadastro, Comportamento e Capacidade. Não é consulta de aplicativo. É a leitura completa, a mesma que a instituição financeira faz antes de decidir.</p>
                            <p class="flow__meta"><strong>O que acontece:</strong> cada camada é analisada individualmente e cruzada com as outras duas, porque o problema quase sempre está na relação entre elas.</p>
                            <p class="flow__meta"><strong>O seu benefício:</strong> nada passa batido. Nem pendência oculta, nem dado errado, nem margem estourada.</p>
                        </div>
                    </li>
                    <li class="flow__item" data-reveal="up" style="--d:.1s">
                        <span class="flow__num">03</span>
                        <div>
                            <h3>Você recebe o Diagnóstico e o caminho</h3>
                            <p>Em poucos minutos você recebe o Raio-X completo: a causa, a ordem de prioridade, o prazo e a indicação de solução. A entrega inclui o diagnóstico em PDF, um resumo simplificado no WhatsApp e a explicação do diagnóstico por áudio ou ligação.</p>
                            <p class="flow__meta"><strong>O que acontece:</strong> você lê a sua ficha pela primeira vez na vida.</p>
                            <p class="flow__meta"><strong>O seu benefício:</strong> você para de apostar. E se o diagnóstico apontar que você não precisa contratar nada, nós vamos te dizer isso com todas as letras.</p>
                        </div>
                    </li>
                </ol>

                <div class="section__cta section__cta--center" data-reveal="up">
                    <x-buy-cta label="Quero o Raio-X do meu CPF" />
                </div>
            </div>
        </section>

        {{-- ================= O QUE INCLUI ================= --}}
        <section class="section section--muted incluso" id="incluso" aria-labelledby="incluso-title">
            <div class="section__inner incluso__layout">
                <header class="incluso__intro" data-reveal="left">
                    <p class="section__label">O que está incluso</p>
                    <h2 class="section__title" id="incluso-title">Tudo que está dentro do Raio-X do CPF</h2>
                    <p class="section__text">
                        Dez entregáveis no diagnóstico. Você sai com a causa, a ordem de prioridade, o prazo
                        e a indicação de solução, ou a confirmação de que não precisa contratar nada.
                    </p>
                    <div class="section__cta">
                        <x-buy-cta label="Quero o Raio-X do meu CPF" />
                    </div>
                </header>

                <ol class="incluso__board" data-reveal="right">
                    <li>
                        <span>01</span>
                        <div>
                            <h3>Análise da Situação Cadastral</h3>
                            <p>Negativações, pendências, dívidas ativas e restrições mapeadas. Você para de descobrir dívida na hora errada.</p>
                        </div>
                    </li>
                    <li>
                        <span>02</span>
                        <div>
                            <h3>Leitura do Rating de Crédito</h3>
                            <p>A nota que decide a aprovação e que você não acessa sozinho. É aqui que mora a maior parte das recusas inexplicáveis.</p>
                        </div>
                    </li>
                    <li>
                        <span>03</span>
                        <div>
                            <h3>Análise de Score nos birôs</h3>
                            <p>Verificamos se o Score de fato impacta suas aprovações, ou se é só ruído no seu caso.</p>
                        </div>
                    </li>
                    <li>
                        <span>04</span>
                        <div>
                            <h3>Comprometimento de Renda</h3>
                            <p>Quanto da sua renda já está comprometida aos olhos do sistema. Descobre se a recusa é matemática pura.</p>
                        </div>
                    </li>
                    <li>
                        <span>05</span>
                        <div>
                            <h3>Classificação Comercial</h3>
                            <p>Em qual gaveta bancos e instituições te colocaram, e o que tira você dela.</p>
                        </div>
                    </li>
                    <li>
                        <span>06</span>
                        <div>
                            <h3>Auditoria de Informações Desatualizadas</h3>
                            <p>Inconsistências cadastrais que derrubam análise automática. Dado errado é barato de resolver, se alguém encontrar.</p>
                        </div>
                    </li>
                    <li>
                        <span>07</span>
                        <div>
                            <h3>Varredura de Pendências Ocultas</h3>
                            <p>O que existe na sua ficha e você não sabe. Acaba a surpresa.</p>
                        </div>
                    </li>
                    <li>
                        <span>08</span>
                        <div>
                            <h3>Parecer Técnico com Ordem de Prioridade</h3>
                            <p>O que resolver primeiro, o que deixar pra depois e o que ignorar. Ordem errada custa meses.</p>
                        </div>
                    </li>
                    <li>
                        <span>09</span>
                        <div>
                            <h3>Prazo Estimado de Resolução</h3>
                            <p>Quanto tempo o seu caso leva pra virar. Data, não esperança.</p>
                        </div>
                    </li>
                    <li class="is-accent">
                        <span>10</span>
                        <div>
                            <h3>Indicação de Solução</h3>
                            <p>A recomendação pro seu caso, inclusive “não contrate nada”. É a razão de o Raio-X existir.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        {{-- ================= O QUE MUDA ================= --}}
        <section class="section section--ink benefits-sec" id="beneficios" aria-labelledby="beneficios-title">
            <div class="section__inner benefits-sec__grid">
                <div class="benefits-sec__list" data-reveal="left">
                    <header class="section-head">
                        <p class="section__label">Resultado</p>
                        <h2 class="section__title" id="beneficios-title">O que você ganha com o Raio-X do CPF</h2>
                    </header>
                    <ul class="check-list check-list--dense">
                        <li>A resposta que ninguém te deu. O motivo real da recusa, escrito, específico, seu.</li>
                        <li>Economia imediata. Um diagnóstico custa uma fração do serviço errado que você contrataria sem ele.</li>
                        <li>Acesso ao sistema real, não a print, não a PDF editado, não a consulta que qualquer um faz no celular.</li>
                        <li>Análise de quem constrói o modelo, não de quem só usa. Quinze anos dentro de algoritmo bancário.</li>
                        <li>A leitura do Rating, o número que decide e que praticamente nenhum brasileiro sabe que existe.</li>
                        <li>Fim do ciclo de tentativa e erro que vem piorando a sua ficha a cada solicitação negada.</li>
                        <li>Clareza de prazo. Você para de viver no “quem sabe ano que vem”.</li>
                        <li>Honestidade que te economiza dinheiro: se o seu CPF já estiver apto, a gente te fala. E você não gasta mais nada.</li>
                        <li>A chance de destravar o que estava parado, o financiamento, o limite, o crédito da empresa, a obra.</li>
                        <li>Sair do escuro. Depois do Raio-X, toda decisão financeira que você tomar vai ser tomada com informação.</li>
                    </ul>
                    <div class="section__cta">
                        <x-buy-cta label="Quero o Raio-X do meu CPF" variant="ink" />
                    </div>
                </div>

                <aside class="benefits-sec__card" data-reveal="zoom">
                    <p class="benefits-sec__card-label">Diagnóstico Financeiro</p>
                    <p class="benefits-sec__card-title">Raio-X do CPF</p>
                    <ul>
                        <li>Cadastro, Comportamento e Capacidade</li>
                        <li>Rating, Score, renda e pendências</li>
                        <li>Ordem de prioridade e prazo estimado</li>
                        <li>Indicação de solução ou confirmação de que não precisa de nenhuma</li>
                    </ul>
                    <x-buy-cta label="Quero o Raio-X do meu CPF" block />
                    <p class="benefits-sec__card-note">Pagamento seguro · análise no sistema real</p>
                </aside>
            </div>
        </section>

        {{-- ================= INVESTIMENTO ================= --}}
        <section class="section invest" id="investimento" aria-labelledby="invest-title">
            <div class="section__inner invest__grid">
                <div class="invest__copy" data-reveal="left">
                    <p class="section__label">Investimento</p>
                    <h2 class="section__title" id="invest-title">Quanto custa ler a própria ficha</h2>
                    <p class="section__text">Um Limpa Nome contratado sem diagnóstico custa a partir de R$ 1.299, e não resolve nada se o seu problema for Rating ou renda comprometida. Uma consultoria especializada custa R$ 6.900, e pode ser desnecessária no seu caso. Uma recusa de financiamento custa o imóvel que subiu de preço enquanto você tentava.</p>
                    <ul class="check-list">
                        <li>Leitura das três camadas do CPF</li>
                        <li>Score, Rating, renda, cadastro e pendências ocultas</li>
                        <li>Prazo estimado e ordem de prioridade</li>
                        <li>Indicação de solução ou confirmação de que não precisa de nenhuma</li>
                    </ul>
                </div>

                <aside class="invest__card" data-reveal="right">
                    <p class="invest__badge">Pacote completo</p>
                    <p class="invest__product">Diagnóstico Financeiro</p>
                    <p class="invest__name">Raio-X do CPF</p>
                    <ul>
                        <li>Análise individual no sistema real</li>
                        <li>Cadastro, Comportamento e Capacidade</li>
                        <li>Rating, Score, renda e pendências</li>
                        <li>Mapa do que fazer em seguida</li>
                    </ul>
                    <p class="invest__price-full">De R$ 179,90</p>
                    <p class="invest__price">Por R$ 89,90</p>
                    <p class="invest__installments">Pagamento somente via Pix</p>
                    <p class="invest__note">Entrega em poucos minutos. Diagnóstico em PDF, resumo no WhatsApp e explicação por áudio ou ligação.</p>
                    <x-buy-cta label="Quero o Raio-X do meu CPF" block />
                    <p class="invest__meta">Pagamento somente via Pix</p>
                </aside>
            </div>
        </section>

        {{-- ================= GARANTIA ================= --}}
        <section class="section section--ink guarantee" id="garantia" aria-labelledby="garantia-title">
            <div class="section__inner">
                <header class="guarantee__intro" data-reveal="up">
                    <p class="section__label">Antes de qualquer solução</p>
                    <h2 class="section__title" id="garantia-title">O diagnóstico vem antes do tratamento.</h2>
                    <p class="guarantee__lead">
                        O Raio-X existe para uma coisa só: mostrar o que está travando o seu crédito,
                        e o que fazer a respeito. Sem vender o que você não precisa.
                    </p>
                </header>

                <div class="guarantee__paths" data-reveal="up">
                    <div class="guarantee__path">
                        <p class="guarantee__path-label">Se precisa</p>
                        <h3>A gente mostra o porquê</h3>
                        <p>Limpa Nome, reabilitação, ajuste cadastral, tempo de espera ou outro caminho. Você recebe a indicação certa para o seu caso.</p>
                    </div>
                    <div class="guarantee__divider" aria-hidden="true">
                        <span>ou</span>
                    </div>
                    <div class="guarantee__path guarantee__path--accent">
                        <p class="guarantee__path-label">Se não precisa</p>
                        <h3>A gente fala</h3>
                        <p>Inclusive quando a recomendação for “não contrate nada”. Essa é a razão de o diagnóstico existir antes da solução.</p>
                    </div>
                </div>

                <div class="guarantee__cta" data-reveal="up">
                    <x-buy-cta label="Quero o Raio-X do meu CPF" />
                </div>
            </div>
        </section>

        {{-- ================= FAQ ================= --}}
        <section class="section section--ink faq" id="faq" aria-labelledby="faq-title">
            <div class="section__inner">
                <header class="faq__intro" data-reveal="up">
                    <p class="section__label">Tire suas dúvidas</p>
                    <h2 class="section__title" id="faq-title">Perguntas frequentes</h2>
                    <p class="faq__lead">
                        Antes de contratar qualquer solução, vale entender o que o Raio-X é,
                        o que ele entrega e o que ele não promete.
                    </p>
                </header>

                <div class="faq__list" data-reveal="up">
                    <details class="faq__item" open>
                        <summary>
                            <span class="faq__index">01</span>
                            <span class="faq__q">O que é o Raio-X do CPF, exatamente?</span>
                        </summary>
                        <div class="faq__body">
                            <p>É um diagnóstico. Uma análise completa das três camadas da sua ficha de crédito: Cadastro, Comportamento e Capacidade. Ele aponta a causa real das recusas. Não é Limpa Nome. É o exame que diz se você precisa disso ou de outra coisa.</p>
                        </div>
                    </details>
                    <details class="faq__item">
                        <summary>
                            <span class="faq__index">02</span>
                            <span class="faq__q">Em quanto tempo eu recebo?</span>
                        </summary>
                        <div class="faq__body">
                            <p>Em poucos minutos após o pagamento e o envio dos dados.</p>
                        </div>
                    </details>
                    <details class="faq__item">
                        <summary>
                            <span class="faq__index">03</span>
                            <span class="faq__q">O que eu recebo, na prática?</span>
                        </summary>
                        <div class="faq__body">
                            <p>Você recebe o diagnóstico em PDF, um resumo simplificado no WhatsApp e a explicação do diagnóstico por áudio ou ligação. O documento traz a causa identificada, a ordem de prioridade, o prazo estimado de resolução e a indicação de solução para o seu caso.</p>
                        </div>
                    </details>
                    <details class="faq__item">
                        <summary>
                            <span class="faq__index">04</span>
                            <span class="faq__q">Vocês limpam o meu nome?</span>
                        </summary>
                        <div class="faq__body">
                            <p>O Grupo Candle tem serviços de reabilitação de crédito, sim. Mas o diagnóstico vem antes e é independente: ele existe justamente para descobrir se você precisa deles. Se não precisar, a gente vai te dizer.</p>
                        </div>
                    </details>
                    <details class="faq__item">
                        <summary>
                            <span class="faq__index">05</span>
                            <span class="faq__q">Isso garante que eu vou conseguir crédito?</span>
                        </summary>
                        <div class="faq__body">
                            <p>Não. E desconfie de quem garantir. O que o Raio-X garante é que você vai saber o que está travando o seu crédito e o que fazer a respeito. Aprovação depende da instituição.</p>
                        </div>
                    </details>
                    <details class="faq__item">
                        <summary>
                            <span class="faq__index">06</span>
                            <span class="faq__q">Qual a diferença para a consulta gratuita do aplicativo?</span>
                        </summary>
                        <div class="faq__body">
                            <p>A consulta gratuita mostra Score e negativações, a camada de cima. O Raio-X lê Rating, Classificação Comercial, comprometimento de renda, inconsistências cadastrais e pendências ocultas. É a diferença entre olhar a temperatura e fazer o exame de sangue.</p>
                        </div>
                    </details>
                    <details class="faq__item">
                        <summary>
                            <span class="faq__index">07</span>
                            <span class="faq__q">Meus dados estão seguros?</span>
                        </summary>
                        <div class="faq__body">
                            <p>[Resposta a definir, LGPD, finalidade de uso, prazo de retenção. Precisa de texto do jurídico do cliente.]</p>
                        </div>
                    </details>
                    <details class="faq__item">
                        <summary>
                            <span class="faq__index">08</span>
                            <span class="faq__q">Formas de pagamento?</span>
                        </summary>
                        <div class="faq__body">
                            <p>Pagamento somente via Pix.</p>
                        </div>
                    </details>
                </div>

                <div class="faq__cta" data-reveal="up">
                    <x-buy-cta label="Quero o Raio-X do meu CPF" />
                </div>
            </div>
        </section>
    </main>

    <div class="mobile-bar" role="complementary" aria-label="Comprar diagnóstico">
        <p class="mobile-bar__text">
            <strong>Raio-X do CPF</strong>
            <span>Leia a ficha que o banco lê</span>
        </p>
        <a class="btn btn--flame btn--sm" href="{{ route('checkout.show') }}">Comprar</a>
    </div>

    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__top">
                <div class="footer__brand">
                    <a class="footer__logo-link" href="#topo" aria-label="Grupo Candle, início">
                        <img
                            class="footer__logo"
                            src="{{ asset('images/lp/logo-candle.png') }}"
                            srcset="{{ asset('images/lp/icons/logo-footer.png') }} 512w, {{ asset('images/lp/logo-candle.png') }} 2400w"
                            sizes="104px"
                            alt="Logo Grupo Candle"
                            width="512"
                            height="512"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                    <p class="footer__tagline">Diagnóstico Financeiro: leia Cadastro, Comportamento e Capacidade antes de contratar qualquer solução.</p>
                    <a class="btn btn--flame btn--sm footer__buy" href="{{ route('checkout.show') }}">Comprar diagnóstico</a>
                </div>

                <nav class="footer__col" aria-label="Navegação">
                    <p class="footer__col-title">Navegue</p>
                    <a href="#problema">O problema</a>
                    <a href="#como-funciona">Como funciona</a>
                    <a href="#incluso">O que inclui</a>
                    <a href="#investimento">Investimento</a>
                    <a href="#faq">FAQ</a>
                </nav>

                <div class="footer__col">
                    <p class="footer__col-title">Comece agora</p>
                    <a href="{{ route('checkout.show') }}">Comprar diagnóstico</a>
                    <a href="#investimento">Ver investimento</a>
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
