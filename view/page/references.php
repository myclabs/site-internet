<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erisler
 * Date: 19/05/13
 * Time: 09:26
 * To change this template use File | Settings | File Templates.
 */
?>
<header class="subhead">
    <div class="container">
        <h1>Clients</h1>
    </div>
</header>
<div class="container">
    <h3 style="border-bottom: 1px solid #EEEEEE;">Dernière version de My C-Tool</h3>
    <ul class="thumbnails" style="margin-top: 30px;">
        <?php
$images = array(
    array(
        'name' => 'Bolloré logistics',
        'file' => 'bollore_logistics'
    ),
);
$thumbnail = '';
foreach ($images as $image) {
    $thumbnail .=
        '<li class="span6">' .
        '<div class="thumbnail">' .
        '<img src="./img/references/' . $image['file'] . '".png" alt="' . $image['name']
        . '" title="' . $image['name'] . '" />' .
        '</div>' .
        '</li>';
}
echo $thumbnail;
?>
    </ul>
    <h3 style="border-bottom: 1px solid #EEEEEE;">Versions précédentes de My C-Tool</h3>
    <ul class="thumbnails" style="margin-top: 30px;">
<?php
$images = array(
    array(
        'name' => 'Fédération Française des Spiritueux',
        'file' => 'ffs'
    ),
    array(
        'name' => 'Fédération Française des Vins d’Apéritif',
        'file' => 'ffva'
    ),
    array(
        'name' => 'Le Guide Vins & Spiritueux',
        'file' => 'le_guide_vs'
    ),
    array(
        'name' => 'Union des Maisons & Marques de Vins',
        'file' => 'umvin'
    ),
    array(
        'name' => 'Association Nationale des Maires des Stations de Montagne',
        'file' => 'anmsm'
    ),
);
$thumbnail = '';
foreach ($images as $image) {
    $thumbnail .=
        '<li class="span4">' .
            '<div class="thumbnail">' .
                '<img src="./img/references/' . $image['file'] . '".png" alt="' . $image['name']
                . '" title="' . $image['name'] . '" style="height: 69px;" />' .
            '</div>' .
        '</li>';
}
echo $thumbnail;
?>
    </ul>
</div>
