@extends('site.master.header')
@extends('site.master.menu')

<main role="main">
    <div class="row" style="margin-right: 0px; margin-left: 0px;">
        <div style="margin-bottom: -380px; margin-top: 150px;">
          <a name="inicio"><img src="images/office.jpg" class="img-fluid" /></a>
          <div class="title">
            <div style="padding: 40px;">
              <h4 class="font_4">
                <span style="color: #5f63c1;">Neque porro</span>
              </h4>
              <h4 class="font_4">
                <span style="color: #5f63c1;">quisquam</span>
              </h4>
              <h4 class="font_4">
                <span style="color: #5f63c1;">est qui</span>
              </h4>
              <h4 class="font_4">
                <span style="color: #5f63c1;">dolorem ipsum </span>
              </h4>
              <h4 class="font_4">
                <span style="color: #5f63c1;">quia dolor </span>
              </h4>
            </div>
          </div>
        </div>
      </div>
      <a name="sobre"></a>
      <div class="container">
        <h3 class="font_3">SOBRE</h3>
        <img src="images/equipe.jpg" class="img-fluid mb-5" />
        <p class="text-justify">
          Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus
          sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.
          Praeterea iter est quasdam res quas ex communi. At nos hinc posthac,
          sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in
          diem certam indicere. Cras mattis iudicium purus sit amet fermentum.
        </p>
        <a name="contato"></a>
        <p class="text-justify">
          Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus
          sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.
          Praeterea iter est quasdam res quas ex communi. At nos hinc posthac,
          sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in
          diem certam indicere. Cras mattis iudicium purus sit amet fermentum.
        </p>

        <h3 class="font_3 mt-5">CONTATO</h3>
        <p class="text-justify">
          Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus
          sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.
          Praeterea iter est quasdam res quas ex communi. At nos hinc posthac,
          sitientis piros Afros.
        </p>
        <div class="row mb-5">
          <div class="col-sm-6">
            <form
              action=""
              method="POST"
              class="needs-validation mt-0"
              novalidate
            >
              <div class="form-group">
                <label for="nome">Nome*</label>
                <input
                  type="text"
                  class="form-control"
                  name="nome"
                  id="nome"
                  required
                />
              </div>
              <div class="form-group">
                <label for="email">E-mail*</label>
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="mensagem">Mensagem*</label>
                <textarea
                  class="form-control"
                  id="mensagem"
                  name="mensagem"
                  rows="3"
                  placeholder="Digite a sua mensagem..."
                  required
                ></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary float-right">
                  Enviar
                </button>
              </div>
            </form>
          </div>
          <div class="col-sm-6">
            <p class="mt-4">
              <span style="font-size: 13px; line-height: 2.2em; color: #5f63c1;"
                >TELEFONE</span
              ><br />
              <span style="font-size: 16px; line-height: 1.4em; color: #5f63c1;"
                >(11) 5544-8877</span
              >
            </p>

            <p>
              <span style="font-size: 13px; line-height: 2.2em; color: #5f63c1;"
                >EMAIL</span
              ><br />
              <span style="font-size: 16px; line-height: 1.4em; color: #5f63c1;"
                >info@anprotec.com.br</span
              >
            </p>

            <p>
              <span style="font-size: 13px; line-height: 2.2em; color: #5f63c1;"
                >SIGA-NOS</span
              ><br />
              <i class="fab fa-facebook-square"></i>
              <i class="fab fa-instagram-square"></i>
            </p>
          </div>
        </div>
    </div>
</main>
@extends('site.master.footer')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
