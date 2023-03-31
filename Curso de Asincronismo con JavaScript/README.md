# Curso de Asincronismo con JavaScript

## Qué es el asincronismo

**Los lenguajes de programación por si mismos son sincrónicos.**: Deben ejecutarse, tarea, por tarea, por tarea.

- En el transcurso de la evolución de las tecnologías hemos implementado, ya sea conceptos, librerías y recursos que le añaden a estos lenguajes de programación el poder de trabajar con el asincronismo, en este caso lo tenemos dentro de JavaScript. 

- JavaScript se define un lenguaje sincrono por defecto, y que sólo utiliza un subproceso, un sólo hilo para trabajar.

### 

**JavaScritp es síncrono por defecto y tiene un solo subproceso (un sólo hilo para trabajar)**.

Otro concepto: **JavaScript es síncrono y no bloqueante, con un bucle de eventos (concurrencia) e implementado con un único hilo para sus interfaces de I/O**.

JavaScript es single-threaded (un sólo hilo): **Aún con múltiples procesadores, sólo se puede ejecutar tareas en un sólo hilo, llamado el hilo principal**.

**Bloaqueante**: Una tarea no devuelve el control hasta que se ha completado (ejemplo: alert).

**No bloqueante**: Una tarea se devuelve inmediatamente con independencia del resultado. Si se completó, devuelve los datos. Si no, un error. Una terea devuelve inmediatamente el control para poder continuar sin necesidad de detener nuestra aplicación y poder con ello tener el seguimiento, con esto devolviendo los datos o en este caso devolviendo un error para avanzar con la lógica según sea el caso.

**Síncrono**: Las tareas se ejecutan de forma secuencial, se debe esperar a que se complete para continuar con la siguiente tarea.

**Asíncrono**: Las tareas pueden ser realizadas más tarde, lo que hace posible que una respuesta sea procesada en diferido.

**Concurrencia**: Utiliza un modelo de concurrencia basado en un "loop de eventos".

**EventLoop**: El buble de eventos es un patrón de diseño que espera y distribuye eventos o mensajes en un programa.

### Formas de manejar la asincronía en JavaScript

#### Callbacks...
Una función que se pasa como argumento de otra función y que será invocada.

#### Promesas... (ES6)
Función no-bloqueante y asíncrona la cual puede retornar un valor ahora, en el futuro o nunca.

#### Async / Await (ES2017)
Permite estructurar una función asincrónica sin bloqueo de manera similar a una función sincrónica ordinaria.

#### JavaScript acaba de convertirse en Multi-Threaded con la capacidad de realizar múltiples tareas simultáneamente.
    - JavaScript fue concevido sincrono, pero tenemos herramientas que nos ayudan a trabajar con la asincronía dentro de lo que vendría siendo nuestro proyecto

Aporte de la comunidad: 

• 🧵 Thread: Thread para Javascript permite realizar programación multihilos en este entorno. En realidad, simula la creación y ejecución de hilos, pero para el desarrollador es lo mismo. Ésto simplifica muchísimo la creación de aplicaciones Javascript.
• 🚫 Bloqueante: Una llamada u operación bloqueante no devuelve el control a la aplicación hasta que se ha completado. Por tanto el thread queda bloqueado en estado de espera.
• 🚿 No bloqueante: Una tarea no bloqueante se devuelve inmediatamente con independencia del resultado. Si se completó, devuelve los datos. Si no, un error.
• 🎞️ Síncrono: Las tareas se ejecutan de forma secuencial, se debe esperar a que se complete para continuar con la siguiente tarea.
• 🚦 Asíncrono: Las tareas pueden ser realizadas más tarde, lo que hace posible que una respuesta sea procesada en diferido. La finalización de la operación I/O (entrada/salida) se señaliza más tarde, mediante un mecanismo específico como por ejemplo un callback, una promesa o un evento, lo que hace posible que la respuesta sea procesada en diferido.
• 🛤️ Paralelismo: El paralelismo es la ejecución simultánea de dos o más tareas. Algunas tareas se pueden dividir en partes más pequeñas que pueden ser resueltas simultáneamente.
• 🎮 Concurrencia: La concurrencia es la capacidad de un algoritmo o programa para ejecutar más de una tarea a la vez. El concepto es similar al procesamiento paralelo, pero con la posibilidad de que muchos trabajos independientes hagan diferentes cosas a la vez en lugar de ejecutar el mismo trabajo.
• 🌀 Eventloop o Loop de eventos: El bucle de eventos es un patrón de diseño que espera y distribuye eventos o mensajes en un programa.
.
📝 Formas de manejar la asincronía en JavaScript:
.
• 📩 Callbacks: Una función que se pasa como argumento de otra función y que será invocada.
• 🫱🏼‍🫲🏾 Promesas: (implementado en ES6) Una promesa es una función no-bloqueante y asíncrona la cual puede retornar un valor ahora, en el futuro o nunca.
• 🛣️ Async / Await: (implementado en ES2017) Permite estructurar una función asincrónica sin bloqueo de una manera similar a una función sincrónica ordinaria.
.
📌 En JavaScript casi todas las operaciones de I/O (Entrada y Salida) no se bloquean. A esto se le conoce como asíncronismo. Lo único que no es procesado antes de que termine la operación son los callbacks, ya que éstos están amarrados a una operación y esperan a que sea finalizada para poder ejecutarse.

## Event Loop
El buble de eventos es un patrón de diseño que espera y distribuye eventos o mensajes en un programa.

### Memory Heap
Los objetos (funciones, variables, elementos) son asignados a un montículo (espacio grande en memoria no organizado).

<img width="616" alt="Captura de Pantalla 2023-03-28 a la(s) 11 05 49 p m" src="https://user-images.githubusercontent.com/56992179/228701125-e1b93219-646e-43a5-aac1-4f8906491b36.png">

### Call Stack (pila)
Apila de forma organizada las instrucciones de nuestro programa.

<img width="617" alt="Captura de Pantalla 2023-03-29 a la(s) 7 02 30 p m" src="https://user-images.githubusercontent.com/56992179/228701275-4bb0a6c9-7dbe-41fc-bc0c-bb5bb192c0fd.png">

#### Task queue
Cola de tareas, se maneja la concurrencia, se agregan las tareas que ya están listas para pasar al Stack (pila).
- Donde se maneja directamente la concurrencia.
- El stack debe estar vacío (nunca lo debemos de bloquear para continuar con esta lógica).

#### MicroTask Queue
Las promesas tienen otra forma de ejecutarse y una prioridad superior (ya que queremos trabajar con el asíncronismo).

#### Web APIs
JavaScript del lado del cliente: **setTimeout, XMLHttpRequest, File Reader, DOM**.
Node: **fs, https**.

#### Event Loop
Tarea asignada para mover del Task Queue al Stack sólo si el Stack está vacío.

<img width="616" alt="Captura de Pantalla 2023-03-29 a la(s) 6 58 08 p m" src="https://user-images.githubusercontent.com/56992179/228700844-bf8bfc1c-e938-4e95-97af-398d77773cb3.png">

Referencias: http://latentflip.com/loupe/?code=JC5vbignYnV0dG9uJywgJ2NsaWNrJywgZnVuY3Rpb24gb25DbGljaygpIHsKICAgIHNldFRpbWVvdXQoZnVuY3Rpb24gdGltZXIoKSB7CiAgICAgICAgY29uc29sZS5sb2coJ1lvdSBjbGlja2VkIHRoZSBidXR0b24hJyk7ICAgIAogICAgfSwgMjAwMCk7Cn0pOwoKY29uc29sZS5sb2coIkhpISIpOwoKc2V0VGltZW91dChmdW5jdGlvbiB0aW1lb3V0KCkgewogICAgY29uc29sZS5sb2coIkNsaWNrIHRoZSBidXR0b24hIik7Cn0sIDUwMDApOwoKY29uc29sZS5sb2coIldlbGNvbWUgdG8gbG91cGUuIik7!!!PGJ1dHRvbj5DbGljayBtZSE8L2J1dHRvbj4%3D
