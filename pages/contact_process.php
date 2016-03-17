<?php
  
    if (isset($_POST['service_selector']))    {
        
        switch($_POST['service_selector'])   {
            case 'general':
            $recipient = 'admin@envirochem.co.uk';
            $value = "General inquiry or other services";
            break;
            
            case 'chemicals':
            $recipient = 'lab@envirochem.co.uk';
            $value = "Chemical department inquiry"; 
            break;
            
            case 'microbiology':
            $recipient = 'lab@envirochem.co.uk'; //wrong
            $value = "Microbiological department inquiry"; 
            break;            
            
            case 'supervisory':
            $recipient = 'office@envirochem.co.uk';
            $value = "Management and supervision of asbestos removal"; 
            break;
            
            case 'surveys':
            $recipient = 'office@envirochem.co.uk';
            $value = "Asbestos survey";
            $selected = "surveys";
            break;
            
            case 'airmonitoring':
            $recipient = 'office@envirochem.co.uk';
            $value = "Air monitoring and fibre counting";
            $selected = "airmonitoring"; 
            break;
            
            case 'courses':
            $recipient = 'office@envirochem.co.uk';
            $value = "BOHS courses and asbestos awareness training"; 
            break;
            
            default:
            $recipient = 'admin@envirochem.co.uk';
            $value = "General inquiry or other services";    
        }
        
        //$recipient = 'joe.doherty@envirochem.co.uk';
        
        $messagehead = '<img src="http://www.envirochem.co.uk/template/logo.png" /><h2>' . $value . '</h2>';
        $message = '<table id="messageSuccess">
            <tr>
                <td colspan="2" style="font-weight: bold; font-size: 1.25em; background: #ccc;">Client details</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Name</td>
                <td>' .htmlentities($_POST['name'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Organisation</td>
                <td>' .  htmlentities($_POST['organisation'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Address</td>
                <td>' .  htmlentities($_POST['address'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Email</td>
                <td><a href="mailto:' .  htmlentities($_POST['email'], ENT_QUOTES) . '">' .  htmlentities($_POST['email'], ENT_QUOTES) . '</a></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Telephone</td>
                <td>' . htmlentities($_POST['telephone'], ENT_QUOTES) . '</td>
            </tr>';
        
        if ($selected == "surveys") {
            
            $message .= '<tr>
                <td colspan="2" style="font-weight: bold; font-size: 1.25em; background: #ccc;">Project information</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Site address</td>
                <td>' .  htmlentities($_POST['surveys_siteaddress'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Start date</td>
                <td>' .  htmlentities($_POST['surveys_startdate'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Site contact</td>
                <td>' .  htmlentities($_POST['surveys_contactname'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Telephone</td>
                <td>' .  htmlentities($_POST['surveys_contactnumber'], ENT_QUOTES) . '</td>
            </tr>

            <tr>
                <td colspan="2" style="font-weight: bold; font-size: 1.25em; background: #ccc;">Scope of work</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Procedure</td>
                <td>' .  htmlentities($_POST['surveys_type'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Building type</td>
                <td>' .  htmlentities($_POST['surveys_buildingtype'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Approximate age</td>
                <td>' .  htmlentities($_POST['surveys_buildingage'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Areas / sizes</td>
                <td>' .  htmlentities($_POST['surveys_extent'], ENT_QUOTES) . '</td>
            </tr>'; 
            
        } elseif ($selected == "airmonitoring") {
            
            $message .= '<tr>
                <td colspan="2" style="font-weight: bold; font-size: 1.25em; background: #ccc;">Project information</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Site address</td>
                <td>' .  htmlentities($_POST['airmonitoring_siteaddress'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Start date</td>
                <td>' .  htmlentities($_POST['airmonitoring_startdate'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Site contact</td>
                <td>' .  htmlentities($_POST['airmonitoring_contactname'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Telephone</td>
                <td>' .  htmlentities($_POST['airmonitoring_contactnumber'], ENT_QUOTES) . '</td>
            </tr>
   
            <tr>
                <td colspan="2" style="font-weight: bold; font-size: 1.25em; background: #ccc;">Scope of work</td>
            </tr>
            
            <tr>
                <td style="font-weight: bold;">Procedure</td>
                <td>' .  htmlentities($_POST['airmonitoring_type'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Areas / sizes</td>
                <td>' .  htmlentities($_POST['airmonitoring_enclosures'], ENT_QUOTES) . '</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">DCU required?</td>
                <td>' .  htmlentities($_POST['airmonitoring_dcu'], ENT_QUOTES) . '</td>
            </tr>';
    
        }
            
       $message .= '<tr>
            <td colspan="2" style="font-weight: bold; font-size: 1.25em; background: #ccc;">Details</td>
       </tr>
       <tr>
            <td colspan="2">' .  htmlentities($_POST['description'], ENT_QUOTES) . '</td>
          </tr>
          <tr>
        </table>';
       $messagefoot = '<hr /><em>Generated ' . date("l, j F, H:i") . ' by <a href="http://www.envirochem.co.uk/?p=contact">envirochem.co.uk</a></em>';

        
       
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Attachment headers
        $attachment = false;
        /*
        if ($_POST['surveys_plans'] != "" || $_POST['airmonitoring_methodstatement'] != "") {
        
            $attachment = true; 
        
            if ($_POST['surveys_plans'] != "") {
                $name_of_uploaded_file = basename($_FILES['surveys_plans']['name']); 
            } elseif ($_POST['airmonitoring_methodstatement'] != "") {
                $name_of_uploaded_file = basename($_FILES['airmonitoring_methodstatement']['name']); 
            }
    
            $type_of_uploaded_file = substr($name_of_uploaded_file, strrpos($name_of_uploaded_file, '.') + 1);
            $size_of_uploaded_file = $_FILES["uploaded_file"]["size"]/1024; //size in KBs
            
            //Settings
            $max_allowed_file_size = 5140; // size in KB
            $allowed_extensions = array("pdf", "doc", "docx", "cad", "dwg", "png", "jpg", "jpeg", "gif", "bmp");
             
            //Validations
            if($size_of_uploaded_file > $max_allowed_file_size )
            {
              $errors .= "\n Size of file should be less than $max_allowed_file_size";
            }
             
            //------ Validate the file extension -----
            $allowed_ext = false;
            for($i=0; $i<sizeof($allowed_extensions); $i++)
            {
              if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
              {
                $allowed_ext = true;
              }
            }
             
            if(!$allowed_ext)
            {
              $errors .= "\n The uploaded file is not supported file type. ".
              " Only the following file types are supported: ".implode(',',$allowed_extensions);
            }
            
            $path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
            $tmp_path = $_FILES["uploaded_file"]["tmp_name"];
             
            if(is_uploaded_file($tmp_path))
            {
              if(!copy($tmp_path,$path_of_uploaded_file))
              {
                $errors .= '\n error while copying the uploaded file';
              }
            }
  
        }

        if ($attachment == true) {
            $random_hash = md5(date('r', time()));
            $headers .= "Content-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"\r\n";
        } 
        */
        // Additional headers
        $headers .= 'From: Envirochem.co.uk <admin@envirochem.co.uk>' . "\r\n";
        $headers .= 'Reply-To: ' . htmlentities($_POST['email'], ENT_QUOTES) . "\r\n";

        // Mail it
        $mailerror = 0;
        mail ($recipient, htmlentities($_POST['name'], ENT_QUOTES) . ', ' . htmlentities($_POST['organisation'], ENT_QUOTES), $messagehead . $message . $messagefoot, $headers) or $mailerror = 1;
        
        if ($mailerror) {

            // Failure
            echo '<div class="rightblock">
                <h1>Offices</h1>
                <h2><a href="?p=branches&amp;a=hampshire">12 The Gardens, Fareham, Hampshire, PO16 8SS</a></h2>
                <ul class="nobullets">
                    <li>Telephone: 01329 287 777</li>
                    <li>Fax: 01329 287 755</li>
                    <li>Asbestos: <a href="mailto:office@envirochem.co.uk">office@envirochem.co.uk</a></li>
                    <li>Chemicals: <a href="mailto:lab@envirochem.co.uk">lab@envirochem.co.uk</a></li>
                </ul>
                <h2><a href="?p=branches&amp;a=bristol">Unit 20 Falcons Gate, Northavon Business Centre, Yate, Bristol, BS37 5NH</a></h2>
                <p><a href="mailto:Tony.Green@envirochem.co.uk">Tony.Green@envirochem.co.uk</a></p>
            </div>'; 
            echo '<div class="leftblock">';
            echo '<p>Your message has not been sent due to a server issue. Please contact one of our <a href="?p=branches">branches</a> direct while we fix the problem.</p>';
            echo '</div>';
            
        } else {
        
            // Success   
            echo '<div class="rightblock">';
            echo '<h2>Thankyou for completing our online contact form</h2>';
            echo '<p>Your message has been received and a member of staff from the most appropriate department will get back to you shortly.</h2>';
            echo '</div>';
            echo '<div class="rightblock">
                <h1>Offices</h1>
                <h2><a href="?p=branches&amp;a=hampshire">12 The Gardens, Fareham, Hampshire, PO16 8SS</a></h2>
                <ul class="nobullets">
                    <li>Telephone: 01329 287 777</li>
                    <li>Fax: 01329 287 755</li>
                    <li>Asbestos: <a href="mailto:office@envirochem.co.uk">office@envirochem.co.uk</a></li>
                    <li>Chemicals: <a href="mailto:lab@envirochem.co.uk">lab@envirochem.co.uk</a></li>
                </ul>
                <h2><a href="?p=branches&amp;a=bristol">Unit 20 Falcons Gate, Northavon Business Centre, Yate, Bristol, BS37 5NH</a></h2>
                <p><a href="mailto:Tony.Green@envirochem.co.uk">Tony.Green@envirochem.co.uk</a></p>
            </div>';
               
            echo '<div class="leftblock">';
            echo '<h1>Message sent successfully</h1>';     
            echo $message;
            echo '</div>';
        
        }

  } else {
  
    // Error
    echo '<div class="leftblock">';
    echo '<p>There was an error with the values you entered, please try again or contact one of our <a href="?p=branches">branches</a>.</p>';
    echo '</div>';
  
  }
  
?>
