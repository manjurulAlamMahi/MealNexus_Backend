<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions | Meal Nexus</title>
    <meta name="description" content="Meal Nexus Terms and Conditions - Read our terms of service, user agreements, health disclaimers, and guidelines for using the Meal Nexus application.">
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

        /* Callout Box */
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
                <button onclick="window.print()" class="btn btn-outline" aria-label="Print Terms and Conditions">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                    Print
                </button>
                <a href="/privacy" class="btn btn-outline">Privacy</a>
                <a href="/" class="btn btn-primary">Home</a>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-container">
            <span class="badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                User Agreement & Terms
            </span>
            <h1>Terms & Conditions</h1>
            <p class="lead">Please read these Terms and Conditions carefully before using the Meal Nexus application and services.</p>
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
                <li class="toc-item"><a href="#acceptance" class="toc-link active">1. Acceptance of Terms</a></li>
                <li class="toc-item"><a href="#eligibility" class="toc-link">2. Eligibility & Accounts</a></li>
                <li class="toc-item"><a href="#services-features" class="toc-link">3. App Services & Features</a></li>
                <li class="toc-item"><a href="#health-disclaimer" class="toc-link">4. Medical & Dietary Disclaimer</a></li>
                <li class="toc-item"><a href="#user-conduct" class="toc-link">5. User Conduct & Reviews</a></li>
                <li class="toc-item"><a href="#intellectual-property" class="toc-link">6. Intellectual Property</a></li>
                <li class="toc-item"><a href="#third-party-services" class="toc-link">7. Third-Party Services</a></li>
                <li class="toc-item"><a href="#termination" class="toc-link">8. Termination & Deletion</a></li>
                <li class="toc-item"><a href="#disclaimer-warranties" class="toc-link">9. Disclaimer of Warranties</a></li>
                <li class="toc-item"><a href="#limitation-liability" class="toc-link">10. Limitation of Liability</a></li>
                <li class="toc-item"><a href="#indemnification" class="toc-link">11. Indemnification</a></li>
                <li class="toc-item"><a href="#governing-law" class="toc-link">12. Governing Law</a></li>
                <li class="toc-item"><a href="#changes-to-terms" class="toc-link">13. Changes to Terms</a></li>
                <li class="toc-item"><a href="#contact-us" class="toc-link">14. Contact Information</a></li>
            </ul>

            <div class="sidebar-box">
                <div class="sidebar-box-title">Questions about our terms?</div>
                <div class="sidebar-box-text">Feel free to contact our legal and support team regarding any questions or clarification.</div>
                <a href="mailto:support@mealnexusapp.com" class="btn btn-outline" style="width: 100%; justify-content: center; font-size: 12.5px; padding: 8px 12px;">Contact Legal Team</a>
            </div>
        </aside>

        <!-- Content Card -->
        <article class="content-card">
            <div class="content" id="terms-content">

                <!-- 1. Acceptance of Terms -->
                <h2 id="acceptance">
                    <span class="section-num">1</span>
                    Acceptance of Terms
                </h2>
                <p>These Terms and Conditions ("Terms") constitute a legally binding agreement between you ("User," "you," or "your") and <strong>Meal Nexus</strong> ("Meal Nexus," "we," "us," or "our") concerning your access to and use of the Meal Nexus mobile application, APIs, and associated online services (collectively, the "Services").</p>
                <p>By creating an account, downloading, accessing, or using the Services, you confirm that you have read, understood, and agreed to be bound by these Terms and our <a href="/privacy">Privacy Policy</a>. If you do not agree with all of these Terms, you are expressly prohibited from using the Services and must immediately uninstall and discontinue using the application.</p>

                <!-- 2. Eligibility & Accounts -->
                <h2 id="eligibility">
                    <span class="section-num">2</span>
                    Eligibility & Account Registration
                </h2>
                <ul>
                    <li><strong>Age Requirement:</strong> You must be at least 13 years of age (or the minimum legal age required in your country of residence to form a binding contract) to register for and use Meal Nexus.</li>
                    <li><strong>Account Accuracy:</strong> You agree to provide accurate, current, and complete registration information during sign-up and to keep your profile information updated.</li>
                    <li><strong>Account Security:</strong> You are solely responsible for maintaining the confidentiality of your account credentials (email and password) and for all activities that occur under your account. You agree to notify us immediately at <a href="mailto:support@mealnexusapp.com">support@mealnexusapp.com</a> of any unauthorized use or security breach.</li>
                    <li><strong>One Account Per User:</strong> You may not create multiple accounts, register an account on behalf of someone else without authorization, or transfer your account to another party.</li>
                </ul>

                <!-- 3. App Services & Features -->
                <h2 id="services-features">
                    <span class="section-num">3</span>
                    Meal Nexus Features & Usage
                </h2>
                <p>Meal Nexus offers a suite of nutritional planning, discovery, and organization tools, including:</p>
                <ul>
                    <li><strong>Recipe Catalog & Discovery:</strong> Browsing and searching healthy recipes categorized by meal types (Breakfast, Lunch, Dinner, Snacks), dietary lifestyles (Vegan, Gluten-Free, Low Carb, etc.), cooking time, servings, and nutritional metrics.</li>
                    <li><strong>Meal Planning & Calorie Goals:</strong> Organizing daily and weekly meal plans, scheduling meal slots with designated times, setting target calorie goals, and tracking planned dishes.</li>
                    <li><strong>Smart Grocery List:</strong> Automatically generating categorized grocery shopping lists (Bakery, Dairy, Produce, Pantry) from your active meal plans, with real-time checklist tracking.</li>
                    <li><strong>Favorites & Reviews:</strong> Bookmarking preferred recipes and submitting ratings, reviews, and comments on recipes you have prepared.</li>
                    <li><strong>Push Reminders:</strong> Receiving scheduled alerts for your upcoming meals and planning activities via Firebase Cloud Messaging.</li>
                </ul>

                <!-- 4. Medical & Dietary Disclaimer -->
                <h2 id="health-disclaimer">
                    <span class="section-num">4</span>
                    Health, Medical & Dietary Disclaimer
                </h2>
                <div class="callout warning">
                    <div class="callout-title">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        CRITICAL MEDICAL & ALLERGEN NOTICE
                    </div>
                    <p><strong>Meal Nexus is not a medical organization or clinical healthcare provider. The application, recipes, nutritional values, calorie targets, and dietary suggestions are provided strictly for general educational and informational purposes.</strong></p>
                </div>
                <p>You explicitly acknowledge and agree that:</p>
                <ul>
                    <li><strong>No Medical Advice:</strong> Content provided in Meal Nexus does not constitute medical advice, medical nutrition therapy, diagnosis, or treatment. Always consult a qualified physician or registered dietitian before starting any significant dietary change, weight-loss regimen, or meal plan.</li>
                    <li><strong>Nutritional Estimates:</strong> Calorie and macronutrient figures (protein, carbohydrates, fats, vitamins) are approximate estimates derived from general nutritional data. Actual values will vary based on ingredient brands, freshness, measurements, and cooking preparation methods.</li>
                    <li><strong>Allergies and Dietary Restrictions:</strong> You are solely responsible for inspecting physical food packaging, ingredient labels, allergy warnings, and expiration dates. Meal Nexus cannot guarantee that any suggested recipe is entirely allergen-free or free from cross-contamination.</li>
                    <li><strong>Assumption of Risk:</strong> You assume full personal responsibility and risk for any food preparation, consumption, allergic reaction, adverse health effect, or injury arising from recipes or meal plans discovered through our Services.</li>
                </ul>

                <!-- 5. User Conduct & Reviews -->
                <h2 id="user-conduct">
                    <span class="section-num">5</span>
                    User Conduct & Community Guidelines
                </h2>
                <p>When interacting with Meal Nexus, submitting recipe reviews, or using community features, you agree NOT to:</p>
                <ul>
                    <li>Post or transmit any content that is defamatory, abusive, offensive, vulgar, misleading, fraudulent, or harmful.</li>
                    <li>Submit fake, deceptive, or commercially sponsored reviews and ratings without disclosure.</li>
                    <li>Use the Services for any unlawful purpose or in violation of any local, state, national, or international law.</li>
                    <li>Reverse-engineer, decompile, disassemble, scrape, or extract source code or proprietary recipe data from the application.</li>
                    <li>Interfere with, damage, or disrupt the integrity, performance, or security of our backend servers, databases, or API infrastructure.</li>
                    <li>Impersonate any person, brand, or entity, or misrepresent your affiliation with Meal Nexus.</li>
                </ul>

                <!-- 6. Intellectual Property -->
                <h2 id="intellectual-property">
                    <span class="section-num">6</span>
                    Intellectual Property Rights
                </h2>
                <p>All intellectual property rights in and to the Meal Nexus mobile application, including but not limited to the brand name, logo, visual designs, user interfaces, source code, algorithms, curated recipe database, text, graphics, and icons, are the exclusive property of Meal Nexus and its licensors.</p>
                <p>We grant you a limited, non-exclusive, non-transferable, revocable license to download, install, and use the Meal Nexus application on your personal mobile devices solely for your personal, non-commercial use in accordance with these Terms.</p>

                <!-- 7. Third-Party Services -->
                <h2 id="third-party-services">
                    <span class="section-num">7</span>
                    Third-Party Services & Links
                </h2>
                <p>The Services may incorporate or link to third-party software, cloud infrastructure, or external websites (such as Firebase by Google for push notifications). We do not control or endorse, and are not responsible for the content, privacy practices, or availability of third-party platforms. Your interaction with third parties is governed by their respective terms and privacy policies.</p>

                <!-- 8. Termination & Account Deletion -->
                <h2 id="termination">
                    <span class="section-num">8</span>
                    Termination & Account Deletion
                </h2>
                <p><strong>By You:</strong> You may terminate your agreement with Meal Nexus at any time by deleting your account through the app's Profile settings or by emailing <a href="mailto:support@mealnexusapp.com">support@mealnexusapp.com</a> and uninstalling the app.</p>
                <p><strong>By Us:</strong> We reserve the right to suspend or terminate your account and access to the Services immediately, without prior notice, if you breach these Terms, engage in fraudulent behavior, or if required to do so by applicable law.</p>

                <!-- 9. Disclaimer of Warranties -->
                <h2 id="disclaimer-warranties">
                    <span class="section-num">9</span>
                    Disclaimer of Warranties
                </h2>
                <p>THE SERVICES ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS, WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, ACCURACY, NON-INFRINGEMENT, OR UNINTERRUPTED AVAILABILITY.</p>
                <p>WE DO NOT WARRANT THAT THE APP WILL BE FREE FROM BUGS, ERRORS, VIRUSES, OR SERVER DOWNTIME, OR THAT ANY DEFECTS WILL BE PROMPTLY CORRECTED.</p>

                <!-- 10. Limitation of Liability -->
                <h2 id="limitation-liability">
                    <span class="section-num">10</span>
                    Limitation of Liability
                </h2>
                <p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL MEAL NEXUS, ITS DIRECTORS, EMPLOYEES, PARTNERS, OR AGENTS BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING WITHOUT LIMITATION, LOSS OF DATA, REVENUE, REPUTATION, ADVERSE HEALTH OUTCOMES, PERSONAL INJURY, OR OTHER INTANGIBLE LOSSES RESULTING FROM:</p>
                <ul>
                    <li>YOUR ACCESS TO, USE OF, OR INABILITY TO ACCESS OR USE THE SERVICES;</li>
                    <li>ANY CONTENT, RECIPES, OR INGREDIENT LISTS OBTAINED FROM THE SERVICES;</li>
                    <li>ANY UNAUTHORIZED ACCESS TO OR ALTERATION OF YOUR TRANSMISSIONS OR DATA;</li>
                    <li>ANY RELIANCE ON NUTRITIONAL, ALLERGEN, OR CALORIC CALCULATIONS.</li>
                </ul>

                <!-- 11. Indemnification -->
                <h2 id="indemnification">
                    <span class="section-num">11</span>
                    Indemnification
                </h2>
                <p>You agree to defend, indemnify, and hold harmless Meal Nexus and its officers, directors, employees, and agents from and against any claims, liabilities, damages, losses, costs, or expenses (including reasonable legal fees) arising out of or in any way connected with your breach of these Terms, your misuse of the Services, or any content you submit.</p>

                <!-- 12. Governing Law -->
                <h2 id="governing-law">
                    <span class="section-num">12</span>
                    Governing Law & Dispute Resolution
                </h2>
                <p>These Terms shall be governed by and construed in accordance with the laws of the jurisdiction in which Meal Nexus operates, without regard to its conflict of law principles. Any dispute or claim arising out of or relating to these Terms or your use of Meal Nexus shall be resolved through good-faith informal negotiation. If unresolved, disputes shall be submitted to the exclusive jurisdiction of the competent courts in that jurisdiction.</p>

                <!-- 13. Changes to Terms -->
                <h2 id="changes-to-terms">
                    <span class="section-num">13</span>
                    Changes to These Terms
                </h2>
                <p>We reserve the right to revise or modify these Terms at any time. When modifications occur, we will revise the "Last Updated" date at the top of this document and provide notification through the application where appropriate. Your continued use of the Services following the posting of revised Terms constitutes your binding acceptance of those changes.</p>

                <!-- 14. Contact Us -->
                <h2 id="contact-us">
                    <span class="section-num">14</span>
                    Contact Information
                </h2>
                <p>For questions, inquiries, or legal concerns regarding these Terms and Conditions, please reach out to our team:</p>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:support@mealnexusapp.com">support@mealnexusapp.com</a></li>
                    <li><strong>Official Website:</strong> <a href="https://mealnexusapp.com" target="_blank" rel="noopener noreferrer">https://mealnexusapp.com</a></li>
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
