<?php
$pageTitle = 'Terms & Conditions';
$metaDescription = 'Terms of use and conditions governing the BNS Development website and services.';
$activePage = 'terms';
require_once __DIR__ . '/includes/header.php';
?>

<div class="relative min-h-screen bg-transparent text-black/90 font-sans selection:bg-[#ED1C24] selection:text-white pb-16">
    <!-- ========================================================
        1. SLEEK BANNER (With Architectural Building Image)
        ======================================================== -->
    <section class="relative w-full overflow-hidden min-h-[360px] sm:min-h-[420px] flex flex-col justify-end pt-32 sm:pt-40 pb-12 sm:pb-14 bg-[#181818] border-b border-white/10 mb-8 sm:mb-12">
        <img src="<?= asset('images/about-hero.jpg') ?>" alt="BNS Architectural Building Landmark" class="absolute inset-0 w-full h-full object-cover object-center select-none brightness-95 contrast-[1.05]" loading="eager">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/45 to-black/20 pointer-events-none"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/40 to-transparent pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full space-y-3.5">
            <div class="flex items-center gap-2.5">
                <span class="w-6 h-[2px] bg-[#ED1C24]"></span>
                <span class="text-xs sm:text-sm font-sans tracking-widest text-[#d4d4d4] font-semibold">
                    Legal &amp; Compliance
                </span>
            </div>
            <h1 class="text-2xl sm:text-3xl md:text-[38px] lg:text-[38px] font-display font-semibold tracking-tight text-white leading-[44px]">
                Terms &amp; Conditions
            </h1>
        </div>
    </section>

    <!-- ========================================================
        2. LEGAL CONTENT (Single Clean Content Area)
        ======================================================== -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="space-y-10">
            
            <!-- Metadata & Introductory Statement -->
            <div class="space-y-4 pb-8 border-b border-black/[0.08]">
                <p class="text-xs sm:text-sm font-mono uppercase tracking-wider text-black/50">
                    Last Updated: October 2026
                </p>
                <p class="text-base sm:text-[17px] text-black/85 font-sans leading-relaxed">
                    Welcome to the BNS Development website. By accessing or using this website, you agree to these Terms &amp; Conditions. If you do not agree with these terms, please do not use this website.
                </p>
            </div>

            <!-- Section: Use of This Website -->
            <section class="space-y-3.5">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Use of This Website
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    The content provided on this website is intended for general informational purposes. You may view, access and use the website for lawful purposes only.
                </p>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    You agree not to use the website for unlawful purposes, attempt to gain unauthorized access, interfere with the website's operation, copy or reproduce website content without permission, or use website content in a way that could misrepresent BNS Development.
                </p>
            </section>

            <!-- Section: Website Content -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Website Content
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    BNS Development makes reasonable efforts to provide accurate and current information on this website. However, website content may change over time and may not always reflect the latest information about our services, projects or company.
                </p>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    Information on this website should not be considered a substitute for project-specific professional advice, contractual documents or formal agreements.
                </p>
            </section>

            <!-- Section: Project Information -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Project Information
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    Project information, descriptions, images, specifications and other materials displayed on this website are provided for informational purposes.
                </p>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    Past project experience does not guarantee that future projects will have the same scope, schedule, budget, results or other characteristics. Specific project terms and responsibilities are established through individual agreements and contracts.
                </p>
            </section>

            <!-- Section: Intellectual Property -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Intellectual Property
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    Unless otherwise stated, content on this website, including text, graphics, logos, images, design elements and other materials, is owned by or licensed to BNS Development. You may not reproduce, distribute, modify, publish or commercially use website content without prior written permission.
                </p>
            </section>

            <!-- Section: Third-Party Links -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Third-Party Links
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    This website may contain links to third-party websites. These links are provided for convenience and do not mean that BNS Development endorses or assumes responsibility for the content, services or practices of those websites.
                </p>
            </section>

            <!-- Section: User Submissions -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    User Submissions
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    If you submit information through our website, including project inquiries, resumes, documents or other materials, you represent that the information provided is accurate and that you have the right to submit it.
                </p>
            </section>

            <!-- Section: Contact Us -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Contact Information
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    Questions regarding these Terms &amp; Conditions may be directed to:
                </p>
                <div class="p-5 rounded-2xl bg-white border border-[#E8E5E0] space-y-1 text-sm font-sans">
                    <p class="font-semibold text-black/95"><?= SITE_NAME ?></p>
                    <p class="text-black/70">Email: <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-[#ED1C24] hover:underline"><?= CONTACT_EMAIL ?></a></p>
                    <p class="text-black/70">Phone: <a href="tel:7863683009" class="text-[#ED1C24] hover:underline"><?= CONTACT_PHONE ?></a></p>
                    <p class="text-black/70">Florida CGC License: CGC 1505391</p>
                </div>
            </section>

        </div>
    </main>
</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
