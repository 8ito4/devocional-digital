<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devocional Digital - Receba um Devocional Diário no seu WhatsApp</title>
    <meta name="description" content="Tenha constância com Deus sem precisar lembrar sozinho. Receba devocionais exclusivos todos os dias no seu WhatsApp.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --background: #f7f5f2;
            --primary: #865DFF;
            --secondary: #191825;
            --accent: #FFA3FD;
            --white: #ffffff;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-600: #4b5563;
            --gray-800: #1f2937;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--background);
            color: var(--secondary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
            padding: 0 2rem;
        }

        .logo {
            display: flex;
            align-items: center;
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            text-decoration: none;
            color: var(--secondary);
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

        .cta-button {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(134, 93, 255, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(134, 93, 255, 0.4);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--background);
            padding-top: 70px;
        }

        .hero-content {
            text-align: center;
            max-width: 900px;
            padding: 2rem 1rem;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.8rem, 6vw, 4.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.1;
            color: var(--secondary);
        }

        .hero h1 .text-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.375rem;
            color: var(--gray-600);
            margin-bottom: 0.75rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 400;
        }

        .hero-description {
            font-size: 1.125rem;
            color: var(--accent);
            margin-bottom: 2.5rem;
            font-weight: 500;
        }

        .hero-features {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 2.5rem 0;
            flex-wrap: wrap;
        }

        .hero-feature {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            background: white;
            padding: 14px 24px;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            font-size: 15px;
            font-weight: 500;
            color: var(--secondary);
        }

        .hero-feature-icon {
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
            font-weight: 600;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            padding: 18px 36px;
            border-radius: 15px;
            font-size: 1.125rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(134, 93, 255, 0.3);
            margin-top: 1rem;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(134, 93, 255, 0.4);
        }

        /* Sections */
        .section {
            padding: 80px 0;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            color: var(--secondary);
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.125rem;
            color: var(--gray-600);
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Promise Cards */
        .promise-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .promise-card {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .promise-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .promise-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 24px;
        }

        .promise-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--secondary);
        }

        .promise-card p {
            color: var(--gray-600);
            line-height: 1.6;
        }

        /* Pain Points Section */
        .pain-section {
            background: white;
        }

        .pain-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .pain-list {
            list-style: none;
        }

        .pain-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: var(--gray-50);
            border-radius: 12px;
        }

        .pain-icon {
            width: 40px;
            height: 40px;
            background: #fee2e2;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .pain-icon::before {
            content: '✕';
            color: #ef4444;
            font-weight: 600;
        }

        .pain-text {
            font-weight: 500;
            color: var(--secondary);
        }

        /* WhatsApp Mockup */
        .whatsapp-mockup {
            background: white;
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        .solution-badge {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 1.5rem;
        }

        .solution-badge::before {
            content: '✓';
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .whatsapp-header {
            background: #25d366;
            color: white;
            padding: 1rem;
            border-radius: 12px 12px 0 0;
            margin: -1.5rem -1.5rem 1rem -1.5rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .whatsapp-avatar {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .whatsapp-name {
            font-weight: 600;
        }

        .whatsapp-status {
            font-size: 12px;
            opacity: 0.8;
        }

        .message {
            background: #dcf8c6;
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 8px;
            font-size: 14px;
            color: #2d5016;
            position: relative;
        }

        .message::before {
            content: '🙏';
            margin-right: 8px;
        }

        /* Benefits Grid */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .benefit-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 2rem 1.5rem;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .benefit-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: white;
            font-size: 24px;
            flex-shrink: 0;
        }

        .benefit-icon.calendar { background: linear-gradient(135deg, #8b5cf6 0%, #a855f7 100%); }
        .benefit-icon.sparkles { background: linear-gradient(135deg, #ec4899 0%, #f97316 100%); }
        .benefit-icon.clock { background: linear-gradient(135deg, #06b6d4 0%, #3b82f6 100%); }
        .benefit-icon.phone { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
        .benefit-icon.sun { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); }
        .benefit-icon.moon { background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%); }

        .benefit-text h4 {
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--secondary);
            font-size: 1.125rem;
        }

        .benefit-text p {
            color: var(--gray-600);
            font-size: 14px;
            line-height: 1.5;
        }

        /* Offer Section */
        .offer-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            text-align: center;
        }

        .offer-section .section-title {
            color: white;
        }

        .price-container {
            margin: 2rem 0;
        }

        .price-old {
            font-size: 1.5rem;
            text-decoration: line-through;
            opacity: 0.7;
            margin-right: 1rem;
        }

        .price-new {
            font-size: 3rem;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
        }

        .price-description {
            font-size: 1.125rem;
            margin: 1rem 0 2rem;
            opacity: 0.9;
        }

        .offer-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .offer-feature {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 14px;
        }

        .offer-feature::before {
            content: '✓';
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .btn-white {
            background: white;
            color: var(--primary);
            padding: 16px 32px;
            border-radius: 12px;
            font-size: 1.125rem;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
        }

        .btn-white:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(255, 255, 255, 0.4);
        }

        .guarantee {
            margin-top: 1.5rem;
            font-size: 14px;
            opacity: 0.9;
        }

        /* Testimonials */
        .testimonials-section {
            background: var(--gray-50);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .testimonial {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .testimonial:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .stars {
            display: flex;
            gap: 2px;
            margin-bottom: 1rem;
        }

        .star {
            color: #fbbf24;
            font-size: 18px;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            color: var(--gray-600);
            line-height: 1.6;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .author-avatar {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .author-info h5 {
            font-weight: 600;
            color: var(--secondary);
        }

        .author-info p {
            font-size: 12px;
            color: var(--gray-600);
        }

        /* FAQ */
        .faq-section {
            background: white;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: var(--gray-50);
            border-radius: 12px;
            margin-bottom: 1rem;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .faq-question {
            width: 100%;
            padding: 1.5rem;
            border: none;
            background: none;
            text-align: left;
            font-size: 1rem;
            font-weight: 600;
            color: var(--secondary);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            padding: 0 1.5rem 1.5rem;
            color: var(--gray-600);
            display: none;
            line-height: 1.6;
        }

        .faq-answer.active {
            display: block;
        }

        .faq-icon {
            color: var(--primary);
            transition: transform 0.3s ease;
            font-size: 18px;
        }

        .faq-icon.rotated {
            transform: rotate(180deg);
        }

        /* Footer */
        .footer {
            background: var(--secondary);
            color: white;
            padding: 3rem 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 2rem;
            align-items: center;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .footer-logo {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
        }

        .footer-text h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
            margin-bottom: 0.25rem;
        }

        .footer-text p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }

        .footer-link {
            background: #25d366;
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            background: #1ea952;
            transform: translateY(-2px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 2rem;
            padding-top: 2rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                padding: 0 1rem;
            }
            
            .hero-features {
                gap: 1rem;
            }
            
            .pain-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .benefits-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .container {
                padding: 0 1rem;
            }
            
            .section {
                padding: 60px 0;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <a href="#" class="logo">Devocional Digital</a>
            <button class="cta-button" onclick="scrollToOffer()">Compre Agora</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content fade-in">
            <h1>
                Receba um <span class="text-gradient">Devocional<br>
                Diário</span> no seu WhatsApp
            </h1>
            <p class="hero-subtitle">Tenha constância com Deus sem precisar lembrar sozinho.</p>
            <p class="hero-description">Palavra de ânimo, oração e gratidão todos os dias.</p>
            
            <div class="hero-features">
                <div class="hero-feature">
                    <div class="hero-feature-icon">♥</div>
                    <span>Conexão diária com Deus</span>
                </div>
                <div class="hero-feature">
                    <div class="hero-feature-icon">✨</div>
                    <span>Mensagens exclusivas</span>
                </div>
                <div class="hero-feature">
                    <div class="hero-feature-icon">✓</div>
                    <span>Sem precisar lembrar</span>
                </div>
            </div>
            
            <button class="btn-primary" onclick="scrollToOffer()">Compre Agora</button>
        </div>
    </section>

    <!-- Promise Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Transforme sua <span class="text-gradient">vida espiritual</span></h2>
            <p class="section-subtitle fade-in">Descubra como é fácil manter uma conexão constante e profunda com Deus</p>
            
            <div class="promise-cards">
                <div class="promise-card fade-in">
                    <div class="promise-icon">✓</div>
                    <h3>Constância sem esforço</h3>
                    <p>Tenha constância com Deus sem precisar lembrar sozinho. A mensagem chega todo dia no seu WhatsApp.</p>
                </div>
                <div class="promise-card fade-in">
                    <div class="promise-icon">💬</div>
                    <h3>Devocionais exclusivos</h3>
                    <p>Receba um devocional exclusivo no seu WhatsApp todos os dias. Mensagens únicas e profundas.</p>
                </div>
                <div class="promise-card fade-in">
                    <div class="promise-icon">✝</div>
                    <h3>Proximidade com Cristo</h3>
                    <p>Diga adeus à sensação de estar longe de Cristo. Comece e termine o dia conectado com Deus.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pain Points Section -->
    <section class="section pain-section">
        <div class="container">
            <div class="pain-content">
                <div class="fade-in">
                    <h2 class="section-title" style="text-align: left;">Você se identifica com isso?</h2>
                    <ul class="pain-list">
                        <li class="pain-item">
                            <div class="pain-icon"></div>
                            <span class="pain-text">Falta de tempo e disciplina para leitura diária</span>
                        </li>
                        <li class="pain-item">
                            <div class="pain-icon"></div>
                            <span class="pain-text">Sente que Deus está distante do seu dia a dia</span>
                        </li>
                        <li class="pain-item">
                            <div class="pain-icon"></div>
                            <span class="pain-text">Termina o dia sem ter orado ou refletido</span>
                        </li>
                        <li class="pain-item">
                            <div class="pain-icon"></div>
                            <span class="pain-text">Dificuldade para manter constância na fé</span>
                        </li>
                    </ul>
                </div>
                
                <div class="whatsapp-mockup fade-in">
                    <div class="solution-badge">A solução está aqui!</div>
                    <p style="margin-bottom: 1.5rem; color: var(--gray-600);">Você vai receber um devocional exclusivo, novo e feito com propósito, todos os dias no seu WhatsApp. Palavra de ânimo, oração e gratidão. Tudo pronto, sem enrolação.</p>
                    
                    <div class="whatsapp-header">
                        <div class="whatsapp-avatar">D</div>
                        <div>
                            <div class="whatsapp-name">WhatsApp - Hoje</div>
                            <div class="whatsapp-status">online</div>
                        </div>
                    </div>
                    <div class="message">
                        <strong>🙏 Devocional de hoje</strong><br>
                        "O Senhor é o meu pastor; nada me faltará..." Que esta manhã seja abençoada pela paz que só Deus pode dar. Reflita: Em que área da sua vida você precisa confiar mais em Deus hoje?
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">O que você vai <span class="text-gradient">receber</span></h2>
            <p class="section-subtitle fade-in">Todos os benefícios pensados para transformar sua rotina espiritual</p>
            
            <div class="benefits-grid">
                <div class="benefit-item fade-in">
                    <div class="benefit-icon calendar">📅</div>
                    <div class="benefit-text">
                        <h4>30 dias de devocionais</h4>
                        <p>Um mês completo de mensagens inspiradoras</p>
                    </div>
                </div>
                <div class="benefit-item fade-in">
                    <div class="benefit-icon sparkles">✨</div>
                    <div class="benefit-text">
                        <h4>Mensagens únicas</h4>
                        <p>Conteúdo exclusivo feito especialmente para você</p>
                    </div>
                </div>
                <div class="benefit-item fade-in">
                    <div class="benefit-icon clock">⏰</div>
                    <div class="benefit-text">
                        <h4>Leitura rápida</h4>
                        <p>Mensagem profunda em poucos minutos</p>
                    </div>
                </div>
                <div class="benefit-item fade-in">
                    <div class="benefit-icon phone">📱</div>
                    <div class="benefit-text">
                        <h4>Flexível no WhatsApp</h4>
                        <p>Leia quando e como quiser, onde estiver</p>
                    </div>
                </div>
                <div class="benefit-item fade-in">
                    <div class="benefit-icon sun">☀️</div>
                    <div class="benefit-text">
                        <h4>Comece o dia com Deus</h4>
                        <p>Receba inspiração logo pela manhã</p>
                    </div>
                </div>
                <div class="benefit-item fade-in">
                    <div class="benefit-icon moon">🌙</div>
                    <div class="benefit-text">
                        <h4>Termine o dia em paz</h4>
                        <p>Reflexões noturnas para um descanso abençoado</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Section -->
    <section class="section offer-section" id="offer">
        <div class="container">
            <div class="fade-in">
                <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
                    <div style="background: rgba(255, 255, 255, 0.2); padding: 8px; border-radius: 8px;">👑</div>
                </div>
                <h2 class="section-title">Oferta Especial</h2>
                <div class="price-container">
                    <span class="price-old">R$ 97</span>
                    <span class="price-new">R$ 37</span>
                </div>
                <p class="price-description">Por apenas <strong>R$ 37</strong>, você recebe 30 dias de devocionais diários exclusivos no WhatsApp</p>
                
                <div class="offer-features">
                    <div class="offer-feature">30 devocionais únicos e profundos</div>
                    <div class="offer-feature">Entrega automática no WhatsApp</div>
                    <div class="offer-feature">Acesso vitalício às mensagens</div>
                    <div class="offer-feature">Suporte dedicado 24/7</div>
                </div>
                
                <button class="btn-white">⚡ Compre Agora</button>
                <p class="guarantee">🟢 Pagamento 100% seguro • Satisfação garantida</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section testimonials-section">
        <div class="container">
            <h2 class="section-title fade-in">O que nossos <span class="text-gradient">usuários dizem</span></h2>
            <p class="section-subtitle fade-in">Milhares de pessoas já transformaram sua vida espiritual</p>
            
            <div class="testimonials-grid">
                <div class="testimonial fade-in">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonial-text">"Eu nunca consegui manter uma rotina, agora não passo um dia sem falar com Deus. Mudou completamente minha perspectiva!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MS</div>
                        <div class="author-info">
                            <h5>Maria Silva</h5>
                            <p>Usuário verificado</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial fade-in">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonial-text">"Acordar e receber essa palavra mudou minha vida. É como se Deus falasse diretamente comigo todos os dias."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">JS</div>
                        <div class="author-info">
                            <h5>João Santos</h5>
                            <p>Usuário verificado</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial fade-in">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonial-text">"Simples, prático e profundo. Recomendo pra todo mundo que quer se aproximar mais de Deus sem complicação."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AC</div>
                        <div class="author-info">
                            <h5>Ana Costa</h5>
                            <p>Usuário verificado</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section faq-section">
        <div class="container">
            <h2 class="section-title fade-in">Perguntas <span class="text-gradient">Frequentes</span></h2>
            <p class="section-subtitle fade-in">Tire todas as suas dúvidas sobre o Devocional Digital</p>
            
            <div class="faq-container">
                <div class="faq-item fade-in">
                    <button class="faq-question" onclick="toggleFAQ(0)">
                        <span>Como funciona o Devocional Digital?</span>
                        <span class="faq-icon">▼</span>
                    </button>
                    <div class="faq-answer" id="faq-0">
                        <p>Após a compra, você receberá instruções para se cadastrar no nosso sistema. A partir do dia seguinte, receberá automaticamente um devocional exclusivo todos os dias no seu WhatsApp por 30 dias consecutivos.</p>
                    </div>
                </div>
                <div class="faq-item fade-in">
                    <button class="faq-question" onclick="toggleFAQ(1)">
                        <span>Quando começarei a receber as mensagens?</span>
                        <span class="faq-icon">▼</span>
                    </button>
                    <div class="faq-answer" id="faq-1">
                        <p>O primeiro devocional é enviado no dia seguinte ao seu cadastro, sempre às 7h da manhã. Você pode escolher um horário diferente se preferir.</p>
                    </div>
                </div>
                <div class="faq-item fade-in">
                    <button class="faq-question" onclick="toggleFAQ(2)">
                        <span>E se eu não gostar do conteúdo?</span>
                        <span class="faq-icon">▼</span>
                    </button>
                    <div class="faq-answer" id="faq-2">
                        <p>Oferecemos garantia incondicional de 7 dias. Se por qualquer motivo não ficar satisfeito, devolvemos 100% do seu investimento, sem perguntas.</p>
                    </div>
                </div>
                <div class="faq-item fade-in">
                    <button class="faq-question" onclick="toggleFAQ(3)">
                        <span>É para qualquer pessoa?</span>
                        <span class="faq-icon">▼</span>
                    </button>
                    <div class="faq-answer" id="faq-3">
                        <p>Sim! Os devocionais são criados para qualquer pessoa que deseja ter uma vida mais próxima de Deus, independente do seu nível de conhecimento bíblico ou denominação.</p>
                    </div>
                </div>
                <div class="faq-item fade-in">
                    <button class="faq-question" onclick="toggleFAQ(4)">
                        <span>Posso cancelar a qualquer momento?</span>
                        <span class="faq-icon">▼</span>
                    </button>
                    <div class="faq-answer" id="faq-4">
                        <p>Como é um produto de 30 dias, não há cobrança recorrente. Você paga uma única vez e recebe todos os 30 devocionais. Simples assim!</p>
                    </div>
                </div>
                <div class="faq-item fade-in">
                    <button class="faq-question" onclick="toggleFAQ(5)">
                        <span>Como é feito o pagamento?</span>
                        <span class="faq-icon">▼</span>
                    </button>
                    <div class="faq-answer" id="faq-5">
                        <p>Aceitamos cartão de crédito, débito e PIX. Todos os pagamentos são processados com segurança máxima através de plataformas certificadas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-logo">D</div>
                    <div class="footer-text">
                        <h3>Devocional Digital</h3>
                        <p>Transformando vidas através da palavra de Deus, um devocional por dia.</p>
                    </div>
                </div>
                <a href="#" class="footer-link">
                    <span>💬</span>
                    Suporte no WhatsApp
                </a>
            </div>
            <div class="footer-bottom">
                <p>© 2024 Devocional Digital. Feito com ❤️ para sua vida espiritual</p>
            </div>
        </div>
    </footer>

    <script>
        // Scroll to offer section
        function scrollToOffer() {
            window.location.href = '/planos';
        }

        // FAQ toggle
        function toggleFAQ(index) {
            const answer = document.getElementById(`faq-${index}`);
            const icon = document.querySelectorAll('.faq-icon')[index];
            
            // Close all other FAQs
            document.querySelectorAll('.faq-answer').forEach((item, i) => {
                if (i !== index) {
                    item.classList.remove('active');
                    document.querySelectorAll('.faq-icon')[i].classList.remove('rotated');
                }
            });
            
            // Toggle current FAQ
            answer.classList.toggle('active');
            icon.classList.toggle('rotated');
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Initialize animations
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>
