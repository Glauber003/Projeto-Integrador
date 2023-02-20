import jwt from 'jsonwebtoken'
import bcrypt from 'bcryptjs'

import User from '../models/UserModel.js'
import authConfig from '../config/auth.js'


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


    const{id, nome,cpf,rg,sexo,nacionalidade} = user

    return res.json ({
        user:{
            id,
            nome,
            cpf,
            rg,
            sexo,
            nacionalidade
        },
        token: jwt.sign({id}, authConfig.secret)
        })

    
    }
}

export default new SessionController
