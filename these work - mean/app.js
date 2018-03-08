var express = require("express");
var app = express();
var port = 3000;
//var port = 8080;

var bodyParser = require('body-parser');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));


//create connection to mongodb
var mongoose = require("mongoose");
mongoose.Promise = global.Promise;
mongoose.connect("mongodb://localhost:27017/profiles"); //mongodb db name is profiles

//create db schema
var nameSchema = new mongoose.Schema({
  email: String,
  password: String
});

//mongodb collection name is User
var User = mongoose.model("User", nameSchema);

 
app.get("/", (req, res) => {
    res.sendFile(__dirname + "/index.html");
});

app.post("/addname", (req, res) => {

  var myData = new User(req.body);
  myData.save()
    .then(item => {
    res.sendFile(__dirname + "/Search.html");
//      res.send("item saved to database");

    })
    .catch(err => {
      res.status(400).send("unable to save to database");
    });
});


 
app.listen(port, () => {
  console.log("Server listening on port " + port);
});







