document.addEventListener("DOMContentLoaded", function() {

    /* header hidden */
    var header = document.querySelector('.header');
    var lastScrollTop = 0;

    window.addEventListener("scroll", function() {
        var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > lastScrollTop) {
            // scroll down
            header.classList.remove("active");
        } else {
            // scroll up
            header.classList.add("active");
        }
        lastScrollTop = currentScroll;
    });
    /* END header hidden */

    /* tab-list block */
    const titles = document.querySelectorAll(".tab-list__titles ul li");

    titles.forEach(title => {
        title.addEventListener("click", function() {
            const id = this.getAttribute("id").replace("tab-title-", "");
            const contentItems = document.querySelectorAll(".tab-list__content ul li");

            titles.forEach(title => {
                title.classList.remove("active");
            });

            contentItems.forEach(item => {
                item.classList.remove("active");
            });

            this.classList.add("active");
            document.getElementById(`tab-content-${id}`).classList.add("active");
        });
    });
    /* END tab-list block */

});
