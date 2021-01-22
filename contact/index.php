<?php
$selectedNavPoint = 'contact';

include('../head.php');

?>
<div class=main-content">
    <div class="container" style="padding: 100px 0">

    <form method="POST" action="/sender.php" id="contact-form">
        <h2>Contact us</h2>
        <p><label>First Name:</label> <input name="name" type="text" /></p>
        <p><label>Email Address:</label> <input style="cursor: pointer;" name="email" type="text" /></p>
        <p><label>Telephone: </label> <input style="cursor: pointer;" name="telephone" type="text" /></p>
        <p><label>Message:</label>  <textarea name="message"></textarea> </p>
        <p><input type="submit" value="Send" /></p>
    </form>
    </div>
</div>

<script>
   const constraints = {
       name: {
           presence: {allowEmpty: false },
           length: {
               minimum: 3,
               maximum: 5
           }
       },
       email: {
           presence: { allowEmpty: false },
           email: true
       },
       telephone: {
            presence: { allowEmpty: false },
           length: {
               minimum: 8,
               maximum: 9
           },
           numericality: true
       },
       message: {
           presence: { allowEmpty: false }
       }
   };

   const form = document.getElementById('contact-form');

   form.addEventListener('submit', function (event) {
     const formValues = {
         name: form.elements.name.value,
         email: form.elements.email.value,
         telephone: form.elements.telephone.value,
         message: form.elements.message.value
     };

     const errors = validate(formValues, constraints);

     if (errors) {
       event.preventDefault();
       const errorMessage = Object
           .values(errors)
           .map(function (fieldValues) { return fieldValues.join(', ')})
           .join("\n");

       alert(errorMessage);
     }
   }, false);
</script>

<?php include('../footer.php'); ?>



<!-- 
    Ime
Prezime
E-mail
Mob tel
Grad (select)

 -->
