@extends('site.master.header')
@extends('site.master.menu')

    <div class="row" style="margin-top: 150px;"></div>
    <main role="main">
      <div class="container">
        <h3 class="font_3">CONSTRUINDO O AMANHÃ</h3>
        <p class="text-justify" style="font-weight: normal">
            Como percebemos a classe de produtores e técnicos é das mais valorosas para o mercado de eventos, no entanto, muitas vezes não somos vistos!
            Construir o amanhã  é  ajustar as lentes para enxergar o que até agora foi invisível.
            Vamos  imaginar com ousadia, as novas possibilidades, as novas narrativas,  ampliando a gama do que é provável e desejável.
            Precisamos nos juntar, nos amontoar , encontrando nosso recorte no universo, e, assim lutarmos juntos pelo nosso valor.
            Para isso, precisamos nos conhecer. A seguir uma breve  pesquisa para  levantar dados, criarmos  históricos e irmos buscar nosso interesses.
            Vamos lá?
        </p>
        <div class="row">
            <div class="col-md-6">
                <form action="#" method="POST" class="needs-validation mt-5 mb-5" novalidate>
                    <div class="form-group">
                        <label for="">Você gostaria de ter sua profissão regulamentada?</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q1" name="q1" class="custom-control-input">
                                <label class="custom-control-label" for="q1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q1" name="q1" class="custom-control-input">
                                <label class="custom-control-label" for="q1">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Como vc se classifica?</label>
                        <select class="custom-select" name="q2" id="q2">
                          <option value="">Escolha uma opção</option>
                          <option>Produtor</option>
                          <option>Técnico</option>
                          <option>Diretor técnico</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Qual sua categoria profissional</label>
                        <select class="custom-select" name="q3" id="q3">
                          <option value="">Escolha uma opção</option>
                          <option>Junior</option>
                          <option>Pleno</option>
                          <option>Senior</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Na classificação profissional você  se encaixa como?</label>
                        <select class="custom-select">
                          <option value="">Escolha uma opção</option>
                          <option>Produtor de Montagem de Feiras e Estandes</option>
                          <option>Produtor de Montagem de eventos corporativos (reuniões, convenções, festas )</option>
                          <option>Produtor de Logistica</option>
                          <option value="">Produtor Financeiro</option>
                          <option value="">Produtor de Alimentos e Bebidas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Qual sua cidade base de atuação?</label>
                        <select class="custom-select">
                          <option value="">Escolha uma opção</option>
                          <option>SP</option>
                          <option>RJ</option>
                          <option>SC</option>
                          <option value="">RO</option>
                          <option value="">AM</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Você gostaria que a classe tivesse benefícios?</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nome">Se Sim , favor indicar 03 (exemplo medico, jurídico, alimentação)</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gostaria de participar de uma negociação coletiva para parametrizar a classe?</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Quando é contratado , assina o contrato de trabalho?</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Qual sua faixa de ganho de job por período?</label>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">01 dia de trabalho -</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">15 dias  de trabalho -</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">30 dias  de trabalho -</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Você consegue ter intervalo para  fazer horário  almoço ou jantar? Senão, o que acontece?</label>
                        <select class="custom-select">
                            <option value="">Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                            <option>As vezes</option>
                            <option value="">Fica sem se alimentar</option>
                            <option value="">Se alimenta correndo, muitas vezes na mesa de trabalho</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Quem paga sua alimentação?</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Eu mesmo</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Contratante</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Você usa  seu veiculo para chegar ao trabalho</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Transporte público</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Quando é contratado você tem seguro de Acidentes Pessoais e responsabilidade Civil</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não tenho esta informação</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Em média qual sua carga horária diária?</label>
                        <select class="custom-select">
                            <option value="">Escolha uma opção</option>
                            <option>08 Horas</option>
                            <option>10 Horas</option>
                            <option>12 Horas</option>
                            <option value="">15 Horas ou mais</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="">Quando ultrapassa esta carga horário vc recebe reajuste de valores?</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">O contratante disponibiliza acessórios de segurança ou suporte para trabalho? Quais?</label>
                        <select class="custom-select">
                            <option value="">Escolha uma opção</option>
                            <option>Água</option>
                            <option>Café</option>
                            <option>Uniforme</option>
                            <option value="">Capa de chuva</option>
                            <option value="">Guarda chuva</option>
                            <option value="">EPIs</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="">O contratante disponibiliza um lugar seguro para vc deixar seus pertences?</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Quando a comunicação é feita através de seu celular, você recebe reembolso pra isso?</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">As vezes</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Em caso de afastamento de trabalho, você tem instabilidade contratual?</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">O que acontece se vc sofrer um acidente dentro do local de trabalho?</label>
                        <select class="custom-select">
                            <option value="">Escolha uma opção</option>
                            <option>Tenho apoio medico e hospitalar por conta do contratante</option>
                            <option>Tenho apoio emocional com acompanhamento de psicólogos</option>
                            <option>Tenho contrato reincidido </option>
                            <option value="">Tenho ajuda financeira até a total recuperação</option>
                            <option value="">Nenhuma das alternativas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Qual sua faixa etária</label>
                        <select class="custom-select">
                            <option value="">Escolha uma opção</option>
                            <option>18 a 24</option>
                            <option>25 a 34</option>
                            <option>35 a 44</option>
                            <option value="">45 a 54</option>
                            <option value="">Mais de 55</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Você recebe pelo serviços prestados ao final de cada entrega? Senão, apontar o prazo de pagamento.</label>
                        <select class="custom-select">
                            <option value="">Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                            <option>10 dias</option>
                            <option value="">15 dias</option>
                            <option value="">30 dias</option>
                            <option value="">45 dias</option>
                            <option value="">60 dias ou mais</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">O que acontece se houver atraso em seu pagamento?</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Eu recebo multa e juros de acordo com o que é previsto em lei</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Eu não recebo nada além do valor contrato inicialmente.</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Você concordaria em ter um representante legal, que buscasse  a regulamentação da profissão e melhorias gerais para classe.</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Qual seu receio hoje depois do Corona Virus?</label>
                        <select class="custom-select">
                            <option value="">Escolha uma opção</option>
                            <option>Não ter trabalho</option>
                            <option>Minha classe não ter politica de contratação </option>
                            <option>Minha função profissional acabar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quer  contar algum fato importante ou dar alguma sugestão?</label>
                        <textarea class="form-control" rows="3" maxlength="255" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">E por ultimo, se você gostaria de  se tornar imediatamente um associado? Não haverá nenhum ônus.</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome*</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail*</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" onkeypress="$(this).mask('(00)00000-0000');">
                            <small id="telefoneHelpBlock" class="form-text text-muted">
                                Digite apenas os números do telefone.
                            </small>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cpf">CPF*</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" onkeypress="$(this).mask('000.000.000-00');" required>
                            <small id="cpfHelpBlock" class="form-text text-muted">
                                Digite apenas os números do CPF.
                            </small>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cpf">RG*</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" onkeypress="$(this).mask('00.000.000-0');" required>
                            <small id="cpfHelpBlock" class="form-text text-muted">
                                Digite apenas os números do RG.
                            </small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="email">CEP*</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="email">Endereço*</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Complemento</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Bairro*</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Cidade</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="email">UF</label>
                            <select class="custom-select">
                                <option value=""></option>
                                <option>SP</option>
                                <option>RJ</option>
                                <option>PR</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary float-right">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">

            </div>
        </div>
      </div>
    </main>

@extends('site.master.footer')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
