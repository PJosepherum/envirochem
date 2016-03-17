<script type="text/javascript">
  function initialize() { 

        var mapBristol = new google.maps.Map(document.getElementById('map_bristol'), {  
          zoom: 14,  
          center: new google.maps.LatLng(51.545929, -2.4333941),  
          mapTypeId: google.maps.MapTypeId.ROADMAP  
        });  
        var markerBristol = new google.maps.Marker({  
          position: new google.maps.LatLng(51.545929, -2.4333941),  
          map: mapBristol,
          title: "Envirochem"
        });  
        var infowindowBristol = new google.maps.InfoWindow({  
            content: '<ul><li>Unit 20 Falcons Gate</li><li>Northavon Business Centre</li><li>Yate, Bristol</li><li>BS37 5NH</li></ul>'  
        });
        google.maps.event.addListener(markerBristol, 'click', function() {  
            infowindowBristol.open(mapBristol, markerBristol);  
        });
    
  } 
</script>

<div class="rightblock">
    <h1>Contact details</h1>
    <h2>Address</h2>
    <ul class="nobullets">
        <li>Unit 20 Falcons Gate</li><li>Northavon Business Centre</li><li>Yate, Bristol</li><li>BS37 5NH</li>
    </ul>
    <h2>Contact</h2>
    <ul class="nobullets">
        <li>Telephone: 01454 310 858</li>
        <li><a href="mailto:Tony.Green@envirochem.co.uk">Tony.Green@envirochem.co.uk</a></li>        
    </ul>
</div>
<div class="leftblock">
    <h2 id="bristol">Bristol</h2>
    <p>Our new branch in the south west of England has now opened enabling us to cover Bristol, Somerset, Bath and North East Somerset, Gloucestershire, the South of Wales and Devon.</p>
    <p>Work in the south of England is covered by our <a href="?p=branches&a=hampshire">head office in Fareham</a>.</p>
</div>
<div class="leftblock">
    <h1>Location</h1>
    <div id="map_bristol"></div>
</div>
