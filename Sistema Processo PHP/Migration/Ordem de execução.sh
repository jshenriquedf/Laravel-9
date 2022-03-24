# Criação do arquivo de ordem para execução

# Criação de arquivos migration
php artisan make:migration create_table_uf --path=database/migrations/admin
php artisan make:migration create_table_organizacao --path=database/migrations/admin
php artisan make:migration create_table_usuario --path=database/migrations/admin
php artisan make:migration create_table_pessoa --path=database/migrations/admin






php artisan migrate --path=/database/migrations/2022_03_23_165209_create_uf_table.php
php artisan migrate --path=/database/migrations/2022_03_23_163500_create_organizacao_table.php
php artisan migrate --path=/database/migrations/2022_03_23_195213_create_usuario_table.php
php artisan migrate --path=/database/migrations/2022_03_23_194648_create_pessoa_table.php
php artisan migrate --path=/database/migrations/2022_03_23_195744_create_regional_table.php






# Persistindo 
php artisan migrate

# especifico: php artisan migrate --path=/database/migrations/2020_04_01_064006_create_posts_table.php
