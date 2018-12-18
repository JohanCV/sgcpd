<h3>ASISTENCIA</h3>

<?php require_once 'vistas/layout/buscar.php'?>

<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">N°</th>
        <th scope="col">Fecha</th>
        <th scope="col">Curso</th>
        <th scope="col">Docente</th>
        <th scope="col">Asistencia</th>
    </tr>
    </thead>

    <tbody>
    <?php $contador = 1; ?>
        <?php while ($asis = $cursoasistencia->fetch_object() ): ?>
            <tr>
                <th scope="row"><?php echo $contador ?></th>
                <td><?= $asis->idfecha ?></td>
                <td><?= $asis->idcurso ?></td>
                <td><?= $asis->idusu ?></td>
                <td><?= $asis->estado ?></td>

            </tr>
            <?php $contador++; ?>
        <?php endwhile; ?>

    </tbody>
</table>
