import Sequelize from "sequelize"

const sequelize = new Sequelize('aulanodejs', 'root', '', {
    host: 'localhost',
    dialect: 'mariadb'
  });

  export default sequelize;