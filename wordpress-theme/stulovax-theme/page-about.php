<?php
if (!function_exists('get_header')) {
    require_once __DIR__ . '/wordpress-stubs.php';
}
get_header();
?>

<main id="top">
    <section class="section-about-hero">
        <div class="about-hero-layout">
            <div class="about-hero-copy">
                <p class="eyebrow">About Stulovax</p>
                <h1>We help founders build businesses that can run with structure, clarity, and control.</h1>
                <p>
                    Stulovax exists for businesses that have outgrown informal management. We step in where execution is slipping, accountability is weak, and growth is starting to depend too much on the founder's constant attention.
                </p>
                <div class="about-hero-actions">
                    <a class="button button-primary" href="<?php echo stulovax_url('/#consultation'); ?>">Book a Consultation</a>
                    <a class="button button-secondary" href="https://wa.me/2348032531089?text=Hello%20Stulovax%2C%20I%20would%20like%20to%20learn%20more%20about%20your%20approach.">Chat on WhatsApp</a>
                </div>
            </div>

            <div class="about-hero-panel" aria-hidden="true">
                <div class="about-panel-window">
                    <span class="about-panel-kicker">What we bring</span>
                    <strong>Operational structure, execution discipline, and leadership visibility.</strong>
                    <p>
                        We do not just point out problems. We help businesses design the systems, reporting rhythm, and management structure required to execute consistently across teams and markets.
                    </p>
                </div>

                <div class="about-panel-metrics">
                    <article>
                        <strong>01</strong>
                        <span>Structure that reduces founder dependence</span>
                    </article>
                    <article>
                        <strong>02</strong>
                        <span>Visibility that keeps leadership informed</span>
                    </article>
                    <article>
                        <strong>03</strong>
                        <span>Execution support that keeps plans moving</span>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-about-story">
        <div class="section-heading narrow">
            <p class="eyebrow">Our perspective</p>
            <h2>Most businesses do not fail because of ambition. They stall because the operating structure never matured.</h2>
        </div>

        <div class="about-story-grid">
            <article class="about-story-card">
                <strong>What Stulovax solves</strong>
                <p>
                    Businesses often reach a point where more effort no longer creates better outcomes. Decisions stay with one person, teams wait for direction, and expansion becomes harder to control. That is the gap Stulovax is built to close.
                </p>
            </article>
            <article class="about-story-card">
                <strong>How we think about growth</strong>
                <p>
                    Real growth is not just more sales or more markets. It is the ability to manage operations, people, reporting, and execution without chaos.
                </p>
                <ul>
                    <li>Clear ownership instead of constant follow-up</li>
                    <li>Operating rhythm instead of reactive management</li>
                    <li>Visibility across countries, teams, and priorities</li>
                </ul>
            </article>
        </div>
    </section>

    <section class="section section-about-values">
        <div class="section-heading narrow">
            <p class="eyebrow">What defines us</p>
            <h2>The work is practical, disciplined, and built around execution.</h2>
        </div>

        <div class="about-values-grid">
            <article class="about-value-card">
                <strong>Clarity</strong>
                <p>We simplify complexity so founders and teams can see what matters, what is blocked, and what needs action.</p>
            </article>
            <article class="about-value-card">
                <strong>Accountability</strong>
                <p>We believe systems only work when ownership is clear and reporting is visible across the business.</p>
            </article>
            <article class="about-value-card">
                <strong>Execution</strong>
                <p>The goal is not beautiful plans. The goal is stronger follow-through, better control, and measurable movement.</p>
            </article>
        </div>
    </section>

    <section class="section section-about-capabilities">
        <div class="section-heading narrow">
            <p class="eyebrow">How we help</p>
            <h2>Support that sits between strategy and day-to-day execution.</h2>
        </div>

        <div class="about-capability-grid">
            <article class="about-capability-card">
                <strong>Business management structure</strong>
                <p>We help define operational priorities, reporting expectations, and management rhythms that reduce confusion across the company.</p>
            </article>
            <article class="about-capability-card">
                <strong>Execution oversight</strong>
                <p>We support implementation, follow-through, and progress visibility so leadership is not left guessing what is actually moving.</p>
            </article>
            <article class="about-capability-card">
                <strong>Founder support</strong>
                <p>We create operating conditions that reduce daily dependence on the founder for decisions, approvals, and constant intervention.</p>
            </article>
            <article class="about-capability-card">
                <strong>Cross-border coordination</strong>
                <p>We help businesses maintain alignment across teams, locations, and growth activity even when the work spans multiple markets.</p>
            </article>
        </div>
    </section>

    <section class="section section-about-proof">
        <div class="section-heading narrow">
            <p class="eyebrow">What clients need from us</p>
            <h2>They need structure they can trust, not more noise.</h2>
        </div>

        <div class="about-proof-grid">
            <article class="about-proof-card">
                <strong>Leadership visibility</strong>
                <p>Clear reporting and operating rhythm give founders better control without constant micromanagement.</p>
            </article>
            <article class="about-proof-card">
                <strong>Team alignment</strong>
                <p>Stronger role clarity and follow-through reduce drift, bottlenecks, and repeated confusion.</p>
            </article>
            <article class="about-proof-card">
                <strong>Scalable operations</strong>
                <p>A better operating system makes growth across functions and markets more manageable.</p>
            </article>
        </div>
    </section>

    <section class="section section-about-contact">
        <div class="about-cta">
            <div>
                <strong>Want to know if Stulovax is the right fit for your business?</strong>
                <p>Start with a conversation. We can look at your current operating challenges and show you where structure can create immediate clarity.</p>
            </div>
            <a class="button button-primary" href="<?php echo stulovax_url('/#consultation'); ?>">Book Consultation</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>