#Python (Para el tipado estatico de este dato)
from typing import Optional

#Pydantic
from pydantic import BaseModel

#FastAPI
from fastapi import FastAPI
#Decir explícitamente que un parámetro que me esta llegando es del tipo Body
from fastapi import Body, Query, Path

app = FastAPI()

#Models (Hereda de BaseModel)

class Location(BaseModel):
    city: str
    state: str
    country: str 

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
    name: Optional[str] = Query(None, 
    min_length=1, 
    max_length=50,
    title="Person Name",
    description="This is the person name. It's between 1 and 50 characteres"
    ),
    age: str = Query(
        ...,
        title="Person Age",
        description="This is the person age. It's required"
    )
): 
    return {name: age} 

# Validaciones: Path Parameters

@app.get("/person/detail/{person_id}")
def show_person(
    person_id: int = Path(..., 
    gt=0, 
    title="Person Id",
    description="This is the person Id. It's between 0 and more characteres"
    )
):
    return{person_id: "It exists!"}

# Validaciones: Request Body
# Location: Queremos enviar (combinar ¿?) dos Json y lo hacemos de manera explícita

@app.put("/person/{person_id")
def update_person(
    person_id: int = Path(
        ...,
        title="Person ID",
        description="This is person ID",
        gt=0
    ),
    person: Person = Body(...),
    location: Location = Body(...)
):
    results = person.dict()
    results.update(location.dict())
    return results