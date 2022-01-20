#Python (Para el tipado estatico de este dato)
from importlib.resources import path
from typing import Optional
from enum import Enum

#Pydantic
from pydantic import BaseModel
from pydantic import Field

#FastAPI
from fastapi import FastAPI
# El modulo status nos permite acceder a los diferentes estados HTTP
# Para poder indicarlos en nuestras Path Operations
from fastapi import status
#Decir explícitamente que un parámetro que me esta llegando es del tipo Body
from fastapi import Body, Query, Path, Form
from starlette.types import Message

app = FastAPI()

#Models (Hereda de BaseModel)

class HairColor(Enum):
    white = "white"
    brown = "brown"
    black = "black"
    blonde = "blonde"
    red = "red"

class Location(BaseModel):
    city: str
    state: str
    country: str 
    
class PersonBase(BaseModel):
    firs_name: str = Field(
        ..., 
        min_lenght=1,
        max_lenght=50,
        example="Miguel"
        )
    last_name: str = Field(
        ..., 
        min_lenght=1,
        max_lenght=50,
        example="Torres"
        )
    age: int = Field(
        ...,
        gt=0,
        le=115,
        example=25
    )

    """Esto no es tan importante, por eso eso es opcional, en base de datos es null, en python es none"""
    """Hair color: definir lo que ya definimos"""
    hair_color: Optional[HairColor] = Field(default=None, example="black")
    is_married: Optional[bool] = Field(default=None, example=False)

class Person(PersonBase):

    password: str = Field(..., min_length=8)

#    class Config:
#        schema_extra = {
#            # Igual a Json / Diccionario | Swagger UI requiere que se llame "example".
#            "example": {
#                "first_name": "Facunado",
#                "last_name": "Garcia Martoni",
#                "age": 21,
#                "hair_color": "blonde",
#                "is_married": False
#            }
#        }

# Hereda de base model por que es un modelo de Pydantic

class PersonOut(PersonBase):
    pass

class LoginOut(BaseModel):
    username: str = Field(..., max_length=20, example="miguel2021")
    message: str = Field(default="Login Succesfully!")


@app.get(
    path="/", 
    status_code=status.HTTP_200_OK)
def home():
    return {"Hello": "World"}

# Request and Response Body

@app.post(
    path="/person/new", 
    response_model=PersonOut,
    status_code=status.HTTP_201_CREATED
    )
# El triple punto significa que el parámetro Request Body es obligatorio
def create_person(person: Person = Body(...)):
    return person

# Validaciones: Query Parameters

@app.get(
    path="/person/detail",
    status_code=status.HTTP_200_OK
    )
def show_person(
    name: Optional[str] = Query(None, 
    min_length=1, 
    max_length=50,
    title="Person Name",
    description="This is the person name. It's between 1 and 50 characteres",
    example="Rocío"
    ),
    age: str = Query(
        ...,
        title="Person Age",
        description="This is the person age. It's required",
        example=23
    )
): 
    return {name: age} 

# Validaciones: Path Parameters

@app.get("/person/detail/{person_id}")
def show_person(
    person_id: int = Path(..., 
    gt=0, 
    title="Person Id",
    description="This is the person Id. It's between 0 and more characteres",
    example=123
    )
):
    return{person_id: "It exists!"}

# Validaciones: Request Body
# Location: Queremos enviar (combinar ¿?) dos Json y lo hacemos de manera explícita

@app.put("/person/{person_id}")
def update_person(
    person_id: int = Path(
        ...,
        title="Person ID",
        description="This is person ID",
        gt=0
    ),
    person: Person = Body(...),
    # location: Location = Body(...)
):
    # results = person.dict()
    # results.update(location.dict())
    return person

@app.post(
    path="/login",
    response_model=LoginOut,
    status_code=status.HTTP_200_OK
)

# Form nos permite indicar que un parámetro dentro de una path op. func. viene de un formulario
def login(username : str = Form(...), password: str = Form(...)):
    """
    1.-Tomar esta clase
    2.-Inicializar el objeto (que va a ser un modelo de pydantic)
    3.-Ese modelo de pydantic si se puede convertir a diccionario
    4.-Ese diccionario si se puede convertir a json
    5.-Por lo tanto debería funcionar
    """ 
    return LoginOut(username=username)