<?php require_once '../header.php'; ?>

<div id="result"></div>
<div class="col-12">
    <div class="card">
        <h4 class="card-title"><strong>Statistique</strong> Des produits</h4>
          <div class="card-body">
             <canvas class="mx-auto" id="chart-pie" width="300" height="300"></canvas>
          </div>
    </div>
</div>

<script src="http://localhost/suivistock/public/assets/js/core.min.js" data-provide="chartjs"></script>
<script src="http://localhost/suivistock/public/assets/js/app.min.js"></script>
<script src="http://localhost/suivistock/public/assets/js/script.min.js"></script>
<script>
app.ready(function() {
         //=============================================
         //requete ajax
            //let name = 'recup';
            $.ajax({
                type: 'post',
                url: '../src/model/Statistique.php',
                success: function (response)
                {
                  var jsonData = JSON.parse(response);
                  chart(jsonData);
                }
            });
            
        // ==============================================
        // Pie chart
        //
        function chart(listeProduit){
          let nomProduit = [];
          let quantiteProduit = [];
          let tableauCouleur = [];
          
          for(let i=0; i < listeProduit.length; i++)
          {
             nomProduit.push(listeProduit[i][0]);
             quantiteProduit.push(listeProduit[i][1])
             let color = '#'+(i+1)+'d'+(((i)*1020)+(510/2)*i)
             tableauCouleur.push(color)
          }
          new Chart($("#chart-pie"), {
          type: 'pie',

          // Data
          //
          data: {
            labels:  nomProduit, //["Red","Blue","Orange","indgo"],
            datasets:
              [
                {
                    data: quantiteProduit,//[300, 50, 100,100],
                    backgroundColor:tableauCouleur,//['rgba(255,99,132,1)','rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)','#4d1247']
                }
              ]
          },

          // Options
          //
          options: { responsive: false }
        });
        }
       
    
      
      });
    </script>
