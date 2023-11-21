<?php

function generateMatriz(int $rows, int $columns): array
{
    $matriz = [];
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            $matriz[$i][$j] = rand(1, 500);
        }
    }
    return $matriz;
}

function isPar(int $number)
{
    return $number % 2 == 0;
}

function showMatriz(array $matriz)
{
    ?>
    <table>
        <thead>
            <tr>
                <?php
                for ($i = 0; $i < count($matriz); $i++) { ?>
                    <th>Columna
                        <?= $i + 1 ?>
                    </th>
                    <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($matriz); $i++) { ?>
                <tr>
                    <?php
                    for ($j = 0; $j < count($matriz); $j++) {
                        isPar($matriz[$i][$j]) ? printCell("blue", $matriz[$i][$j]) : printCell("red", $matriz[$i][$j]);
                    } ?>
                </tr>
                <?php

            }
            ?>
        </tbody>
    </table>
    <?php
}

function printCell(string $color, int $cell)
{
    ?>
    <td style="background-color: <?= $color ?>;">
        <?= $cell ?>
    </td>
    <?php
}

function sumeRow(array $matriz, int $row)
{
    $total = 0;
    for ($i = 0; $i < count($matriz); $i++) {
        $total += $matriz[$row][$i];
    }
    return $total;
}

function sumeColumn(array $matriz, int $column)
{
    $total = 0;
    for ($i = 0; $i < count($matriz); $i++) {
        $total += $matriz[$i][$column];
    }
    return $total;
}

function show($array)
{
    echo "[";
    for ($i = 0; $i < count($array); $i++) {
        echo "<br>[";
        for ($j = 0; $j < count($array); $j++) {
            echo $array[$i][$j] . ",";
        }
        echo "],";
    }
    echo "] <br>";
}