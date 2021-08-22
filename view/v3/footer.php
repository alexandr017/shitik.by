<img src="/themes/v3/images/up-arrow.svg" alt="Вверх" id="toTopButton">
<footer>
    <a href="/site">О сайте</a>
    <a href="/sitemap">Карта сайта</a>
</footer>
<script>
    document.getElementsByClassName('mob-menu-label')[0].addEventListener('click', function () {
        document.getElementsByClassName('menu-ul')[0].classList.toggle('show');
    });

    document.getElementById('toTopButton').onclick = function () {
        window.scrollTo(0, 0);
    };

    window.onscroll = function() {
        if (window.pageYOffset != 0) {
            document.getElementById('toTopButton').style.display = 'inline-block';
        } else {
            document.getElementById('toTopButton').style.display = 'none';
        }
    };

    window.addEventListener("scroll", () => {
        if (this.scrollY != 0) {
            document.getElementById('toTopButton').style.display = 'inline-block';
        } else {
            document.getElementById('toTopButton').style.display = 'none';
        }
    });

</script>