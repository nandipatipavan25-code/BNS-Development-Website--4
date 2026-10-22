<?php
$pageTitle = 'Portfolio & Landmark Projects';
$metaDescription = 'Explore BNS Development landmark projects across Florida and Texas, including high-rise multifamily, oceanfront hospitality, and commercial towers.';
$activePage = 'portfolio';
require_once __DIR__ . '/includes/header.php';
?>

<div class="relative pb-12 sm:pb-16 text-black/90 bg-transparent min-h-screen font-sans selection:bg-[#ED1C24] selection:text-white">
    <!-- Subtle Architectural Dot Grid Background -->
    <div class="absolute inset-0 opacity-[0.025] pointer-events-none select-none" style="background-image: radial-gradient(#000000 1px, transparent 1px); background-size: 32px 32px;" aria-hidden="true"></div>

    <!-- ========================================================
        1. HERO: Full-Bleed Architectural Portfolio Banner
        ======================================================== -->
    <section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-32 pb-12 sm:pb-14 bg-[#181818] mb-8 sm:mb-10">
        <img src="<?= asset('images/projects/district-36-cover.png') ?>" alt="BNS Landmark Portfolio Projects" class="absolute inset-0 w-full h-full object-cover select-none brightness-105 contrast-[1.02]" loading="eager">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/35 to-black/10 pointer-events-none"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="max-w-4xl space-y-5 text-white">
                <div class="flex items-center gap-2.5">
                    <span class="w-6 h-[2px] bg-[#ED1C24]"></span>
                    <span class="text-xs sm:text-sm font-sans tracking-widest text-[#d4d4d4] font-semibold">Portfolio &amp; Project Archive</span>
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-[38px] lg:text-[38px] font-display font-semibold tracking-tight text-white leading-[44px]">
                    Landmark Builds &amp; Master Contracting.<br>
                    <span class="text-white">35+ Years Delivered.</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- ========================================================
        2. EDITORIAL PORTFOLIO CATALOGUE
        ======================================================== -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-10 sm:space-y-14">
        
        <!-- Section Heading -->
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-black/[0.04] border border-black/[0.06] text-xs font-mono uppercase tracking-widest text-[#ED1C24]">
                <span class="w-1.5 h-1.5 rounded-full bg-[#ED1C24]"></span>
                Portfolio Archive
            </div>
            <h2 class="text-3xl sm:text-4xl font-display font-semibold tracking-tight text-black/95">
                Experience Across Projects
            </h2>
            <p class="text-sm sm:text-base text-black/60 font-sans leading-relaxed">
                Explore our completed landmark developments across Florida.
            </p>
        </div>

        <!-- Filter & Search Controls Bar -->
        <div class="p-4 sm:p-5 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs flex flex-col md:flex-row md:items-center justify-between gap-4">
            <!-- Status Filter Buttons -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0 scrollbar-none" id="portfolio-filters">
                <button type="button" data-filter="all" class="portfolio-filter-btn px-4 py-2 rounded-full text-xs font-sans tracking-wide transition-all whitespace-nowrap bg-[#181818] text-white font-medium shadow-xs">
                    All Projects
                </button>
                <button type="button" data-filter="Completed Projects" class="portfolio-filter-btn px-4 py-2 rounded-full text-xs font-sans tracking-wide transition-all whitespace-nowrap bg-[#F6F6F6] text-black/70 hover:text-black hover:bg-[#EFEFEF] border border-black/[0.06]">
                    Completed Projects
                </button>
                <button type="button" data-filter="Active Projects" class="portfolio-filter-btn px-4 py-2 rounded-full text-xs font-sans tracking-wide transition-all whitespace-nowrap bg-[#F6F6F6] text-black/70 hover:text-black hover:bg-[#EFEFEF] border border-black/[0.06]">
                    Active Projects
                </button>
                <button type="button" data-filter="Upcoming Projects" class="portfolio-filter-btn px-4 py-2 rounded-full text-xs font-sans tracking-wide transition-all whitespace-nowrap bg-[#F6F6F6] text-black/70 hover:text-black hover:bg-[#EFEFEF] border border-black/[0.06]">
                    Upcoming Projects
                </button>
            </div>

            <!-- Search Input Box -->
            <div class="relative w-full md:w-80">
                <i data-lucide="search" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-black/40"></i>
                <input type="text" id="portfolio-search" placeholder="Search project title, city, or scope..." class="w-full pl-10 pr-4 py-2 text-xs font-sans rounded-full bg-[#F6F6F6] border border-black/[0.08] text-black/90 placeholder-black/40 focus:outline-none focus:border-black/30 focus:ring-1 focus:ring-black/5 transition-colors">
            </div>
        </div>

        <!-- ========================================================
            PROJECTS EDITORIAL SHOWCASE (2-Column Grid)
            ======================================================== -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch" id="projects-grid">
            <?php foreach ($projectsData as $proj): ?>
            <article class="project-card group flex flex-col justify-between rounded-3xl bg-white border border-[#E8E5E0] overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300"
                     data-status="<?= htmlspecialchars($proj['status']) ?>"
                     data-title="<?= htmlspecialchars(strtolower($proj['title'])) ?>"
                     data-location="<?= htmlspecialchars(strtolower($proj['location'])) ?>"
                     data-category="<?= htmlspecialchars(strtolower($proj['category'] ?? '')) ?>">
                <div>
                    <!-- Image Showcase Container with Quick Badges -->
                    <div class="relative aspect-[16/10] overflow-hidden bg-neutral-100">
                        <img src="<?= asset($proj['image']) ?>" alt="<?= htmlspecialchars($proj['title']) ?>" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        
                        <!-- Floating Category Pill -->
                        <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                            <span class="px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-black/90 font-sans text-xs font-semibold shadow-xs">
                                <?= htmlspecialchars($proj['category']) ?>
                            </span>
                            <span class="px-3 py-1 rounded-full bg-[#ED1C24] text-white font-sans text-xs font-semibold shadow-xs">
                                <?= htmlspecialchars($proj['status']) ?>
                            </span>
                        </div>

                        <!-- Bottom Spec Bar Over Image -->
                        <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-white text-xs">
                            <span class="flex items-center gap-1.5 font-medium">
                                <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                                <?= htmlspecialchars($proj['location']) ?>
                            </span>
                            <?php if (!empty($proj['sqft'])): ?>
                            <span class="font-mono bg-black/50 backdrop-blur-sm px-2.5 py-1 rounded-full border border-white/10">
                                <?= htmlspecialchars($proj['sqft']) ?>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 sm:p-8 space-y-4">
                        <div class="space-y-1">
                            <h3 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight group-hover:text-[#ED1C24] transition-colors">
                                <?= htmlspecialchars($proj['title']) ?>
                            </h3>
                            <?php if (!empty($proj['subtitle'])): ?>
                            <p class="text-xs sm:text-sm text-black/50 font-sans">
                                <?= htmlspecialchars($proj['subtitle']) ?>
                            </p>
                            <?php endif; ?>
                        </div>

                        <p class="text-xs sm:text-sm text-black/70 font-sans leading-relaxed">
                            <?= htmlspecialchars($proj['overview']) ?>
                        </p>

                        <!-- Highlights List -->
                        <?php if (!empty($proj['highlights'])): ?>
                        <div class="pt-2 border-t border-black/[0.06] space-y-2">
                            <span class="text-[11px] font-mono uppercase tracking-wider text-black/40 block">Key Scope Highlights</span>
                            <ul class="space-y-1.5">
                                <?php foreach (array_slice($proj['highlights'], 0, 3) as $highlight): ?>
                                <li class="text-xs text-black/75 flex items-start gap-2">
                                    <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-[#ED1C24] shrink-0 mt-0.5"></i>
                                    <span><?= htmlspecialchars($highlight) ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Card Footer Action -->
                <div class="p-6 sm:p-8 pt-0">
                    <a href="<?= url('project-detail.php?id=' . urlencode($proj['id'])) ?>" class="w-full inline-flex items-center justify-between px-5 py-3 rounded-2xl bg-[#F6F6F6] hover:bg-[#181818] text-black hover:text-white border border-black/[0.06] text-xs font-sans font-semibold transition-all duration-200 group/btn">
                        <span>View Project Case Study</span>
                        <i data-lucide="arrow-up-right" class="w-4 h-4 text-[#ED1C24] group-hover/btn:translate-x-0.5 group-hover/btn:-translate-y-0.5 transition-transform"></i>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <div id="no-projects-found" class="hidden text-center py-16 px-4 rounded-3xl bg-white border border-[#E8E5E0]">
            <i data-lucide="building-2" class="w-12 h-12 text-black/20 mx-auto mb-3"></i>
            <h4 class="text-lg font-display font-semibold text-black/80">No matching projects found</h4>
            <p class="text-xs text-black/50 mt-1">Try refining your search keyword or clearing the status filter.</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
    const searchInput = document.getElementById('portfolio-search');
    const cards = document.querySelectorAll('.project-card');
    const noProjects = document.getElementById('no-projects-found');
    let currentFilter = 'all';

    function applyFilter() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        cards.forEach(card => {
            const status = card.getAttribute('data-status');
            const title = card.getAttribute('data-title');
            const loc = card.getAttribute('data-location');
            const cat = card.getAttribute('data-category');

            const matchesStatus = (currentFilter === 'all' || status === currentFilter);
            const matchesQuery = (!query || title.includes(query) || loc.includes(query) || cat.includes(query));

            if (matchesStatus && matchesQuery) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (noProjects) {
            noProjects.style.display = visibleCount === 0 ? 'block' : 'none';
        }
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => {
                b.className = 'portfolio-filter-btn px-4 py-2 rounded-full text-xs font-sans tracking-wide transition-all whitespace-nowrap bg-[#F6F6F6] text-black/70 hover:text-black hover:bg-[#EFEFEF] border border-black/[0.06]';
            });
            btn.className = 'portfolio-filter-btn px-4 py-2 rounded-full text-xs font-sans tracking-wide transition-all whitespace-nowrap bg-[#181818] text-white font-medium shadow-xs';
            currentFilter = btn.getAttribute('data-filter');
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
