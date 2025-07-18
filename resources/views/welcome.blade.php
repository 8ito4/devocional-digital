<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devocional Digital - Receba um Devocional Diário no seu WhatsApp</title>
    <meta name="description" content="Tenha constância com Deus sem precisar lembrar sozinho. Receba devocionais exclusivos todos os dias no seu WhatsApp.">
    <!-- Deploy force: 2025-06-16 -->
    
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
            padding: 0 0.5rem;
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
            max-width: 95%;
            margin-left: auto;
            margin-right: auto;
            padding: 0 0.5rem;
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
            max-width: 95%;
            margin: 0 auto;
            padding: 0 0.5rem;
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
            max-width: 95%;
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
            gap: 1.5rem;
            margin-top: 3rem;
            max-width: 95%;
            margin-left: auto;
            margin-right: auto;
            padding: 0 0.5rem;
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

        .offer-section .container {
            max-width: 95%;
            padding: 0 0.5rem;
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
            gap: 1.5rem;
            margin-top: 3rem;
            max-width: 95%;
            margin-left: auto;
            margin-right: auto;
            padding: 0 0.5rem;
        }

        .testimonial {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            max-width: 100%;
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
            max-width: 95%;
            margin: 0 auto;
            padding: 0 0.5rem;
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
            max-width: 95%;
            margin: 0 auto;
            padding: 0 0.5rem;
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
            max-width: 95%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
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

        /* Novos elementos adicionados */
        
        /* Cronômetro */
        .countdown-container {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            padding: 1.5rem 1rem;
            border-radius: 12px;
            text-align: center;
            margin: 1.5rem 0;
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.4);
            border: 2px solid rgba(255, 255, 255, 0.2);
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .countdown-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 0.75rem;
            opacity: 1;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .countdown-timer {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            font-family: 'Playfair Display', serif;
        }

        .countdown-unit {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 65px;
            background: rgba(255, 255, 255, 0.15);
            padding: 0.75rem 0.5rem;
            border-radius: 8px;
            backdrop-filter: blur(10px);
        }

        .countdown-number {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 0.25rem;
        }

        .countdown-label {
            font-size: 12px;
            opacity: 0.9;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* Urgência - apenas texto */
        .urgency-message {
            font-size: 1.5rem;
            color: #7c3aed;
            text-align: center;
            margin: 2rem 0;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
        }

        /* Contador de inscritos */
        .subscribers-counter {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #059669;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin: 1rem 0;
        }

        .subscribers-counter::before {
            content: '👥';
        }

        /* Limite de vagas */
        .slots-remaining {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin: 1rem 0;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
            animation: pulse 2s infinite;
        }

        .slots-remaining::before {
            content: '⚡';
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Avisos de compra em tempo real */
        .purchase-notification {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: white;
            border: 1px solid var(--gray-200);
            border-radius: 12px;
            padding: 12px 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 12px;
            max-width: 320px;
            z-index: 1001;
            transform: translateX(-100%);
            transition: transform 0.5s ease;
        }

        .purchase-notification.show {
            transform: translateX(0);
        }

        .purchase-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 14px;
        }

        .purchase-text {
            flex: 1;
        }

        .purchase-name {
            font-weight: 600;
            font-size: 14px;
            color: var(--secondary);
        }

        .purchase-action {
            font-size: 12px;
            color: var(--gray-600);
        }

        /* Selos visuais */
        .trust-seals {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 2rem 0;
            flex-wrap: wrap;
            max-width: 95%;
            margin-left: auto;
            margin-right: auto;
            padding: 0 0.5rem;
        }

        .trust-seal {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--gray-200);
            min-width: 100px;
        }

        .trust-seal-icon {
            font-size: 24px;
        }

        .trust-seal-text {
            font-size: 12px;
            font-weight: 600;
            color: var(--secondary);
            text-align: center;
        }

        /* Formas de pagamento melhoradas */
        .payment-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
            max-width: 95%;
            margin-left: auto;
            margin-right: auto;
            padding: 0 0.5rem;
        }

        .payment-method {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 20px 16px;
            background: white;
            border-radius: 16px;
            font-size: 15px;
            font-weight: 600;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .payment-method:hover {
            border-color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(134, 93, 255, 0.2);
        }

        .payment-method.pix {
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            border: 2px solid #10b981;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.2);
        }

        .payment-method.pix:hover {
            border-color: #059669;
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);
        }

        .payment-method.pix::before {
            content: '🏆 MAIS ESCOLHIDO';
            position: absolute;
            top: -2px;
            left: 50%;
            transform: translateX(-50%);
            background: #10b981;
            color: white;
            font-size: 10px;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 0 0 8px 8px;
            letter-spacing: 0.5px;
        }

        .payment-icon {
            font-size: 32px;
            margin-bottom: 0.5rem;
        }

        .payment-text {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .payment-name {
            font-size: 16px;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 0.25rem;
        }

        .payment-info {
            font-size: 13px;
            color: var(--gray-600);
            opacity: 0.8;
        }

        .payment-discount {
            font-size: 14px;
            color: #059669;
            font-weight: 700;
            background: rgba(16, 185, 129, 0.1);
            padding: 4px 8px;
            border-radius: 6px;
            margin-top: 0.25rem;
        }

        /* Garantia destacada */
        .guarantee-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            text-align: center;
            margin: 1rem 0;
            box-shadow: 0 2px 8px rgba(16, 185, 129, 0.3);
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .guarantee-title {
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 0.25rem;
        }

        .guarantee-text {
            font-size: 12px;
            opacity: 0.9;
            line-height: 1.4;
        }

        /* Urgência */
        .urgency-message {
            background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 100%);
            color: white;
            padding: 16px 24px;
            border-radius: 12px;
            text-align: center;
            margin: 1.5rem 0;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(124, 58, 237, 0.3);
        }

        /* Data de expiração */
        .offer-expiry {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            border: 2px solid #fff;
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin: 1rem 0;
            box-shadow: 0 4px 15px rgba(239, 68, 68, 0.4);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .offer-expiry::before {
            content: '⏰';
            font-size: 18px;
        }

        /* Responsivo para novos elementos */
        @media (max-width: 768px) {
            .countdown-timer {
                gap: 1rem;
            }
            
            .countdown-number {
                font-size: 1.75rem;
            }
            
            .countdown-unit {
                min-width: 55px;
                padding: 0.5rem 0.25rem;
            }
            
            .countdown-label {
                font-size: 11px;
            }
            
            .countdown-container {
                max-width: 320px;
                padding: 1.25rem 0.75rem;
            }
            
            .urgency-message {
                font-size: 1.25rem;
                margin: 1.5rem 0;
            }
            
            .trust-seals {
                gap: 1rem;
            }
            
            .purchase-notification {
                left: 10px;
                right: 10px;
                max-width: none;
            }
            
            .payment-methods {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
                margin: 1.5rem 0;
                padding: 0 0.25rem;
                max-width: 99%;
            }
            
            .payment-method {
                padding: 16px 12px;
            }
            
            .payment-icon {
                font-size: 28px;
            }
            
            .payment-name {
                font-size: 14px;
            }
            
            .payment-info {
                font-size: 12px;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                padding: 0 0.25rem;
                max-width: 99%;
            }
            
            .offer-section .container {
                padding: 0 0.25rem;
                max-width: 99%;
            }

            .container {
                padding: 0 0.25rem;
            }
            
            .offer-expiry {
                font-size: 14px;
                padding: 10px 16px;
            }
            
            .guarantee-badge {
                padding: 6px 12px;
                margin: 0.75rem 0;
                max-width: 280px;
            }
            
            .guarantee-title {
                font-size: 11px;
                margin-bottom: 0.2rem;
            }
            
            .guarantee-text {
                font-size: 10px;
                line-height: 1.3;
            }
            
            .faq-container {
                max-width: 99%;
                padding: 0 0.25rem;
            }
            
            .footer-content {
                max-width: 99%;
                padding: 0 0.25rem;
            }
            
            .footer-bottom {
                max-width: 99%;
                padding-left: 0.25rem;
                padding-right: 0.25rem;
            }
            
            .promise-cards {
                max-width: 99%;
                padding: 0 0.25rem;
                gap: 1.5rem;
            }
            
            .benefits-grid {
                max-width: 99%;
                padding: 0 0.25rem;
            }
            
            .pain-content {
                max-width: 99%;
                padding: 0 0.25rem;
            }
            
            .whatsapp-mockup {
                max-width: 99%;
            }
            
            .trust-seals {
                max-width: 99%;
                padding: 0 0.25rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <a href="#" class="logo">Devocional Digital</a>
            <div style="display: flex; align-items: center; gap: 1rem;">
                <div class="subscribers-counter">
                    <span id="subscriber-count">492</span> assinantes
                </div>
                <button class="cta-button" onclick="scrollToOffer()">Sim, quero garantir minha transformação</button>
            </div>
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
            
            <!-- Urgência -->
            <div class="urgency-message">
                Quantos dias mais você vai deixar sem a palavra de Deus?
            </div>
            
            <!-- Cronômetro -->
            <div class="countdown-container">
                <div class="countdown-title">⚡ OFERTA EXPIRA EM:</div>
                <div class="countdown-timer">
                    <div class="countdown-unit">
                        <div class="countdown-number" id="minutes">00</div>
                        <div class="countdown-label">MIN</div>
                    </div>
                    <div class="countdown-unit">
                        <div class="countdown-number" id="seconds">00</div>
                        <div class="countdown-label">SEG</div>
                    </div>
                </div>
            </div>
            
            <button class="btn-primary" onclick="scrollToOffer()">Sim, quero receber hoje mesmo</button>
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
                <!-- Limite de vagas -->
                <div class="slots-remaining">
                    <span id="slots-count">47</span> vagas restantes
                </div>
                
                <!-- Data de expiração -->
                <div class="offer-expiry">
                    Oferta válida até <span id="offer-date">25/01/2025</span>
                </div>
                
                <h2 class="section-title">Oferta Especial - R$ 10</h2>
                <div class="price-container">
                    <span class="price-old">R$ 97</span>
                    <span class="price-new">R$ 10</span>
                </div>
                <p class="price-description">Por apenas <strong>R$ 10</strong>, você recebe 30 dias de devocionais diários exclusivos no WhatsApp</p>
                
                <div class="offer-features">
                    <div class="offer-feature">30 devocionais únicos e profundos</div>
                    <div class="offer-feature">Entrega automática no WhatsApp</div>
                    <div class="offer-feature">Acesso vitalício às mensagens</div>
                    <div class="offer-feature">Suporte dedicado 24/7</div>
                </div>
                
                <!-- Garantia destacada -->
                <div class="guarantee-badge">
                    <div class="guarantee-title">🛡️ GARANTIA DE 7 DIAS</div>
                    <div class="guarantee-text">Se não ficar 100% satisfeito, devolvemos todo seu dinheiro. Sem perguntas, sem burocracia!</div>
                </div>
                
                <!-- Selos visuais -->
                <div class="trust-seals">
                    <div class="trust-seal">
                        <div class="trust-seal-icon">🔒</div>
                        <div class="trust-seal-text">Pagamento<br>Seguro</div>
                    </div>
                    <div class="trust-seal">
                        <div class="trust-seal-icon">✅</div>
                        <div class="trust-seal-text">Satisfação<br>Garantida</div>
                    </div>
                    <div class="trust-seal">
                        <div class="trust-seal-icon">⚡</div>
                        <div class="trust-seal-text">Acesso<br>Imediato</div>
                    </div>
                    <div class="trust-seal">
                        <div class="trust-seal-icon">📱</div>
                        <div class="trust-seal-text">Suporte<br>24/7</div>
                    </div>
                </div>
                
                <!-- Formas de pagamento -->
                <div style="text-align: center; margin: 2.5rem 0;">
                    <p style="font-weight: 700; font-size: 20px; margin-bottom: 2rem; color: white;">💳 Formas de pagamento aceitas</p>
                    <div class="payment-methods">
                        <div class="payment-method">
                            <div class="payment-icon">💳</div>
                            <div class="payment-text">
                                <span class="payment-name">Cartão de Crédito</span>
                                <span class="payment-info">Até 12x sem juros</span>
                            </div>
                        </div>
                        <div class="payment-method">
                            <div class="payment-icon">💳</div>
                            <div class="payment-text">
                                <span class="payment-name">Cartão de Débito</span>
                                <span class="payment-info">Pagamento à vista</span>
                            </div>
                        </div>
                        <div class="payment-method pix">
                            <div class="payment-icon">🏆</div>
                            <div class="payment-text">
                                <span class="payment-name">PIX</span>
                                <span class="payment-info">Aprovação instantânea</span>
                            </div>
                        </div>
                        <div class="payment-method">
                            <div class="payment-icon">🏦</div>
                            <div class="payment-text">
                                <span class="payment-name">Boleto Bancário</span>
                                <span class="payment-info">Vencimento em 3 dias</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="btn-white">⚡ Sim, quero garantir minha transformação</button>
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
                    <p class="testimonial-text">"Gente, vocês não têm ideia de como isso mudou minha vida! Eu acordava todos os dias correndo, sem tempo pra nada. Agora a primeira coisa que vejo é a palavra de Deus no meu WhatsApp. Estou há 3 semanas e já sinto uma paz que não tinha há anos. Melhor investimento que já fiz! 🙏"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMjAiIGN5PSIyMCIgcj0iMjAiIGZpbGw9IiM4NjVERkYiLz4KPHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBzdHlsZT0idHJhbnNmb3JtOiB0cmFuc2xhdGUoOHB4LCA4cHgpOyI+CjxwYXRoIGQ9Ik0xMiAyQzEzLjEgMiAxNCAxMC45IDE0IDEyQzE0IDEzLjEgMTMuMSAxNCAxMiAxNEMxMC45IDE0IDEwIDEzLjEgMTAgMTJDMTAgMTAuOSAxMC45IDIgMTIgMloiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0yMS4wMDAzIDE2Ljk5OThDMjAuMDcwMyAxNS43Mzk4IDE4LjM2MDMgMTQuOTk5OCAxNi41MDAzIDE0Ljk5OThINy41MDAzMkM1LjY0MDMyIDE0Ljk5OTggMy45MzAzMiAxNS43Mzk4IDMuMDAwMzIgMTYuOTk5OEMzLjAwMDMyIDE4LjEwOTggMy44OTAzMiAxOC45OTk4IDUuMDAwMzIgMTguOTk5OEgxOS4wMDAzQzIwLjExMDMgMTguOTk5OCAyMS4wMDAzIDE4LjEwOTggMjEuMDAwMyAxNi45OTk4WiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg=='); background-size: cover;">MS</div>
                        <div class="author-info">
                            <h5>Maria Santos</h5>
                            <p>Enfermeira • São Paulo/SP • Verificado ✓</p>
                            <small style="color: #10b981; font-weight: 600;">📱 Comprovou pelo WhatsApp</small>
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
                    <p class="testimonial-text">"Rapaz, que negócio bom! Eu tava meio desanimado com tudo, trabalho, família... aí comecei a receber essas mensagens todo dia de manhã. Cara, é incrível como uma palavrinha simples muda seu dia inteiro. Já indiquei pra 5 amigos. Vale muito a pena mesmo! Deus abençoe vocês. 🙌"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMjAiIGN5PSIyMCIgcj0iMjAiIGZpbGw9IiMxMGI5ODEiLz4KPHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBzdHlsZT0idHJhbnNmb3JtOiB0cmFuc2xhdGUoOHB4LCA4cHgpOyI+CjxwYXRoIGQ9Ik0xMiAyQzEzLjEgMiAxNCAxMC45IDE0IDEyQzE0IDEzLjEgMTMuMSAxNCAxMiAxNEMxMC45IDE0IDEwIDEzLjEgMTAgMTJDMTAgMTAuOSAxMC45IDIgMTIgMloiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0yMS4wMDAzIDE2Ljk5OThDMjAuMDcwMyAxNS43Mzk4IDE4LjM2MDMgMTQuOTk5OCAxNi41MDAzIDE0Ljk5OThINy41MDAzMkM1LjY0MDMyIDE0Ljk5OTggMy45MzAzMiAxNS43Mzk4IDMuMDAwMzIgMTYuOTk5OEMzLjAwMDMyIDE4LjEwOTggMy44OTAzMiAxOC45OTk4IDUuMDAwMzIgMTguOTk5OEgxOS4wMDAzQzIwLjExMDMgMTguOTk5OCAyMS4wMDAzIDE4LjEwOTggMjEuMDAwMyAxNi45OTk4WiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg=='); background-size: cover;">JC</div>
                        <div class="author-info">
                            <h5>João Carlos</h5>
                            <p>Motorista • Rio de Janeiro/RJ • Verificado ✓</p>
                            <small style="color: #10b981; font-weight: 600;">📱 Comprovou pelo WhatsApp</small>
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
                    <p class="testimonial-text">"Meninas, que coisa mais linda! Eu sempre quis ter uma rotina de leitura bíblica mas nunca conseguia. Com o Devocional Digital ficou muito fácil! A mensagem chega certinha toda manhã e eu leio enquanto tomo meu café. Já estou no segundo mês e não consigo mais viver sem. Recomendo de olhos fechados! ❤️"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMjAiIGN5PSIyMCIgcj0iMjAiIGZpbGw9IiNlYzQ4OTkiLz4KPHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBzdHlsZT0idHJhbnNmb3JtOiB0cmFuc2xhdGUoOHB4LCA4cHgpOyI+CjxwYXRoIGQ9Ik0xMiAyQzEzLjEgMiAxNCAxMC45IDE0IDEyQzE0IDEzLjEgMTMuMSAxNCAxMiAxNEMxMC45IDE0IDEwIDEzLjEgMTAgMTJDMTAgMTAuOSAxMC45IDIgMTIgMloiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0yMS4wMDAzIDE2Ljk5OThDMjAuMDcwMyAxNS43Mzk4IDE4LjM2MDMgMTQuOTk5OCAxNi41MDAzIDE0Ljk5OThINy41MDAzMkM1LjY0MDMyIDE0Ljk5OTggMy45MzAzMiAxNS43Mzk4IDMuMDAwMzIgMTYuOTk5OEMzLjAwMDMyIDE4LjEwOTggMy44OTAzMiAxOC45OTk4IDUuMDAwMzIgMTguOTk5OEgxOS4wMDAzQzIwLjExMDMgMTguOTk5OCAyMS4wMDAzIDE4LjEwOTggMjEuMDAwMyAxNi45OTk4WiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg=='); background-size: cover;">AC</div>
                        <div class="author-info">
                            <h5>Ana Cristina</h5>
                            <p>Professora • Belo Horizonte/MG • Verificado ✓</p>
                            <small style="color: #10b981; font-weight: 600;">📱 Comprovou pelo WhatsApp</small>
                        </div>
                    </div>
                </div>
                
                <!-- Depoimento adicional em formato de print do WhatsApp -->
                <div class="testimonial fade-in" style="background: #f0f9ff; border: 2px solid #0ea5e9;">
                    <div style="background: #25d366; color: white; padding: 12px; border-radius: 8px; margin-bottom: 16px; text-align: center; font-weight: 600;">
                        💬 Print real do WhatsApp
                    </div>
                    <div style="background: #dcf8c6; padding: 12px; border-radius: 8px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; line-height: 1.4; margin-bottom: 12px;">
                        <div style="color: #2d5016; margin-bottom: 8px;">
                            <strong>🙏 Devocional Digital</strong> - Hoje às 07:00
                        </div>
                        <div style="color: #2d5016;">
                            "Entregue o seu caminho ao Senhor; confie nele, e ele agirá." (Salmos 37:5)
                            
                            Bom dia! ☀️ Que tal começar este dia entregando suas preocupações a Deus? Ele tem o controle de tudo.
                        </div>
                        <div style="text-align: right; margin-top: 8px; font-size: 11px; color: #667781;">
                            ✓✓ Lida às 07:02
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background: #3b82f6;">LM</div>
                        <div class="author-info">
                            <h5>Luiza Mendes</h5>
                            <p>Contadora • Brasília/DF • Verificado ✓</p>
                            <small style="color: #10b981; font-weight: 600;">⭐ Assinante há 2 meses</small>
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

    <!-- Notificação de compra em tempo real -->
    <div class="purchase-notification" id="purchaseNotification">
        <div class="purchase-avatar" id="purchaseAvatar">JS</div>
        <div class="purchase-text">
            <div class="purchase-name" id="purchaseName">João Silva</div>
            <div class="purchase-action">acabou de adquirir o Devocional Digital</div>
        </div>
    </div>

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

        // Cronômetro de 10-15 minutos
        function startCountdown() {
            const duration = (Math.floor(Math.random() * 6) + 10) * 60; // 10-15 minutos em segundos
            let timeLeft = duration;
            
            function updateDisplay() {
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
                
                if (timeLeft <= 0) {
                    // Reinicia o contador
                    timeLeft = duration;
                }
                
                timeLeft--;
            }
            
            updateDisplay();
            setInterval(updateDisplay, 1000);
        }

        // Contador de inscritos animado
        function animateSubscriberCount() {
            const element = document.getElementById('subscriber-count');
            const targetCount = 492;
            let currentCount = targetCount - Math.floor(Math.random() * 5);
            
            function updateCount() {
                if (Math.random() > 0.8) { // 20% de chance de aumentar
                    currentCount = Math.min(currentCount + 1, targetCount + 3);
                    element.textContent = currentCount;
                }
            }
            
            setInterval(updateCount, 30000); // Atualiza a cada 30 segundos
        }

        // Contador de vagas restantes
        function animateSlotsCount() {
            const element = document.getElementById('slots-count');
            let currentSlots = 47;
            
            function updateSlots() {
                if (Math.random() > 0.85 && currentSlots > 25) { // 15% de chance de diminuir
                    currentSlots--;
                    element.textContent = currentSlots;
                    
                    // Adiciona efeito visual quando diminui
                    element.style.color = '#ef4444';
                    setTimeout(() => {
                        element.style.color = '';
                    }, 1000);
                }
            }
            
            setInterval(updateSlots, 45000); // Atualiza a cada 45 segundos
        }

        // Sistema de notificações de compra
        function showPurchaseNotifications() {
            const names = [
                'Ana Silva', 'João Santos', 'Maria Oliveira', 'Pedro Costa', 'Carla Mendes',
                'Lucas Fernandes', 'Juliana Lima', 'Roberto Alves', 'Beatriz Rocha', 'Felipe Martins',
                'Camila Santos', 'Diego Pereira', 'Larissa Costa', 'Thiago Silva', 'Patrícia Souza',
                'André Oliveira', 'Mônica Lima', 'Rafael Santos', 'Fernanda Costa', 'Gabriel Alves'
            ];
            
            const cities = [
                'São Paulo/SP', 'Rio de Janeiro/RJ', 'Belo Horizonte/MG', 'Salvador/BA', 'Fortaleza/CE',
                'Brasília/DF', 'Curitiba/PR', 'Recife/PE', 'Porto Alegre/RS', 'Manaus/AM',
                'Belém/PA', 'Goiânia/GO', 'Guarulhos/SP', 'Campinas/SP', 'São Luís/MA'
            ];
            
            const notification = document.getElementById('purchaseNotification');
            const nameElement = document.getElementById('purchaseName');
            const avatarElement = document.getElementById('purchaseAvatar');
            
            function showNotification() {
                const randomName = names[Math.floor(Math.random() * names.length)];
                const randomCity = cities[Math.floor(Math.random() * cities.length)];
                const initials = randomName.split(' ').map(n => n[0]).join('');
                
                nameElement.textContent = `${randomName} de ${randomCity}`;
                avatarElement.textContent = initials;
                
                notification.classList.add('show');
                
                setTimeout(() => {
                    notification.classList.remove('show');
                }, 4000);
            }
            
            // Primeira notificação após 10 segundos
            setTimeout(showNotification, 10000);
            
            // Notificações a cada 20-40 segundos
            setInterval(() => {
                if (Math.random() > 0.3) { // 70% de chance de mostrar
                    showNotification();
                }
            }, (Math.random() * 20000) + 20000);
        }

        // Data de expiração (7 dias a partir de hoje)
        function setOfferExpiry() {
            const today = new Date();
            const expiryDate = new Date(today.getTime() + (7 * 24 * 60 * 60 * 1000));
            const formattedDate = expiryDate.toLocaleDateString('pt-BR');
            document.getElementById('offer-date').textContent = formattedDate;
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
            
            // Inicializar todas as funcionalidades
            startCountdown();
            animateSubscriberCount();
            animateSlotsCount();
            showPurchaseNotifications();
            setOfferExpiry();
        });
    </script>
</body>
</html>
