# Seguridad

Este repositorio contiene material de ejemplo para temas de seguridad en PHP.

## Estructura del proyecto

- `index.html` abre la página principal con enlaces a las distintas secciones.
- `pages/` incluye las páginas HTML y un pequeño script PHP.
- `material/` reúne documentación de apoyo en formato PDF.
- `base_datos/` contiene el volcado `127_0_0_1.sql` con la base de datos de ejemplo.

## Cómo abrir las páginas

1. Abre `index.html` en tu navegador web.
2. Desde la página principal podrás acceder al resto de páginas ubicadas en `pages/`.

## Cómo importar el script SQL

1. Crea una base de datos en tu gestor favorito (phpMyAdmin, MySQL desde consola, etc.).
2. Importa el archivo `base_datos/127_0_0_1.sql`.
   - En phpMyAdmin: usa la opción **Importar** y selecciona el archivo.
   - En la consola de MySQL ejecuta:
     ```
     mysql -u usuario -p nombre_base < base_datos/127_0_0_1.sql
     ```

Con esto tendrás disponibles las tablas y registros definidos en el script.
