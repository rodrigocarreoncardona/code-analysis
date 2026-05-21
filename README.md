# Code  Analysis

## 💻 Instalación
Requerimientos: PHP 8.2.12

**1.- Clonar repositorio**
```bash
git clone https://github.com/rodrigocarreonc/code-analysis.git
cd code-analysis
```

**2.- Instalar dependencias**
```bash
composer install
```

**3.- Cambiar a rama develop**
```bash
git switch develop
```

**4.- Ejecucion**
```bash
php artisan serve
```

## 💻 Contribución
Dentro del controlador "OperationsController" es necesario agregar la función de operación matemática que se le fue asignada
```bash
code-analysis/
└── app/http/controllers
    └── OperationsController.php
```

Ejemplo:
```bash
    // square root
    public function squareRoot($a): float
    {
        return sqrt($a);
    }
```

Además de agregar la prueba unitaria de la misma funcion, esto para validar su correcto funcionamiento
```bash
code-analysis/
└── test/
    └── unit
        └── ExampleTest.php
```

Ejemplo:
```bash
    // square root
    public function test_root_square(): void
    {
        $controller = new OperationsController;
        $result = $controller->squareRoot(16);

        $this->assertIsFloat($result);
        $this->assertEquals(4, $result);
        $this->assertNotNull($result);
        $this->assertGreaterThan(0, $result);
    }
```

## 💻 Pruebas
Antes de subir el código debes de correr estos comandos para validar tu contribución

**1.-Test**
```bash
php artisan test
```

**2.-Pint**
```bash
./vendor/bin/pint
```

**3.- PHPStan**
```bash
./vendor/bin/phpstan analyse
```

## 💻 Subir a repositorio
Ya con todo listo, será posible llevar los cambios hacia el repositorio

```bash
git add .
git commit -m "[cambios realizados]"
git push origin develop
```

Y realizar el pull request necesario para llevar los cambios a la rama main y esto a producción