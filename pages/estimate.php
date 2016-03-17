<?php
    
    if (isset($_GET['s']))    {
    
        // Get data from form
        $query = array (  'name'    =>  htmlentities($_POST['name'], ENT_QUOTES),
                          'email'   =>  htmlentities($_POST['email'], ENT_QUOTES),
                          'telephone'   =>  htmlentities($_POST['telephone'], ENT_QUOTES),
                          'organisationname'   =>  htmlentities($_POST['organisationname'], ENT_QUOTES),
                          'organisationaddress'   =>  htmlentities($_POST['organisationaddress'], ENT_QUOTES),
                          'siteaddress'   =>  htmlentities($_POST['siteaddress'], ENT_QUOTES),
                          'service'   =>  htmlentities($_POST['service'], ENT_QUOTES),
                          'description'   =>  htmlentities($_POST['description'], ENT_QUOTES),
        );
        
        switch($query['service'])   {
            case 'general':
            $recipient = 'admin@envirochem.co.uk';
            $value = "General inquiry or other services";
            break;
            
            case 'chemicals':
            $recipient = 'lab@envirochem.co.uk';
            $value = "Chemical department inquiry"; 
            break;
            
            case 'supervisory':
            $recipient = 'office@envirochem.co.uk';
            $value = "Management and supervision of asbestos removal"; 
            break;
            
            case 'management':
            $recipient = 'office@envirochem.co.uk';
            $value = "Management asbestos survey"; 
            break;
            
            case 'demolition':
            $recipient = 'office@envirochem.co.uk';
            $value = "Major refurbishment / pre demolition asbestos survey"; 
            break;
            
            case 'air monitoring':
            $recipient = 'admin@envirochem.co.uk';
            $value = "Air monitoring and fibre counting"; 
            break;
            
            case 'courses':
            $recipient = 'steve@envirochem.co.uk';
            $value = "BOHS courses and asbestos awareness training"; 
            break;
            
            default:
            $recipient = 'admin@envirochem.co.uk';
            $value = "Other inquiry";    
        }
        
        $message = '
        <html>
        <head>
          <title>' . $value . '</title>
        </head>
        <body>
            <h2>' . $query['name'] . '</h2>
            <h3>' . $query['organisationname'] . ', ' . $query['organisationaddress'] . '</h3> 
            <p>Email: <a href="mailto:' . $query['email'] . '">' . $query['email'] . '</a></p>
            <p>Telephone: ' . $query['telephone'] . '</p>
            <hr />
            <p>' . $query['description'] . '</p>
        </body>
        </html>
        ';

        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        $headers .= 'To: ' . $query['service'] . ' <' . $recipient . '>' . "\r\n";
        $headers .= 'From: ' . $query['name'] . ' <' . $query['email'] . '>' . "\r\n";

        // Mail it
        mail("blu3gough@gmail.com", $value . " - " . $query['siteaddress'], $message, $headers);

?>

<div class="rightblock">
    <h2><?php echo $query['name']; ?></h2>
    <h3><?php echo $query['organisationname']; ?></h3>
    <p><?php echo $query['organisationaddress']; ?></p>                                                                          
    <ul class="nobullets">
        <li>Email: <a href="mailto:<?php echo $query['email']; ?>"><?php echo $query['email']; ?></a></li>
        <li>Telephone: <?php echo $query['telephone']; ?></li>
    </ul>
</div>
<div class="leftblock">
    <h2>Thankyou for the information, we will get back to you shortly</h2>
    <h3><?php echo $value; ?></h3>
    <p><?php echo $query['siteaddress']; ?></p>
    <p><?php echo $query['description']; ?></p>
</div>

<?php
        
    } else  {
    
?>

<div class="rightblock">
	<h2>Fill in the form for your free asbestos survey estimate</h2>
	<p>Please enter any additional information such as the estimated age and size (floor space, number of rooms, etc) of the building in the details section at the end of the form.</p>
</div>

<div class="leftblock">

	<h1>Free estimate</h1>

	<form action="?p=estimate&s=1" method="POST" id="validate">
	
		<fieldset id="userdetails">
			<legend><h2>Your details</h2></legend>
			
			
			<div class="field">
			<input type="text" id="name" name="name" />
			<label for="name">Name</label>
			</div>

			<div class="field">
			<input type="text" id="email" name="email" />
			<label for="email">Email</label>
			</div>
			
			<div class="field">
			<input type="text" id="telephone" name="telephone" />
			<label for="telephone">Telephone</label>
			</div>
		
		</fieldset>
		
		<fieldset id="clientdetails">
			<legend><h2>Organisation</h2></legend>
			
			<div class="field">
			<input type="text" id="organisationname" name="organisationname" />
			<label for="organisationname">Name</label>
			</div>
			
			<div class="field">
			<input type="text" id="organisationaddress" name="organisationaddress" />
			<label for="organisationaddress">Address</label>
			</div>
			
		</fieldset>
		
		<fieldset id="project">
			
			<legend><h2>Project</h2></legend>
			
			<div class="field">
			<select id="service" name="service">
                <option value="general">General inquiry or other services</option>
                <option value="chemicals">Chemical department inquiry</option>
                <option value="supervisory">Management and supervision of asbestos removal</option>
				<option value="management">Management asbestos survey</option>
				<option value="demolition">Major refurbishment / pre demolition asbestos survey</option>
                <option value="air monitoring">Air monitoring and fibre counting</option>
                <option value="courses">BOHS courses and asbestos awareness training</option>
			</select>
			<label for="service">Service</label>
			</div>
			
            <div class="field">
            <input type="text" id="siteaddress" name="siteaddress" />
            <label for="siteaddress">Site address</label>
            </div>
            
		</fieldset>
		
		<fieldset id="details">
			
			<legend><h2>Details</h2></legend>
			
			<div class="control">
			<textarea id="description" name="description"></textarea>
			</div>
			
		</fieldset>
	
		<fieldset id="controls">
			
			<div class="control">
				<input class="submit" type="submit" id="submit" value="Submit!" />
			</div>
			
		</fieldset>
		
	</form>

</div>

<?php
    
    }
    
?>