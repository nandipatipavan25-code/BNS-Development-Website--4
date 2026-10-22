/**
 * BNS Development — Contact Form AJAX Handler
 */
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('project-inquiry-form');
    const feedbackBox = document.getElementById('form-feedback');
    const submitBtn = document.getElementById('submit-btn');
    const submitBtnText = document.getElementById('submit-btn-text');

    if (!form) return;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // UI state: loading
        if (submitBtn) submitBtn.disabled = true;
        if (submitBtnText) submitBtnText.textContent = 'Submitting inquiry...';
        if (feedbackBox) {
            feedbackBox.classList.add('hidden');
            feedbackBox.innerHTML = '';
        }

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            });

            const data = await response.json();

            if (data.success) {
                if (feedbackBox) {
                    feedbackBox.className = 'p-5 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-300 text-sm leading-relaxed';
                    feedbackBox.innerHTML = `
                        <div class="flex items-center gap-2 font-semibold text-emerald-400 mb-1">
                            <i data-lucide="check-circle-2" class="w-4 h-4"></i>
                            <span>Inquiry Received</span>
                        </div>
                        <p>${data.message}</p>
                    `;
                    feedbackBox.classList.remove('hidden');
                    if (window.lucide) lucide.createIcons();
                }
                form.reset();
                if (submitBtnText) submitBtnText.textContent = 'Inquiry Sent Successfully';
            } else {
                let errorHtml = `<p class="font-semibold text-rose-400 mb-1">${data.message || 'Submission failed'}</p>`;
                if (data.errors && data.errors.length) {
                    errorHtml += '<ul class="list-disc list-inside space-y-1 text-xs opacity-90">';
                    data.errors.forEach(err => errorHtml += `<li>${err}</li>`);
                    errorHtml += '</ul>';
                }
                if (feedbackBox) {
                    feedbackBox.className = 'p-5 rounded-2xl bg-rose-500/10 border border-rose-500/20 text-rose-300 text-sm leading-relaxed';
                    feedbackBox.innerHTML = errorHtml;
                    feedbackBox.classList.remove('hidden');
                }
                if (submitBtn) submitBtn.disabled = false;
                if (submitBtnText) submitBtnText.textContent = 'Submit Project Inquiry';
            }
        } catch (err) {
            if (feedbackBox) {
                feedbackBox.className = 'p-5 rounded-2xl bg-rose-500/10 border border-rose-500/20 text-rose-300 text-sm leading-relaxed';
                feedbackBox.textContent = 'An unexpected connection error occurred. Please call us directly at (786) 368-3009.';
                feedbackBox.classList.remove('hidden');
            }
            if (submitBtn) submitBtn.disabled = false;
            if (submitBtnText) submitBtnText.textContent = 'Submit Project Inquiry';
        }
    });
});
