<?php
require_once __DIR__ . '/includes/config.php';

$projectId = isset($_GET['id']) ? trim($_GET['id']) : 'marriott-residents';
$project = $projectsData[$projectId] ?? reset($projectsData);

$pageTitle = $project['title'] . ' — Project Case Study';
$metaDescription = htmlspecialchars($project['overview'] ?? 'BNS Development landmark project case study.');
$activePage = 'portfolio';

require_once __DIR__ . '/includes/header.php';

// Prepare next/prev projects
$projectKeys = array_keys($projectsData);
$currentIndex = array_search($project['id'], $projectKeys);
$prevKey = ($currentIndex > 0) ? $projectKeys[$currentIndex - 1] : end($projectKeys);
$nextKey = ($currentIndex < count($projectKeys) - 1) ? $projectKeys[$currentIndex + 1] : $projectKeys[0];
$prevProject = $projectsData[$prevKey];
$nextProject = $projectsData[$nextKey];

$gallery = !empty($project['gallery']) ? $project['gallery'] : [$project['image']];
?>

<div class="relative pb-12 sm:pb-16 text-black/90 bg-transparent min-h-screen font-sans selection:bg-[#ED1C24] selection:text-white">
    <!-- Subtle Architectural Dot Grid Background -->
    <div class="absolute inset-0 opacity-[0.025] pointer-events-none select-none" style="background-image: radial-gradient(#000000 1px, transparent 1px); background-size: 32px 32px;" aria-hidden="true"></div>

    <!-- ========================================================
        1. HERO HEADER: Pristine Light Architectural Banner
        ======================================================== -->
    <section class="relative w-full pt-28 sm:pt-36 pb-12 sm:pb-16 bg-transparent border-b border-black/[0.08] mb-8 sm:mb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full space-y-6">
            <!-- Breadcrumb Navigation -->
            <div class="flex items-center justify-between">
                <a href="<?= url('portfolio.php') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#F6F6F6] hover:bg-white text-black/85 border border-black/[0.08] hover:border-[#ED1C24] hover:text-[#ED1C24] text-xs sm:text-sm font-sans font-medium transition-all shadow-xs group">
                    <i data-lucide="arrow-left" class="w-4 h-4 text-[#ED1C24] transition-transform group-hover:-translate-x-1"></i>
                    <span>Back to Portfolio</span>
                </a>

                <div class="flex items-center gap-2">
                    <a href="<?= url('project-detail.php?id=' . urlencode($prevProject['id'])) ?>" class="px-3.5 py-2 rounded-full bg-[#F6F6F6] hover:bg-white text-xs font-sans border border-black/[0.08] hover:border-black/30 transition-colors" title="Previous: <?= htmlspecialchars($prevProject['title']) ?>">
                        <i data-lucide="chevron-left" class="w-4 h-4"></i>
                    </a>
                    <a href="<?= url('project-detail.php?id=' . urlencode($nextProject['id'])) ?>" class="px-3.5 py-2 rounded-full bg-[#F6F6F6] hover:bg-white text-xs font-sans border border-black/[0.08] hover:border-black/30 transition-colors" title="Next: <?= htmlspecialchars($nextProject['title']) ?>">
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <div class="max-w-4xl space-y-4">
                <div class="flex flex-wrap items-center gap-2.5">
                    <span class="px-3.5 py-1.5 rounded-full bg-[#F5F3F0] border border-[#E8E5E0] text-xs font-sans font-semibold text-black/75">
                        <?= htmlspecialchars($project['category']) ?>
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#ED1C24] text-white text-xs font-sans font-semibold shadow-xs">
                        <?= htmlspecialchars($project['status']) ?>
                    </span>
                </div>

                <h1 class="text-3xl sm:text-4xl md:text-[42px] lg:text-[42px] font-display font-semibold text-black/95 tracking-tight leading-[48px]">
                    <?= htmlspecialchars($project['title']) ?>
                </h1>

                <?php if (!empty($project['subtitle'])): ?>
                <p class="text-base sm:text-lg text-black/60 font-sans leading-relaxed max-w-3xl">
                    <?= htmlspecialchars($project['subtitle']) ?>
                </p>
                <?php endif; ?>
            </div>

            <!-- Featured Large Project Banner Showcase -->
            <div class="relative mt-8 rounded-3xl overflow-hidden border border-[#E8E5E0] bg-[#F7F7F5] shadow-lg group aspect-[16/9] sm:aspect-[21/9] max-h-[520px]">
                <img src="<?= asset($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>" class="w-full h-full object-cover select-none transition-transform duration-1000 group-hover:scale-[1.02]" loading="eager">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

                <!-- Bottom Quick Specs Bar -->
                <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 backdrop-blur-md bg-black/40 border-t border-white/10 flex flex-wrap items-center justify-between gap-4 text-white">
                    <div class="flex flex-wrap items-center gap-6 sm:gap-10 text-xs sm:text-sm">
                        <?php if (!empty($project['location'])): ?>
                        <div class="flex items-center gap-2">
                            <i data-lucide="map-pin" class="w-4 h-4 text-[#ED1C24]"></i>
                            <span><?= htmlspecialchars($project['location']) ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($project['year'])): ?>
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4 text-[#ED1C24]"></i>
                            <span><?= htmlspecialchars($project['year']) ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($project['sqft'])): ?>
                        <div class="flex items-center gap-2">
                            <i data-lucide="layers" class="w-4 h-4 text-[#ED1C24]"></i>
                            <span><?= htmlspecialchars($project['sqft']) ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($project['value'])): ?>
                        <div class="flex items-center gap-2">
                            <i data-lucide="dollar-sign" class="w-4 h-4 text-[#ED1C24]"></i>
                            <span><?= htmlspecialchars($project['value']) ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($project['client'])): ?>
                    <div class="text-xs text-white/70">
                        Client: <strong class="text-white font-medium"><?= htmlspecialchars($project['client']) ?></strong>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================
        2. PROJECT OVERVIEW & SCOPE BREAKDOWN
        ======================================================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
            <!-- Left Narrative & Highlights -->
            <div class="lg:col-span-8 space-y-10">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-black/[0.04] border border-black/[0.06] text-xs font-mono uppercase tracking-widest text-[#ED1C24]">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#ED1C24]"></span>
                        Project Narrative
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-display font-semibold text-black/95 tracking-tight">
                        Strategic Development & Execution
                    </h2>
                    <p class="text-base sm:text-lg text-black/75 font-sans leading-relaxed">
                        <?= htmlspecialchars($project['overview']) ?>
                    </p>
                </div>

                <!-- Scope of Work Callout -->
                <div class="p-6 sm:p-8 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#ED1C24]/10 text-[#ED1C24] flex items-center justify-center">
                            <i data-lucide="building-2" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-lg font-display font-semibold text-black/95">Master Scope of Work</h3>
                    </div>
                    <p class="text-sm text-black/70 font-sans leading-relaxed">
                        <?= htmlspecialchars($project['scope']) ?>
                    </p>
                </div>

                <!-- Key Project Highlights -->
                <?php if (!empty($project['highlights'])): ?>
                <div class="space-y-4">
                    <h3 class="text-xl font-display font-semibold text-black/95">Execution Milestones &amp; Capabilities</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <?php foreach ($project['highlights'] as $highlight): ?>
                        <div class="p-5 rounded-2xl bg-white border border-[#E8E5E0] flex items-start gap-3.5 shadow-xs">
                            <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-3.5 h-3.5"></i>
                            </div>
                            <span class="text-xs sm:text-sm text-black/80 font-sans leading-relaxed font-medium">
                                <?= htmlspecialchars($highlight) ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Gallery Showcase -->
                <?php if (count($gallery) > 1): ?>
                <div class="space-y-4 pt-6">
                    <h3 class="text-xl font-display font-semibold text-black/95">Project Gallery</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <?php foreach ($gallery as $idx => $gImg): ?>
                        <div class="relative aspect-[16/10] rounded-2xl overflow-hidden border border-[#E8E5E0] bg-neutral-100 group cursor-pointer" onclick="openLightbox('<?= asset($gImg) ?>')">
                            <img src="<?= asset($gImg) ?>" alt="<?= htmlspecialchars($project['title']) ?> photo <?= $idx + 1 ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
                                <i data-lucide="maximize-2" class="w-6 h-6"></i>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <!-- Right Sidebar: Quick Facts & Inquire Card -->
            <div class="lg:col-span-4 space-y-6">
                <div class="p-6 sm:p-7 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs space-y-5 sticky top-28">
                    <h4 class="text-base font-display font-semibold text-black/90 pb-3 border-b border-black/[0.08]">
                        Project Specifications
                    </h4>

                    <dl class="space-y-3.5 text-xs font-sans">
                        <div>
                            <dt class="text-black/40 uppercase tracking-wider font-mono text-[10px]">Client / Partner</dt>
                            <dd class="text-black/90 font-medium text-sm mt-0.5"><?= htmlspecialchars($project['client'] ?? 'Confidential') ?></dd>
                        </div>
                        <div>
                            <dt class="text-black/40 uppercase tracking-wider font-mono text-[10px]">Location</dt>
                            <dd class="text-black/90 font-medium text-sm mt-0.5"><?= htmlspecialchars($project['location']) ?></dd>
                        </div>
                        <div>
                            <dt class="text-black/40 uppercase tracking-wider font-mono text-[10px]">Category</dt>
                            <dd class="text-black/90 font-medium text-sm mt-0.5"><?= htmlspecialchars($project['category']) ?></dd>
                        </div>
                        <?php if (!empty($project['value'])): ?>
                        <div>
                            <dt class="text-black/40 uppercase tracking-wider font-mono text-[10px]">Project Valuation</dt>
                            <dd class="text-black/90 font-medium text-sm mt-0.5"><?= htmlspecialchars($project['value']) ?></dd>
                        </div>
                        <?php endif; ?>
                        <div>
                            <dt class="text-black/40 uppercase tracking-wider font-mono text-[10px]">Timeline / Status</dt>
                            <dd class="text-black/90 font-medium text-sm mt-0.5"><?= htmlspecialchars($project['status']) ?> (<?= htmlspecialchars($project['year']) ?>)</dd>
                        </div>
                    </dl>

                    <div class="pt-4 border-t border-black/[0.08] space-y-3">
                        <a href="<?= url('contact.php') ?>" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-full bg-[#ED1C24] hover:bg-[#C41E1E] text-white text-xs sm:text-sm font-semibold tracking-wide transition-colors shadow-md">
                            <span>Discuss Similar Project</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="tel:7863683009" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-[#F6F6F6] hover:bg-white text-black/80 hover:text-black border border-black/[0.08] text-xs font-semibold transition-colors">
                            <i data-lucide="phone" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                            <span>Call Bradford Smith</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Image Lightbox Modal -->
<div id="lightbox-modal" class="fixed inset-0 z-50 bg-black/90 backdrop-blur-md hidden items-center justify-center p-4">
    <button type="button" onclick="closeLightbox()" class="absolute top-6 right-6 text-white/80 hover:text-white p-2">
        <i data-lucide="x" class="w-8 h-8"></i>
    </button>
    <img id="lightbox-img" src="" alt="Full view" class="max-w-full max-h-[90vh] object-contain rounded-2xl shadow-2xl">
</div>

<script>
function openLightbox(src) {
    const modal = document.getElementById('lightbox-modal');
    const img = document.getElementById('lightbox-img');
    if (modal && img) {
        img.src = src;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}
function closeLightbox() {
    const modal = document.getElementById('lightbox-modal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeLightbox();
});
</script>

<?php
require_once __DIR__ . '/includes/cta-banner.php';
require_once __DIR__ . '/includes/footer.php';
?>
