<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Se dagens meddelande</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Dagens meddelande</h2>
      </header>
      <div class="w3-container">
        <p>här vill vi echo:a ut php</p>
        <p>baserat på senaste ratingen</p>
      </div>
      <footer class="w3-container w3-teal">
        <p>:)</p>
      </footer>
    </div>
  </div>
</div>
            
</body>
</html>
