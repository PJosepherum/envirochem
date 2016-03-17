<script type="text/javascript">
  function initialize() {

    var mapHampshire = new google.maps.Map(document.getElementById('map_hampshire'), {  
      zoom: 14,  
      center: new google.maps.LatLng(50.859042, -1.17193),  
      mapTypeId: google.maps.MapTypeId.ROADMAP  
    });  
    var markerHampshire = new google.maps.Marker({  
      position: new google.maps.LatLng(50.859042, -1.17193),  
      map: mapHampshire,
      title: "Envirochem"
    });  
    var infowindowHampshire = new google.maps.InfoWindow({  
        content: '<ul><li>12 The Gardens</li><li>Broadcut, Fareham</li><li>Hampshire</li><li>PO16 8SS</li></ul><ul><li>Telephone: 01329 287 777</li><li>Fax: 01329 287 755</li></ul><ul><li><a href="mailto:office@envirochem.co.uk">office@envirochem.co.uk</a></li><li><a href="mailto:lab@envirochem.co.uk">lab@envirochem.co.uk</a></li></ul>'  
    });
    google.maps.event.addListener(markerHampshire, 'click', function() {  
        infowindowHampshire.open(mapHampshire, markerHampshire);  
    });
    
  }
</script>

<div class="rightblock">
        <h1>Contact details</h2>
        <h2>Address</h2>
        <ul class="nobullets">
            <li>12 The Gardens</li>
            <li>Broadcut, Fareham</li>
            <li>Hampshire</li>
            <li>PO16 8SS</li>
        </ul>
        <h2>Contact</h2>
        <ul class="nobullets">
            <li>Telephone: 01329 287 777</li>
            <li>Fax: 01329 287 755</li>
            <li>Asbestos: <a href="mailto:office@envirochem.co.uk">office@envirochem.co.uk</a></li>
            <li>Chemicals: <a href="mailto:lab@envirochem.co.uk">lab@envirochem.co.uk</a></li>
            <li></li>
        </ul>
        <h2>Office hours</h2>
        <ul class="nobullets">
            <li>Monday: 0830 - 1730</li>
            <li>Tuesday: 0830 - 1730</li>
            <li>Wednesday: 0830 - 1730</li>
            <li>Thursday: 0830 - 1730</li>
            <li>Friday: 0830 - 1730</li>
        </ul>
</div>
<div class="leftblock">
    <h2 id="hampshire">Hampshire</h2>
    <p>Envirochem's head office is located in Hampshire, in the south of England between Portsmouth and Southampton.</p>
    <p>We principally carry out work within Hampshire and the Isle of Wight, Dorset, Somerset, Wiltshire, Berkshire, Surrey and West Sussex, although we will travel further afield if requested. Our Bristol branch covers work in the south west of England and the south of Wales.</p>
    <p>Please feel free to contact us with any queries, specific requests or for a quotation. We always try our best to help in any situation and price fairly on a project specific basis.</p>
</div>
<div class="leftblock">
    <h1>Location</h1>
    <div id="map_hampshire"></div>
</div>
