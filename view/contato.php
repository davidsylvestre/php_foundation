         <div class="page-header">
            <h1>Contato</h1>
         </div>
          <div class="container">
            <?php 
               if((isset($_POST)) and !(empty($_POST))){
                  echo '<div class="alert alert-success" role="alert">';
                  echo '<p>Dados enviados com sucesso.</p>';
                  echo '</div>';

                  foreach ($_POST as $key => $value) {
                     echo '<p>'.$key.': '.$value;
                  }
               }
            ?>
         </div>
         <div class="container">
            <form action="index?page=contato" method="POST" class="form-horizontal" >
               <div class="form-group">
                  <label for="" >Nome</label>
                  <input type="text" class="form-control" name="nome">
               </div>
               <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" name="email">
               </div>
               <div class="form-group">
                  <label for="">Assunto</label>
                  <input type="text" class="form-control" name="assunto">
               </div>
               <div class="form-group">
                  <label for="">Mensagem</label>
                  <textarea rows="3" class="form-control" name="mensagem"></textarea>
               </div>
               <div class="form-group"><button type="submit" class="btn">Salvar</button></div>
            </form>
         </div>
