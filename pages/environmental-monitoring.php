<?php
    if ( isset( $_GET['t'] ) )    {

        switch ( $_GET['t'] )    {

            case 'noise-and-vibration':
                $section = array ( 'id'    =>    'noise-and-vibration',
                'file'    =>    'noise-and-vibration.php',
                'title'    =>    "Nosie and vibration surveys" );
                break;
        
            case 'air-quality':
                $section = array ( 'id'    =>    'air-quality',
                'file'    =>    'air-quality.php',
                'title'    =>    "Air quality surveys" );
                break;
                
            default:
                $section = array ( 'id'    =>    'default',
                'file'    =>    'default.php',
                'title'    =>    "Environmental monitoring department home" );
        }

    } else {

        $section = array ( 'id'    =>    'default',
        'file'    =>    'default.php',
        'title'    =>    "Environmental monitoring department home" );
    }

?>

<div class="fullblock">
    <h1><?php echo $section['title']; ?></h1>
</div>

<div class="altrightblock">
    <h2>Please <a href="?p=contact">contact us</a> for more information or to get a quote</h2>
</div>

<div class="rightblock">
    <h1>Services</h1>
    <ul class="servicelist">
        <li <?php if ( $section['id'] == 'default') { echo 'class="active"'; } ?> ><a href="?p=environmental-monitoring">Environmental monitoring department</a></li>
        <li <?php if ( $section['id'] == 'noise-and-vibration') { echo 'class="active"'; } ?> ><a href="?p=environmental-monitoring&amp;t=noise-and-vibration">Noise and vibration surveys</a></li>
        <li <?php if ( $section['id'] == 'air-quality') { echo 'class="active"'; } ?> ><a href="?p=environmental-monitoring&amp;t=air-quality">Air quality surveys</a></li>
    </ul>
</div>

<?php include ( 'pages/environmental-monitoring/' . $section['file'] ); ?> 