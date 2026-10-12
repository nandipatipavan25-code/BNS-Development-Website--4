import React, { useState, useEffect } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { Send, Check, RefreshCw, Mail, Phone, MapPin, Building2, ChevronDown, CheckCircle2, ArrowRight } from 'lucide-react';

const PROJECT_TYPES = [
  'Pre-Development Consultation',
  'Design-Build Delivery',
  'Luxury Residential',
  'Commercial Development',
  'Ground-Up Construction',
  'Tenant Improvements',
];

/**
 * MailboxContactSection
 * Precision recreation of the reference animation from "Contact us page reference .mp4":
 * 1. Form card with envelope silhouette backing
 * 2. User submits -> card condenses into paper letter sliding into envelope pocket
 * 3. Top flap folds down 180 degrees & gets stamped with crimson red wax seal
 * 4. Envelope tilts in 3D perspective and glides into position
 * 5. Architectural 3D graphite mailbox appears on wooden post
 * 6. Mailbox curved front door swings down open flat
 * 7. Envelope glides smoothly across door and slides directly inside dark mailbox cavity
 * 8. Mailbox door swings back up and snaps shut
 * 9. Red flag flips up 90 degrees (signaling mail delivered)
 * 10. Mailbox fades out -> Success card fades in: "Thank you, message received."
 * 11. Pill button transitions smoothly to "Send Another Message" / "Explore Projects"
 */
export default function MailboxContactSection({ setActivePage = () => {} }) {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    company: '',
    projectType: 'Pre-Development Consultation',
    message: '',
  });

  const [errors, setErrors] = useState({});
  const [animStage, setAnimStage] = useState('idle'); 
  // 'idle' | 'folding' | 'flying' | 'door_open' | 'glide_in' | 'door_close' | 'flag_up' | 'delivered'
  const [buttonMorphed, setButtonMorphed] = useState(false);

  const validate = () => {
    const newErrors = {};
    if (!formData.name.trim()) newErrors.name = 'Full name is required';
    if (!formData.email.trim()) {
      newErrors.email = 'Email address is required';
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email)) {
      newErrors.email = 'Please enter a valid email address';
    }
    if (!formData.message.trim()) newErrors.message = 'Please provide a brief project summary';
    setErrors(newErrors);
    return Object.keys(newErrors).length === 0;
  };

  const handleSubmit = (e) => {
    if (e) e.preventDefault();
    if (!validate()) return;

    // Start reference animation sequence
    setAnimStage('folding');
    setButtonMorphed(false);
  };

  // Orchestrate the frame-by-frame animation sequence
  useEffect(() => {
    if (animStage === 'folding') {
      // 0ms - 1300ms: Card slides into envelope, flap folds, wax seal stamps
      const timer = setTimeout(() => {
        setAnimStage('flying');
      }, 1400);
      return () => clearTimeout(timer);
    }

    if (animStage === 'flying') {
      // 1400ms - 2400ms: Envelope tilts in 3D, mailbox fades in
      const timer = setTimeout(() => {
        setAnimStage('door_open');
      }, 1000);
      return () => clearTimeout(timer);
    }

    if (animStage === 'door_open') {
      // 2400ms - 3100ms: Mailbox door swings down 90 deg flat
      const timer = setTimeout(() => {
        setAnimStage('glide_in');
      }, 700);
      return () => clearTimeout(timer);
    }

    if (animStage === 'glide_in') {
      // 3100ms - 4200ms: Envelope glides straight into mailbox cavity
      const timer = setTimeout(() => {
        setAnimStage('door_close');
      }, 1100);
      return () => clearTimeout(timer);
    }

    if (animStage === 'door_close') {
      // 4200ms - 4900ms: Mailbox door swings back up and latches shut
      const timer = setTimeout(() => {
        setAnimStage('flag_up');
      }, 700);
      return () => clearTimeout(timer);
    }

    if (animStage === 'flag_up') {
      // 4900ms - 5700ms: Red flag flips up 90 deg upright
      const timer = setTimeout(() => {
        setAnimStage('delivered');
      }, 1000);
      return () => clearTimeout(timer);
    }

    if (animStage === 'delivered') {
      // After delivered card shows, morph button text smoothly like frame f_028
      const timer = setTimeout(() => {
        setButtonMorphed(true);
      }, 1200);
      return () => clearTimeout(timer);
    }
  }, [animStage]);

  const handleReset = () => {
    setAnimStage('idle');
    setButtonMorphed(false);
    setFormData({
      name: '',
      email: '',
      phone: '',
      company: '',
      projectType: 'Pre-Development Consultation',
      message: '',
    });
    setErrors({});
  };

  const isAnimating = animStage !== 'idle' && animStage !== 'delivered';

  return (
    <div className="relative w-full">
      {/* ============================================================
          MAIN ANIMATION & FORM STAGE
          Container styled to support 3D perspective and responsive bounds
          ============================================================ */}
      <div className="relative w-full max-w-4xl mx-auto min-h-[580px] sm:min-h-[620px] flex items-center justify-center py-6 sm:py-10">

        {/* --------------------------------------------------------
            STATE 1: FORM INPUT CARD WITH ENVELOPE SILHOUETTE
            (Frames f_001 - f_004)
            -------------------------------------------------------- */}
        <AnimatePresence mode="wait">
          {animStage === 'idle' && (
            <motion.div
              key="contact-form-stage"
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              exit={{
                opacity: 0,
                scale: 0.96,
                transition: { duration: 0.3 }
              }}
              className="relative w-full max-w-2xl px-2 sm:px-4"
            >
              {/* Back Envelope Peak (Flap peeking out behind the form card, exactly like f_001.jpg) */}
              <div className="absolute -top-10 sm:-top-12 left-1/2 -translate-x-1/2 w-[85%] sm:w-[88%] h-24 pointer-events-none select-none z-0">
                <svg viewBox="0 0 500 120" className="w-full h-full drop-shadow-[0_-4px_16px_rgba(0,0,0,0.18)]">
                  <path
                    d="M 10 120 L 250 15 L 490 120 Z"
                    fill="#F5F5F3"
                    stroke="rgba(255,255,255,0.4)"
                    strokeWidth="1"
                  />
                  {/* Subtle crease highlight */}
                  <path
                    d="M 250 15 L 250 120"
                    stroke="rgba(0,0,0,0.06)"
                    strokeWidth="1"
                    strokeDasharray="4 4"
                  />
                </svg>
              </div>

              {/* Front Form Card */}
              <div className="relative z-10 bg-[#FAFAF8] text-[#181818] rounded-3xl p-6 sm:p-10 shadow-[0_24px_60px_-15px_rgba(0,0,0,0.5)] border border-white/20 backdrop-blur-xl">
                
                {/* Form Header */}
                <div className="flex items-center justify-between pb-6 border-b border-black/[0.08]">
                  <div>
                    <div className="flex items-center gap-2">
                      <span className="w-2 h-2 rounded-full bg-[#D71920]" />
                      <span className="text-[11px] font-mono uppercase tracking-wider text-black/50 font-semibold">
                        Direct Project Enquiry
                      </span>
                    </div>
                    <h3 className="text-xl sm:text-2xl font-display font-semibold text-black/90 pt-1 tracking-tight">
                      Tell Us About Your Project
                    </h3>
                  </div>

                  <div className="hidden sm:flex items-center gap-2 text-xs font-mono text-black/40 bg-black/[0.04] px-3 py-1.5 rounded-full">
                    <Mail className="w-3.5 h-3.5 text-[#D71920]" />
                    <span>Executive Delivery</span>
                  </div>
                </div>

                {/* Form Fields */}
                <form onSubmit={handleSubmit} className="space-y-4 pt-6" noValidate>
                  
                  {/* Row 1: Name & Email */}
                  <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div className="space-y-1.5">
                      <label className="text-xs font-sans font-semibold text-black/75 flex items-center justify-between">
                        <span>Full Name <span className="text-[#D71920]">*</span></span>
                        {errors.name && <span className="text-[10px] text-[#D71920] font-normal">{errors.name}</span>}
                      </label>
                      <input
                        type="text"
                        value={formData.name}
                        onChange={(e) => {
                          setFormData({ ...formData, name: e.target.value });
                          if (errors.name) setErrors({ ...errors, name: null });
                        }}
                        placeholder="John Doe"
                        className={`w-full px-4 py-3 rounded-xl bg-white border ${
                          errors.name ? 'border-[#D71920] ring-1 ring-[#D71920]' : 'border-black/[0.08]'
                        } text-sm text-black/90 placeholder-black/35 focus:outline-none focus:border-[#D71920] focus:ring-2 focus:ring-[#D71920]/15 transition-all font-sans`}
                      />
                    </div>

                    <div className="space-y-1.5">
                      <label className="text-xs font-sans font-semibold text-black/75 flex items-center justify-between">
                        <span>Email Address <span className="text-[#D71920]">*</span></span>
                        {errors.email && <span className="text-[10px] text-[#D71920] font-normal">{errors.email}</span>}
                      </label>
                      <input
                        type="email"
                        value={formData.email}
                        onChange={(e) => {
                          setFormData({ ...formData, email: e.target.value });
                          if (errors.email) setErrors({ ...errors, email: null });
                        }}
                        placeholder="john@example.com"
                        className={`w-full px-4 py-3 rounded-xl bg-white border ${
                          errors.email ? 'border-[#D71920] ring-1 ring-[#D71920]' : 'border-black/[0.08]'
                        } text-sm text-black/90 placeholder-black/35 focus:outline-none focus:border-[#D71920] focus:ring-2 focus:ring-[#D71920]/15 transition-all font-sans`}
                      />
                    </div>
                  </div>

                  {/* Row 2: Phone & Company */}
                  <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div className="space-y-1.5">
                      <label className="text-xs font-sans font-semibold text-black/75 block">
                        Phone Number
                      </label>
                      <input
                        type="tel"
                        value={formData.phone}
                        onChange={(e) => setFormData({ ...formData, phone: e.target.value })}
                        placeholder="(786) 000-0000"
                        className="w-full px-4 py-3 rounded-xl bg-white border border-black/[0.08] text-sm text-black/90 placeholder-black/35 focus:outline-none focus:border-[#D71920] focus:ring-2 focus:ring-[#D71920]/15 transition-all font-sans"
                      />
                    </div>

                    <div className="space-y-1.5">
                      <label className="text-xs font-sans font-semibold text-black/75 block">
                        Company / Organization
                      </label>
                      <input
                        type="text"
                        value={formData.company}
                        onChange={(e) => setFormData({ ...formData, company: e.target.value })}
                        placeholder="Company or Estate Name"
                        className="w-full px-4 py-3 rounded-xl bg-white border border-black/[0.08] text-sm text-black/90 placeholder-black/35 focus:outline-none focus:border-[#D71920] focus:ring-2 focus:ring-[#D71920]/15 transition-all font-sans"
                      />
                    </div>
                  </div>

                  {/* Row 3: Project Type */}
                  <div className="space-y-1.5">
                    <label className="text-xs font-sans font-semibold text-black/75 block">
                      Project Type
                    </label>
                    <div className="relative">
                      <select
                        value={formData.projectType}
                        onChange={(e) => setFormData({ ...formData, projectType: e.target.value })}
                        className="w-full px-4 py-3 rounded-xl bg-white border border-black/[0.08] text-sm text-black/90 appearance-none focus:outline-none focus:border-[#D71920] focus:ring-2 focus:ring-[#D71920]/15 transition-all font-sans cursor-pointer pr-10"
                      >
                        {PROJECT_TYPES.map((pt) => (
                          <option key={pt} value={pt}>{pt}</option>
                        ))}
                      </select>
                      <ChevronDown className="w-4 h-4 text-black/50 absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none" />
                    </div>
                  </div>

                  {/* Row 4: Message */}
                  <div className="space-y-1.5">
                    <label className="text-xs font-sans font-semibold text-black/75 flex items-center justify-between">
                      <span>Project Details / Message <span className="text-[#D71920]">*</span></span>
                      {errors.message && <span className="text-[10px] text-[#D71920] font-normal">{errors.message}</span>}
                    </label>
                    <textarea
                      rows={3}
                      value={formData.message}
                      onChange={(e) => {
                        setFormData({ ...formData, message: e.target.value });
                        if (errors.message) setErrors({ ...errors, message: null });
                      }}
                      placeholder="Briefly describe your vision, location, target timeline, or scope..."
                      className={`w-full px-4 py-3 rounded-xl bg-white border ${
                        errors.message ? 'border-[#D71920] ring-1 ring-[#D71920]' : 'border-black/[0.08]'
                      } text-sm text-black/90 placeholder-black/35 focus:outline-none focus:border-[#D71920] focus:ring-2 focus:ring-[#D71920]/15 transition-all font-sans resize-none`}
                    />
                  </div>

                  {/* Submit CTA Button (Exact pill style matching f_001.jpg) */}
                  <div className="pt-2">
                    <button
                      type="submit"
                      className="w-full py-4 px-6 rounded-full bg-[#202428] hover:bg-[#D71920] text-white text-sm font-sans font-medium tracking-wide transition-all duration-300 shadow-md hover:shadow-xl flex items-center justify-center gap-2.5 cursor-pointer group select-none active:scale-[0.99]"
                    >
                      <span>Send message</span>
                      <svg
                        className="w-4 h-4 transition-transform group-hover:translate-x-0.5"
                        viewBox="0 0 20 20"
                        fill="none"
                        stroke="currentColor"
                        strokeWidth="1.7"
                      >
                        <path d="M 2 5 L 18 5 L 18 15 L 2 15 Z" rx="2" />
                        <path d="M 2 6 L 10 11 L 18 6" />
                      </svg>
                    </button>
                  </div>

                </form>

              </div>
            </motion.div>
          )}
        </AnimatePresence>

        {/* --------------------------------------------------------
            STATE 2: THE FULL ENVELOPE + MAILBOX 3D ANIMATION SEQUENCE
            (Frames f_002 - f_022)
            -------------------------------------------------------- */}
        {isAnimating && (
          <div className="relative w-full max-w-2xl h-[460px] sm:h-[500px] flex items-center justify-center overflow-visible select-none [perspective:1400px] scale-[0.8] xs:scale-[0.88] sm:scale-100 origin-center">
            
            {/* -----------------------------------------------
                1. ENVELOPE (Folds, Seals, Tilts in 3D, and Glides into Mailbox)
                ----------------------------------------------- */}
            <motion.div
              className="absolute z-20"
              initial={{
                x: 0,
                y: 0,
                scale: 1,
                rotateX: 0,
                rotateY: 0,
                rotateZ: 0,
                opacity: 1,
              }}
              animate={{
                // Coordinated movement aligning precisely with mailbox mouth at x = +122px, y = -15px
                x:
                  animStage === 'folding' ? 0 :
                  animStage === 'flying' ? -120 :
                  animStage === 'door_open' ? -120 :
                  animStage === 'glide_in' ? 122 :
                  130,
                y:
                  animStage === 'folding' ? 0 :
                  animStage === 'flying' ? 35 :
                  animStage === 'door_open' ? 35 :
                  animStage === 'glide_in' ? -15 :
                  -15,
                scale:
                  animStage === 'folding' ? 1 :
                  animStage === 'flying' ? 0.60 :
                  animStage === 'door_open' ? 0.60 :
                  animStage === 'glide_in' ? 0.24 :
                  0.18,
                rotateX:
                  animStage === 'folding' ? 0 :
                  animStage === 'flying' ? 62 :
                  animStage === 'door_open' ? 62 :
                  animStage === 'glide_in' ? 55 :
                  50,
                rotateY:
                  animStage === 'folding' ? 0 :
                  animStage === 'flying' ? -5 :
                  animStage === 'door_open' ? -5 :
                  animStage === 'glide_in' ? 18 :
                  20,
                rotateZ:
                  animStage === 'folding' ? 0 :
                  animStage === 'flying' ? -16 :
                  animStage === 'door_open' ? -16 :
                  animStage === 'glide_in' ? -12 :
                  -10,
                opacity:
                  animStage === 'glide_in' ? [1, 0.95, 0.4, 0] :
                  animStage === 'door_close' || animStage === 'flag_up' ? 0 :
                  1,
              }}
              transition={{
                duration:
                  animStage === 'folding' ? 1.2 :
                  animStage === 'flying' ? 0.9 :
                  animStage === 'glide_in' ? 1.05 :
                  0.6,
                ease: [0.25, 0.1, 0.25, 1],
              }}
              style={{
                transformStyle: 'preserve-3d',
              }}
            >
              {/* Ground Shadow underneath the 3D Envelope */}
              {(animStage === 'flying' || animStage === 'door_open' || animStage === 'glide_in') && (
                <motion.div
                  initial={{ opacity: 0 }}
                  animate={{
                    opacity: animStage === 'glide_in' ? [0.4, 0.2, 0] : 0.45,
                    scale: animStage === 'glide_in' ? 0.4 : 0.9,
                  }}
                  className="absolute -bottom-8 left-1/2 -translate-x-1/2 w-[280px] h-10 rounded-full bg-black/40 blur-xl pointer-events-none"
                />
              )}

              {/* Envelope Body Frame (Standard 360 x 200 Paper Envelope) */}
              <div className="relative w-[340px] sm:w-[380px] h-[190px] sm:h-[210px] bg-[#FFFFFF] rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.35)] border border-black/[0.08] overflow-visible">
                
                {/* SLIDING PAPER LETTER (The user's submitted enquiry note) */}
                <motion.div
                  initial={{ y: -60, scale: 0.95, opacity: 1 }}
                  animate={{
                    y: animStage === 'folding' ? [ -60, 20 ] : 20,
                    scale: animStage === 'folding' ? [ 0.95, 0.88 ] : 0.88,
                    opacity: animStage === 'folding' ? 1 : 0.8,
                  }}
                  transition={{ duration: 0.8, ease: "easeInOut" }}
                  className="absolute inset-x-4 top-2 h-[170px] bg-[#FAFAF8] rounded-xl border border-black/[0.06] p-4 shadow-sm z-0 flex flex-col justify-between select-none"
                >
                  <div className="space-y-1.5">
                    <div className="flex items-center justify-between">
                      <span className="text-[10px] font-mono text-[#D71920] font-bold tracking-wider uppercase">
                        BNS ENQUIRY
                      </span>
                      <span className="text-[9px] font-mono text-black/40">
                        {formData.projectType || 'Consultation'}
                      </span>
                    </div>
                    <p className="text-xs font-semibold text-black/85 truncate">
                      {formData.name || 'Client Enquiry'}
                    </p>
                    <p className="text-[11px] text-black/60 line-clamp-3 font-sans leading-relaxed">
                      "{formData.message || 'Have a project in mind. Looking forward to connecting.'}"
                    </p>
                  </div>
                  <div className="text-[9px] font-mono text-black/35 pt-1 border-t border-black/[0.05]">
                    {formData.email || 'contact@client.com'}
                  </div>
                </motion.div>

                {/* ENVELOPE FRONT POCKET FLAPS (Left, Right, Bottom SVG Triangles) */}
                <svg
                  className="absolute inset-0 w-full h-full pointer-events-none z-10"
                  viewBox="0 0 380 210"
                  preserveAspectRatio="none"
                >
                  {/* Left Side Flap */}
                  <polygon
                    points="0,0 190,105 0,210"
                    fill="#F7F7F5"
                    stroke="rgba(0,0,0,0.06)"
                    strokeWidth="1"
                  />
                  {/* Right Side Flap */}
                  <polygon
                    points="380,0 190,105 380,210"
                    fill="#F3F3F1"
                    stroke="rgba(0,0,0,0.06)"
                    strokeWidth="1"
                  />
                  {/* Bottom Triangle Flap */}
                  <polygon
                    points="0,210 190,95 380,210"
                    fill="#EEEEEC"
                    stroke="rgba(0,0,0,0.08)"
                    strokeWidth="1"
                  />
                </svg>

                {/* TOP TRIANGULAR FOLD FLAP (Folds down 180 degrees over the pocket) */}
                <motion.div
                  className="absolute top-0 left-0 right-0 h-[105px] origin-top z-20 pointer-events-none"
                  initial={{ rotateX: 0 }}
                  animate={{
                    rotateX: animStage === 'folding' ? [0, 180] : 180,
                  }}
                  transition={{
                    duration: 0.65,
                    delay: animStage === 'folding' ? 0.6 : 0,
                    ease: [0.4, 0, 0.2, 1],
                  }}
                  style={{
                    transformStyle: 'preserve-3d',
                  }}
                >
                  <svg
                    className="w-full h-full"
                    viewBox="0 0 380 105"
                    preserveAspectRatio="none"
                  >
                    <polygon
                      points="0,0 190,105 380,0"
                      fill="#FAFAF8"
                      stroke="rgba(0,0,0,0.08)"
                      strokeWidth="1"
                    />
                  </svg>
                </motion.div>

                {/* CRIMSON RED WAX SEAL STAMP (Embossed with BNS envelope seal, pops onto meeting point) */}
                <motion.div
                  initial={{ scale: 0, opacity: 0 }}
                  animate={{
                    scale: animStage === 'folding' ? [0, 1.35, 1] : 1,
                    opacity: 1,
                  }}
                  transition={{
                    delay: animStage === 'folding' ? 1.15 : 0,
                    type: "spring",
                    stiffness: 450,
                    damping: 22,
                  }}
                  className="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 rounded-full z-30 flex items-center justify-center select-none shadow-[0_6px_16px_rgba(215,25,32,0.45)] border-2 border-white/60"
                  style={{
                    background: 'radial-gradient(circle at 35% 35%, #ED1C24 0%, #D71920 60%, #900B10 100%)',
                  }}
                >
                  {/* Wax Seal Rim & Embossed Inner Icon */}
                  <div className="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center">
                    <svg viewBox="0 0 24 24" className="w-4 h-4 text-white fill-current drop-shadow-sm">
                      <path d="M 2 6 C 2 4.9 2.9 4 4 4 L 20 4 C 21.1 4 22 4.9 22 6 L 22 18 C 22 19.1 21.1 20 20 20 L 4 20 C 2.9 20 2 19.1 2 18 Z M 4 6 L 12 11 L 20 6 Z" />
                    </svg>
                  </div>
                </motion.div>

              </div>
            </motion.div>

            {/* -----------------------------------------------
                2. ARCHITECTURAL 3D MAILBOX ON WOODEN POST
                (Exact isometric recreation from f_010.jpg - f_022.jpg)
                ----------------------------------------------- */}
            <motion.div
              className="absolute left-1/2 -ml-[10px] top-1/2 -translate-y-1/2 z-10 pointer-events-none"
              initial={{ opacity: 0, x: 50, scale: 0.95 }}
              animate={{
                opacity:
                  animStage === 'flying' || animStage === 'door_open' || animStage === 'glide_in' || animStage === 'door_close' || animStage === 'flag_up'
                    ? 1
                    : 0,
                x:
                  animStage === 'flying' || animStage === 'door_open' || animStage === 'glide_in' || animStage === 'door_close' || animStage === 'flag_up'
                    ? 0
                    : 50,
                scale: 1,
              }}
              transition={{ duration: 0.7, ease: [0.16, 1, 0.3, 1] }}
            >
              <svg width="340" height="300" viewBox="0 0 340 300" fill="none" className="overflow-visible">
                <defs>
                  {/* Mailbox Curved Roof Gradient */}
                  <linearGradient id="mbRoofGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stopColor="#4A5258" />
                    <stop offset="25%" stopColor="#31373C" />
                    <stop offset="65%" stopColor="#202428" />
                    <stop offset="100%" stopColor="#14171A" />
                  </linearGradient>

                  {/* Mailbox Side Body Gradient */}
                  <linearGradient id="mbSideGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stopColor="#2C3136" />
                    <stop offset="100%" stopColor="#16191C" />
                  </linearGradient>

                  {/* Wooden Post Gradient */}
                  <linearGradient id="postWoodGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stopColor="#6E675D" />
                    <stop offset="50%" stopColor="#8A8275" />
                    <stop offset="100%" stopColor="#554F46" />
                  </linearGradient>

                  {/* Door Closed Gradient */}
                  <linearGradient id="mbDoorClosedGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stopColor="#353C42" />
                    <stop offset="60%" stopColor="#22262A" />
                    <stop offset="100%" stopColor="#15181A" />
                  </linearGradient>

                  {/* Door Open Ramp Gradient */}
                  <linearGradient id="mbDoorOpenGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stopColor="#24282C" />
                    <stop offset="100%" stopColor="#111315" />
                  </linearGradient>

                  {/* Brass Gold Clasp */}
                  <linearGradient id="brassGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stopColor="#F5D076" />
                    <stop offset="100%" stopColor="#B3892B" />
                  </linearGradient>

                  {/* Deep Cavity Interior Radial Shadow */}
                  <radialGradient id="interiorCavity" cx="60%" cy="50%" r="60%">
                    <stop offset="0%" stopColor="#1C2126" />
                    <stop offset="70%" stopColor="#0B0D0F" />
                    <stop offset="100%" stopColor="#050607" />
                  </radialGradient>
                </defs>

                {/* Soft Ground Shadow Under Wooden Post */}
                <ellipse cx="195" cy="275" rx="75" ry="14" fill="rgba(0,0,0,0.22)" filter="blur(6px)" />

                {/* Wooden Mailbox Post */}
                <rect x="187" y="175" width="18" height="98" rx="2" fill="url(#postWoodGrad)" />
                {/* Left shadow side on post */}
                <rect x="187" y="175" width="5" height="98" fill="rgba(0,0,0,0.25)" />

                {/* Mailbox Rear Cap (Dark rounded end in back-right) */}
                <path
                  d="M 235 90 C 235 68, 252 68, 258 82 L 258 135 L 235 145 Z"
                  fill="#15181A"
                />

                {/* Mailbox Cylinder Roof Curve (Extending isometric from front-left to back-right) */}
                <path
                  d="M 105 110 C 105 75, 160 75, 160 100 L 255 78 C 255 58, 205 58, 150 85 Z"
                  fill="url(#mbRoofGrad)"
                />

                {/* Mailbox Right Side Wall (Extruded flat wall facing viewer-right) */}
                <path
                  d="M 160 100 L 255 78 L 255 135 L 160 160 Z"
                  fill="url(#mbSideGrad)"
                  stroke="#171A1C"
                  strokeWidth="1.5"
                />

                {/* -----------------------------------------------
                    MAILBOX FRONT DOOR & INTERIOR CAVITY
                    Hinged at bottom (105, 165) - (160, 160)
                    ----------------------------------------------- */}

                {/* Dark Inner Cavity (Revealed when door swings down) */}
                <path
                  d="M 105 165 L 105 110 C 105 80, 160 80, 160 105 L 160 160 Z"
                  fill="url(#interiorCavity)"
                  stroke="#121517"
                  strokeWidth="2"
                />
                {/* Interior floor line where letter lands */}
                <path
                  d="M 107 163 L 158 158"
                  stroke="rgba(255,255,255,0.08)"
                  strokeWidth="1.5"
                />

                {/* ANIMATED FRONT DOOR (Swings down flat during door_open / glide_in, then shuts) */}
                {(animStage === 'door_open' || animStage === 'glide_in') ? (
                  // Door OPEN flat: projecting forward-left like a landing ramp (Matching f_015.jpg)
                  <g>
                    <path
                      d="M 105 165 L 68 198 C 52 212, 94 228, 118 205 L 160 160 Z"
                      fill="url(#mbDoorOpenGrad)"
                      stroke="#2E343A"
                      strokeWidth="1.5"
                    />
                    {/* Inner door plate rim */}
                    <path
                      d="M 103 166 L 73 194"
                      stroke="rgba(255,255,255,0.12)"
                      strokeWidth="1.2"
                    />
                    {/* Brass Handle at front tip */}
                    <rect x="80" y="202" width="10" height="4" rx="1.5" fill="url(#brassGrad)" transform="rotate(-30 85 204)" />
                  </g>
                ) : (
                  // Door CLOSED: arched front plate (Matching f_012.jpg & f_021.jpg)
                  <g>
                    <path
                      d="M 105 165 L 105 110 C 105 80, 160 80, 160 105 L 160 160 Z"
                      fill="url(#mbDoorClosedGrad)"
                      stroke="#141719"
                      strokeWidth="2"
                    />
                    {/* Subtle arch contour highlight */}
                    <path
                      d="M 109 162 L 109 112 C 109 85, 156 85, 156 108 L 156 157"
                      stroke="rgba(255,255,255,0.06)"
                      strokeWidth="1.2"
                      fill="none"
                    />
                    {/* Brass pull handle at top */}
                    <rect x="127" y="90" width="12" height="5" rx="1.5" fill="url(#brassGrad)" />
                  </g>
                )}

                {/* -----------------------------------------------
                    RED SIGNAL FLAG (Hinged on side at 220, 122)
                    Horizontal down initially -> flips UP 90 deg after letter enters
                    ----------------------------------------------- */}
                <motion.g
                  initial={{ rotate: 0 }}
                  animate={{
                    rotate:
                      animStage === 'flag_up'
                        ? -90
                        : 0,
                  }}
                  transition={{
                    type: "spring",
                    stiffness: 450,
                    damping: 24,
                  }}
                  style={{
                    transformOrigin: "220px 122px",
                  }}
                >
                  {/* Flag Pivot Arm */}
                  <path
                    d="M 220 122 L 196 122 L 196 110"
                    stroke="#D71920"
                    strokeWidth="3.5"
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    fill="none"
                  />
                  {/* Red Flag Head Plate */}
                  <rect
                    x="182"
                    y="104"
                    width="24"
                    height="16"
                    rx="2"
                    fill="#D71920"
                    stroke="#B8141A"
                    strokeWidth="1"
                  />
                  {/* Brass Pivot Screw */}
                  <circle cx="220" cy="122" r="3.5" fill="url(#brassGrad)" stroke="#16191C" strokeWidth="1" />
                </motion.g>

              </svg>
            </motion.div>

          </div>
        )}

        {/* --------------------------------------------------------
            STATE 3: SUCCESS CONFIRMATION CARD
            (Frames f_024 - f_033)
            -------------------------------------------------------- */}
        <AnimatePresence mode="wait">
          {animStage === 'delivered' && (
            <motion.div
              key="delivered-card"
              initial={{ opacity: 0, scale: 0.94, y: 15 }}
              animate={{ opacity: 1, scale: 1, y: 0 }}
              exit={{ opacity: 0, scale: 0.94 }}
              transition={{ duration: 0.45, ease: [0.16, 1, 0.3, 1] }}
              className="relative w-full max-w-xl px-4 z-20"
            >
              <div className="bg-[#FAFAF8] text-[#181818] rounded-3xl p-8 sm:p-10 shadow-[0_24px_60px_-15px_rgba(0,0,0,0.5)] border border-white/20 text-center space-y-6">
                
                {/* Red Wax Stamp Checkmark Badge */}
                <motion.div
                  initial={{ scale: 0 }}
                  animate={{ scale: [0, 1.25, 1] }}
                  transition={{ type: "spring", stiffness: 450, damping: 20 }}
                  className="w-16 h-16 rounded-full mx-auto flex items-center justify-center text-white shadow-[0_8px_24px_rgba(215,25,32,0.35)] border-2 border-white"
                  style={{
                    background: 'radial-gradient(circle at 35% 35%, #ED1C24 0%, #D71920 60%, #900B10 100%)',
                  }}
                >
                  <Check className="w-8 h-8 stroke-[3]" />
                </motion.div>

                {/* Narrative & Details */}
                <div className="space-y-2">
                  <div className="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#D71920]/[0.08] text-[#D71920] text-xs font-mono font-semibold tracking-wider uppercase">
                    <CheckCircle2 className="w-3.5 h-3.5" />
                    <span>Delivered into BNS Executive Mailbox</span>
                  </div>

                  <h3 className="text-2xl sm:text-3xl font-display font-semibold text-black/90 pt-2 tracking-tight">
                    Thank you, message received.
                  </h3>

                  <p className="text-sm text-black/65 max-w-md mx-auto font-sans leading-relaxed pt-1">
                    Your enquiry has been routed directly to our leadership team. We will review your project parameters and respond within 24 business hours.
                  </p>
                </div>

                {/* User Enquiry Quick Summary Chips */}
                <div className="p-4 rounded-2xl bg-black/[0.03] border border-black/[0.06] text-left text-xs font-sans space-y-1.5 max-w-md mx-auto">
                  <div className="flex justify-between text-black/50 font-mono text-[11px]">
                    <span>Sender:</span>
                    <span className="text-black/80 font-medium">{formData.name || 'Anonymous'}</span>
                  </div>
                  <div className="flex justify-between text-black/50 font-mono text-[11px]">
                    <span>Email:</span>
                    <span className="text-black/80 font-medium">{formData.email}</span>
                  </div>
                  <div className="flex justify-between text-black/50 font-mono text-[11px]">
                    <span>Project Focus:</span>
                    <span className="text-[#D71920] font-medium">{formData.projectType}</span>
                  </div>
                </div>

                {/* Action CTA Button (Pill button morphing from 'Thank you' to 'Send Another Message' matching f_028.jpg) */}
                <div className="pt-2 flex flex-col sm:flex-row items-center justify-center gap-3">
                  <button
                    type="button"
                    onClick={handleReset}
                    className="w-full sm:w-auto px-8 py-3.5 rounded-full bg-[#202428] hover:bg-[#D71920] text-white text-xs font-sans font-semibold tracking-wider transition-all duration-300 shadow-md hover:shadow-lg inline-flex items-center justify-center gap-2 cursor-pointer select-none"
                  >
                    {!buttonMorphed ? (
                      <>
                        <Check className="w-3.5 h-3.5" />
                        <span>Thank you, message received.</span>
                      </>
                    ) : (
                      <>
                        <span>Send Another Message</span>
                        <RefreshCw className="w-3.5 h-3.5" />
                      </>
                    )}
                  </button>

                  <button
                    type="button"
                    onClick={() => {
                      if (setActivePage) setActivePage('work');
                    }}
                    className="w-full sm:w-auto px-6 py-3.5 rounded-full bg-black/[0.05] hover:bg-black/[0.1] text-black/75 hover:text-black text-xs font-sans font-semibold tracking-wider transition-all duration-300 inline-flex items-center justify-center gap-1.5 cursor-pointer select-none"
                  >
                    <span>Explore Our Work</span>
                    <ArrowRight className="w-3.5 h-3.5" />
                  </button>
                </div>

              </div>
            </motion.div>
          )}
        </AnimatePresence>

      </div>
    </div>
  );
}
