<form action="<?php echo url_for('forwardTest/forward') ?>" method="post">
<label for="keyword">ｷｰﾜｰﾄﾞ</label>:<br><input type="text" name="keyword">
<div><input type="submit" value="forward経由で移動"></div>
</form>

<form action="<?php echo url_for('forwardTest/show') ?>" method="post">
<label for="keyword">ｷｰﾜｰﾄﾞ</label>:<br><input type="text" name="keyword">
<div><input type="submit" value="直接移動"></div>
</form>

