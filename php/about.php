<?php
$pageTitle = "About Us | Built on Experience. Built on Relationships.";
$metaDescription = "Discover the leadership and values behind BNS Development. 35+ years of general contracting, construction management, and real estate development across Florida and Texas.";
$activePage = 'about';

require_once __DIR__ . '/includes/header.php';
?>

<!-- =========================================================================
     1. HERO BANNER
     ========================================================================= -->
<section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-36 pb-12 sm:pb-16 bg-[#181818] text-white">
    <img
        src="<?= asset('images/about-hero.jpg') ?>"
        alt="BNS Development Leadership"
        class="absolute inset-0 w-full h-full object-cover select-none brightness-95"
        loading="eager"
    />
    <div class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/40 to-black/15 pointer-events-none"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/35 to-transparent pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="max-w-4xl space-y-4">
            <!-- Breadcrumbs -->
            <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-xs sm:text-sm font-sans text-neutral-300">
                <a href="<?= url('index.php') ?>" class="hover:text-white transition-colors">Home</a>
                <span class="text-neutral-500 font-mono">/</span>
                <span class="text-white font-medium">About Us</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-white leading-tight">
                Built on Experience.<br>
                <span class="text-white/95">Built on Relationships.</span>
            </h1>
        </div>
    </div>
</section>

<!-- =========================================================================
     2. COMPANY NARRATIVE & STATS
     ========================================================================= -->
<section class="py-20 sm:py-28 bg-[#FAFAF8] text-black/90">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Company Background</span>
                </div>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-black/95">
                    Decades of Proven Building Mastery.
                </h2>

                <p class="text-base text-neutral-600 font-sans leading-relaxed">
                    BNS Development is an integrated real estate development and construction firm delivering landmark commercial, multifamily, and luxury residential projects across Florida and Texas.
                </p>

                <p class="text-base text-neutral-600 font-sans leading-relaxed">
                    Founded on the principles of direct principal involvement, constructability rigor, and fiscal discipline, we eliminate the traditional friction between design intent and field reality. Our leadership has personally steered over $800M in projects from raw land acquisition and municipal approvals through vertical construction and handover.
                </p>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 pt-4 border-t border-black/10">
                    <div>
                        <div class="text-3xl font-display font-bold text-black/90">$800M+</div>
                        <div class="text-xs font-mono text-neutral-500 uppercase tracking-wider mt-1">Delivered Volume</div>
                    </div>
                    <div>
                        <div class="text-3xl font-display font-bold text-black/90">35+ Years</div>
                        <div class="text-xs font-mono text-neutral-500 uppercase tracking-wider mt-1">Industry Mastery</div>
                    </div>
                    <div>
                        <div class="text-3xl font-display font-bold text-[#ED1C24]">CGC 1505391</div>
                        <div class="text-xs font-mono text-neutral-500 uppercase tracking-wider mt-1">Florida GC License</div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="relative rounded-3xl overflow-hidden border border-black/10 shadow-2xl bg-neutral-900 group">
                    <img
                        src="<?= asset('images/about-project-partner.jpg') ?>"
                        alt="BNS Project Team Planning"
                        class="w-full h-[420px] object-cover transition-transform duration-700 group-hover:scale-105"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 text-white space-y-1">
                        <span class="text-xs font-mono uppercase tracking-widest text-[#ED1C24] font-semibold">Integrity in Action</span>
                        <h4 class="text-lg font-semibold font-display">Transparent Owner Partnership</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             3. EXECUTIVE LEADERSHIP TEAM
             ========================================================================= -->
        <div class="space-y-10 pt-12 border-t border-black/10">
            <div class="max-w-2xl space-y-3">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Executive Leadership</span>
                </div>
                <h3 class="text-3xl sm:text-4xl font-display font-semibold tracking-tight text-black/95">
                    Meet Our Leadership.
                </h3>
                <p class="text-sm sm:text-base text-neutral-600 font-sans leading-relaxed">
                    Decades of on-site general contracting experience, development finance acumen, and client stewardship.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($teamData as $member): ?>
                    <div class="rounded-3xl bg-white border border-black/[0.08] overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col group card-hover-tilt">
                        <div class="relative h-72 overflow-hidden bg-neutral-900">
                            <img
                                src="<?= asset(ltrim($member['image'], '/')) ?>"
                                alt="<?= htmlspecialchars($member['name']) ?>"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h4 class="text-xl font-display font-semibold text-white leading-tight">
                                    <?= htmlspecialchars($member['name']) ?>
                                </h4>
                                <p class="text-xs font-mono text-[#ED1C24] uppercase tracking-wider font-semibold">
                                    <?= htmlspecialchars($member['role']) ?>
                                </p>
                            </div>
                        </div>

                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                            <div class="space-y-3">
                                <p class="text-xs font-mono text-neutral-500 uppercase tracking-wider">
                                    <?= htmlspecialchars($member['experience']) ?>
                                </p>
                                <p class="text-sm text-neutral-600 font-sans leading-relaxed">
                                    <?= htmlspecialchars($member['bio']) ?>
                                </p>
                            </div>

                            <div class="pt-3 border-t border-black/5 space-y-1.5 text-xs text-neutral-500 font-mono">
                                <div><a href="mailto:<?= htmlspecialchars($member['email']) ?>" class="hover:text-[#ED1C24] transition-colors"><?= htmlspecialchars($member['email']) ?></a></div>
                                <div><a href="tel:<?= preg_replace('/[^0-9]/', '', $member['phone']) ?>" class="hover:text-[#ED1C24] transition-colors"><?= htmlspecialchars($member['phone']) ?></a></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- =========================================================================
             4. FOUR RELATIONSHIP VALUES
             ========================================================================= -->
        <div class="space-y-8 pt-12 border-t border-black/10">
            <h3 class="text-2xl sm:text-3xl font-display font-semibold text-black/90">
                Core Principles Guiding Every Project
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 rounded-2xl bg-white border border-black/10 shadow-xs space-y-2">
                    <span class="text-xs font-mono text-[#ED1C24] font-bold">01</span>
                    <h4 class="text-lg font-display font-semibold">Communication</h4>
                    <p class="text-xs text-neutral-600 leading-relaxed">Transparent, proactive dialogue across every phase with open-book accounting.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-black/10 shadow-xs space-y-2">
                    <span class="text-xs font-mono text-[#ED1C24] font-bold">02</span>
                    <h4 class="text-lg font-display font-semibold">Responsiveness</h4>
                    <p class="text-xs text-neutral-600 leading-relaxed">Rapid resolution of RFIs, submittals, and field constructability inquiries.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-black/10 shadow-xs space-y-2">
                    <span class="text-xs font-mono text-[#ED1C24] font-bold">03</span>
                    <h4 class="text-lg font-display font-semibold">Accountability</h4>
                    <p class="text-xs text-neutral-600 leading-relaxed">Strict adherence to target GMP budgets, critical-path milestones, and craftsmanship.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-black/10 shadow-xs space-y-2">
                    <span class="text-xs font-mono text-[#ED1C24] font-bold">04</span>
                    <h4 class="text-lg font-display font-semibold">Mutual Respect</h4>
                    <p class="text-xs text-neutral-600 leading-relaxed">Honoring owners, architects, engineers, and trade partners with professional integrity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action banner -->
<?php require __DIR__ . '/includes/cta-banner.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
