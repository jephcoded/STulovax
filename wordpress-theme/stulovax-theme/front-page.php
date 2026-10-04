<?php
if (!function_exists('get_header')) {
    require_once __DIR__ . '/wordpress-stubs.php';
}
get_header();
?>

<main id="top">
    <section class="hero section section-hero">
        <div class="hero-copy hero-copy-simple">
            <p class="eyebrow">Business management and execution partner</p>
            <h1>
                <span class="hero-line hero-line-primary" data-hero-text="Your Business Should Run Without You">Your Business Should Run Without You</span>
                <span class="hero-line hero-line-secondary" data-hero-text="We Make That Happen">We Make That Happen</span>
            </h1>
            <p class="hero-text" data-mobile-text="Stulovax installs structure and manages operations so founders can lead instead of firefighting.">
                Stulovax installs structure, manages operations, and supports growth so founders can lead instead of firefighting daily execution.
            </p>

            <div class="hero-actions">
                <a class="button button-primary button-icon button-icon-right" href="<?php echo stulovax_url('/#consultation'); ?>">
                    <span>Book a Consultation</span>
                    <span class="button-icon-glyph" aria-hidden="true">
                        <svg viewBox="0 0 20 20" role="img" aria-hidden="true">
                            <path d="M4 10h12M11 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
                <a class="button button-secondary button-icon button-icon-left" href="https://wa.me/2348032531089?text=Hello%20Stulovax%2C%20I%20want%20to%20learn%20more%20about%20your%20business%20management%20services.">
                    <span class="button-icon-glyph" aria-hidden="true">
                        <svg viewBox="0 0 20 20" role="img" aria-hidden="true">
                            <path d="M10 2.8a6.8 6.8 0 0 0-5.8 10.3L3 17.2l4.2-1.1A6.8 6.8 0 1 0 10 2.8Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path d="M7.5 7.2h.9c.2 0 .4.2.4.4l.2 1.1c0 .2 0 .4-.2.5l-.6.6c.6 1 1.5 1.8 2.5 2.5l.6-.6c.1-.1.3-.2.5-.2l1.1.2c.2 0 .4.2.4.4v.9c0 .3-.2.5-.5.5-.6.1-1.1.1-1.7 0A6.7 6.7 0 0 1 6.9 9c0-.6 0-1.1.1-1.7 0-.2.2-.4.5-.4Z" fill="currentColor" />
                        </svg>
                    </span>
                    <span>Talk to Us on WhatsApp</span>
                </a>
            </div>

            <p class="micro-copy">Quick strategy call. No pressure.</p>

            <div class="hero-trust hero-trust-simple">
                <span class="trust-badge">50+ businesses structured</span>
                <span class="trust-badge">8+ countries supported</span>
                <span class="trust-badge">Executive oversight</span>
            </div>
        </div>

        <svg class="hero-wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
            <path class="hero-wave-white" d="M0,61 C155,88 318,34 520,52 C712,69 864,46 1066,55 C1246,63 1338,86 1440,77 L1440,120 L0,120 Z"></path>
            <path class="hero-wave-gold" d="M0,76 C160,101 330,48 532,66 C718,83 870,63 1070,71 C1246,78 1340,101 1440,92 L1440,120 L0,120 Z"></path>
        </svg>
    </section>

    <section class="section section-problems" id="problems">
        <div class="problem-stage">
            <div class="problem-brief">
                <p class="eyebrow">The challenge</p>
                <h2>Growth becomes fragile when the business depends on you for everything.</h2>
                <p>
                    Most businesses are active but not truly scalable. Teams drift, processes break, decisions stall, and expansion across countries becomes chaotic without an operating system.
                </p>

                <div class="problem-tags" aria-label="Challenge themes">
                    <span>Operations lose rhythm</span>
                    <span>Accountability gets weak</span>
                    <span>Expansion becomes messy</span>
                </div>
            </div>

            <div class="problem-visual" aria-hidden="true">
                <div class="problem-simulation">
                    <div class="problem-core">
                        <strong>Founder</strong>
                        <span>Too many decisions</span>
                    </div>

                    <div class="problem-node problem-node-ops">
                        <strong>Ops</strong>
                        <span>Deadlines slipping</span>
                    </div>
                    <div class="problem-node problem-node-kpi">
                        <strong>KPIs</strong>
                        <span>Teams waiting</span>
                    </div>
                    <div class="problem-node problem-node-market">
                        <strong>Markets</strong>
                        <span>Cross-border drift</span>
                    </div>

                    <span class="problem-link problem-link-ops"></span>
                    <span class="problem-link problem-link-kpi"></span>
                    <span class="problem-link problem-link-market"></span>

                    <div class="problem-alert problem-alert-primary">Bottlenecks stacking up</div>
                    <div class="problem-alert problem-alert-secondary">Leadership attention pulled everywhere</div>
                </div>
            </div>
        </div>

        <div class="problem-grid">
            <article class="problem-summary">
                <span class="problem-summary-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" role="img" aria-hidden="true">
                        <path d="M5 7.5h14M5 12h10M5 16.5h7" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        <path d="M17.5 15.5 20 18l-2.5 2.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <h3>Operational chaos</h3>
                <p>Teams work hard, but without systems, deadlines slip and leaders keep stepping in to rescue execution.</p>
            </article>
            <article class="problem-summary">
                <span class="problem-summary-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" role="img" aria-hidden="true">
                        <path d="M12 5.5v7" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        <circle cx="12" cy="16.5" r="1.1" fill="currentColor" />
                        <path d="M7.2 19h9.6c1.7 0 2.8-1.8 2-3.3l-4.8-8.7c-.8-1.4-2.9-1.4-3.7 0l-4.8 8.7c-.8 1.5.3 3.3 2 3.3Z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                    </svg>
                </span>
                <h3>Low accountability</h3>
                <p>Roles are unclear, KPIs are weak, and follow-through depends on constant supervision from the founder.</p>
            </article>
            <article class="problem-summary">
                <span class="problem-summary-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" role="img" aria-hidden="true">
                        <path d="M4.5 8.5h15M7 5.5h1.5M15.5 5.5H17" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        <path d="M6 8.5v9.2c0 .9.7 1.6 1.6 1.6h8.8c.9 0 1.6-.7 1.6-1.6V8.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                        <path d="M9 12.2h6M9 15.8h4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
                <h3>Cross-border complexity</h3>
                <p>Managing staff, partners, and market activity across countries becomes harder when there is no shared structure.</p>
            </article>
        </div>
    </section>

    <section class="section section-solution" id="services">
        <div class="solution-stage">
            <div class="solution-copy">
                <p class="eyebrow">Why Stulovax</p>
                <h2>Why should a business choose Stulovax?</h2>
                <p>
                    Because growth needs more than advice. Stulovax gives founders a working management structure, operational control, and execution support that teams can actually follow.
                </p>

            </div>

            <div class="solution-visual" aria-hidden="true">
                <div class="solution-window">
                    <div class="solution-window-bar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="solution-dashboard">
                        <div class="solution-panel solution-panel-primary">
                            <span class="solution-panel-label">Execution board</span>
                            <strong>Every team knows what to do next.</strong>
                            <div class="solution-flow">
                                <span>Tasks aligned</span>
                                <span>Owners assigned</span>
                                <span>Reporting visible</span>
                            </div>
                        </div>

                        <div class="solution-panel solution-panel-side">
                            <span class="solution-panel-label">Founder view</span>
                            <strong>Clarity instead of firefighting.</strong>
                            <div class="solution-bars">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="solution-metric solution-metric-ops">
                            <strong>Ops</strong>
                            <span>Structured cadence</span>
                        </div>
                        <div class="solution-metric solution-metric-people">
                            <strong>People</strong>
                            <span>Clear accountability</span>
                        </div>
                        <div class="solution-metric solution-metric-growth">
                            <strong>Growth</strong>
                            <span>Execution with oversight</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg class="solution-wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,69 C170,97 334,42 540,56 C738,69 899,50 1100,56 C1266,61 1356,92 1440,84 L1440,120 L0,120 Z"></path>
        </svg>
    </section>

    <section class="section section-process" id="how-it-works">
        <div class="section-heading">
            <p class="eyebrow">How it works</p>
            <h2>Simple, structured, and built for leadership peace of mind.</h2>
            <p>
                Our process turns complexity into a clear operating model so you always know what is happening, who owns what, and where the business is moving.
            </p>
        </div>

        <div class="timeline">
            <article class="timeline-step">
                <span>01</span>
                <h3>Business Diagnosis</h3>
                <p>We assess operational gaps, growth blockers, team issues, and market expansion friction.</p>
            </article>
            <article class="timeline-step">
                <span>02</span>
                <h3>System Design</h3>
                <p>We define workflows, reporting structure, execution cadence, and management priorities.</p>
            </article>
            <article class="timeline-step">
                <span>03</span>
                <h3>Managed Execution</h3>
                <p>We oversee implementation, coordinate teams, and enforce accountability on agreed targets.</p>
            </article>
            <article class="timeline-step">
                <span>04</span>
                <h3>Reporting and Scale</h3>
                <p>You get visibility, measurable progress, and a stronger foundation for scaling across markets.</p>
            </article>
        </div>
    </section>

    <section class="section section-benefits" id="benefits">
        <div class="section-heading narrow">
            <p class="eyebrow">Key benefits</p>
            <h2>Better systems. Faster decisions. Stronger business control.</h2>
        </div>

        <div class="benefit-grid">
            <article class="benefit-card">
                <h3>Reduced founder dependence</h3>
                <p>Your business stops waiting for you to solve every daily problem before it can move.</p>
            </article>
            <article class="benefit-card">
                <h3>Clearer performance visibility</h3>
                <p>Know what teams are doing, what is blocked, and where attention is required.</p>
            </article>
            <article class="benefit-card">
                <h3>Improved execution quality</h3>
                <p>Processes, oversight, and accountability raise consistency across departments.</p>
            </article>
            <article class="benefit-card">
                <h3>Stronger expansion readiness</h3>
                <p>Operate more confidently across countries with a structured support model.</p>
            </article>
        </div>
    </section>

    <section class="section section-countries" id="countries">
        <div class="countries-stage">
            <div class="countries-copy">
                <p class="eyebrow">International presence</p>
                <h2>Your business can be managed, supported, and monitored from anywhere in the world.</h2>
                <p>
                    Stulovax is built for founders and teams operating across borders. Whether leadership is in Lagos, London, Accra, or Nairobi, the structure, reporting, and execution flow can still stay aligned.
                </p>

                <div class="countries-points" aria-label="Global management benefits">
                    <span>Access reporting from anywhere</span>
                    <span>Manage teams across time zones</span>
                    <span>Coordinate operations without being on-site</span>
                    <span>Keep growth moving across markets</span>
                </div>
            </div>

            <div class="countries-visual" aria-hidden="true">
                <div class="countries-panel">
                    <div class="countries-panel-top">
                        <span class="countries-dot"></span>
                        <span class="countries-dot"></span>
                        <span class="countries-dot"></span>
                    </div>

                    <div class="countries-worldline">
                        <span class="countries-hub countries-hub-core">HQ</span>
                        <span class="countries-hub countries-hub-uk">UK</span>
                        <span class="countries-hub countries-hub-gh">GH</span>
                        <span class="countries-hub countries-hub-ke">KE</span>

                        <span class="countries-link countries-link-uk"></span>
                        <span class="countries-link countries-link-gh"></span>
                        <span class="countries-link countries-link-ke"></span>

                        <div class="countries-signal countries-signal-live">Live reporting</div>
                        <div class="countries-signal countries-signal-oversight">Remote oversight</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="country-grid">
            <article class="country-card">
                <img src="https://flagcdn.com/w80/ng.png" alt="Nigeria flag" loading="lazy" />
                <div>
                    <h3>Nigeria</h3>
                    <p>Core operations base, execution oversight, and day-to-day management support.</p>
                </div>
            </article>
            <article class="country-card">
                <img src="https://flagcdn.com/w80/gh.png" alt="Ghana flag" loading="lazy" />
                <div>
                    <h3>Ghana</h3>
                    <p>Regional coordination, performance tracking, and expansion support.</p>
                </div>
            </article>
            <article class="country-card">
                <img src="https://flagcdn.com/w80/ke.png" alt="Kenya flag" loading="lazy" />
                <div>
                    <h3>Kenya</h3>
                    <p>Growth systems, team alignment, and operational follow-through.</p>
                </div>
            </article>
            <article class="country-card">
                <img src="https://flagcdn.com/w80/gb.png" alt="United Kingdom flag" loading="lazy" />
                <div>
                    <h3>United Kingdom</h3>
                    <p>Diaspora founder support, remote visibility, and international coordination.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="section section-proof">
        <div class="metrics-panel">
            <article>
                <strong>01</strong>
                <span>Premium positioning for a global business management brand</span>
            </article>
            <article>
                <strong>02</strong>
                <span>High-conversion CTA flow for booking, WhatsApp, and direct enquiries</span>
            </article>
            <article>
                <strong>03</strong>
                <span>Lightweight frontend structure for faster loading than the current site</span>
            </article>
        </div>
    </section>

    <section class="section section-testimonials">
        <div class="section-heading narrow">
            <p class="eyebrow">Trust and credibility</p>
            <h2>Professional by design, accountable by process.</h2>
            <p>
                These sample credibility cards can later be replaced with real testimonials, case studies, or client logos once the founder provides them.
            </p>
        </div>

        <div class="card-grid card-grid-three">
            <article class="quote-card">
                <p>
                    “Stulovax gives founders the structure they need when the business has outgrown informal management.”
                </p>
                <span>Operational clarity</span>
            </article>
            <article class="quote-card">
                <p>
                    “The value is not just advice. It is oversight, implementation, and disciplined execution.”
                </p>
                <span>Execution support</span>
            </article>
            <article class="quote-card">
                <p>
                    “For businesses working across markets, visibility and accountability matter more than more meetings.”
                </p>
                <span>Cross-border management</span>
            </article>
        </div>
    </section>

    <section class="section section-faq" id="faq">
        <div class="section-heading narrow">
            <p class="eyebrow">Common questions</p>
            <h2>Questions a serious client is likely to ask before working with Stulovax.</h2>
        </div>

        <div class="faq-list">
            <article class="faq-item active">
                <button class="faq-trigger" type="button" aria-expanded="true">
                    Can Stulovax manage my business even if I am not in the same country as my team?
                </button>
                <div class="faq-panel">
                    <p>Yes. Stulovax is designed for founders and leadership teams that need visibility, accountability, and operational control even when the business is being run across different cities or countries.</p>
                </div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button" aria-expanded="false">
                    What exactly does Stulovax handle for a client?
                </button>
                <div class="faq-panel">
                    <p>Depending on the engagement, Stulovax can support operations management, team supervision, reporting systems, performance tracking, growth execution, and the structure required to keep the business moving consistently.</p>
                </div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button" aria-expanded="false">
                    Is this for startups only, or can established businesses use it too?
                </button>
                <div class="faq-panel">
                    <p>It works for both. The real fit is not business age, but whether the company needs stronger systems, clearer leadership visibility, and more disciplined execution.</p>
                </div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button" aria-expanded="false">
                    How do I know if Stulovax is the right partner for my business?
                </button>
                <div class="faq-panel">
                    <p>If growth currently depends too much on your personal supervision, if your team lacks structure, or if you need operations to run more reliably across markets, then this is the type of support Stulovax is built to provide.</p>
                </div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button" aria-expanded="false">
                    Can Stulovax work with my current team instead of replacing them?
                </button>
                <div class="faq-panel">
                    <p>Yes. The goal is usually to strengthen the existing team with clearer structure, reporting, oversight, and execution discipline, not to disrupt what is already working.</p>
                </div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button" aria-expanded="false">
                    How do we start if I want to discuss support for my business?
                </button>
                <div class="faq-panel">
                    <p>The first step is a direct call, WhatsApp conversation, or email enquiry. From there, Stulovax can understand the business gaps, the current growth stage, and the type of support needed.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="section section-consultation" id="consultation">
        <div class="consultation-card consultation-card-form consultation-card-photo">
            <img
                class="consultation-photo"
                src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1600&q=80"
                alt=""
                loading="lazy" />
            <div class="consultation-photo-overlay"></div>
            <div class="consultation-content consultation-content-form">
                <p class="eyebrow">Ready to take control?</p>
                <h2>Tell us about your business, then continue to the booking calendar.</h2>
                <p>
                    Share the business details first so Stulovax receives your message by email. After submission, you will continue directly to the booking calendar.
                </p>

                <div class="consultation-benefits" aria-label="What happens next">
                    <span>Message delivered to the company email</span>
                    <span>Calendly opens after submission</span>
                    <span>Built for diaspora founders with businesses in Nigeria</span>
                </div>
            </div>

            <form
                class="consultation-form"
                action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                method="POST"
                accept-charset="UTF-8">
                <input type="hidden" name="action" value="stulovax_consultation" />
                <?php wp_nonce_field('stulovax_consultation_form', 'stulovax_consultation_nonce'); ?>
                <input type="text" name="company_website" tabindex="-1" autocomplete="off" class="form-honeypot" />

                <label class="form-field">
                    <span>Full name</span>
                    <input type="text" name="name" placeholder="Your full name" required />
                </label>

                <label class="form-field">
                    <span>Email address</span>
                    <input type="email" name="email" placeholder="you@example.com" required />
                </label>

                <label class="form-field">
                    <span>Phone or WhatsApp</span>
                    <input type="text" name="phone" placeholder="Phone or WhatsApp number" required />
                </label>

                <label class="form-field">
                    <span>Where are you based?</span>
                    <input type="text" name="location" placeholder="For example: London, Toronto, Dubai" required />
                </label>

                <label class="form-field">
                    <span>Business name</span>
                    <input type="text" name="business_name" placeholder="Your business name" required />
                </label>

                <label class="form-field form-field-wide">
                    <span>What do you need help managing in Nigeria?</span>
                    <textarea name="message" rows="5" placeholder="Tell Stulovax about the business, the team, and where you need structure or oversight." required></textarea>
                </label>

                <div class="consultation-form-actions">
                    <button class="button button-primary" type="submit">Send Details and Continue</button>
                    <a class="button button-secondary" href="https://wa.me/2348032531089?text=Hello%20Stulovax%2C%20I%20would%20like%20to%20discuss%20support%20for%20my%20business.">WhatsApp Instead</a>
                </div>

                <p class="consultation-status" aria-live="polite"></p>
                <p class="consultation-form-note">After you submit, you will continue to Calendly to book your consultation.</p>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>