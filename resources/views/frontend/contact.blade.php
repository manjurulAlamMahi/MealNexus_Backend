<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Meal Nexus</title>
    <meta name="description" content="Get in touch with Meal Nexus. Reach our support team via email or phone for any questions, feedback, or assistance with the Meal Nexus app.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #0B6552;
            --primary-dark: #074739;
            --primary-light: rgba(11, 101, 82, 0.08);
            --primary-accent: #04AC6E;
            --primary-gradient: linear-gradient(135deg, #0B6552 0%, #04AC6E 100%);
            --bg: #F3FFF8;
            --card-bg: #ffffff;
            --text-main: #1E1E1E;
            --text-muted: #717182;
            --text-sub: #475569;
            --border: #E2E8F0;
            --border-light: #EBF3EE;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 12px rgba(11, 101, 82, 0.06), 0 2px 4px rgba(0, 0, 0, 0.04);
            --shadow-lg: 0 10px 25px -5px rgba(11, 101, 82, 0.1), 0 8px 10px -6px rgba(11, 101, 82, 0.05);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 18px;
            --radius-xl: 24px;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Open Sans', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--bg);
            color: var(--text-main);
            line-height: 1.75;
            -webkit-font-smoothing: antialiased;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Top Accent */
        .top-accent {
            height: 4px;
            background: var(--primary-gradient);
            width: 100%;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            height: 74px;
            display: flex;
            align-items: center;
        }

        .navbar-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Outfit', sans-serif;
            font-size: 22px;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            letter-spacing: -0.5px;
            transition: transform 0.2s ease;
        }

        .logo:hover { transform: translateY(-1px); }

        .logo-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            box-shadow: 0 3px 8px rgba(11, 101, 82, 0.25);
        }

        .nav-actions { display: flex; gap: 12px; align-items: center; }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            border-radius: var(--radius-md);
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            cursor: pointer;
            font-family: 'Outfit', sans-serif;
            border: none;
        }

        .btn-outline {
            border: 1px solid var(--border);
            background-color: #ffffff;
            color: var(--text-sub);
        }

        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
            background-color: var(--primary-light);
        }

        .btn-primary {
            background: var(--primary-gradient);
            color: #ffffff;
            border: none;
            box-shadow: 0 3px 10px rgba(11, 101, 82, 0.2);
        }

        .btn-primary:hover {
            opacity: 0.95;
            transform: translateY(-1px);
            box-shadow: 0 5px 14px rgba(11, 101, 82, 0.3);
        }

        /* Hero */
        .hero {
            background: linear-gradient(180deg, #ffffff 0%, var(--bg) 100%);
            border-bottom: 1px solid var(--border-light);
            padding: 64px 0 52px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: 50%;
            transform: translateX(-50%);
            width: 800px;
            height: 400px;
            background: radial-gradient(circle, rgba(4, 172, 110, 0.08) 0%, rgba(243, 255, 248, 0) 70%);
            pointer-events: none;
        }

        .hero-container {
            max-width: 820px;
            margin: 0 auto;
            padding: 0 24px;
            position: relative;
            z-index: 1;
        }

        .badge {
            background-color: var(--primary-light);
            color: var(--primary);
            font-size: 13px;
            font-weight: 700;
            padding: 6px 16px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.75px;
            border: 1px solid rgba(11, 101, 82, 0.15);
        }

        .hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 44px;
            font-weight: 800;
            color: var(--text-main);
            letter-spacing: -1.2px;
            line-height: 1.15;
            margin-bottom: 14px;
        }

        .hero p.lead {
            color: var(--text-muted);
            font-size: 16px;
            max-width: 620px;
            margin: 0 auto;
        }

        /* Main Layout */
        .main-container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 60px 24px 90px;
            flex-grow: 1;
        }

        /* Contact Info Cards Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            margin-bottom: 48px;
        }

        .contact-card {
            background: var(--card-bg);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-xl);
            padding: 40px 36px;
            box-shadow: var(--shadow-md);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
            position: relative;
            overflow: hidden;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary-gradient);
            border-radius: var(--radius-xl) var(--radius-xl) 0 0;
        }

        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .contact-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(11, 101, 82, 0.25);
            flex-shrink: 0;
        }

        .contact-card-label {
            font-family: 'Outfit', sans-serif;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: var(--primary);
            margin-bottom: 4px;
        }

        .contact-card-title {
            font-family: 'Outfit', sans-serif;
            font-size: 22px;
            font-weight: 800;
            color: var(--text-main);
            letter-spacing: -0.4px;
            line-height: 1.25;
            margin-bottom: 6px;
        }

        .contact-card-desc {
            font-size: 14px;
            color: var(--text-muted);
            line-height: 1.6;
        }

        .contact-card-action {
            margin-top: auto;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Outfit', sans-serif;
            font-size: 14px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            padding: 10px 20px;
            border-radius: var(--radius-md);
            background: var(--primary-light);
            border: 1px solid rgba(11, 101, 82, 0.15);
            transition: all 0.2s ease;
            width: 100%;
            justify-content: center;
        }

        .contact-card-action:hover {
            background: var(--primary);
            color: #ffffff;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(11, 101, 82, 0.25);
        }

        .contact-card-action svg { transition: transform 0.2s ease; }
        .contact-card-action:hover svg { transform: translateX(3px); }

        /* Info Panel */
        .info-panel {
            background: var(--card-bg);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            padding: 48px;
            margin-bottom: 36px;
        }

        .info-panel-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 2px solid var(--border-light);
        }

        .info-panel-header-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            flex-shrink: 0;
        }

        .info-panel-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 24px;
            font-weight: 800;
            color: var(--text-main);
            letter-spacing: -0.5px;
        }

        .info-panel-header p {
            font-size: 14px;
            color: var(--text-muted);
            margin: 0;
        }

        .info-rows {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 20px 24px;
            background: var(--bg);
            border-radius: var(--radius-md);
            border: 1px solid var(--border-light);
            transition: background 0.2s ease, border-color 0.2s ease;
        }

        .info-row:hover {
            background: #e8faf2;
            border-color: rgba(11, 101, 82, 0.2);
        }

        .info-row-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: var(--card-bg);
            border: 1px solid var(--border-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            flex-shrink: 0;
            box-shadow: var(--shadow-sm);
        }

        .info-row-body { flex: 1; }

        .info-row-label {
            font-family: 'Outfit', sans-serif;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-muted);
            margin-bottom: 3px;
        }

        .info-row-value {
            font-family: 'Outfit', sans-serif;
            font-size: 17px;
            font-weight: 700;
            color: var(--text-main);
            text-decoration: none;
            letter-spacing: -0.2px;
        }

        a.info-row-value {
            color: var(--primary);
            transition: color 0.2s ease;
        }

        a.info-row-value:hover { color: var(--primary-accent); }

        .info-row-badge {
            font-size: 12px;
            font-weight: 600;
            font-family: 'Outfit', sans-serif;
            color: var(--primary);
            background: var(--primary-light);
            padding: 4px 10px;
            border-radius: 50px;
            border: 1px solid rgba(11, 101, 82, 0.15);
            white-space: nowrap;
        }

        /* Response Time Banner */
        .response-banner {
            background: linear-gradient(135deg, #0B6552 0%, #04AC6E 100%);
            border-radius: var(--radius-lg);
            padding: 28px 36px;
            display: flex;
            align-items: center;
            gap: 20px;
            color: #ffffff;
            margin-bottom: 36px;
            box-shadow: 0 8px 24px rgba(11, 101, 82, 0.25);
        }

        .response-banner-icon {
            width: 52px;
            height: 52px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            backdrop-filter: blur(4px);
        }

        .response-banner-body { flex: 1; }

        .response-banner-body h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: -0.3px;
            margin-bottom: 4px;
        }

        .response-banner-body p {
            font-size: 14px;
            opacity: 0.85;
            margin: 0;
        }

        .response-dots { display: flex; gap: 6px; align-items: center; }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            animation: pulse-dot 1.5s ease-in-out infinite;
        }

        .dot:nth-child(1) { background: #ffffff; animation-delay: 0s; }
        .dot:nth-child(2) { animation-delay: 0.2s; }
        .dot:nth-child(3) { animation-delay: 0.4s; }

        @keyframes pulse-dot {
            0%, 100% { opacity: 0.4; transform: scale(0.85); }
            50% { opacity: 1; transform: scale(1.1); }
        }

        /* FAQ Section */
        .faq-section {
            background: var(--card-bg);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            padding: 48px;
        }

        .faq-header {
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 2px solid var(--border-light);
        }

        .faq-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 24px;
            font-weight: 800;
            color: var(--text-main);
            letter-spacing: -0.5px;
            margin-bottom: 6px;
        }

        .faq-header p {
            font-size: 14.5px;
            color: var(--text-muted);
            margin: 0;
        }

        .faq-list { display: flex; flex-direction: column; gap: 12px; }

        .faq-item {
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            overflow: hidden;
            transition: border-color 0.2s ease;
        }

        .faq-item:hover { border-color: rgba(11, 101, 82, 0.25); }

        .faq-question {
            width: 100%;
            background: transparent;
            border: none;
            padding: 18px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-family: 'Outfit', sans-serif;
            font-size: 15px;
            font-weight: 700;
            color: var(--text-main);
            text-align: left;
            transition: background 0.2s ease;
            gap: 12px;
        }

        .faq-question:hover { background: var(--bg); }
        .faq-question.open { background: var(--primary-light); color: var(--primary); }

        .faq-chevron {
            flex-shrink: 0;
            color: var(--text-muted);
            transition: transform 0.25s ease, color 0.2s ease;
        }

        .faq-question.open .faq-chevron { transform: rotate(180deg); color: var(--primary); }

        .faq-answer {
            display: none;
            padding: 16px 24px 20px;
            font-size: 14.5px;
            color: var(--text-sub);
            line-height: 1.7;
            border-top: 1px solid var(--border-light);
        }

        .faq-answer.open { display: block; }

        /* Footer */
        .footer {
            background-color: #ffffff;
            border-top: 1px solid var(--border-light);
            padding: 48px 24px 36px;
            text-align: center;
            font-size: 14px;
            color: var(--text-muted);
            margin-top: auto;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 18px;
            color: var(--primary);
            margin-bottom: 16px;
        }

        .footer-links {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 28px;
        }

        .footer-links a {
            color: var(--text-sub);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .footer-links a:hover { color: var(--primary); }

        .copyright { font-size: 13px; color: #94A3B8; }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-grid { grid-template-columns: 1fr; gap: 20px; }
            .info-panel { padding: 32px 24px; }
            .faq-section { padding: 32px 24px; }
            .response-banner { flex-direction: column; text-align: center; padding: 24px; }
            .hero h1 { font-size: 34px; }
            .hero { padding: 48px 0 36px; }
        }

        @media (max-width: 576px) {
            .navbar-container { padding: 0 16px; }
            .logo { font-size: 19px; }
            .logo-icon { width: 32px; height: 32px; }
            .btn { padding: 8px 12px; font-size: 13px; }
            .hero { padding: 36px 0 28px; }
            .hero h1 { font-size: 28px; }
            .main-container { padding: 36px 16px 60px; }
            .contact-card { padding: 28px 22px; }
            .info-panel { padding: 24px 18px; }
            .faq-section { padding: 24px 18px; }
        }
    </style>
</head>
<body>

    <div class="top-accent"></div>

    <!-- Navbar -->
    <header class="navbar">
        <div class="navbar-container">
            <a href="/" class="logo">
                <div class="logo-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                        <line x1="6" y1="1" x2="6" y2="4"></line>
                        <line x1="10" y1="1" x2="10" y2="4"></line>
                        <line x1="14" y1="1" x2="14" y2="4"></line>
                    </svg>
                </div>
                Meal Nexus
            </a>
            <div class="nav-actions">
                <a href="/privacy" class="btn btn-outline">Privacy</a>
                <a href="/terms" class="btn btn-outline">Terms</a>
                <a href="/" class="btn btn-primary">Home</a>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-container">
            <span class="badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.82a16 16 0 0 0 6 6l.82-.82a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Get In Touch
            </span>
            <h1>Contact Us</h1>
            <p class="lead">We're here to help. Reach out to our team for any questions, support, or feedback — we'd love to hear from you.</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-container">

        <!-- Contact Cards -->
        <div class="contact-grid">

            <!-- Email Card -->
            <div class="contact-card">
                <div class="contact-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <div>
                    <div class="contact-card-label">Email Address</div>
                    <div class="contact-card-title">Send Us a Message</div>
                    <div class="contact-card-desc">Our support team typically responds within 24–48 business hours. We're ready to assist with any inquiry.</div>
                </div>
                <a href="mailto:mealnexus@gmail.com" class="contact-card-action" id="email-action-btn">
                    mealnexus@gmail.com
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>

            <!-- Phone Card -->
            <div class="contact-card">
                <div class="contact-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.82a16 16 0 0 0 6 6l.82-.82a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <div>
                    <div class="contact-card-label">Phone Number</div>
                    <div class="contact-card-title">Talk to Our Team</div>
                    <div class="contact-card-desc">Prefer a phone call? Give us a ring during business hours and we'll be happy to assist you directly.</div>
                </div>
                <a href="tel:+15615777324" class="contact-card-action" id="phone-action-btn">
                    (561) 577-7324
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>

        </div>

        <!-- Response Time Banner -->
        <div class="response-banner">
            <div class="response-banner-icon">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
            </div>
            <div class="response-banner-body">
                <h3>We typically respond within 24 hours</h3>
                <p>Our support team is active Monday–Friday. For urgent matters, please reach us by phone during business hours.</p>
            </div>
            <div class="response-dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

        <!-- Full Contact Details Panel -->
        <div class="info-panel">
            <div class="info-panel-header">
                <div class="info-panel-header-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                </div>
                <div>
                    <h2>Contact Information</h2>
                    <p>All the ways you can reach the Meal Nexus team</p>
                </div>
            </div>
            <div class="info-rows">

                <div class="info-row">
                    <div class="info-row-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="info-row-body">
                        <div class="info-row-label">Contact Email</div>
                        <a href="mailto:mealnexus@gmail.com" class="info-row-value">mealnexus@gmail.com</a>
                    </div>
                    <div class="info-row-badge">Email Us</div>
                </div>

                <div class="info-row">
                    <div class="info-row-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.82a16 16 0 0 0 6 6l.82-.82a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div class="info-row-body">
                        <div class="info-row-label">Contact Phone Number</div>
                        <a href="tel:+15615777324" class="info-row-value">(561) 577-7324</a>
                    </div>
                    <div class="info-row-badge">Call Us</div>
                </div>

                <div class="info-row">
                    <div class="info-row-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div class="info-row-body">
                        <div class="info-row-label">Business Hours</div>
                        <span class="info-row-value" style="color: var(--text-main);">Monday – Friday, 9AM – 6PM EST</span>
                    </div>
                    <div class="info-row-badge">Available</div>
                </div>

            </div>
        </div>

        <!-- FAQ Section -->
        <div class="faq-section">
            <div class="faq-header">
                <h2>Frequently Asked Questions</h2>
                <p>Quick answers to common questions about reaching us.</p>
            </div>
            <div class="faq-list">

                <div class="faq-item">
                    <button class="faq-question" id="faq-1-btn" aria-expanded="false" aria-controls="faq-1-answer" onclick="toggleFaq(this, 'faq-1-answer')">
                        How quickly will I receive a response?
                        <svg class="faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="faq-answer" id="faq-1-answer">
                        We aim to respond to all email inquiries within 24–48 business hours. For faster assistance, you can call us directly at (561) 577-7324 during our business hours (Mon–Fri, 9AM–6PM EST).
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" id="faq-2-btn" aria-expanded="false" aria-controls="faq-2-answer" onclick="toggleFaq(this, 'faq-2-answer')">
                        What types of issues can I contact you about?
                        <svg class="faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="faq-answer" id="faq-2-answer">
                        You can reach us for any questions related to account support, app features, subscription billing, feedback, bug reports, privacy concerns, or general inquiries about Meal Nexus. We're happy to help!
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" id="faq-3-btn" aria-expanded="false" aria-controls="faq-3-answer" onclick="toggleFaq(this, 'faq-3-answer')">
                        Can I request account deletion via email?
                        <svg class="faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="faq-answer" id="faq-3-answer">
                        Yes. If you'd like to delete your Meal Nexus account and all associated data, you can email us at <a href="mailto:mealnexus@gmail.com" style="color: var(--primary); font-weight: 600;">mealnexus@gmail.com</a> with your account details and a deletion request. We will process this within 5–7 business days.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" id="faq-4-btn" aria-expanded="false" aria-controls="faq-4-answer" onclick="toggleFaq(this, 'faq-4-answer')">
                        Where can I read your Privacy Policy and Terms?
                        <svg class="faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="faq-answer" id="faq-4-answer">
                        You can review our <a href="/privacy" style="color: var(--primary); font-weight: 600;">Privacy Policy</a> and <a href="/terms" style="color: var(--primary); font-weight: 600;">Terms &amp; Conditions</a> at any time using the links in the navigation bar or the footer below.
                    </div>
                </div>

            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-brand">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                <line x1="6" y1="1" x2="6" y2="4"></line>
                <line x1="10" y1="1" x2="10" y2="4"></line>
                <line x1="14" y1="1" x2="14" y2="4"></line>
            </svg>
            Meal Nexus
        </div>
        <div class="footer-links">
            <a href="/privacy">Privacy Policy</a>
            <a href="/terms">Terms &amp; Conditions</a>
            <a href="/contact">Contact Us</a>
            <a href="/">Home</a>
        </div>
        <div class="copyright">&copy; {{ date('Y') }} Meal Nexus. All rights reserved. Made for healthy living and seamless meal planning.</div>
    </footer>

    <!-- FAQ Toggle Script -->
    <script>
        function toggleFaq(btn, id) {
            const answer = document.getElementById(id);
            const isOpen = answer.classList.contains('open');

            // Close all
            document.querySelectorAll('.faq-answer').forEach(function(el) { el.classList.remove('open'); });
            document.querySelectorAll('.faq-question').forEach(function(el) {
                el.classList.remove('open');
                el.setAttribute('aria-expanded', 'false');
            });

            if (!isOpen) {
                answer.classList.add('open');
                btn.classList.add('open');
                btn.setAttribute('aria-expanded', 'true');
            }
        }
    </script>
</body>
</html>
