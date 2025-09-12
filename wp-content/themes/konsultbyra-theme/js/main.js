// Main JavaScript for DataAI Konsult theme

jQuery(document).ready(function($) {
    // Smooth scrolling for anchor links
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
                return false;
            }
        }
    });

    // Add animation classes on scroll
    function animateOnScroll() {
        $('.approach-card, .service-card, .timeline-item').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('animate-in');
            }
        });
    }

    // Run on scroll
    $(window).scroll(animateOnScroll);
    // Run on load
    animateOnScroll();

    // Mobile menu toggle (if added later)
    $('.mobile-menu-toggle').click(function() {
        $('.main-nav').toggleClass('mobile-menu-open');
    });

    // Form validation enhancement
    $('#contact-form').on('submit', function(e) {
        var isValid = true;
        var requiredFields = $(this).find('[required]');
        
        requiredFields.each(function() {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });

        if (!isValid) {
            e.preventDefault();
            alert('Vänligen fyll i alla obligatoriska fält.');
        }
    });

    // Remove error class on input
    $('input, textarea, select').on('input change', function() {
        $(this).removeClass('error');
    });
});