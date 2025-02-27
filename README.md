# PROYECTO_APIs_PHP
## Comparación entre Diseños con PicoCSS y Bootstrap

Este repositorio contiene dos archivos PHP que consumen la API [whenisthenextmcufilm](https://whenisthenextmcufilm.com/api) para mostrar información sobre la próxima película de Marvel. Ambos archivos tienen la misma funcionalidad, pero difieren en su diseño y estructura.

## Diferencias Clave

### 1. **Framework CSS Utilizado**
- **Archivo con PicoCSS (`pico_version.php`)**: Utiliza [PicoCSS](https://picocss.com/), un framework liviano que no requiere clases adicionales.
- **Archivo con Bootstrap (`bootstrap_version.php`)**: Usa [Bootstrap 5.3](https://getbootstrap.com/), proporcionando un diseño más estructurado y responsivo con su sistema de grillas.

### 2. **Estructura del HTML**
- **PicoCSS**: No usa una estructura HTML estándar con `<!DOCTYPE html>`. Depende más de CSS personalizado.
- **Bootstrap**: Incluye `<!DOCTYPE html>` y sigue una estructura más convencional, asegurando compatibilidad con todos los navegadores.

### 3. **Maquetación y Estilos**
| Característica         | PicoCSS                      | Bootstrap                    |
|--------------------|----------------------------|-----------------------------|
| **Diseño**         | Minimalista, sin clases adicionales | Más profesional y estructurado |
| **Flexbox/Grid**   | Usa `display: flex` manualmente | Usa `container`, `row`, `col-*` de Bootstrap |
| **Carga de CSS**   | Liviano, solo un archivo externo | Requiere Bootstrap CSS y JS |
| **Responsividad**  | Mínima, con ajustes en CSS | Mejor adaptabilidad gracias a Bootstrap |

### 4. **Código PHP**
Ambos archivos incluyen la misma lógica para obtener y procesar la respuesta de la API:
```php
const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
```
La única diferencia es que en **PicoCSS** se incluye `var_dump($data);` dentro de un `<pre>` para depuración.

## Conclusión
- **PicoCSS** es ideal para un diseño rápido y liviano sin muchas dependencias.
- **Bootstrap** es mejor si se busca una apariencia profesional y una mejor adaptabilidad en dispositivos móviles.

Puedes probar ambos archivos y decidir cuál se adapta mejor a tu proyecto.

---
**Autor:** ZakariaCB

