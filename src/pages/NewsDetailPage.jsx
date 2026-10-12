import React, { useState } from 'react';
import { motion } from 'framer-motion';
import {
  ArrowLeft,
  Calendar,
  Clock,
  MapPin,
  Share2,
  Check,
  Phone,
  Mail,
  Building2,
  ArrowRight,
  ArrowUpRight,
  Tag,
  User,
  ShieldCheck,
  Sparkles,
} from 'lucide-react';
import { newsData } from '../data/news';
import ScrollReveal from '../components/ScrollReveal';
import CardBeamBorder from '../components/CardBeamBorder';
import HouseCTA from '../components/HouseCTA';

export default function NewsDetailPage({
  newsItem,
  setActivePage,
  setSelectedNews,
}) {
  const [copied, setCopied] = useState(false);

  // Fallback resolution from URL hash or first item
  const getArticle = () => {
    if (newsItem) return newsItem;
    if (typeof window !== 'undefined') {
      const hashStr = window.location.hash || '';
      if (hashStr.includes('?')) {
        const queryStr = hashStr.split('?')[1];
        const params = new URLSearchParams(queryStr);
        const id = params.get('id');
        if (id) {
          const found = newsData.find((n) => n.id === id);
          if (found) return found;
        }
      }
    }
    return newsData[0];
  };

  const article = getArticle();

  // Related news items (the other 2)
  const relatedNews = newsData.filter((n) => n.id !== article.id);

  const handleShare = () => {
    if (navigator.clipboard) {
      navigator.clipboard.writeText(window.location.href);
      setCopied(true);
      setTimeout(() => setCopied(false), 2200);
    }
  };

  const handleSelectRelated = (item) => {
    if (setSelectedNews) setSelectedNews(item);
    if (setActivePage) setActivePage('news-detail', `id=${item.id}`);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

  return (
    <div className="relative pb-16 overflow-hidden bg-transparent text-black/90 min-h-screen font-sans selection:bg-[#ED1C24] selection:text-white">
      {/* Subtle Architectural Dot Grid Texture */}
      <div
        className="absolute inset-0 opacity-[0.025] pointer-events-none select-none"
        style={{
          backgroundImage: 'radial-gradient(#000000 1px, transparent 1px)',
          backgroundSize: '32px 32px',
        }}
        aria-hidden="true"
      />

      {/* ========================================================
          1. HERO BANNER: Full-Bleed Article Header
          ======================================================== */}
      <section className="relative w-full overflow-hidden min-h-[460px] sm:min-h-[520px] lg:min-h-[580px] flex flex-col justify-end pt-32 sm:pt-40 pb-12 sm:pb-16 bg-[#141518] mb-8 sm:mb-12">
        <img
          src={article.image}
          alt={article.title}
          className="absolute inset-0 w-full h-full object-cover select-none scale-105 brightness-[0.38] contrast-[1.12]"
          loading="eager"
        />
        {/* Dual Directional Architectural Gradients for Flawless Contrast */}
        <div className="absolute inset-0 bg-gradient-to-t from-[#0E0F12] via-[#0E0F12]/75 to-black/35 pointer-events-none" />
        <div className="absolute inset-0 bg-gradient-to-r from-[#0E0F12]/90 via-[#0E0F12]/60 to-transparent pointer-events-none" />
        <div
          className="absolute inset-0 opacity-[0.03] pointer-events-none"
          style={{
            backgroundImage: 'radial-gradient(#ffffff 1px, transparent 1px)',
            backgroundSize: '28px 28px',
          }}
          aria-hidden="true"
        />

        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full space-y-6">
          {/* Top Breadcrumb & Share Button */}
          <div className="flex items-center justify-between gap-4">
            <button
              type="button"
              onClick={() => {
                if (setActivePage) setActivePage('news');
                window.scrollTo({ top: 0, behavior: 'smooth' });
              }}
              className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 hover:bg-white text-white hover:text-black border border-white/20 hover:border-white text-xs sm:text-sm font-sans font-medium transition-all duration-300 backdrop-blur-md cursor-pointer"
            >
              <ArrowLeft className="w-4 h-4 text-[#ED1C24]" />
              <span>Back to News &amp; Press Releases</span>
            </button>

            <button
              type="button"
              onClick={handleShare}
              className="inline-flex items-center gap-2 px-3.5 py-2 rounded-full bg-white/10 hover:bg-white text-white hover:text-black border border-white/20 hover:border-white text-xs font-sans font-medium transition-all duration-300 backdrop-blur-md cursor-pointer"
              title="Share article URL"
            >
              {copied ? (
                <>
                  <Check className="w-3.5 h-3.5 text-emerald-400" />
                  <span>Link Copied</span>
                </>
              ) : (
                <>
                  <Share2 className="w-3.5 h-3.5 text-[#ED1C24]" />
                  <span>Share</span>
                </>
              )}
            </button>
          </div>

          {/* Article Title & Metadata */}
          <ScrollReveal direction="up" delay={0.05}>
            <div className="space-y-4 text-white">
              {/* Category Pill */}
              <div className="flex flex-wrap items-center gap-2.5">
                <span className="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#ED1C24] text-white text-xs font-mono uppercase tracking-wider font-semibold shadow-md">
                  <Tag className="w-3 h-3" />
                  <span>{article.category}</span>
                </span>
                <span className="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-white/10 text-white/90 border border-white/15 text-xs font-sans font-medium">
                  <Sparkles className="w-3 h-3 text-[#ED1C24]" />
                  <span>{article.tag}</span>
                </span>
              </div>

              {/* Main Headline */}
              <h1 className="text-2xl sm:text-4xl md:text-5xl lg:text-[52px] font-display font-semibold tracking-tight leading-[1.12] text-white">
                {article.title}
              </h1>

              {/* Subtitle / Dek */}
              {article.subtitle && (
                <p className="text-base sm:text-lg md:text-xl text-neutral-300 font-sans leading-relaxed pt-1">
                  {article.subtitle}
                </p>
              )}

              {/* Meta Info Strip */}
              <div className="pt-2 flex flex-wrap items-center gap-x-5 gap-y-2 text-xs sm:text-sm font-sans text-neutral-300 border-t border-white/15">
                <div className="flex items-center gap-1.5">
                  <Calendar className="w-4 h-4 text-[#ED1C24]" />
                  <span>{article.date}</span>
                </div>
                <div className="flex items-center gap-1.5">
                  <Clock className="w-4 h-4 text-[#ED1C24]" />
                  <span>{article.time}</span>
                </div>
                <div className="flex items-center gap-1.5">
                  <MapPin className="w-4 h-4 text-[#ED1C24]" />
                  <span>{article.location}</span>
                </div>
                <div className="flex items-center gap-1.5">
                  <User className="w-4 h-4 text-[#ED1C24]" />
                  <span>{article.author}</span>
                </div>
                <span className="text-neutral-500 hidden sm:inline">·</span>
                <span className="font-mono text-xs text-neutral-400">{article.readTime}</span>
              </div>
            </div>
          </ScrollReveal>
        </div>
      </section>

      {/* ========================================================
          2. ARTICLE BODY CONTAINER
          ======================================================== */}
      <article className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 sm:space-y-16 relative z-10">
        
        {/* Large Featured Photographic Window */}
        <ScrollReveal direction="up" delay={0.06}>
          <div className="rounded-3xl overflow-hidden bg-neutral-900 border border-black/[0.08] shadow-lg relative aspect-[16/9] w-full">
            <img
              src={article.image}
              alt={article.title}
              className="w-full h-full object-cover select-none"
            />
            <div className="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent p-4 sm:p-6 text-white flex items-center justify-between text-xs font-sans">
              <span>{article.title} — Official Project Rendering</span>
              <span className="font-mono text-neutral-300 uppercase tracking-wider text-[11px] hidden sm:inline">
                BNS Development Archive
              </span>
            </div>
          </div>
        </ScrollReveal>

        {/* Executive Key Facts & Metrics Strip */}
        {article.metrics && (
          <ScrollReveal direction="up" delay={0.08}>
            <div className="rounded-2xl bg-white border border-black/[0.08] p-6 sm:p-8 shadow-xs grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
              {article.metrics.map((m, idx) => (
                <div key={idx} className="space-y-1 border-l-2 border-[#ED1C24] pl-3.5">
                  <span className="block text-[11px] font-mono text-black/50 uppercase tracking-wider">
                    {m.label}
                  </span>
                  <span className="text-base sm:text-lg font-sans font-semibold text-black/90">
                    {m.value}
                  </span>
                </div>
              ))}
            </div>
          </ScrollReveal>
        )}

        {/* Lead Executive Paragraph */}
        <ScrollReveal direction="up" delay={0.08}>
          <div className="p-6 sm:p-8 rounded-2xl bg-[#FFFFFF] border-l-4 border-[#ED1C24] border-y border-r border-black/[0.08] shadow-xs">
            <p className="text-lg sm:text-xl font-sans font-medium text-black/90 leading-relaxed">
              {article.summary}
            </p>
          </div>
        </ScrollReveal>

        {/* Structured Sections with In-Article Editorial Gallery */}
        <div className="space-y-10 sm:space-y-12">
          {article.contentSections.map((sec, idx) => (
            <ScrollReveal key={idx} direction="up" delay={0.06 + idx * 0.04}>
              <div className="space-y-6">
                {/* Heading */}
                {sec.heading && (
                  <h2 className="text-2xl sm:text-3xl font-display font-semibold text-black/95 tracking-tight leading-snug pt-2">
                    {sec.heading}
                  </h2>
                )}

                {/* Paragraphs */}
                {sec.paragraphs &&
                  sec.paragraphs.map((p, pIdx) => (
                    <p key={pIdx} className="text-base sm:text-lg font-sans text-black/75 leading-relaxed">
                      {p}
                    </p>
                  ))}

                {/* Pull Quote Block */}
                {sec.quote && (
                  <div className="my-8 sm:my-10 p-6 sm:p-10 rounded-3xl bg-[#141518] text-white relative overflow-hidden shadow-xl">
                    <div className="absolute top-0 right-0 w-32 h-32 bg-[#ED1C24]/10 rounded-full blur-3xl pointer-events-none" />
                    <div className="space-y-4 relative z-10">
                      <span className="font-display text-4xl text-[#ED1C24] leading-none block">“</span>
                      <blockquote className="text-lg sm:text-xl md:text-2xl font-display font-medium text-white/95 leading-snug">
                        {sec.quote.text}
                      </blockquote>
                      <div className="pt-2 flex items-center gap-3 border-t border-white/10 text-xs sm:text-sm font-sans">
                        <div className="w-8 h-8 rounded-full bg-[#ED1C24] text-white flex items-center justify-center font-bold text-xs">
                          BNS
                        </div>
                        <div>
                          <p className="font-semibold text-white">{sec.quote.author}</p>
                          <p className="text-neutral-400 text-xs">{sec.quote.role}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                )}

                {/* Insert In-Article Supporting Dual Visual Gallery after Section 1 */}
                {idx === 0 && article.secondaryImage && (
                  <div className="pt-4 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div className="rounded-2xl overflow-hidden aspect-[4/3] bg-neutral-900 border border-black/[0.08] shadow-sm relative group">
                      <img
                        src={article.secondaryImage}
                        alt="Project detail specification"
                        className="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                      />
                      <div className="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/70 to-transparent p-3 text-[11px] font-sans text-white">
                        Site Execution &amp; Structural Planning
                      </div>
                    </div>

                    {article.tertiaryImage && (
                      <div className="rounded-2xl overflow-hidden aspect-[4/3] bg-neutral-900 border border-black/[0.08] shadow-sm relative group">
                        <img
                          src={article.tertiaryImage}
                          alt="Interior and architectural finish specification"
                          className="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                        />
                        <div className="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/70 to-transparent p-3 text-[11px] font-sans text-white">
                          Architectural Design &amp; Materials Verification
                        </div>
                      </div>
                    )}
                  </div>
                )}
              </div>
            </ScrollReveal>
          ))}
        </div>

        {/* ========================================================
            3. PUBLICATION INFORMATION & OFFICIAL PRESS CONTACT
            ======================================================== */}
        <ScrollReveal direction="up" delay={0.08}>
          <div className="rounded-3xl bg-white border border-black/[0.08] p-6 sm:p-10 shadow-sm space-y-6">
            <div className="flex items-center gap-2 font-mono text-xs uppercase tracking-wider text-[#ED1C24] font-semibold">
              <span className="w-1.5 h-1.5 rounded-full bg-[#ED1C24]" />
              <span>Official Press &amp; Media Inquiries</span>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
              <div className="space-y-3">
                <h3 className="text-xl sm:text-2xl font-display font-semibold text-black/95">
                  About BNS Development
                </h3>
                <p className="text-sm text-black/70 font-sans leading-relaxed">
                  BNS Development is an integrated real estate development and design-build delivery general contracting firm serving high-growth urban corridors across South Florida and Central Texas. The firm leads commercial, multifamily, residential, and ground-up developments from pre-development feasibility through turnkey closeout.
                </p>
              </div>

              {/* Direct Media Desk Card */}
              <div className="p-6 rounded-2xl bg-[#FAFAF8] border border-black/[0.06] space-y-4">
                <div className="space-y-1">
                  <p className="font-semibold text-sm text-black/90 font-sans">{article.pressContact.name}</p>
                  <p className="text-xs text-black/60 font-sans">{article.pressContact.title}</p>
                  <p className="text-xs text-black/50 font-sans">{article.pressContact.location}</p>
                </div>

                <div className="pt-2 flex flex-col gap-2.5">
                  <a
                    href="tel:7863683009"
                    className="inline-flex items-center gap-2.5 text-xs sm:text-sm font-sans font-medium text-black/80 hover:text-[#ED1C24] transition-colors"
                  >
                    <Phone className="w-4 h-4 text-[#ED1C24]" />
                    <span>{article.pressContact.phone}</span>
                  </a>
                  <a
                    href="mailto:contact@bns-development.com"
                    className="inline-flex items-center gap-2.5 text-xs sm:text-sm font-sans font-medium text-black/80 hover:text-[#ED1C24] transition-colors"
                  >
                    <Mail className="w-4 h-4 text-[#ED1C24]" />
                    <span>{article.pressContact.email}</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </ScrollReveal>

        {/* ========================================================
            4. RELATED NEWS & PRESS RELEASES (The other 2)
            ======================================================== */}
        <section className="pt-8 sm:pt-12 space-y-8 border-t border-black/[0.08]">
          <div className="flex items-center justify-between">
            <div>
              <div className="flex items-center gap-2 font-mono text-xs uppercase tracking-wider text-[#ED1C24] font-semibold">
                <span className="w-1.5 h-1.5 rounded-full bg-[#ED1C24]" />
                <span>Continued Coverage</span>
              </div>
              <h3 className="text-2xl sm:text-3xl font-display font-semibold text-black/95 tracking-tight pt-1">
                More Press Releases
              </h3>
            </div>

            <button
              type="button"
              onClick={() => {
                if (setActivePage) setActivePage('news');
                window.scrollTo({ top: 0, behavior: 'smooth' });
              }}
              className="hidden sm:inline-flex items-center gap-2 text-xs sm:text-sm font-sans font-semibold text-[#ED1C24] hover:underline cursor-pointer"
            >
              <span>View All Releases</span>
              <ArrowRight className="w-4 h-4" />
            </button>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            {relatedNews.map((item) => (
              <div
                key={item.id}
                onClick={() => handleSelectRelated(item)}
                className="group rounded-3xl bg-white border border-black/[0.08] hover:border-black/20 p-5 sm:p-6 shadow-xs hover:shadow-xl transition-all duration-300 cursor-pointer flex flex-col justify-between space-y-4"
              >
                <div className="space-y-3">
                  <div className="relative aspect-[16/9] w-full rounded-2xl overflow-hidden bg-neutral-900">
                    <img
                      src={item.image}
                      alt={item.title}
                      className="w-full h-full object-cover select-none transition-transform duration-700 ease-out group-hover:scale-105"
                    />
                    <div className="absolute top-3 left-3 px-2.5 py-0.5 rounded-full bg-black/70 backdrop-blur-md text-white text-[10px] font-mono uppercase tracking-wider font-semibold">
                      {item.category}
                    </div>
                  </div>

                  <div className="flex items-center gap-2 text-[11px] font-mono text-black/50">
                    <Calendar className="w-3 h-3 text-black/40" />
                    <span>{item.date}</span>
                    <span>·</span>
                    <MapPin className="w-3 h-3 text-black/40" />
                    <span>{item.location}</span>
                  </div>

                  <h4 className="text-lg sm:text-xl font-display font-semibold text-black/90 group-hover:text-[#ED1C24] transition-colors leading-snug line-clamp-2">
                    {item.title}
                  </h4>

                  <p className="text-xs sm:text-sm text-black/60 font-sans line-clamp-2 leading-relaxed">
                    {item.summary}
                  </p>
                </div>

                <div className="pt-2 flex items-center justify-between text-xs font-sans font-semibold text-[#ED1C24] border-t border-black/[0.04]">
                  <span>Read Story</span>
                  <ArrowUpRight className="w-3.5 h-3.5 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" />
                </div>
              </div>
            ))}
          </div>
        </section>
      </article>

      {/* ========================================================
          5. BOTTOM CTA SECTION
          ======================================================== */}
      <HouseCTA
        setActivePage={setActivePage}
        eyebrow="Connect With BNS"
        title="Have a Project or Media Inquiry?"
        highlight=""
        description="Connect with our corporate communications team or request an exploratory consultation for your next development venture."
        buttonText="Get in Touch"
        className="mt-10 sm:mt-16"
      />
    </div>
  );
}
