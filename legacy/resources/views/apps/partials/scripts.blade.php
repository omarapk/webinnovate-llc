<!-- jQuery JS (CDN) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Bootstrap JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Modernizer JS -->
<script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
<!-- sal.js -->
<script src="{{ asset('assets/js/vendor/sal.js') }}"></script>
<!-- Dark Mode Switcher -->
<script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swiper.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-appear.js') }}"></script>
<script src="{{ asset('assets/js/vendor/odometer.js') }}"></script>
<script src="{{ asset('assets/js/vendor/backtotop.js') }}"></script>
<script src="{{ asset('assets/js/vendor/isotop.js') }}"></script>
<script src="{{ asset('assets/js/vendor/imageloaded.js') }}"></script>
<script src="{{ asset('assets/js/vendor/wow.js') }}"></script>
<script src="{{ asset('assets/js/vendor/waypoint.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/easypie.js') }}"></script>
<script src="{{ asset('assets/js/vendor/text-type.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/vendor/magnify-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/paralax-scroll.js') }}"></script>
<script src="{{ asset('assets/js/vendor/paralax.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/countdown.js') }}"></script>
<script src="{{ asset('assets/js/vendor/plyr.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jodit.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/Sortable.min.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Enhanced Smooth Scrolling JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enhanced smooth scrolling for all anchor links
        const anchorLinks = document.querySelectorAll('a[href^="#"]');

        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                // Skip if it's just a hash
                if (href === '#') return;

                const targetElement = document.querySelector(href);

                if (targetElement) {
                    e.preventDefault();

                    // Get the target position with offset
                    const targetPosition = targetElement.offsetTop - 100; // 100px offset for header

                    // Smooth scroll to target
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });

                    // Update URL without page jump
                    history.pushState(null, null, href);
                }
            });
        });

        // Add active state to navigation links on scroll
        const sections = document.querySelectorAll('#features, #blog, #faq, #pricing, #affiliate');
        const navLinks = document.querySelectorAll('.mainmenu a[href^="#"]');

        window.addEventListener('scroll', function() {
            let current = '';
            const scrollPosition = window.scrollY + 150; // Offset for better detection

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    });
</script>

<!-- Read More Functionality for Testimonials -->
<script>
    function toggleReadMore(button) {
        const testimonialText = button.previousElementSibling;
        const isExpanded = testimonialText.classList.contains('expanded');

        if (isExpanded) {
            testimonialText.classList.remove('expanded');
            button.textContent = 'Read more';
        } else {
            testimonialText.classList.add('expanded');
            button.textContent = 'Read less';
        }
    }
</script>

<!-- Initialize Mobile Menu and Other Functionalities -->
<script>
    $(document).ready(function() {
        // Initialize mobile menu functionality
        if (typeof eduJs !== 'undefined') {
            eduJs.popupMobileMenu();
            eduJs.headerSticky();
        }

        // Alternative mobile menu initialization if eduJs is not available
        $(".hamberger-button").on("click", function(e) {
            e.preventDefault();
            $(".popup-mobile-menu").addClass("active");
        });

        $(".close-button").on("click", function(e) {
            e.preventDefault();
            $(".popup-mobile-menu").removeClass("active");
        });

        // Close menu when clicking outside
        $(".popup-mobile-menu").on("click", function(e) {
            if (e.target === this) {
                $(".popup-mobile-menu").removeClass("active");
            }
        });
    });
</script>
