import database from '../database/index.js'
import Animal from '../models/AnimalModel.js'

class AnimalController{

    constructor(){
        database.sync()
    }
    
    async addAnimal(req, res){
        const { nome_animal, especie_animal,idade,descricao_animal,porte,raca,sexo,local_animal,peso } = req.body

        await Animal.create({
            nome_animal: nome_animal,
            especie_animal: especie_animal,
            idade:idade,
            descricao_animal:descricao_animal,
            porte:porte,
            raca:raca,
            sexo:sexo,
            local_animal:local_animal,
            peso:peso

        })

        return res.json({
            mensagem: 'Animal Criado Com sucesso',
            data:{
                nome_animal,
                especie_animal,
                idade,
                descricao_animal,
                porte,
                raca,
                sexo,
                local_animal,
                peso

            }
        })
    }



  
    async getAnimal(req, res){
        const animal = await Animal.findAll()

        return res.json(animal)

    }

   /*
   //funçao pra pegar animal ainda nao terminada
   async getProduto(req, res){
        const {id} = req.params
        const produto = await Produto.findByPk(id)
        return res.json(produto)

    }*/

    async updateAnimal(req, res){
        const {id , nome_animal } = req.body

       const prodUp = await Animal.update({
            nome_animal: nome_animal
        },{
            where:{
                id: id
            }
        })
        const animal = await Animal.findByPk(id)
        return res.json(Animal)

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


export default new AnimalController()