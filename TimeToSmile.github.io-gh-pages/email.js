var nodemailer = require('nodemailer');

var transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'testmailatmx@gmail.com',
    pass: 'mailtest!@#'
  }
});

var mailOptions = {
  from: 'testmailatmx@gmail.com',
  to: 'madhukaushal31@gmail.com',
  subject: 'Sending Email using Node.js',
  text: 'That was easy!'
};

transporter.sendMail(mailOptions, function(error, info){
  if (error) {
    console.log(error);
  } else {
    console.log('Email sent: ' + info.response);
  }
});