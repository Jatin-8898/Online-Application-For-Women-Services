var FormValidation = function () {
    var handlePMUY = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation
        var form1 = $('#form_pmuy');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);
        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: ""
            , rules: {
                fname: {
                    required: true
                }
                , mname: {
                    required: true
                }
                , lname: {
                    required: true
                }
                , dob: {
                    required: true
                }
                , poa: {
                    required: true
                }
                , aadhar_no: {
                    required: true,
                    min: 12
                }
                , bank_no: {
                    required: true
                },
                ration_no:{
                    required: true
                }
             }
            , messages: {
                fname: {
                    required: "First Name is required."
                },
                mname: {
                    required: "Middle Name is required."
                }
                , lname: {
                    required: "Last Name is required."
                }
                , dob: {
                    required: "Date of Birth is required."
                }
                , poa: {
                    required: "Proof of Address is required."
                }
                , aadhar_no: {
                    required: "Aadhar Number is required.",
                    min: "Aadhar Number should be 12 digit."
                }
                , bank_no: {
                    required: "Bank Account Number is required."
                },
                ration_no:{
                    required: "Ration Card Number is required."
                }
            }
            , invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                App.scrollTo(error1, -200);
            }
            , highlight: function (element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            }
            , unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
            }
            , success: function (label) {
                label.closest('.form-group').removeClass('has-error'); // set success class to the control group
            }
            , submitHandler: function (form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });
    }
    return {
        //main function to initiate the module
        init: function () {
            handlePMUY();
        }
    };
}();