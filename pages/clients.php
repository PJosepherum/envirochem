<?php
	if ( isset( $_GET['t'] ) )	{
	
		switch ( $_GET['t'] )	{

			case 'bainternational':
			$section = array ( 'id'	=>	'bainternational',
							'file'	=>	'bainternational.php',
							'title'	=>	"Management of asbestos at Bournemouth International Airport" );
			break;
		
			case 'britishpipeline':
			$section = array ( 'id'	=>	'britishpipeline',
							'file'	=>	'britishpipeline.php',
							'title'	=>	"British Pipeline, British Petrolium Buncefield incident" );
			break;
			
			case 'controltechniques':
			$section = array ( 'id'	=>	'controltechniques',
							'file'	=>	'controltechniques.php',
							'title'	=>	"Sprayed asbestos-insulation removal for Control Technique Dynamic" );
			break;
	
			default:
			$section = array ( 'id'	=>	'default',
							'file'	=>	'default.php',
							'title'	=>	"Clients" );
			
		}
		
	} else {
	
		$section = array ( 'id'	=>	'default',
						'file'	=>	'default.php',
						'title'	=>	"Clients" );
	}
	
?>

<div class="fullblock">
	<h1><?php echo $section['title']; ?></h1>
</div>
<div class="rightblock">
	<h1>Major projects</h1>
	<ul class="servicelist">
		<li><a href="?p=clients&amp;t=bainternational">Bournemoth International Airport</a></li>
		<li><a href="?p=clients&amp;t=britishpipeline">British Pipeline / British Petroleum</a></li>
		<li><a href="?p=clients&amp;t=controltechniques">Control Technique Dynamics</a></li>
	</ul>
</div>
<div class="rightblock">
    <div class="clientcycle">
        <a href="http://www.aster.org.uk/" target="_blank"><img src="/images/clients/astergroup.png" alt="Aster" /></a>
        <a href="http://www.selwoodhousing.com" target="_blank"><img src="/images/clients/selwood.png" alt="Selwood Housing" /></a>
        <a href="http://www.winchester.gov.uk/" target="_blank" ><img src="/images/clients/winchester.png" alt="Winchester City Council" /></a>
        <a href="http://www.soton.ac.uk/" target="_blank"><img src="/images/clients/unisouthampton.png" alt="University of Southampton" /></a>
        <a href="http://www.southampton.gov.uk/" target="_blank" ><img src="/images/clients/scclogo.png" alt="Southampton City Council" /></a>
        <a href="http://www.reading.ac.uk/" target="_blank" ><img src="/images/clients/unireading.png" alt="University of Reading" /></a>
        <a href="http://www.sse.com/" target="_blank"><img src="/images/clients/sse.png" alt="Scottish and Southern Energy" /></a>
        <a href="http://www.wates.co.uk/" target="_blank"><img src="/images/clients/wates.png" alt="Wates Construction" /></a>
        <a href="http://www.kier.co.uk/" target="_blank"><img src="/images/clients/kier.png" alt="Kier" /></a>
        <a href="http://www.waringsgroup.com/" target="_blank"><img src="/images/clients/warings.png" alt="Warings" /></a>
        <a href="http://www.capeplc.com/" target="_blank"><img src="/images/clients/cape.png" alt="Cape Industrial Services" /></a>
        <a href="http://www.porthosp.nhs.uk/" target="_blank"><img src="/images/clients/portshospitals.png" alt="Portsmouth Hospitals NHS Trust" /></a>
        <a href="http://www.bournemouthairport.com/" target="_blank"><img src="/images/clients/bournemouthairport.png" alt="Bournemouth International Airport" /></a>
        <a href="http://www.merryhillenvirotec.com/" target="_blank"><img src="/images/clients/merryhill.png" alt="Merryhill Envirotec" /></a>
        <a href="http://www.rcollard.com/" target="_blank"><img src="/images/clients/rcollard.png" alt="R. Collard" /></a>
        <a href="http://www.testway.co.uk/" target="_blank"><img src="/images/clients/testway.png" alt="Testway Housing" /></a>
        <a href="http://www.shieldenvironmental.co.uk/" target="_blank"><img src="/images/clients/shield.png" alt="Shield Environmental Services" /></a>
        <a href="http://www.rhinsulation.com/" target="_blank"><img src="/images/clients/rhinsulation.png" alt="R. H. Insulation Services" /></a>
        <a href="http://www.bath-demolition.co.uk/" target="_blank"><img src="/images/clients/bathdemolition.png" alt="Bath Demolition" /></a>
        <a href="http://www.wessexdemolition.co.uk/" target="_blank"><img src="/images/clients/wessexdemolition.png" alt="Wessex Demolition & Salvage" /></a>
    </div>
</div>

<?php include ( 'pages/clients/' . $section['file'] ); ?>

