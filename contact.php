<?php include("header.php"); ?>
<section id="contact">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="section-tag">Get In Touch</span>
      <h2 class="section-title"><span class="red">Contact Us</span></h2>
      <div class="section-divider center"></div>
      <p class="section-lead section-lead-center" style="color: black;">Ready to experience Keerthi Tea Product? Reach out to us today for orders, inquiries, or feedback.</p>
    </div>
    

    <div class="row g-4">

      <!-- Contact Info -->
      <div class="col-lg-4" data-aos="fade-right">
        <div class="contact-info-card">
          <h4 style="font-weight:700;margin-bottom:24px;font-size:1.15rem;">Contact Information</h4>

          <div class="contact-item">
            <div class="contact-item-icon"style="background:var(--green);"><i class="fas fa-phone-alt"></i></div>
            <div>
              <h6>Phone</h6>
              <a href="tel:+919344443435">+91 93444 43435</a>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon" style="background:var(--green);"><i class="fas fa-envelope"></i></div>
            <div>
              <h6>Email</h6>
              <a href="mailto:keerthivasan1892003@gmail.com">keerthivasan1892003@gmail.com</a>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon"style="background:var(--green);"><i class="fas fa-globe"></i></div>
            <div>
              <h6>Website</h6>
              <a href="https://www.keerthitea.com" target="_blank">www.keerthitea.com</a>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon" style="background:var(--green);"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <h6>Address</h6>
              <p>Sithanur Thalaivaipatty,<br />Salem – 636302,<br />Tamil Nadu, India</p>
            </div>
          </div>

          <div class="mt-4">
            <a href="https://wa.me/919344443435" target="_blank" class="btn-green d-inline-flex align-items-center gap-2" style="width:100%;justify-content:center;">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-8" data-aos="fade-left" data-aos-delay="100">
        <div class="contact-form-wrap">
          <h4 style="font-weight:700;margin-bottom:24px;font-size:1.15rem;">Product Inquiry Form</h4>

          <form id="contactForm">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name *</label>
                <input type="text" class="form-control" placeholder="Your full name" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone Number *</label>
                <input type="tel" class="form-control" placeholder="+91 XXXXX XXXXX" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address *</label>
                <input type="email" class="form-control" placeholder="your@email.com" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Interested In</label>
                <select class="form-select">
                  <option value="">Select Category</option>
                  <option>Tea Powders</option>
                  <option>Loose Leaves</option>
                  <option>Gift Boxes</option>
                  <option>Bulk Orders</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label">Your Message</label>
                <textarea class="form-control" rows="4" placeholder="How can we help you?"></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-submit">
                  <i class="fas fa-paper-plane me-2"></i>Send Message
                </button>
                <div id="formSuccess" class="form-success">
                  <i class="fas fa-check-circle me-2"></i>Thank you! Your message has been sent.
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>

    <!-- Map -->
    <div class="map-embed mt-5" data-aos="fade-up">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.5!2d79.0167!3d11.9667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDU4JzAwLjEiTiA3OcKwMDEnMDAuMSJF!5e0!3m2!1sen!2sin!4v1700000000000"
        width="100%"
        height="350"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Keerthi Tea Product Location">
      </iframe>
    </div>

  </div>
</section>

<?php include("footer.php"); ?>