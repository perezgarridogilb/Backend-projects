#Python (Para el tipado estatico de este dato)
from typing import Optional

#Pydantic
from pydantic import BaseModel

#FastAPI
from fastapi import FastAPI
#Decir explícitamente que un parámetro que me esta llegando es del tipo Body
from fastapi import Body, Query

app = FastAPI()

#Models (Hereda de BaseModel)
class Person(BaseModel):
    firs_name: str
    last_name: str
    age: int

    """Esto no es tan importante, por eso eso es opcional, en base de datos es null, en python es none"""
    hair_color: Optional[str] = None
    is_married: Optional[bool] = None

@app.get("/")

def home():
    return {"Hello": "World"}

# Request and Response Body

@app.post("/person/new")
# El triple punto significa que el parámetro Request Body es obligatorio
def create_person(person: Person = Body(...)):
    return person

# Validaciones: Query Parameters

@app.get("/person/detail")
def show_person(
    name: Optional[str] = Query(None, min_length=1, max_length=50),
    age: str = Query(...)
): 
    return {name: age} 