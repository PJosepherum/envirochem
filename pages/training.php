<?php
    if ( isset( $_GET['t'] ) )    {

        switch ( $_GET['t'] )    {
        
            default:
                $section = array ( 'id'    =>    'default',
                'file'    =>    'default.php',
                'title'    =>    "Training department home" );
        }

    } else {

        $section = array ( 'id'    =>    'default',
        'file'    =>    'default.php',
        'title'    =>    "Training department home" );
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
        <li <?php if ( $section['id'] == 'default') { echo 'class="active"'; } ?> ><a href="?p=training">Training department</a></li>
        <li <?php if ( $section['id'] == 'bohs-courses') { echo 'class="active"'; } ?> ><a href="?p=asbestos&amp;t=bohs-courses">British Occupational Hygiene Society (BOHS) courses</a></li>
        <li <?php if ( $section['id'] == 'awareness') { echo 'class="active"'; } ?> ><a href="?p=asbestos&amp;t=awareness">Asbestos awareness training</a></li>
    </ul>
</div>

<?php include ( 'pages/training/' . $section['file'] ); ?> 