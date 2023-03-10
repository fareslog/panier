<?php
      class panier{
        private $DB;

        public function __construct($DB){
                   if(!isset($_SESSION)){
                    SESSION_START();
                   }
                   if(!isset($_SESSION['panier'])){
                    $_SESSION['panier'] = array();

                   }
                   $this-> DB =$DB ;
                   if(isset($_GET['delPanier'])){
                    $this->del($_GET['delPanier']);
                   }
        }
        public function count(){
            return array($_SESSION['panier']);
        }
        public function total(){
                 $total=0;
                 $ids=array_keys($_SESSION['panier']);
                 if (empty($ids)){
                    $products=array();
                }else{
                    $products = $this->DB->query('SELECT product_id , prix  FROM product WHERE id_product IN ('.implode(',',$ids).')');
                }
                     foreach( $products as $i){
                        $total += $i->prix * $_SESSION['panier'][$product->id_product];
                     }
                       return $total;
        }
        public function add($id){
            if(isset($_SESSION['panier'][$id])){
                $_SESSION['panier'][$id]++;
            }else{
                $_SESSION['panier'][$id]= 1;
            }   
        }
          public function del($id){
            unsset($_SESSION ['panier'][$id]);
        }
    } 
?>