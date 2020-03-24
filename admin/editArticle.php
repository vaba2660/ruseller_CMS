<div id="adminHeader">
<h2>Редактирование статьи || My Site</h2>
<p>Вы вошли как <b><?php echo htmlspecialchars($_SESSION['username']) ?></b></p>
<p><a href="admin.php?action=logout">Сменить пользователя</a></p>
</p>
</div>
<h1><?php echo $results['pageTitle'] ?></h1>

<form action="admin.php?action=<?php echo $results['formAction'] ?>" method="post">
<!-- <form action="admin.php?status=changesSaved" method="post"> -->
  <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>">

  <?php if(isset($results['errorMessage'])) { ?>
    <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
  <?php } ?>
  <ul>
    <li>
      <label for="summary">Краткое описание</label>
      <textarea name="summary" id="summary" placeholder="Brief description" required maxlength="1000" cols="30" rows="10">
      <?php echo htmlspecialchars($results['article']->summary) ?>
      </textarea>
    </li>

    <li>
      <label for="content">Содержание</label>
      <textarea name="content" id="content" placeholder="Full article" required maxlength="20000" cols="70" rows="30"><?php echo htmlspecialchars($results['article']->content) ?>
      </textarea>
    </li>
    <li>
      <label for="publicationDate">Дата публикации
      </label>
      <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo results['article']->publicationDate ? date('Y-m-d', $results['article']->publicationDate) : '' ?>">
    </li>
  </ul>
  <div class="buttons">
    <input type="submit" value="Save changes" name="saveChanges">
    <input type="submit" value="Cancel" formnovalidate name="cancel">
  </div>
</form>