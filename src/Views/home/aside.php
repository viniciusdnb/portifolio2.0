<aside class="aside-container">
    <div class="aside-about">
        <h2>EU</h2>
        <img class="aside-img" src="<?php echo LINK; ?>public/img/minha-foto.png" alt="minha foto">
        <hr>
        <div class="aside-about-svg">
            <?php include "aboutSVG.php"; ?>
        </div>
        <button class="btn" onclick="c(this)" aria-expanded="false">
            <img src="https://img.icons8.com/windows/64/000000/php-logo.png" />
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z" />
            </svg>
            <div class="btn-content">
                <p>
                    Variaveis. Tipos de dados e operadores. Estruturas Condicionais, Repetições, Manipulaçao de string, datas, arrays. funções, Objetos, MVC.
                </p>
                <div class="dropdown">
                    <span>CERTIFICADOS</span>
                    <div class="dropdown-content">
                        <div class="doopdown-content-link">
                            <a href="https://www.devmedia.com.br/certificado/tecnologia/php/vinicius-henrique-costa-da-silva">DEVIMEDIA</a>
                            <a href="https://cursos.alura.com.br/user/viniciusdnb/fullCertificate/fe68b71c0ca998d91c7a116d2392a4ed">ALURA</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </button>
    </div>
</aside>

<script>
    function c(e) {

        if (e.getAttribute("aria-expanded") == "true") {
            var btn = e.querySelector(".btn-content");
            btn.style.display = "none";
            e.setAttribute("aria-expanded", "false");

        } else {
            var btn = e.querySelector(".btn-content");
            btn.style.display = "block";
            btn.style.flexDirection = "column";
            e.setAttribute("aria-expanded", "true");
        }

        console.log(typeof e.getAttribute("aria-expanded"));
    }
</script>