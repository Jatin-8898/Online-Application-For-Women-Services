var FormWizard = function () {
   return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().bootstrapWizard) {
                return;
            }

            function format(state) {
                if (!state.id) return state.text; // optgroup
                return "<img class='flag' src='assets/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
            }

            $("#country_list").select2({
                placeholder: "Select",
                allowClear: true,
                formatResult: format,
                formatSelection: format,
                escapeMarkup: function (m) {
                    return m;
                }
            });

            var form = $('#submit_form');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);

            form.validate({
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    //account
                    stud_name: {
                        required: true
                    },
					branch: {
						required: true
					},
					sem: {
						required: true
					},
                    password: {
                        minlength: 5,
                        required: true
                    },
                    rpassword: {
                        minlength: 5,
                        required: true,
                        equalTo: "#submit_form_password"
                    },
                    //profile
                    fullname: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
					minlength:10,
					maxlength:10,
                        required: true
                    },
                    gender: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    country: {
                        required: true
                    },
                    //payment
                    card_name: {
                        required: true
                    },
                    card_number: {
                        minlength: 16,
                        maxlength: 16,
                        required: true
                    },
                    card_cvc: {
                        digits: true,
                        required: true,
                        minlength: 3,
                        maxlength: 4
                    },
                    card_expiry_date: {
                        required: true
                    },
					paymode: {
						required: true
					},
                    'payment[]': {
                        required: true,
                        minlength: 1
                    }
                },

                messages: { // custom messages for radio buttons and checkboxes
                    'subject': {
                        required: "Please select at least one option",
                        minlength: jQuery.format("Please select at least one option")
                    }
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    if (element.attr("name") == "gender") { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#form_gender_error");
                    } else if (element.attr("name") == "payment[]") { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#form_payment_error");
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    success.hide();
                    error.show();
                    App.scrollTo(error, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    if (label.attr("for") == "gender" || label.attr("for") == "payment[]") { // for checkboxes and radio buttons, no need to show OK icon
                        label
                            .closest('.form-group').removeClass('has-error').addClass('has-success');
                        label.remove(); // remove error label here
                    } else { // display success icon for other inputs
                        label
                            .addClass('valid') // mark the current input as valid and display OK icon
                        .closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    }
                },

                submitHandler: function (form) {
                    success.show();
                    error.hide();
                    //add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
                }

            });

            var displayConfirm = function() 
			{
				document.getElementById("student_name").value = document.getElementById("stud_name").value;
				document.getElementById("addr").value = document.getElementById("stud_address").value;
				document.getElementById("mob_num").value = document.getElementById("phone").value;
				document.getElementById("f_name").value = document.getElementById("father_name").value;
				document.getElementById("f_phone").value = document.getElementById("father_phone").value;
				document.getElementById("m_name").value = document.getElementById("mother_name").value;
				document.getElementById("m_phone").value = document.getElementById("mother_phone").value;
				// Creating Table
				var tblBody = document.getElementsByTagName("tbody")[0];
				fee = document.getElementsByName("fees");
				sub=document.getElementsByName("subject[]");
				var total=0;
				var count=0;
				for (var i=0;i<sub.length;i++) 
				{	
					if (sub[i].checked==true) 
					{
						count++;
						total = total + parseInt(fee[i].value);
						var row = document.createElement("tr");
						var cell = document.createElement("td");    
						var cellText = document.createTextNode(""+count); 
						cell.appendChild(cellText);
						row.appendChild(cell);
						var cell = document.createElement("td");    
						var cellText = document.createTextNode(""+sub[i].value); 
						cell.appendChild(cellText);
						row.appendChild(cell);
						var cell = document.createElement("td");    
						var cellText = document.createTextNode(""+fee[i].value); 
						cell.appendChild(cellText);
						row.appendChild(cell);
						tblBody.appendChild(row);
					}
				}
				var row = document.createElement("tr");
				var cell = document.createElement("td"); 
				var cellText = document.createTextNode(""); 
				cell.appendChild(cellText);
				row.appendChild(cell);
				var cell = document.createElement("td"); 
				var cellText = document.createTextNode("Total Fees"); 
				cell.appendChild(cellText);
				row.appendChild(cell);
				var cell = document.createElement("td"); 
				var cellText = document.createTextNode(""+total); 
				cell.appendChild(cellText);
				row.appendChild(cell);
				tblBody.appendChild(row);
				document.getElementById("tot").value = document.getElementById("total_fees").value;
				var amount = document.getElementById("amount_paid").value;
				document.getElementById("amt").value = amount;
				document.getElementById("bal").value = total - amount;
				paymode = document.getElementsByName("paymode");
				for (var i=0;i<paymode.length;i++) 
				{	
					if (paymode[i].checked==true) 
					{
						if(paymode[i].value=="Cash")
						{
							document.getElementById("pay_mode").value = "Cash";
						}
						else
						{
							document.getElementById("pay_mode").value = "Cheque";
							document.getElementById("chq_num").value = document.getElementById("cheque_number").value;
							document.getElementById('chq_num').style.display = 'block'; 
							document.getElementById('chq_lbl').style.display = 'block'; 
						}
					}
				}
            }

            var handleTitle = function(tab, navigation, index) {
                var total = navigation.find('li').length;
                var current = index + 1;
                // set wizard title
                $('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
                // set done steps
                jQuery('li', $('#form_wizard_1')).removeClass("done");
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }

                if (current == 1) {
                    $('#form_wizard_1').find('.button-previous').hide();
                } else {
                    $('#form_wizard_1').find('.button-previous').show();
                }

                if (current >= total) {
                    $('#form_wizard_1').find('.button-next').hide();
                    $('#form_wizard_1').find('.button-submit').show();
                    displayConfirm();
                } else {
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submit').hide();
                }
                App.scrollTo($('.page-title'));
            }

            // default form wizard
            $('#form_wizard_1').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function (tab, navigation, index, clickedIndex) {
                    success.hide();
                    error.hide();
                    if (form.valid() == false) {
                        return false;
                    }
                    handleTitle(tab, navigation, clickedIndex);
                },
                onNext: function (tab, navigation, index) {
                    success.hide();
                    error.hide();

                    if (form.valid() == false) {
                        return false;
                    }

                    handleTitle(tab, navigation, index);
                },
                onPrevious: function (tab, navigation, index) {
                    success.hide();
                    error.hide();

                    handleTitle(tab, navigation, index);
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_1').find('.progress-bar').css({
                        width: $percent + '%'
                    });
                }
            });
            $('#form_wizard_1').find('.button-previous').hide();
            $('#form_wizard_1 .button-submit').click(function () {
                alert('Finished! Hope you like it :)');
            }).hide();
        }

    };
}();