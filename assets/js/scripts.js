$(document).ready(function() {              //id of the form
    $('#form_mkby').bootstrapValidator({              //options of validator
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',            //icons
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        saving: {
            validators: {
                    notEmpty: {
                    message: 'Please enter the saving number'
                }
            }
        },
        name: {
            validators: {
                notEmpty: {
                    message: 'The Name is required and cannot be empty'
                },
                stringLength: {
                    max: 30,
                    message: 'The FULL NAME must be less than 30 characters long'
                }
            }
        },
        fname: {
            validators: {
                notEmpty: {
                    message: 'The FIRST NAME is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'The FIRST NAME must be less than 20 characters long'
                }
            }
        },
        dob: {
            validators: {
                notEmpty: {
                    message: 'Please select the DATE OF BIRTH'
                }
            }
        },
        address: {
            validators: {
                notEmpty: {
                    message: 'The Address Cannot be Empty'
                }
            }
        },
        amountf: {
            validators: {
                notEmpty: {
                    message: 'The Amount Cannot be Empty'
                }
            }
        },
        amountw: {
            validators: {
                notEmpty: {
                    message: 'The Amount Cannot be Empty'
                }
            }
        },
        mode: {
            validators: {
                notEmpty: {
                    message: 'The Mode Cannot be Empty'
                }
            }
        },
        namen: {
            validators: {
                notEmpty: {
                    message: 'The Nominee Name Cannot be Empty'
                }
            }
        },    
        name_add: {
            validators: {
                notEmpty: {
                    message: 'The NAME and Address is required and cannot be empty'
                }
            }
        },

        name_a: {
            validators: {
                    notEmpty: {
                    message: 'The NAME and Witness is required and cannot be empty'
                }
            }
        },
        aadhar_no: {
            validators: {
                notEmpty: {
                    message: 'Aadhar Number is required cannot be empty'
                },
                stringLength: {
                    min: 12,
                    max: 12,
                    message: 'Aadhar Numbe cannot be greater than 12 characters'
                }
            }
        },
        
        
        }
    });
});

    $('#form_bsy').bootstrapValidator({              //options of validator
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',            //icons
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        applicant_name: {
            validators: {
                    notEmpty: {
                    message: 'Please enter the Applicant Name'
                },
                stringLength: {
                    max: 20,
                    message: 'The Applicant Name must be less than 20 characters long'
                }
            }
        },
        husband_name: {
            validators: {
                notEmpty: {
                    message: 'The Husband Name is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'The Husband Name must be less than 20 characters long'
                }
            }
        },
        son_of: {
            validators: {
                notEmpty: {
                    message: 'The Son Of Field is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'The Son Of Field must be less than 20 characters long'
                }
            }
        },
        dob_mother: {
            validators: {
                notEmpty: {
                    message: 'Please select the DATE OF BIRTH of MOTHER'
                }
            }
        },
        dob_child: {
            validators: {
                notEmpty: {
                    message: 'Please select the DATE OF BIRTH of Child'
                }
            }
        },  
        birth_place: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Place of Birth'
                }
            }
        },
        no_of_child: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Number of Children'
                }
            }
        },
        address: {
            validators: {
                notEmpty: {
                    message: 'The Address Cannot be Empty'
                }
            }
        },
            
        amount_figures: {
            validators: {
                notEmpty: {
                    message: 'The Amount Cannot be Empty'
                }
            }
        },
        amount_words: {
            validators: {
                notEmpty: {
                    message: 'The Amount in Words Cannot be Empty'
                }
            }
        },
        policy_no: {
            validators: {
                notEmpty: {
                    message: 'The Policy Number Cannot be Empty'
                }
            }
        },
        aadhar_no: {
            validators: {
                notEmpty: {
                    message: 'Aadhar Number is required cannot be empty'
                },
                stringLength: {
                    min: 12,
                    max: 12,
                    message: 'Aadhar Numbe cannot be greater than 12 characters'
                }
            }
        },
        
        
        }
    });


    $('#form_jsy').bootstrapValidator({              //options of validator
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',            //icons
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        sub_center: {
            validators: {
                    notEmpty: {
                    message: 'Please enter the name of Subcenter'
                },
                stringLength: {
                    max: 20,
                    message: 'The Husband Name must be less than 20 characters long'
                }
            }
        },
        husband_name: {
            validators: {
                notEmpty: {
                    message: 'The Husband Name is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'The Husband Name must be less than 20 characters long'
                }
            }
        },
        phc: {
            validators: {
                notEmpty: {
                    message: 'This is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'This must be less than 20 characters long'
                }
            }
        },
        applicant_name: {
            validators: {
                    notEmpty: {
                    message: 'Please enter the Applicant Name'
                },
                stringLength: {
                    max: 20,
                    message: 'The Husband Name must be less than 20 characters long'
                }
            }
        },
        bpl_card_no: {
            validators: {
                notEmpty: {
                    message: 'Please select the BPL CARD NOs'
                }
            }
        },
        date: {
            validators: {
                notEmpty: {
                    message: 'Please select the DATE'
                }
            }
        },  
        registration_no: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Registration number'
                }
            }
        },
        age: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Age'
                }
            }
        },
        imp: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Imp'
                }
            }
        },
        edd: {
            validators: {
                notEmpty: {
                    message: 'Please enter the EDD'
                }
            }
        },
        health_inst: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Health Insurance'
                }
            }
        },
        address: {
            validators: {
                notEmpty: {
                    message: 'The Address Cannot be Empty'
                }
            }
        },
            
        amount_figures: {
            validators: {
                notEmpty: {
                    message: 'The Amount Cannot be Empty'
                }
            }
        },
        amount_words: {
            validators: {
                notEmpty: {
                    message: 'The Amount in Words Cannot be Empty'
                }
            }
        },
        policy_no: {
            validators: {
                notEmpty: {
                    message: 'The Policy Number Cannot be Empty'
                }
            }
        },
        aadhar_no: {
            validators: {
                notEmpty: {
                    message: 'Aadhar Number is required cannot be empty'
                },
                stringLength: {
                    min: 12,
                    max: 12,
                    message: 'Aadhar Numbe cannot be greater than 12 characters'
                }
            }
        },
        
        
        }
    });


    $('#form_pmuy').bootstrapValidator({              //options of validator
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',            //icons
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        fname: {
            validators: {
                    notEmpty: {
                    message: 'Please enter the name '
                },
                stringLength: {
                    max: 20,
                    message: 'The Husband Name must be less than 20 characters long'
                }
            }
        },
        mname: {
            validators: {
                notEmpty: {
                    message: 'The Middle Name is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'The Husband Name must be less than 20 characters long'
                }
            }
        },
        lname: {
            validators: {
                notEmpty: {
                    message: 'This is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'This must be less than 20 characters long'
                }
            }
        },
        poa: {
            validators: {
                    notEmpty: {
                    message: 'Please enter the Applicant Name'
                },
                stringLength: {
                    max: 20,
                    message: 'This must be less than 20 characters long'
                }
            }
        },
        bpl_card_no: {
            validators: {
                notEmpty: {
                    message: 'Please select the BPL CARD NOs'
                }
            }
        },
        dob: {
            validators: {
                notEmpty: {
                    message: 'Please select the DATE'
                }
            }
        },  
        registration_no: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Registration number'
                }
            }
        },
        age: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Age'
                }
            }
        },
        relation: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Relationship'
                }
            }
        },
        name: {
            validators: {
                notEmpty: {
                    message: 'Please enter the name'
                }
            }
        },
        name_a: {
            validators: {
                notEmpty: {
                    message: 'Please enter the name in aadhar card'
                }
            }
        },
        name_bank: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Name in Bank Account'
                }
            }
        },
        bank_no: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Bank Account No'
                }
            }
        },
        status: {
            validators: {
                notEmpty: {
                    message: 'Please enter the status of issue'
                }
            }
        },
        bankname: {
            validators: {
                notEmpty: {
                    message: 'Please enter the name of the bank'
                }
            }
        },
        branchname: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Bank Branch'
                }
            }
        },
        ifsc: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Ifsc Code '
                },
                stringLength: {
                    min: 15,
                    max: 15,
                    message: 'The IFSC cannot be greater than 15 characters'
                }
            }
        },
        ration_no: {
            validators: {
                notEmpty: {
                    message: 'Please enter the ration card no'
                }
            },
            stringLength: {
                    min: 10,
                    max: 10,
                    message: 'Ration Card cannot be greater than 10 characters'
                }
            
        },    
        address: {
            validators: {
                notEmpty: {
                    message: 'The Address Cannot be Empty'
                }
            }
        },
        aadhar_no: {
            validators: {
                notEmpty: {
                    message: 'Aadhar Number is required cannot be empty'
                },
                stringLength: {
                    min: 12,
                    max: 12,
                    message: 'Aadhar Numbe cannot be greater than 12 characters'
                }
            }
        },
        aadhar: {
            validators: {
                notEmpty: {
                    message: 'Aadhar Number is required cannot be empty'
                },
                stringLength: {
                    min: 12,
                    max: 12,
                    message: 'Aadhar Numbe cannot be greater than 12 characters'
                }
            }
        },
        
        
        }
    });


$('#form_vpby').bootstrapValidator({              //options of validator
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',            //icons
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        name_pensioner: {
            validators: {
                    notEmpty: {
                    message: 'Please enter the name '
                },
                stringLength: {
                    max: 20,
                    message: 'The Name of Pensioner must be less than 20 characters long'
                }
            }
        },
        father_pensioner: {
            validators: {
                notEmpty: {
                    message: 'The Father Name is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'The father Name must be less than 20 characters long'
                }
            }
        },
        nationality: {
            validators: {
                notEmpty: {
                    message: 'This is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'This must be less than 20 characters long'
                }
            }
        },
        sex: {
            validators: {
                    notEmpty: {
                    message: 'Please enter the gender'
                },
                stringLength: {
                    min:4,
                    max: 10,
                    message: 'This must be less than 20 characters long'
                }
            }
        },
        mobno: {
            validators: {
                notEmpty: {
                    message: 'Please insert the Mobile Number'
                },
                stringLength: {
                    min: 10,
                    max: 10,
                    message: 'This must be less than 10 digits long'
                }
            }
        },
        dob: {
            validators: {
                notEmpty: {
                    message: 'Please select the DATE'
                }
            }
        },  
        registration_no: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Registration number'
                }
            }
        },
        age: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Age'
                }
            }
        },
        bankname: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Name in Bank Account'
                }
            }
        },
        bank_no: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Bank No'
                }
            }
        },
        status: {
            validators: {
                notEmpty: {
                    message: 'Please enter the status of issue'
                }
            }
        },
        bankname: {
            validators: {
                notEmpty: {
                    message: 'Please enter the name of the bank'
                }
            }
        },
        branchname: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Bank Branch'
                }
            }
        },
        ifsc: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Ifsc Code '
                },
                stringLength: {
                    min: 15,
                    max: 15,
                    message: 'The IFSC cannot be greater than 15 characters'
                }
            }
        },
        pan: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Pan Number'
                },
                stringLength: {
                    min: 15,
                    max: 15,
                    message: 'The PAN Number cannot be greater than 15 characters'
                }
            }
        },
        name: {
            validators: {
                notEmpty: {
                    message: 'Please enter the name'
                }
            }
        },
        mode: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Mode'
                }
            }
        },
        drawn: {
            validators: {
                notEmpty: {
                    message: 'Please select the date to be withdrawn'
                }
            }
        },
        dat: {
            validators: {
                notEmpty: {
                    message: 'Please select the Date'
                }
            }
        },
        cheque: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Cheque or DD no'
                }
            }
        },
        deposit: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Amount of deposit'
                }
            }
        },
        amt: {
            validators: {
                notEmpty: {
                    message: 'Please enter the name of the bank'
                }
            }
        },
        purchase_price: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Purchase Price in multiple of 5'
                }
            }
        },

        mode_pension: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Mode of pension Installment'
                }
            }
        },
        policy_no: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Policy number '
                },
                stringLength: {
                    min: 3,
                    max: 10,
                    message: 'The Policy number cannot be greater than 10 characters'
                }
            }
        },
        resno: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Residence no'
                },
            stringLength: {
                    min: 7,
                    max: 7,
                    message: 'Residence no cannot be greater than 7 characters'
                }
            }
        }, 
        offno: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Office no'
                },
            stringLength: {
                    min: 10,
                    max: 10,
                    message: 'Office no cannot be greater than 10 characters'
                }
            }
        }, 
        address: {
            validators: {
                notEmpty: {
                    message: 'The Address Cannot be Empty'
                }
            }
        },
        type: {
            validators: {
                notEmpty: {
                    message: 'The Account Type Cannot be Empty'
                }
            }
        },    
        aadhar_no: {
            validators: {
                notEmpty: {
                    message: 'Aadhar Number is required cannot be empty'
                },
                stringLength: {
                    min: 12,
                    max: 12,
                    message: 'Aadhar Numbe cannot be greater than 12 characters'
                }
            }
        },
        aadhar: {
            validators: {
                notEmpty: {
                    message: 'Aadhar Number is required cannot be empty'
                },
                stringLength: {
                    min: 12,
                    max: 12,
                    message: 'Aadhar Numbe cannot be greater than 12 characters'
                }
            }
        },
        
        
        }
    });



$('#form_pmjjby').bootstrapValidator({              //options of validator
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',            //icons
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        name_pensioner: {
            validators: {
                    notEmpty: {
                    message: 'Please enter the name '
                },
                stringLength: {
                    max: 20,
                    message: 'The Name of Pensioner must be less than 20 characters long'
                }
            }
        },
        father_pensioner: {
            validators: {
                notEmpty: {
                    message: 'The Father Name is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'The father Name must be less than 20 characters long'
                }
            }
        },
        nationality: {
            validators: {
                notEmpty: {
                    message: 'This is required and cannot be empty'
                },
                stringLength: {
                    max: 20,
                    message: 'This must be less than 20 characters long'
                }
            }
        },
        sex: {
            validators: {
                    notEmpty: {
                    message: 'Please enter the gender'
                },
                stringLength: {
                    min:4,
                    max: 10,
                    message: 'This must be less than 20 characters long'
                }
            }
        },
        mobno: {
            validators: {
                notEmpty: {
                    message: 'Please insert the Mobile Number'
                },
                stringLength: {
                    min: 10,
                    max: 10,
                    message: 'This must be less than 10 digits long'
                }
            }
        },
        dob: {
            validators: {
                notEmpty: {
                    message: 'Please select the DATE'
                }
            }
        },  
        registration_no: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Registration number'
                }
            }
        },
        age: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Age'
                }
            }
        },
        bankname: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Name in Bank Account'
                }
            }
        },
        bank_no: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Bank No'
                }
            }
        },
        status: {
            validators: {
                notEmpty: {
                    message: 'Please enter the status of issue'
                }
            }
        },
        bankname: {
            validators: {
                notEmpty: {
                    message: 'Please enter the name of the bank'
                }
            }
        },
        branchname: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Bank Branch'
                }
            }
        },
        ifsc: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Ifsc Code '
                },
                stringLength: {
                    min: 15,
                    max: 15,
                    message: 'The IFSC cannot be greater than 15 characters'
                }
            }
        },
        pan: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Pan Number'
                },
                stringLength: {
                    min: 15,
                    max: 15,
                    message: 'The PAN Number cannot be greater than 15 characters'
                }
            }
        },
        name: {
            validators: {
                notEmpty: {
                    message: 'Please enter the name'
                }
            }
        },
        mode: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Mode'
                }
            }
        },
        drawn: {
            validators: {
                notEmpty: {
                    message: 'Please select the date to be withdrawn'
                }
            }
        },
        dat: {
            validators: {
                notEmpty: {
                    message: 'Please select the Date'
                }
            }
        },
        cheque: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Cheque or DD no'
                }
            }
        },
        deposit: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Amount of deposit'
                }
            }
        },
        amt: {
            validators: {
                notEmpty: {
                    message: 'Please enter the name of the bank'
                }
            }
        },
        purchase_price: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Purchase Price in multiple of 5'
                }
            }
        },

        mode_pension: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Mode of pension Installment'
                }
            }
        },
        policy_no: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Policy number '
                },
                stringLength: {
                    min: 3,
                    max: 10,
                    message: 'The Policy number cannot be greater than 10 characters'
                }
            }
        },
        resno: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Residence no'
                },
            stringLength: {
                    min: 7,
                    max: 7,
                    message: 'Residence no cannot be greater than 7 characters'
                }
            }
        }, 
        offno: {
            validators: {
                notEmpty: {
                    message: 'Please enter the Office no'
                },
            stringLength: {
                    min: 10,
                    max: 10,
                    message: 'Office no cannot be greater than 10 characters'
                }
            }
        }, 
        address: {
            validators: {
                notEmpty: {
                    message: 'The Address Cannot be Empty'
                }
            }
        },
        type: {
            validators: {
                notEmpty: {
                    message: 'The Account Type Cannot be Empty'
                }
            }
        },    
        aadhar_no: {
            validators: {
                notEmpty: {
                    message: 'Aadhar Number is required cannot be empty'
                },
                stringLength: {
                    min: 12,
                    max: 12,
                    message: 'Aadhar Numbe cannot be greater than 12 characters'
                }
            }
        },
        aadhar: {
            validators: {
                notEmpty: {
                    message: 'Aadhar Number is required cannot be empty'
                },
                stringLength: {
                    min: 12,
                    max: 12,
                    message: 'Aadhar Numbe cannot be greater than 12 characters'
                }
            }
        },
        
        
        }
    });