<?php
$pageTitle = "Pre-Development Services | Precision Planning";
$metaDescription = "BNS Development's preconstruction services transform conceptual architectural designs into constructable blueprints, realistic budgets, and Primavera P6 schedules.";
$activePage = 'preconstruction';

require_once __DIR__ . '/includes/header.php';
?>

<!-- =========================================================================
     1. HERO HEADER: Pre-Development
     ========================================================================= -->
<section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-36 pb-12 sm:pb-16 bg-[#181818] text-white">
    <img
        src="<?= asset('images/preconstruction-hero-magnific.jpg') ?>"
        alt="BNS Preconstruction and Feasibility Engineering"
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
                <span class="text-white font-medium">Pre-Development Services</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-white leading-tight">
                Precision Planning Before<br>
                <span class="text-white/95">Ground Is Broken.</span>
            </h1>
        </div>
    </div>
</section>

<!-- =========================================================================
     2. OVERVIEW & DISCIPLINE SHOWCASE
     ========================================================================= -->
<section class="py-20 sm:py-28 bg-[#FAFAF8] text-black/90">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <div class="lg:col-span-6">
                <div class="relative rounded-3xl overflow-hidden border border-black/10 shadow-xl bg-neutral-900 group">
                    <img
                        src="<?= asset('images/preconstruction.jpg') ?>"
                        alt="Pre-Development Estimating and Modeling"
                        class="w-full h-[400px] sm:h-[480px] object-cover transition-transform duration-700 group-hover:scale-105"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Early-Phase Governance</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-display font-semibold text-black/95 tracking-tight leading-tight">
                    Mitigating Capital Risk Upfront
                </h2>

                <p class="text-base text-neutral-600 font-sans leading-relaxed">
                    At BNS Development, Pre-Development is the single most critical phase defining project success. Our senior leadership directly engages during conceptual design to analyze constructability, challenge assumptions, and secure long-lead procurement paths before capital is committed.
                </p>

                <div class="space-y-3">
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Feasibility & Parametric Cost Modeling</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Benchmarked estimates based on 35+ years of historic development and delivery metrics across Florida and Texas.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Constructability & Clash Detection Reviews</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Rigorous drawing peer-reviews, trade coordination, and clash detection prior to municipal permit submittals.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Critical Path Scheduling (Primavera P6)</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Developing realistic, resource-loaded baseline timelines using Primavera P6 to safeguard major milestones.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5 Deliverables Strip -->
        <div class="p-8 rounded-3xl bg-[#111215] text-white space-y-6">
            <h3 class="text-2xl font-display font-semibold">Pre-Development Deliverables</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                <div class="p-4 rounded-xl bg-white/5 border border-white/10 space-y-1 text-xs">
                    <span class="text-[#ED1C24] font-mono font-bold block">01</span>
                    <strong class="text-white block font-medium">GMP Development</strong>
                    <span class="text-white/60">Guaranteed maximum price package</span>
                </div>
                <div class="p-4 rounded-xl bg-white/5 border border-white/10 space-y-1 text-xs">
                    <span class="text-[#ED1C24] font-mono font-bold block">02</span>
                    <strong class="text-white block font-medium">Trade Scope Packages</strong>
                    <span class="text-white/60">Comprehensive subcontractor bids</span>
                </div>
                <div class="p-4 rounded-xl bg-white/5 border border-white/10 space-y-1 text-xs">
                    <span class="text-[#ED1C24] font-mono font-bold block">03</span>
                    <strong class="text-white block font-medium">Long-Lead Procurement</strong>
                    <span class="text-white/60">Switchgear, chillers & glazing schedules</span>
                </div>
                <div class="p-4 rounded-xl bg-white/5 border border-white/10 space-y-1 text-xs">
                    <span class="text-[#ED1C24] font-mono font-bold block">04</span>
                    <strong class="text-white block font-medium">Site Logistics Plans</strong>
                    <span class="text-white/60">Crane radius & phasing diagrams</span>
                </div>
                <div class="p-4 rounded-xl bg-white/5 border border-white/10 space-y-1 text-xs">
                    <span class="text-[#ED1C24] font-mono font-bold block">05</span>
                    <strong class="text-white block font-medium">Permit Roadmaps</strong>
                    <span class="text-white/60">Municipal expedited approvals</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action banner -->
<?php require __DIR__ . '/includes/cta-banner.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
