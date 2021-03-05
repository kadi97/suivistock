<?php
require_once '../header.php';
?>

<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h2 class="card-title text-muted text-center">Nouveau Produit</h2>
		</div>
	    <div class="card-body">
		    <form method="post" action="http://localhost/suivistock/src/controller/ProduitController.php">
				<div class="row">
					<div class="mb-3 col-md-6">
						<label class="form-label" for="inputEmail4">Référence</label>
						<input type="text" class="form-control" id="inputEmail4" name="ref" placeholder="Référence su produit">
					</div>
					<div class="mb-3 col-md-6">
						<label class="form-label" for="inputPassword4">Libelle</label>
						<input type="text" class="form-control" id="inputPassword4" name="nom" placeholder="Le nom du produit">
					</div>
				</div>
				<div class="row mt-4">
					<div class="mb-3 col-md-6">
						<label class="form-label" for="inputCity" min="1">La Quantite du produit</label>
						<input type="number" class="form-control" id="inputCity" name="quantite">
					</div>
					<div class="mb-3 col-md-6">
						<label class="form-label" for="inputCity">Date de péromption</label>
						<input type="date" class="form-control" id="inputCity" name="dateP">
					</div>
				</div>

				<div class="row mt-4">
					<div class="mb-3 col-md-6">
					    <label class="form-label" for="inputCity">Prix unitaire</label>
						<input type="number" min="100" class="form-control" id="inputCity" name="prix">
					</div>
				</div>
				<input type="submit" class="btn btn-success" value="Enregistrer" name="enregistrer"></input>
				<input type="submit" class="btn btn-danger ml-3" value="Annuler"></input>
			</form>
	    </div>
		<?php if(isset($_GET['error'])){ ?>
			<p class="text-danger text-center h4">Le produit n'a pas etre ajouté</p>
		<?php } ?>
	</div>
</div>

<?php require_once '../footer.php'; ?>