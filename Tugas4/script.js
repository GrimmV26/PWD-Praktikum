document.addEventListener('DOMContentLoaded', () => {
    const btnBackToTop = document.getElementById('btnBackToTop');
    const topHeader = document.getElementById('top-header');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 500 || document.documentElement.scrollTop > 500) {
            btnBackToTop.classList.add('show');
        } else {
            btnBackToTop.classList.remove('show');
        }
    });

    btnBackToTop.addEventListener('click', () => {
        topHeader.scrollIntoView({ behavior: 'smooth' });
    });
});
