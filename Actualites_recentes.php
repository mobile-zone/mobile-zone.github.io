
<?php

include "config/manipulation2.php";
$produits= afficherProduit();

?>

<?php $i = 0; foreach ($produits as $produit){
                $i++;
                ?>
                        <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="" title="">
                                                <img src="<?= $produit->photo ?>" alt="" class="img-fluid" style= "height: 200px">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="" title=""><?= $produit->titre ?></a></h4>
                                        <p><?= $produit->description ?></p>
                                        <small class="firstsmall"><a class="bg-orange" href="" title=""><?= $produit->categorie ?></a></small>
                                        <small><?= $produit->pubdate ?></small>
                                        <small><?= $produit->auteur ?></small>
                                        <br>
                                        <br>
                                        <br>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <?php if($i == 6) { break; } }?>
