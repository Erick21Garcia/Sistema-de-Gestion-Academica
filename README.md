# 🎓 Sistema de Gestión Académica

Sistema web académico desarrollado con **Laravel 10**, **MySQL** y **Docker**, diseñado para gestionar procesos clave como la matrícula, calificaciones, certificados en PDF y perfiles de estudiantes.

---

## 🚀 Tecnologías usadas

- **Laravel 10**
- **PHP 8.2**
- **MySQL 8**
- **Apache + Docker**
- **Blade + TailwindCSS**
- **DOMPDF** para generación de certificados
- **Docker Compose** para orquestación

---

## 📦 Instalación local con Docker

> Requisitos:
> - Docker y Docker Compose instalados en tu sistema

1. Clona el repositorio:

```bash
git clone https://github.com/Erick21Garcia/Sistema-de-Gestion-Academica.git
cd Sistema-de-Gestion-Academica
```

2. Copia el archivo .env:

```bash
cp .env.example .env
```

3. Levanta los contenedores:

```bash
docker-compose -f docker-compose.laravel.yml up -d --build
```

4. Accede a tu navegador:

```bash
http://localhost:8080
```

## 🔑 Credenciales de acceso

| Usuario           | Contraseña      | Rol        |
| ----------------- | --------------- | ---------- |
| `erick@email.com` | `efgg123456789` | Estudiante |
| `jon@hotmail.com` | `efgg123456789` | Estudiante |

## 🗺️ Rutas principales del sistema

/ - Página de bienvenida

/login - Inicio de sesión

/profile - Perfil del usuario (autenticado)

/matricula - Vista para inscripciones

/calificaciones - Consulta de calificaciones

/certificados - Solicitud de certificados

/ingenieria, /derecho, /ciencias - Facultades específicas

/index - Página de facultades

## 📄 Rutas para descarga de PDF:

/download-static-pdf

/download-dynamic-pdf

/download-conducta-pdf

/download-pasantia-pdf

