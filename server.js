const express = require("express");
const cors = require("cors");

const app = express();
app.use(cors());
app.use(express.json());

let clients = [];

// Add data
app.post("/add", (req, res) => {
  const { name, amountGiven, interest, amountPaid, date } = req.body;

  let client = clients.find(c => c.name === name);

  if (!client) {
    client = { name, transactions: [] };
    clients.push(client);
  }

  client.transactions.push({
    amountGiven: Number(amountGiven),
    interest: Number(interest),
    amountPaid: Number(amountPaid),
    date
  });

  res.json({ message: "Added" });
});

// Get all clients
app.get("/clients", (req, res) => {
  res.json(clients);
});

// Get one client
app.get("/client/:name", (req, res) => {
  const client = clients.find(c => c.name === req.params.name);

  if (!client) return res.send("Not found");

  let totalGiven = 0;
  let totalPaid = 0;

  client.transactions.forEach(t => {
    totalGiven += t.amountGiven;
    totalPaid += t.amountPaid;
  });

  res.json({
    name: client.name,
    transactions: client.transactions,
    totalGiven,
    totalPaid,
    remaining: totalGiven - totalPaid
  });
});

app.listen(5000, () => console.log("Server running on port 5000"));