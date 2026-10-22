<?php
$pageTitle = 'Trade Partners & Subcontractor Onboarding';
$metaDescription = 'Join the BNS Development trade partner network. Register and complete contractor prequalification through Construkt.ai.';
$activePage = 'subcontractors';
require_once __DIR__ . '/includes/header.php';
?>

<div class="relative text-black/90 bg-transparent min-h-screen font-sans selection:bg-[#ED1C24] selection:text-white pb-12 sm:pb-16">
    <!-- Subtle Architectural Dot Grid Texture -->
    <div class="absolute inset-0 opacity-[0.025] pointer-events-none select-none" style="background-image: radial-gradient(#000000 1px, transparent 1px); background-size: 32px 32px;" aria-hidden="true"></div>

    <!-- ========================================================
        1. HERO — Built on Partnership. Trade Partner Onboarding.
        ======================================================== -->
    <section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-32 pb-12 sm:pb-14 bg-[#181818] mb-8 sm:mb-12">
        <img src="<?= asset('images/ground-up.jpg') ?>" alt="BNS Development Subcontractor & Trade Partner Network" class="absolute inset-0 w-full h-full object-cover select-none brightness-95" loading="eager">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/35 to-black/10 pointer-events-none"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="max-w-4xl space-y-5 text-white">
                <div class="flex items-center gap-2.5">
                    <span class="w-6 h-[2px] bg-[#ED1C24]"></span>
                    <span class="text-xs sm:text-sm font-sans tracking-widest text-[#d4d4d4] font-semibold">Trade Partner Network</span>
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-[38px] lg:text-[38px] font-display font-semibold tracking-tight text-white leading-[44px]">
                    Trade Partner Onboarding.<br>
                    <span class="text-white">Powered by Construkt.ai.</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- ========================================================
        2. CONSTRUKT.AI REGISTRATION PORTAL (Centered Action Card)
        ======================================================== -->
    <section id="onboarding-hub" class="py-10 sm:py-14 lg:py-16 relative">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-3xl bg-white border border-black/[0.08] p-8 sm:p-12 shadow-[0_12px_40px_-15px_rgba(0,0,0,0.06)] text-center space-y-7">
                <!-- Decorative architectural top accent -->
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-[#AA1E23] via-[#C52126] to-[#ED1C24]"></div>

                <!-- Top Monogram / Badge -->
                <div class="w-16 h-16 mx-auto rounded-2xl border border-[#ED1C24]/20 bg-[#ED1C24]/[0.06] shadow-xs flex items-center justify-center text-[#ED1C24]">
                    <i data-lucide="hard-hat" class="w-8 h-8"></i>
                </div>

                <div class="space-y-2">
                    <span class="text-xs font-mono uppercase tracking-widest text-[#ED1C24] font-semibold block">
                        Trade Partner Portal
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-display font-semibold text-black/95">
                        Join the BNS Trade Network
                    </h2>
                    <p class="text-sm sm:text-base text-black/65 font-sans leading-relaxed max-w-md mx-auto">
                        Click below to start or complete your contractor onboarding on Construkt.ai.
                    </p>
                </div>

                <!-- Prominent CTA Button -->
                <div class="pt-2 max-w-md mx-auto">
                    <a href="https://construkt.ai/" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-full bg-[#181818] hover:bg-[#ED1C24] text-white text-sm font-semibold transition-all duration-300 shadow-md group">
                        <span>Register as a Contractor</span>
                        <i data-lucide="arrow-up-right" class="w-4 h-4 text-[#ED1C24] group-hover:text-white transition-colors"></i>
                    </a>
                </div>

                <div class="pt-4 border-t border-black/[0.06] flex items-center justify-center gap-2 text-xs text-black/55 font-sans">
                    <span>Powered by Construkt.ai</span>
                    <span>•</span>
                    <span class="text-emerald-700 font-medium">Bidding Active</span>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once __DIR__ . '/includes/cta-banner.php';
require_once __DIR__ . '/includes/footer.php';
?>
