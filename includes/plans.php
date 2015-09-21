  <div class="section" id="plans">
    <div class="row">
      <div class="columns medium-12">
        <div class="title wow fadeInDown">Planos</div>
        <!-- PLANS -->
        <div class="row addequalizer" >
          <!-- PLAN 1 -->
          <div class="columns medium-4 wow slideInLeft planBox botMarg" >
            <div class="planTitle">Plano 1</div>
            <div class="bg" data-equalizer-watch>
              <ul>
                <li>Exibição das fotos durante o evento</li>
                <li>Painel de controle</li>
                <li>Álbum Digital</li>
                <li>-</li>
                <li>-</li>
                <li>Moderador de conteúdo Remoto</li>
              </ul>
              <div class="planPrice">
                R$499 no boleto <br/>
                ou <br/>
                R$599 em até 12x no Cartão de Crédito
              </div>
              <a href="#register" class="buy" title="Contrate este plano">Contratar</a>
            </div>
          </div>
          <!-- PLAN 2 -->
          <div class="columns medium-4 wow slideInDown planBox botMarg" >
            <div class="planTitle">Plano 2</div>
            <div class="bg" data-equalizer-watch>
              <ul>
                <li>Exibição das fotos durante o evento</li>
                <li>Painel de controle</li>
                <li>Álbum Digital</li>
                <li>Modem para acesso a internet</li>
                <li>-</li>
                <li>Moderador de conteúdo Remoto</li>
              </ul>
              <div class="planPrice">
                Consulte Valor
              </div>
              <a href="#contact" class="buy" title="Peça um orçamento" data-reveal-id="orcamentoP2">Orçamento</a>
            </div>
          </div>
          <!-- PLAN 3 -->
          <div class="columns medium-4 wow slideInRight planBox botMarg" >
            <div class="planTitle">Plano 3</div>
            <div class="bg" data-equalizer-watch>
              <ul>
                <li>Exibição das fotos durante o evento</li>
                <li>Painel de controle</li>
                <li>Álbum Digital</li>
                <li>Modem para acesso a internet</li>
                <li>Computador para transmissão</li>
                <li>Moderador de conteúdo Remoto</li>
              </ul>
              <div class="planPrice">
                Consulte Valor
              </div>
              <a href="#contact" class="buy" title="Peça um orçamento" data-reveal-id="orcamentoP3">Orçamento</a>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <!-- SCROLL ICON -->
    <a id="scrollDown" class="scrollIcon3 wow bounceInUp" data-wow-delay=".9s" href="#register"></a>

    <div id="orcamentoP2" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
      <h2 id="modalTitle">Orçamento Plano 2</h2>
      <p class="desc text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione dolores delectus quo facere quis provident labore autem at rem laudantium earum necessitatibus cupiditate quisquam maxime quidem consequatur ipsum, quod sit.</p>

      <div class="contactFormMsg text-center">
        <strong class="s">ORÇAMENTO ENVIADO COM SUCESSO</strong> <br>
        Obrigado por entrar em contato, em breve retornaremos
      </div>

      <form action="#" method="post" data-abide id="orcamentoPlan2">
        <div class="row collapse">
          <div class="columns medium-6">
            <div class="columns medium-12">
              <label for="orcName">Nome:*
                <input type="text"  pattern="alpha" name="orcName" id="orcName" required>
                <small class="error">Por favor, digite o seu nome</small>
              </label>
            </div>

            <div class="columns medium-12">
              <label for="orcEmail">E-mail:*
                <input type="text"  pattern="email" name="orcEmail" id="orcEmail" required>
                <small class="error">Por favor, digite o seu e-mail</small>
              </label>
            </div>

            <div class="columns medium-12">
              <label for="orcTel">Telefone:*
                <input type="text"  class="telefoneMask" name="orcTel" id="orcTel" required>
                <small class="error">Por favor, digite o seu telefone</small>
              </label>
            </div>
            
            <div class="columns medium-4">
              <label for="orcDate">Data de Envio:*
                <input type="text"  class="dateMask" name="orcDate" id="orcDate" required>
              </label>
              <small class="error">Por favor, digite a data de envio</small>
            </div>
            <div class="columns medium-5">
              <label for="orcCidade">Cidade:*
                <input type="text"  name="orcCidade" id="orcCidade" required>
              </label>
              <small class="error">Por favor, digite a cidade</small>
            </div>
            <div class="columns medium-3">
              <label for="orcUF">UF:*
                <input type="text"  name="orcUF" id="orcUF" required>
              </label>
              <small class="error">Por favor, digite o estado</small>
            </div>
            
            <small class="leftMarg">(*) Campos de preenchimento obrigatório.</small>
          </div>

          <div class="columns medium-6">
            <div class="columns medium-12">
              <label for="orcEvento">Tipo de Evento:*
                <input type="text"  name="orcEvento" id="orcEvento" required>
                <small class="error">Por favor, digite o tipo do evento</small>
              </label>
            </div>

            <div class="columns medium-12">
              <label for="orcLocalNome">Nome do Local:*
                <input type="text"  name="orcLocalNome" id="orcLocalNome" required>
                <small class="error">Por favor, digite o nome do local</small>
              </label>
            </div>

            <div class="columns medium-6">
              <label for="orcConvidados">Número de Convidados:*
                <input type="text"  name="orcConvidados" id="orcConvidados" required>
                <small class="error">Por favor, digite o número de convidados</small>
              </label>
            </div>
            <div class="columns medium-6">
              <label for="orcLocalTipo">Tipo de Local:*
                <select  name="orcLocalTipo" id="orcLocalTipo" required>
                  <option value="">- - -</option>
                  <option value="">local tipo 1</option>
                  <option value="">local tipo 2</option>
                  <option value="">local tipo 3</option>
                  <option value="">local tipo 4</option>
                  <option value="">local tipo 5</option>
                </select>
                <small class="error">Por favor, selecione o tipo de local</small>
              </label>
            </div>

            <div class="columns medium-12">
              <label for="orcMoreInfos">Informações adicionais e/ou dúvidas:
                <textarea name="orcMoreInfos" id="orcMoreInfos" rows="5"></textarea>
              </label>
            </div>

            <input type="submit" value="Enviar" class="right">
          </div>
        </div>
      </form>

      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>


    <div id="orcamentoP3" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
      <h2 id="modalTitle">Orçamento Plano 3</h2>
      <p class="desc text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione dolores delectus quo facere quis provident labore autem at rem laudantium earum necessitatibus cupiditate quisquam maxime quidem consequatur ipsum, quod sit.</p>
      
      <div class="contactFormMsg text-center">
        <strong class="s">ORÇAMENTO ENVIADO COM SUCESSO</strong> <br>
        Obrigado por entrar em contato, em breve retornaremos
      </div>
      <form action="#" method="post" data-abide id="orcamentoPlan3">
        <div class="row collapse">
          <div class="columns medium-6">
            <div class="columns medium-12">
              <label for="orcName">Nome:*
                <input type="text"  pattern="alpha" name="orcName" id="orcName" required>
                <small class="error">Por favor, digite o seu nome</small>
              </label>
            </div>

            <div class="columns medium-12">
              <label for="orcEmail">E-mail:*
                <input type="text"  pattern="email" name="orcEmail" id="orcEmail" required>
                <small class="error">Por favor, digite o seu e-mail</small>
              </label>
            </div>

            <div class="columns medium-12">
              <label for="orcTel">Telefone:*
                <input type="text"  class="telefoneMask" name="orcTel" id="orcTel" required>
                <small class="error">Por favor, digite o seu telefone</small>
              </label>
            </div>
            
            <div class="columns medium-4">
              <label for="orcDate">Data de Envio:*
                <input type="text"  class="dateMask" name="orcDate" id="orcDate" required>
              </label>
              <small class="error">Por favor, digite a data de envio</small>
            </div>
            <div class="columns medium-5">
              <label for="orcCidade">Cidade:*
                <input type="text"  name="orcCidade" id="orcCidade" required>
              </label>
              <small class="error">Por favor, digite a cidade</small>
            </div>
            <div class="columns medium-3">
              <label for="orcUF">UF:*
                <input type="text"  name="orcUF" id="orcUF" required>
              </label>
              <small class="error">Por favor, digite o estado</small>
            </div>
            
            <small class="leftMarg">(*) Campos de preenchimento obrigatório.</small>
          </div>

          <div class="columns medium-6">
            <div class="columns medium-12">
              <label for="orcEvento">Tipo de Evento:*
                <input type="text"  name="orcEvento" id="orcEvento" required>
                <small class="error">Por favor, digite o tipo do evento</small>
              </label>
            </div>

            <div class="columns medium-12">
              <label for="orcLocalNome">Nome do Local:*
                <input type="text"  name="orcLocalNome" id="orcLocalNome" required>
                <small class="error">Por favor, digite o nome do local</small>
              </label>
            </div>

            <div class="columns medium-6">
              <label for="orcConvidados">Número de Convidados:*
                <input type="text"  name="orcConvidados" id="orcConvidados" required>
                <small class="error">Por favor, digite o número de convidados</small>
              </label>
            </div>
            <div class="columns medium-6">
              <label for="orcLocalTipo">Tipo de Local:*
                <select  name="orcLocalTipo" id="orcLocalTipo" required>
                  <option value="">- - -</option>
                  <option value="">local tipo 1</option>
                  <option value="">local tipo 2</option>
                  <option value="">local tipo 3</option>
                  <option value="">local tipo 4</option>
                  <option value="">local tipo 5</option>
                </select>
                <small class="error">Por favor, selecione o tipo de local</small>
              </label>
            </div>

            <div class="columns medium-12">
              <label for="orcMoreInfos">Informações adicionais e/ou dúvidas:
                <textarea name="orcMoreInfos" id="orcMoreInfos" rows="5"></textarea>
              </label>
            </div>

            <input type="submit" value="Enviar" class="right">
          </div>
        </div>
      </form>

      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
  </div>