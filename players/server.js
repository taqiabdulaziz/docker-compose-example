const express = require('express');
const cors = require('cors');
const app = express();
const PORT = 80;

app.use(cors());

app.get('/', (req, res) => {
  res.json({
    players: ['abdul', 'jamet', 'bambang', 'joko']
  })
});

app.listen(PORT, () => {
  console.log(`Running on port ${PORT}`);
});
