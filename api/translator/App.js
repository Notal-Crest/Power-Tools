const express = require("express");
const app = express();
const { default: axios } = require("axios");

//body-parser
const bodyParser = require("body-parser");
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json({ extended: true }));

require("dotenv").config();

app.post("/post", async (req, res) => {
  try {
    let trans = await axios({
      method: "POST",
      url: process.env.API_URL,
      headers: {
        authorization: process.env.API_AUTH_KEY,
      },
      data: {
        providers: "google",
        text: req.body.word, // word you want to translate
        source_language: req.body.source, // source language, its value should be a language code e.g 'en'
        target_language: req.body.target, // target language, its value should be a language code e.g 'es'
      },
    });
    if (trans.data.google.status === "success") {
      res.status(200).json(trans.data.google.text);
    } else {
      res
        .status(500)
        .json({ message: "There is a Problem with your Input!!!" });
    }
  } catch (err) {
    res.status(500).json({ message: "An Error Occured!!!" });
  }
});

app.listen(2400, () => console.log("Server started on Port 2400"));
