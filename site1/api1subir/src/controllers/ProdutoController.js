import database from '../database/index.js'
import Produto from '../models/ProdutoModel.js'

class ProdutoController{

    constructor(){
        database.sync()
    }
    
    async addProduto(req, res){
        const { nome, preco } = req.body

        await Produto.create({
            nome: nome,
            preco: preco
        })

        return res.json({
            mensagem: 'Produto criado com sucesso!',
            data:{
                nome,
                preco
            }
        })
    }



  
    async getProdutos(req, res){
        const produtos = await Produto.findAll()

        return res.json(produtos)

    }

    async getProduto(req, res){
        const {id} = req.params
        const produto = await Produto.findByPk(id)
        return res.json(produto)

    }

    async updateProduto(req, res){
        const {id , preco } = req.body

       const prodUp = await Produto.update({
            preco: preco
        },{
            where:{
                id: id
            }
        })
        const produto = await Produto.findByPk(id)
        return res.json(produto)

    }

    async deleProduto(req, res){
        const {id} = req.params

        await Produto.destroy({
            where: {
              id: id
            }
          });
          return res.json({
            mensagem: "Esse Produto foi deletado com sucesso."
          })

    }
}


export default new ProdutoController()