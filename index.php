
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!-- ******* Logo ******** -->
    <link rel="icon" href="img/favicon.png">

    <title>Envio de e-mail para contato</title>

      <!-- Arquivos CSS bootstrap da pagina -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/form-validation.css" rel="stylesheet">

   <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Confirme o Cadastro</button>-->
    <style>
   
    .btn {
        width: 100%;
         }
   </style>
   
   

  <body class="bg-light">
    
    <!-- NavBar -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal"> <a href="#">Envio de Email</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
      </nav>
    </div>
      
  
  
   

     <div class="container">
       <div class="py-5 text-center">
         <img class="d-block mx-auto mb-4" src="img/favicon.png" alt="" width="97" height="97">
        <h2>Envio de e-mail para contato com Boostrap e PHP 8</h2>  
      </div>
     
        <div class="col-md-8 offset-md-2">
          <h4 class="mb-3">Insira seus dados para contato abaixo</h4>
          <form class="needs-validation" novalidate action="enviar.php"  method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="primeiroNome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome"  value="nome"  placeholder="Nome">
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone"  value="telefone" placeholder="(00)0 0000-000">
                <div class="invalid-feedback">
                  É obrigatório inserir um sobre nome válido.
                </div>
              </div>
            </div>

        
            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="seunome@gmail.com">
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
              </div>
            </div>          

            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" maxlength="9" lengthtype= "text"id="cep" name="cep" placeholder="00000-000" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um CEP.
                </div>
              </div>
              <div class="col-md-5 mb-3">
                <label for="uf">Estado</label>
                <input type="text" class="form-control" maxlength="2" id="uf" name= "uf"placeholder="SP" required required>
                <div class="invalid-feedback">
                
                </div>
                <div class="invalid-feedback">
                  Por favor, escolha um estado válido.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="localidade" name="cidade" placeholder="Guarulhos" required required>
                <div class="invalid-feedback">
                  
                </div>
                <div class="invalid-feedback">
                  Por favor, insira um cidade válido.
                </div>
              </div>
              
            </div>

         
            <div class="mb-3">
              <label for="endereco">Endereço <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="logradouro" name="endereco" placeholder="Seu Endereço" required>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Seu Bairro" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="numero">numero</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="100" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um sobre nome válido.
                </div>
              </div>
            </div>
          


             <!-- Confirmação de termos -->

          
     

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block"  type="submit">Enviar Contato</button>
       
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 Link </p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Link 01</a></li>
          <li class="list-inline-item"><a href="#">Link 02</a></li>
          <li class="list-inline-item"><a href="#">Link 03</a></li>
        </ul>
      </footer>
    </div>
    

           <!-- Arquivos JS bootstrap da pagina -->
          
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="js/main.js"></script>
    <script src="js/form-validation.js"></script>
  
    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
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
  
  </body>
</html>
