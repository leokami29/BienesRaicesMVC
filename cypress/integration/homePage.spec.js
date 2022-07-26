/// <reference types="cypress" />


describe('Carga la pagina Principla', () => {

    it('Prueba el header de la Pagina Principal', () =>{

        cy.visit('/');

        cy.get('[data-cy="heading-sitio"]').should('exist');
        cy.get('[data-cy="heading-sitio"]').invoke('text').should('equal', 'Venta de Casas y Departamentos Exclusivos de Lujo');
        cy.get('[data-cy="heading-sitio"]').invoke('text').should('not.equal', 'Bienes Raices');

    })

    it('Prueba el Bolque de los iconos Principales', () =>{

        cy.get('[data-cy="heading-nosotros"]').should('exist')
        cy.get('[data-cy="heading-nosotros"]').should('have.prop', 'tagName').should('equal', 'H2');
        

        //Selecciona los iconos
        cy.get('[data-cy="icono-nosotros"]').should('exist');
        cy.get('[data-cy="icono-nosotros"]').find('.icono').should('have.length', 3);
        cy.get('[data-cy="icono-nosotros"]').find('.icono').should('not.have.length', 4);
    })

    it('Prueba La Seccion de Propiedades', () =>{

        //Debe haber 3 propiedades
        cy.get('[data-cy="anuncio"]').should('have.length', 3);
        cy.get('[data-cy="anuncio"]').should('not.have.length', 5);
        

        //Probar enlace de las propiedades
        cy.get('[data-cy="enlace-propiedad"]').should('have.class', 'boton__amarillo__block');
        cy.get('[data-cy="enlace-propiedad"]').should('not.have.class', 'boton__amarillo');
        cy.get('[data-cy="enlace-propiedad"]').first().invoke('text').should('equal', 'Ver Propiedad');

        //probar el enlcae a una propiedad
        cy.get('[data-cy="enlace-propiedad"]').first().click();
        cy.get('[data-cy="titulo-propiedad"]').should('exist');

        // cy.wait(1000);
        cy.go('back');

    })

    it('Prueba el Routing hacia todas las Propiedades', () =>{

        cy.get('[data-cy="todas-propiedades"]').should('exist');
        cy.get('[data-cy="todas-propiedades"]').should('have.class', 'boton__verde');
        cy.get('[data-cy="todas-propiedades"]').should('not.have.class', 'boton__amarillo__block');
        cy.get('[data-cy="todas-propiedades"]').invoke('attr', 'href').should('equal', '/propiedades')

        cy.get('[data-cy="todas-propiedades"]').click()
        cy.get('[data-cy="heading-proppiedades"]').invoke('text').should('equal', 'Casas y Departamentos en Ventas')

        // cy.wait(1000);
        cy.go('back');

    })

    it('prueba el Bolque de contacto', () =>{

        cy.get('[data-cy="iamgen-contacto"]').should('exist');
        cy.get('[data-cy="iamgen-contacto"]').find('h2').invoke('text').should('equal', 'Encuentra la casa de tus sueños')
        cy.get('[data-cy="iamgen-contacto"]').find('p').invoke('text').should('equal', '¡Llena el formulario de contacto y un asesor se pondrá en contacto contigo en un momento!')

        cy.get('[data-cy="iamgen-contacto"]').find('a').invoke('attr', 'href')
            .then( href => {
                cy.visit(href)
            })
        cy.get('[data-cy="heading-contacto"]').should('exist');
        
        // cy.wait(1000);
        cy.visit('/');

    })
    it('prueba los Testimoniales y el Blog', () =>{

        cy.get('[data-cy="Blog"]').should('exist');
        cy.get('[data-cy="Blog"]').find('h3').invoke('text').should('equal', 'Nuestro Blog');
        cy.get('[data-cy="Blog"]').find('h3').invoke('text').should('not.equal', ' Blog');
        cy.get('[data-cy="Blog"]').find('img').should('have.length', '2')

        cy.get('[data-cy="Testimoniales"]').should('exist');
        cy.get('[data-cy="Testimoniales"]').find('h3').invoke('text').should('equal', 'Testimoniales');
        cy.get('[data-cy="Testimoniales"]').find('h3').invoke('text').should('not.equal', 'Nuestro Testimoniales');
    })


})