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

def get_user(user_id):
    return db.collection('users').document(user_id).get()

def user_put(user_data):
    user_reference = db.collection('users').document(user_data.username)
    # Este recibe un diccionario que solamente va a tener el password
    user_reference.set({'password': user_data.password})

"""
Utilizamos colecciones, documentos y adentro de los documentos tenemos colecciones
"""
def get_todos(user_id):
    return db.collection('users').document(user_id).collection('todos').get()

def put_todo(user_id, description):
    todos_collection_reference = db.collection('users').document(user_id).collection('todos')
    """
    Vamos a decirle a la base de datos que en esta referencia de la colección
    agregue un nuevo documento con un random id
    """
    todos_collection_reference.add({'description': description, 'done':False })
    
def delete_todo(user_id, todo_id):
    todo_ref = _get_todo_ref(user_id, todo_id)
    todo_ref.delete()
    # todo_reference = db.collection('users').document(user_id).collection('todos').document(todo_id)

def update_todo(user_id, todo_id, done):
    todo_done = not bool(done)
    todo_ref = _get_todo_ref(user_id, todo_id)
    todo_ref.update({'done': todo_done})


def _get_todo_ref(user_id, todo_id):
    return db.document('users/{}/todos/{}'.format(user_id, todo_id))
    