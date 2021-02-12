<?php $render('header'); ?>

<a href="<?=$base?>/novo">Adicionar Usuário</a>

<table width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id']?></td>
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['email']?></td>
            <td>
                <abbr title="Editar">
                    <a href="<?=$base?>/usuario/<?=$usuario['id']?>/editar">
                        <img src="<?=$base?>/assets/images/document.png">
                    
                    </a>
                </abbr>
                <abbr title="Deletar">
                    <a href="<?=$base?>/usuario/<?=$usuario['id']?>/deletar" onclick="return confirm('Are you sure you want to delete?')">
                        <img src="<?=$base?>/assets/images/trash.png">
                    </a>
                </abbr>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer');?>