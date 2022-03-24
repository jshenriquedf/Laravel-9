# Criação do arquivo de ordem para execução

# Criação de arquivos migration
php artisan make:migration create_table_uf --create=uf --path=database/migrations/admin
php artisan make:migration create_table_organizacao --create=organizacao --path=database/migrations/admin
php artisan make:migration create_table_usuario --create=usuario --path=database/migrations/admin
php artisan make:migration create_table_pessoa --create=pessoa --path=database/migrations/admin


# Execução da Migration para criação das tabelas
php artisan migrate --path=/database/migrations/admin/2022_03_24_000000_create_table_uf.php
php artisan migrate --path=/database/migrations/admin/2022_03_24_000000_create_table_organizacao.ph
php artisan migrate --path=/database/migrations/admin/2022_03_24_000000_create_table_usuario.php
php artisan migrate --path=/database/migrations/admin/2022_03_24_000000_create_table_pessoa.php



# Persistindo 
php artisan migrate

# especifico: php artisan migrate --path=/database/migrations/2020_04_01_064006_create_posts_table.php
