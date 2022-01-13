import firebase_admin
from firebase_admin import credentials
from firebase_admin import firestore

credential = credentials.ApplicationDefault()
firebase_admin.initialize_app(credential)

""" 
Creamos una instancia de firestore, un cliente de firestore 
para poder comunicarnos con la base de datos
""" 
db = firestore.client()

def get_users():
    return db.collection('users').get()

"""
Utilizamos colecciones, documentos y adentro de los documentos tenemos colecciones
"""
def get_todos(user_id):
    return db.collection('users').document(user_id).collection('todos').get()