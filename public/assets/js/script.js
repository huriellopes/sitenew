const script = function () {

    let WriterTop = function () {
        let app = document.getElementById('texto');

        let typewriter = new Typewriter(app, {
            loop: true
        });

        typewriter.typeString('Bem Vindo!')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Desenvolvimento de Sistemas')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Desenvolvimento de Aplicativos Móveis')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Consultorias Online')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Venha Conhecer nosso trabalho!')
            .start();
    };

    let formNewsletter = function () {

        let formNewsletter = $("#formNewsletter");

        let rules = {
            newsletter: {
                required: true,
                email: true
            }
        };

        let messages = {
            newsletter: {
                required: "O campo newsletter é obrigatório!",
                email: "Email inválido!"
            }
        };

        formNewsletter.validate({
            errorElement: "span",
            rules: rules,
            messages: messages,
            errorPlacement: function (error, element) {
                error.addClass('help-block');

                error.insertAfter(element.parent().find('.input-group'));
            },

            highlight: function (element, errorClass, validClass) {
                $(element).parent('[class*="form-group"]').addClass('is-invalid').removeClass('is-valid');
            },

            unhighlight: function (element, errorClass, validClass) {
                $(element).parent('[class*="form-group"]').addClass('is-valid').removeClass('is-invalid');
            },
            
            submitHandler: function(form) {
                console.log(form);
            }
        });
    };

    let formContact = function () {

        let formContact = $("#formContact");

        let rules = {
            nome: {
                required: true,
                maxlength: 255
            },

            email: {
                required: true,
                email: true
            },

            mensagem: {
                required: true,
                maxlength: 255
            }
        };

        let messages = {
            nome: {
                required: "Nome obrigatório!",
                maxlength: "O nome deve ter no máximo 255 caracteres"
            },

            email: {
                required: "Email é obrigatório!",
                email: "Informe um email válido"
            },

            mensagem: {
                required: "Informe uma mensagem",
                maxlength: "O nome deve ter no máximo 255 caracteres"
            }
        };

        formContact.validate({
            errorElement: "span",
            errorClass: "help-block",
            focusInvalid: true,
            rules: rules,
            messages: messages,
            errorPlacement: function (error, element) {
                error.addClass('help-block');

                error.insertAfter(element);
            },

            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            },

            unhighlight: function (element, errorClass, validClass) {
                $(element).addClass('is-valid').removeClass('is-invalid');
            },

            submitHandler: function(form, e) {
                e.preventDefault();

                $.blockUI({
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: 5,
                        color: '#ffffff'
                    },
                    message: 'Enviando o seu contato, Aguarde!'
                });

                $.ajax({
                    url: formContact.attr('action'),
                    type: 'POST',
                    dataType: 'json',
                    data: formContact.serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                }).done((response) => {
                    if (response.code === 200) {
                        
                        setTimeout($.unblockUI(), 1000);
                        
                        formContact.trigger('reset');
                        
                        $("#nome").removeClass('is-valid');
                        $("#email").removeClass('is-valid');
                        $("#mensagem").removeClass('is-valid');

                        PNotify.success({
                            title: "Ótimo!",
                            text: response.message,
                            delay: 2000
                        });
                    }
                }).fail((response) => {
                    console.log(response);
                    if (response.code === 400) {
                        setTimeout($.unblockUI(), 1000);
                        PNotify.error({
                            title: "Ótimo!",
                            text: response.message,
                            delay: 2000
                        });
                    }
                });
            }
        });

        $.validator.addMethod('emailValido', function (value, element) {
            let pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
            return pattern.text(value);
        }, "Informe um email válido");
    };

    let ancoraMenu = function() {
        // Scroll Suave
        $('.navbar .navbar-nav a').on("click", function (e) {
	        e.preventDefault();

	        var id = $(this).attr('href'),
		    targetOffset = $(id).offset().top,
		    menuHeight = $('.navbar').innerHeight();

	        $('html, body').animate({
		        scrollTop: targetOffset - menuHeight
	        }, 1000);
        });
    };

    return {
        init: function () {
            WriterTop();
            //formNewsletter();
            formContact();
            ancoraMenu();
        }
    };
}();

$(document).ready(function () {
    script.init();
});