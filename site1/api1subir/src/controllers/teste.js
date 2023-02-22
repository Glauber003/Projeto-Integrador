const nodemailer = require('nodemailer');


// Configurações para enviar email via SMTP do Gmail
const transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'gpcs@aluno.ifnmg.edu.br',
    pass: 'Silva123',
  },
});

// Definir os detalhes do email
const mailOptions = {
  from: 'gpcs@aluno.ifnmg.edu.br',
  to: 'glauberbim2018@gmail.com',
  subject: 'Assunto do email',
  text: 'Corpo do email em formato de texto',
};

// Enviar email
transporter.sendMail(mailOptions, function (error, info) {
  if (error) {
    console.log(error);
  } else {
    console.log('Email enviado: ' + info.response);
  }
});
