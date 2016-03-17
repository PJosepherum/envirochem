<div class="rightblock" id="formError">
    <h1>Online contact form</h1>
</div>
<div class="rightblock">
    <h2>We are happy to provide a quotation for all of our services</h2>
    <p>For asbestos surveys, please provide details about the scope of the project such as the size (number of floors, rooms) and approximate age of the property.</p>
</div>
<div class="rightblock">
    <h1>Offices</h1>
    <h2><a href="?p=branches&amp;a=hampshire">12 The Gardens, Fareham, Hampshire, PO16 8SS</a></h2>
    <ul class="nobullets">
        <li>Telephone: 01329 287 777</li>
        <li>Fax: 01329 287 755</li>
        <li>Asbestos: <a href="mailto:office@envirochem.co.uk">office@envirochem.co.uk</a></li>
        <li>Chemicals: <a href="mailto:lab@envirochem.co.uk">lab@envirochem.co.uk</a></li>
    </ul>
    <h2><a href="?p=branches&amp;a=bristol">Unit 20 Falcons Gate, Northavon Business Centre, Yate, Bristol, BS37 5NH</a></h2>
    <ul class="nobullets">   
        <li>Telephone: 01454 310 858</li> 
        <li><a href="mailto:Tony.Green@envirochem.co.uk">Tony.Green@envirochem.co.uk</a></li>
    </ul>
</div>    
    
<div class="leftblock">

    <form action="?p=send_message" method="POST" id="contactForm" enctype="multipart/form-data">
    
        <fieldset id="userdetails">
            <legend><h2>Client details</h2></legend>
            
            
            <div class="field">
            <input type="text" id="name" name="name" class="name" />
            <label for="name">Name*</label>
            </div>

            <div class="field">
            <input type="text" id="organisationname" name="organisation" />
            <label for="organisation">Organisation</label>
            </div>
            
            <div class="field">
            <input type="text" id="organisationaddress" name="address" class="address" />
            <label for="address">Address*</label>
            </div>
            
            <div class="field">
            <input type="text" id="email" name="email" class="required email" />
            <label for="email">Email*</label>
            </div>
            
            <div class="field">
            <input type="text" id="telephone" name="telephone" class="required digits" />
            <label for="telephone">Telephone*</label>
            </div>
        
        </fieldset>
        
        <fieldset id="project">
            
            <legend><h2>Project information</h2></legend>
            
            <div class="field">
            <select id="service_selector" name="service_selector" class="service_selector">
                <option value="">- Please select -</option>
                <option value="general">General inquiry or other services</option>
                <option value="chemicals">Chemical analysis department</option>
                <option value="microbiology">Microbiological analysis department</option>
                <option value="supervisory">Management and supervision of asbestos removal</option>
                <option value="surveys">Asbestos surveys</option>
                <option value="airmonitoring">Air monitoring and fibre counting</option>
                <option value="courses">BOHS courses and asbestos awareness training</option>
            </select>
            <label for="service_selector">Service*</label>
            </div>
            
        </fieldset>
        
        <fieldset id="surveys_project"> 
                        
            <div class="field">
                <input type="text" id="surveys_address" name="surveys_siteaddress" />
                <label for="surveys_siteaddress">Site address*</label>
            </div>
            
            <div class="field">
                <input type="text" id="surveys_startdate" name="surveys_startdate" />
                <label for="surveys_startdate">Start date*</label>
            </div>
            
            <div class="field">
                <input type="text" id="surveys_contactname" name="surveys_contactname" />
                <label for="surveys_contactname">Site contact</label>
            </div>
           
            <div class="field">
                <input type="text" id="surveys_contactnumber" name="surveys_contactnumber" />
                <label for="surveys_contactnumber">Telephone</label>
            </div>            
            
        </fieldset>
        
        <fieldset id="airmonitoring_project">   
        
            <div class="field">
                <input type="text" id="airmonitoring_address" name="airmonitoring_siteaddress" />
                <label for="airmonitoring_siteaddress">Site address*</label>
            </div>
            
            <div class="field">
                <input type="text" id="airmonitoring_startdate" name="airmonitoring_startdate" />
                <label for="airmonitoring_startdate">Start date*</label>
            </div>
            
            <div class="field">
                <input type="text" id="airmonitoring_contactname" name="airmonitoring_contactname" />
                <label for="airmonitoring_contactname">Site contact</label>
            </div>
           
            <div class="field">
                <input type="text" id="airmonitoring_contactnumber" name="airmonitoring_contactnumber" />
                <label for="airmonitoring_contactnumber">Telephone</label>
            </div>
                      
        </fieldset>
        
        <fieldset id="surveys_scope">
        
            <legend><h2>Scope of work</h2></legend>

            <div class="field">
                <select id="surveys_type" name="surveys_type" class="surveys_type">
                    <option value="">- Please select -</option>   
                    <option value="Management asbestos survey">Management asbestos survey</option>
                    <option value="Major refurbishment / pre demolition asbestos survey">Major refurbishment / pre demolition asbestos survey</option>
                    <option value="Reinspection based on previous management asbestos survey">Reinspection based on previous management asbestos survey</option>
                </select>
                <label for="surveys_type">Procedure*</label>
            </div>
        
            <div class="field">
                <input type="text" id="surveys_buildingtype" name="surveys_buildingtype" />
                <label for="surveys_buildingtype">Building type</label>        
            </div>
            
            <div class="field">
                <input type="text" id="surveys_buildingage" name="surveys_buildingage" />
                <label for="surveys_buildingage">Approximate age</label>        
            </div>

            <div class="field">
                <input type="text" id="surveys_extent" name="surveys_extent" />
                <label for="surveys_extent">Areas / sizes</label>        
            </div>
            
            <div class="field">
                <input type="file" id="surveys_plans" name="surveys_plans" />
                <label for="surveys_plans">Floor plans</label>        
            </div>
 
        </fieldset>
        
        <fieldset id="airmonitoring_scope">
        
            <legend><h2>Scope of work</h2></legend> 
        
            <div class="field">
                <select id="airmonitoring_type" name="airmonitoring_type" class="airmonitoring_type">
                    <option value="">- Please select -</option>   
                    <option value="Background air monitoring">Background air monitoring</option>
                    <option value="Leak air monitoring">Leak air monitoring</option>
                    <option value="Four stage clearance air monitoring / certification of reoccupation">Four stage clearance air monitoring / certification of reoccupation</option>
                    <option value="Reassurance air monitoring">Reassurance air monitoring</option>
                    <option value="Personal air monitoring">Personal air monitoring</option>
                </select>
                <label for="airmonitoring_type">Procedure*</label>
            </div>
            
            <div class="field">
                <input type="airmonitoring_enclosures" name="airmonitoring_enclosures" />
                <label for="airmonitoring_enclosures">Areas / sizes</label>
            </div>
            
            <div class="field">
                <input type="airmonitoring_dcu" name="airmonitoring_dcu" />
                <label for="airmonitoring_dcu">DCU required?</label>
            </div>
            
            <div class="field">
                <input type="file" id="airmonitoring_methodstatement" name="airmonitoring_methodstatement" />
                <label for="airmonitoring_methodstatement">Method statement</label>        
            </div>          
            
        </fieldset>   
        
        <fieldset id="details">
            
            <legend><h2>Details</h2></legend>
            
            <div class="control">
            <textarea id="description" name="description" class="description"></textarea>
            </div>
            
        </fieldset>
    
        <fieldset id="controls">
            
            <div class="control">
                <input class="submit" type="submit" id="submit" value="Submit!" />
            </div>
            
        </fieldset>
        
    </form>
    
</div>