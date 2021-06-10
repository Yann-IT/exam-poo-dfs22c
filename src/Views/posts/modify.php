<div class="col-md-4">
            <h2>Modifier un article :</h2>
           <form action="modify" method="post" class="form-control">
            <select name="article" id="article">
              <option value="<?php  echo $article['id']; ?>" ><?php echo $article['nom']; ?>
              </option>
            </select>
            <input type="submit"value="Valider" name="update"/>
          </form>
        </div>