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
            rules: rules,
            messages: messages,
            submitHandler: function(form) {
                console.log(form);
            }
        });
    };

    let formContact = function () {

        let formContact = $("#formContact");

        let rules = {
            nome: {
                required: true
            },

            email: {
                required: true,
                email: true
            },

            mensagem: {
                required: true,
            }
        };

        let messages = {
            nome: {
                required: "Nome obrigatório!"
            },

            email: {
                required: "Email é obrigatório!",
                email: "Email inválido!"
            },

            mensagem: {
                required: "Informe uma mensagem",
            }
        };

        formContact.validate({
            rules: rules,
            messages: messages,
            submitHandler: function(form) {
                console.log(form);
            }
        })
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
            formNewsletter();
            formContact();
            ancoraMenu();
        }
    };
}();

$(document).ready(function () {
    script.init();
});