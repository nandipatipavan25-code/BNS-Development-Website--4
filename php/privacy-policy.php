<?php
$pageTitle = 'Privacy Policy';
$metaDescription = 'BNS Development privacy policy regarding data collection, security, and usage.';
$activePage = 'privacy';
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
                Privacy Policy
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
                    BNS Development (&ldquo;BNS Development,&rdquo; &ldquo;we,&rdquo; &ldquo;our,&rdquo; or &ldquo;us&rdquo;) respects your privacy and is committed to protecting the information you provide when you visit our website or contact us.
                </p>
            </div>

            <!-- Section: Information We Collect -->
            <section class="space-y-3.5">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Information We Collect
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    We may collect information that you voluntarily provide when you submit a contact form, submit a project inquiry, apply for a career opportunity, request information about our services, or communicate with us by email, phone or through our website.
                </p>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    This information may include your name, company name, email address, phone number, project information, resume and other information you choose to provide.
                </p>
            </section>

            <!-- Section: How We Use Your Information -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    How We Use Your Information
                </h2>
                <ul class="space-y-2.5 my-3 pl-5 list-disc text-[15px] sm:text-base text-black/75 font-sans leading-relaxed marker:text-[#ED1C24]">
                    <li>Respond to your inquiries</li>
                    <li>Understand your project requirements</li>
                    <li>Provide information about our services</li>
                    <li>Evaluate employment applications</li>
                    <li>Communicate with you regarding your inquiry</li>
                    <li>Improve our website, services and communications</li>
                    <li>Maintain business and communication records</li>
                </ul>
            </section>

            <!-- Section: Information Sharing -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Information Sharing
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    BNS Development does not sell or rent your personal information.
                </p>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    We may share information with service providers or professional partners when reasonably necessary to operate our website, respond to your inquiry or provide requested services. We may also disclose information when required by law or when necessary to protect our rights, property or safety.
                </p>
            </section>

            <!-- Section: Cookies and Analytics -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Cookies and Analytics
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    Our website may use cookies, analytics tools and similar technologies to understand website traffic, improve functionality and enhance the user experience. You may be able to manage or disable cookies through your browser settings.
                </p>
            </section>

            <!-- Section: Data Security -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Data Security
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    We take reasonable measures to protect information submitted through our website. However, no method of transmitting or storing information electronically can be guaranteed to be completely secure.
                </p>
            </section>

            <!-- Section: Third-Party Websites -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Third-Party Websites
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    Our website may contain links to third-party websites. BNS Development is not responsible for the privacy practices, content or security of external websites.
                </p>
            </section>

            <!-- Section: Contact Us -->
            <section class="space-y-3.5 pt-6 border-t border-black/[0.06]">
                <h2 class="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                    Contact Us
                </h2>
                <p class="text-[15px] sm:text-base text-black/75 font-sans leading-relaxed">
                    If you have questions about this Privacy Policy or how your information is handled, please contact us at:
                </p>
                <div class="p-5 rounded-2xl bg-white border border-[#E8E5E0] space-y-1 text-sm font-sans">
                    <p class="font-semibold text-black/95"><?= SITE_NAME ?></p>
                    <p class="text-black/70">Email: <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-[#ED1C24] hover:underline"><?= CONTACT_EMAIL ?></a></p>
                    <p class="text-black/70">Phone: <a href="tel:7863683009" class="text-[#ED1C24] hover:underline"><?= CONTACT_PHONE ?></a></p>
                    <p class="text-black/70">Headquarters: <?= OFFICE_FLORIDA ?></p>
                </div>
            </section>

        </div>
    </main>
</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
