    <!-- Main Content -->
    <div class="main-content" >
        
          <!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
           <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL ?>sheep.php">Inicio</a></li>
                  
                        <li class="breadcrumb-item active" aria-current="page">Dados</li>
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
                        <div class="alert-title">Sucesso!</div>
                        Tudo certo.
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
             
              
             
            <form action="" method="post" enctype="multipart/form-data">
  

           <div class="section-body" >
            <div class="row" >
              <div class="col-12">
                <div class="card">
                    
                      <div class="card-footer text-right">
                      
                       <a href="" class="btn btn-primary"><i class="fa fa-exclamation-circle"></i> Lista </a>
                     
                    
                    </div>
                    
                  <div class="card-header">
                    <h4>Configurações</h4>
                  </div>
                  <div class="card-body">
  
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo da Empresa(Obrigatório)</label>
                      <div class="col-md-7">
                          <input type="text" class="form-control" name="logo" placeholder="Digite o nome da sua empresa sua logo" value="">
                      </div>
                      
                    </div>

                
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrição da Empresa</label>
                      <div class="col-md-7">
                          <textarea class="summernote" name="descricao"></textarea>
                          
                      </div>
                      
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">CNPJ(Opcional)</label>
                      <div class="col-md-7">
                          <input type="text" id="cnpj" class="form-control" name="cnpj" placeholder="Adicione o CNPJ" value="">
                      </div>
                      
                    </div>

                      
                      
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">E-mail(Obrigatório)</label>
                      <div class="col-md-7">
                          <input type="email" class="form-control" name="email" placeholder="E-mail" value="">
                      </div>
                      
                    </div>

                    
                      
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefone(Opcional)</label>
                      <div class="col-md-7">
                          <input type="text" id="fone" class="form-control" name="fone" placeholder="Telefone" value="">
                      </div>
                      
                    </div>

                    
                      
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Whatsapp(Opcional)</label>
                      <div class="col-md-7">
                          <input type="text" id="cel" class="form-control" name="whatsapp" placeholder="whatsapp" value="">
                      </div>
                      
                    </div>


                     <div class="form-group row mb-4">

                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Endereço</label>
                      <div class="col-md-4">
                          <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="">
                      </div>

                     
                      <div class="col-md-3">
                          <input type="number" class="form-control" name="numero" placeholder="Número" value="">
                      </div>
                      
                    </div>


                    <div class="form-group row mb-4">

                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Estado / Cidade</label>
                      <div class="col-md-4">
                          <input type="text" class="form-control" name="estado" placeholder="Estado" value="">
                      </div>

                     
                      <div class="col-md-3">
                          <input type="text" class="form-control" name="cidade" placeholder="Cidade" value="">
                      </div>
                      
                    </div>
                   
              
                      
                      <input type="hidden" name="usuario" value="">
                      <input type="hidden" name="id" value="">

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                          <button class="btn btn-lg btn-primary" name="sendSheep">Salvar</button>
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