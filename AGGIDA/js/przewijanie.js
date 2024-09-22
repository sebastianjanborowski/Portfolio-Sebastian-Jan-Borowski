
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            var scrollToTopBtn = document.getElementById("scrollToTopBtn");
            var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            var scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrollPercent = (scrollTop / scrollHeight) * 100;
            
            if (scrollPercent > 95 || scrollPercent < 1 || window.innerWidth <= 268) {
                scrollToTopBtn.style.display = "none";
            } else {
                scrollToTopBtn.style.display = "block";
            }
        }

        function scrollToTop() {
            var position = document.documentElement.scrollTop || document.body.scrollTop;
            if (position > 0) {
                window.requestAnimationFrame(scrollToTop);
                window.scrollTo(0, position - position / 8);
            }
        }
