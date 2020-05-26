@extends('site.master.header')
@extends('site.master.menu')

    <div class="row" style="margin-top: 150px;"></div>
    <main role="main" class="mb-5">
      <div class="container">
        <h3 class="font_3">CONSTRUINDO O AMANHÃ</h3>
        <h3 class="font_3" style="color: #ff7000;"><small>O Futuro começa no Presente</small></h3>
        <p class="textos">
            Para nós,  mais do que sonhar e imaginar que é possível desenhar um novo futuro para os profissionais produtores e técnicos de eventos.
            Nossa meta é ousada, e acreditamos  sim que é possível dar visibilidade, legitimidade para uma classe que é fundamental
            no cenário econômico brasileiro, e que para muitos é como se ela fosse invisível, não  tem seu valor reconhecido.<br>
            O futuro começa agora, para que possamos construir nosso amanhã!!<br>
            Vamos ajustar essa lente distorcida para que todos possam nos enxergar  profissionais importantes  no PIB de eventos.
            Nós acreditamos que mudanças concretas acontecem quando pessoas se unem e lutam por essas mudanças.
            Esse é o nosso desafio e contamos com Você!<br>
            Vamos nos conhecer. Vamos juntos traçar nosso Perfil -  quem somos, onde estamos, o que queremos, como alcançaremos.
            Vamos deixar nossa marca no setor.  Ela existe para lutar e representá-lo em as suas questões.
            Faça seu Cadastro, preencha com seus dados, Opine, traga suas sugestões.<br>
            Participe dessa construção, vamos desenhar juntos o futuro que desejamos.
        </p>
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('site.store')}}" method="POST" class="needs-validation mt-3" novalidate>
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
                    <h5 class="labelTitle">Dados Pessoais</h5>
                    <div class="form-group">
                        <label for="nome" class="label">Nome*</label>
                        <input type="text" class="form-control" name="nome" id="nome" maxlength="255" value="{{old('nome')}}" required>
                        <div class="invalid-feedback">
                            Informe o nome!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="label">E-mail*</label>
                        <input type="email" class="form-control" name="email" id="email" maxlength="255" value="{{old('email')}}" required>
                        <div class="invalid-feedback">
                            Informe um e-mail válido!
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="telefone" class="label">Telefone</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" onkeypress="$(this).mask('(00)00000-0000');" value="{{old('telefone')}}">
                            <small id="telefoneHelpBlock" class="form-text text-muted">
                                Digite apenas os números.
                            </small>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cpf" class="label">CPF*</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" onkeypress="$(this).mask('000.000.000-00');" value="{{old('cpf')}}" required>
                            <small id="cpfHelpBlock" class="form-text text-muted">
                                Digite apenas os números.
                            </small>
                            <div class="invalid-feedback">
                                Informe o CPF!
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rg" class="label">RG*</label>
                            <input type="text" class="form-control" name="rg" id="rg" onkeypress="$(this).mask('00.000.000-0');" value="{{old('rg')}}" required>
                            <small id="cpfHelpBlock" class="form-text text-muted">
                                Digite apenas os números.
                            </small>
                            <div class="invalid-feedback">
                                Informe o RG!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="cep" class="label">CEP*</label>
                            <input type="text" class="form-control" name="cep" id="cep" onkeypress="$(this).mask('00000-000');" value="{{old('cep')}}" required>
                            <div class="invalid-feedback">
                                Informe o CEP!
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="numero" class="label">Número*</label>
                            <input type="text" class="form-control" name="numero" id="numero" maxlength="6" value="{{old('numero')}}" required>
                            <div class="invalid-feedback">
                                Informe o Número!
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="complemento" class="label">Complemento</label>
                            <input type="text" class="form-control" name="complemento" id="complemento" maxlength="15" value="{{old('complemento')}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="rua" class="label">Endereço*</label>
                            <input type="text" class="form-control" name="rua" id="rua" maxlength="255" value="{{old('rua')}}" required>
                            <div class="invalid-feedback">
                                Informe o endereço!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="bairro" class="label">Bairro*</label>
                            <input type="text" class="form-control" name="bairro" id="bairro" maxlength="50" value="{{old('bairro')}}" required>
                            <div class="invalid-feedback">
                                Informe o bairro!
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cidade" class="label">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" maxlength="50" value="{{old('cidade')}}" required>
                            <div class="invalid-feedback">
                                Informe a cidade!
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uf" class="label">UF</label>
                            <select class="custom-select" name="uf" id="uf" required>
                                <option value=""></option>
                                @foreach($estados as $estado)
                                    <option @if(old('uf')==$estado->sigla) {{'selected="selected"'}} @endif value="{{$estado->sigla}}">{{$estado->sigla}}</option>
                                @endforeach
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
                <img src="/images/dados7.jpg" alt="">
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
