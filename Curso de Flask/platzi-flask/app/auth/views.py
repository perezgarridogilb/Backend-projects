from flask import render_template, session, redirect, flash, url_for

from app.forms import LoginForm

from . import auth


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
        session['username'] = username
        
        flash('Nombre de usuario registrado con éxito!')
        
        return redirect(url_for('index'))

    return render_template('login.html', **context)


