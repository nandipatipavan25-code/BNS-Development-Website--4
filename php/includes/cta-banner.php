<?php
// BNS Development — Reusable Architectural Call To Action Banner
?>
<section class="relative w-full py-20 sm:py-28 overflow-hidden bg-[#111215] text-white">
    <!-- Background Architectural Imagery & Gradients -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none select-none">
        <img
            src="<?= asset('images/about-hero.jpg') ?>"
            alt="Commercial Development Superstructure"
            class="w-full h-full object-cover object-center brightness-[0.28] contrast-[1.15]"
            loading="lazy"
        />
        <div class="absolute inset-0 bg-gradient-to-r from-[#111215]/95 via-[#111215]/80 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#111215] via-transparent to-[#111215]"></div>
    </div>

    <!-- Subtle Red Ambient Glow -->
    <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[500px] h-[300px] bg-[#ED1C24]/[0.04] blur-[140px] rounded-full pointer-events-none" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-6">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs font-mono uppercase tracking-widest text-neutral-300 font-medium">
                <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                <span>Initiate Your Vision</span>
            </div>

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-white leading-tight">
                Let's Develop What's Next.
            </h2>

            <p class="text-base sm:text-lg text-neutral-300 font-sans leading-relaxed max-w-2xl">
                Partner with BNS Development for disciplined leadership, transparent communication, and certainty of execution on your next commercial, multifamily, or landmark project.
            </p>

            <div class="pt-4 flex flex-wrap items-center gap-4">
                <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-[#ED1C24] text-white text-sm sm:text-base font-semibold hover:bg-[#C41E1E] transition-all duration-300 shadow-xl shadow-[#ED1C24]/20 hover:shadow-[#ED1C24]/30 hover:scale-[1.02]">
                    <span>Start a Project</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
                <a href="<?= url('services.php') ?>" class="inline-flex items-center gap-2 px-7 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/15 text-white text-sm sm:text-base font-medium transition-colors">
                    <span>Explore Our Services</span>
                </a>
            </div>
        </div>
    </div>
</section>
