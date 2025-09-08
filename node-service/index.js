// node-service/index.js
const express = require('express');
const app = express();
const port = 3000;

app.get('/', (req, res) => {
  res.send('Node.js microservice is running!');
});

app.listen(port, () => {
  console.log(`Node.js microservice listening at http://localhost:${port}`);
});