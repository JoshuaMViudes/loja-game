<?php
session_start();

// Configurações dos produtos
$produtos = [
    'steam' => [
        'nome' => 'Pack Completo Steam',
        'total_jogos' => '73.000+',
        'preco_original' => 299.90,
        'preco_promocao1' => 149.90,
        'preco_final' => 29.90,
        'descricao' => 'Toda a biblioteca Steam completa em suas mãos',
        'icone' => 'fab fa-steam',
        'cor' => 'from-blue-500 to-purple-500',
        'desconto' => '90%',
        'bonus' => [
            'Instalação Simplificada',
            'Suporte Técnico Completo',
            'Atualizações Vitalícias',
            'Tutorial em Vídeo'
        ]
    ],
    'emuladores' => [
        'nome' => 'Pack Emuladores + Bônus',
        'total_jogos' => '150.000+',
        'preco_original' => 399.90,
        'preco_promocao1' => 199.90,
        'preco_final' => 39.90,
        'descricao' => 'Todos os clássicos de PS1, PS2, PS3, Nintendo, Xbox e muito mais + bônus exclusivos',
        'icone' => 'fas fa-gamepad',
        'cor' => 'from-red-500 to-orange-500',
        'desconto' => '90%',
        'bonus' => [
            'Pacote de ROMs Premium',
            'Emuladores Pré-configurados',
            'Controles Customizados',
            'Tutorial Completo em Vídeo'
        ]
    ],
    'combo' => [
        'nome' => 'COMBO SUPREMO',
        'total_jogos' => '220.000+',
        'preco_original' => 699.80,
        'preco_promocao1' => 349.80,
        'preco_final' => 49.90,
        'descricao' => 'Steam + Emuladores + Todos os Bônus - A biblioteca definitiva de games',
        'icone' => 'fas fa-crown',
        'cor' => 'from-yellow-500 to-pink-500',
        'economia' => 19.90,
        'desconto' => '93%',
        'bonus' => [
            'Pacote de ROMs Premium',
            'Emuladores Pré-configurados',
            'Controles Customizados',
            'Instalação Simplificada',
            'Suporte Técnico Completo',
            'Atualizações Vitalícias'
        ]
    ]
];

$destaque = 'PROMOÇÃO RELÂMPAGO - ATÉ 93% OFF';
$whatsapp = '5514988173958';

// Estatísticas reais da Steam
$stats_steam = [
    'total_jogos' => '73.000',
    'valor_total_estimado' => '387.000',
    'jogos_acao' => '18.500',
    'jogos_aventura' => '15.200',
    'jogos_rpg' => '12.800',
    'jogos_estrategia' => '9.400',
    'jogos_simulacao' => '8.600',
    'jogos_esportes' => '4.200',
    'jogos_corrida' => '2.800',
    'jogos_indie' => '35.000'
];

$jogos_steam = [
    ['nome' => 'Counter-Strike 2', 'icon' => 'fa-crosshairs', 'preco' => 0],
    ['nome' => 'Dota 2', 'icon' => 'fa-hat-wizard', 'preco' => 0],
    ['nome' => 'PUBG', 'icon' => 'fa-parachute-box', 'preco' => 29.99],
    ['nome' => 'GTA V', 'icon' => 'fa-car', 'preco' => 89.99],
    ['nome' => 'Red Dead Redemption 2', 'icon' => 'fa-horse', 'preco' => 299.00],
    ['nome' => 'Cyberpunk 2077', 'icon' => 'fa-robot', 'preco' => 249.00],
    ['nome' => 'Elden Ring', 'icon' => 'fa-dragon', 'preco' => 249.00],
    ['nome' => 'The Witcher 3', 'icon' => 'fa-hat-wizard', 'preco' => 119.90],
    ['nome' => 'God of War', 'icon' => 'fa-hand-fist', 'preco' => 199.00], // CORRIGIDO
    ['nome' => 'Resident Evil Village', 'icon' => 'fa-biohazard', 'preco' => 249.00],
    ['nome' => 'Starfield', 'icon' => 'fa-rocket', 'preco' => 349.00],
    ['nome' => 'Baldur\'s Gate 3', 'icon' => 'fa-dice-d20', 'preco' => 199.00],
    ['nome' => 'Hogwarts Legacy', 'icon' => 'fa-wand-magic-sparkles', 'preco' => 299.00],
    ['nome' => 'Spider-Man Remastered', 'icon' => 'fa-spider', 'preco' => 249.00],
    ['nome' => 'Horizon Zero Dawn', 'icon' => 'fa-bullseye', 'preco' => 149.00], // CORRIGIDO
    ['nome' => 'Death Stranding', 'icon' => 'fa-baby', 'preco' => 199.00],
    ['nome' => 'Sekiro', 'icon' => 'fa-sword', 'preco' => 179.00],
    ['nome' => 'Dark Souls III', 'icon' => 'fa-fire', 'preco' => 129.00],
    ['nome' => 'Doom Eternal', 'icon' => 'fa-skull', 'preco' => 149.00],
    ['nome' => 'Hades', 'icon' => 'fa-bolt', 'preco' => 49.00],
];

// Jogos de emuladores
$jogos_emuladores = [
    ['nome' => 'The Last of Us', 'console' => 'PS3', 'icon' => 'fa-ghost'],
    ['nome' => 'God of War 3', 'console' => 'PS3', 'icon' => 'fa-khanda'],
    ['nome' => 'GTA San Andreas', 'console' => 'PS2', 'icon' => 'fa-car-side'],
    ['nome' => 'The Legend of Zelda', 'console' => 'Switch', 'icon' => 'fa-chess-knight'],
    ['nome' => 'Super Mario Odyssey', 'console' => 'Switch', 'icon' => 'fa-star'],
    ['nome' => 'Pokémon Sword', 'console' => 'Switch', 'icon' => 'fa-dragon'],
    ['nome' => 'Crash Bandicoot', 'console' => 'PS1', 'icon' => 'fa-paw'],
    ['nome' => 'Super Mario 64', 'console' => 'N64', 'icon' => 'fa-cube'],
    ['nome' => 'Sonic Adventure', 'console' => 'Dreamcast', 'icon' => 'fa-wind'],
    ['nome' => 'Halo 3', 'console' => 'Xbox 360', 'icon' => 'fa-circle'],
    ['nome' => 'Final Fantasy VII', 'console' => 'PS1', 'icon' => 'fa-dragon'],
    ['nome' => 'Metal Gear Solid', 'console' => 'PS1', 'icon' => 'fa-user-secret'],
    ['nome' => 'Resident Evil 4', 'console' => 'PS2', 'icon' => 'fa-biohazard'],
    ['nome' => 'Kingdom Hearts', 'console' => 'PS2', 'icon' => 'fa-heart'],
    ['nome' => 'Tekken 3', 'console' => 'PS1', 'icon' => 'fa-hand-fist'],
];

// Categorias Steam
$categorias_steam = [
    ['nome' => 'Ação', 'icon' => 'fa-fire', 'cor' => 'from-red-500 to-orange-500', 'total' => '18.500+'],
    ['nome' => 'Aventura', 'icon' => 'fa-mountain', 'cor' => 'from-green-500 to-teal-500', 'total' => '15.200+'],
    ['nome' => 'RPG', 'icon' => 'fa-hat-wizard', 'cor' => 'from-purple-500 to-pink-500', 'total' => '12.800+'],
    ['nome' => 'Estratégia', 'icon' => 'fa-chess', 'cor' => 'from-blue-500 to-cyan-500', 'total' => '9.400+'],
    ['nome' => 'Simulação', 'icon' => 'fa-plane', 'cor' => 'from-indigo-500 to-purple-500', 'total' => '8.600+'],
    ['nome' => 'Esportes', 'icon' => 'fa-futbol', 'cor' => 'from-yellow-500 to-orange-500', 'total' => '4.200+'],
    ['nome' => 'Corrida', 'icon' => 'fa-flag-checkered', 'cor' => 'from-red-500 to-pink-500', 'total' => '2.800+'],
    ['nome' => 'Indie', 'icon' => 'fa-lightbulb', 'cor' => 'from-teal-500 to-green-500', 'total' => '35.000+'],
];

// Consoles emuladores
$consoles = [
    ['nome' => 'PlayStation 1', 'icon' => 'fa-playstation', 'cor' => 'from-blue-600 to-blue-800', 'total' => '2.800+'],
    ['nome' => 'PlayStation 2', 'icon' => 'fa-playstation', 'cor' => 'from-blue-500 to-blue-700', 'total' => '4.300+'],
    ['nome' => 'PlayStation 3', 'icon' => 'fa-playstation', 'cor' => 'from-blue-400 to-blue-600', 'total' => '3.200+'],
    ['nome' => 'PSP', 'icon' => 'fa-mobile-screen-button', 'cor' => 'from-purple-500 to-purple-700', 'total' => '2.100+'], // CORRIGIDO
    ['nome' => 'Nintendo 64', 'icon' => 'fa-n', 'cor' => 'from-red-500 to-red-700', 'total' => '800+'], // CORRIGIDO
    ['nome' => 'GameCube', 'icon' => 'fa-cube', 'cor' => 'from-purple-600 to-indigo-700', 'total' => '1.200+'],
    ['nome' => 'Wii', 'icon' => 'fa-tv', 'cor' => 'from-blue-300 to-blue-500', 'total' => '1.600+'], // CORRIGIDO
    ['nome' => 'Nintendo Switch', 'icon' => 'fa-tablet-screen-button', 'cor' => 'from-red-400 to-blue-400', 'total' => '5.400+'], // CORRIGIDO
    ['nome' => 'Xbox Classic', 'icon' => 'fa-xbox', 'cor' => 'from-green-600 to-green-800', 'total' => '1.900+'],
    ['nome' => 'Xbox 360', 'icon' => 'fa-xbox', 'cor' => 'from-green-500 to-green-700', 'total' => '2.400+'],
    ['nome' => 'Sega Genesis', 'icon' => 'fa-circle-notch', 'cor' => 'from-gray-600 to-gray-800', 'total' => '1.500+'], // CORRIGIDO
    ['nome' => 'Arcade Clássicos', 'icon' => 'fa-trophy', 'cor' => 'from-yellow-500 to-orange-500', 'total' => '8.000+'], // CORRIGIDO
];

// Motivos do preço baixo
$motivos_preco = [
    [
        'icone' => 'fa-rocket',
        'titulo' => 'Promoção de Lançamento',
        'texto' => 'Estamos lançando nossa plataforma e oferecendo preços promocionais para os primeiros clientes!'
    ],
    [
        'icone' => 'fa-users',
        'titulo' => 'Volume de Vendas',
        'texto' => 'Vendemos em grande quantidade, o que permite oferecer preços muito mais baixos que o normal.'
    ],
    [
        'icone' => 'fa-server',
        'titulo' => 'Sistema Automatizado',
        'texto' => 'Nossa entrega é digital e automatizada, sem custos de armazenamento ou envio físico.'
    ],
    [
        'icone' => 'fa-heart',
        'titulo' => 'Acessibilidade aos Games',
        'texto' => 'Acreditamos que todos devem ter acesso aos melhores jogos sem gastar fortunas!'
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Paradise - 220.000+ Jogos a partir de R$ 29,90</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Rajdhani', sans-serif;
            background: #0a0e27;
            color: #fff;
            overflow-x: hidden;
        }

        .orbitron {
            font-family: 'Orbitron', sans-serif;
        }

        .bg-animated {
            background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 50%, #0f1729 100%);
            position: relative;
        }

        .bg-animated::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(88, 166, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(255, 107, 107, 0.1) 0%, transparent 50%);
            animation: pulse 10s ease-in-out infinite;
            z-index: 0;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 1;
            }
        }

        .grid-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(88, 166, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(88, 166, 255, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
            z-index: 0;
        }

        @keyframes gridMove {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(50px, 50px);
            }
        }

        .container-main {
            position: relative;
            z-index: 1;
        }

        .neon-text {
            text-shadow: 0 0 10px rgba(88, 166, 255, 0.8),
                0 0 20px rgba(88, 166, 255, 0.6),
                0 0 30px rgba(88, 166, 255, 0.4);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        .btn-gamer {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }

        .btn-gamer::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .btn-gamer:hover::before {
            left: 100%;
        }

        .btn-gamer:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 40px rgba(102, 126, 234, 0.6);
        }

        .btn-gamer:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .btn-whatsapp {
            background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
        }

        .btn-whatsapp:hover {
            box-shadow: 0 10px 40px rgba(37, 211, 102, 0.6);
        }

        .produto-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .produto-card:hover {
            transform: translateY(-10px);
        }

        .produto-card.selecionado {
            border: 3px solid #25D366;
            box-shadow: 0 0 30px rgba(37, 211, 102, 0.5);
        }

        .badge-destaque {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            animation: pulse-badge 2s ease-in-out infinite;
        }

        @keyframes pulse-badge {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .preco-riscado {
            text-decoration: line-through;
            opacity: 0.6;
        }

        .tab-button {
            transition: all 0.3s ease;
        }

        .tab-button.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .particle {
            position: fixed;
            width: 3px;
            height: 3px;
            background: rgba(88, 166, 255, 0.5);
            border-radius: 50%;
            animation: particleFloat 15s linear infinite;
            z-index: 0;
            pointer-events: none;
        }

        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }

        .input-gamer {
            background: rgba(255, 255, 255, 0.08);
            border: 2px solid rgba(88, 166, 255, 0.4);
            color: #fff;
            transition: all 0.3s ease;
        }

        .input-gamer:focus {
            outline: none;
            border-color: #58a6ff;
            box-shadow: 0 0 20px rgba(88, 166, 255, 0.4);
            background: rgba(255, 255, 255, 0.12);
        }

        .input-gamer::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .radio-produto {
            display: none;
        }

        .radio-label {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .radio-produto:checked+.radio-label {
            border-color: #25D366;
            box-shadow: 0 0 20px rgba(37, 211, 102, 0.4);
        }

        .radio-produto:checked+.radio-label .radio-check {
            opacity: 1;
            transform: scale(1);
        }

        .radio-check {
            opacity: 0;
            transform: scale(0);
            transition: all 0.3s ease;
        }

        details summary {
            list-style: none;
            user-select: none;
            cursor: pointer;
        }

        details summary::-webkit-details-marker {
            display: none;
        }

        details[open] summary i {
            transform: rotate(90deg);
        }

        details summary i {
            transition: transform 0.3s ease;
        }

        html {
            scroll-behavior: smooth;
        }

        @media (max-width: 768px) {
            .neon-text {
                font-size: 2rem !important;
            }
        }

        @keyframes blink {

            0%,
            50%,
            100% {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0.5;
            }
        }

        .blink {
            animation: blink 2s infinite;
        }

        .bonus-item {
            background: rgba(255, 215, 0, 0.15);
            border-left: 4px solid #ffd700;
        }

        .motivo-card {
            transition: all 0.3s ease;
        }

        .motivo-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(88, 166, 255, 0.3);
        }
    </style>
</head>

<body class="bg-animated">
    <div class="grid-bg"></div>

    <!-- Partículas -->
    <?php for ($i = 0; $i < 12; $i++): ?>
        <div class="particle" style="left: <?php echo ($i * 8 + 5); ?>%; animation-delay: <?php echo ($i * 1.2); ?>s;"></div>
    <?php endfor; ?>

    <div class="container-main min-h-screen py-6 md:py-10">
        <!-- Header -->
        <header class="text-center mb-8 md:mb-16 px-4">
            <div class="inline-block mb-6">
                <i class="fas fa-crown text-5xl md:text-7xl neon-text text-yellow-400"></i>
            </div>
            <h1 class="text-4xl md:text-7xl font-black orbitron neon-text mb-4">
                GAME PARADISE
            </h1>
            <p class="text-lg md:text-2xl text-gray-300 font-light mb-2">
                A Maior Biblioteca de Jogos do Brasil
            </p>
            <p class="text-xl md:text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-pink-500">
                +220.000 Jogos • A partir de R$ 29,90
            </p>
        </header>

        <div class="max-w-7xl mx-auto px-4">
            <!-- Badge de destaque -->
            <div class="text-center mb-8">
                <span class="badge-destaque inline-block px-6 py-3 rounded-full text-white font-bold orbitron text-xs md:text-sm">
                    <i class="fas fa-fire mr-2 blink"></i>
                    <?php echo $destaque; ?>
                </span>
            </div>

            <!-- Por que o preço está tão baixo? -->
            <div class="glass-card p-6 md:p-8 mb-12">
                <h2 class="text-3xl md:text-4xl font-bold orbitron text-center mb-4">
                    <i class="fas fa-tags mr-2 text-yellow-400"></i>
                    Por Que O Preço Está Tão Baixo?
                </h2>
                <p class="text-center text-gray-200 mb-8 max-w-3xl mx-auto text-base md:text-lg leading-relaxed">
                    Você deve estar se perguntando: <em class="text-yellow-300">"Como é possível ter acesso a mais de 220.000 jogos por menos de R$ 50?"</em>
                    <br><br><strong class="text-green-400 text-xl">Aqui está a explicação:</strong>
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($motivos_preco as $motivo): ?>
                        <div class="motivo-card bg-white bg-opacity-5 rounded-lg p-6 text-center">
                            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 flex items-center justify-center">
                                <i class="fas <?php echo $motivo['icone']; ?> text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2 text-white"><?php echo $motivo['titulo']; ?></h3>
                            <p class="text-sm text-gray-300"><?php echo $motivo['texto']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mt-8 bg-gradient-to-r from-green-900 to-teal-900 bg-opacity-40 rounded-lg p-6 text-center border border-green-500">
                    <p class="text-lg md:text-xl text-green-300 font-bold mb-2">
                        <i class="fas fa-check-circle mr-2"></i>
                        É TUDO REAL E LEGAL!
                    </p>
                    <p class="text-sm md:text-base text-gray-200">
                        Aproveitamos essa oportunidade única para crescer nossa base de clientes e construir uma reputação sólida no mercado.
                        <strong>Seu investimento agora garante acesso vitalício!</strong>
                    </p>
                </div>
            </div>

            <!-- Cards de Produtos -->
            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <!-- Steam Pack -->
                <div class="produto-card glass-card p-6 md:p-8" onclick="selecionarProduto('steam')" id="card-steam">
                    <div class="text-center mb-4">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-gradient-to-r <?php echo $produtos['steam']['cor']; ?> flex items-center justify-center">
                            <i class="<?php echo $produtos['steam']['icone']; ?> text-4xl"></i>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold orbitron mb-2"><?php echo $produtos['steam']['nome']; ?></h3>
                        <p class="text-sm text-gray-300 mb-4"><?php echo $produtos['steam']['descricao']; ?></p>

                        <div class="bg-blue-500 bg-opacity-20 rounded-lg p-3 mb-4">
                            <div class="text-3xl font-black text-blue-300"><?php echo $produtos['steam']['total_jogos']; ?></div>
                            <div class="text-xs text-gray-300">jogos incluídos</div>
                        </div>

                        <div class="bg-gradient-to-r from-blue-900 to-purple-900 bg-opacity-50 rounded-lg p-3 mb-4 text-left">
                            <p class="text-xs font-bold text-blue-300 mb-2">
                                <i class="fas fa-gift mr-1"></i>Bônus Inclusos:
                            </p>
                            <ul class="text-xs text-gray-200 space-y-1">
                                <?php foreach ($produtos['steam']['bonus'] as $bonus): ?>
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-400 mr-2 text-xs"></i>
                                        <?php echo $bonus; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="mb-4">
                            <p class="text-xs text-gray-300 mb-1">
                                De <span class="preco-riscado text-sm">R$ <?php echo number_format($produtos['steam']['preco_original'], 2, ',', '.'); ?></span>
                            </p>
                            <p class="text-xs text-gray-300 mb-1">
                                Por <span class="preco-riscado text-base">R$ <?php echo number_format($produtos['steam']['preco_promocao1'], 2, ',', '.'); ?></span>
                            </p>
                            <p class="text-sm text-green-400 mb-2">Apenas</p>
                            <p class="text-5xl font-black orbitron text-white">
                                R$ <?php echo number_format($produtos['steam']['preco_final'], 2, ',', '.'); ?>
                            </p>
                        </div>

                        <div class="bg-yellow-400 text-gray-900 px-3 py-1 rounded-full inline-block font-bold text-sm">
                            <?php echo $produtos['steam']['desconto']; ?> OFF
                        </div>
                    </div>
                </div>

                <!-- Emuladores Pack -->
                <div class="produto-card glass-card p-6 md:p-8 relative" onclick="selecionarProduto('emuladores')" id="card-emuladores">
                    <div class="absolute top-0 right-0 bg-gradient-to-br from-orange-400 to-red-500 px-3 py-1 rounded-bl-2xl rounded-tr-2xl">
                        <p class="text-xs font-black text-white">+ BÔNUS</p>
                    </div>

                    <div class="text-center mb-4 mt-6">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-gradient-to-r <?php echo $produtos['emuladores']['cor']; ?> flex items-center justify-center">
                            <i class="<?php echo $produtos['emuladores']['icone']; ?> text-4xl"></i>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold orbitron mb-2"><?php echo $produtos['emuladores']['nome']; ?></h3>
                        <p class="text-sm text-gray-300 mb-4"><?php echo $produtos['emuladores']['descricao']; ?></p>

                        <div class="bg-red-500 bg-opacity-20 rounded-lg p-3 mb-4">
                            <div class="text-3xl font-black text-red-300"><?php echo $produtos['emuladores']['total_jogos']; ?></div>
                            <div class="text-xs text-gray-300">jogos + bônus</div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-900 to-orange-900 bg-opacity-50 rounded-lg p-3 mb-4 text-left">
                            <p class="text-xs font-bold text-yellow-300 mb-2">
                                <i class="fas fa-gift mr-1"></i>Bônus Inclusos:
                            </p>
                            <ul class="text-xs text-gray-200 space-y-1">
                                <?php foreach ($produtos['emuladores']['bonus'] as $bonus): ?>
                                    <li class="flex items-center">
                                        <i class="fas fa-check text-green-400 mr-2 text-xs"></i>
                                        <?php echo $bonus; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="mb-4">
                            <p class="text-xs text-gray-300 mb-1">
                                De <span class="preco-riscado text-sm">R$ <?php echo number_format($produtos['emuladores']['preco_original'], 2, ',', '.'); ?></span>
                            </p>
                            <p class="text-xs text-gray-300 mb-1">
                                Por <span class="preco-riscado text-base">R$ <?php echo number_format($produtos['emuladores']['preco_promocao1'], 2, ',', '.'); ?></span>
                            </p>
                            <p class="text-sm text-green-400 mb-2">Apenas</p>
                            <p class="text-5xl font-black orbitron text-white">
                                R$ <?php echo number_format($produtos['emuladores']['preco_final'], 2, ',', '.'); ?>
                            </p>
                        </div>

                        <div class="bg-yellow-400 text-gray-900 px-3 py-1 rounded-full inline-block font-bold text-sm">
                            <?php echo $produtos['emuladores']['desconto']; ?> OFF
                        </div>
                    </div>
                </div>

                <!-- Combo SUPREMO -->
                <div class="produto-card glass-card p-6 md:p-8 selecionado relative overflow-hidden" onclick="selecionarProduto('combo')" id="card-combo">
                    <div class="absolute top-0 right-0 bg-gradient-to-br from-yellow-400 to-pink-500 px-4 py-2 rounded-bl-2xl">
                        <p class="text-xs font-black text-gray-900">MAIS VENDIDO</p>
                    </div>

                    <div class="text-center mb-4 mt-8">
                        <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-gradient-to-r <?php echo $produtos['combo']['cor']; ?> flex items-center justify-center animate-pulse">
                            <i class="<?php echo $produtos['combo']['icone']; ?> text-4xl"></i>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold orbitron mb-2 text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-pink-500">
                            <?php echo $produtos['combo']['nome']; ?>
                        </h3>
                        <p class="text-sm text-gray-300 mb-4"><?php echo $produtos['combo']['descricao']; ?></p>

                        <div class="bg-gradient-to-r from-yellow-500 to-pink-500 bg-opacity-20 rounded-lg p-3 mb-4 border-2 border-yellow-400">
                            <div class="text-3xl font-black text-yellow-300"><?php echo $produtos['combo']['total_jogos']; ?></div>
                            <div class="text-xs text-gray-200">Steam + Emuladores + Bônus</div>
                        </div>

                        <!-- Bônus Combo SEM SCROLL -->
                        <div class="bg-gradient-to-r from-purple-900 to-pink-900 bg-opacity-50 rounded-lg p-3 mb-4 text-left">
                            <p class="text-xs font-bold text-yellow-300 mb-2">
                                <i class="fas fa-gift mr-1"></i>Todos os Bônus:
                            </p>
                            <div class="grid grid-cols-2 gap-1 text-xs text-gray-200">
                                <?php foreach ($produtos['combo']['bonus'] as $bonus): ?>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-400 mr-1 text-xs mt-0.5 flex-shrink-0"></i>
                                        <span><?php echo $bonus; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="text-xs text-gray-300 mb-1">
                                De <span class="preco-riscado text-sm">R$ <?php echo number_format($produtos['combo']['preco_original'], 2, ',', '.'); ?></span>
                            </p>
                            <p class="text-xs text-gray-300 mb-1">
                                Por <span class="preco-riscado text-base">R$ <?php echo number_format($produtos['combo']['preco_promocao1'], 2, ',', '.'); ?></span>
                            </p>
                            <p class="text-sm text-green-400 mb-2">Apenas</p>
                            <p class="text-5xl font-black orbitron text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-pink-500">
                                R$ <?php echo number_format($produtos['combo']['preco_final'], 2, ',', '.'); ?>
                            </p>
                        </div>

                        <div class="space-y-2">
                            <div class="bg-yellow-400 text-gray-900 px-3 py-1 rounded-full inline-block font-bold text-sm">
                                <?php echo $produtos['combo']['desconto']; ?> OFF
                            </div>
                            <p class="text-xs text-green-400 font-bold">
                                <i class="fas fa-piggy-bank mr-1"></i>Economize comprando tudo junto!
                            </p>
                            <div class="bg-green-500 bg-opacity-20 border border-green-400 rounded-lg p-2 mt-2">
                                <p class="text-xs font-bold text-green-300">
                                    <i class="fas fa-percentage mr-1"></i>
                                    Melhor Custo-Benefício!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulário de Compra -->
            <div class="glass-card p-6 md:p-8 mb-12 max-w-4xl mx-auto" id="formCompra">
                <h2 class="text-3xl md:text-4xl font-bold orbitron text-center mb-8">
                    <i class="fab fa-whatsapp mr-2 text-green-400"></i>
                    Solicitar Compra via WhatsApp
                </h2>

                <form id="formPedido" class="space-y-6">
                    <!-- Seleção de Produto -->
                    <div>
                        <label class="block text-lg font-bold mb-4 text-center text-white">
                            <i class="fas fa-box mr-2"></i>Escolha Seu Pacote
                        </label>
                        <div class="grid md:grid-cols-3 gap-4">
                            <!-- Radio Steam -->
                            <input type="radio" name="produto" value="steam" id="radio-steam" class="radio-produto">
                            <label for="radio-steam" class="radio-label glass-card p-4 relative">
                                <div class="radio-check absolute top-2 right-2 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                <div class="text-center">
                                    <i class="fab fa-steam text-4xl text-blue-400 mb-2"></i>
                                    <h4 class="font-bold mb-1 text-white">Pack Steam</h4>
                                    <p class="text-2xl font-black text-green-400">R$ 29,90</p>
                                    <p class="text-xs text-gray-300 mt-1">73.000+ jogos</p>
                                </div>
                            </label>

                            <!-- Radio Emuladores -->
                            <input type="radio" name="produto" value="emuladores" id="radio-emuladores" class="radio-produto">
                            <label for="radio-emuladores" class="radio-label glass-card p-4 relative">
                                <div class="radio-check absolute top-2 right-2 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                <div class="text-center">
                                    <i class="fas fa-gamepad text-4xl text-red-400 mb-2"></i>
                                    <h4 class="font-bold mb-1 text-white">Emuladores + Bônus</h4>
                                    <p class="text-2xl font-black text-green-400">R$ 39,90</p>
                                    <p class="text-xs text-gray-300 mt-1">150.000+ jogos</p>
                                </div>
                            </label>

                            <!-- Radio Combo -->
                            <input type="radio" name="produto" value="combo" id="radio-combo" class="radio-produto" checked>
                            <label for="radio-combo" class="radio-label glass-card p-4 relative border-2 border-yellow-400">
                                <div class="absolute top-0 left-0 bg-yellow-400 text-gray-900 text-xs font-black px-2 py-1 rounded-br-lg">
                                    RECOMENDADO
                                </div>
                                <div class="radio-check absolute top-2 right-2 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                <div class="text-center mt-4">
                                    <i class="fas fa-crown text-4xl text-yellow-400 mb-2"></i>
                                    <h4 class="font-bold mb-1 text-white">COMBO Supremo</h4>
                                    <p class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-pink-500">R$ 49,90</p>
                                    <p class="text-xs text-gray-300 mt-1">220.000+ jogos</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-white">
                                <i class="fas fa-user mr-2"></i>Nome Completo
                            </label>
                            <input
                                type="text"
                                name="nome"
                                id="nome"
                                required
                                class="input-gamer w-full px-4 py-3 rounded-lg text-sm md:text-base"
                                placeholder="Digite seu nome completo">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-2 text-white">
                                <i class="fas fa-envelope mr-2"></i>Seu Email
                            </label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                required
                                class="input-gamer w-full px-4 py-3 rounded-lg text-sm md:text-base"
                                placeholder="seuemail@gmail.com">
                        </div>
                    </div>

                    <div class="bg-blue-500 bg-opacity-15 border border-blue-400 rounded-lg p-4">
                        <h4 class="font-bold text-white mb-2 flex items-center">
                            <i class="fas fa-info-circle mr-2"></i>
                            Como Funciona o Pagamento?
                        </h4>
                        <ol class="text-sm text-gray-200 space-y-2 ml-4">
                            <li><strong>1.</strong> Preencha seus dados e escolha o pacote desejado</li>
                            <li><strong>2.</strong> Clique em "Solicitar via WhatsApp"</li>
                            <li><strong>3.</strong> Você será redirecionado ao WhatsApp com sua solicitação</li>
                            <li><strong>4.</strong> Receberá a chave PIX para pagamento</li>
                            <li><strong>5.</strong> Após confirmar o pagamento, recebe tudo em até 24h no email</li>
                        </ol>
                    </div>

                    <div class="bg-green-500 bg-opacity-15 border border-green-400 rounded-lg p-4">
                        <p class="text-green-300 text-xs md:text-sm flex items-start">
                            <i class="fas fa-shield-check mr-2 mt-1 flex-shrink-0 text-base md:text-lg"></i>
                            <span><strong>100% Seguro:</strong> Você só efetua o pagamento após receber todas as informações via WhatsApp. Sem riscos, sem pegadinhas!</span>
                        </p>
                    </div>

                    <button
                        type="submit"
                        id="btnComprar"
                        class="btn-gamer btn-whatsapp w-full py-5 rounded-lg font-bold text-base md:text-xl orbitron text-white relative">
                        <span id="btnTexto">
                            <i class="fab fa-whatsapp mr-2"></i>
                            SOLICITAR VIA WHATSAPP
                        </span>
                    </button>

                    <div class="grid grid-cols-3 gap-2 text-center text-xs text-gray-300 pt-4 border-t border-gray-700">
                        <div>
                            <i class="fas fa-lock text-green-400 text-xl mb-1"></i>
                            <p>Pagamento Seguro</p>
                        </div>
                        <div>
                            <i class="fas fa-whatsapp text-green-400 text-xl mb-1"></i>
                            <p>Via WhatsApp</p>
                        </div>
                        <div>
                            <i class="fab fa-pix text-cyan-400 text-xl mb-1"></i>
                            <p>PIX Instantâneo</p>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Tabs de Conteúdo -->
            <div class="mb-12">
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    <button class="tab-button active px-6 py-3 rounded-full font-bold orbitron" onclick="mudarTab('steam')">
                        <i class="fab fa-steam mr-2"></i>Steam
                    </button>
                    <button class="tab-button px-6 py-3 rounded-full font-bold orbitron bg-white bg-opacity-5" onclick="mudarTab('emuladores')">
                        <i class="fas fa-gamepad mr-2"></i>Emuladores
                    </button>
                </div>

                <!-- Conteúdo Steam -->
                <div id="tab-steam" class="tab-content">
                    <!-- Estatísticas Steam -->
                    <div class="glass-card p-6 md:p-8 mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold orbitron text-center mb-8">
                            <i class="fab fa-steam mr-2 text-blue-400"></i>
                            Biblioteca Steam Completa
                        </h2>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                            <div class="bg-gradient-to-br from-blue-500 to-purple-500 bg-opacity-20 rounded-lg p-4 text-center">
                                <div class="text-2xl md:text-3xl font-black text-white"><?php echo number_format(73000, 0, '.', '.'); ?></div>
                                <div class="text-xs text-gray-200">Jogos Totais</div>
                            </div>
                            <div class="bg-gradient-to-br from-green-500 to-teal-500 bg-opacity-20 rounded-lg p-4 text-center">
                                <div class="text-lg md:text-xl font-black text-white">R$ 387 mil</div>
                                <div class="text-xs text-gray-200">Valor Total*</div>
                            </div>
                            <div class="bg-gradient-to-br from-yellow-500 to-orange-500 bg-opacity-20 rounded-lg p-4 text-center">
                                <div class="text-2xl md:text-3xl font-black text-white">99,99%</div>
                                <div class="text-xs text-gray-200">Economia</div>
                            </div>
                            <div class="bg-gradient-to-br from-pink-500 to-red-500 bg-opacity-20 rounded-lg p-4 text-center">
                                <div class="text-2xl md:text-3xl font-black text-white">R$ 29,90</div>
                                <div class="text-xs text-gray-200">Seu Investimento</div>
                            </div>
                        </div>

                        <p class="text-xs text-center">
                            <span class="text-gray-400">*Valor estimado: R$ 387.000 (trezentos e oitenta e sete mil reais)</span>
                            <br>
                            <span class="text-gray-300">Se você comprasse cada jogo individualmente na Steam</span>
                        </p>
                    </div>

                    <!-- Categorias Steam -->
                    <div class="glass-card p-6 md:p-8 mb-8">
                        <h3 class="text-2xl md:text-3xl font-bold orbitron text-center mb-6">
                            Categorias Steam
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <?php foreach ($categorias_steam as $cat): ?>
                                <div class="bg-white bg-opacity-5 rounded-lg p-4 text-center hover:bg-opacity-10 transition-all cursor-pointer">
                                    <div class="w-12 h-12 md:w-16 md:h-16 mx-auto mb-3 rounded-full bg-gradient-to-r <?php echo $cat['cor']; ?> flex items-center justify-center">
                                        <i class="fas <?php echo $cat['icon']; ?> text-xl md:text-2xl"></i>
                                    </div>
                                    <h4 class="font-bold text-sm md:text-base mb-1 text-white"><?php echo $cat['nome']; ?></h4>
                                    <p class="text-xs text-gray-300"><?php echo $cat['total']; ?> jogos</p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Jogos Populares Steam -->
                    <div class="glass-card p-6 md:p-8 mb-8">
                        <h3 class="text-2xl md:text-3xl font-bold orbitron text-center mb-6">
                            <i class="fas fa-star mr-2 text-yellow-400"></i>
                            Jogos Mais Procurados
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                            <?php foreach ($jogos_steam as $jogo): ?>
                                <div class="bg-white bg-opacity-5 rounded-lg p-4 text-center hover:bg-opacity-10 transition-all">
                                    <div class="w-12 h-12 mx-auto mb-2 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 flex items-center justify-center">
                                        <i class="fas <?php echo $jogo['icon']; ?> text-lg"></i>
                                    </div>
                                    <h4 class="font-bold text-xs mb-1 text-white"><?php echo $jogo['nome']; ?></h4>
                                    <?php if ($jogo['preco'] > 0): ?>
                                        <p class="text-xs text-gray-400 line-through">R$ <?php echo number_format($jogo['preco'], 2, ',', '.'); ?></p>
                                    <?php endif; ?>
                                    <p class="text-xs text-green-400 mt-1">
                                        <i class="fas fa-check-circle mr-1"></i>Incluído
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <p class="text-center text-gray-300 mt-6 text-sm">
                            E mais <?php echo number_format(73000 - count($jogos_steam), 0, '.', '.'); ?>+ outros jogos disponíveis!
                        </p>
                    </div>
                </div>

                <!-- Conteúdo Emuladores -->
                <div id="tab-emuladores" class="tab-content hidden">
                    <!-- Estatísticas Emuladores -->
                    <div class="glass-card p-6 md:p-8 mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold orbitron text-center mb-8">
                            <i class="fas fa-gamepad mr-2 text-red-400"></i>
                            Todos os Consoles e Gerações
                        </h2>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                            <div class="bg-gradient-to-br from-red-500 to-orange-500 bg-opacity-20 rounded-lg p-4 text-center">
                                <div class="text-2xl md:text-3xl font-black text-white"><?php echo number_format(150000, 0, '.', '.'); ?></div>
                                <div class="text-xs text-gray-200">Jogos Totais</div>
                            </div>
                            <div class="bg-gradient-to-br from-purple-500 to-pink-500 bg-opacity-20 rounded-lg p-4 text-center">
                                <div class="text-3xl md:text-4xl font-black text-white">12</div>
                                <div class="text-xs text-gray-200">Consoles</div>
                            </div>
                            <div class="bg-gradient-to-br from-yellow-500 to-orange-500 bg-opacity-20 rounded-lg p-4 text-center">
                                <div class="text-2xl md:text-3xl font-black text-white">1980-2024</div>
                                <div class="text-xs text-gray-200">5 Gerações</div>
                            </div>
                            <div class="bg-gradient-to-br from-green-500 to-teal-500 bg-opacity-20 rounded-lg p-4 text-center">
                                <div class="text-3xl md:text-4xl font-black text-white">R$ 39,90</div>
                                <div class="text-xs text-gray-200">+ Bônus</div>
                            </div>
                        </div>

                        <!-- Bônus Destacados -->
                        <div class="bg-gradient-to-r from-yellow-900 to-orange-900 bg-opacity-50 rounded-lg p-6 border-2 border-yellow-500">
                            <h4 class="text-xl font-bold text-yellow-300 mb-4 text-center">
                                <i class="fas fa-gift mr-2"></i>Bônus Exclusivos Inclusos
                            </h4>
                            <div class="grid md:grid-cols-2 gap-4">
                                <?php foreach ($produtos['emuladores']['bonus'] as $bonus): ?>
                                    <div class="bonus-item bg-white bg-opacity-5 rounded-lg p-3 flex items-center">
                                        <i class="fas fa-check-circle text-green-400 mr-3 text-xl"></i>
                                        <span class="font-semibold text-white"><?php echo $bonus; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Consoles Disponíveis -->
                    <div class="glass-card p-6 md:p-8 mb-8">
                        <h3 class="text-2xl md:text-3xl font-bold orbitron text-center mb-6">
                            Consoles Disponíveis
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <?php foreach ($consoles as $console): ?>
                                <div class="bg-white bg-opacity-5 rounded-lg p-4 text-center hover:bg-opacity-10 transition-all cursor-pointer">
                                    <div class="w-12 h-12 md:w-16 md:h-16 mx-auto mb-3 rounded-full bg-gradient-to-r <?php echo $console['cor']; ?> flex items-center justify-center">
                                        <i class="fab <?php echo $console['icon']; ?> text-xl md:text-2xl"></i>
                                    </div>
                                    <h4 class="font-bold text-sm md:text-base mb-1 text-white"><?php echo $console['nome']; ?></h4>
                                    <p class="text-xs text-gray-300"><?php echo $console['total']; ?> jogos</p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Jogos Emuladores -->
                    <div class="glass-card p-6 md:p-8 mb-8">
                        <h3 class="text-2xl md:text-3xl font-bold orbitron text-center mb-6">
                            <i class="fas fa-trophy mr-2 text-yellow-400"></i>
                            Clássicos Mais Procurados
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <?php foreach ($jogos_emuladores as $jogo): ?>
                                <div class="bg-white bg-opacity-5 rounded-lg p-4 text-center hover:bg-opacity-10 transition-all">
                                    <div class="w-12 h-12 mx-auto mb-2 rounded-full bg-gradient-to-r from-red-500 to-orange-500 flex items-center justify-center">
                                        <i class="fas <?php echo $jogo['icon']; ?> text-lg"></i>
                                    </div>
                                    <h4 class="font-bold text-xs mb-1 text-white"><?php echo $jogo['nome']; ?></h4>
                                    <span class="text-xs bg-gradient-to-r from-purple-500 to-pink-500 px-2 py-1 rounded-full text-white">
                                        <?php echo $jogo['console']; ?>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <p class="text-center text-gray-300 mt-6 text-sm">
                            E mais <?php echo number_format(150000 - count($jogos_emuladores), 0, '.', '.'); ?>+ jogos clássicos de todas as gerações!
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA Final -->
            <div class="glass-card p-8 md:p-12 mb-12 text-center bg-gradient-to-r from-purple-900 to-pink-900 bg-opacity-40">
                <i class="fas fa-crown text-6xl text-yellow-400 mb-4"></i>
                <h2 class="text-3xl md:text-5xl font-bold orbitron mb-4">
                    Comece a Jogar Hoje Mesmo!
                </h2>
                <p class="text-lg md:text-2xl text-gray-200 mb-6">
                    Escolha seu pacote e faça sua solicitação via WhatsApp
                </p>
                <a href="#formCompra" class="btn-gamer btn-whatsapp px-8 md:px-12 py-4 md:py-5 rounded-full font-bold text-lg md:text-2xl orbitron text-white inline-block">
                    <i class="fab fa-whatsapp mr-2"></i>
                    SOLICITAR AGORA
                </a>
            </div>

            <!-- Footer -->
            <footer class="text-center text-gray-500 py-8 border-t border-gray-800">
                <div class="mb-4">
                    <i class="fas fa-crown text-4xl text-yellow-600"></i>
                </div>
                <p class="mb-2">
                    <i class="fab fa-whatsapp mr-2"></i>
                    WhatsApp: (14) 98817-3958
                </p>
                <p class="mb-2">
                    <i class="fab fa-pix mr-2"></i>
                    Pagamento via PIX pelo WhatsApp
                </p>
                <p class="text-sm mb-2">
                    © 2024 Game Paradise. Todos os direitos reservados.
                </p>
                <p class="text-xs text-gray-600">
                    Não somos afiliados à Valve, Sony, Nintendo, Microsoft ou outras empresas citadas.
                </p>
            </footer>
        </div>
    </div>

    <script>
        const produtos = <?php echo json_encode($produtos); ?>;
        const whatsapp = '<?php echo $whatsapp; ?>';

        function mudarTab(tab) {
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('active');
                btn.classList.add('bg-white', 'bg-opacity-5');
            });
            event.target.closest('.tab-button').classList.add('active');
            event.target.closest('.tab-button').classList.remove('bg-white', 'bg-opacity-5');

            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            document.getElementById('tab-' + tab).classList.remove('hidden');
        }

        function selecionarProduto(produto) {
            document.getElementById('radio-' + produto).checked = true;
            document.getElementById('formCompra').scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }

        // Validação e envio do formulário
        document.getElementById('formPedido').addEventListener('submit', function(e) {
            e.preventDefault();

            const nome = document.getElementById('nome').value.trim();
            const email = document.getElementById('email').value.trim();
            const produtoSelecionado = document.querySelector('input[name="produto"]:checked');

            if (nome.length < 3) {
                alert('Por favor, digite seu nome completo.');
                return false;
            }

            if (!email.includes('@') || !email.includes('.')) {
                alert('Por favor, digite um email válido.');
                return false;
            }

            if (!produtoSelecionado) {
                alert('Por favor, selecione um pacote.');
                return false;
            }

            // Desabilitar botão e mostrar loading
            const btnComprar = document.getElementById('btnComprar');
            const btnTexto = document.getElementById('btnTexto');
            btnComprar.disabled = true;
            btnTexto.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>ABRINDO WHATSAPP...';

            // Pegar dados do produto selecionado
            const produtoKey = produtoSelecionado.value;
            const produto = produtos[produtoKey];

            // Criar mensagem SIMPLES para WhatsApp (SEM EMOJIS PROBLEMÁTICOS)
            let mensagem = '*SOLICITACAO DE COMPRA - GAME PARADISE*\n\n';
            mensagem += '================================\n\n';
            mensagem += '*PACOTE ESCOLHIDO:*\n';
            mensagem += produto.nome + '\n';
            mensagem += produto.total_jogos + ' jogos\n\n';
            mensagem += '*DADOS DO CLIENTE:*\n';
            mensagem += 'Nome: ' + nome + '\n';
            mensagem += 'Email: ' + email + '\n\n';
            mensagem += '*VALOR A PAGAR:*\n';
            mensagem += 'R$ ' + produto.preco_final.toFixed(2).replace('.', ',') + '\n\n';
            mensagem += '================================\n\n';
            mensagem += 'Ola! Gostaria de adquirir o pacote acima.\n';
            mensagem += 'Aguardo a chave PIX para efetuar o pagamento.\n\n';
            mensagem += 'Obrigado!';

            // Criar URL do WhatsApp
            const urlWhatsApp = 'https://wa.me/' + whatsapp + '?text=' + encodeURIComponent(mensagem);

            // Redirecionar
            window.location.href = urlWhatsApp;
        });

        // Scroll suave
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            });
        });
    </script>
</body>

</html>