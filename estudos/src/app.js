const express = require("express")
const usuariosRotas = require("./routes/usuariosRouter")
const app = express()

app.use(express.json())

app.use("/usuarios", usuariosRotas)

module.exports = app

