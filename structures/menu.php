        <nav id="tb-menu">
            <div id="logo">
                <img src="img/cenoura icone.png" alt="LOGO" width="40px" height="40px">
                <p>oRange</p>
            </div>
            <div id="ico-menu">
                <i class="fa fa-bars fa-2x" onclick="menuShow()"></i>
            </div>
            <ul>
                <li><a href="lancamentos.php" class="active">Lançamentos</a></li>
                <li><a href="categorias.php">Categorias</a></li>
                <li><a href="estoque.php">Lista De Produtos</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li>
                    <div id="type-mood">
                        <input type="checkbox" class="checkbox" id="chk" onchange="changeBackground()">
                        <label class="label" for="chk">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                            <div class="ball"></div>
                        </label>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="conteiner">
            <video autoplay loop muted plays-inline id="oRangeBackground" class="back-video">
                <source id="oRangeBackgroundSource" src="img/oRangeBackgroundAnimated.mp4" type="video/mp4">
            </video>