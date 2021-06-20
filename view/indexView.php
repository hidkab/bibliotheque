<?php include "template/header.php";?>
<?php include "template/nav.php";?>

<h3 class=" text-center m-auto py-5">Cartalogue des livres</h3>
<div class= "py-3">
    <a class= "btn btn-success" href="livreView.php">Ajouter un livre</a>
</div>

<table class="table table-striped table-hover table-bordered text-center m-auto">
    <thead class="bg bg-dark text-danger">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">TITRE</th>
        <th scope="col">AUTEUR</th>
        <th scope="col">CATEGORIE</th>
        <th scope="col">DATE DE SORTIE</th>
        <th scope="col">RESUME</th>
        <th scope="col">CLIENT</th>
        <th scope="col">CONSULTER</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($books as $book): ?>
                <td><?php echo $book->getId() ?></td>
                <td><?php echo $book->getTitle() ?></td>
                <td><?php echo $book->getAuthor() ?></td>
                <td><?php echo $book->getCategory() ?></td>
                <td><?php echo $book->getDate_of_onset() ?></td>
                <td><?php echo $book->getAbstract() ?></td>
                <td><?php echo $book->getUser_id() ?></td>
                <td><a class="btn btn-info m-auto" href="Book.php?id=<?php echo $book->getId() ?>">Voir</a></td>
        </tr>
            <?php endforeach; ?>
    </tbody>
</table>

</table>
<form class="row g-3 w-25 m-auto" action="", method="post">
    <div class="col-12">
        <label for="validationDefault01" class="form-label"></label>
        <input type="number" name="user_id" class="form-control" id="validationDefault01">
    </div>
    <div class="col-auto m-auto p-3">
        <button type="submit" name="addPerson" class="btn btn-success">Pêter le livre</button>
    </div>
</form>

<form class="row g-3 w-50 m-auto" action="", method="post">
    <div class="col-12">
        <label for="validationDefault01" class="form-label">Titre</label>
        <input type="text" name="title" class="form-control" id="validationDefault01">
    </div>
    <div class="col-12">
        <label for="validationDefault01" class="form-label"> Auteur</label>
        <input type="text" class="form-control" name="author" id="validationDefault01">
    </div>
    <div class="col-12">
        <label for="validationDefault01" class="form-label"> Catégorie</label>
        <input type="text" class="form-control" name="category" id="validationDefault01">
    </div>
    <div class="col-12">
        <label for="validationDefault01" class="form-label"> Date de sortie</label>
        <input type="date" class="form-control" name="date_of_onset" id="validationDefault01">
    </div>
    <div class="col-12">
  <label for="floatingTextarea">Résumé</label>
    <textarea class="form-control" name="abstract" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
    </div>
    <div class="col-auto m-auto p-3">
        <button type="submit" name="addPerson" class="btn btn-dark">Envoyer</button>
    </div>
    </form>

<?php include "template/footer.php";?>

