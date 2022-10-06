<?php
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $titulo = $_POST['titulo'];
  $conteudo = $_POST['conteudo'];
  $data = date('d,m,Y');
  $hora = date('H:i:s');

  //Corpo do e-mail
  $arquivo = "<html>
              <p><b>Nome: </b>$nome</p>
              <p><b>E-mail: </b>$email</p>
              <p><b>Conteúdo: </b>$conteudo</p>
              <p>E-mail enviado em </p>
  </html>";

  //E-mails oara quem será enviado o formulário
  $destino = "projeto.gerasol@gmail.com";
  $assunto = $titulo." - e-mail eviado pelo site do projeto";

  //Esse sempre deverá existir para garantir 
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $headers = "From: $nome <$email>";

  mail($destino, $assunto, $arquivo, $headers);

  echo "<meta http-equiv='refresh' content='10;URL=contato.html'>";


// // Multiple recipients
// $to = 'projeto.gerasol@gmail.com'; // note the comma

// // Subject
// $subject = 'Birthday Reminders for August';

// // Message
// $message = '
// <html>
// <head>
//   <title>Birthday Reminders for August</title>
// </head>
// <body>
//   <p>Here are the birthdays upcoming in August!</p>
//   <table>
//     <tr>
//       <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
//     </tr>
//     <tr>
//       <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
//     </tr>
//     <tr>
//       <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
//     </tr>
//   </table>
// </body>
// </html>
// ';

// // To send HTML mail, the Content-type header must be set
// $headers[] = 'MIME-Version: 1.0';
// $headers[] = 'Content-type: text/html; charset=iso-8859-1';

// // Additional headers
// $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
// $headers[] = 'From: Birthday Reminder <birthday@example.com>';
// $headers[] = 'Cc: birthdayarchive@example.com';
// $headers[] = 'Bcc: birthdaycheck@example.com';

// // Mail it
// mail($to, $subject, $message, implode("\r\n", $headers));
?>