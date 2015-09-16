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

            <div class="columns medium-12">
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
                                    <label for="boleto">
                                        <input type="radio" id="boleto" name="formaPagamento" value="boleto"> Boleto
                                    </label>
                                    <label for="cc">
                                        <input type="radio" id="cc" name="formaPagamento" value="cartao"> Cartão de Crédito
                                    </label>
                                </td>
                                <td>R$ 499,00</td>
                            </tr>

                            <tr>
                                <td colspan="3" height="10" class="bg"></td>
                            </tr>
                            <tr>
                                <td><strong>Cupom de desconto</strong></td>
                                <td><input type="text"> <input type="submit" value="Validar"> </td>
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
                            <tr>
                                <td colspan="3"><strong>Pagamento</strong></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <ul class="inline-list">
                                        <li><label for="master"><input type="radio" id="master" name="cc" value="master card"> <img src="http://placehold.it/65x40" alt=""></label></li>
                                        <li><label for="visa"><input type="radio" id="visa" name="cc" value="visa"> <img src="http://placehold.it/65x40" alt=""></label></li>
                                        <li><label for="elo"><input type="radio" id="elo" name="cc" value="elo"> <img src="http://placehold.it/65x40" alt=""></label></li>
                                        <li><label for="american"><input type="radio" id="american" name="cc" value="american express"> <img src="http://placehold.it/65x40" alt=""></label></li>
                                        <li><label for="diners"><input type="radio" id="diners" name="cc" value="diners club"> <img src="http://placehold.it/65x40" alt=""></label></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table cellspacing="0" cellpadding="0" width="100%">
                                        <tr>
                                            <td>
                                                Nome do Titular
                                                <input type="text" name="titular" patter="alpha" required>
                                            </td>
                                            <td>
                                                Número do Cartão
                                                <input type="text" name="cardNumber" id="pag_numero" required>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
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