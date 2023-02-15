import User from "../models/UserModel.js";

class UserController{
  
  async addUser(req, res){
    const { email } = req.body

    const UserExists = await User.findOne({where: {email}})

    if (UserExists){
        return res.json('Usuário já cadastrado no sistema!')
    }

    const {id, nome, cpf , rg, sexo,nacionalidade} = await User.create(req.body)

    return res.json({
        id,
        nome,
        cpf,
        rg,
        sexo,
        nacionalidade
    })
  }
}

export default new UserController