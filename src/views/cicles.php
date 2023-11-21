<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Llista de Cicles</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Cycle</th>
                <th>Vliteral</th>
                <th>Cliteral</th>
                <th>Operacions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                for ($i = 0; $i < count($cicles); $i++) {
                    if ($cicles[$i] != "idFamily") { ?>
                        <td>
                            <?= $cicles[$i] ?>
                        </td>
                        <?php
                    }
                } ?>
            </tr>
        </tbody>
    </table>
</body>

</html>