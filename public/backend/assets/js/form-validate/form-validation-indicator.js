var FormIndicatorValidation = function() {

    var handleIndicatorValidation = function() {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation
        var indicatorForm = $('#indicatorForm');
        var errorIndicator = $('.alert-danger', indicatorForm);
        var successIndicator = $('.alert-success', indicatorForm);

        indicatorForm.validate({
            errorElement: 'div', //default input error message container
            errorClass: 'help-block text-danger', // default input error message class
            focusInvalid: true, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            rules: {
                title: {
                    required: true
                },
                summary: {
                    required: true
                },
                type: {
                    required: true
                },
                indicator: {
                    required: true
                },
                unity: {
                    required: true
                },
                value: {
                    required: true
                }
            },
            messages: {
                title: {
                    required: 'Ingrese el título del indicador'
                },
                summary: {
                    required: 'Ingrese la descripción del indicador'
                },
                type: {
                    required: 'Seleccione el tipo'
                },
                indicator: {
                    required: 'Seleccione el indicador'
                },
                unity: {
                    required: 'Seleccione la Unidad'
                },
                value: {
                    required: 'Ingrese el valor del indicador'
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit              
                successIndicator.hide();
                errorIndicator.show();
            },

            errorPlacement: function(error, element) {
                if (element.is(':checkbox')) {
                    error.insertAfter(element.closest(".md-checkbox-list, .md-checkbox-inline, .checkbox-list, .checkbox-inline"));
                } else if (element.is(':radio')) {
                    error.insertAfter(element.closest(".md-radio-list, .md-radio-inline, .radio-list,.radio-inline"));
                } else {
                    error.insertAfter(element); // for other inputs, just perform default behavior
                }
            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-danger'); // set error class to the control group
                $(element)
                    .closest('.form-control').addClass('form-control-danger'); // set error class to the control group
            },

            unhighlight: function(element) { // revert the change done by hightlight
                $(element)
                    .closest('.form-group').removeClass('has-danger'); // set error class to the control group
                $(element)
                    .closest('.form-control').removeClass('form-control-danger'); // set error class to the control group
            },

            success: function(label) {
                label
                    .closest('.form-group').removeClass('has-danger'); // set success class to the control group
                label
                    .closest('.form-control').removeClass('form-control-danger'); // set success class to the control group
            },

            submitHandler: function(form) {
                successIndicator.show();
                errorIndicator.hide();
                var laddaIndicatorBtn = Ladda.create(document.querySelector('#indicatorBtn'));
                laddaIndicatorBtn.start();
                laddaIndicatorBtn.setProgress(0-1);
                $.ajax({
                    type: $(form).attr('method'),
                    url: $(form).attr('action'),
                    data: $(form).serialize(),
                    dataType: "json",
                    beforeSend: function(){
                      laddaIndicatorBtn.start();
                    },
                    success: function (data) {
                      if(data.status === true){
                        renderSection(urlIndicatorsList);
                      }else{
                        swal({
                              title: 'BlaudCMS :: Indicadores',
                              text: data.message,
                              type: 'error',
                              allowOutsideClick: true,
                              showConfirmButton: true,
                              showCancelButton: false,
                              confirmButtonClass: 'text-danger',
                              cancelButtonClass: '',
                              closeOnConfirm: true,
                              closeOnCancel: true,
                              confirmButtonText: 'OK',
                              cancelButtonText: '',
                            }
                        );
                      }
                      laddaIndicatorBtn.stop();
                    },
                    error: function(errors){
                      var resp = '';
                      var errorsHtml = '';
                      var errors = errors.responseJSON;
                      $.each(errors.errors, function (key, value) {
                        errorsHtml += '\n'+value;
                      });
                      if(errorsHtml != ''){
                        resp = 'Ups! no se pudo actualizar la informacion debido a los siguientes errores: '+errorsHtml;
                      }else{
                        resp = 'Ups! parece que de momento el sistema no está disponible, por favor intentalo nuevamente en unos minutos.';
                      }
                      swal({
                              title: 'BlaudCMS :: Indicadores',
                              text: resp,
                              type: 'error',
                              allowOutsideClick: true,
                              showConfirmButton: true,
                              showCancelButton: false,
                              confirmButtonClass: 'text-danger',
                              cancelButtonClass: '',
                              closeOnConfirm: true,
                              closeOnCancel: true,
                              confirmButtonText: 'OK',
                              cancelButtonText: '',
                            }
                        );
                      laddaIndicatorBtn.stop();
                    }
                });
            }
        });
    }

    return {
        //main function to initiate the module
        init: function() {
            handleIndicatorValidation();
        }
    };
}();

$(document).ready(function() {
    FormIndicatorValidation.init();
});