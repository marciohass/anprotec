@extends('site.master.header')
@extends('site.master.menu')

    <div class="row" style="margin-top: 150px;"></div>
    <main role="main">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{route('site.questionariostore')}}" method="POST" class="needs-validation mt-5 mb-5" novalidate>
                    @csrf
                    {{ method_field('POST') }}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}
                        </div><br />
                    @endif
                    <input type="hidden" name="inscrito_id" id="inscrito_id" value="4">
                    <h5 class="label">QUESTIONÁRIO</h5>
                    <div class="form-group col-md-12">
                        <label for="q1" class="label">Você gostaria de ter sua profissão regulamentada?</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q1_1" name="q1" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="q1_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q1_2" name="q1" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="q1_2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="q2" class="label">Como vc se classifica?</label>
                        <select class="custom-select answer col-md-8" name="q2" id="q2" required>
                          <option value="">Escolha uma opção</option>
                          <option value="Produtor">Produtor</option>
                          <option value="Técnico">Técnico</option>
                          <option value="Diretor técnico">Diretor técnico</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="q3" class="label">Qual sua categoria profissional</label>
                        <select class="custom-select answer col-md-6" name="q3" id="q3" required>
                          <option value="">Escolha uma opção</option>
                          <option value="Junior">Junior</option>
                          <option value="Pleno">Pleno</option>
                          <option value="Senior">Senior</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="q4" class="label">Na classificação profissional você  se encaixa como?</label>
                        <select class="custom-select answer col-md-9" name="q4" id="q4" required>
                          <option value="">Escolha uma opção</option>
                          <option value="Produtor de Montagem de Feiras e Estandes">Produtor de Montagem de Feiras e Estandes</option>
                          <option value="Produtor de Montagem de eventos corporativos">Produtor de Montagem de eventos corporativos</option>
                          <option value="Produtor de Logistica">Produtor de Logistica</option>
                          <option value="Produtor Financeiro">Produtor Financeiro</option>
                          <option value="Produtor de Alimentos e Bebidas">Produtor de Alimentos e Bebidas</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="q5" class="label">Qual sua cidade base de atuação?</label>
                        <select class="custom-select answer col-md-8" name="q5" id="q5" required>
                          <option value="">Cidade</option>
                          <option value="São Paulo">São Paulo</option>
                          <option value="Rio de Janeiro">Rio de Janeiro</option>
                          <option value="Santa Catarina">Santa Catarina</option>
                          <option value="Rondonia">Rondonia</option>
                          <option value="Amapá">Amapá</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="q6" class="label">Você gostaria que a classe tivesse benefícios?</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q6_1" name="q6" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="q6_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q6_2" name="q6" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="q6_2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="q6_desc" class="label">Se Sim , favor indicar 03 <small class="text muted">(exemplo medico, jurídico, alimentação)</small></label>
                        <input type="text" class="form-control answer col-md-8" name="q6_desc" id="q6_desc" value="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q7" class="label">Gostaria de participar de uma negociação coletiva para parametrizar a classe?</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q7_1" name="q7" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="q7_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q7_2" name="q7" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="q7_2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q8" class="label">Quando é contratado , assina o contrato de trabalho?</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q8_1" name="q8" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="q8_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q8_2" name="q8" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="q8_2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q9" class="label">Qual sua faixa de ganho de job por período?</label>
                        <div class="form-group row">
                            <label for="q9_desc01" class="col-sm-3 col-form-label answer">01 dia de trabalho</label>
                            <div class="col-sm-4">
                                <div class="input-group answer">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" maxlength="6" name="q9_desc01" id="q9_desc01" value="" required>
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="q9_desc02" class="col-sm-3 col-form-label answer">15 dias  de trabalho</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" maxlength="6" name="q9_desc02" id="q9_desc02" value="" required>
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="q9_desc03" class="col-sm-3 col-form-label answer">30 dias  de trabalho</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" maxlength="6" name="q9_desc03" id="q9_desc03" value="" required>
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q10" class="label">Você consegue ter intervalo para  fazer horário  almoço ou jantar? Senão, o que acontece?</label>
                        <select class="custom-select answer col-md-8" name="q10" id="q10" required>
                            <option value="">Escolha uma opção</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            <option value="As vezes">As vezes</option>
                            <option value="Fica sem se alimentar">Fica sem se alimentar</option>
                            <option value="Se alimenta correndo, muitas vezes na mesa de trabalho">Se alimenta correndo, muitas vezes na mesa de trabalho</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q11" class="label">Quem paga sua alimentação?</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q11_1" name="q11" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="q11_1">Eu mesmo</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q11_2" name="q11" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="q11_2">Contratante</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q12" class="label">Você usa  seu veiculo para chegar ao trabalho</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q12_1" name="q12" class="custom-control-input" value="S" required>
                                <label class="custom-control-label" for="q12_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q12_2" name="q12" class="custom-control-input" value="N">
                                <label class="custom-control-label" for="q12_2">Não</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q12_3" name="q12" class="custom-control-input" value="TP">
                                <label class="custom-control-label" for="q12_3">Transporte público</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q13" class="label">Quando é contratado você tem seguro de Acidentes Pessoais e responsabilidade Civil</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q13_1" name="q13" class="custom-control-input" value="S" required>
                                <label class="custom-control-label" for="q13_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q13_2" name="q13" class="custom-control-input" value="N">
                                <label class="custom-control-label" for="q13_2">Não</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q13_3" name="q13" class="custom-control-input" value="SI">
                                <label class="custom-control-label" for="q13_3">Não tenho esta informação</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="q14" class="label">Em média qual sua carga horária diária?</label>
                        <select class="custom-select answer col-md-7" name="q14" id="q14" required>
                            <option value="">Escolha uma opção</option>
                            <option value="08 Horas">08 Horas</option>
                            <option value="10 Horas">10 Horas</option>
                            <option value="12 Horas">12 Horas</option>
                            <option value="15 Horas ou mais">15 Horas ou mais</option>
                          </select>
                          <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q15" class="label">Quando ultrapassa esta carga horário vc recebe reajuste de valores?</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q15_1" name="q15" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="q15_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q15_2" name="q15" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="q15_2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q16" class="label">O contratante disponibiliza acessórios de segurança ou suporte para trabalho? Quais?</label>
                        <select class="custom-select answer col-md-3" name="q16" id="q16" required>
                            <option value="">Escolha uma opção</option>
                            <option value="Água">Água</option>
                            <option value="Café">Café</option>
                            <option value="Uniforme">Uniforme</option>
                            <option value="Capa de chuva">Capa de chuva</option>
                            <option value="Guarda chuva">Guarda chuva</option>
                            <option value="EPIs">EPIs</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q17" class="label">O contratante disponibiliza um lugar seguro para vc deixar seus pertences?</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q17_1" name="q17" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="q17_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q17_2" name="q17" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="q17_2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q18" class="label">Quando a comunicação é feita através de seu celular, você recebe reembolso pra isso?</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q18_1" name="q18" class="custom-control-input" value="S" required>
                                <label class="custom-control-label" for="q18_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q18_2" name="q18" class="custom-control-input" value="N">
                                <label class="custom-control-label" for="q18_2">Não</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q18_3" name="q18" class="custom-control-input" value="A">
                                <label class="custom-control-label" for="q18_3">As vezes</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q19" class="label">Em caso de afastamento de trabalho, você tem instabilidade contratual?</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q19_1" name="q19" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="q19_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q19_2" name="q19" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="q19_2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="q20" class="label">O que acontece se vc sofrer um acidente dentro do local de trabalho?</label>
                        <select class="custom-select answer" name="q20" id=q20 required>
                            <option value="">Escolha uma opção</option>
                            <option value="Tenho apoio medico e hospitalar por conta do contratante">Tenho apoio medico e hospitalar por conta do contratante</option>
                            <option value="Tenho apoio emocional com acompanhamento de psicólogos">Tenho apoio emocional com acompanhamento de psicólogos</option>
                            <option value="Tenho contrato reincidido">Tenho contrato reincidido </option>
                            <option value="Tenho ajuda financeira até a total recuperação">Tenho ajuda financeira até a total recuperação</option>
                            <option value="Nenhuma das alternativas">Nenhuma das alternativas</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="q21" class="label">Qual sua faixa etária</label>
                        <select class="custom-select answer" name="q21" id="q21" required>
                            <option value="">Escolha uma opção</option>
                            <option value="18 a 24">18 a 24</option>
                            <option value="25 a 34">25 a 34</option>
                            <option value="35 a 44">35 a 44</option>
                            <option value="45 a 54">45 a 54</option>
                            <option value="Mais de 55">Mais de 55</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q22" class="label">Você recebe pelo serviços prestados ao final de cada entrega? Senão, apontar o prazo de pagamento.</label>
                        <select class="custom-select answer col-md-3" name="q22" id="q22" required>
                            <option value="">Escolha uma opção</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            <option value="10 dias">10 dias</option>
                            <option value="15 dias">15 dias</option>
                            <option value="30 dias">30 dias</option>
                            <option value="45 dias">45 dias</option>
                            <option value="60 dias ou mais">60 dias ou mais</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q23" class="label">O que acontece se houver atraso em seu pagamento?</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q23_1" name="q23" class="custom-control-input" value="S" required>
                                <label class="custom-control-label" for="q23_1">Eu recebo multa e juros de acordo com o que é previsto em lei</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q23_2" name="q23" class="custom-control-input" value="N">
                                <label class="custom-control-label" for="q23_2">Eu não recebo nada além do valor contrato inicialmente.</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q24" class="label">Você concordaria em ter um representante legal, que buscasse  a regulamentação da profissão e melhorias gerais para classe.</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q24_1" name="q24" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="q24_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q24_2" name="q24" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="q24_2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="q25" class="label">Qual seu receio hoje depois do Corona Virus?</label>
                        <select class="custom-select answer" name="q25" id="q25" required>
                            <option value="">Escolha uma opção</option>
                            <option value="Não ter trabalho">Não ter trabalho</option>
                            <option value="Minha classe não ter politica de contratação">Minha classe não ter politica de contratação </option>
                            <option value="Minha função profissional acabar">Minha função profissional acabar</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecionar uma opção!
                        </div>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="q26" class="label">Quer  contar algum fato importante ou dar alguma sugestão?</label>
                        <textarea class="form-control" name="q26" id="q26" rows="3" maxlength="255" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="q27" class="label">E por ultimo, se você gostaria de se tornar imediatamente um associado? Não haverá nenhum ônus.</label>
                        <div class="form-check answer">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q27_1" name="q27" class="custom-control-input" value="1" required>
                                <label class="custom-control-label" for="q27_1">Sim</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="q27_2" name="q27" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="q27_2">Não</label>
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

<script>
    (function() {
    'use strict';
    window.addEventListener('load', function() {

        var forms = document.getElementsByClassName('needs-validation');

        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
