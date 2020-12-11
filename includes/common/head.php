<header class="row">
    <div class="offset-1 col-1">
        <a href="/"><img id="header-logo" src="../../assets/media/images/logo.png" alt="Logo"></a>
    </div>
    <div class="col-9">
        <nav class="d-none d-sm-block">
            <ul>
                <a href="<?= $domain ?>/"><li>Accueil</li></a>
                <a href="<?= $domain ?>/articles"><li>Articles</li></a>
                <a href="<?= $domain ?>/contact"><li>Contact</li></a>
                <a href="https://discord.gg/hBANEvuDht" target="blank"><li class="header-btn">Notre discord</li></a>
            </ul>
        </nav>
        <div id="burger" class="d-flex d-md-none" onclick="headDisplay();">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
        </div>
    </div>
</header>