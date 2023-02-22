import User from "../models/UserModel.js";
class UserController{
  

  async addUser(req, res) {
    const { email } = req.body;

    const user = await User.findOne({ where: { email } });

    if (user) {
      return res.json('Usuário já cadastrado no sistema!');
    }

    const { id, nome, cpf, rg, sexo, nacionalidade } = await User.create(req.body);

    return res.json({
      id,
      nome,
      cpf,
      rg,
      sexo,
      nacionalidade,
    });
  }
  

  async updateUser(req, res){
    const {id, nome, cpf , rg, sexo,nacionalidade} = req.body

   const userdUp = await User.update({
        nome: nome,
        cpf:cpf,
        rg:rg,
        sexo:sexo,
        nacionalidade:nacionalidade
    },{
        where:{
            id: id
        }
    })
    const user= await User.findByPk(id)
    return res.json(user)
  }

  async deletUser(req, res){
    const {id} = req.params

    await User.destroy({
        where: {
          id: id
        }
      });
      return res.json({
        mensagem: "Usuario deletado com sucesso."
      })

}

async getUser(req, res) {
  const { id } = req.params;

  const user = await User.findByPk(id);

  if (user) {
    return res.json(user);
  } else {
    return res.status(404).json({ error: 'Usuário não encontrado' });
  }
}



}

export default new UserController