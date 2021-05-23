<?php require_once("header.php"); ?>

    <section class="fluid-container p-4" id="container-tabs">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10 ">
                    <ul class="tabs">
                        <li class="tab-content">
                            <a href="#"><span class="smart-number">1</span></a>
                            <div class="tabs-items">
                                <h5>Cadastra</h5>
                                <ul>
                                    <li><a href="#">Organização</a></li>
                                    <li><a href="#">Representantes</a></li>
                                    <li><a href="#">Unidades</a></li>
                                    <li><a href="#">Regulamentos</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="tab-content">
                            <a href="#"><span class="smart-number">2</span></a>
                            <div class="tabs-items">
                                <h5>ORÇA</h5>
                                <ul>
                                    <li><a href="#">Solicitação</a></li>
                                    <li><a href="#">Oferta</a></li>
                                    <li><a href="#">Contrato</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="tab-content">
                            <a href="#"><span class="smart-number">3</span></a>
                            <div class="tabs-items">
                                <h5>PLANEJA</h5>
                                <ul>
                                    <li><a href="#">Plano de Manej</a></li>
                                    <li><a href="#">Anexos</a></li>
                                    <li><a href="#">Dados Básicos</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="tab-content">
                            <a href="#"><span class="smart-number">4</span></a>
                            <div class="tabs-items">
                                <h5>AVALIA</h5>
                                <ul>
                                    <li><a href="#">Carta Comentário </a></li>
                                    <li><a href="#">Plano Avaliação</a></li>
                                    <li><a href="#">Inspeção</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="tab-content">
                            <a href="#"><span class="smart-number">5</span></a>
                            <div class="tabs-items">
                                <h5>REVISA</h5>
                                <ul>
                                    <li><a href="#">Não Conformidades</a></li>
                                    <li><a href="#">Revisão</a></li>
                                    <li><a href="#">Apelação</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="tab-content">
                            <a href="#"><span class="smart-number">6</span></a>
                            <div class="tabs-items">
                                <h5>CERTIFICA</h5>
                                <ul>
                                    <li><a href="#">Sumário da Revisão</a></li>
                                    <li><a href="#">Correções</a></li>
                                    <li><a href="#">Certificação</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="fluid-container p-4" id="container-status-bar">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10 ">
                    <h4>Cadastra</h4>
                    <div class="all-status-content">
                        <ul class="steps-tab">
                            <li><a href="#">Organização</a></li>
                            <li><a href="#">Representantes</a></li>
                            <li><a href="#">Unidades</a></li>
                            <li><a href="#">Regulamentos</a></li>
                        </ul>
                        <div class="status-bar">
                            <div class="bar-container">
                                <div class="bar-pointer">
                                    <div class="status-block analise">
                                        <img src="imgs/analiseicon.svg">
                                        <span>Em análise</span>
                                    </div>
                                    <div class="status-block reprovado">
                                        <img src="imgs/reprovadoicon.svg">
                                        <span>Etapa não aprovada.</span>
                                    </div>
                                    <div class="status-block aprovado active">
                                        <img src="imgs/aprovadoicon.svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php require_once("footer.php"); ?>