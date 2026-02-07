# Bienes Raíces – Sistema CRUD en PHP

## 📌 Descripción

Aplicación web desarrollada en PHP que implementa un sistema CRUD completo para la gestión de propiedades inmobiliarias.  
El proyecto permite crear, leer, actualizar y eliminar registros de propiedades, así como gestionar usuarios autenticados desde un panel de administración.

Está construido siguiendo una estructura modular, utilizando PHP procedural, MySQL para la persistencia de datos y herramientas modernas como Node.js y Gulp para la gestión de assets.

---

### 🛠️ Tecnologías utilizadas
---
- **HTML5** – Estructura del contenido
- **CSS3 / SASS** – Estilos y preprocesador CSS
- **JavaScript** – Interactividad del lado del cliente
- **PHP** – Lógica del servidor y manejo del CRUD
- **MySQL** – Base de datos relacional
- **Gulp** – Automatización de tareas (compilación de SASS, minificación de CSS y JS, optimización de imágenes)
- **Node.js** – Entorno de ejecución para herramientas de desarrollo

---
## ⚙️ Funcionalidades principales

- Autenticación de administrador mediante inicio de sesión.
- Panel de administración protegido por sesión.
- Gestión completa de propiedades inmobiliarias:
  - Crear nuevas propiedades.
  - Listar propiedades registradas.
  - Editar información de propiedades existentes.
  - Eliminar propiedades.
- Gestión de imágenes asociadas a las propiedades.
- Sistema preparado para soportar múltiples roles de usuario en el futuro.

---
## 🔐 Autenticación y roles

El sistema cuenta con un módulo de autenticación para el acceso al panel de administración.  
Actualmente, la aplicación maneja un único rol (**administrador**), el cual tiene acceso completo a la gestión de propiedades.

La lógica del proyecto está diseñada para permitir la incorporación de nuevos roles en caso de que el negocio lo requiera, aunque por el alcance actual no es necesario el inicio de sesión de usuarios finales.


---
## 📂 Estructura del proyecto
```tex
├── admin/                # Panel de administración
├── build/                # Archivos generados por Gulp (CSS, JS, imágenes)
├── database/             # Script SQL de la base de datos
│   └── bienes_raices.sql
├── includes/             # Configuración y funciones reutilizables
│   └── config/           # Configuración de la base de datos
├── src/                  # Archivos fuente (SASS, JS, imágenes)
├── index.php             # Página principal
├── gulpfile.js           # Automatización de tareas
├── package.json          # Dependencias del proyecto
└── README.md             # Documentación
```
---

## 🚀 Instalación y configuración

### Requisitos
- PHP 8 o superior
- MySQL
- Node.js y npm
- Servidor web (Apache recomendado)
---
### Pasos de instalación

1. Clonar el repositorio:
   ```bash
   git clone https://github.com/tu-usuario/bienes-raices.git
2. Instalar dependencias:
   ```bash
   npm install
3. Configurar la base de datos:
-   Crear una base de datos en MySQL.
-   Importar el archivo SQL ubicado en:
	   ```bash
	   database/bienes_raices.sql 
 - Editar el archivo de configuración de la base de datos:
	  ```bash
	   includes/config/database.example.php
-   Colocar las credenciales correspondientes al entorno local.
    

> Nota: el archivo `database.example.php` funciona como plantilla de configuración incluida en el repositorio.  

4. Ejecutar Gulp para compilar los assets: 
	  ```bash
	  gulp
5. Configurar el servidor web para apuntar a la raíz del proyecto.
6. Acceder al panel de administración:
	  ```bash
	  http://localhost/bienes-raices/admin
---
## 🔒 Validación y seguridad

- Validación de datos del lado del servidor.
- Sanitización de entradas mediante prepared statements.
- Autenticación basada en sesiones para el acceso al panel de administración.
- Control de acceso restringido a usuarios con rol de administrador.
---

## 📈 Mejoras futuras

- Implementación de múltiples roles de usuario.
- Sistema de permisos más granular.
- Paginación y filtros avanzados de propiedades.
- Refactorización del proyecto a un patrón MVC.
---
## 👨‍💻 Autor

Desarrollado por **Josué Iván Mata**  
Proyecto realizado con fines de aprendizaje y portafolio profesional.

---
## 📄 Licencia

Este proyecto se distribuye bajo la licencia MIT.  
Consulta el archivo `LICENSE` para más información.
