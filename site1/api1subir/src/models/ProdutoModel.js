import { DataTypes } from "sequelize"

import database from '../database/index.js'

const Produto = database.define('Produtos', {
    nome:{
        type: DataTypes.STRING,
        allowNull: false
    },
    preco:{
        type: DataTypes.REAL,
        allowNull: false
    }
},{

})

export default Produto