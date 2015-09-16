  <div class="section" id="register">
    <div class="row">
      <div class="columns medium-12">
        <div class="title wow fadeInDown">Cadastro</div>

        <div class="row">
          <div class="columns medium-4 medium-offset-1 wow slideInLeft">
            <div class="titleSignIn">Não sou cadastrado</div>
            <form action="#" method="post" data-abide>
              <div>
                <label>Nome: *
                <input type="text" required pattern="alpha" id="nome" name="nome">
                </label>
                <small class="error">Por favor, digite o seu nome</small>
              </div>
              <div>
                <label>E-mail: *
                <input type="text" required pattern="email" id="email" name="email">
                </label>
                <small class="error">Por favor, digite o seu e-mail</small>
              </div>
              <div class="row">
              <div class="columns medium-6">
                <div>
                  <label>CPF: *
                  <input type="text" required  id="cpf" name="cpf">
                  </label>
                  <small class="error">Por favor, digite o seu CPF</small>
                </div>
              </div>
              <div class="columns medium-6">
                <div>
                  <label>Telefone: *
                  <input type="text" required  id="telefone" name="telefone">
                  </label>
                  <small class="error">Por favor, digite o seu telefone</small>
                </div>
              </div>
              </div>
              <div class="termsOfUse">
                Ao clicar em cadastrar, você concorda<br> com nossos <a href="#" title="Termos de Uso - FotoTube" data-reveal-id="termsOfUse">Termos de Uso</a>
              </div>
              <input type="submit" value="Cadastrar" class="right">
              <div class="clear"></div>
              <small>(*)Campos de preenchimento obrigatório</small>

            </form>
              <div class="formMsg" id="signIn">Cadastro Efetuado com sucesso!</div>
            <!-- TERMS OF USE -->
            <div id="termsOfUse" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
              <h2 id="modalTitle">Termos de Uso</h2>
              <ol>
                 <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
                 <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
                 <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
                 <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
              </ol>
              <a class="close-reveal-modal" aria-label="Fechar">&#215;</a>
            </div>
          </div>
          <div class="columns medium-4 end medium-offset-2 wow slideInRight">
            <div class="titleLogin">Já sou cadastrado</div>
            <form action="#" method="post" data-abide>
              <div>
                <label>E-mail:
                <input type="text" required pattern="email" id="email" name="email">
                </label>
                <small class="error">Por favor, digite o seu e-mail</small>
              </div>
              <div>
                <label>CPF:
                <input type="text" required  id="cpf2" name="cpf2">
                </label>
                <small class="error">Por favor, digite o seu CPF</small>
              </div>
              <input type="submit" value="Cadastrar" class="right">
            </form>
            <div class="clear"></div>
            <div class="formMsg" id="logIn">
              Este email está cadastrado com o CPF ***.***.248-37 <br/>
              Esse CPF está cadastrado com o email mat****@gmail.com
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SCROLL ICON -->
    <a id="scrollDown" class="scrollIcon2 wow bounceInUp" data-wow-delay=".2s" href="#contact"></a>
  </div>