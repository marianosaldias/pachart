/*--- Form Login header & User menu ----------------------------------*/

$(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').click(function (e) {
        e.stopPropagation();
    });


});

$(document).ready(function(){
    $('button [data-toggle="tooltip"]').tooltip();
});

/*--- Scroll to-top btn------------------------------------------------*/

$(document).ready(function(){
     $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    
    $('#back-to-top').tooltip('show');

});

/*--- Search Form Header ------------------------------------------------*/

$("#btnSearch").click(function(){
	$("#searchForm").fadeToggle("slow", "linear");
});
$("#closeHeaderSearchForm").click(function(){
	$("#searchForm").fadeToggle("slow", "linear");
});

/*
$(function () {
    $('#toolbar').find('select').change(function () {
        $table.bootstrapTable('destroy').bootstrapTable({
            exportDataType: $(this).val()
        });
    });
}); 


$(function () {
    $('#toolbar').find('select').change(function () {
        $table.bootstrapTable('destroy').bootstrapTable({
            exportDataType: $(this).val()
        });
    });
})  
*/

/*--- All ----------------------------------------------------------------------------*/

$(document).ready(function() {
    // Delete message
    $('form#loginForm').on('submit', function (e) {
        e.preventDefault();
        console.log($('form#loginForm').serialize());

        // Reset alert-message
        $('#alertLogin').css("display","none");
        $('#alertType').removeClass('alert-success'); $('#alertType').removeClass('alert-danger');

        //=== AJAX
        $.ajax({
        type: "POST",
        data: $('form#loginForm').serialize(),
        url: $baseURL + "index.php/loginform/loginHeadForm",
        dataType: "json",
        success: function(datos) {
            console.log(datos.status);

            if(datos.status == "ko") {
                $('#alertType').addClass('alert-danger');
                $message = "Verifica tus datos y vuelve a intentarlo :)";
                // Reset form & captcha
                $('#loginForm')[0].reset();
                grecaptcha.reset();
            } else if(datos.status == "ok") {
                $(location).attr('href', $baseURL + 'index.php/index');
            };            

            $('#msgLogin').text($message);
            $('#alertLogin').css("display","inherit");
        },
        error: function(datos) {
            console.log('error :(');
            alert('No se ha podido enviar el mensaje');
        }
        }).done(function() {
            console.log("Listo!!");
        });
    });


    /*--- Inbox ----------------------------------------------------------------------------*/
    /* Para responder mensajes */
    $('#compose-textarea').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true,                 // set focus to editable area after initializing summernote
      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        //['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ],      
    });
    /* Para enviar mensajes */
    $('#compose-msg-textarea').summernote();
    $('#prof_bio').summernote();
    $('#prof_resume').summernote();     
    $("#art_desc").summernote();

    $('#alertMsg').css("display","none");

    $(document).on('click','#tableInbox button', function () {
        var tr = $(this).parent().parent();
        console.log($(this));

        //console.log(tr.find('[data-prop="nombre"]').text());
        $nombre = tr.find('[data-prop="nombre"]').text();
        $submit = tr.find('[data-prop="submit"]').text();
        $message = tr.find('[data-prop="comment"]').html();
        $fecha = tr.find('[data-prop="fecha"]').text();

        $idmessage = tr.attr('data-idmessage');
        $iduserfrom = tr.attr('data-iduserfrom');
        $idcontent = tr.attr('data-idcontent');
        $tipocont = tr.attr('data-tipocontent');
        
        console.log("de: " + $nombre + " mensaje: " + $message + " asunto: " + $submit + " fecha: " + $fecha + " de" + $iduserfrom + " idcontent: " + $idcontent);

        // Cargo datos en la vista de "lectura mensaje"
        $('#readNombre').text($nombre);
        $('#readSubmit').text($submit);
        $('#readMessage').html($message);
        $('#readMessage span').removeClass('txtcoment');
        $('#readFecha').text($fecha);
        $('#idmsg').text($idmessage);
        // Cargo datos en la vista de "responder mensaje"
        $('#writeNombre').val($nombre);
        $('#writeSubmit').val("Rta: " + $submit);
        $('#writeIdUserTo').val($iduserfrom);
        $('#writeIdContent').val($idcontent);
        $('#writeTipoContent').val($tipocont);

        // Oculto bandeja de entrada y visiblizo el detalle del mensaje 
        $('#inbox').css("display","none");
        $('#readMsg').css("display","inherit");
        $('body,html').animate({scrollTop: 0}, 400);

    });

    // Btn "Responder"
    $('#btnResponderMsg').click (function () {
        // Oculto bandeja de entrada y visiblizo el detalle del mensaje 
        $('#readMsg').css("display","none");
        $('#writeMsg').css("display","inherit");
        $('#formComment').css("display","inherit");

        var markupStr = "<br><br>-------------------- <small>"+ $('#readFecha').text() +"</small> --------------------<br>\n"+ $('#readMessage').html() + "<br>\n";

        $('#compose-textarea').summernote('code', markupStr);
        $('#compose-textarea').focus();
        $('body,html').animate({scrollTop: 0}, 400);
    });
    // Btns "Close"
    $('#btnCloseReadMsg').click (function () {
        $('#readMsg').css("display","none");
        $('#inbox').css("display","inherit");
        $('#alertMsg').css("display","none");
        $('body,html').animate({scrollTop: 0}, 400);
    });
    $('#btnCloseWriteMsg').click (function () {
        $('#writeMsg').css("display","none");
        $('#inbox').css("display","inherit");
        $('#formComment').css("display","inherit");
        $('#alertMsg').css("display","none");
        $('body,html').animate({scrollTop: 0}, 400);
    });
    $('#btnDesechaMsg').click (function () {
        $('#writeMsg').css("display","none");
        $('#inbox').css("display","inherit");
        $('#alertMsg').css("display","none");
        $('body,html').animate({scrollTop: 0}, 400);
    });
    $('#btnRedactar').click (function () {
        $('#inbox').css("display","none");
        $('#writeNewMsg').css("display","inherit");
        $('#formMessage').css("display","inherit");
        $('#alertMsg').css("display","none");
        /* Reset textarea */
        var markupStr = "";
        $('#compose-msg-textarea').summernote('code', markupStr);     
        /* Reset sbmit */
        $('#writeMsgSubmit').val('');
        /* Reset idsendto */
        $('#writeMsgIdUserTo').val('');
        $('a.chosen-single span').text('Seleccionar destinatario')

        $('body,html').animate({scrollTop: 0}, 400);
    });
    $('#btnDesechaNewMsg').click (function () {
        $('#writeNewMsg').css("display","none");
        $('#inbox').css("display","inherit");
        $('#alertMsg').css("display","none");
        $('body,html').animate({scrollTop: 0}, 400);
    });
    $('#btnCloseWriteNewMsg').click (function () {
        $('#writeNewMsg').css("display","none");
        $('#inbox').css("display","inherit");
        $('#alertMsg').css("display","none");
        $('body,html').animate({scrollTop: 0}, 400);
    });


    // Insert message
    $('form#formComment').on('submit', function (e) {
        e.preventDefault();
        console.log('sending');

        console.log($('form#formComment').serialize());

        //=== AJAX
        $.ajax({
        type: "POST",
        data: $('form#formComment').serialize(),
        // http://localhost/pachart/index.php/inbox/sendcomment
        url: $baseURL + "index.php/inbox/sendcomment",

        success: function(resp) {
            console.log('success!');
            $('#formComment').css("display","none");
            $('#msgComment').text('El mensaje ha sido enviado con éxito!');
            $('#alertMsg').css("display","inherit");
            //$('body,html').animate({scrollTop: 0}, 400);
        },
        error: function(resp) {
            console.log('error :(');
            alert('No se ha podido enviar el mensaje');
        }
        }).done(function() {
            console.log("Listo!!");
        });
    });

    // Insert message
    $('form#formMessage').on('submit', function (e) {
        e.preventDefault();
        console.log('sending');

        console.log($('form#formMessage').serialize());

        //=== AJAX
        $.ajax({
        type: "POST",
        data: $('form#formMessage').serialize(),
        // http://localhost/pachart/index.php/inbox/sendmessage
        url: $baseURL + "index.php/inbox/sendmessage",
        success: function(resp) {
            console.log('success!');
            $('#formMessage').css("display","none");
            $('#msgComment').text('El mensaje ha sido enviado con éxito!');
            $('#alertMsg').css("display","inherit");
            $('body,html').animate({scrollTop: 0}, 400);
        },
        error: function(resp) {
            console.log('error :(');
            alert('No se ha podido enviar el mensaje');
        }
        }).done(function() {
            console.log("Listo!!");
        });
    });    

    // Delete message
    $('#borrarMsg').click(function (e) {
        e.preventDefault();
        console.log('sending');

        idmsg = $('#idmsg').text();
        console.log(idmsg);

        //=== AJAX
        $.ajax({
        type: "POST",
        data: {data:idmsg},
        url: $baseURL + "index.php/inbox/deletecomment",
        success: function(resp) {
            console.log('success!');
            $('#msgComment').text('El mensaje ha sido se ha eliminado de la bandeja de entradas.');
            $("#tableInbox tr[data-idmessage=" + idmsg + "]").remove();
            $('#alertMsg').css("display","inherit");
            $('body,html').animate({scrollTop: 0}, 400);
        },
        error: function(resp) {
            console.log('error :(');
            alert('No se ha podido enviar el mensaje');
        }
        }).done(function() {
            console.log("Listo!!");
        });
    });

    // Profile --------------------------------------------------------------------------------//
    // Update Profile
    $('form#formUpdateProfile').on('submit', function (e) {
        e.preventDefault();
        console.log($('form#formUpdateProfile').serialize());

        // Reset alert-message
        $('#alertMsg').css("display","none");
        $('#alertType').removeClass('alert-success'); $('#alertType').removeClass('alert-danger');

        //=== AJAX
        $.ajax({
        type: "POST",
        data: $('form#formUpdateProfile').serialize(),
        url: $baseURL + "index.php/perfil/misdatosupdate",
        dataType: "json",
        success: function(datos) {
            console.log(datos.status);


            if(datos.status == "ok") {
                $('#alertType').addClass('alert-success');
                $message = "Los datos de tu perfil han sido actualizados con éxito!"

            } else {
                $('#alertType').addClass('alert-danger');
                $message = "Verifica la contraseña actual, la igualdad de las nuevas contraseñas y vuelve a intentarlo :)"
            };

            $('#msgProfileForm').text($message);
            $('#alertMsg').css("display","inherit");
            //$('body,html').animate({scrollTop: 0}, 400);
        },
        error: function(datos) {
            console.log('error :(');
        }
        }).done(function() {
            //console.log("Listo!!");
        });
    });   

    // Profile ---------------------------------------------------------------------------------//
    // Change pass
    $('form#formChange').on('submit', function (e) {
        e.preventDefault();
        console.log($('form#formChange').serialize());

        // Reset alert-message
        $('#alertMsg').css("display","none");
        $('#alertType').removeClass('alert-success'); $('#alertType').removeClass('alert-danger');

        //=== AJAX
        $.ajax({
        type: "POST",
        data: $('form#formChange').serialize(),
        url: $baseURL + "index.php/perfil/chgepassaction",
        dataType: "json",
        success: function(datos) {
            console.log(datos.status);


            if(datos.status == "ok") {
                $('#alertType').addClass('alert-success');
                $message = "La contraseña ha sido cambiada con éxito!"
                $('#formChange').toggle();

            } else {
                $('#alertType').addClass('alert-danger');
                $message = "Verifica los datos cargados antes de volver a intentarlo :)"
            };

            $('#msgChangePass').text($message);
            $('#alertMsg').css("display","inherit");
            $('body,html').animate({scrollTop: 0}, 400);
        },
        error: function(datos) {
            console.log('error :(');
        }
        }).done(function() {
            //console.log("Listo!!");
        });
    });    

    // Contacto -------------------------------------------------------------------------------//
    // Contact form
    /*
    $('form#formContact').on('submit', function (e) {
        e.preventDefault();
        console.log($('form#formContact').serialize());

        $('#alertMsg').css("display","none");
        $('#alertType').removeClass('alert-success'); $('#alertType').removeClass('alert-danger');

        $.ajax({
        type: "POST",
        data: $('form#formContact').serialize(),
        url: $baseURL + "index.php/index/contactformaction",
        dataType: "json",
        success: function(datos) {
            console.log(datos.status);

            if(datos.status == "ok") {
                $('#alertType').addClass('alert-success');
                $message = "Tu mensaje ha sido enviado con éxito!"
            } else {
                $('#alertType').addClass('alert-danger');
                $message = "Error en el proceso :(";
            };

            $('#msgContact').text($message);
            $('#alertMsg').css("display","inherit");
        },
        error: function(datos) {
            $('#alertType').addClass('alert-danger');
            $message = "Error en el proceso :((";
            console.log(datos.status);
            $('#msgContact').text($message);
        }
        }).done(function() {

        });
    });       
    */

    $('#formContact')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            addOns: {
                reCaptcha2: {
                    element: 'captchaContainer',
                    theme: 'light',
                    siteKey: '6LcWp1EUAAAAAKYpotFZ5DPoFPWZZc-ok0kAuYcl',
                    timeout: 120,
                    message: 'The captcha is not valid'
                }
            },            
            fields: {
                contact_name: {
                    //row: '.col-md-12',
                    validators: {
                        notEmpty: {
                            //message: 'The title is required'
                        },
                        stringLength: {
                            max: 200,
                            message: 'The title must be less than 200 characters long'
                        }
                    }
                },
                contact_mail: {
                    //row: '.col-md-6',
                    validators: {
                        notEmpty: {
                            //message: 'Ingrese su e-mail'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },                    
                contact_comments: {
                    //row: '.col-md-12',
                    validators: {
                        notEmpty: {
                            //message: 'The producer name is required'
                        },
                        stringLength: {
                            max: 255
                        }
                    }
                },
                'g-recaptcha-response': {
                    err: '#captchaMessage'
                },                    
            }
        })

        .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            //=== AJAX
            $.ajax({
            type: "POST",
            data: $('form#formContact').serialize(),
            url: $baseURL + "index.php/index/contactformaction",
            dataType: "json",
            success: function(datos) {
                console.log(datos.status);

                if(datos.status == "ok") {
                    $('#alertType').addClass('alert-success');
                    $message = "Tu mensaje ha sido enviado con éxito!"
                } else {
                    $('#alertType').addClass('alert-danger');
                    $message = "Error en el proceso :(";
                };

                $('#msgContact').text($message);
                $('#alertMsg').css("display","inherit");
            },
            error: function(datos) {
                $('#alertType').addClass('alert-danger');
                $message = "Error en el proceso :((";
                console.log(datos.status);
                $('#msgContact').text($message);
            }
            }).done(function() {

            });
        });  









    // Usuario Nuevo ---------------------------------------------------------------------------//
    // Crear cuenta de usuario
    $('form#formForNewUser').on('submit', function (e) {
        e.preventDefault();
        console.log($('form#formForNewUser').serialize());

        // Reset alert-message
        $('#alertMsg').css("display","none");
        $('#alertType').removeClass('alert-success'); $('#alertType').removeClass('alert-danger');

        //=== AJAX
        $.ajax({
        type: "POST",
        data: $('form#formForNewUser').serialize(),
        url: $baseURL + "index.php/index/createaccount",
        dataType: "json",
        success: function(datos) {
            console.log("Send mail: " + datos.status);
            //console.log("Insert db: " + datos.adduser);

            if(datos.status == "ok") {
                $('#alertType').addClass('alert-success');
                $message = "<p class='margin-0 text-success'>Tu cuenta de usuario se ha creado con éxito!<br />Nos pondremos en contacto para continuar con la siguiente estapa de registro.<br />Muchas gracias!</p>"
            } else {
                $('#alertType').addClass('alert-danger');
                $message = "<p class='margin-0 text-danger'>Error en el proceso :(</p>";
            };

            $('#msgAddUsr').html($message);
            $('#alertMsg').css("display","inherit");
        },
        error: function(datos) {
            $('#alertType').addClass('alert-danger');
            $message = "<p class='margin-0 text-danger'>Error en el proceso :(</p>";
            console.log("Send mail: " + datos.status);
            //console.log("Insert db: " + datos.adduser);
            $('#msgAddUsr').html($message);
        }
        }).done(function() {
            //console.log("Listo!!");
        });
    });

    // Forgot Pass ----------------------------------------------------------------------------//
    // Recuperar pass
    $('form#formForgotPass').on('submit', function (e) {
        e.preventDefault();
        console.log($('form#formForgotPass').serialize());

        // Reset alert-message
        $('#alertMsg').css("display","none");
        $('#alertType').removeClass('alert-success'); $('#alertType').removeClass('alert-danger');

        //=== AJAX
        $.ajax({
        type: "POST",
        data: $('form#formForgotPass').serialize(),
        url: $baseURL + "index.php/index/sendmemypass",
        dataType: "json",
        success: function(datos) {
            console.log("Send mail: " + datos.status);
            console.log("Found: " + datos.find);
            //console.log("Insert db: " + datos.adduser);

            if(datos.find == 1) {
                $('#alertType').addClass('alert-success');
                $message = "Tu contraseña ha sido enviada a tu cuenta de e-mail."
            } else if(datos.find == 0) {
                $('#alertType').addClass('alert-danger');
                $message = "No se ha encontrado usuario registrado.";
            };

            console.log("Mensaje: " + $message);
            $('#msgForgotPass').text($message);
            $('#alertMsg').css("display","inherit");
        },
        error: function(datos) {
            $('#alertType').addClass('alert-danger');
            $message = "Error en el proceso :(";
            console.log("Send mail: " + datos.status);
            //console.log("Insert db: " + datos.adduser);
            $('#msgForgotPass').text($message);
        }
        }).done(function() {
            //console.log("Listo!!");
        });
    });


    // Form "Busqueda" -----------------------------------------------------------------------//
    // Acción de busqueda AJAX
    var fuctionBusqueda = function (e) {
        e.preventDefault();
        console.log($('form#formBusqueda').serialize());

        //=== AJAX
        $.ajax({
        type: "POST",
        data: $('form#formBusqueda').serialize(),
        url: $baseURL + "index.php/busqueda/actionbusqueda",
        dataType: "html",
        success: function(datos) {
            console.log('success!');
            console.log(datos);
            
            $('#resultadobusqueda').html(datos);
        },
        error: function(datos) {
            $message = "Error en el proceso :(";
            console.log("Resultado: " + $message);
        }
        }).done(function() {
            //console.log("Listo!!");
        });
    };

    // Ejecuto la misma funcion en dos eventos:
    $(document).on('change','form#formBusqueda', fuctionBusqueda);
    $(document).on('submit','form#formBusqueda', fuctionBusqueda);


    // Trash Collection -----------------------------------------------------------------------//
    // Trash AJAX
    $(document).on('click','#resultadoCollections .btn_trash_col', function () {
        //e.preventDefault();

        /*
        var tr = $(this).parent().parent().parent().parent().parent().parent();
        console.log($(this));
        console.log($(tr).data("idcollection"));
        */

        var reg = $(this).parent().parent().parent().parent().parent();
        console.log($(this));
        console.log($(reg).data("idcollection"));        
        
        idTrash = $(reg).data("idcollection");
        imageName = $(reg).data("imagename");
        titleCol = $(reg).data("titlecol");
        console.log("Id: " + idTrash  + " Title: " + titleCol + " Image: " + imageName);

        // Envio de data por AJAX
        /* 
        https://stackoverflow.com/questions/6085649/how-to-send-multiple-data-fields-via-ajax 
        */

        //=== AJAX
        $.ajax({
        type: "POST",
        data: {trash: idTrash, name: imageName},
        url: $baseURL + "index.php/coleccion/delete_reg_col",
        dataType: "json",
        success: function(datos) {
            console.log('success!');
            console.log(datos);
            console.log(titleCol);

            if(datos.status == "ok") {
                $('#alertTypeCol').addClass('alert');
                $('#alertTypeCol').addClass('alert-info');
                $message = "<p class='margin-0'>La obra <b>'"+ titleCol +"'</b> ha sido eliminada de tu colección.</p>"

                $("#resultadoCollections div[data-idcollection=" + idTrash + "]").css("opacity",".25");
                $("#resultadoCollections div[data-idcollection=" + idTrash + "] .date").css("display","none");
            };

            console.log("Mensaje: " + $message);
            $('#msgAlertColProf').html($message);
            $('#alertMsgColProfile').css("display","inherit");            
        },
        error: function(datos) {
            $message = "Error en el proceso :(";
            console.log("Resultado: " + $message);
            console.log(titleCol);
        }
        }).done(function() {
            //console.log("Listo!!");
        });        
    });    


    // Trash Blog -----------------------------------------------------------//
    // Trash AJAX
    $(document).on('click','#resultadoBlogs .btn_trash_blog', function () {
        //e.preventDefault();

        var tr = $(this).parent().parent();
        console.log($(this));
        console.log($(tr).data("idblog"));   
        
        idTrash = $(tr).data("idblog");
        imageName = $(tr).data("imagenote");
        titleBlog = $(tr).data("titleblog");
        console.log("Id: " + idTrash  + " Title: " + titleBlog + " Image: " + imageName);

        //=== AJAX
        $.ajax({
        type: "POST",
        data: {trash: idTrash, name: imageName},
        url: $baseURL + "index.php/blog/delete_reg_blog",
        dataType: "json",
        success: function(datos) {
            console.log('success!');
            console.log(datos);
            console.log(titleBlog);

            if(datos.status == "ok") {
                $('#alertTypeBl').addClass('alert');
                $('#alertTypeBl').addClass('alert-info');
                $message = "<p class='margin-0'>La nota <b>'"+ titleBlog +"'</b> ha sido eliminada de tu blog.</p>"

                $("#resultadoBlogs tr[data-idblog=" + idTrash + "]").css("display","none");
            };

            console.log("Mensaje: " + $message);
            $('#msgAlertBlProf').html($message);
            $('#alertMsgBlogProfile').css("display","inherit");            
        },
        error: function(datos) {
            $message = "Error en el proceso :(";
            console.log("Resultado: " + $message);
            console.log(titleBlog);
        }
        }).done(function() {
            //console.log("Listo!!");
        });        
    });    


});


$(function() {
  $("#password_visibility").click(function(){
        var pass_input = document.getElementById("password_input");
        if (pass_input.type === "password") {
            pass_input.type = "text";
            $(this).removeClass("fa-eye").addClass("fa-eye-slash")
        } else {
            pass_input.type = "password";
            $(this).removeClass("fa-eye-slash").addClass("fa-eye")
        }
   });
});





/*--- BootstrapTable ------------------------------------------------

var $tableBlog = $('#tableBlog');
$tableBlog.bootstrapTable('#tableBlog');

var $tableCol = $('#tableColeccion');
$tableCol.bootstrapTable('#tableColeccion');

var $tableEv = $('#tableEvents');
$tableEv.bootstrapTable('#tableEvents');

*/



