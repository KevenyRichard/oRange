<?php include 'structures/estrut.php'; ?>
        <?php include 'structures/menu.php'; ?>
        
            <div id="page-title">
                <h1>Lançamentos Da Semana</h1>
            </div>
            <div id="slider">
                <div id="slides" class="animeSlider">
                    <input type="radio" name="btn-radio" id="radio1" onclick="selectSlide(1)">
                    <input type="radio" name="btn-radio" id="radio2" onclick="selectSlide(2)">
                    <input type="radio" name="btn-radio" id="radio3" onclick="selectSlide(3)">
                    <input type="radio" name="btn-radio" id="radio4" onclick="selectSlide(4)">

                    <div id="slide1" class="slide first">
                        <a href="https://centralanimestk.net/filmes/one-piece-red/">
                            <img src="img/OnePieceRedFilm.jpg" alt="Filme One Piece RED">
                        </a>
                    </div>
                    <div id="slide2" class="slide">
                        <a href="https://centralanimestk.net/series/isekai-wa-smartphone-to-tomo-ni/">
                            <img src="img/isekai wa smartphone.png" alt="isekai wa smartphone">
                        </a>
                    </div>
                    <div id="slide3" class="slide">
                        <a href="https://centralanimestk.net/series/isekai-de-cheat-skill-wo-te-ni-shita-ore-wa-genjitsu-sekai-wo-mo-musou-suru-level-up-wa-jinsei-wo-kaeta/">
                            <img src="img/isekai de cheat skill.jpg" alt="isekai de cheat skill">
                        </a>
                    </div>
                    <div id="slide4" class="slide">
                        <a href="https://centralanimestk.net/filmes/kono-subarashii-sekai-ni-shukufuku-wo-movie-kurenai-densetsu-dublado/">
                            <img src="img/konosuba.jpe" alt="KONOSUBA -God's blessing on this wonderful world!">
                        </a>
                    </div>
                    <div id="manual-navigation">
                        <label for="radio1" id="manual-btn"></label>
                        <label for="radio2" id="manual-btn"></label>
                        <label for="radio3" id="manual-btn"></label>
                        <label for="radio4" id="manual-btn"></label>
                    </div>
                    <div id="navigation-auto">
                        <div id="auto-btn1"></div>
                        <div id="auto-btn2"></div>
                        <div id="auto-btn3"></div>
                        <div id="auto-btn4"></div>
                    </div>
                </div>
                
            </div>
        </div>
        <script src="js/script.js"></script>
        <script src="js/index.js"></script>
    <?php include 'structures/rodapé.php';?>