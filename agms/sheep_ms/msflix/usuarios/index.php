
<div class="main-content" >
           
           
           <!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
           <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL ?>sheep.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL . FILTROS?>usuarios/criar">Novo</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Listar</li>
                      </ol>
           </nav>
          <!-- FIM NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
          
        <section class="section">
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
             




          <div class="section-body">
              
               <!-- INICIO TABELA  MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Ativos</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Criado</th>
                            <th>Nome</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>Função</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                           
                          </tr>
                        </thead>
                        <tbody>

                        <?php 
                        
                        $leituraDeUsuarios = new Ler(); 
                        $leituraDeUsuarios->Leitura('usuarios', "WHERE nivel = 'adm'  ORDER BY data DESC ");
                       
                        if($leituraDeUsuarios->getResultado()){
                          foreach($leituraDeUsuarios->getResultado() as $usuario){
                            $usuario= (object) $usuario;

                            $escondeIdUsuario= base64_encode($usuario->id)

                            ?>
                          <tr>
                            <td><?=  $usuario->id ?></td>
                            <td><?= date('d/m/Y ',strtotime($usuario->data))   ?></td>
                            <td><?=  $usuario->nome   ?>  <?=$usuario->sobrenome ?></td>
                            <td><?=  $usuario->email  ?> </td>
                            <td><?=  $usuario->whatsapp   ?></td>
                            <td><a href=""><?=  $usuario->nivel == 'adm' ? 'Administrador' : 'Cliente' ?></a></td>
                            <td><a href="<?= URL_CAMINHO_PAINEL . FILTROS . 'usuarios/atualizar&editar=' .  $escondeIdUsuario ?>" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
                            <td>

                                <form action="<?= URL_CAMINHO_PAINEL . FILTROS?>usuarios/filtros/excluir" method="post">
                                 <input type="hidden" name="idDelete" value="<?=  $usuario->id ?>">
                                 <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></button>
                                 </form>
                            </td>
                          </tr>
                          <?php  }} 
                          
                          $leituraDeUsuarios = null
                          ?>  

                         
                       

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
              
          </div>
        </section>

          
                         
          
      </div>
    
 
      