<?php $render('header')?>
<h2>Editar Usuário</h2>
<form action="<?=$base?>/usuario/editar?>" method="POST">
    <input type="hidden" name="id" value="<?=$usuario['id']?>">
    <label for="">
        Nome: 
        <br>
        <input type="text" name="name" value="<?=$usuario['nome']?>">
    </label>
    <br><br>
    <label for="">
        Email:
        <br>
        <input type="email" name="email" value="<?=$usuario['email']?>">
    </label>
    <br><br>
    <input type="submit" value="Editar">
</form>
<?php $render('footer')?>