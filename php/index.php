<?php
$pageTitle = "Built on Trust. Driven by Experience.";
$metaDescription = "BNS Development leads projects with experienced leadership from first plan to final handover. Commercial, multifamily, and luxury residential development across Florida and Texas.";
$activePage = 'home';

require_once __DIR__ . '/includes/header.php';
?>

<!-- =========================================================================
     1. HERO SECTION: Full-Bleed Architectural Video Banner
     ========================================================================= -->
<section class="relative z-20 w-full min-h-[600px] sm:min-h-[700px] lg:min-h-[780px] flex items-center bg-[#111215] text-white pt-28 sm:pt-36 lg:pt-40 pb-16 sm:pb-24 overflow-hidden">
    <!-- Background Cinematic Video -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none select-none">
        <video
            autoplay
            loop
            muted
            playsinline
            poster="<?= asset('images/about-hero.jpg') ?>"
            class="w-full h-full object-cover object-center scale-105"
        >
            <source src="<?= asset('videos/bns-services-hero.mp4') ?>" type="video/mp4">
        </video>
        <!-- Dual Gradients for Pristine Text Legibility -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/45 to-black/20"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#111215] via-transparent to-black/30"></div>
        <div class="absolute inset-0 opacity-[0.035]" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="max-w-3xl space-y-6">
            <!-- Brand Category Pill -->
            <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-[#1A1C20]/80 backdrop-blur-md border border-white/10 text-xs font-mono uppercase tracking-wider text-white/80 font-medium">
                <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                <span>BNS Development</span>
            </div>

            <!-- Display Headline -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-display font-semibold text-white tracking-tight leading-[1.12]">
                Built on Trust.<br>
                <span class="text-white/90">Driven by Experience.</span>
            </h1>

            <!-- Hero Subtext -->
            <p class="text-base sm:text-lg text-white/80 font-sans leading-relaxed max-w-xl">
                We lead projects from first plan to final handover, with practical expertise, clear communication and full accountability.
            </p>

            <!-- Action Buttons -->
            <div class="pt-2 flex flex-wrap items-center gap-4">
                <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-[#ED1C24] text-white text-sm sm:text-base font-semibold hover:bg-[#C41E1E] transition-all shadow-xl shadow-[#ED1C24]/20 hover:scale-[1.02]">
                    <span>Let's Develop What's Next</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
                <a href="<?= url('services.php') ?>" class="inline-flex items-center gap-2 px-7 py-4 rounded-full bg-white/10 hover:bg-white/15 border border-white/20 text-white text-sm sm:text-base font-medium backdrop-blur-md transition-colors">
                    <span>Explore Services</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     2. STRATEGIC LEADERSHIP / A BETTER WAY TO BUILD
     ========================================================================= -->
<section class="py-20 sm:py-28 bg-[#FAFAF8] text-black/90">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <!-- Left Column: Copy & Narrative -->
            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Executive Leadership</span>
                </div>

                <h2 class="text-3xl sm:text-4xl md:text-[42px] font-display font-semibold text-black/95 tracking-tight leading-tight">
                    A Better Way to<br>Build and Develop.
                </h2>

                <p class="text-base text-neutral-600 font-sans leading-relaxed">
                    Under the leadership of veteran builder <strong>Bradford Smith</strong> (FL License CGC 1505391), BNS Development brings institutional construction discipline, open-book transparency, and relentless field accountability to every square foot.
                </p>

                <!-- Metrics Strip -->
                <div class="grid grid-cols-3 gap-4 pt-4 border-t border-black/10">
                    <div>
                        <div class="text-2xl sm:text-3xl font-display font-bold text-black/90">35+</div>
                        <div class="text-xs font-mono uppercase tracking-wider text-neutral-500 mt-1">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-display font-bold text-black/90">$800M+</div>
                        <div class="text-xs font-mono uppercase tracking-wider text-neutral-500 mt-1">Project Volume</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-display font-bold text-[#ED1C24]">100%</div>
                        <div class="text-xs font-mono uppercase tracking-wider text-neutral-500 mt-1">Delivery Focus</div>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="<?= url('about.php') ?>" class="inline-flex items-center gap-2 text-sm font-semibold text-black hover:text-[#ED1C24] transition-colors group">
                        <span>Learn About Our Leadership Team</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- Right Column: Visual Showcase -->
            <div class="lg:col-span-6">
                <div class="relative rounded-3xl overflow-hidden border border-black/10 shadow-2xl bg-neutral-900 group">
                    <img
                        src="<?= asset('images/approach/groundup-cap-01-superstructure.jpg') ?>"
                        alt="BNS Strategic Commercial Development Superstructure"
                        class="w-full h-[400px] sm:h-[480px] object-cover transition-transform duration-700 group-hover:scale-105"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 text-white space-y-1.5">
                        <span class="text-xs font-mono uppercase tracking-widest text-[#ED1C24] font-semibold">Field Leadership</span>
                        <h3 class="text-lg font-semibold font-display">Single-Source Accountability from Groundbreak to Turnover</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     3. WHAT WE DO: 5 Core Building Disciplines
     ========================================================================= -->
<section class="py-20 sm:py-28 bg-[#F2F2EE] text-black/90 border-t border-black/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="space-y-3 max-w-xl">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Core Services</span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-black/95">
                    What We Do.
                </h2>
                <p class="text-sm sm:text-base text-neutral-600 font-sans leading-relaxed">
                    Integrated delivery disciplines covering every stage of the real estate development lifecycle.
                </p>
            </div>
            <a href="<?= url('services.php') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white border border-black/10 hover:border-black/30 text-xs font-mono uppercase tracking-wider font-semibold text-black transition-colors shadow-xs">
                <span>View All Services</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
            </a>
        </div>

        <!-- 5 Service Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <?php foreach ($servicesData as $key => $service): ?>
                <div class="rounded-2xl bg-white border border-black/[0.08] overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col group card-hover-tilt">
                    <div class="relative h-48 overflow-hidden bg-neutral-900">
                        <img
                            src="<?= asset($service['heroImage']) ?>"
                            alt="<?= htmlspecialchars($service['title']) ?>"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-2.5 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-[10px] font-mono text-white font-semibold">
                            <?= $service['number'] ?>
                        </span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-xl font-display font-semibold text-black/90 group-hover:text-[#ED1C24] transition-colors">
                                <?= htmlspecialchars($service['title']) ?>
                            </h3>
                            <p class="text-xs font-mono text-neutral-500 uppercase tracking-wider">
                                <?= htmlspecialchars($service['subtitle']) ?>
                            </p>
                            <p class="text-sm text-neutral-600 font-sans leading-relaxed pt-1">
                                <?= htmlspecialchars($service['shortDesc']) ?>
                            </p>
                        </div>
                        <div class="pt-3 border-t border-black/5">
                            <a href="<?= url(ltrim($service['link'], '/')) ?>" class="inline-flex items-center gap-2 text-xs font-mono uppercase tracking-wider font-semibold text-[#ED1C24] hover:text-[#C41E1E] transition-colors">
                                <span>Explore Discipline</span>
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     4. BEYOND EXPERIENCE: 12 Commercial & Residential Project Types
     ========================================================================= -->
<section class="py-20 sm:py-28 bg-[#111215] text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="max-w-2xl space-y-3">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs font-mono uppercase tracking-widest text-neutral-300 font-medium">
                <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                <span>Portfolio Breadth</span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-white">
                Beyond Experience.
            </h2>
            <p class="text-sm sm:text-base text-neutral-400 font-sans leading-relaxed">
                From high-rise corporate towers and luxury private aviation terminals to mixed-use lifestyle districts and bespoke coastal residences.
            </p>
        </div>

        <!-- 12 Project Types Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 sm:gap-5">
            <?php foreach ($projectTypesData as $pt): ?>
                <div class="group relative rounded-2xl overflow-hidden bg-neutral-900 border border-white/10 shadow-lg aspect-[3/4]">
                    <img
                        src="<?= asset($pt['image']) ?>"
                        alt="<?= htmlspecialchars($pt['name']) ?>"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
                    <div class="absolute top-3 left-3 px-2 py-0.5 rounded bg-black/60 backdrop-blur-md text-[10px] font-mono text-[#ED1C24] font-semibold border border-white/10">
                        <?= $pt['num'] ?>
                    </div>
                    <div class="absolute bottom-3 left-3 right-3">
                        <p class="text-xs sm:text-sm font-semibold font-display text-white leading-tight">
                            <?= htmlspecialchars($pt['name']) ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     5. LANDMARK DEVELOPMENTS: Featured Projects
     ========================================================================= -->
<section class="py-20 sm:py-28 bg-[#FAFAF8] text-black/90">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="space-y-3 max-w-xl">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Delivered Landmarks</span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-black/95">
                    Landmark Developments.
                </h2>
                <p class="text-sm sm:text-base text-neutral-600 font-sans leading-relaxed">
                    Proven track record delivering complex commercial and luxury high-rise developments.
                </p>
            </div>
            <a href="<?= url('portfolio.php') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white border border-black/10 hover:border-black/30 text-xs font-mono uppercase tracking-wider font-semibold text-black transition-colors shadow-xs">
                <span>View All Projects</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10">
            <?php foreach ($projectsData as $proj): ?>
                <div class="rounded-3xl bg-white border border-black/[0.08] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col">
                    <div class="relative h-[300px] sm:h-[360px] overflow-hidden bg-neutral-900">
                        <img
                            src="<?= asset($proj['image']) ?>"
                            alt="<?= htmlspecialchars($proj['title']) ?>"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-xs font-mono text-white">
                            <?= htmlspecialchars($proj['category']) ?>
                        </div>
                    </div>
                    <div class="p-8 space-y-4 flex-1 flex flex-col justify-between">
                        <div class="space-y-2">
                            <h3 class="text-2xl font-display font-semibold text-black/90 group-hover:text-[#ED1C24] transition-colors">
                                <?= htmlspecialchars($proj['title']) ?>
                            </h3>
                            <p class="text-xs font-mono text-neutral-500 uppercase tracking-wider">
                                <?= htmlspecialchars($proj['location']) ?> &bull; <?= htmlspecialchars($proj['sqft']) ?>
                            </p>
                            <p class="text-sm text-neutral-600 font-sans leading-relaxed pt-2">
                                <?= htmlspecialchars($proj['overview']) ?>
                            </p>
                        </div>
                        <div class="pt-4 border-t border-black/5 flex items-center justify-between">
                            <span class="text-xs font-mono uppercase tracking-wider text-neutral-400"><?= htmlspecialchars($proj['status']) ?></span>
                            <a href="<?= url('portfolio.php') ?>" class="inline-flex items-center gap-1.5 text-xs font-mono uppercase tracking-wider font-semibold text-[#ED1C24] hover:text-[#C41E1E] transition-colors">
                                <span>Case Study</span>
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     6. OUR APPROACH: 5-Step Process
     ========================================================================= -->
<section class="py-20 sm:py-28 bg-[#F2F2EE] text-black/90 border-t border-black/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="max-w-2xl space-y-3">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                <span>Delivery Methodology</span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-black/95">
                Our Approach.
            </h2>
            <p class="text-sm sm:text-base text-neutral-600 font-sans leading-relaxed">
                A disciplined, five-stage framework that guarantees budget certainty, schedule adherence, and field execution mastery.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
            <div class="p-6 rounded-2xl bg-white border border-black/[0.08] shadow-xs space-y-3">
                <span class="text-xs font-mono text-[#ED1C24] font-bold">STAGE 01</span>
                <h4 class="text-lg font-display font-semibold text-black/90">Vision & Feasibility</h4>
                <p class="text-xs text-neutral-600 leading-relaxed">Zoning verification, conceptual parametric budgeting, and geotechnical risk mitigation.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-black/[0.08] shadow-xs space-y-3">
                <span class="text-xs font-mono text-[#ED1C24] font-bold">STAGE 02</span>
                <h4 class="text-lg font-display font-semibold text-black/90">Planning & Modeling</h4>
                <p class="text-xs text-neutral-600 leading-relaxed">Primavera P6 baseline schedules, value engineering, and long-lead trade buyouts.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-black/[0.08] shadow-xs space-y-3">
                <span class="text-xs font-mono text-[#ED1C24] font-bold">STAGE 03</span>
                <h4 class="text-lg font-display font-semibold text-black/90">BIM Coordination</h4>
                <p class="text-xs text-neutral-600 leading-relaxed">3D clash detection, architectural detailing, and structural MEP peer reviews.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-black/[0.08] shadow-xs space-y-3">
                <span class="text-xs font-mono text-[#ED1C24] font-bold">STAGE 04</span>
                <h4 class="text-lg font-display font-semibold text-black/90">Field Execution</h4>
                <p class="text-xs text-neutral-600 leading-relaxed">Rigorous on-site superintendence, QA/QC audits, safety enforcement, and daily logs.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border border-black/[0.08] shadow-xs space-y-3">
                <span class="text-xs font-mono text-[#ED1C24] font-bold">STAGE 05</span>
                <h4 class="text-lg font-display font-semibold text-black/90">Turnover & Warranty</h4>
                <p class="text-xs text-neutral-600 leading-relaxed">Accelerated CO signoffs, building commissioning, and white-glove warranty transition.</p>
            </div>
        </div>
    </div>
</section>

<!-- 7. Call To Action Banner -->
<?php require __DIR__ . '/includes/cta-banner.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
