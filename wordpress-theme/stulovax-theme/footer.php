      <?php
        if (!function_exists('stulovax_url')) {
            require_once __DIR__ . '/functions.php';
        }
        ?>

      <footer class="site-footer" id="contact">
          <div class="footer-branding">
              <a class="brand brand-footer" href="<?php echo stulovax_url('/'); ?>">
                  <span class="brand-mark" aria-hidden="true">
                      <svg viewBox="0 0 72 72" role="img" aria-hidden="true">
                          <path
                              d="M44.4 11.2c6.6 0 12.1 5.3 12.1 11.8 0 4.2-1.8 8.3-4.9 11l-7.7 6.8c-2.2 1.9-3.5 4.7-3.5 7.7 0 6.5-5.4 11.8-12.1 11.8-6.6 0-12.1-5.3-12.1-11.8 0-4.2 1.8-8.3 4.9-11l7.7-6.8c2.2-1.9 3.5-4.7 3.5-7.7 0-6.5 5.4-11.8 12.1-11.8Zm-16.8 7.2c-2.5 0-4.6 2.1-4.6 4.7 0 2 .8 3.8 2.3 5.1l7.7 6.8c3.8 3.3 6 8.1 6 13.1 0 2.6 2.1 4.7 4.6 4.7 2.5 0 4.6-2.1 4.6-4.7 0-2-.8-3.8-2.3-5.1l-7.7-6.8c-3.8-3.3-6-8.1-6-13.1 0-2.6-2.1-4.7-4.6-4.7Z" />
                      </svg>
                  </span>
                  <span class="brand-text">Stulovax</span>
              </a>
              <p>
                  Business management, operational structure, and execution support for companies that want to be run with clarity from anywhere in the world.
              </p>
              <span class="footer-note">Structured for founders. Built for cross-border growth.</span>
          </div>

          <div class="footer-links">
              <div>
                  <h3>Contact</h3>
                  <a href="tel:+2348032531089">+234 803 253 1089</a>
                  <a href="mailto:Hello@stulovax.com">Hello@stulovax.com</a>
                  <span>Lagos, Nigeria</span>
                  <span>Available across markets</span>
              </div>
              <div>
                  <h3>Quick links</h3>
                  <a href="<?php echo stulovax_url('/about/'); ?>">About us</a>
                  <a href="<?php echo stulovax_url('/#services'); ?>">Services</a>
                  <a href="<?php echo stulovax_url('/#countries'); ?>">Countries</a>
                  <a href="<?php echo stulovax_url('/#faq'); ?>">FAQ</a>
                  <a href="<?php echo stulovax_url('/#consultation'); ?>">Book a call</a>
              </div>
              <div>
                  <h3>What we help with</h3>
                  <span>Operations management</span>
                  <span>People oversight</span>
                  <span>Growth execution</span>
                  <span>Cross-border coordination</span>
              </div>
          </div>
      </footer>
      </div>

      <a
          class="whatsapp-float"
          href="https://wa.me/2348032531089?text=Hello%20Stulovax%2C%20I%20want%20to%20learn%20more%20about%20your%20services."
          target="_blank"
          rel="noreferrer"
          aria-label="Open WhatsApp chat with Stulovax">
          <span class="whatsapp-float-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" role="img" aria-hidden="true">
                  <path d="M12 3.2a8.4 8.4 0 0 0-7.2 12.8L3.3 20.7l4.9-1.3A8.4 8.4 0 1 0 12 3.2Z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                  <path d="M9 8.5h1c.2 0 .4.2.5.4l.3 1.2c0 .2 0 .5-.2.6l-.7.7c.7 1.2 1.8 2.2 3 3l.7-.7c.2-.2.4-.2.6-.2l1.2.3c.2 0 .4.2.4.5v1c0 .3-.2.6-.5.6-.7.1-1.4.2-2 .1a8.6 8.6 0 0 1-5.4-5.4c-.1-.6 0-1.3.1-2 .1-.3.3-.5.6-.5Z" fill="currentColor" />
              </svg>
          </span>
          <span>WhatsApp Us</span>
      </a>

      <aside class="cookie-banner" role="dialog" aria-live="polite" aria-label="Cookie notice">
          <p>We use cookies to improve site performance and understand how visitors use Stulovax.</p>
          <div class="cookie-actions">
              <button class="button button-secondary cookie-decline" type="button">Decline</button>
              <button class="button button-primary cookie-accept" type="button">Accept</button>
          </div>
      </aside>

      <?php wp_footer(); ?>
      </body>

      </html>