<!-- Main Content -->
<div class="main-content" >
<section class="section">
 <div class="row">

 <!-- INICIO CONTAGEM DE PLANOS --->
   <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <div class="card">
       <div class="card-statistic-4">
         <div class="align-items-center justify-content-between">
           <div class="row ">
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
               <div class="card-content">
                 <h5 class="font-15">Planos </h5>
                 <h2 class="mb-3 font-18">7</h2>
                 <p class="mb-0"><span class="col-green">77%</span> total</p>
               </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
               <div class="banner-img">
                 <img src="assets/img/banner/1.png" alt="">
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
    <!-- FIM CONTAGEM DE PLANOS --->

    <!-- INICIO CONTAGEM DE CLIENTES --->
   <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <div class="card">
       <div class="card-statistic-4">
         <div class="align-items-center justify-content-between">
           <div class="row ">
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
               <div class="card-content">
                 <h5 class="font-15"> Clientes</h5>
                 <h2 class="mb-3 font-18">777</h2>
                 <p class="mb-0"><span class="col-orange">77%</span> total</p>
               </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
               <div class="banner-img">
                 <img src="assets/img/banner/2.png" alt="">
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
     <!-- FIM CONTAGEM DE CLIENTES --->

 <!-- INICIO PAGAMENTOS APROVADOS --->

   <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <div class="card">
       <div class="card-statistic-4">
         <div class="align-items-center justify-content-between">
           <div class="row ">
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
               <div class="card-content">
                 <h5 class="font-15">Receita </h5>
                 <h2 class="mb-3 font-18">R$ 77</h2>
                 <p class="mb-0"><?=Formata::Mes(01)?></p>
               </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
               <div class="banner-img">
                 <img src="assets/img/banner/4.png" alt="">
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
    <!-- FIM PAGAMENTOS APROVADOS--->
 
   <!-- INICIO PREVISÃO DE PAGAMENTOS --->

   <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <div class="card">
       <div class="card-statistic-4">
         <div class="align-items-center justify-content-between">
           <div class="row ">
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
               <div class="card-content">
                 <h5 class="font-15">Previsão PG</h5>
                 <h2 class="mb-3 font-18">R$ 150</h2>
                 <p class="mb-0"><?=Formata::Mes(01)?></p>
               </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
               <div class="banner-img">
                 <img src="assets/img/banner/3.png" alt="">
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- FIM PREVIVISÃO DE PAGAMENTOS --->

   </div>
   
   
 <div class="row">
   <div class="col-12 col-sm-12 col-lg-12">
     <div class="card ">


       <div class="card-header">
         <h4>Gráfico de receita aprovados e previsão</h4>
         
       </div>


       <div class="card-body">
         <div class="row">


           <div class="col-md-12">
             
           
            <!-- INICIO GRAFICO  -->

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
["Element", "Pagamento R$", { role: "style" } ],
["Aprovados", 77, "#34eb8c"],
["Previsão", 150, "#a834eb"]
]);

var view = new google.visualization.DataView(data);
view.setColumns([0, 1,
              { calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation" },
              2]);

var options = {
title: "",
width:900,
height: 400,
bar: {groupWidth: "95%"},
legend: { position: "none" },
};
var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
chart.draw(view, options);
}
</script>
<div id="columnchart_values" style="width: 100%; height: auto;"></div>
            <!-- FIM GRAFICO  -->

     </div>
   </div>
 </div>
</section>

</div>


