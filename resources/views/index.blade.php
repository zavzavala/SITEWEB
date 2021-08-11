
  @extends('layouts.geral')
  
  @section('content-page')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2" >ImpoSerC</h1>
        <div class="row center">
          <h1 class="header col s12 light" style="color:white-text;">Importação e Serviços de Consultoria, Lda.</h1>
        </div>
        <div class="row center">
          <a href="{{url('geral')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Clique aqui para ver os serviços</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/importacao2.jpg')}}" alt="Unsplashed background img 1"></div>
  </div>

  
 <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Caracterização histórica e localização da ImpoSerC, Lda</h4>
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
          <h1 class="header col s12 light" style="color:teal;">Importação e Exportação</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/importacao3.png')}}" alt="Unsplashed background img 2"></div>
  </div>

       <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Serviços</h4>
          <p class="left-align light center">
              
        -Viaturas ligeiras e pesadas;<br>
        -Material de laboratório; <br>
        -Material de construção; <br>
        -Equipamento industrial; & <br>
        -Insumos agrícolas.<br>
          </p>
          </div>
          </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1 class="header col s12 light" style="color:teal;">Contabilidade</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/contabilidade1.png')}}" alt="Unsplashed background img 3"></div>
  </div>
  
  <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Serviços</h4>
          <p class="left-align light center">
         -Abertura e encerramento da empresa;<br>
         -Escrituração contabilística;<br>
         -Demostrações Financeiras;<br>
         -Apuramento de impostos;<br>
         -Reconciliaçao de contas; &<br>
         -Assistência e Formação.
          </p>
          </div>
          </div>
<br><br><br>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1 class="header col s12 light" style="color:teal;">Tecnologias de Informação e Comunicação</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/importacao1.png')}}" alt="Unsplashed background img 3"></div>
  </div>
    <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Serviços</h4>
          <p class="left-align light center">
              
        -Suporte na área de Help-desk;<br>
        -Configuração de impressoras, scanners & Internet(roteadores);<br>
        -Manuntenção de computadores & instalação de antivirus;<br>
        -Desenvolvimento de sistemas de gestão;<br>
        -Criação de páginas Web; &
        -Entre outros servicos.
        
        
          </p>
          </div>
          </div>
  
    @endsection
