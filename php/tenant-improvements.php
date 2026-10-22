<?php
$pageTitle = "Tenant Improvements | Commercial Interior Build-Outs";
$metaDescription = "BNS Development delivers adaptive commercial tenant improvements, corporate headquarters build-outs, and flagship retail environments with speed and precision.";
$activePage = 'tenant-improvements';

require_once __DIR__ . '/includes/header.php';
?>

<!-- =========================================================================
     1. HERO HEADER: Tenant Improvements
     ========================================================================= -->
<section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-36 pb-12 sm:pb-16 bg-[#181818] text-white">
    <img
        src="<?= asset('images/tenant-improvements-hero-magnific.jpg') ?>"
        alt="Commercial Tenant Improvements and Office Build-Out"
        class="absolute inset-0 w-full h-full object-cover select-none brightness-95"
        loading="eager"
    />
    <div class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/40 to-black/15 pointer-events-none"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/35 to-transparent pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="max-w-4xl space-y-4">
            <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-xs sm:text-sm font-sans text-neutral-300">
                <a href="<?= url('index.php') ?>" class="hover:text-white transition-colors">Home</a>
                <span class="text-neutral-500 font-mono">/</span>
                <a href="<?= url('services.php') ?>" class="hover:text-white transition-colors">Services</a>
                <span class="text-neutral-500 font-mono">/</span>
                <span class="text-white font-medium">Tenant Improvements</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-white leading-tight">
                Adaptive Commercial Fit-Outs on<br>
                <span class="text-white/95">Demanding Timelines.</span>
            </h1>
        </div>
    </div>
</section>

<!-- =========================================================================
     2. OVERVIEW & CAPABILITIES
     ========================================================================= -->
<section class="py-20 sm:py-28 bg-[#FAFAF8] text-black/90">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <div class="lg:col-span-6">
                <div class="relative rounded-3xl overflow-hidden border border-black/10 shadow-xl bg-neutral-900 group">
                    <img
                        src="<?= asset('images/tenant-improvements.jpg') ?>"
                        alt="High-Performance Commercial Interior"
                        class="w-full h-[400px] sm:h-[480px] object-cover transition-transform duration-700 group-hover:scale-105"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Speed-to-Market Discipline</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-display font-semibold text-black/95 tracking-tight leading-tight">
                    High-Performance Workplaces & Retail Showrooms
                </h2>

                <p class="text-base text-neutral-600 font-sans leading-relaxed">
                    Speed-to-market is the defining metric of commercial interiors. BNS combines rapid procurement, night-shift logistics, and precise dust mitigation to deliver corporate headquarters, flagship retail, and medical suites within occupied high-rises and busy commercial centers.
                </p>

                <div class="space-y-3">
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Corporate Office Headquarters</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Acoustic glass demising walls, collaborative hubs, and integrated enterprise audiovisual tech.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Luxury Retail Showrooms</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Custom millwork display fixtures, specialty accent lighting, and polished terrazzo flooring.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Occupied-High-Rise Phased Logistics</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Noise mitigation, negative-air HEPA filtration, and freight elevator coordination during off-hours.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3 Interior Focus Showcase -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-8 border-t border-black/10">
            <div class="rounded-2xl bg-white border border-black/10 overflow-hidden shadow-xs group card-hover-tilt">
                <img src="<?= asset('images/projects/executive-office-workspace.png') ?>" alt="Executive Office" class="h-48 w-full object-cover">
                <div class="p-5 space-y-1.5">
                    <h4 class="font-display font-semibold text-lg text-black/90">Executive Workspace</h4>
                    <p class="text-xs text-neutral-600 leading-relaxed">Modern corporate offices engineered for focus, executive acoustic privacy, and collaboration.</p>
                </div>
            </div>

            <div class="rounded-2xl bg-white border border-black/10 overflow-hidden shadow-xs group card-hover-tilt">
                <img src="<?= asset('images/projects/modern-retail-showroom.png') ?>" alt="Retail Showroom" class="h-48 w-full object-cover">
                <div class="p-5 space-y-1.5">
                    <h4 class="font-display font-semibold text-lg text-black/90">Retail & Brand Environments</h4>
                    <p class="text-xs text-neutral-600 leading-relaxed">Customer-facing retail storefronts with seamless display glazing and precision millwork.</p>
                </div>
            </div>

            <div class="rounded-2xl bg-white border border-black/10 overflow-hidden shadow-xs group card-hover-tilt">
                <img src="<?= asset('images/approach/tenant-03-renovation.jpg') ?>" alt="Interior Architecture" class="h-48 w-full object-cover">
                <div class="p-5 space-y-1.5">
                    <h4 class="font-display font-semibold text-lg text-black/90">Complex MEP Modernization</h4>
                    <p class="text-xs text-neutral-600 leading-relaxed">Ductwork re-routing, dedicated server room cooling, and high-efficiency lighting arrays.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action banner -->
<?php require __DIR__ . '/includes/cta-banner.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
