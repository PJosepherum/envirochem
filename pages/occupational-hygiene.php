<?php
    if ( isset( $_GET['t'] ) )    {

        switch ( $_GET['t'] )    {

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
                
            default:
                $section = array ( 'id'    =>    'default',
                'file'    =>    'default.php',
                'title'    =>    "Occupational hygiene home" );
        }

    } else {

        $section = array ( 'id'    =>    'default',
        'file'    =>    'default.php',
        'title'    =>    "Occupational hygiene home" );
    }

?>
<div class="fullblock">
    <h1><?php echo $section['title']; ?></h1>
</div>

<div class="rightblock">
    <h1>Services</h1>
    <ul class="servicelist">
        <li <?php if ( $section['id'] == 'default') { echo 'class="active"'; } ?> ><a href="?p=occupational-hygiene">Occupational hygiene department</a></li>
        <li <?php if ( $section['id'] == 'dust-monitoring') { echo 'class="active"'; } ?> ><a href="?p=occupational-hygiene&amp;t=dust-monitoring">Dust monitoring</a></li>
        <li <?php if ( $section['id'] == 'noise-monitoring') { echo 'class="active"'; } ?> ><a href="?p=occupational-hygiene&amp;t=noise-monitoring">Noise monitoring</a></li>
        <li <?php if ( $section['id'] == 'lev-testing') { echo 'class="active"'; } ?> ><a href="?p=occupational-hygiene&amp;t=lev-testing">LEV testing</a></li>
        <li <?php if ( $section['id'] == 'rpe-fit-testing') { echo 'class="active"'; } ?> ><a href="?p=occupational-hygiene&amp;t=rpe-fit-testing">Respiratory protective equipment (PPE) fit testing</a></li>
    </ul>
</div>

<?php include ( 'pages/occupational-hygiene/' . $section['file'] ); ?>    