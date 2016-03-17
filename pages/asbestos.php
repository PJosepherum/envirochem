<?php
    if ( isset( $_GET['t'] ) )	{

        switch ( $_GET['t'] )	{

            case 'removal-supervision':
                $section = array ( 'id'	=>	'removal-supervision',
                'file'	=>	'removal-supervision.php',
                'title'	=>	"Management and supervision of asbestos removal works" );
                break;

            case 'awareness':
                $section = array ( 'id'	=>	'awareness',
                'file'	=>	'awareness.php',
                'title'	=>	"Asbestos awareness training" );
                break;
                
            case 'bohs-courses':
                $section = array ( 'id'    =>    'bohs-courses',
                'file'    =>    'bohs-courses.php',
                'title'    =>    "British Occupational Hygiene Society (BOHS) courses" );
                break;

            case 'fibre-identification':
                $section = array ( 'id'	=>	'fibre-identification',
                'file'	=>	'fibre-identification.php',
                'title'	=>	"Asbestos fibre identification" );
                break;

            case 'surveys':
                $section = array ( 'id'	=>	'surveys',
                'file'	=>	'surveys.php',
                'title'	=>	"Asbestos surveys and investigation" );
                break;

            case 'air-monitoring':
                $section = array ( 'id'	=>	'air-monitoring',
                'file'	=>	'air-monitoring.php',
                'title'	=>	"Asbestos air monitoring and fibre counting" );
                break;		

            case 'rpe-fit-testing':
                $section = array ( 'id'	=>	'rpe-fit-testing',
                'file'	=>	'rpe-fit-testing.php',
                'title'	=>	"Respiratory protective equipment (PPE) fit testing" );
                break;		

            default:
                $section = array ( 'id'	=>	'default',
                'file'	=>	'default.php',
                'title'	=>	"Asbestos department home" );
        }

    } else {

        $section = array ( 'id'	=>	'default',
        'file'	=>	'default.php',
        'title'	=>	"Asbestos department home" );
    }

?>

<div class="fullblock">
	<h1><?php echo $section['title']; ?></h1>
</div>
<div class="altrightblock">
	<a href="?p=asbestos&amp;t=removal-supervision"><img class="borderright" alt="Health and Safety Executive (HSE)" src="/images/hse.gif" width="80" /></a>
	<h2>We are licensed by the <a href="http://www.hse.gov.uk/asbestos" target="_blank">Health and Safety Executive</a> (HSE) to <a href="?p=asbestos&amp;t=removal-supervision">supervise and manage your asbestos removal project</a></h2>
</div>
<div class="rightblock">
    <h1>Services</h1>
	<ul class="servicelist">
		<li <?php if ( $section['id'] == 'default') { echo 'class="active"'; } ?> ><a href="?p=asbestos">Asbestos department</a></li>
        <li <?php if ( $section['id'] == 'removal-supervision') { echo 'class="active"'; } ?> ><a href="?p=asbestos&amp;t=removal-supervision">Management and supervision of asbestos removal works</a></li>
        <li <?php if ( $section['id'] == 'awareness') { echo 'class="active"'; } ?> ><a href="?p=asbestos&amp;t=awareness">Asbestos awareness training</a></li>
		<li <?php if ( $section['id'] == 'bohs-courses') { echo 'class="active"'; } ?> ><a href="?p=asbestos&amp;t=bohs-courses">British Occupational Hygiene Society (BOHS) courses</a></li>  
        <li <?php if ( $section['id'] == 'fibre-identification') { echo 'class="active"'; } ?> ><a href="?p=asbestos&amp;t=fibre-identification">Asbestos fibre identification</a></li>
		<li <?php if ( $section['id'] == 'surveys') { echo 'class="active"'; } ?> ><a href="?p=asbestos&amp;t=surveys">Surveys and investigation</a></li>
		<li <?php if ( $section['id'] == 'air-monitoring') { echo 'class="active"'; } ?> ><a href="?p=asbestos&amp;t=air-monitoring">Air monitoring and fibre counting</a></li>
		<li <?php if ( $section['id'] == 'rpe-fit-testing') { echo 'class="active"'; } ?> ><a href="?p=monitoring&amp;t=rpe-fit-testing">Respiratory protective equipment (RPE) fit testing</a></li>
	</ul>
</div>

<?php include ( 'pages/asbestos/' . $section['file'] ); ?>

