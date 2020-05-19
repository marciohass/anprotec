@extends('site.master.header')
@extends('site.master.menu')

    <div class="row" style="margin-top: 150px;"></div>
    <main role="main">
      <div class="container">
        <div class="row col-md-12">
          <div class="col-md-6">
            <div class="row mt-5"></div>
            <h3 class="font_3">Pesquisa</h3>
            <form action="#" method="POST" class="needs-validation mt-5 mb-5" novalidate>
              <div class="form-group">
                  <label for="nome">Nome*</label>
                  <input type="text" class="form-control" name="nome" id="nome" required>
              </div>
              <div class="form-group">
                <label for="email">E-mail*</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="telefone">Telefone</label>
                  <input type="text" class="form-control" name="telefone" id="telefone" onkeypress="$(this).mask('(00)00000-0000');">
                  <small id="telefoneHelpBlock" class="form-text text-muted">
                      Digite apenas os números do telefone.
                  </small>
                </div>
                <div class="form-group col-md-6">
                  <label for="cpf">CPF*</label>
                  <input type="text" class="form-control" name="cpf" id="cpf" onkeypress="$(this).mask('000.000.000-00');" required>
                  <small id="cpfHelpBlock" class="form-text text-muted">
                      Digite apenas os números do CPF.
                  </small>
                </div>
              </div>
              <div class="form-group">
                <label for="profissao">Profissão*</label>
                <input type="profissao" class="form-control" name="profissao" id="profissao" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary float-right">Enviar</button>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <img src="images/cadastro.jpg" alt="">
          </div>
        </div>

      </div>
    </main>

<!-- Footer -->
<footer
class="page-footer font-small unique-color-dark"
style="height: 100px; background-color: #5f63c1; line-height: 100px; margin-top: 50px;"
>
<div class="container">
  <!-- Copyright -->
  <div
    class="footer-copyright text-center py-3 footer_text">
    © 2020 por Anprotec. Criado por Hass Desenvolvimento
  </div>
  <!-- Copyright -->
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
