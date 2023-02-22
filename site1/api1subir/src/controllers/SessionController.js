import jwt from 'jsonwebtoken'
import bcrypt from 'bcryptjs'
import sgMail from '@sendgrid/mail';

import User from '../models/UserModel.js'
import authConfig from '../config/auth.js'

/*sgMail.setApiKey(process.env.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);*/



class SessionController{
    async createSession (req, res){
        const { email, password } = req.body

     const user =  await User.findOne( {where: {email}})

     if (!user){
        res.json("Usuario não cadastrado!")
     }

    const checkPassword = await bcrypt.compare(toString(password), user.password_hash)

    if (!checkPassword){
        res.json("Usuário ou senha incorretos.")

    }


    const { id, nome, cpf, rg, sexo, nacionalidade } = user;

    const token = jwt.sign({ id }, authConfig.secret);

    await User.update({ token }, { where: { id } });

    return res.json({
      user: {
        id,
        nome,
        cpf,
        rg,
        sexo,
        nacionalidade,
      },
      token,
    });

}
}

export default new SessionController



// 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 api de envio de email