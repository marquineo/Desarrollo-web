<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*Crea una carpeta ejercicios7 para los ejercicios de esta sesión. Dentro crea una página llamada
clases.php con una clase llamada Persona que tenga como atributos un DNI, un nombre y un email.
Crea un constructor que permita rellenar esos tres atributos, y los getters y setters correspondientes.
Define también un método Mostrar para sacar por la página los datos de la persona (en un párrafo,
separados por guiones). Define adecuadamente la visibilidad (pública o privada) de cada atributo o
método.
Crea una segunda clase llamada Estudiante que herede de Persona, y añada un atributo llamado
numExpediente. Crea su constructor, sus getters y setters y su correspondiente método Mostrar.
Fuera de las clases, entre el código HTML de la página, crea un objeto de cada tipo (una Persona y un
Estudiante), con los valores que quieras, llama después a algún setter de cada una para cambiar el valor
de algún atributo, y finalmente llama a sus métodos Mostrar para que saquen la información de cada
uno.*/

    class Persona
    {
        private $DNI;
        private $nombre;
        private $email;

        public function __construct($DNI, $nombre, $email)
        {
            $this->DNI = $DNI;
            $this->nombre = $nombre;
            $this->email = $email;
        }

        public function __get($nom)
        {
            if ($nom == "DNI") {
                return $this->DNI;
            } else if ($nom == "nombre") {
                return $this->nombre;
            } else if ($nom == "email") {
                return $this->email;
            }
        }
        public function __set($name, $value)
        {
            if ($name == "DNI") {
                $this->DNI = $value;
            } else if ($name == "nombre") {
                $this->nombre = $value;
            } else if ($name == "email") {
                $this->email = $value;
            }
        }
        public function mostrar()
        {
            echo "<p> $this->DNI ($this->nombre) '$this->email'<p>";
        }
    }
    class Estudiante extends Persona
    {
        private $numExpediente = 0;

        public function __construct($DNI, $nombre, $email, $numExpediente)
        {
            parent::__construct($DNI, $nombre, $email);
            $this->numExpediente = $numExpediente;
        }

        public function __get($nom)
        {
            if ($nom == "DNI") {
                return parent::__get("DNI");
            } else if ($nom == "nombre") {
                return parent::__get("nombre");
            } else if ($nom == "email") {
                return parent::__get("email");
            } else if ($nom == "numExpediente") {
                return $this->numExpediente;
            }
        }
        public function __set($name, $value)
        {
            if ($name == "DNI") {
                parent::__set("DNI", $value);
            } else if ($name == "nombre") {
                parent::__set("nombre", $value);
            } else if ($name == "email") {
                parent::__set("email", $value);
            }
        }
        public function mostrarEstudiante()
        {
            echo "<p>" . parent::__get("DNI") . " " . parent::__get("nombre") . " " . parent::__get("email") . " " . $this->numExpediente . "<p>";
        }
    }
    $p1 = new Persona("23949344L", "Marcos", "marquineo2001@gmail.com");
    $p1->__set("nombre", "Javier");
    $p1->mostrar();
    $e1 = new Estudiante("56148", "nombreinventao", "emailinventao", 50);
    $e1->__set("DNI", "789456123");
    $e1->mostrarEstudiante();
    ?>
</body>

</html>