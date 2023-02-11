import { DataTypes } from "sequelize"
import bcrypt from "bcryptjs"

import database from '../database/index.js'

const User = database.define('Users',{
    nome:{
        type: DataTypes.STRING,
        allowNull: false
    },
    email:{
        type: DataTypes.STRING,
        allowNull: false
    },
    password:{
        type: DataTypes.VIRTUAL
    },
    password_hash:{
        type: DataTypes.STRING
    }
},{

})

User.beforeCreate(async (user) => {
    if (user.password){
        user.password_hash = await bcrypt.hash(toString(user.password) , 8)
    }
  });

export default User