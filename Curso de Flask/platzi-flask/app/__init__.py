from flask import Flask
from flask_bootstrap import Bootstrap
from .config import Config

def create_app():
    app = Flask(__name__)
    bootstrap = Bootstrap(app)
    
    # Esto viene a querer encriptar el IP del usuario y usar "sesion()" function
    # Es un diccionario que tiene llaves y valores
    # En lugar de guardarlo en la cookie
    
    # Este es el lugar en el que vamos a configurar la llave secreta
    app.config.from_object(Config)
    
    return app