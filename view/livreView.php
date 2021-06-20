<?php include "template/header.php";?>
<?php include "template/nav.php";?>

<h4 class="text-center py-5">Détail du livre</h4>
<table class="table table-striped table-hover table-bordered text-center m-auto">
    <thead class="bg bg-dark text-danger">
        <tr>
        <th colspan = 2 scope="col">Détail du livre</th>
        </tr>
    </thead>
    <tbody>
               <tr>
                    <td>Titre</td>
                    <td><?php echo $book->getTitle() ?></td>
                </tr>
                <tr>
                    <td>Auteur</td>
                    <td><?php echo $book->getAuthor() ?></td>
                </tr>
                <tr>
                    <td>Catégorie</td>
                    <td><?php echo $book->getCategory() ?></td> 
                </tr>
                <tr>
                    <td>Date de sortie</td>
                    <td><?php echo $book->getDate_of_onset() ?></td> 
                </tr>
                <tr>
                    <td>Résumé</td>
                    <td><?php echo $book->getAbstract() ?></td> 
                </tr>     
    </tbody>
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

<?php include "template/footer.php";?>

