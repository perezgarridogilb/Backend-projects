from flask import render_template, session, redirect, flash, url_for
from flask_login import login_user, login_required, logout_user

from app.forms import LoginForm

from . import auth
from app.firestore_service import get_user
from app.models import UserModel, UserData


@auth.route('/login', methods=['GET', 'POST'])
def login():
    login_form = LoginForm()
    context = {
        'login_form': login_form
    }

    # Esta ruta va a detectar cuando estás mandando un POST y va a validar la forma,
    # De esta forma GET es el template, POST redirect a inicio.html
    if login_form.validate_on_submit():
        # Si es válido obtenemos el username
        username = login_form.username.data
        # Vamos a guardar este username en la sesión
        password = login_form.password.data
        
        user_doc = get_user(username)
        
        if user_doc.to_dict() is not None:
            password_from_db = user_doc.to_dict()['password']
            
            if password == password_from_db:
                user_data = UserData(username, password)
                user = UserModel(user_data)
                
                login_user(user)
                
                flash('Bienvenido de nuevo')
                
                redirect(url_for('hello'))
                
            else:
                flash('La información no coincide')
                
        else:
            flash('El usuario no existe')
        
        return redirect(url_for('index'))

    return render_template('login.html', **context)

@auth.route('logout')
@login_required
def logout():
    logout_user()
    flash('Regresa pronto')
    return redirect(url_for('auth.login'))
