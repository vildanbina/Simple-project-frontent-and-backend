<?php
include 'php/contact-mysql.php';
?>
<html>
<a href="php/con"></a>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <!--    <script src="javascript.js"></script>-->
    <link rel="stylesheet" href="contact-stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="validation.js"></script>
    <script>
        jQuery(document).ready(function($) {
            var requiredCheckboxes = $(':checkbox[required]');
            requiredCheckboxes.on('change', function(e) {
                var checkboxGroup = requiredCheckboxes.filter('[name="' + $(this).attr('name') + '"]');
                var isChecked = checkboxGroup.is(':checked');
                checkboxGroup.prop('required', !isChecked);
            });
        });

    </script>
</head>

<body onload="document.registration.uname.focus();">
    <div id="form-main">
        <div id="form-div">
            <form onSubmit="return formValidation();" name='contact' class="form" id="form1" method="post" action="index.php">

                <p class="name">
                    <input name="name" type="text" required="required" aria-required="true" pattern="^([- \w\d\u00c0-\u024f]+)$" class=" feedback-input" placeholder="Name" id="name" />
                </p>

                <p class="email">
                    <input name="email" type="email" required="required" aria-required="true" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" class="feedback-input" id="email" placeholder="Email" />
                </p>
                <p class="text">
                    <textarea name="text" class="feedback-input" required="required" aria-required="true" id="comment" placeholder="Comment"></textarea>
                </p>
                <p class="text">
                    <select name="cars" class="feedback-input" required="required" aria-required="true" placeholder="Comment">
                           <option value="" disabled selected>Select your option</option>
                        <option value="Volvo">Volvo</option>
                        <option value="Saab">Saab</option>
                        <option value="Mercedes">Mercedes</option>
                        <option value="Audi">Audi</option>
                    </select>
                </p>
                <p class="feedback-input"> Hobi:
                    <input value="Web" style="margin-left: 50px;" type="checkbox" id="c1" name="chk1[]" required="required" />
                    <label for="c1" required>Web</label>
                    <input value="Java" style="margin-left: 30px;" type="checkbox" id="c2" name="chk1[]" required="required" />
                    <label for="c2">Java</label>
                </p>
                <p class="feedback-input"> Gjinia:
                    <input style="margin-left: 50px;" type="radio" name="gender" id="r1" value="mashkull" required />
                    <label for="r1">
                    Mashkull</label>
                    <input style="margin-left: 30px;" type="radio" name="gender" id="r2" value="femer" />
                    <label for="r2">
                    Femer</label>
                </p>

                <br>
                <div class="submit">
                    <input onclick="alert()" type="submit" value="SEND" id="button-blue" name="submit" />
                    <div class="ease"></div>
                </div>
</>
            </form>
        </div>
    </div>
</body>
<script>
    function alert() {
            alert('message has been sent');
    }

</script>

</html>
