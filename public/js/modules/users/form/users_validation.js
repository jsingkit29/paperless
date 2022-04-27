$( document ).ready( function () {

    $('#form_user').submit(function() {
        if(!$(this).valid()){
            Ladda.stopAll();
        }
    });

    $( "#form_appointment" ).validate( {
        rules: {
            first_name: "required",
            email: "required",
            last_name: "required",
            middle_name: "required",
            phone_number: "required",
            date: "required",
            time: "required",
        },
        messages: {

        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
            // Add the `help-block` class to the error element
            error.addClass( "help-block" );
            // Add `has-feedback` class to the parent div.form-group
            // in order to add icons to inputs
            element.parents( ".col-sm-12" ).addClass( "has-feedback" );

            if ( element.prop( "type" ) === "checkbox" ) {
                error.insertAfter( element.parent( "label" ) );
            } else {
                error.insertAfter( element );
            }
            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if ( !element.next( "span" )[ 0 ] ) {
                //$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter(" +" $(element ));
            }
        },
        success: function ( label, element ) {
            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if ( !$( element ).next( "span" )[ 0 ] ) {
                //$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
            }
        },
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents( ".col-sm-12" ).addClass( "has-error" ).removeClass( "has-success" );
            $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
        },
        unhighlight: function ( element, errorClass, validClass ) {
            $( element ).parents( ".col-sm-12" ).addClass( "has-success" ).removeClass( "has-error" );
            $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
        }
    } );
} );


$.validator.setDefaults( {
    submitHandler: function () {
        var formData = new FormData($("#form_user")[0]);
        processUsers(formData)

    }
} );
