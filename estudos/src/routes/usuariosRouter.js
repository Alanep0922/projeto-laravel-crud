const rotas = require("express").Router()
const controller = require("../controller/controller")


rotas.get("/", controller.obterUsuarios) 
rotas.get("/pesquisar", controller.getByNome)
rotas.get("/:id", controller.obterUsuariosPorId) 


module.exports = rotas
