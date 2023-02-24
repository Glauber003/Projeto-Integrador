import User from "../models/UserModel.js";
import nodemailer from 'nodemailer';

async function sendWelcomeEmail(email) {
  try {
    const transporter = nodemailer.createTransport({
      host: 'smtp.gmail.com',
      port: 465,
      secure: true,
      auth: {
        user: 'gpcs@aluno.ifnmg.edu.br',
        pass: 'orfpbyzbfvamtjmc',
      },
      tls: {
        rejectUnauthorized: false
      }
    });

    const mailOptions = {
      from: 'gpcs@aluno.ifnmg.edu.br',
      to: email,
      subject: 'Bem-vindo ao nosso site!',
      html: '<h1>Olá!</h1><p>Seja bem-vindo ao MIAUDOTA!</p><img src="https://th.bing.com/th/id/R.97d5573b5096ab3a2eb5cefad8e620c5?rik=N8DATgzwnsmrmA&riu=http%3a%2f%2ftudosobrecachorros.com.br%2fwp-content%2fuploads%2fcomo-fazer-seu-cachorro-feliz-3-1024x576.jpg&ehk=fZBm1rN%2frzwGVlTBKybV7FNGJ7WRJ%2bwEela0DZC1soI%3d&risl=&pid=ImgRaw&r=0" alt="Cachorro feliz"><p>Clique no botão abaixo para entrar:</p><a href="http://localhost/site1/public/login/validacao" style="background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Entrar</a>'
    };

    const info = await transporter.sendMail(mailOptions);

    console.log('E-mail enviado para: ' + email);
  } catch (error) {
    console.error(error);
  }
}

class UserController {
  async addUser(req, res) {
    const { email } = req.body;

    const user = await User.findOne({ where: { email } });

    if (user) {
      return res.json('Usuário já cadastrado no sistema!');
    }

    const { id, nome, cpf, rg, sexo, nacionalidade } = await User.create(req.body);

    sendWelcomeEmail(email);

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

export default new UserController();
