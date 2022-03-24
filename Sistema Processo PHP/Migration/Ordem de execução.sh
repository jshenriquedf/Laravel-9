# Criação do arquivo de ordem para execução

# Criação do arquivo migration UF
php artisan make:migration create_uf_table --create=uf
php artisan make:migration create_organizacao_table --create=organizacao
php artisan make:migration create_usuario_table --create=usuario
php artisan make:migration create_pessoa_table --create=pessoa
php artisan make:migration create_regional_table --create=regional




php artisan migrate --path=/database/migrations/2022_03_23_165209_create_uf_table.php
php artisan migrate --path=/database/migrations/2022_03_23_163500_create_organizacao_table.php
php artisan migrate --path=/database/migrations/2022_03_23_195213_create_usuario_table.php
php artisan migrate --path=/database/migrations/2022_03_23_194648_create_pessoa_table.php
php artisan migrate --path=/database/migrations/2022_03_23_195744_create_regional_table.php






# Persistindo 
php artisan migrate

# especifico: php artisan migrate --path=/database/migrations/2020_04_01_064006_create_posts_table.php