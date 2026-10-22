<?php
$pageTitle = 'News & Press Releases';
$metaDescription = 'Corporate announcements, project completions, and regional expansion updates from BNS Development.';
$activePage = 'news';
require_once __DIR__ . '/includes/header.php';

$categories = [
    'all' => ['label' => 'All Releases', 'count' => count($newsData)],
    'Strategic Expansion' => ['label' => 'Strategic Expansion', 'count' => 0],
    'Press Release' => ['label' => 'Press Releases', 'count' => 0],
];
foreach ($newsData as $item) {
    if (isset($categories[$item['category']])) {
        $categories[$item['category']]['count']++;
    }
}
?>

<div class="relative pb-16 overflow-hidden bg-transparent text-black/90 min-h-screen font-sans selection:bg-[#ED1C24] selection:text-white">
    <!-- Subtle Architectural Dot Grid Texture -->
    <div class="absolute inset-0 opacity-[0.025] pointer-events-none select-none" style="background-image: radial-gradient(#000000 1px, transparent 1px); background-size: 32px 32px;" aria-hidden="true"></div>

    <!-- ========================================================
        1. HERO SECTION: Full-Bleed Architectural Banner
        ======================================================== -->
    <section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-32 pb-12 sm:pb-14 bg-[#141518] mb-8 sm:mb-12">
        <img src="<?= asset('images/about-hero.jpg') ?>" alt="BNS Development News & Press Releases" class="absolute inset-0 w-full h-full object-cover select-none brightness-95" loading="eager">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/35 to-black/10 pointer-events-none"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="max-w-4xl space-y-5 text-white">
                <div class="flex items-center gap-2.5">
                    <span class="w-6 h-[2px] bg-[#ED1C24]"></span>
                    <span class="text-xs sm:text-sm font-sans tracking-widest text-neutral-300 font-semibold">
                        Media &amp; Corporate Communications
                    </span>
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-[38px] lg:text-[38px] font-display font-semibold tracking-tight text-white leading-[44px]">
                    News &amp; Press Releases.
                </h1>
            </div>
        </div>
    </section>

    <!-- ========================================================
        2. FILTER & SEARCH CONTROL BAR
        ======================================================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 sm:mb-14 relative z-10">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-black/[0.08]">
            <!-- Category Filter Chips -->
            <div class="flex flex-wrap items-center gap-2" id="news-filters">
                <?php foreach ($categories as $catKey => $cat): ?>
                <button type="button" data-cat="<?= htmlspecialchars($catKey) ?>" class="news-filter-btn inline-flex items-center gap-2 px-4 py-2 rounded-full text-xs sm:text-sm font-sans font-medium transition-all duration-200 <?= $catKey === 'all' ? 'bg-black text-white shadow-xs' : 'bg-white hover:bg-neutral-100 text-black/70 hover:text-black border border-black/[0.08]' ?>">
                    <span><?= htmlspecialchars($cat['label']) ?></span>
                    <span class="text-[11px] font-mono px-1.5 py-0.5 rounded-full <?= $catKey === 'all' ? 'bg-white/20 text-white' : 'bg-black/[0.06] text-black/60' ?>">
                        <?= $cat['count'] ?>
                    </span>
                </button>
                <?php endforeach; ?>
            </div>

            <!-- Quick Search Input -->
            <div class="relative w-full md:w-72">
                <i data-lucide="search" class="w-4 h-4 text-black/40 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                <input type="text" id="news-search" placeholder="Search releases..." class="w-full pl-10 pr-4 py-2 text-xs font-sans rounded-full bg-white border border-black/[0.08] text-black/90 placeholder-black/40 focus:outline-none focus:border-black/30 focus:ring-1 focus:ring-black/5 transition-colors">
            </div>
        </div>
    </section>

    <!-- ========================================================
        3. NEWS ARTICLES CATALOGUE
        ======================================================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8" id="news-list">
        <?php foreach ($newsData as $news): ?>
        <article class="news-item group rounded-3xl bg-white border border-[#E8E5E0] overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300"
                 data-category="<?= htmlspecialchars($news['category']) ?>"
                 data-title="<?= htmlspecialchars(strtolower($news['title'])) ?>"
                 data-summary="<?= htmlspecialchars(strtolower($news['summary'])) ?>">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center p-6 sm:p-8">
                
                <!-- Image Column -->
                <div class="lg:col-span-5 relative aspect-[16/10] rounded-2xl overflow-hidden bg-neutral-100">
                    <img src="<?= asset($news['image']) ?>" alt="<?= htmlspecialchars($news['title']) ?>" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                    <span class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full bg-[#ED1C24] text-white text-xs font-sans font-semibold shadow-xs">
                        <?= htmlspecialchars($news['category']) ?>
                    </span>
                </div>

                <!-- Content Column -->
                <div class="lg:col-span-7 space-y-4">
                    <div class="flex flex-wrap items-center gap-3 text-xs text-black/50 font-sans">
                        <span class="flex items-center gap-1 font-medium text-black/80">
                            <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                            <?= htmlspecialchars($news['date']) ?>
                        </span>
                        <span>•</span>
                        <span class="flex items-center gap-1">
                            <i data-lucide="clock" class="w-3.5 h-3.5 text-black/40"></i>
                            <?= htmlspecialchars($news['readTime']) ?>
                        </span>
                        <span>•</span>
                        <span class="flex items-center gap-1">
                            <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                            <?= htmlspecialchars($news['location']) ?>
                        </span>
                    </div>

                    <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight group-hover:text-[#ED1C24] transition-colors">
                        <?= htmlspecialchars($news['title']) ?>
                    </h2>

                    <p class="text-xs sm:text-sm text-black/65 font-sans leading-relaxed line-clamp-3">
                        <?= htmlspecialchars($news['summary']) ?>
                    </p>

                    <!-- Metrics Badges -->
                    <?php if (!empty($news['metrics'])): ?>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 pt-2 border-t border-black/[0.06]">
                        <?php foreach ($news['metrics'] as $metric): ?>
                        <div class="p-2.5 rounded-xl bg-[#F8F8F7] border border-black/[0.04]">
                            <span class="text-[10px] font-mono uppercase text-black/40 block"><?= htmlspecialchars($metric['label']) ?></span>
                            <span class="text-xs font-semibold text-black/90 block mt-0.5"><?= htmlspecialchars($metric['value']) ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <div class="pt-2">
                        <a href="<?= url('news-detail.php?id=' . urlencode($news['id'])) ?>" class="inline-flex items-center gap-2 text-xs font-sans font-semibold text-[#ED1C24] hover:text-[#C41E1E] transition-colors group/link">
                            <span>Read Full Press Release</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover/link:translate-x-1"></i>
                        </a>
                    </div>
                </div>

            </div>
        </article>
        <?php endforeach; ?>
    </section>

    <div id="no-news-found" class="hidden max-w-7xl mx-auto px-4 text-center py-16 rounded-3xl bg-white border border-[#E8E5E0] mt-8">
        <i data-lucide="file-text" class="w-12 h-12 text-black/20 mx-auto mb-3"></i>
        <h4 class="text-lg font-display font-semibold text-black/80">No matching press releases found</h4>
        <p class="text-xs text-black/50 mt-1">Try refining your search keyword or clearing the filter.</p>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.news-filter-btn');
    const searchInput = document.getElementById('news-search');
    const items = document.querySelectorAll('.news-item');
    const noNews = document.getElementById('no-news-found');
    let currentCat = 'all';

    function applyFilter() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        items.forEach(item => {
            const cat = item.getAttribute('data-category');
            const title = item.getAttribute('data-title');
            const summary = item.getAttribute('data-summary');

            const matchesCat = (currentCat === 'all' || cat === currentCat);
            const matchesQuery = (!query || title.includes(query) || summary.includes(query));

            if (matchesCat && matchesQuery) {
                item.style.display = '';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        if (noNews) {
            noNews.style.display = visibleCount === 0 ? 'block' : 'none';
        }
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => {
                b.className = 'news-filter-btn inline-flex items-center gap-2 px-4 py-2 rounded-full text-xs sm:text-sm font-sans font-medium transition-all duration-200 bg-white hover:bg-neutral-100 text-black/70 hover:text-black border border-black/[0.08]';
                const countBadge = b.querySelector('.font-mono');
                if (countBadge) countBadge.className = 'text-[11px] font-mono px-1.5 py-0.5 rounded-full bg-black/[0.06] text-black/60';
            });
            btn.className = 'news-filter-btn inline-flex items-center gap-2 px-4 py-2 rounded-full text-xs sm:text-sm font-sans font-medium transition-all duration-200 bg-black text-white shadow-xs';
            const countBadge = btn.querySelector('.font-mono');
            if (countBadge) countBadge.className = 'text-[11px] font-mono px-1.5 py-0.5 rounded-full bg-white/20 text-white';

            currentCat = btn.getAttribute('data-cat');
            applyFilter();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', applyFilter);
    }
});
</script>

<?php
require_once __DIR__ . '/includes/cta-banner.php';
require_once __DIR__ . '/includes/footer.php';
?>
