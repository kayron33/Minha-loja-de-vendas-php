          <?php
          
             
             require_once('sheep_topo.php');
            
             $sheep_caminho_painel = '';
           
            if (!empty($ms)):
                $sheep_caminho_painel = __DIR__ . '/msflix/' . strip_tags(trim($ms) . '.php');
            else:
                $sheep_caminho_painel = __DIR__ . '/msflix/' . 'sheep_painel.php';
            endif;

            if(file_exists($sheep_caminho_painel)):
                include_once($sheep_caminho_painel);
            else:
                
                echo "Erro ao acessar a página /{$ms}.php!";
           
            endif;

            // rodape Maykon Silveira
            require_once('sheep_rodape.php')
            ?>




  