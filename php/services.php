<?php
$pageTitle = "Services | Integrated Delivery Disciplines";
$metaDescription = "Explore BNS Development's 5 core delivery disciplines: Pre-Development, Design-Build, Residential, Tenant Improvements, and Ground-Up Construction.";
$activePage = 'services';

require_once __DIR__ . '/includes/header.php';
?>

<!-- =========================================================================
     1. HERO BANNER
     ========================================================================= -->
<section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-36 pb-12 sm:pb-16 bg-[#181818] text-white">
    <img
        src="<?= asset('images/about-hero.jpg') ?>"
        alt="BNS Comprehensive Services"
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
                <span class="text-white font-medium">Services</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-display font-semibold tracking-tight text-white leading-tight">
                Integrated Delivery Disciplines.<br>
                <span class="text-white/95">From First Plan to Final Handover.</span>
            </h1>
        </div>
    </div>
</section>

<!-- =========================================================================
     2. ALL 5 CORE SERVICES DETAILED CARDS
     ========================================================================= -->
<section class="py-20 sm:py-28 bg-[#FAFAF8] text-black/90">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        <?php foreach ($servicesData as $key => $service): ?>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center <?= $service['number'] % 2 === 0 ? 'lg:flex-row-reverse' : '' ?>" id="<?= $service['id'] ?>">
                <!-- Media Column (6 cols) -->
                <div class="lg:col-span-6 <?= $service['number'] % 2 === 0 ? 'lg:order-2' : '' ?>">
                    <div class="relative rounded-3xl overflow-hidden border border-black/10 shadow-xl bg-neutral-900 group">
                        <img
                            src="<?= asset($service['heroImage']) ?>"
                            alt="<?= htmlspecialchars($service['title']) ?>"
                            class="w-full h-[360px] sm:h-[440px] object-cover transition-transform duration-700 group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent"></div>
                        <div class="absolute top-5 left-5 px-3 py-1.5 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-xs font-mono text-white font-semibold">
                            DISCIPLINE <?= $service['number'] ?>
                        </div>
                    </div>
                </div>

                <!-- Content Column (6 cols) -->
                <div class="lg:col-span-6 space-y-6 <?= $service['number'] % 2 === 0 ? 'lg:order-1' : '' ?>">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-black/10 text-xs font-mono uppercase tracking-widest text-black/70 font-semibold shadow-xs">
                        <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                        <span><?= htmlspecialchars($service['subtitle']) ?></span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-display font-semibold text-black/95 tracking-tight leading-tight">
                        <?= htmlspecialchars($service['title']) ?>
                    </h2>

                    <p class="text-base text-neutral-600 font-sans leading-relaxed">
                        <?= htmlspecialchars($service['overview']) ?>
                    </p>

                    <!-- Subdisciplines tags -->
                    <div class="space-y-2">
                        <h4 class="text-xs font-mono uppercase tracking-wider text-neutral-400 font-semibold">Key Capabilities</h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                            <?php foreach ($service['subdisciplines'] as $sub): ?>
                                <div class="p-3 rounded-xl bg-white border border-black/5 text-xs text-neutral-700 flex items-start gap-2 shadow-2xs">
                                    <i data-lucide="check" class="w-3.5 h-3.5 text-[#ED1C24] shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong class="block text-black font-semibold"><?= htmlspecialchars($sub['name']) ?></strong>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="pt-4 flex flex-wrap items-center gap-4">
                        <a href="<?= url(ltrim($service['link'], '/')) ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#ED1C24] text-white text-xs sm:text-sm font-semibold hover:bg-[#C41E1E] transition-colors shadow-md">
                            <span>Deep Dive into <?= htmlspecialchars($service['title']) ?></span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                        <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-white border border-black/10 text-xs sm:text-sm font-medium text-black hover:bg-neutral-50 transition-colors">
                            <span>Inquire for Project</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Call to action banner -->
<?php require __DIR__ . '/includes/cta-banner.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
