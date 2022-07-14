# CameraReviews systema
---
## Problema a resolver
La empresa "RandomCameraReviews" necesita un sistema que permita que fotografos profesionales suban "reviews" de Camaras fotograficas, para que cualquier persona desde cualquier parte del mundo pueda buscar los los reviews y comprarlas a travez de su portal.
La empresa cuenta con un equipo de developers especializado en frontEnd que realizara un portal para que los editores suban los "reviews" y los usuarios puedan verlos, y han solicitado que tu como especista en Backend, les proporciones un sistema, incluyendo API que permita  realizar lo siguiente:

- Subir reviews de Camaras fotograficas
- Obtener el contenido de los reviews para mostrarlo en vistas del portal en sus versiones web y mobile.
- Manejo de usuarios para editores (no incluye visitantes que leen los reviews)

Tambien se sabe que la empresa "RandomCameraReviews" planea distribuir mayormente en America del Sur donde esta su mercado mas grande, pero tambien tienen ventas en norte america, Europa, y muy pocas en Asia.

### Alcance(Scope)
Descripción..

#### Casos de uso
Descripción...
* Como editor me gustaría poder subir una review de una camara
* Como editor me gustaría poder subir una review de una lente para las camaras
* Como usuario no registrado me gustaria poder leer una review

#### Casos de uso No Soportados
Descripción...
* Como usuario no registrado me gustaría poder subir una review de una camara
* Caso de uso 2
* ...
---
## Arquitectura

### Diagramas
poner diagramas de secuencia, uml, etc

### Modelo de datos
Poner diseño de entidades, Jsons, tablas, diagramas entidad relación, etc..

---
## Limitaciones
Lista de limitaciones conocidas. Puede ser en formato de lista.
Ej.
* Llamada al API permite subir un review, no excede los límites de latencia 500ms
* No se soporta mas de X llamadas por segundo
---
## Costo
Descripción/Análisis de costos
Contemplando 1000 usuarios diarios, que visitan recurrentemente cada hora:
Ejemplo:
"Considerando N usuarios diarios, M llamadas a X servicio/baseDatos/etc"
* 1000 llamadas diarias a serverless functions. $XX.XX
* 1000 read/write units diarias a X Database on-demand. $XX.XX
Total: $xx.xx (al mes/dia/año)