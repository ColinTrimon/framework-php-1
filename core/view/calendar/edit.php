<h2>Edit Birthday</h2>
    <form action="<?= URL ?>calendar/editBirth/<?= $calendar["id"] ?>" method="POST">
    <p>person</p><input type="text" name="person" required value="<?= $calendar["person"] ?>"><br>
    <p>day</p><input type="number" name="day" required value="<?= $calendar["day"] ?>"><br>
    <p>month</p><input type="number" name="month" required value="<?= $calendar["month"] ?>"><br>
    <p>year</p><input type="number" name="year" required value="<?= $calendar["year"] ?>"><br>
    <input type="submit">
    <a href="<?= URL ?>calendar/index"><button type="button">Go back</button></a>
