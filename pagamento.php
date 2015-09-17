<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>FotoTube | Pagamento</title>

    <link rel="icon" href="img/favicon.png" type="image/x-icon" />

    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.pagepiling.css" />
    <link rel="stylesheet" href="css/main.css?v=<?php echo time();?>" />
    <link rel="stylesheet" href="css/mobile.css?v=<?php echo time();?>" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/zf/dt-1.10.9,r-1.0.7/datatables.min.css"/>
  </head>
  <body>
    <div class="section" id="payment">
        <div class="row">

            <a href="#" class="logo"><img src="img/logo_n2.png" alt="Foto Tube"></a>

            <div class="columns medium-12 collapse">
                <form action="#" method="post" data-abide>
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
                                <td>
                                    <label for="boleto" class="left  rightMarg">
                                        <input type="radio" id="boleto" name="formaPagamento" class="left" style="margin:5px 5px 0 0;" value="boleto" checked> Boleto
                                    </label>
                                    <label for="cc" class="left ">
                                        <input type="radio" id="cc" name="formaPagamento" class="left" value="cartao" style="margin:5px 5px 0 0;"> Cartão de Crédito
                                    </label>
                                </td>
                                <td>R$ 499,00</td>
                            </tr>

                            <tr>
                                <td colspan="3" height="10" class="bg"></td>
                            </tr>
                            <tr>
                                <td><strong>Cupom de desconto</strong></td>
                                <td>
                                    <div class="columns medium-8 noPad topPad">
                                        <input type="text" name="cupom" id="cupom">
                                    </div>
                                    <div class="columns medium-4 noMarg topPad">
                                        <input type="submit" value="Validar" class="cupomSubmit" name="cupomSubmit" id="cupomSubmit">
                                    </div>
                                </td>
                                <td>- R$ 99,00</td>
                            </tr>
                            <tr>
                                <td colspan="3" height="10" class="bg"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Total</strong></td>
                                <td><strong>R$ 400,00</strong></td>
                            </tr>

                            <tr>
                                <td colspan="3" height="10" class="bg"></td>
                            </tr>
                            <tr class="hidePag">
                                <td colspan="3">
                                    <strong>Pagamento</strong>
                                    <div class="row topMarg">
                                        <div class="columns medium-12">
                                            <ul class="inline-list cartoes botPad">
                                                <li>
                                                    <label for="master">
                                                        <img src="img/cc1.jpg" alt="">
                                                        <span class="clear"></span>
                                                        <input type="radio" id="master" name="cc" value="master card" checked>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="visa">
                                                        <img src="img/cc2.jpg" alt="">
                                                        <span class="clear"></span>
                                                        <input type="radio" id="visa" name="cc" value="visa">
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="elo">
                                                        <img src="img/cc3.jpg" alt="">
                                                        <span class="clear"></span>
                                                        <input type="radio" id="elo" name="cc" value="elo">
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="american">
                                                        <img src="img/cc4.jpg" alt="">
                                                        <span class="clear"></span>
                                                        <input type="radio" id="american" name="cc" value="american express">
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="diners">
                                                        <img src="img/cc5.jpg" alt="">
                                                        <span class="clear"></span>
                                                        <input type="radio" id="diners" name="cc" value="diners club">
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="columns medium-6">
                                            Nome do Titular
                                            <input type="text" name="titular" patter="alpha" required>
                                        </div>
                                        <div class="columns medium-6">
                                            Número do Cartão
                                            <input type="text" name="cardNumber" id="pag_numero" required>
                                        </div>

                                        <div class="columns medium-6">
                                            Data de Validade:
                                            <div class="row">
                                                <div class="columns medium-6">
                                                    <div class="columns small-3">
                                                        <label for="mes" class="right inline">Mês</label>
                                                    </div>
                                                    <div class="columns small-9">
                                                        <select name="mes" id="mes">
                                                            <option value="jan">Janeiro</option>
                                                            <option value="fev">Fevereiro</option>
                                                            <option value="mar">Março</option>
                                                            <option value="abr">Abril</option>
                                                            <option value="maio">Maio</option>
                                                            <option value="jun">Junho</option>
                                                            <option value="jul">Julho</option>
                                                            <option value="ago">Agosto</option>
                                                            <option value="set">Setembro</option>
                                                            <option value="out">Outubro</option>
                                                            <option value="nov">Novembro</option>
                                                            <option value="dez">Dezembro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="columns medium-6">
                                                    <div class="columns small-3">
                                                        <label for="ano" class="right inline">Ano</label>
                                                    </div>
                                                    <div class="columns small-9">
                                                        <select name="ano" id="ano">
                                                            <?php
                                                                for ($i = 15; $i <= 25; $i++) {
                                                                    echo '<option value="">20'.$i.'</option>';
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="columns medium-offset-3 medium-3">
                                            Código de Segurança:
                                            <input type="text" id="pag_cod">
                                        </div>
                                    <div class="clear"></div>
                                        <div class="columns small-12 medium-12">
                                            <div class="row small-collapse">
                                            <div class="columns medium-3">
                                                Número de Parcelas:
                                            </div>
                                            <div class="columns medium-6 end">
                                                <select name="ano" id="ano">
                                                    <?php
                                                        $valor = 400;
                                                        for ($i = 1; $i <= 12; $i++) {
                                                            echo '<option value="">'.$i.'x R$'.number_format($valor/$i,2,',','.').'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" value="Finalizar" class="right">
                </form>

                <div class="showPedido" style="display:none">
                    <div class="numeroPedido noUpper botMarg">
                        <strong>Seu pedido #1234567890 foi efetuado com sucesso.</strong> <br>
                        Cartão ****-****-****-7768 - 10x R$ 40,00 <br>
                        Um e-mail com os detalhes da transação foi enviado para email@dominio.com.br
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
                                <td>Cartão de Crédito</td>
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
                                <td><strong>R$ 400,00</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/r/zf/dt-1.10.9,r-1.0.7/datatables.min.js"></script>
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>

    <script src="js/wow.js"></script>
    <script src="js/payment.js?v=<?php echo time();?>"></script>
  </body>
</html>