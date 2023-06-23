<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div id="geral">
        <div id="topo">
            <?php
                include_once('topo.php');
            ?>
        </div>
        <div id="banner">
            <div>
                <p style="font-weight: bold;">PROPRIEDADES CERTIFICADAS</p>
                <br>
                <p>Trabalhamos com mais de 50 produtos certificados para produção de alimentos orgâncios</p>
                <br>
                <input type="button" name="conheca" class="btn_conheca" value="Conheça">
            </div>

        </div>

        <div id="quadro">
            <div class="noticia">
                <div class="noticia_interno">
                    <div class="img_noticia">
                        <img src="img/img_noticia.png" alt="">
                    </div>
                    <div class="titulo_noticia">
                        <p>DELIVERY DE CESTAS ORGÂNICAS</p>
                    </div>
                    <div class="texto_noticia">
                        <p>Receba a cesta de produtos em sua casa toda semana</p>
                    </div>
                </div>
            </div>
            <div class="noticia">
                <div class="noticia_interno">
                    <div class="img_noticia">
                        <img src="img/img_noticia.png" alt="">
                    </div>
                    <div class="titulo_noticia">
                        <p>PRODUTORES CERTIFICADOS</p>
                    </div>
                    <div class="texto_noticia">
                        <p>Todos os fornecedores, são pequenos produtos certificados</p>
                    </div>
                </div>
            </div>
            <div class="noticia">
                <div class="noticia_interno">
                    <div class="img_noticia">
                        <img src="img/img_noticia.png" alt="">
                    </div>
                    <div class="titulo_noticia">
                        <p>PRODUTOS SELECIONADOS</p>
                    </div>
                    <div class="texto_noticia">
                        <p>Todos os produtos passam por um rigoroso processo de seleção</p>
                    </div>
                </div>
            </div>
            
        </div>

        <div id="produtos">
            <div class="transparencia-produtos">
                <p>PRINCIPAIS PRODUTOS</p>
            </div>

            <div class="principais-produtos">
                <div class="lista-produtos">
                    <div class="produto_interno">
                        <div class="img_produto">
                            <img src="img/produto_morango.png" alt="">
                        </div>
                        <div class="titulo_produto">
                            <a href="#">Alface Americana</a>
                        </div>
                    </div>
                </div>
                <div class="lista-produtos">
                    <div class="produto_interno">
                        <div class="img_produto">
                            <img src="img/produto_morango.png" alt="">
                        </div>
                        <div class="titulo_produto">
                            <a href="#">Alface Americana</a>
                        </div>
                    </div>
                </div>
                <div class="lista-produtos">
                    <div class="produto_interno">
                        <div class="img_produto">
                            <img src="img/produto_morango.png" alt="">
                        </div>
                        <div class="titulo_produto">
                            <a href="#">Alface Americana</a>
                        </div>
                    </div>
                </div>
                <div class="lista-produtos">
                    <div class="produto_interno">
                        <div class="img_produto">
                            <img src="img/produto_morango.png" alt="">
                        </div>
                        <div class="titulo_produto">
                            <a href="#">Alface Americana</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div id="rodape">
            <?php
                include_once('rodape.php');
            ?>
        </div>
    </div>    
</body>
</html>