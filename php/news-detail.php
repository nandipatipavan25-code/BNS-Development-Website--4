<?php
require_once __DIR__ . '/includes/config.php';

$newsId = isset($_GET['id']) ? trim($_GET['id']) : 'bns-expands-central-texas-development-corridor';
$news = $newsData[$newsId] ?? reset($newsData);

$pageTitle = $news['title'] . ' — Press Release';
$metaDescription = htmlspecialchars($news['summary']);
$activePage = 'news';

require_once __DIR__ . '/includes/header.php';
?>

<div class="relative pb-16 overflow-hidden bg-transparent text-black/90 min-h-screen font-sans selection:bg-[#ED1C24] selection:text-white">
    <!-- Subtle Architectural Dot Grid Texture -->
    <div class="absolute inset-0 opacity-[0.025] pointer-events-none select-none" style="background-image: radial-gradient(#000000 1px, transparent 1px); background-size: 32px 32px;" aria-hidden="true"></div>

    <!-- ========================================================
        1. ARTICLE HERO HEADER
        ======================================================== -->
    <section class="relative w-full pt-28 sm:pt-36 pb-10 sm:pb-14 bg-transparent border-b border-black/[0.08] mb-8 sm:mb-10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full space-y-6">
            <!-- Breadcrumb Navigation -->
            <div class="flex items-center justify-between">
                <a href="<?= url('news.php') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#F6F6F6] hover:bg-white text-black/85 border border-black/[0.08] hover:border-[#ED1C24] hover:text-[#ED1C24] text-xs sm:text-sm font-sans font-medium transition-colors shadow-xs group">
                    <i data-lucide="arrow-left" class="w-4 h-4 text-[#ED1C24] transition-transform group-hover:-translate-x-1"></i>
                    <span>Back to News &amp; Press Releases</span>
                </a>
            </div>

            <div class="space-y-4">
                <div class="flex flex-wrap items-center gap-2.5 text-xs font-sans">
                    <span class="px-3.5 py-1.5 rounded-full bg-[#ED1C24] text-white font-semibold text-xs shadow-xs">
                        <?= htmlspecialchars($news['category']) ?>
                    </span>
                    <span class="inline-flex items-center gap-1.5 bg-[#F6F6F6] px-3.5 py-1.5 rounded-full border border-black/[0.08] text-black/75">
                        <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                        <?= htmlspecialchars($news['date']) ?>
                    </span>
                    <span class="inline-flex items-center gap-1.5 bg-[#F6F6F6] px-3.5 py-1.5 rounded-full border border-black/[0.08] text-black/75">
                        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                        <?= htmlspecialchars($news['location']) ?>
                    </span>
                    <span class="inline-flex items-center gap-1.5 bg-[#F6F6F6] px-3.5 py-1.5 rounded-full border border-black/[0.08] text-black/75">
                        <i data-lucide="clock" class="w-3.5 h-3.5 text-black/40"></i>
                        <?= htmlspecialchars($news['readTime']) ?>
                    </span>
                </div>

                <h1 class="text-2xl sm:text-3xl md:text-4xl font-display font-semibold text-black/95 tracking-tight leading-tight">
                    <?= htmlspecialchars($news['title']) ?>
                </h1>

                <?php if (!empty($news['subtitle'])): ?>
                <p class="text-base sm:text-lg text-black/65 font-sans leading-relaxed">
                    <?= htmlspecialchars($news['subtitle']) ?>
                </p>
                <?php endif; ?>
            </div>

            <!-- Featured Banner Image -->
            <div class="relative mt-8 rounded-3xl overflow-hidden border border-[#E8E5E0] bg-neutral-100 shadow-xl aspect-[16/9]">
                <img src="<?= asset($news['image']) ?>" alt="<?= htmlspecialchars($news['title']) ?>" class="w-full h-full object-cover select-none" loading="eager">
            </div>
        </div>
    </section>

    <!-- ========================================================
        2. ARTICLE BODY CONTENT
        ======================================================== -->
    <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 space-y-10">
        
        <!-- Summary Callout -->
        <div class="p-6 sm:p-8 rounded-3xl bg-[#F8F8F7] border border-black/[0.08] text-base sm:text-lg text-black/85 font-sans leading-relaxed italic border-l-4 border-l-[#ED1C24]">
            &ldquo;<?= htmlspecialchars($news['summary']) ?>&rdquo;
        </div>

        <!-- Metrics Strip -->
        <?php if (!empty($news['metrics'])): ?>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 p-6 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs">
            <?php foreach ($news['metrics'] as $metric): ?>
            <div>
                <span class="text-[11px] font-mono uppercase tracking-wider text-black/40 block"><?= htmlspecialchars($metric['label']) ?></span>
                <span class="text-base font-semibold text-black/95 block mt-1"><?= htmlspecialchars($metric['value']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Content Sections -->
        <div class="space-y-8 font-sans text-black/80 leading-relaxed text-base sm:text-lg">
            <?php foreach ($news['contentSections'] as $section): ?>
                <?php if (!empty($section['heading'])): ?>
                <h2 class="text-2xl sm:text-3xl font-display font-semibold text-black/95 pt-4 tracking-tight">
                    <?= htmlspecialchars($section['heading']) ?>
                </h2>
                <?php endif; ?>

                <?php if (!empty($section['paragraphs'])): ?>
                    <?php foreach ($section['paragraphs'] as $para): ?>
                    <p><?= htmlspecialchars($para) ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if (!empty($section['quote'])): ?>
                <blockquote class="my-8 p-6 sm:p-8 rounded-3xl bg-black/[0.03] border-l-4 border-[#ED1C24] space-y-3">
                    <p class="font-display italic text-lg sm:text-xl text-black/90">
                        &ldquo;<?= htmlspecialchars($section['quote']['text']) ?>&rdquo;
                    </p>
                    <footer class="text-xs font-mono text-black/60">
                        — <strong class="text-black/85"><?= htmlspecialchars($section['quote']['author']) ?></strong>, <?= htmlspecialchars($section['quote']['role']) ?>
                    </footer>
                </blockquote>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <!-- Secondary & Tertiary Photos (if available) -->
        <?php if (!empty($news['secondaryImage']) || !empty($news['tertiaryImage'])): ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-6">
            <?php if (!empty($news['secondaryImage'])): ?>
            <div class="relative aspect-[16/10] rounded-2xl overflow-hidden border border-[#E8E5E0] shadow-sm">
                <img src="<?= asset($news['secondaryImage']) ?>" alt="Project Photo" class="w-full h-full object-cover">
            </div>
            <?php endif; ?>
            <?php if (!empty($news['tertiaryImage'])): ?>
            <div class="relative aspect-[16/10] rounded-2xl overflow-hidden border border-[#E8E5E0] shadow-sm">
                <img src="<?= asset($news['tertiaryImage']) ?>" alt="Development Site Photo" class="w-full h-full object-cover">
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <!-- Press Contact Box -->
        <?php if (!empty($news['pressContact'])): ?>
        <div class="p-6 sm:p-8 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs space-y-4 mt-12">
            <span class="text-xs font-mono uppercase tracking-wider text-[#ED1C24] font-semibold block">Media Inquiries</span>
            <div class="space-y-1">
                <h3 class="text-lg font-display font-semibold text-black/95"><?= htmlspecialchars($news['pressContact']['name']) ?></h3>
                <p class="text-xs text-black/60 font-sans"><?= htmlspecialchars($news['pressContact']['title']) ?></p>
            </div>
            <div class="flex flex-wrap items-center gap-6 text-xs font-sans text-black/75 pt-2 border-t border-black/[0.06]">
                <a href="mailto:<?= htmlspecialchars($news['pressContact']['email']) ?>" class="flex items-center gap-1.5 hover:text-[#ED1C24] transition-colors">
                    <i data-lucide="mail" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                    <?= htmlspecialchars($news['pressContact']['email']) ?>
                </a>
                <a href="tel:7863683009" class="flex items-center gap-1.5 hover:text-[#ED1C24] transition-colors">
                    <i data-lucide="phone" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                    <?= htmlspecialchars($news['pressContact']['phone']) ?>
                </a>
                <span class="flex items-center gap-1.5 text-black/50">
                    <i data-lucide="map-pin" class="w-3.5 h-3.5 text-black/40"></i>
                    <?= htmlspecialchars($news['pressContact']['location']) ?>
                </span>
            </div>
        </div>
        <?php endif; ?>

    </article>
</div>

<?php
require_once __DIR__ . '/includes/cta-banner.php';
require_once __DIR__ . '/includes/footer.php';
?>
