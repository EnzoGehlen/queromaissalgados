<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>QUERO MAIS Salgados</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Vidaloka&display=swap" rel="stylesheet">
    <link href="../css/uikit.css" rel="stylesheet">
    <link href="../css/styleInscricao.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.css">

</head>

<body>
    <div class="uk-section uk-padding-remove-bottom uk-padding-remove-top uk-section-default">
        <!-- NAV -->


        <div class="uk-section uk-padding-remove-top"
            style="background-image: url(../img/6194.png); background-repeat: repeat;">


            <div class="uk-container">

                <div class="uk-section  uk-section-default" style="background-color: rgba(0,0,0,0.0)">
                    <div class='uk-text-center fundoBranco'>
                        <h1 class="uk-text-center uk-padding-bottom uk-margin-bottom">FORMULÁRIO DE INSCRIÇÃO</h1>
                        <p class="depoimento">
                            Preencha com seus dados e efetue o pagamento através do ambiente seguro do MercadoPago®
                        </p>

                    </div>




                    <section class="site-container padding-tb">

                        <section class="card wow fadeInLeft">

                            <h3 class="wow fadeInDown" data-wow-delay="0.4s">Pré inscrição</h3>

                          
                                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
                                    <input type="text" class="form__input" id="cpfcnpj" name="email">
                                    <label class="form__label" for="cpfcnpj">
                                        <span class="form__label-content">Digite seu Cpf</span>
                                    </label>
                                </div>



                                <div class="form__wrapper--submit wow fadeInLeft" data-wow-delay="0.7s">
                                    <div class="form__input-submit">
                                        <button name="submit" class="btn btn-block">Continuar</button>
                                    </div>
                                </div>
                           




                        </section><!-- /card -->

                        <footer class="footer padding-tb">
                            <div class="footer__content">
                                <p class="text-center text-small">Você será redirecionado ao ambiente de pagamento do <a
                                        href="https://www.mercadopago.com.br/">MercadoPago®</a>.</p>
                                <p class="text-center text-small">Certificado de segurança provido por <a
                                        href="https://king.host/">KingHost</a>
                                </p>
                            </div>
                        </footer><!-- /footer -->
                    </section><!-- /site-container -->
                </div>
            </div>

        </div>




    </div>



    <div class="uk-section-secondary uk-padding-remove-top">


        <div class="uk-container">

            <div id='contato' class="uk-section  uk-section-default" style="background-color: rgba(0,0,0,0.0)">




                <div class="uk-child-width-1-3@m uk-padding-top" uk-grid>
                    <div class='uk-padding-remove-left'>
                        <h3>Restou alguma dúvida?</h3>
                        <h5 class='uk-margin-bottom-large uk-margin-remove-top'>Entre em contato conosco:</h5>
                        <p class='depoimento'>
                            <i style='color: coral;' class="fa fa-map-marker fa-1x "></i>
                            <a style='color: coral'
                                href="https://www.google.com/maps/place/Av.+14+De+Marco,+500+-+Eldorado,+Primavera+do+Leste+-+MT,+78850-000/@-15.5525879,-54.2909612,17z/data=!3m1!4b1!4m5!3m4!1s0x937725c4329b14e3:0x3aed070b65362c6f!8m2!3d-15.552592!4d-54.289224">Avenida
                                Quatorzre de Março, XX - Bairro Parque Eldorado, Primavera do Leste - MT </a>
                        </p>
                        <p class='depoimento'>
                            <i style='color: coral;' class="fa fa-phone fa-1x "></i>
                            (66) 9 9623-5380
                        </p>

                        <p class='depoimento'>
                            <i style='color: coral;' class="fa fa-envelope fa-1x "></i>
                            <a href="mailto:contato@queromaissalgados.com.br">contato@queromaissalgados.com.br</a>
                        </p>
                    </div>

                    <div>

                    </div>

                    <div>
                        <h3>Visite nossas redes sociais</h3>
                        <a style='color: coral;' href="https://www.instagram.com/quero.mais_salgados/"
                            class="uk-icon-button uk-margin-small-right" uk-icon="instagram"></a>
                        <a style='color: coral;' href="https://www.facebook.com/QUERO-MAIS-Salgados-2424305101138693/"
                            class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
                        <a style='color: coral;'
                            href="https://api.whatsapp.com/send?phone=5566996235380&text=Ol%C3%A1!%20Acessei%20o%20site%20e%20desejo%20saber%20mais%20sobre%20o%20curso%20de%20culin%C3%A1ria."
                            class="uk-icon-button" uk-icon="whatsapp"></a>
                    </div>

                </div>
            </div>
            <hr class="uk-divider-icon">
            <p class='uk-text-center uk-margin-bottom'>2020. Desenvolvido por <a class='uk-link-heading'
                    href="mailto:enzogehlen@hotmail.com"> Enzo Gehlen</a>. </p>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="../js/uikit.js"></script>
    <script src="../js/uikit-icons.js"></script>
    <script src="../js/scriptInscricao.js"></script>
    <script src="https://www.geradorcpf.com/assets/js/jquery-1.2.6.pack.js"></script>
    <script src="https://www.geradorcpf.com/assets/js/jquery.maskedinput-1.1.4.pack.js""></script>
    

    <script>
    $(document).ready(function (){
        $("#cpfcnpj").mask("999.999.999-99");
    });

    $('.btn').click(function() {
    
    var cpf = $('#cpfcnpj').val();
   


    var page = "verificaCpf.php";

    $.ajax({
        type: 'POST',
        dataType: 'html',
        url: page,
        data: {
            cpf: cpf
        },
        beforeSend: function() {
            $('.card').html('Carregando...');
        },
        success: function(msg) {
            $(".card").html(msg);
           
        }

    })

});
  
    
    </script>
</body>

</html>