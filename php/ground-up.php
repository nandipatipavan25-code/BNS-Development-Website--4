<?php
$pageTitle = "Ground-Up Construction | Commercial Superstructures";
$metaDescription = "BNS Development delivers heavy structural ground-up construction, cast-in-place concrete superstructures, steel framing, and building shells across Florida and Texas.";
$activePage = 'ground-up';

require_once __DIR__ . '/includes/header.php';
?>

<!-- =========================================================================
     1. HERO HEADER: Ground-Up Construction
     ========================================================================= -->
<section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-36 pb-12 sm:pb-16 bg-[#181818] text-white">
    <img
        src="<?= asset('images/ground-up-hero-magnific.jpg') ?>"
        alt="Commercial Ground-Up Superstructure Construction"
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
                <span class="text-white font-medium">Ground-Up Construction</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-white leading-tight">
                Heavy Structural Expertise from<br>
                <span class="text-white/95">Earthwork to Skyline.</span>
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
                        src="<?= asset('images/ground-up.jpg') ?>"
                        alt="High-Rise Concrete Superstructure"
                        class="w-full h-[400px] sm:h-[480px] object-cover transition-transform duration-700 group-hover:scale-105"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Cast-in-Place & Structural Steel</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-display font-semibold text-black/95 tracking-tight leading-tight">
                    Engineering Mastery at Scale
                </h2>

                <p class="text-base text-neutral-600 font-sans leading-relaxed">
                    Ground-up development is where BNS's 35+ years of engineering experience shines. From soil dewatering and auger cast pilings to multi-story post-tensioned concrete decks and unitized curtain wall installation, our superintendents own every cubic yard of concrete and pound of structural steel.
                </p>

                <div class="space-y-3">
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Civil Site Work & Deep Geotechnical Pilings</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Mass grading, stormwater vaults, auger-cast pilings, and foundation engineering.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Cast-in-Place & Post-Tensioned Concrete</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Formwork engineering, self-consolidating concrete, and elevated post-tensioned deck slabs.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">High-Performance Architectural Envelopes</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Unitized structural glass curtain walls, rainscreen composite cladding, and insulated assemblies.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6-Stage Chronological Delivery Pipeline -->
        <div class="space-y-6 pt-8 border-t border-black/10">
            <h3 class="text-2xl font-display font-semibold text-black/90">Ground-Up Delivery Pipeline</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                <div class="p-4 rounded-xl bg-white border border-black/10 space-y-1.5 shadow-2xs">
                    <span class="text-[10px] font-mono text-[#ED1C24] font-bold block">STAGE 01</span>
                    <h5 class="text-xs font-semibold text-black">Site Prep</h5>
                    <p class="text-[11px] text-neutral-500">Grading, clearing & erosion control.</p>
                </div>
                <div class="p-4 rounded-xl bg-white border border-black/10 space-y-1.5 shadow-2xs">
                    <span class="text-[10px] font-mono text-[#ED1C24] font-bold block">STAGE 02</span>
                    <h5 class="text-xs font-semibold text-black">Excavation</h5>
                    <p class="text-[11px] text-neutral-500">Dewatering, shoring & earthwork.</p>
                </div>
                <div class="p-4 rounded-xl bg-white border border-black/10 space-y-1.5 shadow-2xs">
                    <span class="text-[10px] font-mono text-[#ED1C24] font-bold block">STAGE 03</span>
                    <h5 class="text-xs font-semibold text-black">Foundation</h5>
                    <p class="text-[11px] text-neutral-500">Auger pilings, grade beams & slab.</p>
                </div>
                <div class="p-4 rounded-xl bg-white border border-black/10 space-y-1.5 shadow-2xs">
                    <span class="text-[10px] font-mono text-[#ED1C24] font-bold block">STAGE 04</span>
                    <h5 class="text-xs font-semibold text-black">Superstructure</h5>
                    <p class="text-[11px] text-neutral-500">Post-tensioned concrete & steel core.</p>
                </div>
                <div class="p-4 rounded-xl bg-white border border-black/10 space-y-1.5 shadow-2xs">
                    <span class="text-[10px] font-mono text-[#ED1C24] font-bold block">STAGE 05</span>
                    <h5 class="text-xs font-semibold text-black">Enclosure</h5>
                    <p class="text-[11px] text-neutral-500">Curtain wall, glazing & roof dry-in.</p>
                </div>
                <div class="p-4 rounded-xl bg-white border border-black/10 space-y-1.5 shadow-2xs">
                    <span class="text-[10px] font-mono text-[#ED1C24] font-bold block">STAGE 06</span>
                    <h5 class="text-xs font-semibold text-black">Delivery</h5>
                    <p class="text-[11px] text-neutral-500">MEP commissioning & final CO.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action banner -->
<?php require __DIR__ . '/includes/cta-banner.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
