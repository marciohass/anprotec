<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Font Awesome -->
    <link href="fontawesome-free/css/all.css" rel="stylesheet" />
    <link href="fontawesome-free/css/fontawesome.css" rel="stylesheet" />

    <style>
        .title {
              color: #1316a3;
              margin: 0;
              position: relative;
              bottom: 0px;
              top: -560px;
              left: 30px;
              background-color: #ffffff;
              width: 480px;
              height: 480px;
              line-height: 500px;
              display: -webkit-flex;
              display: flex;
              -webkit-align-items: center;
              align-items: center;
              -webkit-justify-content: center;
              justify-content: center;
              font-family: avenir-lt-w01_85-heavy1475544, sans-serif;
        }
        .font_3 {
            color: #1316a3;
            font-style: normal;
            font-variant-ligatures: normal;
            font-variant-caps: normal;
            font-variant-numeric: normal;
            font-variant-east-asian: normal;
            font-weight: bold;
            font-stretch: normal;
            font-size: 32px;
            line-height: 1.4em;
            letter-spacing: 0.2em;
            font-family: avenir-lt-w01_85-heavy1475544, sans-serif;
        }
        .font_4 {
            font-style: normal;
            font-variant-ligatures: normal;
            font-variant-caps: normal;
            font-variant-numeric: normal;
            font-variant-east-asian: normal;
            font-weight: lighter;
            font-stretch: normal;
            font-size: 20px;
            line-height: 1.4em;
            font-family: avenir-lt-w01_35-light1475496, sans-serif;
        }
        .footer_text {
            font-style: normal;
            font-variant-ligatures: normal;
            font-variant-caps: normal;
            font-variant-numeric: normal;
            font-variant-east-asian: normal;
            font-weight: lighter;
            font-stretch: normal;
            font-size: 16px;
            height: 50px;
            line-height: 50px;
            letter-spacing: 0.1em;
            font-family: avenir-lt-w01_35-light1475496, sans-serif;
        }
        .footer-copyright {
            overflow: hidden;
            color: rgba(255,255,255,0.6);
            background-color: rgba(0,0,0,0.2);
        }
        .footer.page-footer a {
            color: #fff;
        }
        .label {
            color: #1215a2;
            font-weight: 300;
            font-size: 15px;
            line-height: 26px;
        }
        .labelTitle {
            color: #1215a2;
            font-weight: 350;
            font-size: 18px;
            line-height: 26px;
            height: 26px;
        }
        .answer {
            font-weight: 300;
            font-size: 15px;
            line-height: 26px;
        }
        .answer option {
            font-weight: 300;
            font-size: 15px;
            line-height: 26px;
        }
        .textos {
            font-style: normal;
            font-variant-ligatures: normal;
            font-variant-caps: normal;
            font-variant-numeric: normal;
            font-variant-east-asian: normal;
            font-weight: lighter;
            font-stretch: normal;
            font-size: 16px;
            line-height: 1.4em;
            font-family: avenir-lt-w01_35-light1475496, sans-serif;
            color: #1215a2;
        }
        .textos_propositos {
            font-style: normal;
            font-variant-ligatures: normal;
            font-variant-caps: normal;
            font-variant-numeric: normal;
            font-variant-east-asian: normal;
            font-weight: lighter;
            font-stretch: normal;
            font-size: 20px;
            line-height: 1.8em;
            font-family: avenir-lt-w01_35-light1475496, sans-serif;
            color: #1215a2;
        }
        .navbar-light .navbar-nav .nav-link {
            color: white;
        }
        .navbar-light .navbar-nav .nav-link a:hover {
            color: #ff7000!important;
        }
        .navbar-light .navbar-nav .nav-link :active
        {
            color: #ff7000;
        }
    </style>
    <!-- Adicionando JQuery -->


    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
    <script type="text/javascript">

		$(document).ready(function () {

			$.getJSON('/js/estados_cidades.json', function (data) {

				var items = [];
				var options = '<option value="">UF</option>';

				$.each(data, function (key, val) {
					options += '<option value="' + val.sigla + '">' + val.sigla + '</option>';
				});
				$("#estados").html(options);

				$("#estados").change(function () {

					var options_cidades = '';
					var str = "";

					$("#estados option:selected").each(function () {
						str += $(this).text();
					});

					$.each(data, function (key, val) {
						if(val.sigla == str) {
							$.each(val.cidades, function (key_city, val_city) {
								options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
							});
						}
					});

					$("#cidades").html(options_cidades);

				}).change();

			});

		});

    </script>

    <title>Anprotec</title>
  </head>
  <body style="background-color: #f8f9fa">
