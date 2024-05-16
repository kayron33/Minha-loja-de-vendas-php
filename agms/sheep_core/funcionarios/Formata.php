<?php
/**********************************************************************
 * ********************************************************************
 * GERENTE DE FORMATAÇÃO MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
 * 
 * ********************************************************************
 * MAYKONSILVEIRA.COM.BR DEREICIONANDO VOCÊ PARA O CAMINHO DO SUCESSO #*
 * *************MAYKON***SILVEIRA**************************************
 * *************sheep**PHP***********************************
 * ********************************************************************
 * TUDO AQUI FOI CRIADO NO DIA 01-10-2021 POR MAYKON SILVEIRA
 * TODOS OS DIREITOS RESERVADOS E CÓDIGO FONTE RASTREADO COM ARQUIVOS 
 * CRIADO POR MAYKONSILVEIRA.COM.BR DESDE 2007 *********
 * TODA SABEDORIA PARA CRIAR ESTES SISTEMAS VEM DO SANTO E ETERNOR PAI
 * O SANTO SENHOR DEUS DE ABRAÃO, ISSAC E JACÓ E DO MEU ÚNICO SENHOR 
 * O MESSIAS NOSSO SALVADOR, POIS A GLROIA É DO PAI E DO FILHO PARA SEMPRE
 * ********************************************************************
 */
class Formata {

   private static $Data;
    private static $Format;

    /**
     * <b>Verifica E-mail:</b> Executa validação de formato de e-mail. Se for um email válido retorna true, ou retorna false.
     * @param STRING $Email = Uma conta de e-mail
     * @return BOOL = True para um email válido, ou false
     */
    public static function Email($Email) {
        self::$Data = (string) $Email;
        self::$Format = '/[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/';

        if (preg_match(self::$Format, self::$Data)):
            return true;
        else:
            return false;
        endif;
    }

 
    public static function Name($Name) {
        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

        self::$Data = strtr(utf8_decode($Name), utf8_decode(self::$Format['a']), self::$Format['b']);
        self::$Data = strip_tags(trim(self::$Data));
        self::$Data = str_replace(' ', '-', self::$Data);
        self::$Data = str_replace(array('-----', '----', '---', '--'), '-', self::$Data);

        return strtolower(utf8_encode(self::$Data));
    }
    
 

    /**
     * <b>Tranforma Data:</b> Transforma uma data no formato DD/MM/YY em uma data no formato TIMESTAMP!
     * @param STRING $Name = Data em (d/m/Y) ou (d/m/Y H:i:s)
     * @return STRING = $Data = Data no formato timestamp!
     */
    public static function Data($Data) {
        self::$Format = explode(' ', $Data);
        self::$Data = explode('/', self::$Format[0]);

        if (empty(self::$Format[1])):
            self::$Format[1] = date('H:i:s');
        endif;

        self::$Data = self::$Data[2] . '-' . self::$Data[1] . '-' . self::$Data[0] . ' ' . self::$Format[1];
        return self::$Data;
    }

    public static function LimitaTextos($String, $Limite, $Pointer = null) {
        self::$Data = strip_tags(trim($String));
        self::$Format = (int) $Limite;

        $ArrWords = explode(' ', self::$Data);
        $NumWords = count($ArrWords);
        $NewWords = implode(' ', array_slice($ArrWords, 0, self::$Format));

        $Pointer = (empty($Pointer) ? '...' : ' ' . $Pointer );
        $Result = ( self::$Format < $NumWords ? $NewWords . $Pointer : self::$Data );
        return $Result;
    }
    
    
    
    /**
     *
     * 
     * FAZ O COMPRIMENTO AUTOMÁTICO EXEMPLO BOM DIA, BOA TARDE E BOA NOITE DE ACORDO COM A HORA DO DIA
     * POR MAYKON SILVEIRA MAYKONSILVEIRA.COM.BR
     * 
     */
    public static function Comprimento(){
        $horaAtual = date('H');
                        
                        if(
                                $horaAtual == 1 
                                || $horaAtual == 2
                                || $horaAtual == 3
                                || $horaAtual == 4
                                || $horaAtual == 5
                                || $horaAtual == 6
                                || $horaAtual == 7
                                || $horaAtual == 8
                                || $horaAtual == 9
                                || $horaAtual == 10
                                || $horaAtual == 11
                                || $horaAtual == 12
                                
                         ):
                             return  $ComprimentoWebtec = '<b>Bom dia </b>';
                        elseif(
                                $horaAtual == 13
                                || $horaAtual == 14
                                || $horaAtual == 15
                                || $horaAtual == 16
                                || $horaAtual == 17
                                || $horaAtual == 18
                                
                                ):
                             return  $ComprimentoWebtec = '<b> Boa tarde </b>';
                         elseif(
                                 $horaAtual == 19
                                 || $horaAtual == 20
                                 || $horaAtual == 21
                                 || $horaAtual == 22
                                 || $horaAtual == 23
                                 || $horaAtual == 24
                                 || $horaAtual == 00
                            
                                 ):
                             return  $ComprimentoWebtec = '<b> Boa noite </b>';
                        endif;
    }
    
    

    // resulme a leitura e evita abrir um novo objeto
    public static function Resultado($resultado){
    
     return (!empty($resultado->getResultado() ? $resultado->getResultado() : null));
    }


        
    /**
     *
     * 
     * CONVERTE O MÊS EM ESCRITA POR MAYKON SILVEIRA MAYKONSILVEIRA.COM.BR
     * 
     */
    public static function Mes($mes){
        $MenoWDois = date($mes); // exempo do mes date('m');
              
              if($MenoWDois == 1):
               return $MenoWDois = "Janeiro";
               elseif($MenoWDois == 2):
               return $MenoWDois = 'Fevereiro';
               elseif($MenoWDois == 3):
               return $MenoWDois = 'Março';
               elseif($MenoWDois == 4):
               return $MenoWDois = 'Abril';
               elseif($MenoWDois == 5):
               return $MenoWDois = 'Maio';
               elseif($MenoWDois == 6):
               return $MenoWDois = 'Junho';
               elseif($MenoWDois == 7):
               return $MenoWDois = 'Julho';
               elseif($MenoWDois == 8):
               return $MenoWDois = 'Agosto';
               elseif($MenoWDois == 9):
               return $MenoWDois = 'Setembro';
               elseif($MenoWDois == 10):
               return $MenoWDois = 'Outubro';
               elseif($MenoWDois == 11):
               return $MenoWDois = 'Novembro';
               elseif($MenoWDois == 12):
               return $MenoWDois = 'Dezembro';
              endif;
    }
  
    
    
    /**
     * 
     * PARA GERAR QUANTO TEMPO A EMPRESA MAYKONSILVEIRA.COM.BR ESTÁ ONLINE 
     * POR MAYKON SILVEIRA - MAYKONSILVEIRA.COM.BR
     * CRIADO DIA 25/01/2021
     * 
     */
    public static function EmpresaSheep() {
        $empresaCriada = 2021;
        $dataAtual = date('Y');

        $subtrai = $dataAtual - $empresaCriada;

        
        return "Sheep PHP {$subtrai} ano(s), com vocês!";
    }

    /**
     * 
     * MOSTRA APREVISÃO DO TEMPO EM UMA ÚNICA LINHA - MAYKONSILVEIRA.COM.BR
     * POR MAYKON SILVEIRA - MAYKONSILVEIRA.COM.BR
     * CRIADO DIA 27/01/2021
     * 
     */       
    public static function TempoLinha($cidade) {
    // lista de cidades http://servicos.cptec.inpe.br/XML/listaCidades?city=curitiba
    // camada cidade nome, uf e atualizacao
    //$cidade = 227;
    $link = "http://servicos.cptec.inpe.br/XML/cidade/{$cidade}/previsao.xml";
    //link do arquivo xml
    $xml = simplexml_load_file($link);
    //$filem = file_get_contents('');
    //carrega o arquivo XML e retornando um Array
    // ESTENDIDADA http://servicos.cptec.inpe.br/XML/cidade/227/estendida.xml
           
    // verifica a sigla correspondente http://servicos.cptec.inpe.br/XML/#condicoes-tempo
    $t = '';
    $xml->previsao->tempo != null ? $xml->previsao->tempo : null;
         switch($xml->previsao->tempo){
           case 'ec':
               $t = '<i class="wi wi-sprinkle"></i> Encoberto com Chuvas Isoladas';
           break;
           case 'ci':
               $t = '<i class="wi wi-rain-mix"></i> Chuvas Isoladas';
           break;
           case 'c':
            $t = '<i class="wi wi-hail"></i> Chuva';
            
           break;
   
           case 'in':
                $t =  '<i class="wi wi-fog"></i> Instável';
           break;
   
           case 'pp':
                $t =  '<i class="wi wi-rain-wind"></i> Poss. de Pancadas de Chuva';

           break;
   
           case 'cm':
                $t =  '<i class="wi wi-day-hail"></i> Chuva pela Manhã';
           break;
   
           case 'cn':
                $t =  '<i class="wi wi-night-alt-showers"></i> Chuva a Noite';
           break;
   
   
           case 'pt':
                $t =  '<i class="wi wi-day-rain"></i> Pancadas de Chuva a Tarde';
           break;
   
           case 'np':
                $t =  '<i class="wi wi-rain-wind"></i> Nublado e Pancadas de Chuva';
           break;
   
           case 'pc':
                $t =  '<i class="wi wi-rain-wind"></i> Pancadas de Chuva';
           break;
   
           case 'pn':
                $t =  '<i class="wi wi-cloudy"></i> Parcialmente Nublado';
           break;
   
           case 'cv':
                $t =  '<i class="wi wi-snow"></i> Chuvisco';
           break;
   
   
           case 'ch':
                $t =  '<i class="wi wi-rain-wind"></i> Chuvoso';
           break;
   
           case 't':
                $t =  '<i class="wi wi-night-storm-showers"></i> Tempestade';
           break;
   
           case 'ps':
                $t =  '<i class="wi wi-day-sunny"></i> Predomínio de Sol';
           break;
   
           case 'e':
                $t =  '<i class="wi wi-day-sunny"></i> Encoberto';
           break;
   
           case 'n':
                $t =  '<i class="wi wi-fog"></i> Nublado';
           break;
   
           case 'cl':
                $t =  '<i class="wi wi-day-sunny"></i> Céu Claro';
           break;
   
           case 'nv':
                $t =  '<i class="wi wi-fog"></i> Nevoeiro';
           break;
   
           case 'g':
                $t =  '<i class="wi wi-cloudy-windy"></i> Geada';
           break;
   
           case 'ne':
                $t =  '<i class="wi wi-sandstorm"></i> Neve';
           break;
   
           case 'nd':
                $t =  '<i class="wi wi-night-cloudy-windy"></i> Não Definido';
           break;
   
           case 'pnt':
                $t =  '<i class="wi wi-night-alt-thunderstorm"></i> Pancadas de Chuva a Noite';
           break;
   
           case 'psc':
                $t =  '<i class="wi wi-rain"></i> Possibilidade de Chuva';
           break;
           
           case 'pcm':
                $t =  '<i class="wi wi-day-hail"></i> Possibilidade de Chuva pela Manhã';
           break;
           
           case 'pct':
                $t =  '<i class="wi wi-day-rain-mix"></i> Possibilidade de Chuva a Tarde';
           break;
   
           case 'pcn':
                $t =  '<i class="wi wi-night-alt-rain-wind"></i> Possibilidade de Chuva a Noite';
           break;
   
           case 'npt':
                $t =  '<i class="wi wi-day-sleet"></i> Nublado com Pancadas a Tarde';
           break;
   
           case 'npn':
                $t =  '<i class="wi wi-night-alt-snow-thunderstorm"></i> Nublado com Pancadas a Noite';
           break;
           
           case 'ncn':
                $t =  '<i class="wi wi-night-alt-sleet"></i> Nublado com Poss. de Chuva a Noite';
           break;
           
           case 'nct':
                $t =  '<i class="wi wi-night-hail"></i> Nublado com Poss. de Chuva a Tarde';
           break;
   
           case 'ncm':
                $t =  '<i class="wi wi-day-hail"></i> Nubl. c/ Poss. de Chuva pela Manhã';
           break;
   
           case 'npm':
                $t =  '<i class="wi wi-day-thunderstorm"></i> Nublado com Pancadas pela Manhã';
           break;
   
           case 'npp':
                $t =  '<i class="wi wi-day-snow-wind"></i> Nublado com Possibilidade de Chuva';
           break;
           
           case 'vn':
                $t =  '<i class="wi wi-day-cloudy-high"></i> Variação de Nebulosidade';
           break;
           
           case 'ct':
                $t =  '<i class="wi wi-day-rain-wind"></i> Chuva a Tarde';
           break;
   
           case 'ppn':
                $t =  '<i class="wi wi-night-alt-snow-thunderstorm"></i> Poss. de Panc. de Chuva a Noite';
           break;
   
           case 'ppt':
                $t =  '<i class="wi wi-day-sleet-storm"></i> Poss. de Panc. de Chuva a Tarde';
           break;
   
           case 'ppm':
                $t =  '<i class="wi wi-day-rain"></i> Poss. de Panc. de Chuva pela Manhã';
           break;
           
   
       
   
         }
    
         //echo "<p> Dia: ".date('d/m/Y',strtotime($xml->previsao->dia))."</p>";
           //$t != null ? $t : null;
    
         return " - <b style='color:#28c7c9;'> Min: {$xml->previsao->minima}°C</b> - <b style='color:#c92838;'>Max: {$xml->previsao->maxima}°C</b> - {$t}";
    //echo " IUV:".$xml->previsao->iuv."</p>";
     
    }
    
 
    
    
    //função chama só texto
    public static function tempoTexto($t){ 
         // verifica a sigla correspondente http://servicos.cptec.inpe.br/XML/#condicoes-tempo
         switch($t){
           case 'ec':
                return 'Encoberto com Chuvas Isoladas';
           break;
           case 'ci':
              return 'Chuvas Isoladas';
           break;
           case 'c':
            return 'Chuva';
            
           break;
   
           case 'in':
                return 'Instável';
           break;
   
           case 'pp':
                return 'Poss. de Pancadas de Chuva';

           break;
   
           case 'cm':
                return 'Chuva pela Manhã';
           break;
   
           case 'cn':
                 return 'Chuva a Noite';
           break;
   
   
           case 'pt':
               return 'Pancadas de Chuva a Tarde';
           break;
   
           case 'np':
               return 'Nublado e Pancadas de Chuva';
           break;
   
           case 'pc':
               return 'Pancadas de Chuva';
           break;
   
           case 'pn':
                return 'Parcialmente Nublado';
           break;
   
           case 'cv':
                return  'Chuvisco';
           break;
   
   
           case 'ch':
                return 'Chuvoso';
           break;
   
           case 't':
               return 'Tempestade';
           break;
   
           case 'ps':
               return 'Predomínio de Sol';
           break;
   
           case 'e':
                return 'Encoberto';
           break;
   
           case 'n':
               return 'Nublado';
           break;
   
           case 'cl':
                return  'Céu Claro';
           break;
   
           case 'nv':
               return 'Nevoeiro';
           break;
   
           case 'g':
               return 'Geada';
           break;
   
           case 'ne':
               return 'Neve';
           break;
   
           case 'nd':
                return 'Não Definido';
           break;
   
           case 'pnt':
               return 'Pancadas de Chuva a Noite';
           break;
   
           case 'psc':
               return 'Possibilidade de Chuva';
           break;
           
           case 'pcm':
               return 'Possibilidade de Chuva pela Manhã';
           break;
           
           case 'pct':
                return 'Possibilidade de Chuva a Tarde';
           break;
   
           case 'pcn':
               return 'Possibilidade de Chuva a Noite';
           break;
   
           case 'npt':
                return 'Nublado com Pancadas a Tarde';
           break;
   
           case 'npn':
                 return 'Nublado com Pancadas a Noite';
           break;
           
           case 'ncn':
                return 'Nublado com Poss. de Chuva a Noite';
           break;
           
           case 'nct':
                return 'Nublado com Poss. de Chuva a Tarde';
           break;
   
           case 'ncm':
                return 'Nubl. c/ Poss. de Chuva pela Manhã';
           break;
   
           case 'npm':
                 return  'Nublado com Pancadas pela Manhã';
           break;
   
           case 'npp':
                 return 'Nublado com Possibilidade de Chuva';
           break;
           
           case 'vn':
                 return 'Variação de Nebulosidade';
           break;
           
           case 'ct':
                 return  'Chuva a Tarde';
           break;
   
           case 'ppn':
                return 'Poss. de Panc. de Chuva a Noite';
           break;
   
           case 'ppt':
                return 'Poss. de Panc. de Chuva a Tarde';
           break;
   
           case 'ppm':
                 return 'Poss. de Panc. de Chuva pela Manhã';
           break;
           
   
       
   
         }
         
         } //fim função texto
    
         
        
        
            
         //função para chmar icone do tempo
          // verifica a sigla correspondente http://servicos.cptec.inpe.br/XML/#condicoes-tempo
         public static function tempoIcone($icone){ 
         switch($icone){
           case 'ec':
               return '<i class="wi wi-day-hail"></i>';
           break;
           case 'ci':
               return '<i class="wi wi-rain-wind"></i>';
           break;
           case 'c':
            return '<i class="wi wi-hail"></i>';
            
           break;
   
           case 'in':
                return  '<i class="wi wi-fog"></i>';
           break;
   
           case 'pp':
                return  '<i class="wi wi-rain-mix"></i>';

           break;
   
           case 'cm':
                return  '<i class="wi wi-day-hail"></i>';
           break;
   
           case 'cn':
                return  '<i class="wi wi-night-alt-showers"></i>';
           break;
   
   
           case 'pt':
                return  '<i class="wi wi-day-rain"></i>';
           break;
   
           case 'np':
                return  '<i class="wi wi-rain-mix"></i>';
           break;
   
           case 'pc':
                return  '<i class="wi wi-rain-mix"></i>';
           break;
   
           case 'pn':
                return  '<i class="wi wi-cloudy"></i>';
           break;
   
           case 'cv':
                return  '<i class="wi wi-snow"></i>';
           break;
   
   
           case 'ch':
                return  '<i class="wi wi-rain-wind"></i>';
           break;
   
           case 't':
                return  '<i class="wi wi-night-storm-showers"></i>';
           break;
   
           case 'ps':
                return  '<i class="wi wi-day-sunny"></i>';
           break;
   
           case 'e':
                return  '<i class="wi wi-day-sunny"></i>';
           break;
   
           case 'n':
                return  '<i class="wi wi-fog"></i>';
           break;
   
           case 'cl':
                return  '<i class="wi wi-day-sunny"></i>';
           break;
   
           case 'nv':
                return  '<i class="wi wi-fog"></i>';
           break;
   
           case 'g':
                return  '<i class="wi wi-cloudy-windy"></i>';
           break;
   
           case 'ne':
                return  '<i class="wi wi-sandstorm"></i>';
           break;
   
           case 'nd':
                return  '<i class="wi wi-night-cloudy-windy"></i>';
           break;
   
           case 'pnt':
                return  '<i class="wi wi-night-alt-thunderstorm"></i>';
           break;
   
           case 'psc':
                return  '<i class="wi wi-rain"></i>';
           break;
           
           case 'pcm':
                return  '<i class="wi wi-day-hail"></i>';
           break;
           
           case 'pct':
                return  '<i class="wi wi-day-rain-mix"></i>';
           break;
   
           case 'pcn':
                return  '<i class="wi wi-night-alt-rain-wind"></i>';
           break;
   
           case 'npt':
                return  '<i class="wi wi-day-sleet"></i>';
           break;
   
           case 'npn':
                return  '<i class="wi wi-night-alt-snow-thunderstorm"></i>';
           break;
           
           case 'ncn':
                return  '<i class="wi wi-night-alt-sleet"></i>';
           break;
           
           case 'nct':
                return  '<i class="wi wi-night-hail"></i>';
           break;
   
           case 'ncm':
                return  '<i class="wi wi-day-hail"></i>';
           break;
   
           case 'npm':
                return  '<i class="wi wi-day-thunderstorm"></i>';
           break;
   
           case 'npp':
                return  '<i class="wi wi-day-snow-wind"></i>';
           break;
           
           case 'vn':
                return  '<i class="wi wi-day-cloudy-high"></i>';
           break;
           
           case 'ct':
                return  '<i class="wi wi-day-rain-wind"></i>';
           break;
   
           case 'ppn':
                return  '<i class="wi wi-night-alt-snow-thunderstorm"></i>';
           break;
   
           case 'ppt':
                return  '<i class="wi wi-day-sleet-storm"></i>';
           break;
   
           case 'ppm':
                return  '<i class="wi wi-day-rain"></i>';
           break;
           
   
       
   
         }//fecha swit
        }
    
    /**
     * LOOP DE PREVISAO DO TEMPO CRIADA DIA 27/01/2021 POR MAYKON SILVEIRA
     * PREVISÃO DO TEMPO - MAYKON SILVEIRA - MAYKONSILVEIRA.COM.BR 
     * ESTA FUNÇÃO ESTÁTICA É PARA MOSTRAR O ICONE OU TEXTO DA PREVISÃO DO TEMPO
     * 
     **/
    public static function TempoLoop($cidade) {
    // lista de cidades http://servicos.cptec.inpe.br/XML/listaCidades?city=curitiba
    // camada cidade nome, uf e atualizacao
    //$cidade = 227;
    $linkLoop = "http://servicos.cptec.inpe.br/XML/cidade/{$cidade}/previsao.xml";
    //link do arquivo xml
    $xmlLoop = simplexml_load_file($linkLoop);
    //$filem = file_get_contents('');
    //carrega o arquivo XML e retornando um Array
    // ESTENDIDADA http://servicos.cptec.inpe.br/XML/cidade/227/estendida.xml
    
         
         foreach($xmlLoop->previsao as $previsao){ 
         //verifica se é a data de hoje!
         $diaAtual = $previsao->dia == date('Y-m-d') ? 'Hoje' : Formata::DiaDaSemana($previsao->dia);
         echo '<div class="col-md-3">';
         echo ' <p style="font-size:70px; color:#fff;">'. Formata::tempoIcone($previsao->tempo).'</p>';
         echo ' <p style="font-size:25px!important; color:#fff!important;">'.$diaAtual.'</p>';
         echo ' <p><b style="color:#28c7c9;"> Min: '.$previsao->minima.'°C</b> - <b style="color:#c92838;"> Max: '.$previsao->maxima.'°C</b></p>';
         echo ' <p style=" color:#fff;">'. Formata::tempoTexto($previsao->tempo).'</p>'; 
                       
                   
         echo '</div>';
          }
     
    }
    

}
