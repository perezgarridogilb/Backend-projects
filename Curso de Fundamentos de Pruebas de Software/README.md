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

<img width="686" alt="Captura de Pantalla 2022-12-08 a la(s) 6 04 38 p m" src="https://user-images.githubusercontent.com/56992179/206592347-d1c509cf-6612-4a70-b79b-247b972fefe5.png">

####

*El grado con el que un sistema, competente o proceso cumple con los requisitos especificados y la necesidades o expectativas del cliente o usuario.* **Es como la define la IEEE**


<img width="684" alt="¿Qué es la calidad?" src="https://user-images.githubusercontent.com/56992179/206592343-bff9627e-3e41-4abd-811f-c5d60ae2fb02.png">

- Los estándares de la IEEE forman parte de la documentación, y si la documentación, no tiene claro y especificado qué es lo que quiere el cliente, es de ahí donde comienza la cadena de la falta de comunicación, y la falta de entendimiento del producto.

#### Proceso de pruebas de software (Ciclo de vida del software)

<img width="683" alt="Captura de Pantalla 2022-12-08 a la(s) 6 12 18 p m" src="https://user-images.githubusercontent.com/56992179/206593211-7c0df995-a03d-41d9-a554-e5d979543ede.png">

- Si durante el Análisis, Diseño, Codificación, Pruebas, Validación, Mantenimiento o la liberación del software se sigue **sin entender qué quiere el cliente**, en cada una de las fases va a empezar a haber defectos.

- Las pruebas no sólo están enfocadas a la parte de programar, (muchos esperan, hasta que yo ya tenga algo hecho tú puedes probar), no es así, la fase de análisis, aún sin la información del cliente, pero entendiendo qué es lo que quiere, uno puede hacer un benchmarking con otras empresas o con otros productos, y entonces permitan ir definiendo el producto deseado.

#### Planificación estándar

- Hay un momento para tener los requisitos, para hacer el diseño (ya sea de alto nivel como el login a grandes razgos o detallado como la infraestructura, cómo viajan los datos, lo cual es bajo nivel).

- Codificación, Integración, y Pruebas.
 - Hablaremos cuánto tiempo toma cada una de estas etapas (el tiempo que se extiende cada una de estas etapas).

<img width="684" alt="Captura de Pantalla 2022-12-08 a la(s) 6 11 54 p m" src="https://user-images.githubusercontent.com/56992179/206593233-d4d62855-d5a6-425d-82be-fe186ad3d0f2.png">

#### Verificación y Validación

<img width="683" alt="Verificación y Validación" src="https://user-images.githubusercontent.com/56992179/210323787-a343f799-1d2d-4259-99e0-15357c05d3ed.png">

- Cuando uno va a través de estas etapas, se va revisando que la documentación cumpla para todos los del equipo, alguién se tiene que dar a la tarea para revisar cada uno de estos puntos. 

- También hay reglas de negocio: Hay que hacer las pruebas para revisar esos requerimientos, también entonces hay que hacer pruebas a la documentación.
 - Para que esta documentación sea específica, sea clara, sea concreta para todos los demás.

**Verificación**: Es ir en cada una de las etapas revisando que se cumpla que es lo que el cliente pidió (en el momento que ocurre).

**Validación**: Es al final, antes de entregar al cliente, se valida que en el conjunto de todos los requerimientos, lo que se entrega, cumple (al final de todo el proceso).

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

## Principios del testing moderno (o ágil)
### 7 Principios del testing moderno
*Los testers podemos comenzar a pasar de ser los dueños de las pruebas o la calidad, a ser los embajadores de la calidad del producto.*
### 1. Nuestro prioridad es mejorar el negocio
- Lo que se está haciendo es mejorar el negocio. El producto es lo que permite funcionar al negocio. Si el producto no se vende o el cliente no lo acepta, se cierra el proyecto, se cierra la empresa o uno es despedido. *No por el mal trabajo, sino porque no hay presupuesto para que se lleve a cabo*

### 2. Nosotros aceleramos al equipo, usamos modelos como Lean Thinking y Teoría de las Restricciones para ayudar a identificar, priorizar y mitigar cuellos de botella en el sistema.
- Regularmente cuando queremos hacer algo lo queremos hacer perfecto, pero perfecto significa hacer mucho, incluso se cree que en el desarrollo de software se van a liberar diferentes versiones, con un proceso de iteraciones, se debe tener pensamientos, ideas, construir a través de procesos cortos, que permitan encontrar de forma más rápida los defectos, y en lugar de construir un software enorme, mejor empecemos a construir módulos de manera ágil y de esa forma, en lugar de que con el tiempo ya se tenga un producto terminado, y en ese punto se hagan las pruebas, pues simplemente errores de diseño, de arquitectura, cosas que no se habían considerado, los equipos deben ser lo suficientemente modulares, para que puedan trabajar, y hacer las pruebas de la manera más pequeña, a la parte más integral.

### 3. Somos la fuerza para la mejora continua, ayudando al equipo a **adaptarse y optimizar** para tener éxito, en lugar de proporcionar una red de seguridad para detectar fallas.
- Tener una distribución que nos permita manejar el riesgo del software.
- Enfocar las pruebas por cada una de las fases.
- Sin dejar todo al inicio o todo al final, sino hay que tener una distribución que nos permita manejar el riesgo del software.

### 4. Nos preocupamos profundamente acerca de la cultura de calidad en el equipo, y asesoramos, lideramos y nutrimos el equipo para llevarlos a una cultura de calidad más madura.
- Desde el inicio la calidad es la prioridad número uno, tener en cada una de sus aréas de trabajo, conceptos y mejores prácticas para que no se les olvide hacer un buen producto, de tener cuestiones muy técnicas, a tener una visión general de toda la empresa, y además dominar temas asociados a cada una de las aréas, no sólo desarrollo, sino también diseño, documentación, análisis de requerimientos, documentación técnica que se entrega al final al usuario (como guías de ayuda), el rol del tester es acompañar en todo el proceso y la política la calidad del producto.

### 5. Nosotros creemos que el cliente es el único capaz de **juzgar y evaluar** la calidad de nuestro producto
- La calidad del producto la determina el cliente, contractualmente entregando versiones funcionando, para la siguiente entrega entregar las partes que complementan el software, y en cada una de esas etapas el cliente se siente satisfecho.

### 6. Nosotros usamos datos de manera extensa y profunda para entender los casos de uso del cliente y entonces cerrar huecos entre hipótesis del producto e impacto del negocio.
- Muchos de esos errores se pueden empezar a ver solamente cuando los datos de prueba varían en todos los rangos de datos que pueden ser usados.

### 7. Expandimos las habilidades de testing y el conocimiento en **todo el equipo**; entendemos que esto reduce o elimina la necesidad de un especialista dedicado al testing.
- Tener toda la visión del negocio y del producto que nosotros queremos entregar.
- Saber de herramientas que aceleren el trabajo tanto internamente, como la hora de la entrega hacia el cliente.

## Siete principios
- Debe haber alguien que liderié y haga el coatching, y que haga toda la política de calidad, no sólo uno como individuo es reesponsable, **todos son responsables**.

<img width="690" alt="Captura de Pantalla 2023-01-04 a la(s) 3 27 43 p m" src="https://user-images.githubusercontent.com/56992179/210655850-ccda553b-d961-4614-9d91-812a38a591c4.png">

## Especialidades del testing

<img width="688" alt="Captura de Pantalla 2023-01-04 a la(s) 3 58 26 p m" src="https://user-images.githubusercontent.com/56992179/210657995-650bfa38-c443-4fbf-b8c2-42ca67dc99c0.png">

Hay muchas especialidades a la hora de hablar de testing y cada una de ellas tiene diferentes funciones y perspectivas que se incluyen en diferentes fases del proceso.

**Manual tester**: Nos ayuda a definir los casos de pruebas, establecer estrategias (planear y organizar). También ejecuta, pero lleva lo necesario para que **todos** sepan qué hacer.

- Pensamiento lateral, piensa fuera de la caja con una nueva perspectiva, agrega nuevos casos de usos y entiende muy bien al usuario.

**Automation tester**: Se encarga de agilizar, acelerar el trabajo y actividades que nos quitan la oportunidad de encontrar más casos de usos.

- Conoce de programación, no solo de forma básica, debe conocer como crear diseños de frameworks y soluciones. El código crece y las pruebas también, darle ese mantenimiento a las pruebas es un problema común.
- Organiza mejor sus planes, ideas, y estrategias.
- Debe conocer herramientas que le permiten hacer mejor su trabajo (sin caer en tareas repetitivas).

**Security tester**: Encargado para el área de seguridad. Debe ser alguien que aporte valor desde la perspectiva de la seguridad.

- Protocolos, estándares, legalizaciones dependiendo de cada país y marca. Esta enfocado en prever ataques, virus, problemas de seguridad, acceso no autorizado. Profundizar en las técnicas y prácticas de seguridad.

**Data science tester**: Con la manera en que crecen los datos en un proyecto, se necesita a alguien que los analice, agrupe y limpie estos datos.

- Análisis y Limpieza de datos, no omite tener un set de pruebas amplio donde la variedad va a permitir detectar defectos inesperados. Esto puede ser clave para que los resultados no sean falsos positivos

**SDET**: Es la combinacion de un desarrollador que ya sabe hacer pruebas. Con la diferencia de **automatiza y hace uso de herramientas que organizan la operación de la entrega de las pruebas**. Esta persona se asegura de que las pruebas se ejecuten antes de liberar el código.

- El programador ahora sabe hacer pruebas y conoce de herramientas que le permite entregarlas de una manera automatizada.

**DevOps**: Conoce todo lo anterior y domina el conocimiento de automatizar el proceso, se asegura de una entrega continua.

- Una automatización de la operación, Entrega Continua. Donde se entregan de forma más rápida las nuevas versiones.

**QA Engineer**: Quality Assurance. Esta enfocado en el producto y en el proceso.

- Procesos de Calidad

**QE**: Quality Engineer. Es como un coach, acompaña en las politicas de calidad en la empresa o equipo.

- Soluciones de estrategias de calidad.
- Todos son testers, por que el tester enfocado a ello se encarga de las políticas de calidad.

## Presupuesto, Recursos, Tiempo y Actividades Clave

### Testing durante ciclo de vida del desarrollo de software

#### Construcción del Software

- Presupuesto
 - Equipo
 - Infraoestructura
 - Recursos humanos

Una mala planeación de todo lo que cubre el proyecto puede hacer que los costos se incrementen, que decidan cerrar el proyecto o simplemente se tarde más y el cliente decida no terminar de pagar o no llevar el proyecto con el equipo, y siempre buscar alguién más

#### Actividades Clave de pruebas
- Recursos
- Tiempo


#### Análisis
- Suelen ser requerimientos muy generales
- Ejemplo:
 - El usuario puede iniciar sesión
  1. ¿Qué debería hacer?
   - Si se cumple -> mensaje
   - No se cumple -> mensaje
- Tratar de que no se vallan detalles que no están descritas o que almenos se están creyendo de manera implicíta   
<img width="1278" alt="Análisis" src="https://user-images.githubusercontent.com/56992179/211951503-1e3aae46-67f1-4629-8f7d-344c79e24c14.png">

#### Diseño

Lo que buscamos establecer son los criterios visuales de lo que espera ver el cliente.
 - Que hagan un match entre lo que se describió en los requerimientos y entre lo que se espera ver.
 - Ejemplo:
  - El usuario puede iniciar sesión
   - Pantalla móvil
    - Nombre -> ¿Cuántos carácteres?
     - Si pone el nombre correcto. -> mensaje
     - Si pone el nombre incorrecto. -> Número de veces -> mensajes
     - ¿Además de letras puede aceptar simbólos?
    - Apellido
    - Botón enviar

Deberíamos tratar visualizar cómo va lucir al final nuestro producto para que todos estemos deacuerdo, y trabajar codo a codo con el equipo, para que juntos podamos tener una mayor cantidad de ideas de que situaciones pueden pasar cuando el usuario está utilizando una aplicación, una página web o cualquier interfaz con las que interactua con el sistema.   

<img width="1274" alt="Diseño" src="https://user-images.githubusercontent.com/56992179/211951519-88ec210f-d7b5-4e8b-a3b5-7e9caddeefd6.png">

#### Código
- Las pruebas pueden estar enfocadas a lo que se está construyendo.

<img width="1280" alt="Captura de Pantalla 2023-01-11 a la(s) 7 44 47 p m" src="https://user-images.githubusercontent.com/56992179/211956168-918ceedb-3e84-46e4-9990-888abcfee4c8.png">

#### Pruebas
- Requerimientos.
- Mockups.
- Código.
- Con esto reducimos de un 70% - 80% los errores que podrían ocurrir.

Hacer pruebas de aceptación: Es el usuario final

<img width="1280" alt="Pruebas" src="https://user-images.githubusercontent.com/56992179/211951536-37ad54eb-c6e3-4933-b2ab-ef7e35eba308.png">

## Estrategia de pruebas
- Son aquellas que nos permiten donde comenzar, por donde vamos a hacer las pruebas, planearlas, identificarlas. No tener una buena cobertura pudiera acarrearnos problemas con nuestro prestigio.
- Todos los testers, normalmente todo lo que piden, y necesitan saber es "por donde comenzar"

Las estrategias de prueba son aquellas que nos permiten conocer por donde comenzar. Por donde vamos a hacer las pruebas, planearlas, identificarlas. Para saber por donde comenzar podemos hacernos dos preguntas.

- ¿Qué problemas tenemos actualmente?
- ¿Qué problemas debemos evitar?

El software tiene muchos módulos, podíamos probar desde documentación, código, resultados de las pruebas, defectos, etcétera, pero cuando necesitamos resolver un problema de pruebas necesitamos resolver las anteriores preguntas.

Definir la cantidad de pruebas que puede llegar a tener un plan.

### Escenarios y Contextos
Definición de la estrategia de pruebas (escenarios y variables), qué tan complejo es, si se está tratando de migrar, si se está tratando de preveer costos, si lo que queremos hacer es un modelo de trabajo para mejorar el producto, etcétera.

- Seguridad
- Arquitectura
- Perfomance
- Usabilidad
- Escalabilidad

Enlace: app.mindmup.com []para organizar ideas)

Ejemplos para que podamos trabajar y definir una estructura lógica, y que nos muestre la variedad de pruebas que puede llegar a tener un plan

Primer escenario
Estrategia para pruebas de seguridad
- ¿Dónde se nos ocurre que deberíamos hacer pruebas de seguridad?
Antes de entrar en los casos de uso, vamos a entrar en los elementos que conforman esta estrategia
- Plataformas
- Sistemas Operativos
- Accesos
- Datos 
- Reportes

Las pruebas deberían de cubrir los cinco elementos anteriores

Pruebas de seguridad a hacer:

**Plataformas**:
- Dispositivo móvil - Android
- Reloj inteligente

**Dispositivo móvil - Android**
- Internet / sin internet

**Reloj inteligente**
- Conectado / sin conectar

**Accesos**:
- Administrador
- Usuario final
  - Premium
  - Standard

**Reportes (no accesados por todos)**:
- A
- B
- C

Establecer casos de uso o casos de negocio:
- ¿Qué vamos a resolver, qué estamos buscando encontrar?
  - Estableciendo casos de uso y casos de negocio.
  - En la seguridad estamos tomando en cuenta los valores que son más importantes.

<img width="719" alt="Captura de Pantalla 2023-02-06 a la(s) 2 19 18 a m" src="https://user-images.githubusercontent.com/56992179/216920973-f651880b-9526-46d0-a345-ed7da3e9bb16.png">

- ¿Qué problema tenemos? (migración)
  - Vamos a revisar los mismos casos de prueba anteriores, pero en circunstancias diferentes (en este caso mejorar el volumen).
  - Mejorar el volumen, mejorar la velocidad.
  - Nuestras pruebas estan enfocadas al objetivo del negocio.

**Volumen**
Si hicimos nuestra migración y lo que buscamos es que más usuarios, en este caso diez mil usuarios puedan hacer uso de nuestro software, estas son las pruebas principales, sin embargo, estas mismas características deben ser ejecutadas en todos los procesos que lleva el software.
Por que es en este caso, el mismo usuario, se debe poder loggear en diferentes plataformas, pero a la misma cantidad de personas, en este caso van de 500 usuarios a 10,000 usuarios (todos deben tener la misma respuesta del servidor).
- Estrategia, forma de organizar las ideas, lo importante es que funciones, para uno, y para el equipo

<img width="709" alt="Captura de Pantalla 2023-02-06 a la(s) 2 23 20 a m" src="https://user-images.githubusercontent.com/56992179/216921063-e3fd0014-fcc6-4077-89ee-0f396bf1f215.png">

## Testing en desarrollo de software
**Testing**: Es la exploración de una idea, aprender como sucede el flujo, se generan datos, se llenan formularios. Esto genera nuevos resultados. Esto y la exploración de pruebas nunca terminan, siempre hay nuevas formas de conocer cómo el usuario está usando el software
- La primera vez que se empaca es como si estuvieramos haciendo testing, por que es la primera vez que exploramos los objetos que vamos a meter en la maleta.

**Checking**: Es cuando sabes qué esta pasando y te verificas que siga pasando. Como verificar una maleta antes de viajar para asegurarnos que guardamos todo.
- Antes de salir de viaje revisamos un estado de cosas que queremos asegurarnos que siempre vallan ahí, que no se nos haya pasado ninguno de los objetos.
- Nos ayuda a permitirnos organizar, asegurarnos que siempre sucedan las cosas, podemos asegurar está técnica en tres diferentes ocasiones.

## 

- **Sólo se ejecutan si sucede algo**.
  - Cuando se libere nuevo código.
  - O cada vez que libere software.
  - Invariablemente qué libere quiero que se ejecuten todas las pruebas relacionadas al checking.

- Se ejecutan cada que...
  - Se ejecutan cada que... libero nuevo código o software (sería un checking programado).

- Se ejecutan de manera programada.
  - Cuando no se pueden ejecutar todas ellas por disponibilidad de hardware o recursos, no podemos ejecutar permanentemente todas las pruebas, así que algunas de ellas quedan programadas, sería un checking programado.

### Errores comunes que hacemos durante la ejecución

<img width="691" alt="Captura de Pantalla 2023-02-06 a la(s) 10 38 48 p m" src="https://user-images.githubusercontent.com/56992179/217180096-207f0a4d-022d-402c-ae30-d4041e2616b3.png">

- Pruebas duplicadas.
  - No sería lo más eficiente a la hora de estar creando un producto por que consume tiempo.
  - En vez de comunicar al equipo que se está haciendo, muchas veces las pruebas son duplicadas, ya que se está invirtiendo el tiempo que ya alguien más lo está llevando a cabo.

- Pruebas similares.
  - Queremos estar creando pruebas que tienen que ver con el mismo flujo, queremos probrar que se quiere loggear, que se quiere loggear cuando es de otro país, loggear cuando el usuario está usando un correo erróneo, al final de cuenta son las mismas actividades, pero con una finalización diferente.
  - No bien estructuradas, aprobechando el mismo código o scripting, genera, otra vez, más trabajo de ejecución.

- Sin valor agregado
  - Aquellas no asociadas al negocio, al menos no en ese momento (debe hacerse pensando en el negocio), se debe comenzar priorizando y eso va en base al negocio.

- Pruebas caducadas.
  - Parte de la naturaleza del software es que se van aumentando las capacidades, van cambiando de versión, lo mismo pasa cuando se implementa en otras plataformas, las pruebas pudieran estar caducando respecto a la tecnología que es empleada.

Distinguir entre el testing y el checking, nos lleva a distingir entre la correcta automatización, uno de los principales problemas en relación con la automatización es que no hubo un buen plan de pruebas, una buena estrategia, por lo tanto, el código no estuvo correctamente optimizado.

El testing automatizado es un testing repetitivo y automatizado.

- Si se quiere buscar nuevos defectos o mejorar el software tiene que ser através de la exploración de las pruebas manuales, a menos que se tengan otra técnicas de automatización que se pueden ver en otros cursos.

La automatización de pruebas consiste en el uso de **software especial** para controlar la ejecución de pruebas y la comparación entre los resultados obtenidos y los resultados esperados. Sin embargo, se trata de un **checking repetitivo y automatizado**.

### Desventajas del checking mal empleado
Finalmente las empresas deciden ir a la automatización de las pruebas cuando ellos creen que eso va a resolver las pruebas de acumulación de defectos, pero lo que de verdad sucede, es que las pruebas desde el incio tuvieron una pobre cobertura. 
Por ejemplo se pueden crear 50 casos de uso y automatizarlos, pero, automatizarlos sólo es un checking repetitivo, se tendría que incrementar la cobertura de pruebas siempre que se quiere estar intuyendo nuevos escenarios.

- Pobre cobertura de pruebas.
- Falta de actualización.
  - Conforme se van acumulando más y más pruebas, el labor del tester ya no es estar pruebas a automatización, si no que ya hay que darle mantenimiento a esos scripts que ha creado, por lo tanto, o el equipo crece o las pruebas se ven en riesgo por que ya no se está dedicando el mismo tiempo a la seguridad de la calidad.
- Mal manejo de versiones.
  - Herramientas suficientes, esto es clave, (recursos, metodologías y herramientas), cuando no se sabe usar las herramientas o cuando no se sabe bien cómo está el proceso que eligieron para el desarrollo del software, todo el mundo comienza a crear sus propias versiones como de desarrollo como de pruebas.

### Ventajas checking bien empleado.
- Correr pruebas en paralelo o en múltiples plataformas.
  - Si se tiene un software estable con pruebas estables, entonces se tiene la ventaja de probar de manera paralela en múltiples plataformas.
- Reducción de error humano.
  - Por que si ya se está ejecutando y si por alguna razón se omite alguna prueba, con la cobertura automatizada ya no sucede eso, aveces en equipos por omisión, vuelven a tener defectos, en puntos cruciales o en puntos que ya estaban probados.
- Probar grandes cantidades de datos.
  - Probar con un monton de datos es más fácil por medio de la automatización o del checking, por que finalmente sólo se va a cubrir un par de flujos del negocio, pero se necesita hacer con esta cantidad de datos y así reducimos el error humano y así lo podemos probar en múltiples plataformas.

Por otro lado, cuando ya queremos hablar de **Integración continua y Liberación Continua**, entonces la **automatización** es la solución definitiva para la eficacia del equipo de desarrollo digital y equipos DevOps.
- Tareas que no cambian.

## Testing ágil
Involucra a todos, no solo en al tester, todos en el equipo son tester. La persona con este rol se asegura de la mayor cobertura de pruebas tomando en cuenta todas las necesidades que cada uno de los miembros del equipo también esta intentando hacer que funcione. El tester tiene que definir si se esta cumpliendo con los requerimientos funciones y los del equipo.

Ejemplo: El diseñador está pensando en la distribución de los elementos, el tester en sus pruebas también debería incluir un testing visual que cubra todos esos requerimientos, por que finalmente, si el diseñador, no alcanza a ver cómo sucedió el diseño final, y el programador no observa esos cambios que pidió o estableció el diseñador, el último en la fase de pruebas es el tester, es el que tiene que definir si está cumpliendo, no sólo con los requerimientos funcionales, con los de cada uno del equipo. 

### Estrategias Ágiles:
Abarcaría no sólo la forma de trabajar, sino la estrategia de llevar el proceso, de documentar, cómo queremos que este proceso valla entregando de manera efectiva al cliente.
- El testing es de ““todo el equipo””.
  - Esto forma parte de los principios del testing moderno.
- El testing puede ser independiente.
  - Todos son testers, pero también podemos tener un tester asignado para hacer pruebas adicionales.
- Integración continua.
  - Cada vez que alguien haga un cambio, este intentando agregar un nuevo servicio, un nuevo módulo, una nueva función, todas las pruebas que corresponden al código ya liberado también se ejecuten de manera automatizada.
Estrategias o frameworks que van en función de cómo van desarrollándose las pruebas respecto al código (como tester se va a probar el código hasta que todas las pruebas pasen, empezamos a definir el producto en base a las pruebas que deberían ser cubiertas con el código):  
- Testing guiado por pruebas (Test Driven Development).
- Desarrollo guiado por comportamiento (Behaviour Driven Development).
- Desarrollo guiado por las pruebas de aceptación (Acceptance Test Driven Development).

### Ejemplo (Aplicación Web)

- Sesión de Usuario
  - Nueva característica: El usuario puede agregar foto a su perfil.

- Testing agil: Las pruebas parten de escuchar a todo el equipo y entender los requerimientos de cada uno.
- El tester tiene que aportar su visión y ver cómo va a trabajar para proponer desde el inicio cuáles son las pruebas que el desarrollador y el product manager van a aceptar como criterio de salida para saber que ese código ha sido finalizado y puede ser integrado con las demás partes del software.

Como estrategia de pruebas se usó componentes e integraciones.

![Captura de Pantalla 2023-02-11 a la(s) 11 23 57 p m](https://user-images.githubusercontent.com/56992179/218295278-8ec3d35c-84ad-4e18-8989-5a55868b6a46.jpg)

## Niveles de pruebas
- Pruebas de Componentes
Son aquellas cosas pequeñas que se pueden ver, ya sea cuando se está viendo un video, el botón de siga, de continuar, de pausa o cuando se está en una red social (darle like), sólo con estas acciones ya son componentes.
También hay componentes que son de formularios, formularios como poner el nombre, darle click a un botón, ver una lista, un combo box, todos esos son componentes, por que las pruebas que podemos hacer ahí no tienen que ver con todo el flujo (un nombre que puede contener como mucho 30 carácteres, que sólo se pueden insertar carácteres, que no se puede ir vacío el campo, que no se puede ir vacío el campo siendo que es obligatorio, que no se pueden ingresar números).
  - Sólo este componente tiene varias especificaciones, más adelante se entra a las pruebas dependiendo a la aréa en la que se está.
  - En este caso para entender la dimensión de las pruebas, estamos hablando del componente.
- Pruebas de Integración
Una página, un sistema o una aplicación tiene una serie de componentes que trabajando juntos son un pequeño sistema, cuando tenemos varios sistemas juntos, necesitamos que se integren, un componente podría ser el botón con el que se clickea **comprar**, un sistema sería el **catálogo** de productos que se ofrecen en esa página web, otro sistema puede ser cómo **loggear** el usuario y tener una sesión para que todos los cambios y compras que se hagan se queden **almacenados**.
  - Las pruebas de integración lo que hacen es como del inicio hasta el final de un flujo de negocio todos los componentes se comunican, se integran, cómo entran los datos y salen los datos.
- Pruebas de Sistema
Incluye que se está tomando en cuenta el contexto, no es lo mismo, tener estas mismas pruebas de inicio a final para distintos dispositivos.

- Pruebas de Aceptación
Asegurarnos (con o sin el cliente) que el cliente está teniendo todas las necesidades que solicitó, que debe ser cubierto en ese software, siempre puede existir el error humano incluso desde el análisis de requerimiento

## Tipos de Pruebas
Son las técnicas que vamos a emplear para tratar de encontrar los defectos.
Grupo de actividades específicas que vamos a realizar, esto basado en objetivos.

**Pruebas funcionales**: Es lo que distinguimos de cómo funciona un sistema, qué debe estar haciendo, cómo interactua el usuario con él. El usuario debe poder ingresar datos, verlos, darle click a los botones, ya sea de un formulario, darle siguiente, darle volver, si tiene checkboxes, que pueda funcionar...
- Sen entiende como las Funcionalidades del Sistema como "lo que el sistema hace". 

**Pruebas no-funcionales**: También puede estar experimentando otro tipo de actividades como no ver, o no leer, todas estas características de usabilidad, de accesibilidad, la parte visual y de perfomance están asociadas a las pruebas no funcionales.
- El objetivo de esta es probar "cómo funciona el sistema".

**Pruebas Estructurales (o de caja blanca)**: Ya se tiene definido cómo se va a usar la aplicación, que ya se tiene ese diseño, pero también se necesita asegurar que funcione bien la Base de Datos, que el servidor donde se tiene hospedado el software funcione adecuadamente a las necesidades. Estamos viendo qué hay dentro del software, qué se está armando, las funcionales y no funcionales eran más de caja negra, pudieras no conocer su arquitectura y aún así se pueden probar y tener la experiencia de uso.
- Para poder llevar a cabo estas pruebas, normalmente el tester debe tener conocimientos acerca de la tecnología y el stack que se está empleando.

**Pruebas de manejo de cambios**: Vamos a verificar un software en diferentes **capas**, pero también en diferentes **situaciones**, tal vez después de que se arregló un defecto sea necesario revisar nuevamente el software, ya sea corriendo pruebas de regresión o simplemente se ha implementado un nuevo cambio y es necesario que todo el sistema funciona acorde a lo que se ha cambiado, estas pruebas son de diferentes técnicas, por ejemplo, si estamos haciendo pruebas de regresión e impacta no sólo un componente, sino todo un flujo, tendríamos la combinación de que el nivel de pruebas es de nivel de componente, nivel de sistema, nivel de integración.
- Es probar nuevamente un componente ya probado para verificar que no ha sido impactado por actualizaciones.

## Pruebas estáticas y dinámicas
Se espera que el tester siempre esté ejecutando pruebas, pero muchas veces las **pruebas estáticas** no son consideradas durante el desarrollo porque las pruebas estáticas incluyen que se esté leyendo documentación, analizando el software, comparando, haciendo un planteamiento o incluso diseñando el plan de pruebas.
- **Pruebas dinámicas**: **Las pruebas dinámicas se enfocan** principalmente en comportamientos externos visibles durante la ejecución del software.
- Demuestran en la parte de ejecución cómo está funcionando el software.

- **Pruebas estáticas**: **Las pruebas estáticas** se basan en la examinación manual de los elementos que conforman la construcción del software.
- Examinación manual de documentación, de guías y de todo aquel material que no necesariamente es de ejecución del sotfware.

### ¿Qué son los elementos?
- Contratos, planes, calendario del proyecto, así como su presupuesto.
- El análisis de requerimientos.
- Especificaciones o reglas de negocio
  - Técnicos
  - Seguridad (participa otro tester regularmente)

##

El tester siempre debe estar cuestionando cada vez que encuentre información con la que el desarrollador está construyendo.

El desarrollador asume que toda la información que le proporcionan es la correcta y es la que debe de hacer.

La visión del tester debe portar un análisis crítico entre lo que pide el cliente, entre lo que se puede contruir y entre lo que se está construyendo si todo está siendo desarrollado de manera armoniosa y al final es lo que al final se va a poder entregar a un cliente.

##

**Lo importante es que se tenga la cobertura**:
En las pruebas estáticas y dinámicas muchas veces tenemos información que todavía está en papel, aún no la estamos ejecutando.
  - Ejemplo: Estamos en una junta de equipo discutiendo el nuevo elemento que se va a construir y apenas estamos en la definición...

### ¿Qué son los elementos?
- Las definiciones de 
  - Historias del usuario
  - Criterios de Aceptación
  - Mockups
- El diseño de la arquitectura
  - Versiones e iteraciones dentro de las actualizaciones y especificaciones que recibe un software
- Las pruebas (Testware), puntos de verificación CI
  - Guardar pruebas que se van acumulando, identificadas para reducir el tiempo de donde enfocar el esfuerzo y donde encontrar nuevos defectos (por que ya se tiene el conocimiento de la prioridad o pruebas clave)
- Guías de usuario
  - Conforme va cambiando la versión del software no está actualizada
  - La guia de usuario al entregarla al usuario es la promesa de venta 
  - Se espera que exactamente eso suceda en el software
  - Las guías de usuario deben ser revisadas con regularidad, para estar seguros de que, entre lo que percibe el usuario, entre lo que ve la guía y dentro de lo que se está desarrollando valla todo alineado
- Evaluación/revisión del código
  - Cuando se tiene tiempo, se pueden tener las mejores prácticas
  - Los errores aparecen por no dar continua evaluación por la facilidad conforme el tiempo

### Beneficios (pruebas estáticas ya que el 68% o la mayoría de errores se da en el análisis / diseño del software)
- Detectar y corregir defectos de manera más eficiente
- Identificar y priorizar la ejecución de pruebas en etapas posteriores
- Prevenir defectos
  - Que no son fácilmente detectables durante las pruebas dinámicas
  - Durante la etapa de análisis y diseño   

### Beneficios
- Cubrir aspectos como:
  - Insconsistencias, ambiguedades, contradicciones, definiciones inexactas, requerimientos redundantes (muchas veces la obviedad es la razón por que se están introducciendo defectos)

- Reducir el retrabajo e incrementar la productividad (todos van a pasar por una fase de análisis, de entendimiento, si no compartimos la información estamos provocando retrabajo, al compartir la información reducimos tiempo, costos, se deja enfocar a producir un producto con mejor calidad, lo importante es comunicarse para que todos estén trabajando en sintonía)
- Reducir el costo y el tiempo
- Mejorando la comunicación entre todos los miembros del equipo    


**Pruebas estáticas**:

- Leyendo documentación, analizando el software, comparando.

## Definición y diseño de pruebas

Esto es algo básico para cada tester. Hay varias cosas necesarias que debemos comprender y estar seguros de para qué lo hacemos.

Tu obligación y por lo que vas a brillar es porque sabes Encontrar Problemas, Documentarlos y Comunicarlos. 

**¿Qué hace un tester?**
1. Encontrar problemas
2. Documentar problemas
3. Comunicar problemas

**Aplicación con GPS**
Con internet, en una ciudad con todos los servicios funciona correctamente.

Si no encuentra problemas antes de que el producto sea entregado el cliente, enconces su testing es ineficiente.
- Aplicar en otros casos

Si cuando encuentra problemas no sabe documentar y producir los pasos correctos, su testing genera retrabajo y sube el costo.

Si como representante de la calidad del producto no sabe argumentar y proteger los intereses del negocio o clientes, entonces su testing no agrega valor
- Por qué algo se convierte en un defecto, cuando hablamos de la planeación de pruebas, necesitamos saber por qué esa ejecución de pruebas sea clara para todos, que pueda llegar cualquiera del equipo y lea el trabajo y sepa que lo que se está haciendo cubre el plan de pruebas, la matriz de pruebas y/o las expectativas del cliente.

Es crucial documentar, diseñar y nuestros casos de prueba contengan la información necesaria para que se entienda el trabajo.

## Caja Blanca, Gris y Negra

Cuando no estamos refiriendo a una caja **es la manera de observar el contenido de software**.

**Negra**: No podemos observar cómo fue construida, no vemos el código, no sabemos su arquitectura, no tenemos nociones **más que la interfaz que estamos interactuando**.

- Partición de equivalencia (Primer conjunto de datos para datos exitosos y datos no exitosos)
- Valores límite (límite de dígitos)
- Tabla de decisiones (checkboxes, listas)
- Transición de estados (cómo el componente se comporta, si el video está en pausa, si está en play, si está detenido, adelantando, regresando)
- Casos de usos (probar en la interfaz que el usuario pueda enviar el formulario y enviarlo, que el usuario pueda llenar el formulario y que todos los campos son obligatorios, no puede pasar a la siguiente parte si no completa)

**Blanca**: Es como una caja de cristal, **puedo ver todo lo que hay adentro e incluso puedo ser parte del equipo que desarrolla el software**.
  - Aveces las pruebas de caja negra se decide que las haga una tercera parte u otra empresa que no esté involucrada y que no conozca el software ya que cuando uno está muy involucrado desarrollando algo comienza a tener cegera de taller (ya no ve esos defectos, ya no ve esos detalles, se empiezan a omitir actividades por lo que es más fácil que llegue alguien adicional al equipo que está desarrollando el software y tenga una nueva perspectiva de que pueda encontrar ahí) 

- Cobertura de declaración
  - Todo lo que se tiene dentro del código y lo que se está asumiendo que se pide que se haga y al decir cobertura es, dependiendo el tipo del software, los requerimientos, el objetivo, se establece un porcentaje de cobertura, significa que cada línea de código debe ser ejecutada al menos una vez, cada sentencia debería de ejecutarse alguna vez y entonces para decir que se va a liberar el código o se va a pasar de pruebas a producción, es por que hay una cobertura de cierto porcentaje

- Cobertura de código
  - Sentencias
  - Desiciones
  - Condiciones

**Gris**: Pueden ser la integraciones, cómo fluye el código y puedo ver como se transmiten los datos a través de las redes.
  - Los datos como fluyen de un lugar a otro
  - No se conoce el código, no hay una interfaz, pero se está viendo cómo se trasmiten los datos a través de las redes

- Casos de negocios: Datos entrada y salida
- Pruebas End-to-End: Dato de entrada que se visualiza en otro lado y no necesariamente es un caso de negocio
  - Caso de negocio es que el usuario final pueda hacer uso de la herramienta, mientras que eso pueda ser parte del administrador del sitio
- Pruebas de integración: Cómo viajan esos datos

En medio estan datos, servicios, microservicios, en las pruebas de caja gris están implicando que vamos a ver los casos de negocio
<img width="1280" alt="Captura de Pantalla 2023-03-01 a la(s) 11 44 57 p m" src="https://user-images.githubusercontent.com/56992179/222342002-aecb6038-56bb-4f0a-a2c4-5e2aa4088d24.png">

## Gestión de Pruebas:

Aunque parezca obvio que es necesario **gestionar nuestro trabajo y darle seguimiento a las pruebas y ejecución**, hay estudios que demuestran que el 30% de las empresas no logran hacer esto exitosamente.

**Planeación de pruebas**: Definir los objetivos de las pruebas es muy importante, al no tener una estrategia clara termina causando una pobre cobertura de pruebas. **Los elementos a considerar para una buena planeación son la estimación, recursos, el alcance y objetivo**.

## 

Definición de Objetivos de las pruebas, alcance de las mismas, las técnicas de pruebas que se llevarán, junto con la estimación y definición de fechas de entrega, así como los criterios de salida.

Cuando no se tiene una buena cobertura de pruebas de cómo se va a planear o cómo se va a hacer, esto termina siendo en una muy pobre cobertura de pruebas, **es ahí donde la planeación toma importancia**.

**Monitoreo y Control**: Durante el monitoreo lo que estamos buscando son esas métricas que nos digan si estamos llevando avances o tenemos retrasos. Son nuestras alertas cuando nuestro plan no se esta ejecutando.

## 

Durante el Monitoreo se va midiendo y comparando los resultados de las métricas, y entonces durante el CONTROL se toman acciones para alcanzar el objetivo del plan y los criterios de salida.

Estamos buscando esas métricas que nos revelen que estamos llevando **avances**, o que tenemos un **retraso**, es la forma que nos va a **alertar** cuando nuestro plan no está sucediendo a cabo.

- Ejemplo: Llega el punto donde estamos por terminar nuestro trabajo, no han terminado los demás y somos el lider de pruebas resulta riesgoso para el negocio, para el negocio, para el negocio, que los demás no adviertan, que no más recursos, sino otras manos para trabajar, que no se va a cumplir el objetivo, quedando esto, mal ante el cliente. Cuando se hace el monitoreo de pruebas es mejor colocar metricas o banderas que nos indiquen cuando algo se está saliendo dentro del tiempo indicado dada la planeación.

**Análisis**: **Incluye decidir cuáles son esas prioridades** que nos ayudará a definir qué debemos probar.

## 

Cuando estamos analizando las pruebas para nuestro proyecto, necesitamos determinar qué debemos probar, obviamente basados en las prioridades de cobertura.

- Ejemplo: Cuando se esté enfocado sino en pruebas de seguridad o pruebas funcionales, quizás alguien nos puede decir que quiere que probemos un sitio donde quiere que incrementemos el volumen de tráfico de usuarios, entonces las pruebas deben ser diferentes y enfocadas a resolver esa situación.

**Diseño**: Normalmente cuándo estas iniciando las pruebas es necesario crear un mapa de ideas. Después de esto, puedes realizar el diseño a detalle de qué va a incluir cada caso de uso. Casos de alto nivel, diseñar y priorizar pruebas, identificar el entorno de pruebas, hacer una trazabilidad entre pruebas y sus
condiciones.

## 

- Diseño de casos de alto nivel
- Diseñar y priorizar las pruebas
- Identificar el entorno de pruebas - infraestructura y herramientas
- Hacer una trazabilidad entre pruebas y sus condiciones
  - Hacer una trazabilidad entre los casos de uso, los requerimientos tanto funcionales, técnicos o de diseño. Entre los requerimientos de un catálogo en un ecommerce, el cliente solicita el catálogo de X productos, entonces se tienen cuestionamientos para las pruebas como: ¿Cuántos de estos productos se pueden vender al mismo tiempo en una página? o si todos los productos deben de caber dentro de la página, ¿Cuántas veces podemos pasar entre una página y otra?, volver, regresar, si va haber botones, si va haber una flechita que sea como un enlace, etcétera. 
  - También, entre los requerimientos que debemos tener en nuestro diseño de pruebas son referentes a **especificaciones**, ya sea de negocio, funcionales, de sistema, historias del usuario, casos de uso, así como tener información referente al diseño, su implementación, arquitectura, plataformas, así como el stack de desarrollo, como lo puede ser el código, Base de Datos, metadata, querys, en general todo lo que implique información que nos ayude a tener una cobertura exitosa.

- Ejemplo: Validar la edad, lo que se hace es poner rangos desde la edad cero hasta el límite de edad. O donde hay una condición donde debe ser mayor de 18 años, también es otra forma de validar, uno esperaría que si el cliente es el valor 17, 16, cero, uno, decimales, no debería ser un caso válido, **de aquí se derivan varios casos de uso** con el mismo tipo de descripción, simplemente estamos usando diferentes valores.

**Implementación**: También nos aseguramos de contar con la estructura necesaria para realizar las pruebas, con un ambiente, datos y dónde documentar o realizar las pruebas.

##

Para poder prepararnos para hacer las pruebas, primero tenemos que asegurarnos que tenemos todo lo necesario para ello.

Si no se tiene ambiente de pruebas, datos de pruebas, donde documentar las pruebas, inclusive darle seguimiento a los datos que se puedan encontrar de las pruebas puede ser más complicado poderlo resolver, también se pueden usar otras técnicas como lo pueden ser las matrices de pruebas, lo que hace es agilizar visualmente qué pruebas se han ejecutado o no, sin embargo, para otros clientes es importante saber exactamente, a detalle, con pasos, qué es lo que se ha ejecutado  

**Ejecución**: En esta etapa los suites de pruebas se ejecutan de acuerdo al programa o el plan diseñado con anterioridad. Se suelen agrupar los casos de pruebas para que no estén desorganizado y podemos hacerles un buen seguimiento.

## 

Durante esta etapa, las suites de pruebas se ejecutan de acuerdo cone le programa de ejecución de las pruebas.

- Normalmente lo que se hace es agrupar los casos de prueba para que no estén desordenados y le podamos dar seguimiento, y cuando le podamos dar pruebas de regresión también los localicemos y miremos el impacto si hay cambios en el software

**Finalización**: Cuando queremos cerrar el ciclo de las pruebas, necesitamos saber qué porcentaje se cubrió, ejecutó, cuántos defectos se derivaron, aprender lecciones sobre el proceso.

## 

- Defectos con el estatus correcto.
- Reporte para comunicar los resultados de las pruebas.
- Finalizar y archivar ambiente de pruebas y sus datos
- Entregar el Testware al equipo de mantenimiento de pruebas.
- Analizar lecciones aprendidas para futuras versiones. 
- Recopilar información para ayudar a mejorar la madurez del proceso de prueba. 

Entre los defectos pueden hacer situaciones tanto técnicas como del mismo proceso, ya sea que faltó documentación, ya que no se explicó bien los requerimientos que el cliente estaba teniendo o simplemente el sistema ya tenía fallos y había que corregirlos, ya que la arquitectura la arquitectura y el diseño no se hicieron bien.

¿Cuántas pruebas hay que hacer para tener un buen monitoreo de pruebas?

## Roles y Responsabilidades

- Especialista en pruebas manuales
  - Pensamiento lateral, debería ser el especialista en entender cuáles son los casos de uso que se van a llevar a cabo para cada aréa.
  - Debe poder organizarse y asignar trabajo para si mismo dependiendo las prioridades del negocio, los riesgos o el impacto.
- Especialista en pruebas técnicas (o autimatizadas)
  - Esta persona se tiene que encargar de estar siempre actualizada en las herramientas que le permitan precisamente acelerar el trabajo, que le permitan mejorar el trabajo, busqueda, continúo entrenamiento, ser autodidacta son valores fundamentales.
- Líder del equipo de pruebas
  - Lider manual o de automatización o el lider que pueda llevar ambos equipos, auque tenga los conocimientos de ambos, además gestiona el equipo, se vuelve un falicitador de todas las actividades que tienen que hacer, ya sea el requerimiento de un ambiente de pruebas, ya sea darle seguimiento a los defectos y continuidad, pero sobre todo que se sigan los lineamientos de calidad para que se puedan cumplir en cada etapa.
- Ingeniero de calidad
  - Se encarga de la cultura, a la parte del **proceso**, establecer las políticas, ver que se cumplan, que todos los equipos estén **enterados**, **involucrados** y además escucharlos. Muchas veces los procesos no son estrictos, tampoco son inflexibles, lo importante es que estén **alineados** a lo que es el negocio, a lo que son las prioridades y a la forma de entregar al cliente.
  - Hay clientes que están dispuestos a recibir el producto hasta que cumplan ciertas condiciones (para no poner en riesgo el negocio). Hay sistemas que se pueden entregar parcialmente, pueden ser diferentes modelos de trabajo dependiendo la industria, dependiendo la empresa / las necesidades

**El compromiso de todos es que la calidad se alcance conforme lo que espera el usuario**

Apuntes:

Roles y Responsabilidades

• Especialista en pruebas manuales. Entre las habilidades que debería de tener, es el pensamiento lateral, en la parte de organización, diseño y documentación, debería de ser el especialista en entender cuáles son los casos de uso que se van a llevar para cada área, debe de poder organizarse y asignar trabajo para sí mismo dependiendo las prioridades del negocio, los riesgos o el impacto.
• Especialista en pruebas técnicas. Esta persona se tiene que encargar de estar siempre actualizada en las herramientas que le permitan acelerar el trabajo, mejorar el trabajo, búsqueda, continuo entrenamiento, ser autodidacta.
• Líder del equipo de pruebas. Gestiona el equipo y es un facilitador para las actividades a realizar, como apoyar con ambiente de pruebas, darle seguimiento a los defectos, revisar que los lineamientos se sigan.
• Ingeniero de calidad. Se dedica a la parte del proceso, es quien se encarga de establecer las políticas, mantener involucrados a los equipos, alineados a las prioridades del negocio; además que verifica que todo esto se cumpla sobre todo para la entrega del cliente.

## Roles

Independientemente del rol, un tester participa de todas las etapas del proceso de desarrollo de software, colaborando para asegurar la máxima calidad del producto. Su perfil conjuga un conjunto de habilidades con el conocimiento del negocio, de la aplicación bajo prueba y de cómo planificar, diseñar, ejecutar y administrar las pruebas.

*“Un tester investiga un producto de software con el objetivo de obtener información acerca de su calidad y del valor que representa para quienes lo utilizan”*

![Pruebas-Habilidades-82252b7c-5456-456a-8cb6-e949df67f1c7](https://user-images.githubusercontent.com/56992179/223530544-f463f433-4325-45fd-bc14-391062a8f74e.jpeg)

Cuando el esfuerzo en la calidad se enfoca y se distribuye en roles y responsabilidades podemos encontrar que la mayoría de las empresas manejan los siguientes roles:

**El tester manual**, se enfoca en la estrategia, definición, ejecución y cobertura de pruebas para cumplir los requerimientos, echando mano de cualquier técnica para obtener información suficiente y así cumplir con las asignaciones correspondientes.

**El tester técnico**, trabaja muy de cerca con el tester manual, mientras que el tester manual define las pruebas, el tester técnico acelera la capacidad de ejecución de las pruebas. Esto lo hace implementando herramientas que permitan la automatización de pruebas, o la correcta selección de datos de pruebas, o el monitoreo de la ejecución de las pruebas.

**El líder de pruebas**, generalmente dentro de sus responsabilidad es volverse un facilitador de servicios, información y herramientas para el equipo de pruebas, para poder estimar presupuestos, recursos y tiempos respecto al plan de desarrollo de software.

**El Ingeniero de calidad**, ya no solamente está al pendiente del producto y los procesos, comienza a involucrarse más con el negocio, ayudando tanto a testers como cualquier otro miembro del equipo a llevar cabo pruebas que reduzcan, en todas las etapas del ciclo de vida del software, el error humano.

## Ejercicios

![mini_20Quiz_20pruebas-9af079f0-c642-4f8c-80cf-7c287bb201b0](https://user-images.githubusercontent.com/56992179/224495076-f72f8eeb-8e75-474d-8047-36ad1a4919a4.jpg)

## Retrabajo

*Es necesario identificar cada uno de los roles y responsabilidades para después evaluar si se esta haciendo o no re trabajo, es decir estamos utilizando tiempo que podría ser utilizado en otras actividades o sencillamente que no debería hacerse.*

*También es necesario medir el rendimiento de nuestro trabajo y herramientas que nos permitan conocer paso a paso cómo vamos avanzado en el proceso de manera individual o en equipo.*

Ahora que conocemos los roles y las responsabilidades que están llevando estos roles, necesitamos herramientas para conocer cómo medirlos, hacer uso de métricas o herramientas que nos permitan conocer paso a paso cómo vamos avanzado en el proceso de manera individual o en equipo.

Las empresas, los proyectos o los individuos deciden tener no sólo un monitoreo visual, sino también a través de herramientas, comunicación, pueden ser por correo, por minutas, por juntas de trabajo, lo importante es que todos puedan tener de manera clara qué se está haciendo, qué se terminó de hacer y qué se va a hacer después.
- **El dashboard puede ser una herramienta útil que mantiene informado a todo el equipo acerca del estatus de las pruebas**.

Lo ignoran, para eso son las:

### Acciones de control

- Si identificamos un riesgo
  - Es importante que este tipo de monitoreo resalte si estamos enfrentando un riesgo, un riesgo para el negocio, por que si estamos aquí como responsable, lo más importante o lo que se espera de nosotros es que podamos decir **cuándo hay un riesgo**, cuándo algo se está saliendo de control cuando las tareas no van a ser terminadas en tiempo o existe algún elemento o parte del proceso que esté bloqueando que nosotros terminemos.
- Si identificamos falta de ambientes
  - Es común que el ambiente de pruebas no siempre esté configurado para comenzar a hacer el trabajo o que requiera estarse actualizando o que se requieran nuevas versiones, se están generando parches, se están corrigiendo defectos.
  - Para tomar en cuenta que nuestro ambiente están listos (que el ambiente no esté actualizado) debe formar parte de nuestras métricas de monitoreo y de avance del trabajo.
- Si el criterio de salida no se cumple
  - Volver a hacer una planeación que ajuste a todo para la entrega del trabajo.

Con esto podemos ver dos cosas:

**Resultado de las pruebas**
  - ¿Cuántas pruebas se han ejecutado?
  - ¿Cuántas de ellas han pasado o no han pasado? (o si han pasado)
  - ¿Cuántas de ellas se derivaron defectos?, tal vez no hay defecto, simplemente hay un bloque que no le permite continuar el trabajo 

**Desempeño del equipo de testing**
  - ¿Qué pasa si en el equipo un día alguien no asiste al trabajo? o no tiene el equipo adecuado, no hubo internet, el cliente no entrega el material necesario o alguna otra razón (muchas circunstancias de poder hacer bien nuestro trabajo también forman parte de estar midiendo el proceso y las tareas que se les asigna a todas las personas).

### Retrabajo 

*Esfuerzo adicional necesario para la corrección de una inconformidad en algún producto. El problema que surge con el retrabajo es obvio: es un esfuerzo adicional que no puede ser cobrado al cliente, pero que es necesario para que este quede conforme con lo que hemos hecho para él.*

## 

*"El retrabajo es la principal causa del retraso, de que la estimación de tiempos falle, de que los costos se suban"*, cuando está sucediendo el retrabajo, estamos llevando hasta siete veces más el esfuerzo de todos. Cuando puede ser tan simple de: *"documenté bien y entrego"* y la siguiente persona puede hacer bien su trabajo, esto se puede volver una cadena de: *entrego mi trabajo y me lo rechazan por que está mal documentado, está mal hecho, o el resultado no es el esperado y hay que volver a iniciar y el volver iniciar*, puede involucrar más personas atrás para revisar en qué momento falló el trabajo y no necesariamente el producto. **Las acciones, las actividades y los hábitos de cómo gestionar las pruebas, son las que producen retrabajo**.

- Falta o mala documentación
- Falta de capacitación o dominio en las herramientas utilizadas
  - Cuando a una persona se le asignan responsabilidades, se espera que tenga un completo dominio de ellas, pero **también se sabe que es necesario mantener actualizado** al equipo. El costo no es el costo de invertirles para que se capaciten, sino el costo de que se queden en el equipo y no estén capacitados y entonces comiencen a tener demasiado retrabajo y  los proyectos se salgan de estimación o de recursos o de alcance. 
- Falta de capacitación o dominio en el software a desarrollar
  - Producto en sí que se está desarrollando, no entenderlo, no darle tiempo al equipo para que vea de qué se trata el negocio, del producto que se está desarrollando. También hace que muchas personas comiencen a omitir o a creer que las cosas son de una forma y no se trata de creer, se trata de estar seguros, trabajar en base a requerimientos o líneamientos a estar de acuerdo a que todos deberían desarrollar un producto de esa forma.
- Falta de comunicación

Aplicación para gestionar proyectos ágiles o de cascada:

https://www.easyredmine.com/

Retrabajo: Es la principal causa del retraso, de que la estimación de tiempo falle, de que costos suban. Cuando estos suceden aumentamos exponencialmente el trabajo de todos

## Defectos y sugerencias

Dependiendo del objetivo del proyecto podemos encontrar que no todos quieren que des sugerencias, solo encuentres defectos. Cosas que pongan en riesgo por costo, prestigio o calidad del producto.

- Ese tipo de condiciones no son indicadas al inicio del trabajo provocando retrabajo.
  - En ese momento las prioridades no están indicadas para comenzar a implementar nuevas características

**Defectos**: Es aquello que no cumple los requerimientos funciones, de diseño, de arquitectura y **es la consecuencia de un error humano** en el código o la interpretación de la información.

**Sugerencias**: Es cómo la experiencia del usuario se ve afectado. La lentitud del proyecto, la legibilidad, combinación de colores, la forma de navegar no es adecuada.

### Ejemplos de sugerencias
- Hay programas, aplicaciones, que comienzan a escalar a otros países y a implementar el uso de diferentes lenguajes y en lugar de hacer una traducción correcta la hacen una traducción literal, dejando a un lado al usuario que está experimentando con un nuevo lenguaje su aplicación, la sensación de lo que dice "no es lo correcto".
- El sitio no falla, pero uno como usuario no entiende cómo usar el producto que interesa y que puede resolver un problema.
**Ejemplo #1**; el mensaje de error no comunica adecuadamente.
**Ejemplo #2**; el color de la pantalla, no contrasta bien con el texto.
- Puede ser ilegal que el software no pueda ser usado por cualquiera, por cuestiones de inclusividad, de personas que no pueden ver, de personas que no pueden escribir bien en teclado, personas que no escuchan.
- O que ya no se pueda hacer uso de la manera "normal" como lo venía haciendo, eso se presta para demandas, multas, cierre de la empresa, etcétera.
- Puede ser un defecto (no lo savemos), pero si puede ser una sugerencia dado que en los requerimientos no se estaba considerando quién lo iba a usar al final.
**Ejemplo #3**; no recibí un correo adicional de confirmación.
- Durante la experiencia es normal que te de un mensaje desupués de una acción confirmación/error/advertencia/muestre lo que se estuvo gestionando

### 

**Si la calidad la define el usuario final... sus sugerencias se vuelven defectos?**
- Quizás no sea un defecto, pero son nuevas opciones para mejorar el producto

### Sugerencias convertidas en defectos / actualizaciones de software

- Hace lenta la operación
- Detiene parcial o totalmente el proceso
- El contenido o el flujo confunde al usuario
- Deja cometer muchos errores al usuario
- La traducción o el lenguaje empleado no es correcto
- No funciona sin internet

### ¿Cómo documentar un defecto? (diseño de defecto/sugerencia)

<img width="1280" alt="Captura de Pantalla 2023-03-10 a la(s) 11 05 38 a m" src="https://user-images.githubusercontent.com/56992179/224389428-4edf1d03-4fce-491f-a35e-9da40b68328a.png">

Defecto asociado a cada paso en la columna defecto:
<img width="1280" alt="Captura de Pantalla 2023-03-09 a la(s) 6 51 45 p m" src="https://user-images.githubusercontent.com/56992179/224389464-1c826c68-180c-42c6-a9ea-41b4aa928343.png">

- Después de que ya se documentó el defecto y ha sido arreglado, se vuelve a la documentación del defecto y siguiendo los mismos pasos ya no se debería obtener el resultado actual donde el error estaba presente
- Cerrar el defecto sería que se tiene el resultado esperado, en este caso el mensaje de error es diferente y quizás dice, esta cuenta está duplicada y no puedes volverla a usar para registrarte.

<img width="685" alt="Seguimiento y cierre" src="https://user-images.githubusercontent.com/56992179/224390095-e9a89b29-f9ef-4a27-8553-9e14e982e81b.png">

## ¿Qué es la depuración?

El depurador (debugger)
permite:
- Ejecutar línea a línea
- Detener la ejecución temporalmente
  - Es una línea de código concreta
  - Bajo determinadas condiciones
- Visualizar el contenido de las variables
- Cambiar el valor del entorno de ejecución para poder ver el efecto de una corrección en el programa.

**Algunos elementos no se acomodan correctamente en tu página web**
- Elementos que manda a llamar
**Que se ejecuta alguna acción pero no se recibe mensaje ni de error ni de confirmación**
**O al contrario, se recibe mensajes de confirmación, pero los datos no se actualizan**

### Tipos de herramientas
- Debugger
  - Software debugger
- Manual
  - Capturar pantalla
- Local / Remota
  - Observar frente a frente al servidor cómo empezar a hacer el debugging, encontrarlo y resolverlo
  - De manera remota, es utilizar los comandos correctos

### Herramientas
- Mensajes de advertencia
  - Dejar de ignorarlos
- Estándares de compilación
  - Sintaxis correcta
- Verificación sintáctica y lógica
  - El orden de los comandos puede ser crucial, ser presiso para lo que queremos lograr

Hacer testing o depuración son dos actividades diferentes. Mientras el testing sirven para encontrar defectos, la depuración nos permitirá entender por qué esta sucediendo este defecto y que actividades están implicadas en el. Ambas pueden ir de la mano y son muy importantes.

**Debugger**: Es una herramienta que nos ayuda a encontrar todos estos errores ya sea de sintaxis, advertencias de seguridad, etc. Nos permite ejecutar línea por línea, detener la ejecución temporalmente, visualizar el contenido de las variables, cambiar el valor del entorno de ejecución para poder ver el efecto de una corrección en el programa.

### Beneficiados

- **Programador**: Requiere cada vez que programa ir depurando lo que ejecuta y escriba para que cumpla con su objetivo
- **Tester**: Le ayuda a reducir el tiempo de análisis que después puede ser asignado para el desarrollador
- **Analista**: Puede ser para analisis de encontrar información de un historial sobre cómo se comporta un sistema.

**Objetivo**: Vamos a analizar cómo se comporta el sistema, cómo se transfieren los datos, cómo se procesa la información. Tenemos la capacidad de tener nuestro código en cualquier momento para conocer cómo funciona.


## Pruebas de verificación
Sirven para confirmar que un cambio se haya hecho o un defecto se haya corregido. Queremos verificar que lo que estamos buscando funcione a lo que está en los requerimientos o ya sea a lo que está documentado

- Tratan de reproducir el escenario fallido con los datos usados
  - Sería un error usar los mismos datos de prueba, ya sea en la parte de desarrollo durante el debugging o del lado del testing, ya buscando que la funcionalidad cumpla con muchas más cosas, no sólo con el contexto de programación.
  - Otros contextos
- Se buscan nuevos escenarios donde se utilicen valores relativos siguientes flujos adicionales (a largo plazo en nuestro software van creciendo las pruebas en ese sentido)
  - Otras plataformas
  - Otros Sistemas Operativos
  - Otros exploradores
  - Otros dispositivos

**Pruebas de verificación**: Para asegurarnos que lo que ya funcionaba siga funcionando o que lo que ha sido corregido ahora funcione como se espera.  

### Pruebas de regresion
- La matriz de pruebas durante el debugging nos permite identificar módulos impactados que requieren regresión
  - Se siguen teniendo en cuenta todos estos puntos de verificación (los anteriores) para que no reciban un impacto.
  - Puntos de verificación al actualizar un formulario: Tiene puntos de verificación que son las entradas de datos, que después de ingresar los datos se envíen correctamente, que se reciba un mensaje, etcétera (establecer diferentes acorde a los requerimientos)
  - Diferentes dipositivos como ejemplo, hace crecer la matriz, pero de esa forma tampoco se olvida cuáles son los puntos de verificación
  - Todo lo que sirva siga funcionando y nos identifica los casos de prueba clave que más tarde pueden ser automatizados y de esa manera se mantiene clara la cobertura que se tiene y no se olvida lo que puede fallar más adelante cuando haya cambios.
- Las pruebas de regresión ya fallaron la primera vez al no tener suficiente cobertura, debemos incorporar los nuevos datos de prueba
- Y si se puede otros más

### Documentación
Forma parte de estar verificando que nada haya cambiado (anteriormente pruebas estáticas), ya sean los comentarios del código, la documentación técnica, pruebas unitarias, pruebas especifícas (performance, seguridad, etc.).


Se procura analizar documentación:
- Comentarios en el código
- Documentación técnica
- Pruebas unitarias
- Pruebas específicas
- Matrices de pruebas
  - Hay que darles mantenimiento, ya que pueden cambiar y  alguien puede omitir actualizarlas

## Técnicas de depuración
Deben ir cambiando de ser reactivas a ser preventivas

### Desventajas de no usar logs
- Visibilidad nula de errores
- Metodología de trabajo no estandarizada
- Accesos e información descentralizada
- Incremento del tiempo de respuesta

Tener una forma no estandarizada puede provocar que cada miembro del equipo esté resolviendo de forma distinta y observe cosas distintas.
Ocurre por no tener de forma centralizada un log para que todos puedan ver lo que pasa y saber quién está atendiendo los defectos y aún así seguir arrastrando problemas
Si se prepara en revisar la información de una manera más organizada se puede empezar a usar técnicas de machine learning
  - Comenzar a proyectar otro comportamiento no esperado, detectar que si pasa algo, puede que el defecto o el comportamiento del software sea exponencial o demás problemas
    - Puede comenzar a detectar amenazas de red o de virus
      - Este historial o tipo de técnicas sobre todo se da en los routers donde se está visualizando la entrada y salida de datos, ¿Cómo viaja la información?, no necesariamente es un software, pero son puntos de verificación que permiten advertir cómo se va a comportar un programa

### Fase 1: Pasos para depurar

1. Ir al módulo que falla
2. Establecer breakpoints
  a. En asignación de valores
  b. Procesamiento de valores
  c. Cambio de estados
3. Diseñar una matriz de pruebas
4. Establecer los datos de prueba
5. Comenzar a depurar  

### Automatización de pruebas

### ¿Cuándo estamos listos para automatizar?
- Tenemos pruebas repetitivas (podemos hacer scripts)
  - Pero no están identificadad
- Buscamos optimizar la ejecución de pruebas (sin error humano, la omisión, etc. Hay que comenzar a agrupar las pruebas para manejarlas, darles mantenimiento)
  - Sólo escribimos scripts sin agrupar
- Hemos definido un framework (como las hacemos, cómo los ejecutamos, cómo las vamos a llamar según de manera masiva, en paralelo o bajo demanda de un proceso de trabajo)
  - No se estandarizan las pruebas    

## 

Bases para la automatización de pruebas y los tipos de pruebas que podemos automatizar:

**Pruebas unitarias**: Tienen que ver con un pedazo de código que el desarrollador esta codificando, pero no tienen que ver con todo el flujo de negocio y proceso del software.

**Pruebas de integración**: Cómo hacemos que el conjunto del equipo que libera pedacitos de software funcionen juntos y no hagan defectos adicionales.

**Pruebas funcionales o de aceptación**: Estas pruebas no necesariamente forman parte de los requerimientos especificados por el cliente, una recomendación para automatizar estas pruebas es que deban cumplir con los requerimientos dados por el cliente.
  - Ejemplo de dígitos y su manera de captura

**Test Driven Development**: El desarrollo va a estar enfocado haciendo primero las pruebas y después el código. Haciendo que el desarollo sea muy específico con la mayor cobertura y no pongamos líneas de código que no van a funcionar o no se usan.

1. Escribimos una prueba
2. Ejecutamos la prueba: Falla
3. Se escribe el código
4. Ejecutamos la prueba: Pasa

### BDD (Behavior Driven Development)

BDD es el desarrollo guiado por el comportamiento. Es un proceso que proviene de la evolución del TDD

**En BDD también se escriben pruebas antes del código, pero en vez de ser pruebas unitarias son pruebas que van a verificar que el comportamiento del código es correcto desde el punto de vista de negocio.**

- Comunicación simple
- Pruebas simples con una mayor cobertura
- Tener a los dos frameworks de manera independiente va a ser un mix de los dos, que permite que las pruebas, el código y en tiempo que se invierte en ambos sea bastante optimizado

*"Entre más claros los casos de prueba, más eficiente la cobertura de pruebas. Entre menos errores o ambigüedad tengan los casos de pruebas, son más fácil de ejecutar o automatizar"*

<img width="1280" alt="Captura de Pantalla 2023-03-11 a la(s) 10 35 15 p m" src="https://user-images.githubusercontent.com/56992179/224524609-cd8686aa-5f13-44f6-9120-e07873beacc2.png">

*Behavior Driven Development*: Si primeros vamos a escribir las pruebas, debemos hacerlo bien y usando un lenguaje sencillo, simple para que la sirva al equipo para entender qué es lo que queremos hacer. **Son el plan de pruebas en base al negocio**.

## Gherkin

"Gherkin es un lenguaje de texto plano con estructura. Esta diseñado para ser fácil de aprender y ser entendido por todos".
Ayuda a todo el equipo a entender estas pruebas que se quieren llevar a cabo.

Ventajas

- Simple
- Palabras claves o keywords
- Estandariza los casos de uso
- Reduce el tiempo de diseño

###  

Principales keywords usados en Gherkin (reduce todo el contenido que puede tener un caso de prueba)
- Feature
- Scenario
- Given. When, Then, And, But (Steps)
- Background
- Scenario outline
- Examples

Ejemplo:
<img width="686" alt="Captura de Pantalla 2023-03-12 a la(s) 9 19 24 p m" src="https://user-images.githubusercontent.com/56992179/224600625-fb799dc3-55e2-4087-9b0d-102e56ecf343.png">

Fin
