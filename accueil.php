<?php
require_once 'header.php';
require_once 'src/model/TraitementProduit.php';
$produit = new entities\TraitementProduit();
$liste = $produit->getProduits();
?>

<div class="" style="margin-left:1%">
	<div class="col-12">
	   <div class="card">
			<div class="card-header">
				<h3 class="card-title text-center h3 ">LISTE DES PRODUIT DISPONIBLE</h3>
			</div>
				<table class="table table-lg">
					<thead>
						<tr>
						 <th style="width:10%;">ID</th>
                         <th style="width:15%">Nom</th>
                         <th style="width:15%">Référence</th>
                         <th style="width:15%">Prix unitaire</th>
						 <th class="d-none d-md-table-cell" style="width:25%">Date de péromption</th>
						 <th style="width:20%">A jouté par</th>
						 <th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($liste as $produit){?>
						<tr>
							<td><?= $produit['id']?></td>
							<td><?= $produit['nomP']?></td>
							<td><?= $produit['ref']?></td>
							<td><?= $produit['prix']?></td>
							<td class="d-none d-md-table-cell"><?= $produit['dateP']?></td>
							<td><?= $produit['prenom']?> <?= $produit['nom']?></td>
							<td class="table-action">
								<a href="http://localhost/suivistock/pages/editProd.php?id=<?= $produit['id']?>">edit<i class="align-middle ml-2" data-feather="edit-2"></i></a>
								<a href="http://localhost/suivistock/src/controller/ProduitController.php?id=<?= $produit['id']?>"><i class="align-middle" data-feather="trash"></i></a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php require_once 'footer.php'; ?>