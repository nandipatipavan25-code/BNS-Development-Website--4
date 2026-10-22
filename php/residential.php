<?php
$pageTitle = "Residential Development | Luxury Living & Multifamily";
$metaDescription = "BNS Development delivers bespoke luxury single-family estates and high-density multifamily developments across Florida and Texas with commercial precision.";
$activePage = 'residential';

require_once __DIR__ . '/includes/header.php';
?>

<!-- =========================================================================
     1. HERO HEADER: Residential Development
     ========================================================================= -->
<section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-36 pb-12 sm:pb-16 bg-[#181818] text-white">
    <img
        src="<?= asset('images/residential-hero-magnific.jpg') ?>"
        alt="BNS Luxury Residential Architecture"
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
                <span class="text-white font-medium">Residential Development</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-white leading-tight">
                Elevating Living Environments to<br>
                <span class="text-white/95">Generational Standards.</span>
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
                        src="<?= asset('images/residential.jpg') ?>"
                        alt="Luxury Residential Craftsmanship"
                        class="w-full h-[400px] sm:h-[480px] object-cover transition-transform duration-700 group-hover:scale-105"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Trophy Residences & Multifamily</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-display font-semibold text-black/95 tracking-tight leading-tight">
                    Commercial Precision for Residential Architecture
                </h2>

                <p class="text-base text-neutral-600 font-sans leading-relaxed">
                    From trophy coastal estates to high-density multifamily developments, BNS applies rigorous commercial management discipline to the nuanced world of residential architecture. We specialize in complex geotechnical sites, waterfront pilings, specialized glazing envelopes, and museum-grade interior finishes.
                </p>

                <div class="space-y-3">
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Custom Luxury Estates</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Single-family estates demanding bespoke millwork, specialized glazing, and high-performance building envelopes.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Multifamily & Condominiums</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Multi-unit developments combining repeatable high-efficiency floorplans with standout lifestyle amenities.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Coastal & Resilient Hurricane Hardening</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Deep pilings, reinforced concrete shear walls, and impact-resistant glazing designed for extreme weather.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action banner -->
<?php require __DIR__ . '/includes/cta-banner.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
