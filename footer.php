</body>
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script type="text/javascript">

    $('#signUpButton').click( function() {

        $('#logInForm').toggle();
        $('#signUpForm').toggle();
    });

    $('#logInButton').click( function() {
        $('#signUpForm').toggle();
        $('#logInForm').toggle();
    });

    $("#diary").on("change keyup paste", function() {

        $.ajax({
          method: "POST",
          url: "updateDatabase.php",
          data: { content: $(this).val() },
      });
   });

</script>
</html>
