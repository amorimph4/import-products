# products-import

### começando
    rode o comando composer install para instalar as dependencias 

### configuração
    em seu arquivo .env mude as configurações de banco de dados para o seu banco.  
    para criar as tabelas necessarias em seu banco rode o comando php artisan migrate.  
    para acessar as rotas da API é necessário que você rode o comando php artisan db:seed isso irá criar um usuário em seu banco de dados com o email :importfile@gmail.com e a senha:123456.  
    
### routes API
	/api/login  
	Method - POST  
	Header - Content-Type:application/json, Accept:application/json               
	Body - email: importfile@gmail.com , password: 123456  
	Response - Token
	Obs : token é expirado a cada 1 hora. guarde este token para realizar suas requests

    /api/all-products    
    Method - GET  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken                  
	Response - Produtos cadastrados.
	Obs: retorna a lista de todos os produtos cadastrados.
    
    /api/product/{product}  
    Method - GET  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken                  
	Response - Produto cadastrado.
	Obs: retorna o reistro do produto especificado pelo id.
    
    /api/import  
    Method - POST  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken               
	Body - fileImport:file  
	Response - mensagem de sucess ou error.  
	Obs: importa a planilha para base de dados (em sua request coloque o arquivo a ser importado no campo fileImport).
    
    /api/update-product/{id}  
    Method - POST  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken                
	Body - lm:"ex", name:"ex", free_shipping:"ex", description:"ex", price:"ex"  
	Response - mensagem de sucess ou error.  
	Obs: altera um produto especificado pelo id e pelos campos enviados.  
    
    /api/delete-product/{id}  
    Method - POST  
	Header - Content-Type:application/json, Accept:application/json, Authorization:Bearer yourToken  
	Response - mensagem de sucess ou error.  
	Obs: deleta um produto especificado pelo id.
