from flask_testing import TestCase
# La de arriba fue una clase que vamos a extender
from main import app
from flask import current_app, url_for

class MainTest(TestCase):
    def create_app(self):
        app.config['TESTING'] = True
        # Esto dice que no use el token que rendereó: En el que pueden inyectar scripts
        app.config['WTF_CSRF_ENABLED'] = False
        
        return app
        
    def test_app_exists(self):
        # Enviamos esta aplicación como parámetros: IsNone 
        self.assertIsNotNone(current_app)
    
    def test_app_in_test_mode(self):
        # Verificamos que esta en Test
        self.assertTrue(current_app.config['TESTING'])
        
    def test_index_redirects(self):
        # Probamos que redirige y nos esta redirigiendo a Hello
        response = self.client.get(url_for('index'))
        
        self.assertRedirects(response, url_for('hello'))
    
    def test_hello_get(self):
        # Probar que "hello" nos regresa 200 cuando hacemos un GET
        response = self.client.get(url_for('hello'))
        
        self.assert200(response)
        
    def test_hello_post(self):
        # Verificamos que nos redirige donde tenemos que ser redirigidos
        fake_form = {
            'username': 'fake',
            'password': 'fake-password'
        }
        response = self.client.post(url_for('hello'), data=fake_form)
        
        self.assertRedirects(response, url_for('index'))
        
