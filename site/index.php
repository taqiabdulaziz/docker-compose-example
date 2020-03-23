<html>
  <body>
    <h1>Team:</h1>
    <ol id="ordered-list">
    </ol>
  </body>
</html>

<script>
  fetch('http://localhost:5002')
  .then(async (response) => {
    const { players } = await response.json();

    var ol = document.getElementById('ordered-list');
    for (const player of players) {
      var li = document.createElement('li')
      li.appendChild(document.createTextNode(player))
      ol.appendChild(li)
      
    }
  }).catch((err) => {
    console.log(err);
    
  });
</script>