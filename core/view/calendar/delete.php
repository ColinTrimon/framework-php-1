<h1>Are you sure you want to delete?</h1>
    <form action="<?= URL ?>calendar/deleteSave/<?= $calendar["id"]; ?>" method="POST">
      <input type="hidden" name="id" value="<?= $calendar["id"]; ?>">
    <input name="submit" type="submit" value="deleteSave">
    <a href="<?= URL ?>calendar/index"><button type="button">Go back</button></a>
    </form>
