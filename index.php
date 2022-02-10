<?php

$data = json_decode(file_get_contents("https://data.gov.lv/dati/lv/api/3/action/datastore_search?&resource_id=d499d2f0-b1ea-4ba2-9600-2c701b03bd4a"));

$table = [];
foreach ($data as $a => $item) {
    $table[$a] = $item;
}

?>

<table border="dotted">

    <h1>Covid statistika</h1>

    <thead>
    <th>
        Datums
    </th>
    <th>
        Testu skaits
    </th>
    <th>
        Apstiprināta Covid infekcija
    </th>
    <th>
        Īpatsvars
    </th>

    </thead>

    </thead>
    <?php foreach ($table["result"]->records as $record) { ?>
        <tr>
            <td>
                <?php echo $record->Datums;
                ?>
            </td>
            <td>
                <?php echo $record->TestuSkaits;
                ?>
            </td>
            <td>
                <?php echo $record->ApstiprinataCOVID19InfekcijaSkaits;
                ?>
            </td>
            <td>
                <?php echo $record->Ipatsvars;
                ?>
            </td>
        </tr>
    <?php } ?>

</table>
