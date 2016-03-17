<?php
    if ( isset( $_GET['t'] ) )    {

        switch ( $_GET['t'] )    {

            case 'microbiology':
                $section = array ( 'id'    =>    'microbiology',
                'file'    =>    'microbiology.php',
                'title'    =>    "Microbiological analysis" );
                break;
        
            case 'water-analysis':
                $section = array ( 'id'    =>    'water-analysis',
                'file'    =>    'water-analysis.php',
                'title'    =>    "Environmental, process and waste waters" );
                break;

            case 'soil-analysis':
                $section = array ( 'id'    =>    'soil-analysis',
                'file'    =>    'soil-analysis.php',
                'title'    =>    "Soil analysis" );
                break;

            case 'built-environment':
                $section = array ( 'id'    =>    'built-environment',
                'file'    =>    'built-environment.php',
                'title'    =>    "The built environment" );
                break;
                
            default:
                $section = array ( 'id'    =>    'default',
                'file'    =>    'default.php',
                'title'    =>    "Chemicals department home" );
        }

    } else {

        $section = array ( 'id'    =>    'default',
        'file'    =>    'default.php',
        'title'    =>    "Chemicals department home" );
    }

?>
<div class="fullblock">
    <h1><?php echo $section['title']; ?></h1>
</div>

<div class="altrightblock">
    <h2>Please <a href="?p=branches">contact us</a> for information about landfill waste acceptance criteria (WAC) testing</h2>
</div>

<div class="rightblock">
    <h1>Services</h1>
    <ul class="servicelist">
        <li <?php if ( $section['id'] == 'default') { echo 'class="active"'; } ?> ><a href="?p=chemicals">Chemicals department</a></li>
        <li <?php if ( $section['id'] == 'microbiology') { echo 'class="active"'; } ?> ><a href="?p=chemicals&amp;t=microbiology">Microbiological analysis</a></li>
        <li <?php if ( $section['id'] == 'water-analysis') { echo 'class="active"'; } ?> ><a href="?p=chemicals&amp;t=water-analysis">Environmental, process and waste waters</a></li>
        <li <?php if ( $section['id'] == 'soil-analysis') { echo 'class="active"'; } ?> ><a href="?p=chemicals&amp;t=soil-analysis">Soil analysis</a></li>
        <li <?php if ( $section['id'] == 'built-environment') { echo 'class="active"'; } ?> ><a href="?p=chemicals&amp;t=built-environment">The built environment</a></li>
    </ul>
</div>

<div class="rightblock">
    <h1>Accreditation</h1>
    <ul class="logos">
        <li><a href="http://www.ukas.org/testing/lab_detail.asp?lab_id=530" target="_blank"><img src="/images/ukastesting.gif" alt="United Kingdom Accreditation Service (UKAS), Testing (1227)" width="80" /></a></li>
        <li><a href="http://www.environment-agency.gov.uk/business/regulation/31835.aspx" target="_blank"><img src="/images/mcerts.png" alt="Environment Agency, MCERTS" width="80" /></a></li>
    </ul>
    <ul class="servicelist">
        <li><a href="http://www.hsl.gov.uk/centres-of-excellence/proficiency-testing-schemes/wasp.aspx" target="_blank">Workplace Analysis Scheme for Proficiency (WASP)</a></li>
        <li><a href="http://www.rt-corp.com/products/c30.aspx" target="_blank">RTC Proficiency Scheme</a></li>
    </ul>
</div>

<?php include ( 'pages/chemicals/' . $section['file'] ); ?>




