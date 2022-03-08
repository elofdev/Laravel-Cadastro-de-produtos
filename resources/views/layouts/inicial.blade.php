@section('principal')
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('site/style.css') }}">
        <title>Principal</title>
    </head>

    <body>
        <main>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="success"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                        class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                        class="active" aria-current="true"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active"> {{-- Item 1 --}}
                        <p class="placeholder-glow">
                            <span class="placeholder col-12 img-carousel bg-primary" id="img-1"></span>
                        </p>
                        <div class="container">
                            <div class="carousel-caption">
                                <h5>Aproveite.</h5>
                                <p>Informe-se</p>
                                <a class="btn btn-lg btn-primary" data-bs-toggle="button" href="#">Registre-se hoje</a>
                            </div>
                        </div>
                    </div> {{-- Fim item 1 --}}
                    <div class="carousel-item"> {{-- Item 2 --}}
                        <p class="placeholder-glow">
                            <span class="placeholder col-12 img-carousel bg-success" id="img-2"></span>
                        </p>
                        {{-- <img src="site/img/img_carousel_2.png" alt="" class="bd-placeholder-img" width="100%" height="150"> --}}
                        <div class="container">
                            <div class="carousel-caption">
                                <h5>Quem Somos.</h5>
                                <p>Nossa História</p>
                                <p><a class="btn btn-lg btn-primary" data-bs-toggle="button" href="#">Saber Mais</a></p>
                            </div>
                        </div>
                    </div> {{-- Fim do item 2 --}}
                    <div class="carousel-item"> {{-- Item 3 --}}
                        <p class="placeholder-glow">
                            <span class="placeholder col-12 img-carousel bg-info" id="img-3"></span>
                        </p>
                        <div class="container">
                            <div class="carousel-caption">
                                <h5>Conheça nosso Produtos.</h5>
                                <p>Inovações</p>
                                <p><a class="btn btn-lg btn-primary" data-bs-toggle="button" href="#">Conheça nossos
                                        Produtos</a></p>
                            </div>
                        </div>
                    </div> {{-- Fim item 3 --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">o próximo</span>
                </button>
            </div>


            <!-- Marketing messaging and featurettes
          ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <div class="container">
                <!-- Three columns of text below the carousel -->
                <div class="card-group">
                    <div class="card shadow p-3 mb-5 bg-body rounded"> {{-- Inicio Card 1 --}}
                        <img src="site/img/img1.png" class="card-img-top" style="text:center;width:auto; height:20rem"
                            alt="Computador - Imagem 1">
                        <div class="card-body">
                            <h5 class="card-title">Diversos Equipamentos</h5>
                            <p class="card-text">Se quisermos usar um computador inteligente
                                para processar a língua árabe, nos deparamos com um grande desafio,
                                especialmente porque nossa língua é caracterizada pela coerência e sobreposição
                                de seus sistemas. No entanto, a inteligência artificial nos permite obter quatro
                                tipos de processamento, a saber: processamento fonológico, processamento
                                morfológico, processamento gramatical e processamento semântico.
                            </p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary" href="#">Ver detalhes</a>
                        </div>
                    </div> {{-- / Fim do card 1 / --}}
                    <div class="card shadow p-3 mb-5 bg-body rounded"> {{-- Inicio card 2 --}}
                        <img src="site/img/img2.png" class="card-img-top" style="text:center;width:auto; height:20rem"
                            alt="Computador - Imagem 2">
                        <div class="card-body">
                            <h5 class="card-title">3 para confirmar as informações</h5>
                            <p class="card-text">Graças às pesquisas e técnicas de
                                inteligência artificial, conseguimos passar do estágio de lidar com o físico
                                para o estágio de lidar com o lógico, e essa transição se refletiu positivamente
                                na forma como as pessoas lidam com suas línguas vivas, e isso significa que deve
                                refletir-se positivamente na forma como lidamos com a nossa língua árabe.
                            </p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary" href="#">Ver detalhes</a>
                        </div>
                    </div> {{-- Fim do card 2 --}}
                </div><!-- /.row -->
            </div><!-- /.container -->


            <!-- FOOTER -->
            <div id="footer" class="position-relative bottom-0 end-0 border-3 p-3 border-primary">
                <footer class="container">
                    <p class="float-end"><a href="#">de volta ao topo</a></p>
                    <p>© 2017–2021 Company, Inc.·<a href="#">Política de Privacidade</a>·<a href="#">Termos de Uso</a>
                    </p>
                    <div id="goog-gt-tt" class="skiptranslate" dir="ltr">
                        <div style="padding: 8px;">
                            <div>
                                <div class="logo"><img
                                        src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png"
                                        width="20" height="20" alt="Google Tradutor">
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="d-inline me-2">Texto original</p>
                            <span>Sugerir uma tradução melhor</span>
                        </div>
                            <div class="started-activity-container">
                                <hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
                                <div class="activity-root">
                                </div>
                            </div>
                        </div>
                        <div class="status-message" style="display: none;">
                        </div>
                    </div>
                    <div class="goog-te-spinner-pos">
                        <div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg"
                                class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66">
                                <circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round"
                                    cx="33" cy="33" r="30"></circle>
                            </svg></div>
                    </div>

                </footer>
            </div>
        </main>
        <script src="{{ asset('site/jquey.js') }}"></script>
        <script src="{{ asset('site/bootstrap.js') }}"></script>
    </body>

    </html>
@endsection
