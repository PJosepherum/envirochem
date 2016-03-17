<?php
    if ( isset( $_GET['t'] ) )    {

        switch ( $_GET['t'] )    {

             case 'occupational-hygiene':
                $section = array ( 'id'    =>    'occupational-hygiene',
                'file'    =>    'occupational-hygiene.php',
                'title'    =>    "Occupational hygiene" );
                break;        

             case 'dust-monitoring':
                $section = array ( 'id'    =>    'dust-monitoring',
                'file'    =>    'dust-monitoring.php',
                'title'    =>    "Dust monitoring" );
                break;
               
             case 'noise-monitoring':
                $section = array ( 'id'    =>    'noise-monitoring',
                'file'    =>    'noise-monitoring.php',
                'title'    =>    "Noise monitoring" );
                break;
                
             case 'lev-testing':
                $section = array ( 'id'    =>    'lev-testing',
                'file'    =>    'lev-testing.php',
                'title'    =>    "LEV testing" );
                break;
                
             case 'rpe-fit-testing':
                $section = array ( 'id'    =>    'rpe-fit-testing',
                'file'    =>    'rpe-fit-testing.php',
                'title'    =>    "Respiratory protective equipment (PPE) fit testing" );
                break;
        
            case 'environmental-monitoring':
                $section = array ( 'id'    =>    'environmental-monitoring',
                'file'    =>    'environmental-monitoring.php',
                'title'    =>    "Environmental monitoring" );
                break;
        
            case 'noise-and-vibration':
                $section = array ( 'id'    =>    'noise-and-vibration',
                'file'    =>    'noise-and-vibration.php',
                'title'    =>    "Nosie and vibration surveys" );
                break;
        
            case 'air-quality':
                $section = array ( 'id'    =>    'air-quality',
                'file'    =>    'air-quality.php',
                'title'    =>    "Dust monitoring and air quality surveys" );
                break;
                
             case 'emissions-testing':
                $section = array ( 'id'    =>    'emissions-testing',
                'file'    =>    'emissions-testing.php',
                'title'    =>    "Emissions testing" );
                break;
                
            default:
                $section = array ( 'id'    =>    'default',
                'file'    =>    'default.php',
                'title'    =>    "Monitoring department home" );
        }

    } else {

        $section = array ( 'id'    =>    'default',
        'file'    =>    'default.php',
        'title'    =>    "Monitoring department home" );
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
        <li <?php if ( $section['id'] == 'occupational-hygiene') { echo 'class="active"'; } ?> ><a href="?p=monitoring&amp;t=occupational-hygiene">Occupational hygiene department</a></li>
        <li <?php if ( $section['id'] == 'dust-monitoring') { echo 'class="active"'; } ?> ><a href="?p=monitoring&amp;t=dust-monitoring">Dust monitoring</a></li>
        <li <?php if ( $section['id'] == 'noise-monitoring') { echo 'class="active"'; } ?> ><a href="?p=monitoring&amp;t=noise-monitoring">Noise monitoring</a></li>
        <li <?php if ( $section['id'] == 'lev-testing') { echo 'class="active"'; } ?> ><a href="?p=monitoring&amp;t=lev-testing">LEV testing</a></li>
        <li <?php if ( $section['id'] == 'rpe-fit-testing') { echo 'class="active"'; } ?> ><a href="?p=monitoring&amp;t=rpe-fit-testing">Respiratory protective equipment (PPE) fit testing</a></li>
    </ul>
    <ul class="servicelist">
        <li <?php if ( $section['id'] == 'environmental-monitoring') { echo 'class="active"'; } ?> ><a href="?p=monitoring&amp;t=environmental-monitoring">Environmental monitoring department</a></li>
        <li <?php if ( $section['id'] == 'noise-and-vibration') { echo 'class="active"'; } ?> ><a href="?p=monitoring&amp;t=noise-and-vibration">Noise and vibration surveys</a></li>
        <li <?php if ( $section['id'] == 'air-quality') { echo 'class="active"'; } ?> ><a href="?p=monitoring&amp;t=air-quality">Dust monitoring and air quality surveys</a></li>
        <li <?php if ( $section['id'] == 'emissions-testing') { echo 'class="active"'; } ?> ><a href="?p=monitoring&amp;t=emissions-testing">Emissions testing</a></li>
    </ul>
</div>

<?php include ( 'pages/monitoring/' . $section['file'] ); ?> 