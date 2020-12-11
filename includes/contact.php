<?php
$to = 'contact@sarquentin.fr';
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$email_subject = "Contact automatique : $name";
$email_body = "
Vous avez été contacté par : $name \n
Son message : $text \n\n
E-Mail : $email \n
Numéro : $phone
";
$headers = "From: $to\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
?>
<section id="contact" class="row">
  <div class="col-md-6 row" id="formulaire">
  <form method="post" name="contact" action="contact.php" class="col-10 col-md-8 col-lg-6">
      <input type="name" class="form-control" name="name" id="name" placeholder="Nom" required/>
      <input type="phone" class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone" required/>
      <input type="email" class="form-control" name="email" id="email" placeholder="Adresse e-mail" required/>
      <textarea type="text" class="form-control" name="text" id="text" placeholder="Votre message" required></textarea>
    <button type="submit" class="btn">Envoyer</button>
  </form>
  </div>
  <div class="col-md-6" id="contact-landing">
    <h1>Notre équipe est à votre disposition</h1>
    <p>Si vous souhaitez échanger, nous poser des questions.
Nous sommes à votre disposition tout le temps.
    </p>
  </div>
</section>