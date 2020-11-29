<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{BASE}}">Mini Framework</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{BASE}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{BASE}}produto/">Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{BASE}}quem-somos/">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{BASE}}contato/">Contato</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="get" action="{{BASE}}pesquisa/">
                <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" name="pes">
                <button class="btn btn-info my-2 my-sm-0" type="submit">Busc    ar</button>
            </form>
        </div>
    </nav>
</header>