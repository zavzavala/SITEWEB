
  @extends('layouts.geral')
  
  @section('content-page')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">ImpoSerC</h1>
        <div class="row center">
          <h1 class="header col s12 light">Importação e Serviços de Consultoria, Lda.</h1>
        </div>
        <div class="row center">
          <a href="{{url('geral')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Click aqui para ver os serviços</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/importacao2.jpg')}}" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Natureza</h5>
            <p class="light">Importação e Serviços de Consultoria é uma empresa de consultoria de serviços e contabilidade, de acordo com os princípios, objectivos, políticas e planos, dirige, planifica e coordena as actividades no âmbito da Tecnologia, serviços de consultoria e Tecnologia Nuclear.</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Visão</h5>

            <p class="light">Formular políticas para o desenvolvimento integrado, articulado e qualitativo da Importação e Serviços de Consultoria das empresas, com vista à indução do crescimento e desenvolvimento socio-económico das empresas em Moçambique.</p>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Missão</h5>

            <p class="light">Promover a oferta de soluções científicas e tecnológicas as empresas nas áreas estratégicas de desenvolvimento definidas nos programas da empresa (ImpoSerC), aliado à promoção do acesso, expansão e garantia de qualidade de serviço das empresas em Moçambique.</p>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Competências</h5>

            <p class="light">1. Propor políticas e estratégias para o desenvolvimento das TICS e Serviços nas empresas;<br> 
2. Formular e implementar planos e programas para o desenvolvimento das TICS e Serviços nas empresas;<br>
 3. Planificar, monitorar, a execução das actividades relacionadas com investigação científica (Tecnologia Nuclear), inovação e desenvolvimento tecnológico (TICS) e Serviços (Contabilidade);<br>
4. Entre outros;
</p>
          </div>
        </div>
        
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1 class="header col s12 light">Importação e Exportação</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/importacao3.png')}}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Caracterização histórica e localização da ImpoSerC</h4>
          <p class="left-align light">A ImpoSerC foi criada pelo Decreto 
 n° 34/2013, 02 de agosto e localiza-se no Bairro do Jardim, Rua das Aleurites n°.16 – Maputo, 
Moçambique com o horário de atendimento de: <br> Segunda a Sexta-feira, das 07h:30min.-15h:30min. <br> Sábado, das 8h:00.-12h:00</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1 class="header col s12 light">Contabilidade</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/contabilidade1.png')}}" alt="Unsplashed background img 3"></div>
  </div>
<br><br><br>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1 class="header col s12 light">Tecnologias de Informação e Comunicação</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/importacao1.png')}}" alt="Unsplashed background img 3"></div>
  </div>
  
    @endsection
