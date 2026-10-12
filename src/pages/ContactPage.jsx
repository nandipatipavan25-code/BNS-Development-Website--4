import React from 'react';
import { motion } from 'framer-motion';
import { Phone, Mail, MapPin, Clock, ArrowRight, ShieldCheck, Compass, Layers, Building2 } from 'lucide-react';
import ScrollReveal from '../components/ScrollReveal';
import TextRevealOnScroll from '../components/TextRevealOnScroll';
import MailboxContactSection from '../components/MailboxContactSection';

export default function ContactPage({ setActivePage = () => {} }) {
  const directChannels = [
    {
      icon: Phone,
      title: 'Telephone',
      detail: '(786) 368-3009',
      sub: 'Direct Line · Mon–Fri 8AM–6PM EST',
      action: 'tel:7863683009',
      actionText: 'Call Studio',
    },
    {
      icon: Mail,
      title: 'Executive Email',
      detail: 'contact@bns-development.com',
      sub: 'Enquiries, RFPs & Submittals',
      action: 'mailto:contact@bns-development.com',
      actionText: 'Send Direct Email',
    },
    {
      icon: Clock,
      title: 'Response Standard',
      detail: 'Within 24 Business Hours',
      sub: 'Dedicated Principal Review',
      action: null,
      actionText: 'Guaranteed Turnaround',
    },
  ];

  const studios = [
    {
      name: 'South Florida Studio',
      metro: 'Miami · Fort Lauderdale · Palm Beach',
      address: 'Brickell World Plaza, 600 Brickell Ave, Suite 1900, Miami, FL 33131',
      highlights: 'Luxury Residential, Commercial, Mixed-Use & Ground-Up Construction',
      tag: 'Headquarters & Studio',
    },
    {
      name: 'Central Texas Studio',
      metro: 'Austin · Dallas–Fort Worth Metro',
      address: '500 W 2nd St, Suite 1900, Austin, TX 78701',
      highlights: 'Commercial Development, Pre-Development Consultation & Tenant Improvements',
      tag: 'Regional Operations',
    },
  ];

  return (
    <div className="relative min-h-screen bg-[#0A0A0A] text-[#F5F5F3] font-sans selection:bg-[#D71920] selection:text-white overflow-hidden">
      
      {/* Subtle Architectural Dot Grid Background */}
      <div
        className="absolute inset-0 opacity-[0.035] pointer-events-none select-none z-0"
        style={{
          backgroundImage: 'radial-gradient(#ffffff 1px, transparent 1px)',
          backgroundSize: '32px 32px',
        }}
        aria-hidden="true"
      />

      {/* Atmospheric Ambient Glows */}
      <div
        className="absolute top-1/4 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-[#D71920]/[0.03] blur-[150px] rounded-full pointer-events-none z-0"
        aria-hidden="true"
      />
      <div
        className="absolute bottom-1/3 right-10 w-[500px] h-[300px] bg-white/[0.015] blur-[140px] rounded-full pointer-events-none z-0"
        aria-hidden="true"
      />

      {/* ========================================================
          1. HERO HEADER: TITLE, EYEBROW & CONCISE INTRODUCTION
          ======================================================== */}
      <section className="relative z-10 pt-32 sm:pt-40 lg:pt-44 pb-4 sm:pb-8">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          
          <div className="max-w-3xl mx-auto text-center space-y-5">
            {/* Architectural Eyebrow */}
            <ScrollReveal direction="up" delay={0.05}>
              <div className="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-white/[0.04] border border-white/[0.08] backdrop-blur-md">
                <span className="w-2 h-2 rounded-full bg-[#D71920]" />
                <span className="text-xs font-mono font-semibold uppercase tracking-wider text-white/70">
                  Contact BNS Development
                </span>
              </div>
            </ScrollReveal>

            {/* Main Headline */}
            <ScrollReveal direction="up" delay={0.1}>
              <h1 className="text-3xl sm:text-4xl md:text-5xl lg:text-[54px] font-display font-semibold tracking-tight text-white leading-[1.12]">
                Have a Project in Mind?<br />
                <span className="text-[#F5F5F3] font-light">Let's Build Something Exceptional.</span>
              </h1>
            </ScrollReveal>

            {/* Concise Introduction for Project Enquiries */}
            <ScrollReveal direction="up" delay={0.15}>
              <TextRevealOnScroll
                text="Connect with BNS Development to explore your project parameters, evaluate site potential, and chart the ideal path from planning to execution across South Florida and Central Texas."
                className="text-[15px] sm:text-[17px] text-white/65 font-sans leading-relaxed max-w-2xl mx-auto"
                primaryColor="rgba(245, 245, 243, 0.90)"
                mutedColor="rgba(245, 245, 243, 0.30)"
                offset={['start 95%', 'start 75%']}
              />
            </ScrollReveal>

            {/* Quick Action Badges */}
            <ScrollReveal direction="up" delay={0.2}>
              <div className="flex flex-wrap items-center justify-center gap-3 pt-2 text-xs font-mono text-white/60">
                <a
                  href="tel:7863683009"
                  className="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.03] hover:bg-white/[0.08] border border-white/[0.08] text-white/80 hover:text-white transition-all cursor-pointer"
                >
                  <Phone className="w-3.5 h-3.5 text-[#D71920]" />
                  <span>(786) 368-3009</span>
                </a>

                <a
                  href="mailto:contact@bns-development.com"
                  className="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.03] hover:bg-white/[0.08] border border-white/[0.08] text-white/80 hover:text-white transition-all cursor-pointer"
                >
                  <Mail className="w-3.5 h-3.5 text-[#D71920]" />
                  <span>contact@bns-development.com</span>
                </a>

                <div className="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.03] border border-white/[0.08] text-white/80">
                  <MapPin className="w-3.5 h-3.5 text-[#D71920]" />
                  <span>Miami · Brickell · Austin</span>
                </div>
              </div>
            </ScrollReveal>
          </div>

        </div>
      </section>

      {/* ========================================================
          2. REFERENCE-MATCHED ENVELOPE & MAILBOX ANIMATION STAGE
          Recreating the frame-by-frame folding, stamping, 3D mailbox,
          envelope entrance, and return confirmation sequence
          ======================================================== */}
      <section className="relative z-10 py-6 sm:py-10">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <ScrollReveal direction="up" delay={0.1}>
            <MailboxContactSection setActivePage={setActivePage} />
          </ScrollReveal>
        </div>
      </section>

      {/* ========================================================
          3. DIRECT CONTACT CHANNELS & EXECUTIVE STANDARDS
          ======================================================== */}
      <section className="relative z-10 py-12 sm:py-16 border-t border-white/[0.06] bg-[#0E0E0E]">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          
          <ScrollReveal direction="up" delay={0.05}>
            <div className="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6">
              {directChannels.map((item, idx) => {
                const IconComponent = item.icon;
                return (
                  <div
                    key={idx}
                    className="p-6 sm:p-7 rounded-2xl bg-[#151515] border border-white/[0.07] hover:border-white/15 transition-all duration-300 flex flex-col justify-between group"
                  >
                    <div className="space-y-3">
                      <div className="w-10 h-10 rounded-xl bg-white/[0.04] border border-white/[0.08] flex items-center justify-center text-[#D71920] group-hover:bg-[#D71920] group-hover:text-white transition-all duration-300">
                        <IconComponent className="w-5 h-5" />
                      </div>
                      
                      <div>
                        <span className="text-[11px] font-mono uppercase tracking-wider text-white/40 block">
                          {item.title}
                        </span>
                        <h4 className="text-lg font-sans font-semibold text-white/95 pt-0.5">
                          {item.detail}
                        </h4>
                        <p className="text-xs text-white/50 pt-1 font-sans">
                          {item.sub}
                        </p>
                      </div>
                    </div>

                    <div className="pt-4 mt-4 border-t border-white/[0.06]">
                      {item.action ? (
                        <a
                          href={item.action}
                          className="inline-flex items-center gap-1.5 text-xs font-mono text-[#D71920] hover:text-white transition-colors"
                        >
                          <span>{item.actionText}</span>
                          <ArrowRight className="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" />
                        </a>
                      ) : (
                        <div className="inline-flex items-center gap-1.5 text-xs font-mono text-white/40">
                          <ShieldCheck className="w-3.5 h-3.5 text-[#D71920]" />
                          <span>{item.actionText}</span>
                        </div>
                      )}
                    </div>
                  </div>
                );
              })}
            </div>
          </ScrollReveal>

        </div>
      </section>

      {/* ========================================================
          4. REGIONAL STUDIOS & OFFICE LOCATIONS
          ======================================================== */}
      <section className="relative z-10 py-14 sm:py-20 border-t border-white/[0.06] bg-[#0A0A0A]">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          
          <ScrollReveal direction="up" delay={0.05}>
            <div className="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10 sm:mb-12">
              <div className="space-y-2">
                <div className="flex items-center gap-2">
                  <span className="w-2 h-2 rounded-full bg-[#D71920]" />
                  <span className="text-xs font-mono uppercase tracking-wider text-white/50 font-semibold">
                    Regional Presence
                  </span>
                </div>
                <h2 className="text-2xl sm:text-3xl md:text-4xl font-display font-semibold text-white tracking-tight">
                  Studio Locations &amp; Regional Hubs
                </h2>
              </div>

              <p className="text-xs sm:text-sm text-white/50 font-sans max-w-md">
                Active operations and pre-development coordination across key metropolitan centers in Florida and Texas.
              </p>
            </div>
          </ScrollReveal>

          <div className="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            {studios.map((studio, idx) => (
              <ScrollReveal key={idx} direction="up" delay={0.1 + idx * 0.08}>
                <div className="p-7 sm:p-8 rounded-3xl bg-[#151515] border border-white/[0.08] hover:border-white/18 transition-all duration-300 space-y-4 group">
                  <div className="flex items-center justify-between">
                    <span className="px-3 py-1 rounded-full bg-[#D71920]/[0.1] text-[#D71920] border border-[#D71920]/20 text-[11px] font-mono uppercase tracking-wider font-semibold">
                      {studio.tag}
                    </span>
                    <span className="text-xs font-mono text-white/40">
                      Studio 0{idx + 1}
                    </span>
                  </div>

                  <div>
                    <h3 className="text-xl sm:text-2xl font-display font-semibold text-white group-hover:text-[#D71920] transition-colors">
                      {studio.name}
                    </h3>
                    <p className="text-xs font-mono text-white/50 pt-1">
                      {studio.metro}
                    </p>
                  </div>

                  <p className="text-sm text-white/70 font-sans leading-relaxed pt-1">
                    {studio.address}
                  </p>

                  <div className="pt-3 border-t border-white/[0.06]">
                    <span className="text-xs font-sans text-white/50 block">
                      Core Disciplines: <span className="text-white/80">{studio.highlights}</span>
                    </span>
                  </div>
                </div>
              </ScrollReveal>
            ))}
          </div>

        </div>
      </section>

    </div>
  );
}
