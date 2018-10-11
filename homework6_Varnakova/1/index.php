<?php
include "config.php";
?>

<form action="" method="post">
    <input type="number" name="a" required>
    <select name="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="b" required>
    <input type="submit" name="submit" value="Отправить">
</form>

