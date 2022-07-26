/// <reference types="cypress" />

describe('Prueba el formulario de contact', () => {
    it('Prueba la pagina de contacto y el envio de Email', () =>{
        cy.visit('/contacto')

        cy.get('[data-cy="heading-contacto"]').should('exist')
        cy.get('[data-cy="heading-contacto"]').invoke('text').should('equal','Contacto')
        cy.get('[data-cy="heading-contacto"]').invoke('text').should('not.equal','Formulario Contacto')

        cy.get('[data-cy="formulario-contacto"]').should('exist')
        cy.get('[data-cy="formulario-contacto"]').invoke('text').should('equal','Llene el Formulario de Contacto')
        cy.get('[data-cy="formulario-contacto"]').invoke('text').should('not.equal','Formulario Contacto')

    })

    it('LLena los Campos del Fomrulario', () =>{

        cy.get('[data-cy="input-nombre"]').type('Leonel')
        cy.get('[data-cy="input-mensaje"]').type('Deseo comprar un cas muy hermosa serca de la playa ')
        cy.get('[data-cy="input-opciones"]').select('Compra')
        cy.get('[ data-cy="forma-contacto"]').eq(1).check()

        cy.wait(3000)
        cy.get('[ data-cy="forma-contacto"]').eq(0).check()

        cy.get('[data-cy="input-telefono"]').type('3122215315')
        cy.get('[data-cy="input-fecha"]').type('2022-03-30')
        cy.get('[data-cy="input-hora"]').type('12:30')

        cy.get('[data-cy="form-formulario"]').submit()

        cy.get('[data-cy="elerta-formulario"]').should('exist')
        cy.get('[data-cy="elerta-formulario"]').invoke('text').should('equal', 'Mensaje enviado Correctamente')
        cy.get('[data-cy="elerta-formulario"]').should('have.class', 'alerta').and('have.class', 'exito').and('not.have.class','error')
        
    })
})  