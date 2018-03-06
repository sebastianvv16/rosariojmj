// JavaScript Validation For Registration Page

jQuery(document).ready(function($){
   // name validation
    var nameregex = /^[a-zA-Z ]+$/;

   $.validator.addMethod("validname", function( value, element ) {
       return this.optional( element ) || nameregex.test( value );
   });

   // valid email pattern
   var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

   $.validator.addMethod("validemail", function( value, element ) {
       return this.optional( element ) || eregex.test( value );
   });

   $("#registroForm").validate({

    rules:
    {
    name: {
     required: true,
     validname: true,
     minlength: 4
    },
    email: {
     required: true,
     validemail: true
    },
     },
     messages:
     {
    name: {
     required: "Por favor ingrese su nombre",
     validname: "EL nombre solo debe contener letras alfabeticas y espacio",
     minlength: "Su nombre es muy corto"
       },
       email: {
       required: "Por favor ingrese su email",
       validemail: "Debe ingresar un email valido"
        }
     },
     errorPlacement : function(error, element) {
     $(element).closest('.form-group').find('.help-block').html(error.html());
     },
     highlight : function(element) {
     $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
     },
     unhighlight: function(element, errorClass, validClass) {
     $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
     $(element).closest('.form-group').find('.help-block').html('');
     },

     submitHandler: function(form) {
                    form.submit();
     alert('ok');
                }
     });
 });
