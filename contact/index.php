<?php
$selectedNavPoint = 'contact';

include('../head.php');

?>
<div class=main-content">
    <div class="container" style="padding: 100px 0">
        <form>
            <label>Внесете го Вашето име
            <input type="text" name="ime" placeholder="Внесете го Вашето име"></label>

            <label>Внесете го Вашето презиме
            <input type="text" name="prezime" placeholder="Внесете го Вашето презиме"></label>

            <label>Внесете го Вашиот Е-маил
            <input type="email" name="email" placeholder="Внесете го Вашиот e-mail"></label>

            <label>Внесете го вашиот мобилен телефонски број
            <input type="tel" name="telefon"></label>

            <label>Одберете град
            <select name="grad">
                <option value="" disabled selected>Одберете опција</option>
                <option value="grad1">Grad 1</option>
                <option value="grad2">Grad 2</option>
                <option value="grad3">Grad 3</option>
            </select>
            </label>
            
            Пол
            <label>
            Маж
            <input type="radio" name="pol" value="male">
            </label>
            <label>
            Жена
            <input type="radio" name="pol" value="zena">
            </label>
            <label>
            Останато
            <input type="radio" name="pol" value="other">
            </label>

            <label id="pol_other" class="is-hidden">
                Друг пол
                <input type="text" name="pol_other">
            </label>


        </form>
    </div>
</div>

<script>

    $('input[name=pol]').change(function() { 
        var polValue = $('input[name="pol"]:checked').val();
        
        if ( polValue == 'other' ) {
            $('#pol_other').removeClass('is-hidden');
        } else {

            if ( $('#pol_other').hasClass('is-hidden') ) {
                return;
            } else {
                $('#pol_other').addClass('is-hidden');
            }

        }

    });

</script>

<?php include('../footer.php'); ?>



<!-- 
    Ime
Prezime
E-mail
Mob tel
Grad (select)

 -->
