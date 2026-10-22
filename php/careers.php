<?php
$pageTitle = 'Careers & Open Opportunities';
$metaDescription = 'Join BNS Development. Explore career opportunities for Senior Project Managers, Structural Superintendents, and Pre-Development Estimators across Florida and Texas.';
$activePage = 'careers';
require_once __DIR__ . '/includes/header.php';

$departments = ['All'];
foreach ($jobsData as $j) {
    if (!in_array($j['department'], $departments)) {
        $departments[] = $j['department'];
    }
}
?>

<div class="relative pb-12 sm:pb-16 text-black/90 bg-transparent min-h-screen font-sans selection:bg-[#ED1C24] selection:text-white">
    <!-- Subtle Architectural Dot Grid Background -->
    <div class="absolute inset-0 opacity-[0.025] pointer-events-none select-none" style="background-image: radial-gradient(#000000 1px, transparent 1px); background-size: 32px 32px;" aria-hidden="true"></div>

    <!-- ========================================================
        1. HERO: Full-Bleed Architectural Banner
        ======================================================== -->
    <section class="relative w-full overflow-hidden min-h-[420px] flex flex-col justify-end pt-28 sm:pt-32 pb-12 sm:pb-14 bg-[#181818] mb-8 sm:mb-12">
        <img src="<?= asset('images/careers-hero.jpg') ?>" alt="BNS Careers & Team Culture" class="absolute inset-0 w-full h-full object-cover select-none brightness-95" loading="eager">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/35 to-black/10 pointer-events-none"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="max-w-4xl space-y-5 text-white">
                <div class="flex items-center gap-2.5">
                    <span class="w-6 h-[2px] bg-[#ED1C24]"></span>
                    <span class="text-xs sm:text-sm font-sans tracking-widest text-[#d4d4d4] font-semibold">Careers &amp; Culture</span>
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-[38px] lg:text-[38px] font-display font-semibold tracking-tight text-white leading-[44px]">
                    Build With Us. Master Your Craft.<br>
                    <span class="text-white">35+ Years of Leadership.</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- ========================================================
        2. WHY BUILD WITH BNS (4 Core Pillars)
        ======================================================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-black/[0.04] border border-black/[0.06] text-xs font-mono uppercase tracking-widest text-[#ED1C24]">
                <span class="w-1.5 h-1.5 rounded-full bg-[#ED1C24]"></span>
                The BNS Standard
            </div>
            <h2 class="text-3xl sm:text-4xl font-display font-semibold tracking-tight text-black/95">
                Why Builders Choose BNS
            </h2>
            <p class="text-sm sm:text-base text-black/60 font-sans leading-relaxed">
                We believe exceptional projects start with exceptional autonomy, clear communication, and respect for the building craft.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs space-y-4 hover:shadow-lg transition-all duration-300">
                <span class="text-xs font-mono font-bold text-[#ED1C24]">01</span>
                <div class="w-10 h-10 rounded-xl bg-[#ED1C24]/10 text-[#ED1C24] flex items-center justify-center">
                    <i data-lucide="building-2" class="w-5 h-5"></i>
                </div>
                <h3 class="text-lg font-display font-semibold text-black/95">High-Impact Project Portfolio</h3>
                <p class="text-xs sm:text-sm text-black/60 font-sans leading-relaxed">
                    Lead landmark ground-up commercial, multifamily, hospitality, and residential developments across high-growth markets.
                </p>
                <div class="text-[11px] font-mono text-black/40 pt-2 border-t border-black/[0.06]">
                    Commercial • Multifamily • High-Rise
                </div>
            </div>

            <div class="p-6 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs space-y-4 hover:shadow-lg transition-all duration-300">
                <span class="text-xs font-mono font-bold text-[#ED1C24]">02</span>
                <div class="w-10 h-10 rounded-xl bg-[#ED1C24]/10 text-[#ED1C24] flex items-center justify-center">
                    <i data-lucide="award" class="w-5 h-5"></i>
                </div>
                <h3 class="text-lg font-display font-semibold text-black/95">Direct Executive Mentorship</h3>
                <p class="text-xs sm:text-sm text-black/60 font-sans leading-relaxed">
                    Work directly alongside our Founders and Senior Leadership with 35+ years of master contracting and development experience.
                </p>
                <div class="text-[11px] font-mono text-black/40 pt-2 border-t border-black/[0.06]">
                    Direct Leadership Access
                </div>
            </div>

            <div class="p-6 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs space-y-4 hover:shadow-lg transition-all duration-300">
                <span class="text-xs font-mono font-bold text-[#ED1C24]">03</span>
                <div class="w-10 h-10 rounded-xl bg-[#ED1C24]/10 text-[#ED1C24] flex items-center justify-center">
                    <i data-lucide="users" class="w-5 h-5"></i>
                </div>
                <h3 class="text-lg font-display font-semibold text-black/95">Culture of High Ownership</h3>
                <p class="text-xs sm:text-sm text-black/60 font-sans leading-relaxed">
                    We empower our project managers and superintendents with genuine field autonomy, clear communication, and decisiveness.
                </p>
                <div class="text-[11px] font-mono text-black/40 pt-2 border-t border-black/[0.06]">
                    Autonomy &amp; Accountability
                </div>
            </div>

            <div class="p-6 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs space-y-4 hover:shadow-lg transition-all duration-300">
                <span class="text-xs font-mono font-bold text-[#ED1C24]">04</span>
                <div class="w-10 h-10 rounded-xl bg-[#ED1C24]/10 text-[#ED1C24] flex items-center justify-center">
                    <i data-lucide="trending-up" class="w-5 h-5"></i>
                </div>
                <h3 class="text-lg font-display font-semibold text-black/95">Clear Career Acceleration</h3>
                <p class="text-xs sm:text-sm text-black/60 font-sans leading-relaxed">
                    We reward dedication with competitive compensation packages, project performance bonuses, and transparent pathways for promotion.
                </p>
                <div class="text-[11px] font-mono text-black/40 pt-2 border-t border-black/[0.06]">
                    Bonus &amp; Advancement
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================
        3. CANDIDATE TRAITS (Who Succeeds at BNS)
        ======================================================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-black/[0.04] border border-black/[0.06] text-xs font-mono uppercase tracking-widest text-[#ED1C24]">
                <span class="w-1.5 h-1.5 rounded-full bg-[#ED1C24]"></span>
                Culture &amp; Mindset
            </div>
            <h2 class="text-3xl sm:text-4xl font-display font-semibold tracking-tight text-black/95">
                Who Succeeds at BNS Development
            </h2>
            <p class="text-sm sm:text-base text-black/60 font-sans leading-relaxed">
                The qualities that define our superintendents, project managers, and pre-development leaders.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $traits = [
                ['id' => '01', 'title' => 'Take Direct Ownership', 'desc' => 'Accountability and pride of craftsmanship on every phase from pre-development through closeout.', 'img' => 'images/careers/01-ownership.jpg'],
                ['id' => '02', 'title' => 'Communicate Transparently', 'desc' => 'Open, proactive communication that builds confidence with owners, architects, and trade partners.', 'img' => 'images/careers/02-communication.jpg'],
                ['id' => '03', 'title' => 'Collaborative Problem-Solving', 'desc' => 'Cross-functional teamwork between field crews and executive leadership to resolve bottlenecks quickly.', 'img' => 'images/careers/03-teamwork.jpg'],
                ['id' => '04', 'title' => 'Uncompromising Precision', 'desc' => 'Meticulous attention to constructability review, P6 schedules, trade specifications, and safety.', 'img' => 'images/careers/04-detail.jpg'],
                ['id' => '05', 'title' => 'Solution-Oriented Mindset', 'desc' => 'Anticipating project friction early with proactive value engineering and disciplined field sequencing.', 'img' => 'images/careers/05-problem-solving.jpg'],
                ['id' => '06', 'title' => 'Commitment to Growth', 'desc' => 'Continuous professional mastery, staying ahead of building codes, digital technologies, and safety leadership.', 'img' => 'images/careers/07-growth.jpg'],
            ];
            foreach ($traits as $trait): ?>
            <div class="group rounded-3xl bg-white border border-[#E8E5E0] overflow-hidden shadow-xs hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                <div class="relative aspect-[16/10] overflow-hidden bg-neutral-100">
                    <img src="<?= asset($trait['img']) ?>" alt="<?= htmlspecialchars($trait['title']) ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                    <span class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full bg-black/70 backdrop-blur-md text-white text-[11px] font-mono">
                        Trait <?= $trait['id'] ?>
                    </span>
                </div>
                <div class="p-6 space-y-2">
                    <h3 class="text-lg font-display font-semibold text-black/95"><?= htmlspecialchars($trait['title']) ?></h3>
                    <p class="text-xs sm:text-sm text-black/60 font-sans leading-relaxed"><?= htmlspecialchars($trait['desc']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ========================================================
        4. OPEN POSITIONS SECTION
        ======================================================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-14" id="open-roles">
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-black/[0.04] border border-black/[0.06] text-xs font-mono uppercase tracking-widest text-[#ED1C24]">
                <span class="w-1.5 h-1.5 rounded-full bg-[#ED1C24]"></span>
                Open Opportunities
            </div>
            <h2 class="text-3xl sm:text-4xl font-display font-semibold tracking-tight text-black/95">
                Current Open Positions
            </h2>
            <p class="text-sm sm:text-base text-black/60 font-sans leading-relaxed">
                Join our regional development hubs across Florida and Texas.
            </p>
        </div>

        <!-- Controls Bar -->
        <div class="p-4 sm:p-5 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0 scrollbar-none" id="career-filters">
                <?php foreach ($departments as $idx => $dept): ?>
                <button type="button" data-dept="<?= htmlspecialchars($dept) ?>" class="career-filter-btn px-4 py-2 rounded-full text-xs font-sans tracking-wide transition-all whitespace-nowrap <?= $idx === 0 ? 'bg-[#181818] text-white font-medium shadow-xs' : 'bg-[#F6F6F6] text-black/70 hover:text-black hover:bg-[#EFEFEF] border border-black/[0.06]' ?>">
                    <?= $dept === 'All' ? 'All Departments' : htmlspecialchars($dept) ?>
                </button>
                <?php endforeach; ?>
            </div>

            <div class="relative w-full md:w-80">
                <i data-lucide="search" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-black/40"></i>
                <input type="text" id="career-search" placeholder="Search role title, department, or location..." class="w-full pl-10 pr-4 py-2 text-xs font-sans rounded-full bg-[#F6F6F6] border border-black/[0.08] text-black/90 placeholder-black/40 focus:outline-none focus:border-black/30 focus:ring-1 focus:ring-black/5 transition-colors">
            </div>
        </div>

        <!-- Jobs List -->
        <div class="space-y-4" id="careers-list">
            <?php foreach ($jobsData as $job): ?>
            <div class="career-card p-6 sm:p-8 rounded-3xl bg-white border border-[#E8E5E0] shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col lg:flex-row lg:items-center justify-between gap-6"
                 data-dept="<?= htmlspecialchars($job['department']) ?>"
                 data-title="<?= htmlspecialchars(strtolower($job['title'])) ?>"
                 data-location="<?= htmlspecialchars(strtolower($job['location'])) ?>">
                
                <div class="space-y-3 max-w-3xl">
                    <div class="flex flex-wrap items-center gap-2.5">
                        <span class="px-3 py-1 rounded-full bg-[#ED1C24]/10 text-[#ED1C24] text-xs font-sans font-semibold">
                            <?= htmlspecialchars($job['department']) ?>
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-xs text-black/60 font-sans">
                            <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                            <?= htmlspecialchars($job['location']) ?>
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-xs text-black/60 font-sans">
                            <i data-lucide="clock" class="w-3.5 h-3.5 text-black/40"></i>
                            <?= htmlspecialchars($job['type']) ?>
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-xs text-black/60 font-sans">
                            <i data-lucide="briefcase" class="w-3.5 h-3.5 text-black/40"></i>
                            <?= htmlspecialchars($job['experience']) ?>
                        </span>
                    </div>

                    <h3 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                        <?= htmlspecialchars($job['title']) ?>
                    </h3>

                    <p class="text-xs sm:text-sm text-black/65 font-sans leading-relaxed">
                        <?= htmlspecialchars($job['description']) ?>
                    </p>

                    <div class="text-xs font-mono text-black/50">
                        Compensation: <strong class="text-black/80 font-medium"><?= htmlspecialchars($job['salary']) ?></strong>
                    </div>
                </div>

                <div class="shrink-0 flex items-center">
                    <a href="<?= url('career-detail.php?id=' . urlencode($job['id'])) ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#181818] hover:bg-[#ED1C24] text-white text-xs sm:text-sm font-semibold transition-colors duration-200">
                        <span>View Role &amp; Apply</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div id="no-jobs-found" class="hidden text-center py-16 px-4 rounded-3xl bg-white border border-[#E8E5E0]">
            <i data-lucide="briefcase" class="w-12 h-12 text-black/20 mx-auto mb-3"></i>
            <h4 class="text-lg font-display font-semibold text-black/80">No matching open roles found</h4>
            <p class="text-xs text-black/50 mt-1">Try refining your search keyword or clearing the department filter.</p>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.career-filter-btn');
    const searchInput = document.getElementById('career-search');
    const cards = document.querySelectorAll('.career-card');
    const noJobs = document.getElementById('no-jobs-found');
    let currentDept = 'All';

    function applyFilter() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        cards.forEach(card => {
            const dept = card.getAttribute('data-dept');
            const title = card.getAttribute('data-title');
            const loc = card.getAttribute('data-location');

            const matchesDept = (currentDept === 'All' || dept === currentDept);
            const matchesQuery = (!query || title.includes(query) || loc.includes(query));

            if (matchesDept && matchesQuery) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (noJobs) {
            noJobs.style.display = visibleCount === 0 ? 'block' : 'none';
        }
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => {
                b.className = 'career-filter-btn px-4 py-2 rounded-full text-xs font-sans tracking-wide transition-all whitespace-nowrap bg-[#F6F6F6] text-black/70 hover:text-black hover:bg-[#EFEFEF] border border-black/[0.06]';
            });
            btn.className = 'career-filter-btn px-4 py-2 rounded-full text-xs font-sans tracking-wide transition-all whitespace-nowrap bg-[#181818] text-white font-medium shadow-xs';
            currentDept = btn.getAttribute('data-dept');
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
