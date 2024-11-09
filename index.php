<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Napoleon Mithras - Full-Stack & Mobile Developer specializing in React, Node.js, Laravel, and cross-platform mobile development. 5+ years of experience crafting exceptional digital experiences.">
    <meta name="keywords" content="Full-Stack Developer, Mobile Developer, Web Development, React Developer, Node.js, Laravel, Vue.js, Uganda Developer, Software Engineer">
    <meta name="author" content="Napoleon Mithras">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://napoleonmithras.github.io/">
    <meta property="og:title" content="Napoleon Mithras - Full-Stack & Mobile Developer">
    <meta property="og:description" content="Expert Full-Stack Developer specializing in creating modern, responsive websites and mobile applications. 5+ years of experience in delivering exceptional digital solutions.">
    <meta property="og:image" content="https://napoleonmithras.github.io/images/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://napoleonmithras.github.io/">
    <meta property="twitter:title" content="Napoleon Mithras - Full-Stack & Mobile Developer">
    <meta property="twitter:description" content="Expert Full-Stack Developer specializing in creating modern, responsive websites and mobile applications. 5+ years of experience in delivering exceptional digital solutions.">
    <meta property="twitter:image" content="https://napoleonmithras.github.io/images/twitter-image.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <!-- <link rel="manifest" href="/site.webmanifest"> -->
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://napoleonmithras.github.io/">

    <title>Napoleon Mithras - Full-Stack & Mobile Developer | Web & Mobile Solutions</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* Modern CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', Arial, 'Helvetica Neue', sans-serif;
        }

        /* Splash Screen */
        .splash {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #0a192f;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 200;
            transition: opacity 0.3s ease-out;
            background: linear-gradient(
                135deg,
                rgba(10, 25, 47, 0.95) 0%,
                rgba(17, 34, 64, 0.95) 100%
            );
            backdrop-filter: blur(10px);
        }

        .splash-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
            position: relative;
        }

        .splash::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2364ffda' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.1;
            animation: moveBackground 30s linear infinite;
        }

        @keyframes moveBackground {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .loading-bar-container {
            width: 200px;
            height: 6px;
            background: rgba(100, 255, 218, 0.1);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 0 20px rgba(100, 255, 218, 0.1);
        }

        .loading-bar {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                #64ffda,
                transparent
            );
            animation: loadingAnimation 2s ease infinite;
        }

        .loading-bar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(100, 255, 218, 0.8),
                transparent
            );
            animation: loadingGlow 2s ease infinite;
        }

        @keyframes loadingAnimation {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        @keyframes loadingGlow {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: translateX(100%);
            }
        }

        .splash.fade {
            opacity: 0;
            pointer-events: none;
        }

        /* Add this if you want to show a logo or text above the loading bar */
        .splash-logo {
            color: #64ffda;
            font-size: 2.5rem;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 1rem;
            opacity: 0;
            animation: fadeIn 0.5s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Main Styles */
        body {
            background: #0a192f;
            color: #8892b0;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Navigation */
        nav {
            padding: 0.8rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            background: rgba(10, 25, 47, 0.85);
            backdrop-filter: blur(10px);
            z-index: 100;
            border-bottom: 1px solid rgba(100, 255, 218, 0.1);
        }

        .nav-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0.5rem 0;
        }

        .nav-links-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 0.5rem;
        }

        .nav-links {
            display: flex;
            gap: 3rem;
            justify-content: center;
        }

        .brand-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.3rem;
        }

        .brand-name {
            color: #64ffda;
            font-size: 1.2rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            opacity: 0;
            transform: translateY(-10px);
            animation: fadeInDown 0.5s ease forwards 0.3s;
        }

        .logo {
            position: relative;
            transform: scale(0);
            animation: popIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .logo-text {
            font-size: 2.2rem;
        }

        @keyframes popIn {
            0% { transform: scale(0); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav-link {
            color: #ccd6f6;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            padding: 0.3rem 0;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-number {
            color: #64ffda;
            font-size: 0.8rem;
            font-family: 'Fira Code', monospace;
        }

        .nav-link:hover {
            color: #64ffda;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #64ffda;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Mobile Navigation */
        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 75%;
                background: rgba(10, 25, 47, 0.95);
                backdrop-filter: blur(10px);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: right 0.3s ease;
                gap: 2rem;
            }

            .nav-links.active {
                right: 0;
            }

            .nav-link {
                font-size: 1.2rem;
            }

            /* Add hamburger menu */
            .menu-toggle {
                display: block;
                cursor: pointer;
                z-index: 101;
            }

            .menu-toggle span {
                display: block;
                width: 25px;
                height: 2px;
                background: #64ffda;
                margin: 5px 0;
                transition: all 0.3s ease;
            }

            .menu-toggle.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }

            .menu-toggle.active span:nth-child(2) {
                opacity: 0;
            }

            .menu-toggle.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -6px);
            }
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 0 60px;
            position: relative;
            overflow: hidden;
        }

        .hero-wrapper {
            position: relative;
            z-index: 2;
        }

        .hero-intro {
            margin-bottom: 1.5rem;
        }

        .hero-greeting {
            color: #64ffda;
            font-family: 'Fira Code', monospace;
            font-size: 1.1rem;
            display: inline-block;
            position: relative;
            padding-left: 3rem;
        }

        .hero-greeting::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 2rem;
            height: 1px;
            background: #64ffda;
            transform: translateY(-50%);
        }

        .hero-title {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }

        .hero-name {
            font-size: 4.5rem;
            font-weight: 700;
            color: #ccd6f6;
            line-height: 1.1;
            letter-spacing: -1px;
            animation: fadeInUp 0.5s ease forwards;
        }

        .hero-role {
            font-size: 3.5rem;
            color: #8892b0;
            font-weight: 600;
            line-height: 1.1;
            animation: fadeInUp 0.5s ease 0.2s forwards;
            opacity: 0;
        }

        .hero-description {
            max-width: 540px;
            margin-bottom: 3rem;
            font-size: 1.1rem;
            color: #8892b0;
            animation: fadeInUp 0.5s ease 0.4s forwards;
            opacity: 0;
        }

        .highlight {
            color: #64ffda;
            font-weight: 500;
        }

        .hero-cta {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 4rem;
            animation: fadeInUp 0.5s ease 0.6s forwards;
            opacity: 0;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 2rem;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .btn svg {
            transition: transform 0.3s ease;
        }

        .btn:hover svg {
            transform: translateX(4px);
        }

        .btn-primary {
            background: #64ffda;
            color: #0a192f;
            border: none;
        }

        .btn-primary:hover {
            background: #4cd5b5;
            transform: translateY(-2px);
        }

        .btn-secondary {
            border: 1px solid #64ffda;
            color: #64ffda;
        }

        .btn-secondary:hover {
            background: rgba(100, 255, 218, 0.1);
            transform: translateY(-2px);
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            max-width: 600px;
            animation: fadeInUp 0.5s ease 0.8s forwards;
            opacity: 0;
        }

        .stat {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            padding: 1.5rem;
            background: rgba(100, 255, 218, 0.05);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .stat:hover {
            transform: translateY(-5px);
            background: rgba(100, 255, 218, 0.1);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #64ffda;
        }

        .stat-label {
            color: #8892b0;
            font-size: 0.9rem;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 100px 0 40px;
            }

            .hero-name {
                font-size: 3rem;
            }

            .hero-role {
                font-size: 2rem;
            }

            .hero-cta {
                flex-direction: column;
            }

            .hero-stats {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .stat {
                text-align: center;
            }
        }

        /* Services Section */
        .services {
            padding: 100px 0;
        }

        .section-title {
            color: #ccd6f6;
            font-size: 2rem;
            margin-bottom: 3rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
        }

        .service-card {
            background: #112240;
            padding: 2rem;
            border-radius: 4px;
            transition: all 0.3s;
            min-height: 250px;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card h3 {
            color: #64ffda;
            margin-bottom: 1rem;
        }

        /* Projects Section */
        .projects {
            padding: 120px 0;
            position: relative;
        }

        .title-decoration {
            color: #64ffda;
            margin: 0 15px;
            font-size: 1.5rem;
        }

        .projects-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            padding: 2rem 0;
        }

        .project-card {
            height: 450px;
            perspective: 1500px;
        }

        .project-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .project-card:hover .project-inner {
            transform: rotateY(180deg);
        }

        .project-front,
        .project-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 15px;
            overflow: hidden;
            background: rgba(17, 34, 64, 0.8);
            border: 1px solid rgba(100, 255, 218, 0.2);
            backdrop-filter: blur(10px);
        }

        .project-front {
            display: flex;
            flex-direction: column;
        }

        .project-back {
            transform: rotateY(180deg);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(145deg, rgba(17, 34, 64, 0.9), rgba(10, 25, 47, 0.95));
        }

        .project-image {
            height: 200px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .project-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #64ffda;
            color: #0a192f;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .project-content {
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .project-title {
            color: #64ffda;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .project-tech-stack {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-top: auto;
        }

        .project-tech-stack span {
            background: rgba(100, 255, 218, 0.1);
            color: #64ffda;
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.8rem;
        }

        .project-back p {
            color: #8892b0;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #64ffda;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            border: 1px solid #64ffda;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .project-link:hover {
            background: rgba(100, 255, 218, 0.1);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .projects-wrapper {
                grid-template-columns: 1fr;
            }
            
            .project-card {
                height: 400px;
            }
            
            .project-image {
                height: 180px;
            }
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background: transparent;
            border: 1px solid #64ffda;
            color: #64ffda;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .btn:hover {
            background: rgba(100, 255, 218, 0.1);
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 3rem;
            }
            .hero-content h2 {
                font-size: 2rem;
            }
            .nav-links {
                display: none;
            }
        }

        /* Update the vanta background container */
        #vanta-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: -1;  /* Move it behind all content */
            opacity: 0.9; /* Optional: make it slightly transparent */
        }

        /* Ensure content stays above background */
        body {
            position: relative;
            z-index: 1;
            background: transparent !important; /* Remove any background color */
        }

        /* Make sections semi-transparent */
        section {
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
            // ... keep other section styles ...
        }

        /* Add to existing styles */
        .loading-bar-container {
            width: 200px;
            height: 3px;
            background: rgba(100, 255, 218, 0.2);
            margin-top: 20px;
            border-radius: 3px;
            overflow: hidden;
        }

        .loading-bar {
            width: 0%;
            height: 100%;
            background: #64ffda;
            animation: loading 2s linear forwards;
        }

        @keyframes loading {
            0% { width: 0%; }
            100% { width: 100%; }
        }

        .contact {
            text-align: left;
            padding: 80px 0;
        }

        .contact-content {
            display: flex;
            flex-direction: column;
            gap: 3rem;
        }

        .contact-text {
            width: 100%;
            margin: 0 auto;
            background: rgba(17, 34, 64, 0.6);
            padding: 3rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(100, 255, 218, 0.1);
        }

        .contact-headline {
            font-size: 1.8rem;
            color: #ccd6f6;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .contact-description {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #8892b0;
        }

        .contact-links {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 2rem;
        }

        .btn {
            min-width: 180px;
            justify-content: center;
        }

        .primary-btn {
            background: #64ffda;
            color: #0a192f;
            border: none;
        }

        .primary-btn:hover {
            background: #4cd5b5;
            transform: translateY(-2px);
        }

        .secondary-btn {
            border: 1px solid #64ffda;
            color: #64ffda;
        }

        .secondary-btn:hover {
            background: rgba(100, 255, 218, 0.1);
            transform: translateY(-2px);
        }

        .btn svg {
            width: 18px;
            height: 18px;
        }

        @media (max-width: 768px) {
            .contact-content {
                padding: 2rem;
            }
            
            .contact-links {
                flex-direction: column;
                gap: 1rem;
            }
            
            .btn {
                width: 100%;
                min-width: unset;
            }
        }

        .calendly-container {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid rgba(100, 255, 218, 0.1);
            backdrop-filter: blur(10px);
        }

        @media (max-width: 768px) {
            .nav-content {
                flex-direction: row;
                justify-content: space-between;
            }
            
            .nav-links-container {
                display: none;
            }
            
            .nav-links.active {
                display: flex;
            }
        }

        /* Work Process Section */
        .work-process {
            padding: 120px 0;
            position: relative;
        }

        .process-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 4rem;
            margin-top: 3rem;
        }

        .process-item {
            background: rgba(17, 34, 64, 0.6);
            padding: 3rem;
            border-radius: 15px;
            position: relative;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(100, 255, 218, 0.1);
            transition: transform 0.3s ease;
        }

        .process-item:hover {
            transform: translateY(-5px);
        }

        .process-number {
            color: #64ffda;
            font-family: 'Fira Code', monospace;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .process-item h3 {
            color: #ccd6f6;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .process-item p {
            color: #8892b0;
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .process-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .process-tags span {
            background: rgba(100, 255, 218, 0.1);
            color: #64ffda;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            transition: all 0.3s ease;
        }

        .process-tags span:hover {
            background: rgba(100, 255, 218, 0.2);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .process-item {
                padding: 2rem;
            }
            
            .process-tags {
                justify-content: center;
            }
        }

        /* Testimonials Section */
        .testimonials {
            padding: 80px 0;
            position: relative;
        }

        .testimonials-wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
            perspective: 1000px;
        }

        .testimonial-card {
            background: rgba(17, 34, 64, 0.8);
            padding: 1.75rem;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(100, 255, 218, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .testimonial-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                45deg,
                rgba(100, 255, 218, 0.1),
                rgba(100, 255, 218, 0.05),
                rgba(17, 34, 64, 0)
            );
            transform: translateY(100%);
            transition: transform 0.4s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            border-color: rgba(100, 255, 218, 0.3);
        }

        .testimonial-card:hover::before {
            transform: translateY(0);
        }

        .testimonial-rating {
            display: flex;
            gap: 0.25rem;
            margin-bottom: 1rem;
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .star {
            color: #64ffda;
            font-size: 1rem;
            animation: starPulse 1.5s infinite;
        }

        .testimonial-card:hover .star {
            animation: starJump 0.5s ease forwards;
        }

        .star:nth-child(2) { animation-delay: 0.1s; }
        .star:nth-child(3) { animation-delay: 0.2s; }
        .star:nth-child(4) { animation-delay: 0.3s; }
        .star:nth-child(5) { animation-delay: 0.4s; }

        .testimonial-quote {
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            z-index: 1;
        }

        .author-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid rgba(100, 255, 218, 0.3);
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover .author-avatar {
            transform: scale(1.1);
        }

        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover .author-avatar img {
            transform: scale(1.1);
        }

        .author-info {
            transition: transform 0.3s ease;
        }

        .author-name {
            color: #64ffda;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.25rem;
        }

        .author-role {
            color: #8892b0;
            font-size: 0.8rem;
            opacity: 0.8;
        }

        @keyframes starPulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        @keyframes starJump {
            0% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
            100% { transform: translateY(0); }
        }

        @media (max-width: 992px) {
            .testimonials-wrapper {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .testimonials-wrapper {
                grid-template-columns: 1fr;
            }
        }

        /* Update the project card styles */
        .project-front {
            display: flex;
            flex-direction: column;
        }

        .project-content {
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .project-links {
            display: flex;
            gap: 1rem;
            margin-top: auto;
            padding-top: 1rem;
        }

        .project-link-btn {
            color: #64ffda;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .project-link-btn:hover {
            transform: translateY(-2px);
            color: #4cd5b5;
        }

        .project-link-btn svg {
            width: 18px;
            height: 18px;
        }
    </style>
</head>
<body>
    <div id="vanta-background"></div>

    <!-- Splash Screen -->
    <div class="splash">
        <div class="splash-content">
            <div class="splash-logo">NM</div>
            <div class="loading-bar-container">
                <div class="loading-bar"></div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="nav-content">
                <div class="brand-container">
                    <div class="logo">
                        <span class="logo-text">NM</span>
                        <div class="logo-dot"></div>
                    </div>
                </div>
                <div class="nav-links-container">
                    <div class="nav-links">
                        <a href="#home" class="nav-link">
                            <span class="nav-number">01.</span>
                            Home
                        </a>
                        <a href="#projects" class="nav-link">
                            <span class="nav-number">02.</span>
                            Projects
                        </a>
                        <a href="#contact" class="nav-link">
                            <span class="nav-number">03.</span>
                            Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home" aria-label="Introduction">
        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-content" data-aos="fade-up">
                    <div class="hero-intro">
                        <span class="hero-greeting">Hi there, I'm</span>
                    </div>
                    <h1 class="hero-title">
                        <span class="hero-name">Napoleon Mithras</span>
                        <span class="hero-role">Full-Stack & Mobile Developer</span>
                    </h1>
                    <p class="hero-description">
                        With over 5 years of experience, I specialize in crafting exceptional digital experiences across web and mobile platforms. 
                        <span class="highlight">Expert in creating modern, responsive websites</span> 
                        using React, Node.js, and Laravel, alongside native Android applications that deliver seamless user experiences. Based in Uganda, serving clients worldwide.
                    </p>
                    <div class="hero-cta">
                        <!-- Calendly link widget begin -->
                        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
                        <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/mithras_napoleon?hide_gdpr_banner=1'});return false;" class="btn btn-primary">
                            <span>Schedule a Call</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat">
                            <span class="stat-number">5+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Client Satisfaction</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects" aria-label="Portfolio Projects">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                <span class="title-decoration">⟡</span>
                Featured Projects
                <span class="title-decoration">⟡</span>
            </h2>
            <div class="projects-wrapper">
                <article class="project-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-inner">
                        <div class="project-front">
                            <div class="project-image">
                                <img 
                                    loading="lazy"
                                    src="./images/edairy.png" 
                                    onerror="this.src='https://placehold.co/600x400/1d44a4/white?text=Dairy+Farms'"
                                    alt="Engineered Dairy Farms"
                                >
                                <div class="project-badge">Featured</div>
                            </div>
                            <div class="project-content">
                                <h3 class="project-title">Engineered Dairy Farms - Agricultural Management System</h3>
                                <div class="project-tech-stack">
                                    <span>React</span>
                                    <span>Node.js</span>
                                    <span>MongoDB</span>
                                </div>
                                <div class="project-links">
                                    <a href="http://edairyfarms.com/" target="_blank" class="project-link-btn">
                                        <span>Visit Site</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                            <polyline points="15 3 21 3 21 9"></polyline>
                                            <line x1="10" y1="14" x2="21" y2="3"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-back">
                            <p>A comprehensive web platform revolutionizing sustainable dairy farming in East Africa. Features include real-time product management, interactive training programs, and advanced farm management systems.</p>
                            <div class="project-links">
                                <a href="http://edairyfarms.com/" target="_blank" class="project-link-btn">
                                    <span>Visit Site</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="project-inner">
                        <div class="project-front">
                            <div class="project-image">
                                <img 
                                    loading="lazy"
                                    src="./images/sct.png"
                                    onerror="this.src='https://placehold.co/600x400/2d9b28/white?text=SCT+Tool'"
                                    alt="Seasonal Characteristics Tool"
                                >
                                <div class="project-badge">Latest</div>
                            </div>
                            <div class="project-content">
                                <h3 class="project-title">Seasonal Characteristics Tool</h3>
                                <div class="project-tech-stack">
                                    <span>Vue.js</span>
                                    <span>Python</span>
                                    <span>PostgreSQL</span>
                                </div>
                                <div class="project-links">
                                    <a href="https://app.climateresearch.go.ug/" target="_blank" class="project-link-btn">
                                        <span>Visit Site</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                            <polyline points="15 3 21 3 21 9"></polyline>
                                            <line x1="10" y1="14" x2="21" y2="3"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-back">
                            <p>Advanced agricultural data platform providing climate forecasts and precision farming insights for Uganda's agricultural sector.</p>
                            <div class="project-links">
                                <a href="https://app.climateresearch.go.ug/" target="_blank" class="project-link-btn">
                                    <span>Visit Site</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="project-inner">
                        <div class="project-front">
                            <div class="project-image">
                                <img 
                                    loading="lazy"
                                    src="./images/slm.png"
                                    onerror="this.src='https://placehold.co/600x400/1d44a4/white?text=SLM+Portal'"
                                    alt="SLM Uganda Portal"
                                >
                            </div>
                            <div class="project-content">
                                <h3 class="project-title">SLM Uganda Portal</h3>
                                <div class="project-tech-stack">
                                    <span>Laravel</span>
                                    <span>MySQL</span>
                                    <span>AWS</span>
                                </div>
                                <div class="project-links">
                                    <a href="https://slm.go.ug/" target="_blank" class="project-link-btn">
                                        <span>Visit Site</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                            <polyline points="15 3 21 3 21 9"></polyline>
                                            <line x1="10" y1="14" x2="21" y2="3"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-back">
                            <p>Sustainable Land Management platform integrating soil mapping, climate change data, and agricultural resources.</p>
                            <div class="project-links">
                                <a href="https://slm.go.ug/" target="_blank" class="project-link-btn">
                                    <span>Visit Site</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="project-inner">
                        <div class="project-front">
                            <div class="project-image">
                                <img 
                                    loading="lazy"
                                    src="./images/relax.png"
                                    onerror="this.src='https://placehold.co/600x400/2d9b28/white?text=Relax+Logistics'"
                                    alt="Relax Logistics & Tours"
                                >
                            </div>
                            <div class="project-content">
                                <h3 class="project-title">Relax Logistics & Tours</h3>
                                <div class="project-tech-stack">
                                    <span>Next.js</span>
                                    <span>Prisma</span>
                                    <span>Stripe</span>
                                </div>
                                <div class="project-links">
                                    <a href="https://relaxlogisticstoursandtravel.com/" target="_blank" class="project-link-btn">
                                        <span>Visit Site</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                            <polyline points="15 3 21 3 21 9"></polyline>
                                            <line x1="10" y1="14" x2="21" y2="3"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-back">
                            <p>Modern travel and logistics platform with booking system and tour management features.</p>
                            <div class="project-links">
                                <a href="https://relaxlogisticstoursandtravel.com/" target="_blank" class="project-link-btn">
                                    <span>Visit Site</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section -->
    <section class="work-process">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                <span class="title-decoration">⟡</span>
                My Work Process
                <span class="title-decoration">⟡</span>
            </h2>
            <div class="process-grid">
                <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-number">01</div>
                    <h3>Conceptualization and Strategy</h3>
                    <p>Clear goals are defined, the target audience is identified, and the core mission of the project is established. This phase lays the foundation for directing creative development and ensuring that the end result meets the client's specific requirements.</p>
                    <div class="process-tags">
                        <span>Audience</span>
                        <span>Objectives</span>
                        <span>Strategy</span>
                        <span>Errors</span>
                    </div>
                </div>

                <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-number">02</div>
                    <h3>Analysis and Creative Design</h3>
                    <p>Research is conducted on the latest market trends, and competition is analyzed to inspire creativity. The design phase is driven by innovation and the search for original solutions that stand out and communicate effectively.</p>
                    <div class="process-tags">
                        <span>Approach</span>
                        <span>Innovation</span>
                        <span>Styles</span>
                        <span>Competition</span>
                    </div>
                </div>

                <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-number">03</div>
                    <h3>Development and Prototyping</h3>
                    <p>Ideas are translated into sketches and functional prototypes, refining the user experience. At this stage, interaction and visual design come together to form an intuitive interface that responds to the needs of end users.</p>
                    <div class="process-tags">
                        <span>Functionality</span>
                        <span>Aesthetics</span>
                        <span>Refinement</span>
                        <span>Consistency</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                <span class="title-decoration">⟡</span>
                Client Testimonials
                <span class="title-decoration">⟡</span>
            </h2>
            <div class="testimonials-wrapper">
                <div class="testimonial-card" data-aos="fade-up">
                    <div class="testimonial-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonial-quote">Napoleon delivered exceptional results for our e-commerce platform, increasing our conversion rate by 40%.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img 
                                loading="lazy"
                                src="https://randomuser.me/api/portraits/women/1.jpg"
                                alt="John Smith"
                                width="45"
                                height="45"
                            >
                        </div>
                        <div class="author-info">
                            <div class="author-name">John Smith</div>
                            <div class="author-role">CEO, TechStart Inc.</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card" data-aos="fade-up">
                    <div class="testimonial-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonial-quote">Working with Napoleon was a game-changer. His expertise helped us launch our MVP ahead of schedule.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img 
                                loading="lazy"
                                src="https://randomuser.me/api/portraits/women/1.jpg"
                                alt="Sarah Johnson"
                                width="45"
                                height="45"
                            >
                        </div>
                        <div class="author-info">
                            <div class="author-name">Sarah Johnson</div>
                            <div class="author-role">Founder, InnovateLab</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card" data-aos="fade-up">
                    <div class="testimonial-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonial-quote">Napoleon's mobile development expertise helped us create a seamless cross-platform experience our users love.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img 
                                loading="lazy"
                                src="https://randomuser.me/api/portraits/men/2.jpg"
                                alt="David Chen"
                                width="45"
                                height="45"
                            >
                        </div>
                        <div class="author-info">
                            <div class="author-name">David Chen</div>
                            <div class="author-role">PM, MobileFirst</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content" data-aos="fade-up">
                <div class="contact-text">
                    <p class="contact-headline">Let's Create Something Together</p>
                    <p class="contact-description">I'm currently looking for new opportunities. Whether you have a question or just want to say hi, I'll try my best to get back to you!</p>
                    <div class="contact-links">
                        <a href="https://linkedin.com/in/yourprofile" target="_blank" class="btn secondary-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            LinkedIn
                        </a>
                        <a href="https://github.com/yourusername" target="_blank" class="btn secondary-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                            GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.cells.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        // Initialize Vanta
        // VANTA.GLOBE({
        //     el: "#vanta-background",
        //     mouseControls: true,
        //     touchControls: true,
        //     gyroControls: false,
        //     minHeight: window.innerHeight,
        //     minWidth: window.innerWidth,
        //     scale: 1.00,
        //     scaleMobile: 1.00,
        //     color: 0x3f51ff,
        //     backgroundColor: 0x0a192f,
        //     size: 1.50,
        //     spacing: 20.00,
        //     points: 12.00
        // });

        VANTA.CELLS({
            el: "#vanta-background",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color1: 0x1d44a4,
            color2: 0x2d9b28,
            size: 0.80,
            speed: 1.50
        });

        // Ensure background resizes properly
        // window.addEventListener('resize', function() {
        //     if (window.VANTA) window.VANTA.resize();
        // });

        // Initialize AOS
        AOS.init({
            duration: 300,
            once: true
        });

        // Splash Screen Animation
        document.addEventListener('DOMContentLoaded', function() {
            const splash = document.querySelector('.splash');
            const startTime = Date.now();
            
            window.addEventListener('load', function() {
                const loadTime = Date.now() - startTime;
                const minDisplayTime = 2000; // Changed from 1000 to 2000 milliseconds (2 seconds)
                
                if (loadTime < minDisplayTime) {
                    setTimeout(() => {
                        splash.classList.add('fade');
                    }, minDisplayTime - loadTime);
                } else {
                    splash.classList.add('fade');
                }
            });
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');
            
            if (menuToggle) {
                menuToggle.addEventListener('click', () => {
                    menuToggle.classList.toggle('active');
                    navLinks.classList.toggle('active');
                });
            }

            // Close menu when clicking a link
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    menuToggle.classList.remove('active');
                    navLinks.classList.remove('active');
                });
            });
        });

        document.querySelectorAll('.project-inner').forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
            });
        });

        // Lazy loading with Intersection Observer
        // document.addEventListener("DOMContentLoaded", function() {
        //     const lazyImages = document.querySelectorAll("img[loading='lazy']");
            
        //     if ("IntersectionObserver" in window) {
        //         const imageObserver = new IntersectionObserver((entries, observer) => {
        //             entries.forEach(entry => {
        //                 if (entry.isIntersecting) {
        //                     const img = entry.target;
        //                     img.src = img.dataset.src;
        //                     img.srcset = img.dataset.srcset;
        //                     img.classList.remove("lazy");
        //                     observer.unobserve(img);
        //                 }
        //             });
        //         });

        //         lazyImages.forEach(img => imageObserver.observe(img));
        //     }
        // });

        // Fallback for browsers that don't support Intersection Observer
        if (!("IntersectionObserver" in window)) {
            const loadImages = () => {
                const lazyImages = document.querySelectorAll("img[loading='lazy']");
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                    img.srcset = img.dataset.srcset;
                    img.classList.remove("lazy");
                });
            };

            // Load all images after page load
            window.addEventListener("load", loadImages);
            // Also load images on scroll (with debounce)
            let timeout;
            window.addEventListener("scroll", () => {
                if (timeout) {
                    window.cancelAnimationFrame(timeout);
                }
                timeout = window.requestAnimationFrame(loadImages);
            });
        }
    </script>

    <!-- Add structured data for better SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Napoleon Mithras",
      "jobTitle": "Full-Stack & Mobile Developer",
      "url": "https://napoleonmithras.gihub.com",
      "sameAs": [
        "https://linkedin.com/in/nmithras",
        "https://github.com/napoleonmithras"
      ],
      "worksFor": {
        "@type": "Organization",
        "name": "Freelance"
      },
      "knowsAbout": [
        "Full-Stack Development",
        "Mobile App Development",
        "React",
        "Node.js",
        "Laravel",
        "PHP",
        "PostgreSQL",
        "Python"
      ]
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Napoleon Mithras - Full-Stack & Mobile Developer",
      "url": "https://napoleonmithras.github.com",
      "description": "Professional portfolio of Napoleon Mithras, a Full-Stack & Mobile Developer specializing in creating exceptional digital experiences.",
      "potentialAction": {
        "@type": "ContactAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://calendly.com/mithras_napoleon"
        },
        "name": "Schedule a Call"
      }
    }
    </script>
</body>
</html> 