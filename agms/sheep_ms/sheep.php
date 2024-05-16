          <?php
          
              /**********************************************************************
             * ********************************************************************
             * PAINEL SHEEP - MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
             * MSFLIX.COM.BR 
             * 
             * ********************************************************************
             * MAYKONSILVEIRA.COM.BR DEREICIONANDO VOCÊ PARA O CAMINHO DO SUCESSO #*
             * *************MAYKON***SILVEIRA**************************************
             * *************sheep**TECHNOLOGIES***********************************
             * ********************************************************************
             * TUDO AQUI FOI CRIADO NO DIA 01-05-2023 POR MAYKON SILVEIRA
             * TODOS OS DIREITOS RESERVADOS E CÓDIGO FONTE RASTREADO COM ARQUIVOS 
             * CRIADO POR MAYKONSILVEIRA.COM.BR DESDE 2007 *********
             * TODA SABEDORIA PARA CRIAR ESTES SISTEMAS VEM DO SANTO E ETERNOR PAI
             * O SANTO SENHOR DEUS DE ABRAÃO, ISSAC E JACÓ E DO MEU ÚNICO SENHOR 
             * O MESSIAS NOSSO SALVADOR, POIS A GLORIA É DO PAI E DO FILHO PARA SEMPRE
             * ********************************************************************
             */
             // topo Maykon Silveira
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




  