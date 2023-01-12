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
