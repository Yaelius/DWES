He tenido que crear 2 ficheros diferentes para poder hacer este ejercicio, uno se llama "Empleados.php" 
y el otro es el "Main(index.php)".

EMPLEADOS:
Tuve que crear una clase llamada "Empleado" para despues darle su información(nombre y sueldo), 
para finalizar cree un constructor de nombre y sueldo con un "this" para poder llamarlo desde fuera de esta clase.

INDEX:
Hago un "require" para poder llamar a la clase de "Empleados" que esta en otro archivo php.
Despues creo dos objetos llamados "empleado1" y "empleado2" con sus respectivas unidades(nombre y sueldo), 
para acabar hago un if / else para poder revisar si el suelo de la persona supera los 2000. Si supera los 
2000 le mandamos un mensaje con "echo" y le comentamos que tiene que pagar impuestos.