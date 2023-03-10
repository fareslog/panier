<?php require 'head.php' ?>
  <div class="container" id="accessorios" >
    <div class="text-centre d-flex justify-content-center align-items-center text-dark p-5" >
      <h1>OUR SHOP</h1>
    </div>
  <div class="row">
  <?php $products = $DB->query('SELECT * FROM product');
  ?>

      <?php foreach ($products as $i): echo <<<ITEM
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="Box mb-3 bg-white">
        <div class="card" style="width: 15rem;">
          <img src="$i->SrcIm" class="card-img-top image" alt="...">
          <div class="card-body">
            <h5 class="card-title"> $i->categorie</h5>
            <p class="card-text"> $i->reference <br> prix HT : $i->prix DT </p>
            <a href="ajouteraupanier.php? h=  $i->id_product" class="btn btn-primary"> + ajouter au Panier</a>
          </div>
        </div>
      </div>
    </div>
    ITEM;
endforeach; ?>  
    </div>
  </div>
</div>
<?php require 'footer.php' ?>

