from flask import request, make_response, redirect, render_template, session, url_for, flash
import unittest
from app import create_app
from app.forms import LoginForm

app = create_app()

todos = ['Comprar café', 'Enviar solicitud de compra', 'Entregar video a productor']

# Command cli unitest: Para hacer los tests    
@app.cli.command()
def test():
    # Todo lo que encuentre en tests
    tests = unittest.TestLoader().discover('tests')
    # Lo ejecuta  
    unittest.TextTestRunner().run(tests)

@app.errorhandler(404)
def not_found(error):
    # Le pasamos en el contexto el error para poderlo desplegar
    return render_template('404.html', error=error)

@app.route('/')
def index():
    user_ip = request.remote_addr
    
    response = make_response(redirect('/hello'))
    session['user_ip'] = user_ip

    return response

@app.route('/hello', methods=['GET', 'POST'])
def hello():
    user_ip = session.get('user_ip')
    login_form = LoginForm()
    username = session.get('username')
    context = {
        'user_ip': user_ip,
        'todos': todos,
        'login_form': login_form,
        'username': username
    }
    
    # Esta ruta va a detectar cuando estás mandando un POST y va a validar la forma,
    # De esta forma GET es el template, POST redirect a inicio.html
    if login_form.validate_on_submit():
        # Si es válido obtenemos el username
        username = login_form.username.data
        # Vamos a guardar este username en la sesión
        session['username'] = username
        
        flash('Nombre de usuario registrado con éxito!')
        
        return redirect(url_for('index'))

    # Expandir variables automáticamente
    return render_template('hello.html', **context)