public class Doctor {
    //Atributos
    static int id; //Autoincrement
    String name;
    String speciality;

    /**
     * Constructores
     * 
     * Dos maneras de construir el objeto
     */
    Doctor(){
        System.out.println("Construyendo el método doctor");
    }

    Doctor(String name){
        System.out.println("El nombre del doctor asignado es: " + name);
    }

    /**
     * Comportamientos
     */
    public void showName(){
        System.out.println(name);
    }
}
