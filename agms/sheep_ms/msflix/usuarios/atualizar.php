<?php
        $sheep_tipo = 'usuarios';
        $sheep_local = 'Atualiza Usuarios';
        $idUsuario= filter_input(INPUT_GET, 'editar', FILTER_SANITIZE_SPECIAL_CHARS);
        $idLivreUsuario = base64_decode($idUsuario);

        $leituraDeUsuarios = new Ler(); 
                        $leituraDeUsuarios->Leitura('usuarios', "WHERE id = :id ", "id={$idLivreUsuario}");
                        if($leituraDeUsuarios->getResultado()){
                          foreach($leituraDeUsuarios->getResultado() as $usuario);
                            $usuario= (object) $usuario;
                          }
     ?>

    <!-- Main Content -->
    <div class="main-content" >
        
          <!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
           <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL ?>sheep.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL . FILTROS?>usuarios/index">Listar</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $sheep_local ?></li>
                      </ol>
           </nav>
          <!-- FIM NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
          
        <section class="section" >
             <!-- INICIO MENSAGENS DE SUCESSO E ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA---> 
             <?php 
            $sucessoMsg = filter_input(INPUT_GET, 'sucesso', FILTER_VALIDATE_BOOLEAN);
            
            if($sucessoMsg){
    
            ?>
            
            <!-- INICIO ALERTA SUCESSO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA---> 
            <div class="alert alert-success alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Sucesso ao logar!</div>
                       
                      </div>
                    </div>
            <!-- FIM ALERTA SUCESSO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA---> 
            <?php
            }
            ?>
            
            <?php 
            $erroMsg = filter_input(INPUT_GET, 'erro', FILTER_VALIDATE_BOOLEAN);
            
            if($erroMsg){
    
            ?>
            
             <!-- INICIO ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA---> 
            <div class="alert alert-danger alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Erro!</div>
                        Ocorreu um erro, verifique sua conexão com internet ou, atualize a sua página. 
                      </div>
                    </div>
            <!-- FIM ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA---> 
             <?php
            }
            ?>
            
             <!-- FIM MENSAGENS DE SUCESSO E ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA---> 
             
             
             
            <form action="<?= URL_CAMINHO_PAINEL . FILTROS?>usuarios/filtros/editar" method="post" enctype="multipart/form-data">
  

           <div class="section-body" >
            <div class="row" >
              <div class="col-12">
                <div class="card">
                    
                      <div class="card-footer text-right">
                      
                       <a href="" class="btn btn-primary"><i class="fa fa-exclamation-circle"></i> Lista </a>
                     
                    
                    </div>
                    
                  <div class="card-header">
                    <h4><?=  $sheep_local ?></h4>
                  </div>
                  <div class="card-body">
                 
                      
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome(Obrigatório)</label>
                      <div class="col-md-3">
                          <input type="text" class="form-control" name="nome" placeholder="Primeiro nome" value="<?= $usuario-> nome ?>">
                      </div>
                      <div class="col-md-4">
                          <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" value="<?= $usuario->sobrenome ?>">
                      </div>
                    </div>
                    
                      
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">E-mail(Obrigatório)</label>
                      <div class="col-md-7">
                          <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?= $usuario->email ?>">
                      </div>
                      
                    </div>
                      
                      
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Whatsapp(Opcional)</label>
                      <div class="col-md-7">
                          <input type="text" id="cel" class="form-control" name="whatsapp" placeholder="whatsapp" value="<?= $usuario->whatsapp ?>">
                      </div>
                      
                    </div>
                      
                     
                   
                      
                 <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Função(Obrigatório)</label>
                      <div class="col-sm-12 col-md-7">
                          <select class="form-control"  name="nivel" >
                           
                            <option value="adm"<?= $usuario->nivel =='adm' ? 'selected': null ?>>Administrador</option>
                            
                            <option value="cliente"<?= $usuario->nivel =='cliente' ? 'selected': null ?>>Cliente</option>
                                                   
                      </select>
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Senha(Obrigatório)</label>
                      <div class="col-md-7">
                          <input type="password" class="form-control" name="senha" placeholder="Senha" >
                      </div>
                      
                    </div>
                       
                      
                     <input type="hidden" name="id" value="<?= $usuario->id ?>">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                          <button type="submit" class="btn btn-lg btn-primary" name="atualizarSheep">Salvar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
              </form>
        </section>
        
          
         
      </div>
    
    
   
  


   
                 



