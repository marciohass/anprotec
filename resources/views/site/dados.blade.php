@extends('site.master.header')
@extends('site.master.menu')

    <div class="row" style="margin-top: 150px;"></div>
    <main role="main" class="mb-5">
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
                <form action="{{route('site.questionario')}}" method="POST" class="needs-validation mt-5" novalidate>
                    @csrf
                    {{ method_field('POST') }}
                    <h5 class="label">Dados Pessoais</h5>
                    <div class="form-group">
                        <label for="nome" class="label">Nome*</label>
                        <input type="text" class="form-control" name="nome" id="nome" maxlength="255" required>
                        <div class="invalid-feedback">
                            Informe o nome!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="label">E-mail*</label>
                        <input type="email" class="form-control" name="email" id="email" maxlength="255" required>
                        <div class="invalid-feedback">
                            Informe um e-mail válido!
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="telefone" class="label">Telefone</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" onkeypress="$(this).mask('(00)00000-0000');">
                            <small id="telefoneHelpBlock" class="form-text text-muted">
                                Digite apenas os números do telefone.
                            </small>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cpf" class="label">CPF*</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" onkeypress="$(this).mask('000.000.000-00');" required>
                            <small id="cpfHelpBlock" class="form-text text-muted">
                                Digite apenas os números do CPF.
                            </small>
                            <div class="invalid-feedback">
                                Informe o CPF!
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rg" class="label">RG*</label>
                            <input type="text" class="form-control" name="rg" id="rg" onkeypress="$(this).mask('00.000.000-0');" required>
                            <small id="cpfHelpBlock" class="form-text text-muted">
                                Digite apenas os números do RG.
                            </small>
                            <div class="invalid-feedback">
                                Informe o RG!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="cep" class="label">CEP*</label>
                            <input type="text" class="form-control" name="cep" id="cep" onkeypress="$(this).mask('00000-000');" required>
                            <div class="invalid-feedback">
                                Informe o CEP!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="rua" class="label">Endereço*</label>
                            <input type="text" class="form-control" name="rua" id="rua" maxlength="255" required>
                            <div class="invalid-feedback">
                                Informe o endereço!
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="complemento" class="label">Complemento</label>
                            <input type="text" class="form-control" name="complemento" id="complemento" maxlength="10">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="bairro" class="label">Bairro*</label>
                            <input type="text" class="form-control" name="bairro" id="bairro" maxlength="50" required>
                            <div class="invalid-feedback">
                                Informe o bairro!
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cidade" class="label">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" maxlength="50" required>
                            <div class="invalid-feedback">
                                Informe a cidade!
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uf" class="label">UF</label>
                            <select class="custom-select" name="uf" id="uf" required>
                                <option value=""></option>
                                <option>SP</option>
                                <option>RJ</option>
                                <option>PR</option>
                            </select>
                            <div class="invalid-feedback">
                                Informe o UF!
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-5">
                        <button type="submit" class="btn btn-primary float-right">Ir para o questionário</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 mb-5">

            </div>
        </div>
      </div>
    </main>

@extends('site.master.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
