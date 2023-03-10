<?php require ('panierhead.php'); ?>
  <div class="container p-5">
  <?php
  $ids = array_Keys($_SESSION['panier']);
  if (empty($ids)){
  $products=array();
   }else{
      $products = $DB->query('SELECT * FROM product WHERE id_product IN ('.implode( ',' ,$ids).')');
    } 
  
    foreach($products as $i ):<<<ITEM
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
          <img src="$i->id_product" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"> $i->categorie </h5>
              <p class="card-text p-2">prix Ht: $i->prix DT</p>
              <p class="card-text"><small class="text-muted float-end p-1 m-4">WELCOM</small></p>
            </div>
          </div>
        </div>
      </div>
      ITEM;
    endforeach;?>
    </div> 
    <div class="fixed-bottom">
     <div class=" Calc float-end p-2 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">MONTANT</div>
        <div class="card-body text-success">
          <h5 class="card-title">facture</h5>
          <div class="container">
          <p class="card-text ">
            prix HT: 500 DT <br>
            prix TTC: 20 DT <br>
            Frais Livraison: 7 DT <br>
            TOTALE : 527 DT
          </p>
        </div>
        </div>
        <div class="card-footer bg-transparent border-success">
          <div class=" text-centre d-flex justify-content-center align-items-center text-dark p-2">
          <h6 class="p-1">GET PRODUCT</h6> <button type="button" class="btn btn-success p-1">Success</button>
          </div>
          <div class="  text-centre d-flex justify-content-center align-items-center text-dark p-3 ">
          <h6 class="p-1">REJECT PRODUCT</h6> <button type="button" class="btn btn-danger p-1 ">Danger</button>
        </div> 
        </div>
      </div>
    </div>
    </div>



    <script src="awesome2/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>