  <div class="section" id="orderStatus">
    <div class="row">
      <div class="columns medium-12">
        <div class="title wow fadeInDown">Status do Pedido</div>
            <div class="text-center botMarg">
                Digite o Código do Pedido para saber o status!
                <br> <a href="javascript:void(0);" class="mostrarStatus">mostrar infos do pedido</a>
            </div>
            <form action="#" method="post" data-abide>
                <div class="columns medium-6 medium-offset-3">
                    <div class="row small-collapse">
                        <div class="small-9 medium-10 columns">
                            <input type="text" id="order" name="order" placeholder="1234567890" required pattern="number">
                            <small class="error">Código do pedido inválido!</small>
                        </div>
                        <div class="small-4 medium-2 columns">
                            <input class="postfix" type="submit" value="Consultar">
                        </div>
                    </div>
                </div>
            </form>
            <div class="clear"></div>
        <div class="statusPedido">
            <div class="numeroPedido">
                <strong>Pedido #1234567890</strong>
            </div>

            <div class="status nope">
                Pagamento recusado pela operadora de crédito
                <a href="#" class="retry">Tentar Novamente</a>
                <div class="clear"></div>
            </div>
            <div class="status wait">Aguardando pagamento do boleto bancário</div>
            <div class="status done">
                <strong>Pagamento aprovado</strong> <br>
                Instruções para utilização do FotoTube e dados de acesso <br>
                foram encaminhados para seu e-mail de cadastro.
                <br>
                <a href="#"><strong>Reenviar dados e instrução de acesso ao FotoTube</strong></a>
            </div>
            <div class="status nope">Pedido cancelado</div>
<div class="clear"></div>
            <div class="resumoPedido">
                <strong>Resumo do Pedido</strong>
            </div>
            <table cellspacing="0" cellpadding="0" width="100%" id="myTable">
                <thead>
                    <tr>
                        <td><strong>Plano</strong></td>
                        <td><strong>Forma de Pagamento</strong></td>
                        <td><strong>Valor</strong></td>
                    </tr>
                    <tr>
                        <td colspan="3" height="10" class="bg"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Plano 1</td>
                        <td>Boleto</td>
                        <td>R$ 499,00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" height="10" class="bg"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Cupom de desconto</strong></td>
                        <td>- R$ 99,00</td>
                    </tr>
                    <tr>
                        <td colspan="3" height="10" class="bg"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Total</strong></td>
                        <td>R$ 400,00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
      </div>
    </div>

    <div class="clear"></div>
     <?php include('includes/footer.php');?>
  </div>