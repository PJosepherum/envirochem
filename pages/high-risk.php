<?php
    if ( isset( $_GET['t'] ) )    {

        switch ( $_GET['t'] )    {

            case 'confined-space':
                $section = array ( 'id'    =>    'confined-space',
                'file'    =>    'confined-space.php',
                'title'    =>    "Confined space access" );
                break;
        
            case 'high-level':
                $section = array ( 'id'    =>    'high-level',
                'file'    =>    'high-level.php',
                'title'    =>    "High level access" );
                break;
                
            default:
                $section = array ( 'id'    =>    'default',
                'file'    =>    'default.php',
                'title'    =>    "High risk accessibility" );
        }

    } else {

        $section = array ( 'id'    =>    'default',
        'file'    =>    'default.php',
        'title'    =>    "High risk accessibility home" );
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
        <li <?php if ( $section['id'] == 'default') { echo 'class="active"'; } ?> ><a href="?p=high-risk">High risk accessibility</a></li>
        <li <?php if ( $section['id'] == 'confined-space') { echo 'class="active"'; } ?> ><a href="?p=high-risk&amp;t=confined-space">Confined space access</a></li>
        <li <?php if ( $section['id'] == 'high-level') { echo 'class="active"'; } ?> ><a href="?p=high-risk&amp;t=high-level">High level access</a></li>
    </ul>
</div>

<?php include ( 'pages/high-risk/' . $section['file'] ); ?> 