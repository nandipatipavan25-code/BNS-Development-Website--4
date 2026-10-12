import React, { useState } from 'react';
import { motion } from 'framer-motion';
import {
  Calendar,
  Clock,
  MapPin,
  ArrowRight,
  ArrowUpRight,
  FileText,
  Building2,
  Sparkles,
  Phone,
  Mail,
  Search,
  Filter,
} from 'lucide-react';
import { newsData } from '../data/news';
import ScrollReveal from '../components/ScrollReveal';
import CardBeamBorder from '../components/CardBeamBorder';

export default function NewsPage({ setActivePage, setSelectedNews }) {
  const [activeCategory, setActiveCategory] = useState('all');
  const [searchQuery, setSearchQuery] = useState('');

  const categories = [
    { id: 'all', label: 'All Releases', count: newsData.length },
    { id: 'Project Milestone', label: 'Project Milestones', count: 1 },
    { id: 'Strategic Expansion', label: 'Strategic Expansion', count: 1 },
    { id: 'Press Release', label: 'Press Releases', count: 1 },
  ];

  const filteredNews = newsData.filter((item) => {
    const matchesCategory = activeCategory === 'all' || item.category === activeCategory;
    const matchesSearch =
      searchQuery.trim() === '' ||
      item.title.toLowerCase().includes(searchQuery.toLowerCase()) ||
      item.location.toLowerCase().includes(searchQuery.toLowerCase()) ||
      item.summary.toLowerCase().includes(searchQuery.toLowerCase());
    return matchesCategory && matchesSearch;
  });

  const handleSelectNews = (item) => {
    if (setSelectedNews) {
      setSelectedNews(item);
    }
    if (setActivePage) {
      setActivePage('news-detail', `id=${item.id}`);
    }
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

  const leadItem = newsData[0];
  const secondaryItems = newsData.slice(1);

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
          1. HERO SECTION: Full-Bleed Architectural Banner
          ======================================================== */}
      <section className="relative w-full overflow-hidden min-h-[460px] sm:min-h-[520px] lg:min-h-[560px] flex flex-col justify-end pt-32 sm:pt-40 pb-16 sm:pb-20 bg-[#141518] mb-8 sm:mb-12">
        <img
          src="/images/about-hero.jpg"
          alt="BNS Development News & Press Releases"
          className="absolute inset-0 w-full h-full object-cover select-none scale-105 brightness-[0.45] contrast-[1.12]"
          loading="eager"
        />
        {/* Dual Directional Architectural Gradients for Crisp Readability */}
        <div className="absolute inset-0 bg-gradient-to-t from-[#0E0F12] via-[#0E0F12]/60 to-transparent pointer-events-none" />
        <div className="absolute inset-0 bg-gradient-to-r from-[#0E0F12]/90 via-[#0E0F12]/50 to-transparent pointer-events-none" />
        <div
          className="absolute inset-0 opacity-[0.03] pointer-events-none"
          style={{
            backgroundImage: 'radial-gradient(#ffffff 1px, transparent 1px)',
            backgroundSize: '28px 28px',
          }}
          aria-hidden="true"
        />

        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
          <ScrollReveal direction="up" delay={0.05}>
            <div className="max-w-4xl space-y-5 text-white">
              {/* Eyebrow Pill */}
              <div className="flex items-center gap-2.5">
                <span className="w-6 h-[2px] bg-[#ED1C24]" />
                <span className="text-xs sm:text-sm font-mono tracking-widest text-neutral-300 uppercase font-semibold">
                  Media &amp; Corporate Communications
                </span>
              </div>

              {/* Display Headline */}
              <h1 className="text-3xl sm:text-5xl md:text-6xl lg:text-[64px] font-display font-semibold tracking-tight leading-[1.08] text-white">
                News &amp; Press Releases<span className="text-[#ED1C24]">.</span>
              </h1>

              {/* Supporting Editorial Subtitle */}
              <p className="text-base sm:text-lg lg:text-xl text-neutral-300 font-sans leading-relaxed max-w-3xl pt-1">
                Explore project groundbreakings, regional market expansions, and corporate milestone announcements from the BNS Development leadership team.
              </p>
            </div>
          </ScrollReveal>
        </div>
      </section>

      {/* ========================================================
          2. FILTER & SEARCH CONTROL BAR
          ======================================================== */}
      <section className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 sm:mb-14 relative z-10">
        <div className="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-black/[0.08]">
          {/* Category Filter Chips */}
          <div className="flex flex-wrap items-center gap-2">
            {categories.map((cat) => {
              const isActive = activeCategory === cat.id;
              return (
                <button
                  key={cat.id}
                  type="button"
                  onClick={() => setActiveCategory(cat.id)}
                  className={`inline-flex items-center gap-2 px-4 py-2 rounded-full text-xs sm:text-sm font-sans font-medium transition-all duration-200 cursor-pointer ${
                    isActive
                      ? 'bg-black text-white shadow-sm'
                      : 'bg-white hover:bg-neutral-100 text-black/70 hover:text-black border border-black/[0.08]'
                  }`}
                >
                  <span>{cat.label}</span>
                  <span
                    className={`text-[11px] font-mono px-1.5 py-0.5 rounded-full ${
                      isActive ? 'bg-white/20 text-white' : 'bg-black/[0.06] text-black/60'
                    }`}
                  >
                    {cat.count}
                  </span>
                </button>
              );
            })}
          </div>

          {/* Quick Search Input */}
          <div className="relative w-full md:w-72">
            <Search className="w-4 h-4 text-black/40 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" />
            <input
              type="text"
              value={searchQuery}
              onChange={(e) => setSearchQuery(e.target.value)}
              placeholder="Filter releases or locations..."
              className="w-full pl-10 pr-4 py-2 rounded-full bg-white border border-black/[0.08] focus:border-[#ED1C24] text-xs sm:text-sm font-sans text-black placeholder:text-black/40 focus:outline-none transition-colors shadow-xs"
            />
          </div>
        </div>
      </section>

      {/* ========================================================
          3. ASYMMETRICAL EDITORIAL NEWS SECTION (3 Items)
          ======================================================== */}
      <section className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 sm:space-y-16 relative z-10">
        {filteredNews.length === 0 ? (
          <div className="text-center py-20 bg-white rounded-3xl border border-black/[0.08] p-8 space-y-3">
            <p className="text-base font-sans text-black/60">No press releases found matching your search.</p>
            <button
              type="button"
              onClick={() => {
                setActiveCategory('all');
                setSearchQuery('');
              }}
              className="text-xs font-mono uppercase tracking-wider text-[#ED1C24] font-semibold hover:underline cursor-pointer"
            >
              Reset Filters
            </button>
          </div>
        ) : (
          <>
            {/* ── ITEM 1: FEATURED SPOTLIGHT CARD (Asymmetrical Panoramic Layout) ── */}
            {filteredNews.some((item) => item.id === leadItem.id) && (
              <ScrollReveal direction="up" delay={0.06}>
                <div
                  onClick={() => handleSelectNews(leadItem)}
                  className="group relative rounded-3xl bg-white border border-black/[0.08] hover:border-black/20 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden cursor-pointer"
                >
                  <CardBeamBorder borderRadius="24px" />
                  <div className="grid grid-cols-1 lg:grid-cols-12 gap-0 items-stretch">
                    {/* Left Column: Visual Window (7 cols) */}
                    <div className="lg:col-span-7 relative overflow-hidden aspect-[16/10] lg:aspect-auto min-h-[320px] lg:min-h-[460px] bg-neutral-900">
                      <img
                        src={leadItem.image}
                        alt={leadItem.title}
                        className="w-full h-full object-cover select-none transition-transform duration-1000 ease-out group-hover:scale-105"
                        loading="lazy"
                      />
                      <div className="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none" />

                      {/* Spotlight Badge */}
                      <div className="absolute top-4 left-4 sm:top-6 sm:left-6 inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/80 backdrop-blur-md text-white border border-white/15 text-xs font-mono uppercase tracking-wider font-semibold shadow-md">
                        <Sparkles className="w-3.5 h-3.5 text-[#ED1C24]" />
                        <span>Lead Announcement</span>
                      </div>

                      {/* Floating Location Pill */}
                      <div className="absolute bottom-4 left-4 sm:bottom-6 sm:left-6 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-black/80 text-xs font-sans font-medium shadow-md">
                        <MapPin className="w-3.5 h-3.5 text-[#ED1C24]" />
                        <span>{leadItem.location}</span>
                      </div>
                    </div>

                    {/* Right Column: Editorial Details (5 cols) */}
                    <div className="lg:col-span-5 p-6 sm:p-10 lg:p-12 flex flex-col justify-between space-y-6">
                      <div className="space-y-4">
                        {/* Meta strip */}
                        <div className="flex flex-wrap items-center gap-3 text-xs font-mono uppercase tracking-wider text-black/50">
                          <span className="px-2.5 py-1 rounded-md bg-[#ED1C24]/10 text-[#ED1C24] font-semibold border border-[#ED1C24]/20">
                            {leadItem.category}
                          </span>
                          <span>·</span>
                          <span className="flex items-center gap-1 text-black/60">
                            <Calendar className="w-3.5 h-3.5" />
                            {leadItem.date}
                          </span>
                          <span>·</span>
                          <span className="flex items-center gap-1 text-black/60">
                            <Clock className="w-3.5 h-3.5" />
                            {leadItem.time}
                          </span>
                        </div>

                        {/* Title */}
                        <h2 className="text-2xl sm:text-3xl lg:text-[32px] font-display font-semibold text-black/95 tracking-tight leading-[1.2] group-hover:text-[#ED1C24] transition-colors duration-300">
                          {leadItem.title}
                        </h2>

                        {/* Short Description */}
                        <p className="text-sm sm:text-base text-black/65 font-sans leading-relaxed">
                          {leadItem.summary}
                        </p>

                        {/* Fast Metrics Strip */}
                        <div className="pt-2 grid grid-cols-2 gap-3 border-t border-black/[0.06]">
                          {leadItem.metrics.slice(0, 2).map((m, idx) => (
                            <div key={idx} className="p-2.5 rounded-xl bg-[#FAFAF8] border border-black/[0.04]">
                              <span className="block text-[10px] font-mono text-black/45 uppercase tracking-wider">
                                {m.label}
                              </span>
                              <span className="text-xs sm:text-sm font-sans font-semibold text-black/90">
                                {m.value}
                              </span>
                            </div>
                          ))}
                        </div>
                      </div>

                      {/* Interactive Read More Row */}
                      <div className="pt-4 flex items-center justify-between border-t border-black/[0.06]">
                        <span className="inline-flex items-center gap-2 text-xs sm:text-sm font-sans font-semibold text-[#ED1C24] group-hover:translate-x-1 transition-transform duration-300">
                          <span>Read Full Press Release</span>
                          <ArrowRight className="w-4 h-4" />
                        </span>
                        <div className="w-9 h-9 rounded-full bg-[#FAFAF8] group-hover:bg-[#ED1C24] text-black/70 group-hover:text-white border border-black/[0.08] group-hover:border-[#ED1C24] flex items-center justify-center transition-all duration-300">
                          <ArrowUpRight className="w-4 h-4" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </ScrollReveal>
            )}

            {/* ── ITEMS 2 & 3: DUAL ASYMMETRIC EDITORIAL PAIR ── */}
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">
              {secondaryItems
                .filter((item) => filteredNews.some((fn) => fn.id === item.id))
                .map((item, index) => (
                  <ScrollReveal key={item.id} direction="up" delay={0.1 + index * 0.08} className="h-full">
                    <div
                      onClick={() => handleSelectNews(item)}
                      className="group relative rounded-3xl bg-white border border-black/[0.08] hover:border-black/20 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden cursor-pointer flex flex-col justify-between h-full"
                    >
                      <CardBeamBorder borderRadius="24px" />

                      <div>
                        {/* Photographic Image Window */}
                        <div className="relative aspect-[16/9.5] w-full overflow-hidden bg-neutral-900">
                          <img
                            src={item.image}
                            alt={item.title}
                            className="w-full h-full object-cover select-none transition-transform duration-1000 ease-out group-hover:scale-105"
                            loading="lazy"
                          />
                          <div className="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent pointer-events-none" />

                          {/* Category Tag Over Image */}
                          <div className="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-black/75 backdrop-blur-md text-white border border-white/15 text-[11px] font-mono uppercase tracking-wider font-semibold">
                            <span className="w-1.5 h-1.5 rounded-full bg-[#ED1C24]" />
                            <span>{item.category}</span>
                          </div>

                          {/* Location Pill */}
                          <div className="absolute bottom-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-black/80 text-xs font-sans font-medium">
                            <MapPin className="w-3.5 h-3.5 text-[#ED1C24]" />
                            <span>{item.location}</span>
                          </div>
                        </div>

                        {/* Card Content Area */}
                        <div className="p-6 sm:p-8 space-y-4">
                          {/* Metadata Date and Time */}
                          <div className="flex items-center gap-2 text-xs font-mono text-black/50 tracking-wider">
                            <Calendar className="w-3.5 h-3.5 text-black/40" />
                            <span>{item.date}</span>
                            <span>·</span>
                            <Clock className="w-3.5 h-3.5 text-black/40" />
                            <span>{item.time}</span>
                          </div>

                          {/* Title */}
                          <h3 className="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight leading-snug group-hover:text-[#ED1C24] transition-colors duration-300">
                            {item.title}
                          </h3>

                          {/* Summary */}
                          <p className="text-sm sm:text-base text-black/65 font-sans leading-relaxed line-clamp-3">
                            {item.summary}
                          </p>
                        </div>
                      </div>

                      {/* Footer Read More Interaction */}
                      <div className="px-6 sm:px-8 pb-6 sm:pb-8 pt-2 flex items-center justify-between border-t border-black/[0.06]">
                        <span className="inline-flex items-center gap-2 text-xs sm:text-sm font-sans font-semibold text-[#ED1C24] group-hover:translate-x-1 transition-transform duration-300">
                          <span>Read Full Press Release</span>
                          <ArrowRight className="w-4 h-4" />
                        </span>
                        <div className="w-8 h-8 rounded-full bg-[#FAFAF8] group-hover:bg-[#ED1C24] text-black/70 group-hover:text-white border border-black/[0.08] group-hover:border-[#ED1C24] flex items-center justify-center transition-all duration-300">
                          <ArrowUpRight className="w-3.5 h-3.5" />
                        </div>
                      </div>
                    </div>
                  </ScrollReveal>
                ))}
            </div>
          </>
        )}
      </section>

      {/* ========================================================
          4. MEDIA INQUIRIES & PRESS CONTACT STRIP
          ======================================================== */}
      <section className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16 sm:mt-20 relative z-10">
        <ScrollReveal direction="up" delay={0.08}>
          <div className="rounded-3xl bg-white border border-black/[0.08] p-6 sm:p-10 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div className="space-y-2 max-w-xl">
              <div className="inline-flex items-center gap-2 text-xs font-mono uppercase tracking-wider text-[#ED1C24] font-semibold">
                <span className="w-1.5 h-1.5 rounded-full bg-[#ED1C24]" />
                <span>Media Relations &amp; Press Kits</span>
              </div>
              <h3 className="text-xl sm:text-2xl font-display font-semibold text-black/95 tracking-tight">
                Journalists &amp; Industry Publications
              </h3>
              <p className="text-sm text-black/65 font-sans leading-relaxed">
                For executive interviews, architectural photography assets, or verified project data sheets, please contact the BNS Development press office directly.
              </p>
            </div>

            <div className="flex flex-wrap items-center gap-3 sm:gap-4 shrink-0">
              <a
                href="tel:7863683009"
                className="inline-flex items-center gap-2.5 px-4 py-2.5 rounded-full bg-[#FAFAF8] hover:bg-black hover:text-white border border-black/[0.08] text-xs sm:text-sm font-sans font-medium text-black/85 transition-colors shadow-xs"
              >
                <Phone className="w-3.5 h-3.5 text-[#ED1C24]" />
                <span>(786) 368-3009</span>
              </a>
              <a
                href="mailto:contact@bns-development.com"
                className="inline-flex items-center gap-2.5 px-4 py-2.5 rounded-full bg-[#FAFAF8] hover:bg-black hover:text-white border border-black/[0.08] text-xs sm:text-sm font-sans font-medium text-black/85 transition-colors shadow-xs"
              >
                <Mail className="w-3.5 h-3.5 text-[#ED1C24]" />
                <span>contact@bns-development.com</span>
              </a>
            </div>
          </div>
        </ScrollReveal>
      </section>
    </div>
  );
}
