<?php include '_partials/header.php' ?>
  
  <div class="page-header">
    <h1>VERY MUCH TODO LIST</h1>
  </div>

  <ul class="list-group col-sm-6">
    <li class="list-group-item">You must do this</li>
    <li class="list-group-item">But also this other thing</li>
  </ul>

  <form action="add-new.php" class="col-sm-6">
    <p class="form-group">
      <textarea name="message" id="text" cols="30" rows="10" placeholder="blah" class="form-control"></textarea>
    </p>

    <p class="form-group"><input type="text" class="form-control" name="balls"></p>
    <p class="form-group"><input type="text" class="form-control" name="tits"></p>

    <p class="form-group">
      <input type="submit" value="add new thing" class="btn-sm btn-danger">
    </p>
  </form>

<?php include '_partials/footer.php' ?>