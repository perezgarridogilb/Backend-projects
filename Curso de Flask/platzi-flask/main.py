import unittest
from flask import request, make_response, redirect, render_template, session, url_for, flash
from flask_login import login_required, current_user
from app import create_app
from app.forms import LoginForm
from app.firestore_service import get_users, get_todos

app = create_app()

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

@app.route('/hello', methods=['GET'])
@login_required
def hello():
    user_ip = session.get('user_ip')
    username = current_user.id

    context = {
        'user_ip': user_ip,
        'todos': get_todos(user_id=username),
        'username': username
    }

    return render_template('hello.html', **context)
