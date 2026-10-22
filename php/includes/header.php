<?php
require_once __DIR__ . '/config.php';

// Page-specific variable defaults
$pageTitle = isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME . ' | Commercial, Multifamily & Residential Development';
$metaDescription = isset($metaDescription) ? $metaDescription : 'BNS Development — Premium commercial, multifamily, residential, and ground-up development across Florida and Texas. 35+ years of leadership, $800M+ volume.';
$activePage = isset($activePage) ? $activePage : 'home';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth bg-[#FAFAF8] text-[#171717] selection:bg-[#ED1C24] selection:text-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?= asset('logos/BNS LOGO-01.svg') ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Lenis Smooth Scrolling -->
    <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>

    <!-- Core Stylesheet (Compiled Tailwind + BNS Architecture) -->
    <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/custom.css') ?>">
</head>
<body class="bg-[#FAFAF8] text-[#171717] min-h-screen font-sans antialiased overflow-x-hidden selection:bg-[#ED1C24] selection:text-white">

<!-- Fixed Architectural Top Navigation Bar -->
<header id="site-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-3 sm:py-4 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto flex items-center justify-between rounded-full bg-[#111215]/85 backdrop-blur-md border border-white/10 px-5 sm:px-7 py-3 shadow-lg">
        <!-- Logo -->
        <a href="<?= url('index.php') ?>" class="flex items-center gap-3 group" aria-label="BNS Development Home">
            <img src="<?= asset('logos/bns-logo-white.svg') ?>" alt="BNS Development Logo" class="h-7 sm:h-8 w-auto transition-transform duration-300 group-hover:scale-105">
        </a>

        <!-- Desktop Navigation Items -->
        <nav class="hidden lg:flex items-center gap-1 font-sans text-sm font-medium text-white/80">
            <a href="<?= url('index.php') ?>" class="px-3.5 py-1.5 rounded-full transition-colors <?= $activePage === 'home' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                Home
            </a>
            <a href="<?= url('about.php') ?>" class="px-3.5 py-1.5 rounded-full transition-colors <?= $activePage === 'about' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                About Us
            </a>

            <!-- Services Dropdown Menu -->
            <div class="relative group" id="services-nav-group">
                <a href="<?= url('services.php') ?>" class="px-3.5 py-1.5 rounded-full transition-colors inline-flex items-center gap-1.5 <?= in_array($activePage, ['services', 'preconstruction', 'design-build', 'residential', 'tenant-improvements', 'ground-up']) ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                    <span>Services</span>
                    <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180"></i>
                </a>

                <!-- Hover Dropdown Container -->
                <div class="absolute left-0 top-full pt-2 w-72 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50">
                    <div class="rounded-2xl bg-[#18191D] border border-white/10 p-2 shadow-2xl backdrop-blur-xl">
                        <a href="<?= url('services.php') ?>" class="block px-3.5 py-2.5 rounded-xl hover:bg-white/5 transition-colors <?= $activePage === 'services' ? 'bg-white/10' : '' ?>">
                            <div class="text-white text-xs font-semibold flex items-center justify-between">
                                <span>All Services Overview</span>
                                <i data-lucide="arrow-right" class="w-3 h-3 text-[#ED1C24]"></i>
                            </div>
                            <p class="text-[11px] text-white/50 mt-0.5">Explore our complete building disciplines</p>
                        </a>
                        <div class="my-1 border-t border-white/10"></div>
                        <a href="<?= url('preconstruction.php') ?>" class="block px-3.5 py-2 rounded-xl hover:bg-white/5 transition-colors <?= $activePage === 'preconstruction' ? 'bg-white/10 text-white' : 'text-white/80 hover:text-white' ?>">
                            <div class="text-xs font-medium">Pre-Development Services</div>
                            <p class="text-[10px] text-white/40">Feasibility, modeling & scheduling</p>
                        </a>
                        <a href="<?= url('design-build.php') ?>" class="block px-3.5 py-2 rounded-xl hover:bg-white/5 transition-colors <?= $activePage === 'design-build' ? 'bg-white/10 text-white' : 'text-white/80 hover:text-white' ?>">
                            <div class="text-xs font-medium">Design-Build Delivery</div>
                            <p class="text-[10px] text-white/40">Unified single-source coordination</p>
                        </a>
                        <a href="<?= url('residential.php') ?>" class="block px-3.5 py-2 rounded-xl hover:bg-white/5 transition-colors <?= $activePage === 'residential' ? 'bg-white/10 text-white' : 'text-white/80 hover:text-white' ?>">
                            <div class="text-xs font-medium">Residential Development</div>
                            <p class="text-[10px] text-white/40">Luxury estates & condominiums</p>
                        </a>
                        <a href="<?= url('tenant-improvements.php') ?>" class="block px-3.5 py-2 rounded-xl hover:bg-white/5 transition-colors <?= $activePage === 'tenant-improvements' ? 'bg-white/10 text-white' : 'text-white/80 hover:text-white' ?>">
                            <div class="text-xs font-medium">Tenant Improvements</div>
                            <p class="text-[10px] text-white/40">Commercial fit-outs & renovations</p>
                        </a>
                        <a href="<?= url('ground-up.php') ?>" class="block px-3.5 py-2 rounded-xl hover:bg-white/5 transition-colors <?= $activePage === 'ground-up' ? 'bg-white/10 text-white' : 'text-white/80 hover:text-white' ?>">
                            <div class="text-xs font-medium">Ground-Up Construction</div>
                            <p class="text-[10px] text-white/40">Superstructures, concrete & steel</p>
                        </a>
                    </div>
                </div>
            </div>

            <a href="<?= url('portfolio.php') ?>" class="px-3.5 py-1.5 rounded-full transition-colors <?= $activePage === 'portfolio' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                Work
            </a>
            <a href="<?= url('careers.php') ?>" class="px-3.5 py-1.5 rounded-full transition-colors <?= $activePage === 'careers' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                Careers
            </a>
            <a href="<?= url('news.php') ?>" class="px-3.5 py-1.5 rounded-full transition-colors <?= $activePage === 'news' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                News
            </a>
            <a href="<?= url('subcontractors.php') ?>" class="px-3.5 py-1.5 rounded-full transition-colors <?= $activePage === 'subcontractors' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                Subcontractors
            </a>
            <a href="<?= url('contact.php') ?>" class="px-3.5 py-1.5 rounded-full transition-colors <?= $activePage === 'contact' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                Contact
            </a>
        </nav>

        <!-- Right CTA Button & Mobile Hamburger Toggle -->
        <div class="flex items-center gap-3">
            <a href="<?= url('contact.php') ?>" class="hidden sm:inline-flex items-center gap-2 px-4 sm:px-5 py-2 rounded-full bg-[#ED1C24] text-white text-xs sm:text-sm font-semibold tracking-wide hover:bg-[#C41E1E] transition-colors shadow-md">
                <span>Start a Project</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>

            <!-- Mobile Hamburger Button -->
            <button type="button" id="mobile-menu-btn" class="lg:hidden p-2 rounded-full text-white/80 hover:text-white hover:bg-white/10 focus:outline-none" aria-label="Toggle Navigation Menu">
                <i data-lucide="menu" id="hamburger-icon" class="w-6 h-6"></i>
                <i data-lucide="x" id="close-icon" class="w-6 h-6 hidden"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden lg:hidden max-w-7xl mx-auto mt-2 rounded-3xl bg-[#111215]/95 backdrop-blur-xl border border-white/10 p-6 shadow-2xl transition-all duration-300">
        <nav class="flex flex-col space-y-3 font-sans text-base text-white/80">
            <a href="<?= url('index.php') ?>" class="px-3 py-2 rounded-xl transition-colors <?= $activePage === 'home' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                Home
            </a>
            <a href="<?= url('about.php') ?>" class="px-3 py-2 rounded-xl transition-colors <?= $activePage === 'about' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                About Us
            </a>

            <!-- Mobile Services Accordion -->
            <div>
                <button type="button" id="mobile-services-toggle" class="w-full flex items-center justify-between px-3 py-2 rounded-xl text-left hover:text-white hover:bg-white/5 transition-colors">
                    <span>Services</span>
                    <i data-lucide="chevron-down" id="mobile-services-arrow" class="w-4 h-4 transition-transform duration-200"></i>
                </button>
                <div id="mobile-services-submenu" class="pl-4 mt-2 space-y-1.5 border-l border-white/10 ml-3">
                    <a href="<?= url('services.php') ?>" class="block py-1.5 text-xs text-white/70 hover:text-white">All Services Overview</a>
                    <a href="<?= url('preconstruction.php') ?>" class="block py-1.5 text-xs text-white/70 hover:text-white">Pre-Development Services</a>
                    <a href="<?= url('design-build.php') ?>" class="block py-1.5 text-xs text-white/70 hover:text-white">Design-Build Delivery</a>
                    <a href="<?= url('residential.php') ?>" class="block py-1.5 text-xs text-white/70 hover:text-white">Residential Development</a>
                    <a href="<?= url('tenant-improvements.php') ?>" class="block py-1.5 text-xs text-white/70 hover:text-white">Tenant Improvements</a>
                    <a href="<?= url('ground-up.php') ?>" class="block py-1.5 text-xs text-white/70 hover:text-white">Ground-Up Construction</a>
                </div>
            </div>

            <a href="<?= url('portfolio.php') ?>" class="px-3 py-2 rounded-xl transition-colors <?= $activePage === 'portfolio' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                Work & Projects
            </a>
            <a href="<?= url('careers.php') ?>" class="px-3 py-2 rounded-xl transition-colors <?= $activePage === 'careers' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                Careers
            </a>
            <a href="<?= url('news.php') ?>" class="px-3 py-2 rounded-xl transition-colors <?= $activePage === 'news' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                News & Press
            </a>
            <a href="<?= url('subcontractors.php') ?>" class="px-3 py-2 rounded-xl transition-colors <?= $activePage === 'subcontractors' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                Subcontractors
            </a>
            <a href="<?= url('contact.php') ?>" class="px-3 py-2 rounded-xl transition-colors <?= $activePage === 'contact' ? 'text-white bg-white/10 font-semibold' : 'hover:text-white hover:bg-white/5' ?>">
                Contact Us
            </a>

            <div class="pt-4 border-t border-white/10">
                <a href="<?= url('contact.php') ?>" class="w-full flex items-center justify-center gap-2 py-3 rounded-full bg-[#ED1C24] text-white font-semibold text-sm">
                    <span>Start a Project</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </nav>
    </div>
</header>
