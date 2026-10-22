<?php
require_once __DIR__ . '/config.php';
?>
<!-- Architectural Footer -->
<footer class="relative bg-[#090A0C] text-white pt-20 sm:pt-28 pb-12 border-t border-white/[0.08] overflow-hidden z-20">
    <!-- Background Architectural Building Image with Atmosphere Gradients -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none select-none">
        <img
            src="<?= asset('images/about-hero.jpg') ?>"
            alt="BNS Architectural Building Landmark"
            class="w-full h-full object-cover object-center brightness-[0.24] contrast-[1.15] scale-105"
            loading="lazy"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-[#090A0C] via-[#090A0C]/85 to-[#090A0C]/90"></div>
        <div class="absolute inset-0 bg-[#090A0C]/40"></div>
    </div>

    <!-- Ambient Subtle Red Glow -->
    <div class="absolute top-0 right-1/4 w-[600px] h-[300px] bg-[#ED1C24]/[0.025] blur-[140px] rounded-full pointer-events-none" aria-hidden="true"></div>

    <!-- Blueprint Dot Texture -->
    <div class="absolute inset-0 opacity-[0.035] pointer-events-none" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 32px 32px;" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Top Header: Brand Identity + Fast Contact Bar -->
        <div class="pb-14 border-b border-white/[0.08] flex flex-col lg:flex-row lg:items-end justify-between gap-8">
            <div class="space-y-4 max-w-xl">
                <a href="<?= url('index.php') ?>" class="inline-block select-none">
                    <img src="<?= asset('logos/bns-logo-white.svg') ?>" alt="BNS Development" class="h-10 sm:h-12 w-auto object-contain brightness-105">
                </a>
                <p class="text-sm sm:text-base text-neutral-400 font-sans leading-relaxed">
                    <?= SITE_TAGLINE ?>
                </p>
            </div>

            <!-- Direct Contact Channels -->
            <div class="flex flex-wrap items-center gap-3 sm:gap-4">
                <a href="tel:7863683009" class="inline-flex items-center gap-2.5 px-4 py-2.5 rounded-full bg-white/[0.04] hover:bg-white/[0.08] border border-white/10 text-xs sm:text-sm font-sans text-neutral-200 transition-colors">
                    <i data-lucide="phone" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                    <span><?= CONTACT_PHONE ?></span>
                </a>
                <a href="mailto:<?= CONTACT_EMAIL ?>" class="inline-flex items-center gap-2.5 px-4 py-2.5 rounded-full bg-white/[0.04] hover:bg-white/[0.08] border border-white/10 text-xs sm:text-sm font-sans text-neutral-200 transition-colors">
                    <i data-lucide="mail" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                    <span><?= CONTACT_EMAIL ?></span>
                </a>
            </div>
        </div>

        <!-- 4-Column Directory Grid -->
        <div class="py-14 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 border-b border-white/[0.08]">
            <!-- Column 1: Core Navigation (3 cols) -->
            <div class="lg:col-span-3 space-y-4">
                <h4 class="text-xs font-mono uppercase tracking-widest text-neutral-400 font-semibold">Company Navigation</h4>
                <ul class="space-y-2.5 text-sm font-sans text-neutral-300">
                    <li><a href="<?= url('index.php') ?>" class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="<?= url('about.php') ?>" class="hover:text-white transition-colors">About Us</a></li>
                    <li><a href="<?= url('services.php') ?>" class="hover:text-white transition-colors">Services</a></li>
                    <li><a href="<?= url('portfolio.php') ?>" class="hover:text-white transition-colors">Work & Projects</a></li>
                    <li><a href="<?= url('careers.php') ?>" class="hover:text-white transition-colors">Careers</a></li>
                    <li><a href="<?= url('news.php') ?>" class="hover:text-white transition-colors">News & Insights</a></li>
                    <li><a href="<?= url('subcontractors.php') ?>" class="hover:text-white transition-colors">Subcontractors</a></li>
                    <li><a href="<?= url('contact.php') ?>" class="hover:text-white transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 2: Building Disciplines (3 cols) -->
            <div class="lg:col-span-4 space-y-4">
                <h4 class="text-xs font-mono uppercase tracking-widest text-neutral-400 font-semibold">Building Disciplines</h4>
                <ul class="space-y-2.5 text-sm font-sans text-neutral-300">
                    <li><a href="<?= url('preconstruction.php') ?>" class="hover:text-white transition-colors flex items-center gap-2"><span class="font-mono text-xs text-neutral-500">01</span><span>Pre-Development Services</span></a></li>
                    <li><a href="<?= url('design-build.php') ?>" class="hover:text-white transition-colors flex items-center gap-2"><span class="font-mono text-xs text-neutral-500">02</span><span>Design-Build Delivery</span></a></li>
                    <li><a href="<?= url('residential.php') ?>" class="hover:text-white transition-colors flex items-center gap-2"><span class="font-mono text-xs text-neutral-500">03</span><span>Residential Development</span></a></li>
                    <li><a href="<?= url('tenant-improvements.php') ?>" class="hover:text-white transition-colors flex items-center gap-2"><span class="font-mono text-xs text-neutral-500">04</span><span>Tenant Improvements</span></a></li>
                    <li><a href="<?= url('ground-up.php') ?>" class="hover:text-white transition-colors flex items-center gap-2"><span class="font-mono text-xs text-neutral-500">05</span><span>Ground-Up Construction</span></a></li>
                </ul>
            </div>

            <!-- Column 3: Corporate Studios (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                <h4 class="text-xs font-mono uppercase tracking-widest text-neutral-400 font-semibold">Corporate Studios</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm font-sans text-neutral-300">
                    <div class="space-y-1.5 p-4 rounded-xl bg-white/[0.02] border border-white/5">
                        <div class="flex items-center gap-2 text-white font-medium text-xs font-mono uppercase tracking-wider">
                            <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                            <span>South Florida Studio</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed">
                            <?= OFFICE_FLORIDA ?>
                        </p>
                        <p class="text-[11px] font-mono text-neutral-500 pt-1">FL License: CGC 1505391</p>
                    </div>

                    <div class="space-y-1.5 p-4 rounded-xl bg-white/[0.02] border border-white/5">
                        <div class="flex items-center gap-2 text-white font-medium text-xs font-mono uppercase tracking-wider">
                            <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                            <span>Texas Studio</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed">
                            <?= OFFICE_TEXAS ?>
                        </p>
                        <p class="text-[11px] font-mono text-neutral-500 pt-1">Commercial & Multifamily Operations</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright & Legal Sub-footer -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-sans text-neutral-500">
            <p>&copy; <?= date('Y') ?> BNS Development, LLC. All rights reserved. Florida CGC 1505391.</p>
            <div class="flex items-center gap-6">
                <a href="<?= url('privacy-policy.php') ?>" class="hover:text-neutral-300 transition-colors">Privacy Policy</a>
                <a href="<?= url('terms-conditions.php') ?>" class="hover:text-neutral-300 transition-colors">Terms of Service</a>
                <button type="button" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="hover:text-white flex items-center gap-1.5 transition-colors">
                    <span>Back to top</span>
                    <i data-lucide="arrow-up" class="w-3 h-3"></i>
                </button>
            </div>
        </div>
    </div>
</footer>

<!-- Core Vanilla JS Client Script -->
<script src="<?= asset('assets/js/main.js') ?>"></script>
</body>
</html>
