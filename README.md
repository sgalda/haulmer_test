
# Requisitos

- XAMPP (Apache, MySQL y PHP)
- Composer (para la gestión de dependencias de PHP)
- Git (para clonar el repositorio)



# Clonar el Repositorio

Primero, clona el repositorio desde GitHub 

      git clone https://github.com/sgalda/haulmer_test.git

# Configurar XAMPP

Inicia XAMPP y asegúrate de que Apache y MySQL estén ejecutándose.

Abre phpMyAdmin y crea una nueva base de datos llamada haulmer_test 
 
# Configurar el Archivo .env 

    cp .env.example .env
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=haulmer_test
    DB_USERNAME=root
    DB_PASSWORD=

    php artisan key:generate

# Instalar Dependencias 

    composer install

    php artisan migrate

    php artisan serve

# Decrypt
Post
    http://127.0.0.1:8000/api/
![Captura desde 2024-08-07 16-48-10](https://github.com/user-attachments/assets/b0c5cf2e-e629-4cb5-8510-aec58ac61fac)
# Encrypt
Post
    http://127.0.0.1:8000/api/
![Captura desde 2024-08-07 16-47-49](https://github.com/user-attachments/assets/a08e5f3a-56e5-4ccd-a20a-cf2d1e81d179) 
# Añadir usuario
Post
     http://127.0.0.1:8000/api/user
![Captura desde 2024-08-07 16-46-37](https://github.com/user-attachments/assets/fca33f65-7f39-4cce-bbc5-7320a3399928)
# Mostrar lista de usuarios
Get
     http://127.0.0.1:8000/api/user
![Captura desde 2024-08-07 16-48-35](https://github.com/user-attachments/assets/576d5e46-c65f-4b08-9021-984b76324275) 
