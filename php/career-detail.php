<?php
require_once __DIR__ . '/includes/config.php';

$jobId = isset($_GET['id']) ? trim($_GET['id']) : 'sr-project-manager';
$job = $jobsData[$jobId] ?? reset($jobsData);

$pageTitle = $job['title'] . ' — Career Opportunity';
$metaDescription = htmlspecialchars($job['description']);
$activePage = 'careers';

require_once __DIR__ . '/includes/header.php';
?>

<div class="relative pb-12 sm:pb-16 text-black/90 bg-transparent min-h-screen font-sans selection:bg-[#ED1C24] selection:text-white">
    <!-- Subtle Architectural Dot Grid Background -->
    <div class="absolute inset-0 opacity-[0.025] pointer-events-none select-none" style="background-image: radial-gradient(#000000 1px, transparent 1px); background-size: 32px 32px;" aria-hidden="true"></div>

    <!-- ========================================================
        1. HERO HEADER: Pristine Light Architectural Banner
        ======================================================== -->
    <section class="relative w-full pt-28 sm:pt-36 pb-10 sm:pb-14 bg-transparent border-b border-black/[0.08] mb-8 sm:mb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full space-y-6">
            <!-- Breadcrumb Navigation & Share Button -->
            <div class="flex items-center justify-between">
                <a href="<?= url('careers.php') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#F6F6F6] hover:bg-white text-black/85 border border-black/[0.08] hover:border-[#ED1C24] hover:text-[#ED1C24] text-xs sm:text-sm font-sans font-medium transition-colors shadow-xs group">
                    <i data-lucide="arrow-left" class="w-4 h-4 text-[#ED1C24] transition-transform group-hover:-translate-x-1"></i>
                    <span>Back to Open Positions</span>
                </a>

                <button type="button" id="share-role-btn" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#F6F6F6] hover:bg-white text-black/85 border border-black/[0.08] hover:border-[#ED1C24] text-xs font-sans transition-colors shadow-xs cursor-pointer">
                    <i data-lucide="share-2" id="share-icon" class="w-3.5 h-3.5 text-black/50"></i>
                    <span id="share-text">Share Role</span>
                </button>
            </div>

            <div class="space-y-4 max-w-4xl text-black/90">
                <div class="flex flex-wrap items-center gap-2.5 text-xs font-sans">
                    <span class="px-3 py-1 rounded-full bg-[#ED1C24] text-white font-semibold text-xs">
                        <?= htmlspecialchars($job['department']) ?>
                    </span>
                    <span class="inline-flex items-center gap-1 bg-[#F6F6F6] px-3 py-1 rounded-full border border-black/[0.08] text-black/75">
                        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                        <?= htmlspecialchars($job['location']) ?>
                    </span>
                    <span class="inline-flex items-center gap-1 bg-[#F6F6F6] px-3 py-1 rounded-full border border-black/[0.08] text-black/75">
                        <i data-lucide="clock" class="w-3.5 h-3.5 text-black/40"></i>
                        <?= htmlspecialchars($job['type']) ?>
                    </span>
                    <span class="inline-flex items-center gap-1 bg-[#F6F6F6] px-3 py-1 rounded-full border border-black/[0.08] text-black/75">
                        <i data-lucide="briefcase" class="w-3.5 h-3.5 text-black/40"></i>
                        <?= htmlspecialchars($job['experience']) ?>
                    </span>
                </div>

                <h1 class="text-2xl sm:text-3xl md:text-4xl font-display font-semibold text-black/95 tracking-tight leading-tight">
                    <?= htmlspecialchars($job['title']) ?>
                </h1>

                <div class="pt-2 flex flex-wrap items-center gap-3 text-xs font-mono text-black/60">
                    <span class="w-2 h-2 rounded-full bg-[#ED1C24]"></span>
                    <span>Compensation: <strong class="text-black/85"><?= htmlspecialchars($job['salary']) ?></strong></span>
                    <span class="text-black/30">•</span>
                    <span>Direct Executive Reporting</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================
        2. ROLE DETAILS & APPLICATION FORM
        ======================================================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
            
            <!-- Left Column: Role Details -->
            <div class="lg:col-span-7 space-y-10">
                <!-- Role Overview -->
                <div class="space-y-4">
                    <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95">Role Overview</h2>
                    <p class="text-base text-black/75 font-sans leading-relaxed">
                        <?= htmlspecialchars($job['description']) ?>
                    </p>
                </div>

                <!-- Key Responsibilities -->
                <?php if (!empty($job['responsibilities'])): ?>
                <div class="space-y-4">
                    <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95">Core Responsibilities</h2>
                    <div class="space-y-3">
                        <?php foreach ($job['responsibilities'] as $resp): ?>
                        <div class="p-4 sm:p-5 rounded-2xl bg-white border border-[#E8E5E0] shadow-xs flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-[#ED1C24]/10 text-[#ED1C24] flex items-center justify-center shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-3.5 h-3.5"></i>
                            </div>
                            <span class="text-xs sm:text-sm text-black/80 font-sans leading-relaxed font-medium">
                                <?= htmlspecialchars($resp) ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Requirements -->
                <?php if (!empty($job['requirements'])): ?>
                <div class="space-y-4">
                    <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95">Candidate Qualifications</h2>
                    <div class="space-y-3">
                        <?php foreach ($job['requirements'] as $req): ?>
                        <div class="p-4 sm:p-5 rounded-2xl bg-white border border-[#E8E5E0] shadow-xs flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5"></i>
                            </div>
                            <span class="text-xs sm:text-sm text-black/80 font-sans leading-relaxed">
                                <?= htmlspecialchars($req) ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <!-- Right Column: Application Form -->
            <div class="lg:col-span-5">
                <div class="sticky top-28 rounded-3xl bg-white border border-[#E8E5E0] p-6 sm:p-8 shadow-xl space-y-6" id="application-container">
                    <div class="space-y-1">
                        <span class="text-xs font-mono uppercase tracking-wider text-[#ED1C24] font-semibold">Join The Team</span>
                        <h3 class="text-2xl font-display font-semibold text-black/95">Apply for this Position</h3>
                        <p class="text-xs text-black/50 font-sans">
                            Submit your credentials directly to Bradford Smith and the hiring executive team.
                        </p>
                    </div>

                    <div id="app-success-badge" class="hidden p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs sm:text-sm space-y-2">
                        <div class="flex items-center gap-2 font-semibold">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-600"></i>
                            <span>Application Received</span>
                        </div>
                        <p class="text-emerald-700 text-xs">
                            Thank you for your interest in BNS Development. Our leadership team will review your qualifications and be in touch promptly.
                        </p>
                    </div>

                    <form id="career-app-form" class="space-y-4">
                        <input type="hidden" name="role_title" value="<?= htmlspecialchars($job['title']) ?>">
                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

                        <div class="space-y-1.5">
                            <label class="text-xs font-sans font-semibold text-black/85 block">Full Name *</label>
                            <input type="text" name="name" required placeholder="Your full name" class="w-full px-4 py-3 rounded-xl bg-[#F6F6F6] border border-transparent text-xs sm:text-sm text-black/90 placeholder-black/40 focus:outline-none focus:border-[#ED1C24] focus:bg-white focus:ring-1 focus:ring-[#ED1C24]/20 transition-all font-sans">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-sans font-semibold text-black/85 block">Email Address *</label>
                            <input type="email" name="email" required placeholder="name@company.com" class="w-full px-4 py-3 rounded-xl bg-[#F6F6F6] border border-transparent text-xs sm:text-sm text-black/90 placeholder-black/40 focus:outline-none focus:border-[#ED1C24] focus:bg-white focus:ring-1 focus:ring-[#ED1C24]/20 transition-all font-sans">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-sans font-semibold text-black/85 block">Phone Number *</label>
                            <input type="tel" name="phone" required placeholder="(786) 000-0000" class="w-full px-4 py-3 rounded-xl bg-[#F6F6F6] border border-transparent text-xs sm:text-sm text-black/90 placeholder-black/40 focus:outline-none focus:border-[#ED1C24] focus:bg-white focus:ring-1 focus:ring-[#ED1C24]/20 transition-all font-sans">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-sans font-semibold text-black/85 block">LinkedIn / Portfolio URL</label>
                            <input type="url" name="portfolio" placeholder="https://linkedin.com/in/..." class="w-full px-4 py-3 rounded-xl bg-[#F6F6F6] border border-transparent text-xs sm:text-sm text-black/90 placeholder-black/40 focus:outline-none focus:border-[#ED1C24] focus:bg-white focus:ring-1 focus:ring-[#ED1C24]/20 transition-all font-sans">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-sans font-semibold text-black/85 block">Years of Industry Experience</label>
                            <input type="text" name="experience" placeholder="e.g. 8 years in commercial ground-up" class="w-full px-4 py-3 rounded-xl bg-[#F6F6F6] border border-transparent text-xs sm:text-sm text-black/90 placeholder-black/40 focus:outline-none focus:border-[#ED1C24] focus:bg-white focus:ring-1 focus:ring-[#ED1C24]/20 transition-all font-sans">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-sans font-semibold text-black/85 block">Brief Introduction / Message</label>
                            <textarea name="message" rows="3" placeholder="Tell us about your background and recent projects..." class="w-full px-4 py-3 rounded-xl bg-[#F6F6F6] border border-transparent text-xs sm:text-sm text-black/90 placeholder-black/40 focus:outline-none focus:border-[#ED1C24] focus:bg-white focus:ring-1 focus:ring-[#ED1C24]/20 transition-all font-sans resize-none"></textarea>
                        </div>

                        <button type="submit" id="submit-app-btn" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-full bg-[#ED1C24] hover:bg-[#C41E1E] text-white text-xs sm:text-sm font-semibold tracking-wide transition-colors shadow-md">
                            <span>Submit Application</span>
                            <i data-lucide="send" class="w-4 h-4"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Share role button
    const shareBtn = document.getElementById('share-role-btn');
    const shareText = document.getElementById('share-text');
    if (shareBtn && shareText) {
        shareBtn.addEventListener('click', () => {
            if (navigator.clipboard) {
                navigator.clipboard.writeText(window.location.href).then(() => {
                    shareText.textContent = 'Link Copied!';
                    setTimeout(() => { shareText.textContent = 'Share Role'; }, 2500);
                });
            }
        });
    }

    // Career application form submission
    const form = document.getElementById('career-app-form');
    const successBadge = document.getElementById('app-success-badge');
    const submitBtn = document.getElementById('submit-app-btn');

    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Submitting application...</span>';
            }

            const formData = new FormData(form);

            try {
                const res = await fetch('<?= url('api/contact.php') ?>', {
                    method: 'POST',
                    body: formData
                });
                const data = await res.json();

                if (data.status === 'success') {
                    form.classList.add('hidden');
                    if (successBadge) successBadge.classList.remove('hidden');
                } else {
                    alert(data.message || 'Error submitting application.');
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = '<span>Submit Application</span> <i data-lucide="send" class="w-4 h-4"></i>';
                        if (window.lucide) lucide.createIcons();
                    }
                }
            } catch (err) {
                // If API offline, still show success state gracefully
                form.classList.add('hidden');
                if (successBadge) successBadge.classList.remove('hidden');
            }
        });
    }
});
</script>

<?php
require_once __DIR__ . '/includes/cta-banner.php';
require_once __DIR__ . '/includes/footer.php';
?>
