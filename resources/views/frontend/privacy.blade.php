<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Meal Nexus</title>
    <meta name="description" content="Meal Nexus Privacy Policy - Learn how we collect, use, and protect your personal information, dietary preferences, and meal planning data.">
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

        /* Top Notification Bar / Accent */
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
            transition: all 0.3s ease;
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
            margin: 0 auto 16px;
        }

        .last-updated {
            color: var(--text-muted);
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        /* Layout */
        .layout-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 48px 24px 80px;
            flex-grow: 1;
            display: grid;
            grid-template-columns: 290px 1fr;
            gap: 48px;
        }

        /* Sidebar */
        .sidebar {
            position: sticky;
            top: 104px;
            height: fit-content;
            background: #ffffff;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-lg);
            padding: 24px;
            box-shadow: var(--shadow-sm);
        }

        .toc-title {
            font-family: 'Outfit', sans-serif;
            font-size: 13px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: var(--primary);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .toc-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .toc-item { margin-bottom: 0; }

        .toc-link {
            display: block;
            padding: 8px 14px;
            font-size: 13.5px;
            color: var(--text-sub);
            text-decoration: none;
            border-radius: var(--radius-sm);
            transition: all 0.2s ease;
            line-height: 1.4;
            font-weight: 500;
        }

        .toc-link:hover {
            color: var(--primary);
            background-color: var(--primary-light);
        }

        .toc-link.active {
            color: var(--primary);
            background-color: var(--primary-light);
            font-weight: 700;
            border-left: 3px solid var(--primary);
            border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
            padding-left: 11px;
        }

        /* Quick Info Box in Sidebar */
        .sidebar-box {
            margin-top: 24px;
            padding-top: 20px;
            border-top: 1px solid var(--border-light);
        }

        .sidebar-box-title {
            font-size: 13px;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 8px;
            font-family: 'Outfit', sans-serif;
        }

        .sidebar-box-text {
            font-size: 12.5px;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 12px;
        }

        /* Content Card */
        .content-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            padding: 56px 48px;
        }

        .content { color: #334155; font-size: 15.5px; }

        .content h2, .content h3, .content h4 {
            font-family: 'Outfit', sans-serif;
            color: var(--text-main);
            font-weight: 700;
            scroll-margin-top: 110px;
        }

        .content h2 {
            font-size: 26px;
            margin-top: 48px;
            margin-bottom: 18px;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--border-light);
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--primary);
        }

        .content h2:first-child {
            margin-top: 0;
        }

        .content h2 .section-num {
            font-size: 16px;
            background: var(--primary-light);
            color: var(--primary);
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            flex-shrink: 0;
        }

        .content h3 {
            font-size: 19px;
            margin-top: 28px;
            margin-bottom: 14px;
            color: var(--text-main);
            font-weight: 700;
        }

        .content h4 {
            font-size: 16px;
            margin-top: 18px;
            margin-bottom: 10px;
            color: var(--text-sub);
        }

        .content p { margin-bottom: 20px; text-align: justify; }

        .content ul, .content ol {
            margin-bottom: 24px;
            padding-left: 24px;
        }

        .content li {
            margin-bottom: 10px;
            position: relative;
        }

        .content strong { color: var(--text-main); }

        .content a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            border-bottom: 1px solid rgba(11, 101, 82, 0.3);
            transition: all 0.2s ease;
        }

        .content a:hover {
            color: var(--primary-accent);
            border-bottom-color: var(--primary-accent);
        }

        .content ul ul { margin-top: 8px; margin-bottom: 8px; }

        /* Highlight Callout Boxes */
        .callout {
            background-color: var(--bg);
            border-left: 4px solid var(--primary);
            border-radius: 0 var(--radius-md) var(--radius-md) 0;
            padding: 20px 24px;
            margin: 28px 0;
            font-size: 14.5px;
        }

        .callout-title {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
        }

        .callout p:last-child { margin-bottom: 0; }

        .callout.warning {
            background-color: #FFFBEB;
            border-left-color: #F59E0B;
        }
        .callout.warning .callout-title { color: #B45309; }

        /* Data Category Cards */
        .data-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
            margin: 24px 0 32px;
        }

        .data-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            padding: 20px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .data-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
            border-color: var(--primary-accent);
        }

        .data-card-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
        }

        .data-card-title {
            font-family: 'Outfit', sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 6px;
        }

        .data-card-desc {
            font-size: 13.5px;
            color: var(--text-muted);
            line-height: 1.5;
        }

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

        .copyright {
            font-size: 13px;
            color: #94A3B8;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .layout-container {
                grid-template-columns: 1fr;
                gap: 32px;
                padding: 32px 20px 60px;
            }
            .sidebar { display: none; }
            .content-card { padding: 36px 28px; }
            .hero h1 { font-size: 34px; }
            .hero { padding: 48px 0 36px; }
        }

        @media (max-width: 576px) {
            .navbar-container { padding: 0 16px; }
            .logo { font-size: 19px; }
            .logo-icon { width: 32px; height: 32px; }
            .btn { padding: 8px 12px; font-size: 13px; }
            .content-card { padding: 24px 18px; border-radius: var(--radius-lg); }
            .content h2 { font-size: 22px; }
            .hero { padding: 36px 0 28px; }
            .hero h1 { font-size: 28px; }
            .data-grid { grid-template-columns: 1fr; }
        }

        /* Print */
        @media print {
            .top-accent, .navbar, .sidebar, .footer, .btn { display: none !important; }
            body { background-color: #fff; color: #000; }
            .layout-container { display: block; padding: 0; max-width: 100%; }
            .content-card { border: none; box-shadow: none; padding: 0; }
            .content h2 { border-bottom: 1px solid #000; color: #000; }
            .callout { border-left-color: #000; background: #f5f5f5; }
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
                <button onclick="window.print()" class="btn btn-outline" aria-label="Print Privacy Policy">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                    Print
                </button>
                <a href="/terms" class="btn btn-outline">Terms</a>
                <a href="/" class="btn btn-primary">Home</a>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-container">
            <span class="badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                Privacy & Data Protection
            </span>
            <h1>Privacy Policy</h1>
            <p class="lead">We value your trust and are dedicated to safeguarding your personal data, dietary preferences, and meal planning information.</p>
            <div class="last-updated">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                Last Updated: {{ date('F d, Y') }}
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="layout-container">
        <!-- Sidebar TOC -->
        <aside class="sidebar">
            <div class="toc-title">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                Table of Contents
            </div>
            <ul class="toc-list">
                <li class="toc-item"><a href="#introduction" class="toc-link active">1. Introduction</a></li>
                <li class="toc-item"><a href="#information-we-collect" class="toc-link">2. Information We Collect</a></li>
                <li class="toc-item"><a href="#device-permissions" class="toc-link">3. Device Permissions</a></li>
                <li class="toc-item"><a href="#how-we-use" class="toc-link">4. How We Use Your Data</a></li>
                <li class="toc-item"><a href="#data-storage" class="toc-link">5. Storage & Caching</a></li>
                <li class="toc-item"><a href="#third-parties" class="toc-link">6. Third-Party Services</a></li>
                <li class="toc-item"><a href="#data-security" class="toc-link">7. Data Security</a></li>
                <li class="toc-item"><a href="#data-retention-deletion" class="toc-link">8. Retention & Account Deletion</a></li>
                <li class="toc-item"><a href="#user-rights" class="toc-link">9. Your Privacy Rights</a></li>
                <li class="toc-item"><a href="#health-disclaimer" class="toc-link">10. Health & Nutritional Disclaimer</a></li>
                <li class="toc-item"><a href="#childrens-privacy" class="toc-link">11. Children's Privacy</a></li>
                <li class="toc-item"><a href="#policy-updates" class="toc-link">12. Changes to This Policy</a></li>
                <li class="toc-item"><a href="#contact-us" class="toc-link">13. Contact & Support</a></li>
            </ul>

            <div class="sidebar-box">
                <div class="sidebar-box-title">Need help with your data?</div>
                <div class="sidebar-box-text">You can request data export or account deletion directly by reaching out to our privacy team.</div>
                <a href="mailto:support@mealnexusapp.com" class="btn btn-outline" style="width: 100%; justify-content: center; font-size: 12.5px; padding: 8px 12px;">Contact Privacy Team</a>
            </div>
        </aside>

        <!-- Content Card -->
        <article class="content-card">
            <div class="content" id="policy-content">

                <!-- 1. Introduction -->
                <h2 id="introduction">
                    <span class="section-num">1</span>
                    Introduction
                </h2>
                <p>Welcome to <strong>Meal Nexus</strong> ("we," "our," or "us"). We are committed to maintaining the trust and confidence of our users. This Privacy Policy explains how Meal Nexus collects, uses, stores, and protects your personal information when you access or use the Meal Nexus mobile application, our REST APIs, and any related web interfaces (collectively, the "Services").</p>
                <p>Meal Nexus is designed to simplify healthy eating by providing personalized recipe discovery, nutritional information, daily and weekly meal planning, customized dietary filtering, smart grocery checklist generation, and meal reminder notifications. By downloading, registering, or using Meal Nexus, you acknowledge and agree to the practices outlined in this Privacy Policy.</p>

                <!-- 2. Information We Collect -->
                <h2 id="information-we-collect">
                    <span class="section-num">2</span>
                    Information We Collect
                </h2>
                <p>We collect information you provide directly, data generated through your app activity, and essential technical device details required to operate and secure our Services:</p>

                <div class="data-grid">
                    <div class="data-card">
                        <div class="data-card-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                        <div class="data-card-title">Account Information</div>
                        <div class="data-card-desc">Your full name, email address, securely hashed password, and profile avatar image.</div>
                    </div>
                    <div class="data-card">
                        <div class="data-card-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                        <div class="data-card-title">Dietary Preferences</div>
                        <div class="data-card-desc">Selected dietary preferences, food allergies, intolerances (e.g., Vegan, Gluten-Free, Keto, Low Carb), and daily calorie targets.</div>
                    </div>
                    <div class="data-card">
                        <div class="data-card-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        </div>
                        <div class="data-card-title">Meal Plans & Schedules</div>
                        <div class="data-card-desc">Custom meal schedule times, selected recipes for breakfast, lunch, dinner, snacks, and custom meal slots.</div>
                    </div>
                    <div class="data-card">
                        <div class="data-card-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                        </div>
                        <div class="data-card-title">Grocery & Tracking</div>
                        <div class="data-card-desc">Ingredients checklists generated from meal plans, purchased/checked items, recipe favorites, and tried recipe logs.</div>
                    </div>
                </div>

                <h3>A. Information You Voluntarily Provide</h3>
                <ul>
                    <li><strong>Registration & Authentication:</strong> When you register for an account, we collect your full name, email address, and password. When recovering your account, we verify your identity via one-time verification codes (OTP) sent to your registered email.</li>
                    <li><strong>User Profile:</strong> You may edit your profile to update your name, email, or upload a custom profile picture/avatar.</li>
                    <li><strong>Dietary Preferences:</strong> During onboarding or via profile settings, you can select dietary lifestyles (such as Vegan, Vegetarian, Gluten-Free, Dairy-Free, Keto, Low Carb, Nut-Free, etc.) to tailor meal suggestions.</li>
                    <li><strong>Meal Planning & Calorie Goals:</strong> You configure daily target calories, assign recipes to specific meal slots (e.g., Breakfast at 8:00 AM, Lunch at 12:00 PM, Dinner at 8:00 PM), and create custom meal categories.</li>
                    <li><strong>Grocery Checklist Data:</strong> Items you generate, add, modify, check off, or clear in your smart grocery list.</li>
                    <li><strong>Reviews and Ratings:</strong> Comments, ratings, and feedback you submit for recipes within the app.</li>
                </ul>

                <h3>B. Information Collected Automatically</h3>
                <ul>
                    <li><strong>Device Identifiers & Technical Info:</strong> Device model, manufacturer, operating system version, unique device identifier (Device ID), application version, and network connection type.</li>
                    <li><strong>Push Notification Tokens:</strong> Firebase Cloud Messaging (FCM) device tokens generated when you permit push notifications, allowing us to send meal reminders and important updates.</li>
                    <li><strong>Usage & Performance Diagnostics:</strong> Aggregated interaction logs, search queries, screen views, API response times, and crash reports to diagnose performance bottlenecks and improve app reliability.</li>
                </ul>

                <!-- 3. Device Permissions -->
                <h2 id="device-permissions">
                    <span class="section-num">3</span>
                    Device Permissions We Request
                </h2>
                <p>To provide specific features, Meal Nexus may request the following platform permissions on iOS and Android. You can control or revoke these permissions at any time through your device operating system settings:</p>
                <ul>
                    <li><strong>Photo Library / Media Storage:</strong> Used exclusively when you choose to upload or change your profile avatar image. We only access the specific photo file you select and do not scan, index, or access the rest of your photo gallery.</li>
                    <li><strong>Push Notifications:</strong> Used to deliver timely meal reminders (e.g., reminding you of scheduled breakfast, lunch, or dinner) and critical account security notices. You can toggle push notifications on or off at any time inside the app's Profile settings or through your operating system settings.</li>
                    <li><strong>Network & Internet Access:</strong> Required to communicate with our secure backend APIs (`mealnexusapp.com`), retrieve recipes, sync your meal plans and grocery lists, and authenticate your account.</li>
                </ul>

                <!-- 4. How We Use Your Information -->
                <h2 id="how-we-use">
                    <span class="section-num">4</span>
                    How We Use Your Information
                </h2>
                <p>We process your data for clear, legitimate purposes aligned with providing a high-quality nutritional and meal planning experience:</p>
                <ul>
                    <li><strong>Personalizing Recipe Recommendations:</strong> Filtering and presenting recipes that match your specified dietary restrictions, food preferences, and calorie objectives.</li>
                    <li><strong>Meal Planning & Nutrition Tracking:</strong> Storing and syncing your meal calendar, calculating total calorie and macronutrient estimates (protein, carbohydrates, fats), and tracking recipe progress.</li>
                    <li><strong>Automated Grocery List Generation:</strong> Converting ingredients from your planned meals into categorized shopping lists (Bakery, Produce, Dairy, Pantry, etc.) with real-time completion tracking.</li>
                    <li><strong>Account Security & Authentication:</strong> Authenticating your login credentials, managing sessions, issuing secure JSON Web Tokens (JWT), and sending OTP verification emails for password resets.</li>
                    <li><strong>Meal Reminders & Notifications:</strong> Delivering scheduled notifications for planned meals and service announcements via Firebase Cloud Messaging.</li>
                    <li><strong>Service Reliability & Optimization:</strong> Monitoring system health, troubleshooting technical bugs, and refining our user experience.</li>
                    <li><strong>Legal & Compliance:</strong> Enforcing our Terms and Conditions, preventing fraudulent activity, and complying with applicable legal obligations.</li>
                </ul>

                <div class="callout">
                    <div class="callout-title">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        We Respect Your Privacy
                    </div>
                    <p><strong>We never sell, rent, or trade your personal information or dietary data to third-party advertisers, data brokers, or marketing networks.</strong></p>
                </div>

                <!-- 5. Storage & Caching -->
                <h2 id="data-storage">
                    <span class="section-num">5</span>
                    Local Storage & Data Caching
                </h2>
                <p>To ensure high performance, offline usability, and seamless screen transitions, Meal Nexus utilizes secure client-side storage technologies:</p>
                <ul>
                    <li><strong>Local Storage (GetStorage):</strong> Stores your authentication access token, login state, and app preferences locally on your device so you remain signed in between app sessions.</li>
                    <li><strong>Network Image & API Cache (Hive & Dio Cache Interceptor):</strong> Caches recipe images, ingredient thumbnails, and frequently accessed meal data on your local device storage. This saves mobile bandwidth, accelerates loading times, and enables smooth browsing.</li>
                </ul>

                <!-- 6. Third-Party Services -->
                <h2 id="third-parties">
                    <span class="section-num">6</span>
                    Data Sharing & Third-Party Service Providers
                </h2>
                <p>We work only with vetted third-party service providers who assist us in operating our infrastructure and delivering our Services under strict confidentiality agreements:</p>
                <ul>
                    <li><strong>Firebase (Google LLC):</strong> We utilize Firebase Core and Firebase Cloud Messaging (FCM) to securely deliver push notifications to your device. Google handles device tokens in compliance with applicable data privacy frameworks.</li>
                    <li><strong>Cloud Hosting & API Infrastructure:</strong> Our backend servers and databases are hosted in secure, ISO/IEC-certified cloud data centers providing encrypted database storage and API communication.</li>
                    <li><strong>Legal Authorities:</strong> We may disclose information if required to do so by applicable law, lawful subpoena, court order, or governmental regulation, or if we believe in good faith that disclosure is necessary to protect the rights, property, or safety of Meal Nexus, our users, or the public.</li>
                    <li><strong>Business Transfers:</strong> In the event of a merger, acquisition, reorganization, or sale of assets, user data may be transferred as an acquired business asset subject to the commitments in this Privacy Policy.</li>
                </ul>

                <!-- 7. Data Security -->
                <h2 id="data-security">
                    <span class="section-num">7</span>
                    Data Security
                </h2>
                <p>We prioritize the security of your personal data and implement multi-layered administrative, technical, and physical safeguards:</p>
                <ul>
                    <li><strong>Transport Layer Security (TLS/SSL):</strong> All data transmitted between the Meal Nexus mobile app and our backend servers is encrypted using modern TLS 1.2/1.3 cryptographic protocols.</li>
                    <li><strong>Password Hashing:</strong> Passwords are cryptographically salted and hashed using industry-standard hashing algorithms (such as bcrypt). Plaintext passwords are never stored or accessible by our staff.</li>
                    <li><strong>Tokenized Authentication:</strong> API interactions utilize signed authorization tokens (Bearer Tokens) that expire and refresh securely.</li>
                    <li><strong>Access Controls:</strong> Database and server access is restricted to authorized personnel on a strict need-to-know basis with multi-factor authentication.</li>
                </ul>
                <p><em>While we maintain rigorous security protocols, no method of electronic transmission over the Internet or mobile storage can be guaranteed to be 100% impenetrable. We encourage you to use a strong, unique password for your Meal Nexus account.</em></p>

                <!-- 8. Retention & Account Deletion -->
                <h2 id="data-retention-deletion">
                    <span class="section-num">8</span>
                    Data Retention & Account Deletion
                </h2>
                <p>We retain your personal data for as long as your account remains active and as required to fulfill the purposes described in this policy.</p>

                <h3>How to Delete Your Account and Data</h3>
                <p>You have the full right to delete your Meal Nexus account and all associated personal data at any time. When you request account deletion:</p>
                <ul>
                    <li>All personal profile details (name, email, avatar) are permanently purged from our primary databases.</li>
                    <li>Your dietary preferences, custom meal plans, grocery checklists, and favorite recipe bookmarks are permanently deleted.</li>
                    <li>Associated device tokens (FCM tokens) are deregistered and deleted from our notification dispatch system.</li>
                    <li>Public recipe reviews or ratings you posted may be anonymized so they no longer link to your identity.</li>
                </ul>
                <p>To request account deletion, you may use the in-app account deletion option in Profile settings or send a deletion request directly to <a href="mailto:support@mealnexusapp.com?subject=Account%20Deletion%20Request">support@mealnexusapp.com</a>. We will process and confirm your deletion within 30 calendar days.</p>

                <!-- 9. Your Privacy Rights -->
                <h2 id="user-rights">
                    <span class="section-num">9</span>
                    Your Privacy Rights & Choices
                </h2>
                <p>Depending on your jurisdiction (including the European Economic Area under GDPR, the United Kingdom, California under CCPA/CPRA, and other applicable global regulations), you hold the following rights regarding your personal information:</p>
                <ul>
                    <li><strong>Right of Access:</strong> Request a copy of the personal data we maintain about you.</li>
                    <li><strong>Right to Rectification:</strong> Update or correct inaccurate or incomplete profile information directly in the app or by contacting us.</li>
                    <li><strong>Right to Erasure (Right to Be Forgotten):</strong> Request the permanent deletion of your account and personal records.</li>
                    <li><strong>Right to Restrict or Object:</strong> Object to or request restriction of certain processing activities.</li>
                    <li><strong>Right to Data Portability:</strong> Request an export of your personal data in a structured, commonly used machine-readable format.</li>
                    <li><strong>Notification Choices:</strong> Toggle off meal reminder push notifications at any time via in-app profile settings or your device OS settings.</li>
                </ul>

                <!-- 10. Health & Nutritional Disclaimer -->
                <h2 id="health-disclaimer">
                    <span class="section-num">10</span>
                    Health, Nutritional & Dietary Disclaimer
                </h2>
                <div class="callout warning">
                    <div class="callout-title">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        Important Health & Dietary Notice
                    </div>
                    <p>Meal Nexus provides recipes, meal suggestions, calorie estimates, and macronutrient breakdowns for general informational, organizational, and educational purposes only. <strong>The app does not provide medical advice, clinical nutrition counseling, diagnosis, or treatment.</strong></p>
                </div>
                <p>Nutritional calculations, calorie values, and ingredient lists are estimates based on standard nutritional databases and recipe data. Variations may occur based on specific ingredient brands, cooking techniques, and portion sizes. <strong>If you have severe food allergies, celiac disease, diabetes, or any medical condition requiring specialized dietary management, you must independently inspect all physical food labels and consult a certified healthcare professional or registered dietitian.</strong></p>

                <!-- 11. Children's Privacy -->
                <h2 id="childrens-privacy">
                    <span class="section-num">11</span>
                    Children's Privacy
                </h2>
                <p>Meal Nexus is intended for individuals who are at least 13 years old (or 16 years old in jurisdictions where local data protection laws require a higher age of digital consent). We do not knowingly collect, solicit, or maintain personal information from children under these age thresholds. If we discover that personal data of a minor has been collected without verifiable parental consent, we will take immediate measures to delete the account and purge that data from our servers.</p>

                <!-- 12. Changes to This Policy -->
                <h2 id="policy-updates">
                    <span class="section-num">12</span>
                    Changes to This Privacy Policy
                </h2>
                <p>We may periodically update this Privacy Policy to reflect enhancements to our features, operational practices, or evolving legal and regulatory requirements. When material updates occur, we will notify you by updating the "Last Updated" date at the top of this document, posting an in-app notice, or sending an email notification where appropriate. Your continued use of Meal Nexus after such revisions constitutes your acknowledgment and acceptance of the updated terms.</p>

                <!-- 13. Contact Us -->
                <h2 id="contact-us">
                    <span class="section-num">13</span>
                    Contact Us & Support
                </h2>
                <p>If you have any questions, feedback, or privacy-related requests concerning this Privacy Policy or our data handling practices, please contact our support team:</p>
                <ul>
                    <li><strong>Email Support:</strong> <a href="mailto:support@mealnexusapp.com">support@mealnexusapp.com</a></li>
                    <li><strong>Website:</strong> <a href="https://mealnexusapp.com" target="_blank" rel="noopener noreferrer">https://mealnexusapp.com</a></li>
                    <li><strong>Response Time:</strong> We endeavor to respond to all legitimate inquiries within 1–2 business days (and at most 30 calendar days for formal data subject requests).</li>
                </ul>

            </div>
        </article>
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
            <a href="/terms">Terms & Conditions</a>
            <a href="mailto:support@mealnexusapp.com">Support</a>
            <a href="/">Home</a>
        </div>
        <div class="copyright">&copy; {{ date('Y') }} Meal Nexus. All rights reserved. Made for healthy living and seamless meal planning.</div>
    </footer>

    <!-- TOC Active Highlight Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const headings = document.querySelectorAll('.content h2');
            const links = document.querySelectorAll('.toc-link');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.getAttribute('id');
                        links.forEach(link => {
                            link.classList.toggle('active', link.getAttribute('href') === '#' + id);
                        });
                    }
                });
            }, { root: null, rootMargin: '0px 0px -65% 0px', threshold: 0 });

            headings.forEach(heading => observer.observe(heading));
        });
    </script>
</body>
</html>
