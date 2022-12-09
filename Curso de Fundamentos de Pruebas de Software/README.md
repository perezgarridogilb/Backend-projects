# Curso de Fundamentos de Pruebas de Software
## ¿Qué son las pruebas y por qué deberíamos hacerlas?

- No son parte de la solución.
- No siempre se entrega evidencia al cliente.
- Sin una estructura o especificaciones son difíciles de mantener.
- No hay tiempo, o nadie del equipo hace pruebas.
```
```

### Razones para hacer las pruebas.
- Tenemos un problema o el resultado no es el esperado.
- Costo alto o fuera de presupuesto.
- Implicaciones legales o de estándares tecnológicos.

## Proceso de pruebas del software y los estándares internacionales.
Para el proceso de pruebas es necesario contar con al menos 3 elementos que lograrán cumplir nuestros objetivos:

- **Metodología**: Es donde estableces el criterio o estrategia de cómo se llevaran acabo las pruebas.
- **Recursos**: Si quieres realizar pruebas y no estás preparado, con el tiempo esas carencias se pueden visualizar como defectos.
- **Herramientas**: Nos ayudarán a optimizar nuestro trabajo.

### Pruebas en el ciclo de vida del software
- Hay pruebas desde la concepción de los requisitos hasta su puesta final el producción.
- De acuerdo a un estudio de IBM Systems Sciences Institute, 64% de los errores se producen durante el análisis y diseño.

¿Qué es lo que vamos a revisar durante las pruebas?
- Definir la calidad de producto y la calidad del proceso.
 - Lo que se puede hacer es evaluar los datos de salida del producto que están cumpliendo las especificaciones o evaluar si el proceso de calidad se está siguiendo paso a paso para evitar omitir la información que sea útil y que ayude a cumplir las especificaciones.
  - Definir la falta de calidad.
  - Detectar y corregir la falta de calidad.

### Calidad de software

**Definir la calidad del producto**: Si estas creando el software correctamente.
**Calidad del proceso**: Si alguien de tu equipo no te especifica lo que quieres no vas a poder crear un producto que cubra sus necesidades.

<img width="687" alt="Captura de Pantalla 2022-12-06 a la(s) 8 09 53 p m" src="https://user-images.githubusercontent.com/56992179/206070839-893d8c90-8b85-4432-adb5-b745cf884b20.png">

### Certificaciones, estándares y metodologías para:
- Para individuos
- Para procesos
- Para empresas
- Para servicios/productos = software/hardware
- Para tipo de industrias

### Estándares

ISTQB (International Software Testing Qualifications Board) https://www.istqb.org/
IEEE (Institute of Electrical and Electronics Engineers) https://en.wikipedia.org/wiki/ISO/IEC_29119
TPI (Test Process Improvement) https://www.guru99.com/a-complete-guide-to-test-process-improvement.html

### Ciclo de vida del software

A lo largo del ciclo de vida del software se realizan distintas pruebas para garantizar que este cumpla con los requerimientos para los que fue diseñado y de la misma forma se encuentren **procesos de mejora y optimización** a medida que se desarrolla el software.

- Es necesario hacer pruebas en todas las fases del desarrollo de software ya que un error encontrado en una etapa tardía puede generar costos muy elevados.

- Errores detectados lo antes posible reducen los costos y son mucho más fáciles de corregir.

- El ciclo de vida permite que los errores se detecten lo antes posible y por lo tanto, permite a los desarrolladores concentrarse en la calidad del software, en los plazos de implementación y en los costos asociados.

El ciclo de vida básico de un software consta de los siguientes procedimientos:

![Diagrama ciclo de vida del software](https://user-images.githubusercontent.com/56992179/206592003-80537a3e-dcef-49a0-a0df-94351fe8ea25.jpg)

1. **Definición de objetivos**
En esta fase se define el alcance general del software y su papel dentro de una estrategia global o dentro del ecosistema que va a funcionar.

2. **Análisis de los requisitos y su viabilidad**
Se trata de recopilar la mayor cantidad de información posible para evaluar la viabilidad del producto, encontrar posibles restricciones y analizar todos los requisitos del cliente.

3. **Diseño**
Alto nivel: Se trata de realizar un diseño básico que valide la arquitectura de la aplicación.
Bajo nivel: Es una definición detallada de la estructura de la aplicación basada en el diseño general.

4. **Programación**
Es la implementación de un lenguaje de programación para crear las funciones definidas durante la etapa de diseño.

5. **Pruebas de verificación**
Aunque en todas las fases anteriores se hacen pruebas en esta fase se cubren: pruebas de componentes, integrales y de sistema.

6. **Prueba beta (o validación)**
Se hace para garantizar que el software cumple con las especificaciones originales o también se hacen las pruebas de aceptación.

7. **Implementación**
Se realiza una prueba del sistema implementado para encontrar posibles fallas en la Implementación.

8. **Mantenimiento**
Se hace para todos los procedimientos correctivos (mantenimiento correctivo) y a las actualizaciones secundarias del software (mantenimiento continuo), junto con la actualización de las pruebas.

###

Si hacemos las pruebas durante cada fase del ciclo de vida del software tendremos al final del ciclo un producto validado y robusto de acuerdo a las necesidades del cliente.

### Proceso de pruebas del software: Calidad y Defectos

Todo lo anterior nos hace preguntarnos: ¿Qué es la calidad?

La calidad es una percepción entre lo deseado, analizado y lo que vamos a entregar. La calidad la define el cliente, si esa persona esta satisfecha con lo entregado hasta ahí llega la calidad.

<img width="684" alt="¿Qué es la calidad?" src="https://user-images.githubusercontent.com/56992179/206592343-bff9627e-3e41-4abd-811f-c5d60ae2fb02.png">

####

*El grado con el que un sistema, competente o proceso cumple con los requisitos especificados y la necesidades o expectativas del cliente o usuario.*

- Los estándares de la IEEE forman parte de la documentación, y si la documentación, no tiene claro y especificado que es lo que quiere el cliente, es ahí donde comienza la cadena de la falta de comunicación, y la falta de entendimiento del producto.

<img width="686" alt="Captura de Pantalla 2022-12-08 a la(s) 6 04 38 p m" src="https://user-images.githubusercontent.com/56992179/206592347-d1c509cf-6612-4a70-b79b-247b972fefe5.png">

#### Proceso de pruebas de software (Ciclo de vida del software)

- Si durante el Análisis, Diseño, Codificación, Pruebas, Validación, Mantenimiento o la liberación del software se sigue **sin entender qué quiere el cliente**, en cada una de las fases va a empezar a haber defectos.

- Las pruebas no sólo están enfocadas a la parte de programar, (muchos esperan, hasta que yo ya tenga algo hecho tú puedes probar), no es así, la fase de análisis, aún sin la información del cliente, pero entendiendo qué es lo que quiere, uno puede hacer un benchmarking con otras empresas o con otros productos, y entonces permitan ir definiendo el producto deseado.

#### Planificación estándar

<img width="683" alt="Captura de Pantalla 2022-12-08 a la(s) 6 12 18 p m" src="https://user-images.githubusercontent.com/56992179/206593211-7c0df995-a03d-41d9-a554-e5d979543ede.png">

#### Verificación y Validación

- Cuando uno va a través de estas etapas, se va revisando que la documentación cumpla para todos los del equipo, alguién se tiene que dar a la tarea para revisar cada uno de estos puntos. 

- También hay reglas de negocio: Hay que hacer las pruebas para revisar esos requerimientos, también entonces hay que hacer pruebas a la documentación.
 - Para que esta documentación sea específica, sea clara, sea concreta para todos los demás.

**Verificación**: Es ir en cada una de las etapas revisando que se cumpla que es lo que el cliente pidió.

**Validación**: Es al final, antes de entregar al cliente, se valida que en el conjunto de todos los requerimientos, lo que se entrega, cumple.

<img width="684" alt="Captura de Pantalla 2022-12-08 a la(s) 6 11 54 p m" src="https://user-images.githubusercontent.com/56992179/206593233-d4d62855-d5a6-425d-82be-fe186ad3d0f2.png">

####

**Anomalía**
Cualquier insatisfactoria condición (únicas).

**Defecto**
No desempeña funciones (una y otra vez).

**Fallo**
Incapacidad dentro de márgenes (dado el contexto del uso).

**Error**
Acción humana incorrecta (desarrollo o usuario).

**Problema**
Dificultad o incertidumbre experimentada por una o más personas, como resultado de un encuentro insatisfactorio con el sistema usado.

**Ejemplo**

- Se deben interpretar bien los datos.

** El **error** humano cometido inyecta un defecto en el software que, ocasionalmente, se observa como una **anomalía** a causa de un comportamiento incorrecto, no acorde a lo especificado, que finalmente provoca el **fallo** del sistema software.

- Normalmente el tester busca esos defectos, muchos basan la calidad en la cantidad de defectos que se encuentran.
 - Empezar a creer que los defectos no es la primera tarea, lo que hay que resolver realmente es el error humano, el error humano se da por falta de mejores practicas, por distracciones, por que la gente no está bien preparada, y bueno, así es, somos humanos, no somos perfectos.

*Ya entendimos que es necesario definir un proceso que asegure un buen desarrollo del producto, que los estándares o herramientas implementadas deben ayudar a cubrir las métricas definidas para entonces evaluar si el producto tiene el porcentaje o grado de calidad esperado.*