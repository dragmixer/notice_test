<? $this->title = 'Authorization' ?>
<h1><?= $this->title ?></h1>
<p><font color="red"><?= $error ?></font></p>
<p>
<form method="post">
    <input type="text" name="login" value=""/>
    <input type="password" name="pass" value=""/>
    <input type="submit" name="auth" value="send"/>
</form>
</p>

