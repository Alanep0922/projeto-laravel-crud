const db = require("../models/dbUsuarios")

//app.get ('/usuarios', (require, response) => {
   // const usuarios = db()
   // response. send(usuarios)

const obterUsuarios = (require, response) => {
    const usuarios = db()
    response. send(usuarios)
}
const obterUsuariosPorId = (require,response) => {
    const usuarios = db()
    response.send (usuarios)
}
const getByNome = (require, response)=>{
        const usuarios = db()
        const nomeRequest = require.query.nome.toLowerCase()
        const encontraUsuarioPeloNome = usuarios.filter(usuario => usuario.nome.toLowerCase().includes(nomeRequest))
        response.send(encontraUsuarioPeloNome)
    
}

module.exports = {
    obterUsuarios,
    obterUsuariosPorId,
    getByNome
}