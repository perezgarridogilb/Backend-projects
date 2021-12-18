#Herencia copi paste
#Polimorfismo edit copy paste
#La habilidad de tomar varias formas 

class Persona:

	def __init__(self, nombre):
		self.nombre = nombre

	def avanza(self):
		print('Ando caminando')

class Ciclista(Persona):

	def __init__(self, nombre):
		super().__init__(nombre)

	def avanza(self):
		print('Ando moviéndome en mi bicicleta')

def main():
	persona = Persona('David')
	persona.avanza()

	ciclista = Ciclista('Daniel')
	ciclista.avanza()

if __name__ = '__main__':
	main()
