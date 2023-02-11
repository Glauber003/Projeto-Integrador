import { DataTypes } from "sequelize"
import database from '../database/index.js'

    
    
    const Animal = database.define('Animal', {
        nome_animal: {
            type: DataTypes.STRING,
            allowNull: false
        },
        especie_animal: {
            type: DataTypes.STRING,
            allowNull: false
        },

        idade: {
            type: DataTypes.STRING,
            allowNull: false
        },
        descricao_animal: {
            type: DataTypes.STRING,
            allowNull: false
        },

        porte: {
            type: DataTypes.STRING,
            allowNull: false
        },
        raca: {
            type: DataTypes.STRING,
            allowNull: false
        },
        sexo: {
            type: DataTypes.STRING,
            allowNull: false
        },
        local_animal: {
            type: DataTypes.STRING,
            allowNull: false
        },
        peso: {
            type: DataTypes.STRING,
            allowNull: false
        }
    }, {

    })

    export default Animal