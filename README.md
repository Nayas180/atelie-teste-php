**Atelie-teste-php**


## Como rodar?
php artisan serve


## End-points
Empresas
-> Função: Criar uma nova empresa na database -- VERB: POST  URL: /api/posts/empresas/store

Paramentros,
cnpj,
razao_social


----------------------------------------------------------------------------------

Participantes
-> Função: Criar um novo participante na database -- VERB: POST URL: /api/posts/participantes/store

Paramentros
cpf,
nome,
email,
data_de_nascimento

-> Função: Vincular participantes às empresas -- VERB: PUT URL: /api/posts/participantes/edit-participante-for-empresa

Parametros,
id_participante,
id_empresa
