
import jwt from 'jsonwebtoken'

import authConfig from '../config/auth.js'

export default async( req, res, next ) =>{
    const authHeader = req.headers.authorization

    if(!authHeader) {
       return res.json("Usuário não autenticado!")
    }

    const [, token] = authHeader.split(' ')

    try {
      const decoded = jwt.verify(token, authConfig.secret)

      req.userId = decoded.id 
      return next()

    } catch (error) {
      res.json('Erro na autenticação.')
    }

}