/* ===================================
   CHAYA TIME INDIA PVT LTD
   Main JavaScript
   =================================== */

$(document).ready(function () {

  /* ===================================
     NAVBAR SCROLL BEHAVIOR
     =================================== */
  $(window).on('scroll', function () {
    var scrollTop = $(this).scrollTop();

    // Navbar shrink on scroll
    if (scrollTop > 60) {
      $('#navbar').addClass('scrolled');
    } else {
      $('#navbar').removeClass('scrolled');
    }

    // Back to top button visibility
    if (scrollTop > 400) {
      $('#back-to-top').addClass('show');
    } else {
      $('#back-to-top').removeClass('show');
    }

    // Active nav link based on scroll position
    var sections = $('section[id]');
    sections.each(function () {
      var sectionTop = $(this).offset().top - 100;
      var sectionId = $(this).attr('id');
      if (scrollTop >= sectionTop) {
        $('.navbar-nav .nav-link').removeClass('active');
        $('.navbar-nav .nav-link[href="#' + sectionId + '"]').addClass('active');
      }
    });
  });

  /* ===================================
     SMOOTH SCROLL
     =================================== */
  $('a[href^="#"]').on('click', function (e) {
    var target = $(this).attr('href');
    if (target && target !== '#' && $(target).length) {
      e.preventDefault();
      var offset = $(target).offset().top - 80;
      $('html, body').animate({ scrollTop: offset }, 700, 'swing');
      // Close mobile nav
      $('#navbarCollapse').collapse('hide');
    }
  });

  /* ===================================
     BACK TO TOP
     =================================== */
  $('#back-to-top').on('click', function () {
    $('html, body').animate({ scrollTop: 0 }, 600);
  });

  /* ===================================
     ANIMATED COUNTERS
     =================================== */
  var countersStarted = false;

  function startCounters() {
    if (countersStarted) return;
    countersStarted = true;

    $('.counter-value').each(function () {
      var $this = $(this);
      var target = parseInt($this.data('target'));
      var duration = 2200;
      var step = Math.ceil(target / (duration / 16));

      var current = 0;
      var timer = setInterval(function () {
        current += step;
        if (current >= target) {
          current = target;
          clearInterval(timer);
        }
        $this.text(current.toLocaleString('en-IN'));
      }, 16);
    });
  }

  // Watch for counter section visibility
  $(window).on('scroll', function () {
    var investmentSection = $('#investment');
    if (investmentSection.length) {
      var sectionTop = investmentSection.offset().top;
      var windowBottom = $(window).scrollTop() + $(window).height();
      if (windowBottom > sectionTop + 100) {
        startCounters();
      }
    }
  });

  /* ===================================
     FORM SUBMISSION (Contact & Catalog)
     =================================== */
  $('#franchiseForm, #contactForm').on('submit', function (e) {
    e.preventDefault();
    var $form = $(this);
    var $btn = $form.find('.btn-submit');
    var $success = $('#formSuccess');

    $btn.html('<i class="fas fa-spinner fa-spin me-2"></i>Sending...').prop('disabled', true);

    // Simulate form submission
    setTimeout(function () {
      $btn.html('<i class="fas fa-paper-plane me-2"></i>Send Message').prop('disabled', false);
      $success.fadeIn(400);
      $form[0].reset();
      setTimeout(function () { $success.fadeOut(400); }, 5000);
    }, 1500);
  });

  /* ===================================
     AOS INITIALIZATION
     =================================== */
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 700,
      easing: 'ease-out-cubic',
      once: true,
      offset: 80,
      delay: 0
    });
  }

  /* ===================================
     GALLERY HOVER EFFECTS
     =================================== */
  $('.gallery-item').on('mouseenter', function () {
    $(this).siblings().css('opacity', '0.7');
  }).on('mouseleave', function () {
    $(this).siblings().css('opacity', '1');
  });

  /* ===================================
     NAVBAR TOGGLE ANIMATION
     =================================== */
  $('.navbar-toggler').on('click', function () {
    $(this).toggleClass('active');
  });

  /* ===================================
     PARALLAX HERO SUBTLE EFFECT
     =================================== */
  $(window).on('scroll', function () {
    var scrolled = $(this).scrollTop();
    $('.hero-bg-pattern').css('transform', 'translateY(' + scrolled * 0.15 + 'px)');
    $('.float-icon').each(function (i) {
      var speed = 0.05 + (i * 0.02);
      $(this).css('transform', 'translateY(' + scrolled * speed + 'px)');
    });
  });

  /* ===================================
     FRANCHISE CARD TILT EFFECT
     =================================== */
  $('.franchise-card, .mv-card').on('mousemove', function (e) {
    var rect = this.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
    var centerX = rect.width / 2;
    var centerY = rect.height / 2;
    var tiltX = ((y - centerY) / centerY) * 6;
    var tiltY = ((centerX - x) / centerX) * 6;
    $(this).css('transform', 'translateY(-10px) rotateX(' + tiltX + 'deg) rotateY(' + tiltY + 'deg)');
  }).on('mouseleave', function () {
    $(this).css('transform', '');
  });

  /* ===================================
     PROCESS STEP HOVER
     =================================== */
  $('.process-step').on('mouseenter', function () {
    $(this).find('.process-icon-wrap').addClass('animated');
  }).on('mouseleave', function () {
    $(this).find('.process-icon-wrap').removeClass('animated');
  });

  /* ===================================
     SCROLL REVEAL for hero stats
     =================================== */
  setTimeout(function () {
    $('.hero-stat-num').each(function () {
      $(this).addClass('visible');
    });
  }, 1200);

  /* ===================================
     PRODUCT BROCHURE DOWNLOAD
     =================================== */
  $('#downloadBrochure').on('click', function (e) {
    e.preventDefault();
    var $btn = $(this);
    $btn.html('⏳ Preparing...');
    setTimeout(function () {
      $btn.html('📄 Download Catalog');
      alert('Thank you for your interest in Keerthi Tea Product!\n\nPlease contact us at:\n📞 +91 93444 43435\n📧 keerthivasan1892003@gmail.com\n\nOur team will send you the complete product catalog.');
    }, 1500);
  });

  /* ===================================
     LAZY LOAD IMAGES (for gallery)
     =================================== */
  var lazyItems = document.querySelectorAll('.gallery-item');
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('loaded');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    lazyItems.forEach(function (item) {
      observer.observe(item);
    });
  }

  /* ===================================
     TYPED TEXT EFFECT for hero
     =================================== */
  var phrases = ["Premium Tea Experience", "Memorable Every Sip", "India's Finest Chai"];
  var currentPhrase = 0;
  var currentChar = 0;
  var isDeleting = false;
  var $typedEl = $('#typedText');

  if ($typedEl.length) {
    function typeEffect() {
      var phrase = phrases[currentPhrase];
      if (isDeleting) {
        currentChar--;
        $typedEl.text(phrase.substring(0, currentChar));
        if (currentChar === 0) {
          isDeleting = false;
          currentPhrase = (currentPhrase + 1) % phrases.length;
          setTimeout(typeEffect, 500);
          return;
        }
        setTimeout(typeEffect, 50);
      } else {
        currentChar++;
        $typedEl.text(phrase.substring(0, currentChar));
        if (currentChar === phrase.length) {
          isDeleting = true;
          setTimeout(typeEffect, 2500);
          return;
        }
        setTimeout(typeEffect, 80);
      }
    }
    setTimeout(typeEffect, 1500);
  }

});