<?php
$pageTitle = "Design-Build Services | One Coordinated Approach";
$metaDescription = "BNS Development's single-source Design-Build delivery accelerates project completion by up to 30% through unified architecture, engineering, and construction governance.";
$activePage = 'design-build';

require_once __DIR__ . '/includes/header.php';
?>

<!-- =========================================================================
     1. HERO HEADER: Full-Bleed Architectural Banner
     ========================================================================= -->
<section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-36 pb-12 sm:pb-16 bg-[#181818] text-white">
    <img
        src="<?= asset('images/design-build-hero-magnific.jpg') ?>"
        alt="Commercial Design-Build Integrated Steel & Glass Architecture"
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
                <span class="text-white font-medium">Design-Build Delivery</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-white leading-tight">
                One Coordinated Approach From<br>
                <span class="text-white/95">Design Through Delivery.</span>
            </h1>
        </div>
    </div>
</section>

<!-- =========================================================================
     2. PHILOSOPHY & STRATEGIC ADVANTAGE (2 Columns)
     ========================================================================= -->
<section class="py-20 sm:py-28 bg-[#FAFAF8] text-black/90">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <div class="lg:col-span-6">
                <div class="relative rounded-3xl overflow-hidden border border-black/10 shadow-xl bg-neutral-900 group">
                    <img
                        src="<?= asset('images/services/service-03-design-build.png') ?>"
                        alt="Commercial Design-Build Integrated Construction & Modern Steel Architecture"
                        class="w-full h-[400px] sm:h-[480px] object-cover transition-transform duration-700 group-hover:scale-105"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Strategic Leadership</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-display font-semibold text-black/95 tracking-tight leading-tight">
                    Design-Build Leadership
                </h2>

                <p class="text-base text-neutral-600 font-sans leading-relaxed">
                    Under BNS’s single-point responsibility, clients enjoy transparent communication, consolidated liability, and rapid decision-making. We eliminate the adversarial friction between architect and builder by uniting both under one unified team from initial zoning sketches through ribbon cutting.
                </p>

                <div class="space-y-3">
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Single-Source Contractual Accountability</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">One contract, one budget, one unified team managing risk from first sketch to final key turnover.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Fast-Track Delivery (30% Faster)</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Overlapping design and construction phases allow foundation work to start while interior details are finalized.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-black/5 shadow-2xs space-y-1">
                        <strong class="text-sm font-semibold text-black block">Budget-Driven Design & GMP Certainty</strong>
                        <p class="text-xs text-neutral-600 leading-relaxed">Architects design directly against guaranteed maximum price parameters, preventing costly redesigns.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             3. 6 CRITICAL DESIGN-BUILD ADVANTAGES
             ========================================================================= -->
        <div class="space-y-8 pt-8 border-t border-black/10">
            <div class="max-w-2xl space-y-2">
                <span class="text-xs font-mono text-[#ED1C24] uppercase tracking-wider font-semibold">Core Benefits</span>
                <h3 class="text-3xl font-display font-semibold text-black/95">The Design-Build Advantage</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="rounded-2xl bg-white border border-black/10 overflow-hidden shadow-xs hover:shadow-lg transition-all card-hover-tilt">
                    <img src="<?= asset('images/process/step-01-vision.jpg') ?>" alt="Commercial Planning" class="h-44 w-full object-cover">
                    <div class="p-6 space-y-2">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">01</span>
                        <h4 class="text-lg font-display font-semibold">Streamlined Communication</h4>
                        <p class="text-xs text-neutral-600 leading-relaxed">Direct collaboration with field builders ensures designs are practically executable and within budget.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white border border-black/10 overflow-hidden shadow-xs hover:shadow-lg transition-all card-hover-tilt">
                    <img src="<?= asset('images/process/step-02-planning.jpg') ?>" alt="BIM Planning" class="h-44 w-full object-cover">
                    <div class="p-6 space-y-2">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">02</span>
                        <h4 class="text-lg font-display font-semibold">Integrated Design & Construction</h4>
                        <p class="text-xs text-neutral-600 leading-relaxed">Real-time trade feedback eliminates value-engineering redesign cycles later in the project timeline.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white border border-black/10 overflow-hidden shadow-xs hover:shadow-lg transition-all card-hover-tilt">
                    <img src="<?= asset('images/process/step-03-coordination.jpg') ?>" alt="Feasibility Coordination" class="h-44 w-full object-cover">
                    <div class="p-6 space-y-2">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">03</span>
                        <h4 class="text-lg font-display font-semibold">Early Cost & Feasibility Verification</h4>
                        <p class="text-xs text-neutral-600 leading-relaxed">35+ years of historic estimating data provides rock-solid cost benchmarks before capital is deployed.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white border border-black/10 overflow-hidden shadow-xs hover:shadow-lg transition-all card-hover-tilt">
                    <img src="<?= asset('images/ground-up.jpg') ?>" alt="Faster Construction" class="h-44 w-full object-cover">
                    <div class="p-6 space-y-2">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">04</span>
                        <h4 class="text-lg font-display font-semibold">Faster Delivery & Schedule Control</h4>
                        <p class="text-xs text-neutral-600 leading-relaxed">Early grading and foundation permits allow physical work to begin months before architectural completion.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white border border-black/10 overflow-hidden shadow-xs hover:shadow-lg transition-all card-hover-tilt">
                    <img src="<?= asset('images/process/step-04-details.jpg') ?>" alt="Details Specification" class="h-44 w-full object-cover">
                    <div class="p-6 space-y-2">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">05</span>
                        <h4 class="text-lg font-display font-semibold">Single-Point Accountability</h4>
                        <p class="text-xs text-neutral-600 leading-relaxed">Zero finger-pointing between separate consultants. BNS assumes complete responsibility for the entire asset.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white border border-black/10 overflow-hidden shadow-xs hover:shadow-lg transition-all card-hover-tilt">
                    <img src="<?= asset('images/process/step-05-delivery.jpg') ?>" alt="Turnkey Handover" class="h-44 w-full object-cover">
                    <div class="p-6 space-y-2">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">06</span>
                        <h4 class="text-lg font-display font-semibold">Budget & Execution Predictability</h4>
                        <p class="text-xs text-neutral-600 leading-relaxed">Open-book buyout savings return directly to the owner with strict GMP contractual protections.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             4. 5-STAGE TURNKEY DELIVERY METHODOLOGY
             ========================================================================= -->
        <div class="space-y-8 pt-8 border-t border-black/10">
            <div class="max-w-2xl space-y-2">
                <span class="text-xs font-mono text-[#ED1C24] uppercase tracking-wider font-semibold">Turnkey Process</span>
                <h3 class="text-3xl font-display font-semibold text-black/95">5-Stage Delivery Methodology</h3>
            </div>

            <div class="space-y-4">
                <div class="p-6 rounded-2xl bg-white border border-black/10 shadow-xs flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="space-y-1">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">PHASE 01</span>
                        <h4 class="text-lg font-display font-semibold">Understand & Align</h4>
                        <p class="text-xs text-neutral-600 max-w-2xl">Collaborative discovery aligning vision, zoning constraints, budget parameters, and key milestones.</p>
                    </div>
                    <span class="text-xs font-mono uppercase px-3 py-1 rounded-full bg-neutral-100 text-neutral-600">Conceptual Scope</span>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-black/10 shadow-xs flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="space-y-1">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">PHASE 02</span>
                        <h4 class="text-lg font-display font-semibold">Integrated Planning</h4>
                        <p class="text-xs text-neutral-600 max-w-2xl">Mapping structural, civil, mechanical, and architectural frameworks with continuous cost feedback.</p>
                    </div>
                    <span class="text-xs font-mono uppercase px-3 py-1 rounded-full bg-neutral-100 text-neutral-600">GMP Development</span>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-black/10 shadow-xs flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="space-y-1">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">PHASE 03</span>
                        <h4 class="text-lg font-display font-semibold">Stakeholder Coordination</h4>
                        <p class="text-xs text-neutral-600 max-w-2xl">Facilitating unified BIM modeling and permit expediting with city municipalities and utility providers.</p>
                    </div>
                    <span class="text-xs font-mono uppercase px-3 py-1 rounded-full bg-neutral-100 text-neutral-600">Permit Expediting</span>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-black/10 shadow-xs flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="space-y-1">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">PHASE 04</span>
                        <h4 class="text-lg font-display font-semibold">Active Field Construction</h4>
                        <p class="text-xs text-neutral-600 max-w-2xl">Rigorous field management, critical-path Primavera P6 scheduling, daily logs, and QA/QC inspection.</p>
                    </div>
                    <span class="text-xs font-mono uppercase px-3 py-1 rounded-full bg-neutral-100 text-neutral-600">Field Superintendence</span>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-black/10 shadow-xs flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="space-y-1">
                        <span class="text-xs font-mono text-[#ED1C24] font-bold">PHASE 05</span>
                        <h4 class="text-lg font-display font-semibold">Turnkey Handover & Commissioning</h4>
                        <p class="text-xs text-neutral-600 max-w-2xl">Seamless building commissioning, final municipal Certificate of Occupancy, and white-glove warranty.</p>
                    </div>
                    <span class="text-xs font-mono uppercase px-3 py-1 rounded-full bg-neutral-100 text-neutral-600">Occupancy & Closeout</span>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             5. FREQUENTLY ASKED QUESTIONS (Accordion)
             ========================================================================= -->
        <div class="space-y-8 pt-8 border-t border-black/10">
            <div class="max-w-2xl space-y-2">
                <span class="text-xs font-mono text-[#ED1C24] uppercase tracking-wider font-semibold">Client Clarifications</span>
                <h3 class="text-3xl font-display font-semibold text-black/95">Frequently Asked Questions</h3>
            </div>

            <div class="space-y-3">
                <div class="p-5 rounded-2xl bg-white border border-black/10 shadow-xs">
                    <button type="button" data-accordion-toggle="faq-1" class="w-full flex items-center justify-between text-left font-semibold text-sm sm:text-base text-black/90 focus:outline-none">
                        <span>How does Design-Build differ from traditional Design-Bid-Build?</span>
                        <i data-lucide="chevron-down" data-accordion-icon class="w-4 h-4 text-neutral-400 transition-transform"></i>
                    </button>
                    <div id="faq-1" class="hidden pt-3 text-xs sm:text-sm text-neutral-600 leading-relaxed border-t border-black/5 mt-3">
                        In traditional delivery, the owner holds separate contracts with the architect and the contractor, often leading to disputes when designs exceed budget. In Design-Build, BNS holds single-point responsibility for both design and construction under one contract, guaranteeing budget fidelity from day one.
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-black/10 shadow-xs">
                    <button type="button" data-accordion-toggle="faq-2" class="w-full flex items-center justify-between text-left font-semibold text-sm sm:text-base text-black/90 focus:outline-none">
                        <span>Can an owner bring their own preferred architect?</span>
                        <i data-lucide="chevron-down" data-accordion-icon class="w-4 h-4 text-neutral-400 transition-transform"></i>
                    </button>
                    <div id="faq-2" class="hidden pt-3 text-xs sm:text-sm text-neutral-600 leading-relaxed border-t border-black/5 mt-3">
                        Absolutely. BNS frequently forms integrated joint-venture partnerships with client-selected design studios, providing constructability oversight, value engineering, and trade pricing while honoring the architect's creative vision.
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-black/10 shadow-xs">
                    <button type="button" data-accordion-toggle="faq-3" class="w-full flex items-center justify-between text-left font-semibold text-sm sm:text-base text-black/90 focus:outline-none">
                        <span>When is the Guaranteed Maximum Price (GMP) locked in?</span>
                        <i data-lucide="chevron-down" data-accordion-icon class="w-4 h-4 text-neutral-400 transition-transform"></i>
                    </button>
                    <div id="faq-3" class="hidden pt-3 text-xs sm:text-sm text-neutral-600 leading-relaxed border-t border-black/5 mt-3">
                        The GMP is typically established at the conclusion of schematic or design-development documents (approximately 50-60% completion), allowing trade package buyouts to lock in material pricing before inflation occurs.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action banner -->
<?php require __DIR__ . '/includes/cta-banner.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
