//window.alert("HELLO");

/*VALIDATION FOR ADD USER FORM*/
$(document).ready(function() {              //id of the form
    $('#upload_docs').bootstrapValidator({              //options of validator
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',            //icons
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
       

        doc_select: {
            validators: {
                    notEmpty: {
                    message: 'Please select the type of the Document to be Uploaded'
                }
            }
        },
       
 
        doc: {
            validators: {
                file: {
                        extension: 'jpeg,jpg,png,jfif,pdf,docx',
                        type: 'application/pdf,application/docx',
                        maxSize: 2048 * 1024,
                        message: 'The selected file is not valid'
                    },
                notEmpty: {
                    message: 'Document cannot be empty'
                }
            }
        },    
            
        } 
    });
});




