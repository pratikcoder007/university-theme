    // Mobile menu toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    
    hamburger.addEventListener('click', () => {
      navMenu.classList.toggle('active');
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove('active');
      }
    });
    
    // Slider functionality
    const indicators = document.querySelectorAll('.indicator');
    let currentSlide = 0;
    
    function updateSlider(index) {
      indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i === index);
      });
    }
    
    document.querySelectorAll('.slider-btn').forEach((btn, index) => {
      btn.addEventListener('click', () => {
        if (index === 0) {
          currentSlide = (currentSlide - 1 + indicators.length) % indicators.length;
        } else {
          currentSlide = (currentSlide + 1) % indicators.length;
        }
        updateSlider(currentSlide);
      });
    });
    
    // Auto-advance slider
    setInterval(() => {
      currentSlide = (currentSlide + 1) % indicators.length;
      updateSlider(currentSlide);
    }, 5000);