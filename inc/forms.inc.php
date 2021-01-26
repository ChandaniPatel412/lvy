<script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js" type="text/javascript"></script>
<?php
if(!isset($_GET['registered']))
{
	?>
    <script type="text/javascript">
        $( document ).ready(function() { 
			
            //custom validation rule
            jQuery.validator.addMethod("strictEmail", function(value, element) {
            // allow any non-whitespace characters as the host part
            return this.optional( element ) || /^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/.test( value );
            }, 'Please enter a valid email address.');
			
			jQuery.validator.addMethod("valueNotEquals", function(value, element, arg){
  return arg != value;
 }, "Value must not equal arg.");

                    var v = jQuery("#form").validate({
					onsubmit: true,
					onkeyup: false,
                    rules: {
                        email: {
							required: true,
							strictEmail: true
                        },
						
						adv: {
							required: true,
							valueNotEquals: "",
                        },
                    },
					errorPlacement: function(error, element) {
                       if (element.attr("type") == "text" && element.val() == "" && element.attr("name") != "secFcode")
						{
							element.attr("placeholder",error.text());
						}
						else if (element.attr("type") == "text" && element.val() != null)
						{
							//$(".errorOutput #errorMsg").html(error.text());
							$("<li>"+error.text()+"</li>").appendTo($(".errorOutput #errorMsg"));
						}
						else if (element.attr("type") == "tel" && element.val() == "")
						{
							element.attr("placeholder",error.text());
						}
						else if (element.attr("type") == "tel" && element.val() != null)
						{
							//$(".errorOutput #errorMsg").html(error.text());
							$("<li>"+error.text()+"</li>").appendTo($(".errorOutput #errorMsg"));
						}
						else if (element.attr("name") == "adv")
						{
							//$(".errorOutput #errorMsg").html(error.text());
							$("<li>"+error.text()+"</li>").appendTo($(".errorOutput #errorMsg"));
						}
						else if (element.attr("name") == "secFcode")
						{
							$("<li>"+error.text()+"</li>").appendTo($(".errorOutput #errorMsg"));
						}
                        else
                        {
                        }
                    },
					errorClass : "bob",
					// use highlight and unhighlight
					highlight: function (element, errorClass, validClass) {
						$(element.form).find("label[for=" + element.id + "]").addClass("error");
						$(element).addClass("error");
					},
					unhighlight: function (element, errorClass, validClass) {
						$(element.form).find("label[for=" + element.id + "]").removeClass("error");
						$(element).removeClass("error");
					},
					invalidHandler: function(event, validator) {
						// 'this' refers to the form
						$(".errorOutput #errorMsg").empty();
						/*var errors = validator.numberOfInvalids();
						if (errors) {
						  var message = errors == 1
							? 'You missed 1 field. It has been highlighted'
							: 'You missed ' + errors + ' fields. They have been highlighted';
						  $("div.error span").html(message);
						  $("div.error").show();
						} else {
						  $("div.error").hide();
						}*/
					  },
                    submitHandler: function(form) {
                        form.submit();
                    }
                    });
					
					$('#form').validate().settings.ignore = ':not(select:hidden, input:visible, textarea:visible)';
					
					$('.selectpicker').on('change', function(e) {
						$('#form').validate().element($(this));
					});

        });
        </script>
    <?php
}
?>