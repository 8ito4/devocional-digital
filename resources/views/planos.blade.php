<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escolha seu Plano - Devocional Digital</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #865DFF;
            --accent: #FFA3FD;
            --dark: #2a2438;
            --darker: #1e1b2e;
            --white: #ffffff;
            --gray-light: rgba(255, 255, 255, 0.8);
            --gray-medium: rgba(255, 255, 255, 0.6);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--darker) 0%, var(--dark) 50%, #3d2a5c 100%);
            color: white;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Header */
        .header {
            padding: 2rem 0;
            text-align: center;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            text-decoration: none;
            color: white;
        }

        .logo::before {
            content: 'D';
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-weight: 700;
        }

        /* Main Content */
        .main-content {
            padding: 2rem 0 4rem;
        }

        .page-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .page-title h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .page-title .highlight {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .page-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            margin: 1rem auto;
        }

        /* Plans Grid */
        .plans-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .plan-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .plan-card.premium {
            background: linear-gradient(135deg, rgba(134, 93, 255, 0.2) 0%, rgba(255, 163, 253, 0.15) 100%);
            border: 2px solid var(--primary);
        }

        .plan-badge {
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, var(--accent) 0%, var(--primary) 100%);
            color: white;
            padding: 6px 20px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .plan-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .plan-name {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: white;
        }

        .plan-price {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            color: white;
            margin-bottom: 0.5rem;
        }

        .plan-period {
            color: var(--gray-medium);
            font-size: 0.9rem;
        }

        .plan-features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .plan-features li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            color: var(--gray-light);
        }

        .plan-features li::before {
            content: '✓';
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 12px;
            font-weight: 600;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .plan-button {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .plan-button.basic {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .plan-button.basic:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .plan-button.premium {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            box-shadow: 0 8px 25px rgba(134, 93, 255, 0.3);
        }

        .plan-button.premium:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(134, 93, 255, 0.4);
        }

        /* Premium Extras */
        .premium-extras {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .premium-extras h4 {
            color: var(--accent);
            font-size: 1rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .extra-item {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .extra-item h5 {
            color: white;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .extra-item p {
            color: var(--gray-medium);
            font-size: 0.8rem;
            line-height: 1.4;
        }

        .premium-cta {
            background: linear-gradient(135deg, var(--accent) 0%, var(--primary) 100%);
            color: white;
            padding: 16px;
            border-radius: 12px;
            text-align: center;
            font-weight: 600;
            margin-top: 1.5rem;
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
        }

        .premium-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 163, 253, 0.4);
        }

        /* Guarantee */
        .guarantee {
            text-align: center;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        .guarantee h3 {
            color: var(--accent);
            font-size: 1.25rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .guarantee p {
            color: var(--gray-light);
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 0 1rem;
            }

            .plans-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .page-title h1 {
                font-size: 2rem;
            }

            .plan-price {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <a href="/" class="logo">Devocional Digital</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Page Title -->
            <div class="page-title">
                <h1>Escolha seu <span class="highlight">Plano</span></h1>
            </div>

            <!-- Plans Grid -->
            <div class="plans-grid">
                <!-- Plano Básico -->
                <div class="plan-card">
                    <div class="plan-header">
                        <h2 class="plan-name">Plano Básico</h2>
                        <div class="plan-price">R$10</div>
                        <div class="plan-period">/mês</div>
                    </div>

                    <ul class="plan-features">
                        <li>Devocional diário com mensagens inspiradoras</li>
                        <li>Reflexões bíblicas para fortalecer sua fé</li>
                        <li>Conteúdo prático e direto para começar o dia com Deus</li>
                    </ul>

                    <a href="https://pay.cakto.com.br/3b77apm_437851" class="plan-button basic" target="_blank">
                        COMPRAR AGORA
                    </a>
                </div>

                <!-- Plano Premium -->
                <div class="plan-card premium">
                    <div class="plan-badge">OFERTA ESPECIAL -73%</div>
                    
                    <div class="plan-header">
                        <h2 class="plan-name">Plano Premium</h2>
                        <div class="plan-price">R$27</div>
                        <div class="plan-period">/mês</div>
                    </div>

                    <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%); color: white; padding: 12px; border-radius: 8px; text-align: center; margin-bottom: 1.5rem; font-weight: 600; font-size: 0.9rem;">
                        🎁 Pacote Completo por apenas R$27! 🎁
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <strong style="color: white;">Tudo que tem no Plano Básico:</strong>
                    </div>

                    <ul class="plan-features">
                        <li>Devocional diário com mensagens inspiradoras</li>
                        <li>Reflexões bíblicas para fortalecer sua fé</li>
                        <li>Conteúdo prático e direto para começar o dia com Deus</li>
                    </ul>

                    <div class="premium-extras">
                        <h4>+ Bônus Exclusivos:</h4>
                        
                        <div class="extra-item">
                            <h5>📖 E-book exclusivo: "Descubra Seu Propósito"</h5>
                            <p>Um guia prático para te ajudar a entender seu propósito de vida segundo os princípios bíblicos. Reflexões, exercícios e orientações que vão além do devocional. Ajuda você a ter clareza de direção espiritual e pessoal.</p>
                        </div>

                        <div class="extra-item">
                            <h5>🎵 Playlist exclusiva para o seu momento de devocional</h5>
                            <p>Músicas selecionadas para te colocar no clima certo de oração e reflexão. Ideal para criar um ambiente de paz e intimidade com Deus durante os seus momentos de devocional.</p>
                        </div>
                    </div>

                    <a href="https://pay.cakto.com.br/ikwutb9_437906" class="premium-cta" target="_blank">
                        GARANTIR MEU ACESSO PREMIUM
                    </a>
                </div>
            </div>

            <!-- Guarantee -->
            <div class="guarantee">
                <h3>💝 30 Dias de Garantia</h3>
                <p>Se não funcionar, você recebe seu dinheiro de volta. Sem complicação.</p>
            </div>
        </div>
    </main>
</body>
</html> 