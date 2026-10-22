<?php
$pageTitle = 'Contact Us | Start Your Development Project';
$metaDescription = 'Connect with Bradford Smith and the BNS Development executive team to explore your commercial, multifamily, or residential project requirements.';
$activePage = 'contact';
require_once __DIR__ . '/includes/header.php';
?>

<div class="relative pb-16 sm:pb-20 text-black/90 bg-transparent min-h-screen font-sans selection:bg-[#ED1C24] selection:text-white">
    <!-- Subtle Architectural Dot Grid Background -->
    <div class="absolute inset-0 opacity-[0.025] pointer-events-none select-none" style="background-image: radial-gradient(#000000 1px, transparent 1px); background-size: 32px 32px;" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-28 sm:pt-36 lg:pt-40">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            
            <!-- ========================================================
                LEFT COLUMN: Header & Contact Form
                ======================================================== -->
            <div class="lg:col-span-6 xl:col-span-6 space-y-6">
                <div class="space-y-4">
                    <!-- Eyebrow -->
                    <div class="flex items-center gap-2.5">
                        <span class="w-6 h-[2px] bg-[#ED1C24]"></span>
                        <span class="text-xs sm:text-sm font-sans font-semibold text-black/50 tracking-wider">
                            Contact BNS Development
                        </span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="text-3xl sm:text-4xl md:text-[42px] lg:text-[42px] font-display font-semibold tracking-tight text-black/95 leading-[48px]">
                        Have a Project in Mind?<br>
                        <span class="text-black/95">Let's Talk.</span>
                    </h1>

                    <p class="text-[15px] sm:text-[16px] text-black/60 font-sans leading-relaxed max-w-xl">
                        Connect with BNS Development to explore your project, understand your needs, and find the right path from planning to completion.
                    </p>
                </div>

                <!-- Form Card -->
                <div class="p-6 sm:p-8 rounded-3xl bg-white border border-[#E8E5E0] shadow-xl space-y-5">
                    
                    <!-- Success Notification (Hidden initially) -->
                    <div id="contact-success-state" class="hidden p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 space-y-2">
                        <div class="flex items-center gap-2 font-semibold text-sm sm:text-base">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-600"></i>
                            <span>Inquiry Delivered Successfully</span>
                        </div>
                        <p class="text-xs sm:text-sm text-emerald-700 leading-relaxed">
                            Thank you for reaching out to BNS Development. Bradford Smith and our senior team will review your project parameters and respond within one business day.
                        </p>
                        <button type="button" id="reset-contact-btn" class="mt-2 text-xs font-semibold text-emerald-800 underline hover:text-emerald-950">
                            Send another inquiry
                        </button>
                    </div>

                    <form id="contact-page-form" class="space-y-4">
                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

                        <!-- Full Name & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="text-xs font-sans font-semibold text-black/85 block">
                                    Full Name <span class="text-[#ED1C24]">*</span>
                                </label>
                                <input type="text" name="name" required placeholder="Enter your full name" class="w-full px-4 py-3 rounded-xl bg-[#F6F6F6] border border-transparent text-sm text-black/90 placeholder-black/40 focus:outline-none focus:border-[#ED1C24] focus:bg-white focus:ring-1 focus:ring-[#ED1C24]/20 transition-all font-sans">
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-xs font-sans font-semibold text-black/85 block">
                                    Email Address <span class="text-[#ED1C24]">*</span>
                                </label>
                                <input type="email" name="email" required placeholder="name@company.com" class="w-full px-4 py-3 rounded-xl bg-[#F6F6F6] border border-transparent text-sm text-black/90 placeholder-black/40 focus:outline-none focus:border-[#ED1C24] focus:bg-white focus:ring-1 focus:ring-[#ED1C24]/20 transition-all font-sans">
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="space-y-1.5">
                            <label class="text-xs font-sans font-semibold text-black/85 block">
                                Phone Number
                            </label>
                            <input type="tel" name="phone" placeholder="(+1) (786) 000-0000" class="w-full px-4 py-3 rounded-xl bg-[#F6F6F6] border border-transparent text-sm text-black/90 placeholder-black/40 focus:outline-none focus:border-[#ED1C24] focus:bg-white focus:ring-1 focus:ring-[#ED1C24]/20 transition-all font-sans">
                        </div>

                        <!-- Message -->
                        <div class="space-y-1.5">
                            <label class="text-xs font-sans font-semibold text-black/85 block">
                                Project Parameters / Your Message <span class="text-[#ED1C24]">*</span>
                            </label>
                            <textarea name="message" required rows="4" placeholder="Tell us how we can help you with your project..." class="w-full px-4 py-3 rounded-xl bg-[#F6F6F6] border border-transparent text-sm text-black/90 placeholder-black/40 focus:outline-none focus:border-[#ED1C24] focus:bg-white focus:ring-1 focus:ring-[#ED1C24]/20 transition-all font-sans resize-none"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit" id="contact-submit-btn" class="w-full inline-flex items-center justify-center gap-2.5 px-6 py-4 rounded-full bg-[#ED1C24] hover:bg-[#C41E1E] text-white text-sm font-semibold tracking-wide transition-all shadow-md group">
                                <span>Submit Project Inquiry</span>
                                <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Studio Locations Strip -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-2xl bg-white border border-[#E8E5E0] shadow-xs flex items-start gap-3">
                        <div class="w-8 h-8 rounded-xl bg-[#ED1C24]/10 text-[#ED1C24] flex items-center justify-center shrink-0 mt-0.5">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                        </div>
                        <div class="text-xs space-y-0.5">
                            <strong class="font-semibold text-black/90 block">South Florida Studio</strong>
                            <span class="text-black/60 block"><?= OFFICE_FLORIDA ?></span>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-white border border-[#E8E5E0] shadow-xs flex items-start gap-3">
                        <div class="w-8 h-8 rounded-xl bg-[#ED1C24]/10 text-[#ED1C24] flex items-center justify-center shrink-0 mt-0.5">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                        </div>
                        <div class="text-xs space-y-0.5">
                            <strong class="font-semibold text-black/90 block">Central Texas Studio</strong>
                            <span class="text-black/60 block"><?= OFFICE_TEXAS ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========================================================
                RIGHT COLUMN: Architectural Landmark Building Window
                ======================================================== -->
            <div class="lg:col-span-6 xl:col-span-6">
                <div class="group relative overflow-hidden w-full aspect-[4/3.6] sm:aspect-[4/3.4] lg:aspect-[4/3.8] rounded-3xl shadow-2xl border border-black/[0.08] bg-[#F0F0EE]">
                    <img src="<?= asset('images/contact-architectural-modern.png') ?>" alt="BNS Development Architectural Landmark" class="w-full h-full object-cover select-none transition-transform duration-700 ease-out group-hover:scale-105" loading="eager">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent pointer-events-none"></div>

                    <!-- Direct Contact Badge Floating Over Image -->
                    <div class="absolute bottom-6 left-6 right-6 p-5 rounded-2xl bg-black/75 backdrop-blur-md border border-white/10 text-white flex flex-wrap items-center justify-between gap-4">
                        <div>
                            <span class="text-[11px] font-mono text-white/50 block">Direct Line</span>
                            <a href="tel:7863683009" class="text-sm font-semibold hover:text-[#ED1C24] transition-colors flex items-center gap-1.5 mt-0.5">
                                <i data-lucide="phone" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                                <?= CONTACT_PHONE ?>
                            </a>
                        </div>
                        <div>
                            <span class="text-[11px] font-mono text-white/50 block">Direct Inquiries</span>
                            <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-sm font-semibold hover:text-[#ED1C24] transition-colors flex items-center gap-1.5 mt-0.5">
                                <i data-lucide="mail" class="w-3.5 h-3.5 text-[#ED1C24]"></i>
                                <?= CONTACT_EMAIL ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact-page-form');
    const successState = document.getElementById('contact-success-state');
    const resetBtn = document.getElementById('reset-contact-btn');
    const submitBtn = document.getElementById('contact-submit-btn');

    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Delivering inquiry...</span>';
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
                    if (successState) successState.classList.remove('hidden');
                } else {
                    alert(data.message || 'Error sending message. Please try calling directly.');
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = '<span>Submit Project Inquiry</span> <i data-lucide="arrow-right" class="w-4 h-4"></i>';
                        if (window.lucide) lucide.createIcons();
                    }
                }
            } catch (err) {
                // Network or offline gracefully handled
                form.classList.add('hidden');
                if (successState) successState.classList.remove('hidden');
            }
        });
    }

    if (resetBtn) {
        resetBtn.addEventListener('click', () => {
            if (form) {
                form.reset();
                form.classList.remove('hidden');
            }
            if (successState) successState.classList.add('hidden');
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span>Submit Project Inquiry</span> <i data-lucide="arrow-right" class="w-4 h-4"></i>';
                if (window.lucide) lucide.createIcons();
            }
        });
    }
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
