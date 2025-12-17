# 📰 Blog en Laravel

Sistema de Gestión de Contenidos (CMS) desarrollado con **Laravel**, que permite a los usuarios registrarse, autenticarse y gestionar artículos organizados por categorías, incluyendo un sistema de comentarios.

El proyecto implementa una **lógica de negocio completa**, integrando frontend, backend y base de datos bajo el patrón **MVC**, cumpliendo con buenas prácticas de desarrollo y seguridad.

---

## 📌 Descripción General

Este sistema de blog está diseñado para la publicación de contenido de manera estructurada, permitiendo:

- Administración de usuarios y perfiles
- Creación y gestión de artículos
- Clasificación por categorías
- Interacción mediante comentarios
- Control de estado del contenido

El proyecto es ideal como **proyecto final académico** o **portafolio profesional** en desarrollo web con Laravel.

---

## 🎯 Objetivos del Proyecto

### Objetivo General
Desarrollar una aplicación web funcional utilizando Laravel que permita la gestión completa de un blog.

### Objetivos Específicos
- Implementar autenticación segura de usuarios
- Diseñar un modelo de base de datos relacional
- Aplicar el patrón MVC
- Utilizar Eloquent ORM para la gestión de datos
- Garantizar seguridad y validación de información

---

## 🛠️ Tecnologías Utilizadas

| Tecnología | Uso |
|----------|----|
| Laravel | Framework Backend |
| PHP | Lógica de servidor |
| MySQL | Base de datos relacional |
| Blade | Motor de plantillas |
| Bootstrap | Diseño y estilos |
| Eloquent ORM | Manejo de base de datos |
| Git | Control de versiones |

---

## 🧱 Arquitectura del Sistema

El proyecto sigue el patrón **Modelo – Vista – Controlador (MVC)**:

- **Modelos:** Representan las tablas de la base de datos
- **Vistas:** Interfaz de usuario con Blade
- **Controladores:** Manejan la lógica de negocio

---

## 🗄️ Modelo de Base de Datos

### 👤 Users
Almacena la información principal de los usuarios.

| Campo | Tipo |
|------|------|
| id | BIGINT (PK) |
| full_name | VARCHAR(120) |
| email | VARCHAR(255) |
| password | VARCHAR(255) |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

---

### 🖼️ Profiles
Información adicional del usuario.

| Campo | Tipo |
|------|------|
| id | BIGINT (PK) |
| photo | VARCHAR(255) |
| user_id | BIGINT (FK) |

**Relación:**  
- Un usuario tiene un perfil

---

### 🗂️ Categories
Clasificación de artículos.

| Campo | Tipo |
|------|------|
| id | BIGINT (PK) |
| name | VARCHAR(40) |
| slug | VARCHAR(60) |
| image | VARCHAR(255) |
| is_featured | BOOLEAN |
| status | BOOLEAN |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

---

### 📝 Articles
Publicaciones del blog.

| Campo | Tipo |
|------|------|
| id | BIGINT (PK) |
| title | VARCHAR(255) |
| slug | VARCHAR(255) |
| introduction | VARCHAR(255) |
| image | VARCHAR(255) |
| body | TEXT |
| status | BOOLEAN |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |
| user_id | BIGINT (FK) |
| category_id | BIGINT (FK) |

**Relaciones:**
- Un usuario puede crear muchos artículos
- Un artículo pertenece a una categoría

---

### 💬 Comments
Comentarios de los usuarios.

| Campo | Tipo |
|------|------|
| id | BIGINT (PK) |
| value | VARCHAR(255) |
| description | VARCHAR(255) |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |
| user_id | BIGINT (FK) |
| article_id | BIGINT (FK) |

**Relaciones:**
- Un usuario puede realizar muchos comentarios
- Un artículo puede tener muchos comentarios

---

## 📂 Estructura del Proyecto

app/
├── Models/
│ ├── User.php
│ ├── Profile.php
│ ├── Article.php
│ ├── Category.php
│ └── Comment.php
├── Http/
│ └── Controllers/
├── Http/
│ └── Requests/
resources/
├── views/
routes/
├── web.php
database/
├── migrations/
├── seeders/


---

## 🔐 Funcionalidades del Sistema

- Registro e inicio de sesión de usuarios
- Gestión de perfiles
- CRUD de artículos
- CRUD de categorías
- Sistema de comentarios
- Control de estado (activo / inactivo)
- Protección de rutas con middleware
- Validación de formularios
- Hash de contraseñas

---

## 🔒 Seguridad

- Hash de contraseñas con `bcrypt`
- Validación de datos mediante Form Requests
- Protección contra inyección SQL (Eloquent ORM)
- Middleware de autenticación (`auth`)
- Protección CSRF

---

## 🚀 Instalación y Configuración

### 1️⃣ Clonar repositorio
```bash
git clone https://github.com/ExlamuxSeis/blog.git
cd blog
