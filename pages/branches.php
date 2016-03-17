<?php
    if ( isset( $_GET['a'] ) )    {

        switch ( $_GET['a'] )    {

            case 'hampshire':
                $section = array ( 'id'    =>    'hampshire',
                'file'    =>    'hampshire.php',
                'title'    =>    "12 The Gardens" );
                break;

            case 'bristol':
                $section = array ( 'id'    =>    'bristol',
                'file'    =>    'bristol.php',
                'title'    =>    "Unit 20 Falcons Gate" );
                break;
                
            default:
                $section = array ( 'id'    =>    'default',
                'file'    =>    'default.php',
                'title'    =>    "Branches" );
        }

    } else {

        $section = array ( 'id'    =>    'default',
        'file'    =>    'default.php',
        'title'    =>    "Branches" );
    }

?>

<div class="fullblock">
    <h1><?php echo $section['title']; ?></h1>
</div>

<?php include ( 'pages/branches/' . $section['file'] ); ?>