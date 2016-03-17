<?php

    mysql_connect("vm-mysql-001", "envirochem.co.uk", "M2JlYjJi") or $dbfail = mysql_error();
    mysql_select_db("envirochem_co_uk") or $dbfail = mysql_error();

    if ( isset( $_GET['p'] ) )	{

        switch ( $_GET['p'] )	{

            case 'home':
                $page = array ( 'id'	=>	'home',
                'file'	=>	'home.php',
                'title'	=>	"UKAS accredited laboratory for asbestos and chemical analysis" );
                break;

            case 'about':
                $page = array ( 'id'	=>	'about',
                'file'	=>	'about.php',
                'title'	=>	"About" );
                break;

            case 'news':
                $page = array ( 'id'	=>	'news',
                'file'	=>	'news.php',
                'title'	=>	"News and events" );
                break;

            case 'branches':
                $page = array ( 'id'	=>	'branches',
                'file'	=>	'branches.php',
                'title'	=>	"Branches" );
                break;

            case 'asbestos':
                $page = array ( 'id'	=>	'asbestos',
                'file'	=>	'asbestos.php',
                'title'	=>	"Asbestos department" );
                break;

            case 'chemicals':
                $page = array ( 'id'	=>	'chemicals',
                'file'	=>	'chemicals.php',
                'title'	=>	"Chemicals department" );
                break;

            case 'monitoring':
                $page = array ( 'id'    =>    'monitoring',
                'file'    =>    'monitoring.php',
                'title'    =>    "Monitoring" );
                break;
   
            case 'training':
                $page = array ( 'id'    =>    'training',
                'file'    =>    'training.php',
                'title'    =>    "Training" );
                break;
   
            case 'high-risk':
                $page = array ( 'id'    =>    'high-risk',
                'file'    =>    'high-risk.php',
                'title'    =>    "High risk accessibility" );
                break;
                
            case 'clients':
                $page = array ( 'id'	=>	'clients',
                'file'	=>	'clients.php',
                'title'	=>	"Clients" );
                break;
                
            case 'contact':
                $page = array ( 'id'    =>    'contact',
                'file'    =>    'contact.php',
                'title'    =>    "Contact us" );
                break;
            case 'send_message':
                $page = array ( 'id'    =>    'send_message',
                'file'    =>    'contact_process.php',
                'title'    =>    "Contact us" );
                break;

            case 'login':
                $page = array ( 'id'	=>	'login',
                'file'	=>	'login.php',
                'title'	=>	"Login" );
                break;

            case 'logout':
                $page = array ( 'id'	=>	'logout',
                'file'	=>	'logout.php',
                'title'	=>	"Logout" );
                break;

            case 'account':
                $page = array ( 'id'	=>	'account',
                'file'	=>	'account.php',
                'title'	=>	"Account settings" );
                break;

            default:
                $page = array ( 'id'	=>	'about',
                'file'	=>	'about.php',
                'title'	=>	"Under construction" );
        }

    } else {

        $page = array ( 'id'	=>	'home',
        'file'	=>	'home.php',
        'title'	=>	"UKAS accredited laboratory for asbestos and chemical analysis" );
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <link rel="stylesheet" href="/template/default.css" type="text/css" />
        <link rel="stylesheet" href="/template/jquery.css" type="text/css" /> 
        <link rel="icon" type="image/png" href="/template/favicon.png" />
        
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:regular,bold&amp;v1' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold&amp;v1' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:regular,bold&amp;v1' rel='stylesheet' type='text/css' />

        <!-- Envirochem.co.uk -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.4&amp;sensor=false&amp;key=AIzaSyDEeQNduWd-tQ5Yw3_DTGSm2qsh7ClMx5U"></script>
        <!-- Localhost
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;key=ABQIAAAARkyuWeuQ-78AVU4hNjNGChT2yXp_ZAY8_ufC3CFXhHIE1NvwkxSaMcvvcivUqVk7meeuQcs6mBHhxQ"></script>
        -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        
        <?php if ($page['id'] == 'home')  { ?>  
        
        <script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
        <script type="text/javascript" src="/scripts/jquery.Scroller-1.0.min.js"></script> 
        <script type="text/javascript">
            $(document).ready(function(){
                // redefine Cycle's updateActivePagerLink function 
                $.fn.cycle.updateActivePagerLink = function(pager, currSlideIndex) { 
                    $(pager).find('li').removeClass('activeLI') 
                        .filter('li:eq('+currSlideIndex+')').addClass('activeLI'); 
                }; 
                         
                $('.slideshow').cycle({ 
                        fx: 'fade',
                        timeout: '3000',
                        speed: '500',
                        pause: 1,
                        pager: '.slideshowlist',
                        pagerEvent: 'mouseover',
                        pauseOnPagerHover: true, 
                        pagerAnchorBuilder: function(idx, slide) { 
                            return '<li><a href="#">' + (idx + 1) + '</a></li>'; 
                        } 
                });
                
                $('.marquee').SetScroller({   
                    velocity:      80,
                    direction:      'horizontal',
                    startfrom:      'right',
                    loop:         'infinite',
                    movetype:      'linear',
                    onmouseover: 'play',
                    onmouseout:  'play',
                    onstartup:      'play',
                    cursor:      'pointer'
                });
                
            });   
        </script>
      
            
        <?php } elseif ($page['id'] == 'clients') { ?>  

        <script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){   
                $('.clientcycle').cycle({ 
                        fx: 'fade',
                        timeout: '1500',
                        speed: '400',
                        pause: 1,
                        random: 1,
                        pauseOnPagerHover: true 
                });
             });
        </script>
        
        <?php } elseif ($page['id'] == 'contact') { ?>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
            <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.js"></script>
            <script type="text/javascript"> 
                $(document).ready(function(){                                                                             
                                                                                                                    
                    $("#service_selector").change(function(){
                       switch(this.value) {
                            case 'general':
                                $("#surveys_project").hide();
                                $("#surveys_scope").hide();
                                $("#airmonitoring_project").hide();
                                $("#airmonitoring_scope").hide();
                            break;
                            
                            case 'chemicals':
                                $("#surveys_project").hide();
                                $("#surveys_scope").hide();
                                $("#airmonitoring_project").hide();
                                $("#airmonitoring_scope").hide();
                            break;
                            
                            case 'supervisory':
                                $("#surveys_project").hide();
                                $("#surveys_scope").hide();
                                $("#airmonitoring_project").hide();
                                $("#airmonitoring_scope").hide();
                            break;
                            
                            case 'surveys':
                                $("#surveys_project").show();
                                $("#surveys_scope").show();
                                $("#airmonitoring_project").hide();
                                $("#airmonitoring_scope").hide();
                            break;
                            
                            case 'airmonitoring':
                                $("#surveys_project").hide();
                                $("#surveys_scope").hide();
                                $("#airmonitoring_project").show();
                                $("#airmonitoring_scope").show();
                            break;
                            
                            case 'courses':
                                $("#surveys_project").hide();
                                $("#surveys_scope").hide();
                                $("#airmonitoring_project").hide();
                                $("#airmonitoring_scope").hide();
                            break;
                            
                            default:
                                $("#surveys_project").hide();
                                $("#surveys_scope").hide();
                                $("#airmonitoring_project").hide();
                                $("#airmonitoring_scope").hide();
                       }
                    });
                    
                    $("#service_selector").change();
      
      
                    $( "#surveys_startdate" ).datepicker({
                        dateFormat: "DD, dd MM yy",
                        showAnim:   "blind"
                    });
                    $( "#airmonitoring_startdate" ).datepicker({
                        dateFormat: "DD, dd MM yy",
                        showAnim:   "blind"
                    });
                    
                    $("#contactForm").validate({

                        rules: {
                            name: "required",
                            email: {
                                required: true,
                                email: true
                            },
                            telephone: {
                                required: true,
                                digits: true
                            },
                            address: "required",
                            service_selector: "required",
                            surveys_siteaddress: {
                                required: {
                                    depends: function(element) {
                                        return $("#service_selector option:selected").val() == "surveys";
                                    }
                                }   
                            },
                            surveys_startdate: {
                                required: {
                                    depends: function(element) {
                                        return $("#service_selector option:selected").val() == "surveys";
                                    }
                                }   
                            },
                            airmonitoring_siteaddress: {
                                required: {
                                    depends: function(element) {
                                        return $("#service_selector option:selected").val() == "airmonitoring";
                                    }
                                }    
                            },
                            surveys_type: {
                                required: {
                                    depends: function(element) {
                                        return $("#service_selector option:selected").val() == "surveys";
                                    }
                                } 
                            },
                            airmonitoring_startdate: {
                                required: {
                                    depends: function(element) {
                                        return $("#service_selector option:selected").val() == "airmonitoring";
                                    }
                                }
                            },
                            airmonitoring_type: {
                                required: {
                                    depends: function(element) {
                                        return $("#service_selector option:selected").val() == "airmonitoring";
                                    }
                                }   
                            },
                            description: "required"
                        },
                        messages: {
                            name: "Please specify your name",
                            email: {
                                required: "We need your email address to contact you",  
                                email: "Your email address must be in the format of name@domain.com"
                            },
                            telephone: {
                                required: "We need your telephone number to contact you",
                                digits: "Please enter a valid telephone number"
                            },
                            address: "Please enter your own address or that of your organisation",
                            service_selector: "Please select a service so we can direct your query to the relevant department",
                            surveys_siteaddress: "Please tell us where the work is being undertaken",
                            surveys_startdate: "Please tell us when the project is due to begin",
                            surveys_type: "Please select the type of survey required",                           
                            airmonitoring_siteaddress: "Please tell us where the work is being undertaken",
                            airmonitoring_startdate: "Please tell us when the project is due to begin",
                            airmonitoring_type: "Please select the type of air monitoring required",                                                   
                            description: "We need some information about your project or query before we can help!"
                        },
                        errorLabelContainer: "#formError",
                        wrapper: "p"
                    });
                    
                    /*
                    var $inputs = $('#contactForm :input');
                    var dataString = "";
                    $inputs.each(function() {
                        dataString = dataString + "&" + this.name + "=" + $(this).val();
                    }); 
 
                    $.ajax({  
                      type: "POST",  
                      url: "/form_process.php",  
                      data: dataString,  
                      success: function() {  
                        $('#contactForm').hide();  
                        $('#formSuccess').show();  
                      }  
                    });  
                    return false;  
                    */    
                });
            </script>
        <?php } ?> 
                
        <title>Envirochem | <?php echo $page['title']; ?></title>

        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-25389299-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
        
    </head>

    <body <?php if ($page['id'] == 'branches')  { echo 'onload="initialize()"'; } ?>>

        <div id="frame">
            <div id="container">

                <div id="header">
                    <a id="contactUs" href="?p=contact">&raquo; Contact us &laquo;</a>
                    <img src="/template/logo.png" alt="Envirochem" />
                    <h2>analytical laboratories ltd</h2>
                </div>

                <div id="navigation">
                    <ul class="navbar">
                        <li class="navitem" <?php if ( $page['id'] == 'home') { echo 'id="active"'; } ?> ><a href="?p=home">Home</a></li>
                        <li class="navitem" <?php if ( $page['id'] == 'about') { echo 'id="active"'; } ?> ><a href="?p=about">About</a></li>
                        
                        <li class="navitem" <?php if ( $page['id'] == 'branches') { echo 'id="active"'; } ?> >
                            <a href="?p=branches">Branches <span class="darr">&#9660;</span></a>
                            <ul class="menu">
                                <li><a href="?p=branches&amp;a=hampshire">12 The Gardens<br />Fareham<br />Hampshire<br />PO16 8SS</a></li>
                                <li><a href="?p=branches&amp;a=bristol">Unit 20 Falcons Gate<br />Northavon Business Centre<br />Yate, Bristol<br />BS37 5NH</a></li>
                            </ul>
                        </li>
                        
                        <li class="navitem" <?php if ( $page['id'] == 'asbestos') { echo 'id="active"'; } ?> >
                            <a href="?p=asbestos">Asbestos <span class="darr">&#9660;</span></a>
                            <ul class="menu">
                                <li class="menuheader"><a href="?p=asbestos">Asbestos department</a></li>
                                <li><a href="?p=asbestos&amp;t=removal-supervision">Management and supervision of asbestos removal works</a></li>
                                <li><a href="?p=asbestos&amp;t=awareness">Asbestos awareness training</a></li>
                                <li><a href="?p=asbestos&amp;t=bohs-courses">British Occupational Hygiene Society (BOHS) courses</a></li> 
                                <li><a href="?p=asbestos&amp;t=fibre-identification">Asbestos fibre identification</a></li>
                                <li><a href="?p=asbestos&amp;t=surveys">Asbestos surveys</a></li>
                                <li><a href="?p=asbestos&amp;t=air-monitoring">Air monitoring and fibre counting</a></li>
                                <li><a href="?p=monitoring&amp;t=rpe-fit-testing">Respiratory protective equipment (RPE) fit testing</a></li>
                            </ul>
                        </li>

                        <li class="navitem" <?php if ( $page['id'] == 'chemicals' ) { echo 'id="active"'; } ?> >
                            <a href="?p=chemicals">Chemicals <span class="darr">&#9660;</span></a>
                            <ul class="menu">
                                <li class="menuheader"><a href="?p=chemicals">Chemicals department</a></li>
                                <li><a href="?p=chemicals&amp;t=microbiology">Microbiological analysis</a></li>
                                <li><a href="?p=chemicals&amp;t=water-analysis">Environmental, process and waste waters</a></li>
                                <li><a href="?p=chemicals&amp;t=soil-analysis">Soil analysis</a></li>
                                <li><a href="?p=chemicals&amp;t=built-environment">The built environment</a></li>
                            </ul>
                        </li>
                        
                        <li class="navitem" <?php if ( $page['id'] == 'environmental-monitoring' || $page['id'] == 'occupational-hygiene' ) { echo 'id="active"'; } ?> >
                            <a href="?p=monitoring">Monitoring <span class="darr">&#9660;</span></a>
                            <ul class="menu">
                                <li class="menuheader"><a href="?p=monitoring&amp;t=occupational-hygiene">Occupational hygiene</a></li>
                                <li><a href="?p=monitoring&amp;t=dust-monitoring">Dust monitoring</a></li>
                                <li><a href="?p=monitoring&amp;t=noise-monitoring">Noise monitoring</a></li>
                                <li><a href="?p=monitoring&amp;t=lev-testing">LEV testing</a></li>
                                <li><a href="?p=monitoring&amp;t=rpe-fit-testing">Respiratory protective equipment (RPE) fit testing</a></li>
    
                                <li class="menuheader"><a href="?p=monitoring&amp;t=environmental-monitoring">Environmental</a></li>
                                <li><a href="?p=monitoring&amp;t=noise-and-vibration">Noise and vibration surveys</a></li>
                                <li><a href="?p=monitoring&amp;t=air-quality">Dust monitoring and air quality surveys</a></li>
                                <li><a href="?p=monitoring&amp;t=emissions-testing">Emissions testing</a></li>
                            </ul>
                        </li>
                        
                        <li class="navitem" <?php if ( $page['id'] == 'training') { echo 'id="active"'; } ?> >
                            <a href="?p=training">Training <span class="darr">&#9660;</span></a>
                            <ul class="menu">
                                <li class="menuheader"><a href="?p=training">Training department</a></li>
                                <li><a href="?p=asbestos&amp;t=bohs-courses">British Occupational Hygiene Society (BOHS) courses</a></li> 
                                <li><a href="?p=asbestos&amp;t=awareness">Asbestos awareness training</a></li>
                            </ul>
                        </li>
                        <li class="navitem" <?php if ( $page['id'] == 'news') { echo 'id="active"'; } ?> ><a href="?p=news">News</a></li>
                        <li class="navitem" <?php if ( $page['id'] == 'clients') { echo 'id="active"'; } ?> ><a href="?p=clients">Clients</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>

                <div id="content">

                    <?php include ( 'pages/' . $page['file'] ); ?>	

                </div>

            </div>
        </div>

        <div id="footer">

            <div class="footerblock">

                <ul id="right" class="block">
                    <li class="bold">Reg. No. 2378228, England</li>
                    <li><a href="http://www.hse.gov.uk/asbestos/" target="_blank">Health and Safety Executive</a></li>
                    <li><a href="http://www.environment-agency.gov.uk/business/topics/waste/123022.aspx" target="_blank">Environment Agency</a></li>
                    <li><a href="http://www.ukas.com/technical-information/technical-committee/absestos-tac/Asbestos-TAC.asp" target="_blank">United Kingdom Accreditation Service</a></li>
                    <li><a class="copyright" href="mailto:joe.doherty@envirochem.co.uk">&copy;<?php echo date('Y'); ?> J. Doherty, Envirochem &hearts;</a></li>
                </ul>

                <ul id="middle" class="block">
                    <li class="bold">Envirochem Analytical Laboratories Ltd</li>
                    <li>12 The Gardens, Broadcut, Fareham, Hampshire, PO16 8SS</li>
                    <li><img src="/template/phone.png" alt="Telephone" /> 01329 287 777</li>
                    <li><img src="/template/fax.png" alt="Fax" /> 01329 287 755</li>
                    <li><a href="mailto:office@envirochem.co.uk">office@envirochem.co.uk</a></li>
                    <li><a href="mailto:lab@envirochem.co.uk">lab@envirochem.co.uk</a></li>  
                </ul>

            </div>

        </div>

    </body>

</html>
