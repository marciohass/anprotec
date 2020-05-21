@extends('site.master.header')
@extends('site.master.menu')

    <div class="row" style="margin-top: 150px;"></div>
    <main role="main">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="#" method="POST" class="needs-validation mt-5 mb-5" novalidate>
                    <h5 class="label">QUESTIONÁRIO</h5>
                    <div class="form-group col-md-12">
                        <label for="q1" class="label">Você gostaria de ter sua profissão regulamentada?</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-5">
                        <label for="q2" class="label">Como vc se classifica?</label>
                        <select class="custom-select answer col-md-8" name="q2" id="q2">
                          <option value="">Escolha uma opção</option>
                          <option>Produtor</option>
                          <option>Técnico</option>
                          <option>Diretor técnico</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="q3" class="label">Qual sua categoria profissional</label>
                        <select class="custom-select answer col-md-6" name="q3" id="q3">
                          <option value="">Escolha uma opção</option>
                          <option>Junior</option>
                          <option>Pleno</option>
                          <option>Senior</option>
                        </select>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="q4" class="label">Na classificação profissional você  se encaixa como?</label>
                        <select class="custom-select answer col-md-9">
                          <option value="">Escolha uma opção</option>
                          <option>Produtor de Montagem de Feiras e Estandes</option>
                          <option>Produtor de Montagem de eventos corporativos</option>
                          <option>Produtor de Logistica</option>
                          <option value="">Produtor Financeiro</option>
                          <option value="">Produtor de Alimentos e Bebidas</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="q5" class="label">Qual sua cidade base de atuação?</label>
                        <select class="custom-select answer col-md-8">
                          <option value="">Cidade</option>
                          <option>São Paulo</option>
                          <option>Rio de Janeiro</option>
                          <option>Santa Catarina</option>
                          <option value="">Rondonia</option>
                          <option value="">Amapá</option>
                        </select>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="q6" class="label">Você gostaria que a classe tivesse benefícios?</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-10">
                        <label for="q7" class="label">Se Sim , favor indicar 03 <small class="text muted">(exemplo medico, jurídico, alimentação)</small></label>
                        <input type="text" class="form-control answer col-md-8" name="q7" id="q7" value="" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q8" class="label">Gostaria de participar de uma negociação coletiva para parametrizar a classe?</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-12">
                        <label for="q9" class="label">Quando é contratado , assina o contrato de trabalho?</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-12">
                        <label for="q10" class="label">Qual sua faixa de ganho de job por período?</label>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label answer">01 dia de trabalho</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" maxlength="6">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="q11" class="col-sm-3 col-form-label answer">15 dias  de trabalho</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" maxlength="6">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="q12" class="col-sm-3 col-form-label answer">30 dias  de trabalho</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" maxlength="6">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q13" class="label">Você consegue ter intervalo para  fazer horário  almoço ou jantar? Senão, o que acontece?</label>
                        <select class="custom-select answer col-md-8">
                            <option value="">Escolha uma opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                            <option>As vezes</option>
                            <option value="">Fica sem se alimentar</option>
                            <option value="">Se alimenta correndo, muitas vezes na mesa de trabalho</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q14" class="label">Quem paga sua alimentação?</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-12">
                        <label for="q15" class="label">Você usa  seu veiculo para chegar ao trabalho</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-12">
                        <label for="q16" class="label">Quando é contratado você tem seguro de Acidentes Pessoais e responsabilidade Civil</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-6">
                        <label for="q17" class="label">Em média qual sua carga horária diária?</label>
                        <select class="custom-select answer col-md-7">
                            <option value="">Escolha uma opção</option>
                            <option>08 Horas</option>
                            <option>10 Horas</option>
                            <option>12 Horas</option>
                            <option value="">15 Horas ou mais</option>
                          </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q18" class="label">Quando ultrapassa esta carga horário vc recebe reajuste de valores?</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-12">
                        <label for="q19" class="label">O contratante disponibiliza acessórios de segurança ou suporte para trabalho? Quais?</label>
                        <select class="custom-select answer col-md-3">
                            <option value="">Escolha uma opção</option>
                            <option>Água</option>
                            <option>Café</option>
                            <option>Uniforme</option>
                            <option value="">Capa de chuva</option>
                            <option value="">Guarda chuva</option>
                            <option value="">EPIs</option>
                          </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q20" class="label">O contratante disponibiliza um lugar seguro para vc deixar seus pertences?</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-12">
                        <label for="q21" class="label">Quando a comunicação é feita através de seu celular, você recebe reembolso pra isso?</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-12">
                        <label for="q22" class="label">Em caso de afastamento de trabalho, você tem instabilidade contratual?</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-10">
                        <label for="q23" class="label">O que acontece se vc sofrer um acidente dentro do local de trabalho?</label>
                        <select class="custom-select answer">
                            <option value="">Escolha uma opção</option>
                            <option>Tenho apoio medico e hospitalar por conta do contratante</option>
                            <option>Tenho apoio emocional com acompanhamento de psicólogos</option>
                            <option>Tenho contrato reincidido </option>
                            <option value="">Tenho ajuda financeira até a total recuperação</option>
                            <option value="">Nenhuma das alternativas</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="q24" class="label">Qual sua faixa etária</label>
                        <select class="custom-select answer">
                            <option value="">Escolha uma opção</option>
                            <option>18 a 24</option>
                            <option>25 a 34</option>
                            <option>35 a 44</option>
                            <option value="">45 a 54</option>
                            <option value="">Mais de 55</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q25" class="label">Você recebe pelo serviços prestados ao final de cada entrega? Senão, apontar o prazo de pagamento.</label>
                        <select class="custom-select answer col-md-3">
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
                    <div class="form-group col-md-12">
                        <label for="q26" class="label">O que acontece se houver atraso em seu pagamento?</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-12">
                        <label for="q27" class="label">Você concordaria em ter um representante legal, que buscasse  a regulamentação da profissão e melhorias gerais para classe.</label>
                        <div class="form-check answer">
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
                    <div class="form-group col-md-7">
                        <label for="q28" class="label">Qual seu receio hoje depois do Corona Virus?</label>
                        <select class="custom-select answer">
                            <option value="">Escolha uma opção</option>
                            <option>Não ter trabalho</option>
                            <option>Minha classe não ter politica de contratação </option>
                            <option>Minha função profissional acabar</option>
                        </select>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="q29" class="label">Quer  contar algum fato importante ou dar alguma sugestão?</label>
                        <textarea class="form-control" rows="3" maxlength="255" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q30" class="label">E por ultimo, se você gostaria de  se tornar imediatamente um associado? Não haverá nenhum ônus.</label>
                        <div class="form-check answer">
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
                        <button type="submit" class="btn btn-primary float-right">Finalizar questionário</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">

            </div>
        </div>
      </div>
    </main>

@extends('site.master.footer')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
