<!--
<div class="columnblock">

    <div id="asbestos">
        <h3>Asbestos consultancy</h3>
        <ul class="magiclist">
            <li><a href="?p=asbestos&amp;t=removal-supervision">Removal supervision</a></li>
            <li><a href="?p=asbestos&amp;t=fibre-identification">Fibre identification</a></li>
            <li><a href="?p=asbestos&amp;t=surveys">Asbestos surveys</a></li>
            <li><a href="?p=asbestos&amp;t=air-monitoring">Air monitoring</a></li>
        </ul>
        <a class="moreinfo" href="?p=asbestos">more &raquo;</a>
    </div>
    <div id="chemicals">
        <h3>Chemical analysis</h3>
        <ul class="magiclist">
            <li><a href="?p=chemicals&amp;t=microbiology">Microbiological analysis</a></li>
            <li><a href="?p=chemicals&amp;t=water-analysis">Water analysis</a></li>
            <li><a href="?p=chemicals&amp;t=soil-analysis">Soil analysis</a></li>
            <li><a href="?p=chemicals&amp;t=built-environment">The built environment</a></li>
        </ul>
        <a class="moreinfo" href="?p=chemicals">more &raquo;</a> 
    </div>
    <div id="occupational-hygiene">
        <h3>Occupational hygiene</h3>
        <ul class="magiclist">
            <li><a href="?p=monitoring&amp;t=dust-monitoring">Dust monitoring</a></li>
            <li><a href="?p=monitoring&amp;t=noise-monitoring">Noise monitoring</a></li>
            <li><a href="?p=monitoring&amp;t=lev-testing">LEV testing</a></li>
            <li><a href="?p=monitoring&amp;t=rpe-fit-testing">RPE fit testing</a></li>
        </ul>
        <a class="moreinfo" href="?p=monitoring&amp;t=occupational-hygiene">more &raquo;</a>
    </div>
    <div id="environmental-monitoring">
        <h3>Environmental</h3>
        <ul class="magiclist">
            <li><a href="?p=monitoring&amp;t=noise-and-vibration">Noise and vibration</a></li>
            <li><a href="?p=monitoring&amp;t=air-quality">Dust monitoring</a></li>
            <li><a href="?p=monitoring&amp;t=emissions-testing">Emissions testing</a></li>
        </ul>
        <a class="moreinfo" href="?p=monitoring&amp;t=environmental-monitoring">more &raquo;</a>
    </div>
    <div id="training">
        <h3>Training</h3>
        <ul class="magiclist">
            <li><a href="?p=asbestos&amp;t=bohs-courses">BOHS courses</a></li> 
            <li><a href="?p=asbestos&amp;t=awareness">Asbestos awareness</a></li>
        </ul>
        <a class="moreinfo" href="?p=training">more &raquo;</a>
    </div>
    
</div>
-->

<div class="marqueeblock">
    <div class="marquee">
        <a href="?p=branches&amp;a=bristol">Bristol branch now open, click for more information</a>
    </div>
</div>

<!--<?php
	$result = mysql_query("SELECT * FROM news_articles ORDER BY timestamp DESC LIMIT 1");
	if ( $result ) {
		$article = mysql_fetch_array($result);
		
		$result = mysql_query("SELECT * FROM users WHERE id='" . $article['userid'] . "'");
		$users = mysql_fetch_array($result);
		
		// Fix the date format
		$date = $article['timestamp'];
		// We'll remove certain characters for backward compatibility
		// YYYY-MM-DD HH:MM:SS
		$date = str_replace('-', '', $date);
		$date = str_replace(':', '', $date);
		$date = str_replace(' ', '', $date);
		// YYYYMMDDHHMMSS
		$date = getdate( mktime(
			substr($date, 8, 2),
			substr($date, 10, 2),
			substr($date, 12, 2),
			substr($date, 4, 2),
			substr($date, 6, 2),
			substr($date, 0, 4)
		));
		
		echo '<div class="rightblock">';
		echo '<h1>Latest news</h1>';
		echo '<h2>' . $article['title'] . '</h2>';
		echo $article['excerpt'];
		echo '<div class="newsfooter">';
		echo '<ul class="newsright">';
		echo '<li>' . $date['mday'] . ' ' . $date['month'] . ' ' . $date['year'] . ' by <a href="mailto:' . $users['email'] .'">' . $users['name'] . '</a></li>';
		echo '</ul>';
		echo '<ul class="newsleft">';
		echo '<li><a href="?p=news&amp;a=' . $article['id'] . '">more &raquo;</a></li>';
		echo '</ul>';
		echo '</div>';
		echo '</div>';
        
	} else {
    
        echo '<div class="rightblock">';
        echo '<h1>Latest news</h1>';
        echo '<h2>Article not found</h2>';
        echo '</div>';
        
    }
    
?>-->



<div class="rightblock">
	<h1>Departments</h1>
	<ul class="departments">
		<li class="asbestos"><a href="?p=asbestos">asbestos</a></li>
		<li class="chemicals"><a href="?p=chemicals">chemicals</a></li>
		<li class="microbiology"><a href="?p=chemicals&amp;t=microbiology">microbiology</a></li>
	</ul>
</div>

<div class="leftblock">   
    <div>

        <h2>Envirochem is an independent organisation offering a comprehensive analytical and consultancy service covering environmental, health and safety concerns</h2>
        <p>We specialise in the <a href="?p=asbestos">management of asbestos containing materials</a> including <a href="?p=asbestos&amp;t=removal-supervision">project management</a>, <a href="?p=asbestos&amp;t=fibre-identification">identification of asbestos fibres</a>, <a href="?p=asbestos&amp;t=surveys">asbestos surveying</a>, <a href="?p=asbestos&amp;t=air-monitoring">air monitoring and fibre counting</a>.</p>
        <p>Our <a href="?p=chemicals">chemical analysis laboratory</a> specialises in <a href="?p=chemicals&amp;t=water-analysis">water</a> and <a href="?p=chemicals&amp;t=soil-analysis">soil analysis</a>, and <a href="?p=monitoring&amp;t=emissions-testing">emissions testing</a>.</p>
        <p>Recent efforts have expanded our <a href="?p=monitoring&amp;t=environmental-monitoring">environmental monitoring</a> services, including <a href="?p=monitoring&amp;t=noise-and-vibration">noise and vibration surveys</a> and <a href="?p=monitoring&amp;t=air-quality">air quality surveys</a> during demolition projects. We have also opened our <a href="?p=chemicals&amp;t=microbiology">microbiological analysis</a> department.</p>
    </div>
  
    <div class="slideshow">
        <div>
            <ul class="ukas">
                <li><a href="http://www.ukas.org/testing/lab_detail.asp?lab_id=530" target="_blank"><img src="/images/ukastesting.gif" alt="United Kingdom Accreditation Service (UKAS), Testing (1227)" width="90" /></a></li>
                <li><a href="http://www.ukas.com/InspectionBodySearch.asp?qt=Envirochem" target="_blank"><img src="/images/ukasinspection.gif" alt="United Kingdom Accreditation Service (UKAS), Inspection (0260)" width="90" /></a></li>
                <li><a href="http://www.environment-agency.gov.uk/business/regulation/31835.aspx" target="_blank"><img src="/images/mcerts.png" alt="Environment Agency, MCERTS" width="90" /></a></li>
            </ul>
	        <h1>Accreditation</h1>
	        <p>Envirochem is accredited by the <a href="http://www.ukas.com/about-accreditation/default.asp" target="_blank">United Kingdom Accreditation Service</a> (UKAS) for asbestos sampling, <a href="?p=asbestos&amp;t=fibre-identification">fibre identification</a>, <a href="?p=asbestos&amp;t=surveys">surveying</a>, <a href="?p=asbestos&amp;t=air-monitoring">air monitoring and fibre counting</a>.</p>
            <p>We are <a href="http://www.mcerts.uk.com/index/" target="_blank">MCERTS</a> accredited by the <a href="http://www.environment-agency.gov.uk/" target="_blank">Environment Agency</a> for analysis of soils.</p>
        </div>
        <div>
            <h1>Asbestos consultancy</h1>
            <a href="http://www.hse.gov.uk/asbestos/" target="_blank"><img src="/images/hse.gif" height="120" alt="Health and Safety Executive (HSE)" class="floatright" /></a>
            <p>Envirochem provide a wide range of asbestos analytical services including work carried out within accordance to Health and Safety Executive guidance notes <a href="http://www.hse.gov.uk/pubns/books/hsg264.htm" target="_blank">HSG 264</a> and <a href="http://www.hse.gov.uk/pubns/books/hsg248.htm" target="_blank">HSG 248</a>.</p>
            <p>We hold a licence from the <a href="http://www.hse.gov.uk/asbestos/licensing/index.htm" target="_blank" />Health and Safety Executive</a> (HSE) to directly supervise licensable work with asbestos, and provide services including <a href="?p=asbestos&amp;t=removal-supervision">project management</a>, <a href="?p=asbestos&amp;t=fibre-identification">identification of asbestos fibres</a>, <a href="?p=asbestos&amp;t=surveys">asbestos surveying</a>, <a href="?p=asbestos&amp;t=air-monitoring">air monitoring and fibre counting</a>.</p>
        </div>
        <div>
            <h1>Chemical analysis</h1>
            <img class="floatleft" src="/images/analysis.gif" alt="Chemical analysis" height="140" />
            <p>Our <a href="?p=chemicals">chemical analysis</a> department has specific expertise in sampling and testing of <a href="?p=chemicals&amp;t=water-analysis">waters</a>, <a href="?p=chemicals&amp;t=dust-analysis">dust</a>, <a href="?p=chemicals&amp;t=air-monitoring">air</a> and <a href="?p=chemicals&amp;t=soil-analysis">soils</a>.</p>
            <p>We have an extensive capability for common environmental testing procedures and knowledge of the <a href="http://www.hse.gov.uk/coshh/" target="_blank">Control Of Substances Hazardous to Health</a> (COSHH).</p>
        </div>
        <div>
            <h1>Occupational hygiene monitoring</h1>
            <img class="floatleft" src="/images/occupationalhygiene.gif" alt="Monitoring" height="160" />
            <p>Landfill waste acceptance criteria testing is carried out routinely along with <a href="?p=monitoring&amp;t=emissions-testing">emissions testing</a> and <a href="?p=monitoring&amp;t=occupational-hygiene">occupational hygiene monitoring</a> for the recognition, evaluation and control of health and safety risks associated with the working environment.</p> 
        </div>
    </div>
    
    <ul class="slideshowlist"></ul>
</div>