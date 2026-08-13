CREATE TABLE cad.cadastro 
( 
 nome completo VARCHAR DEFAULT '100',  
 e-mail VARCHAR DEFAULT '100',  
 cpf VARCHAR DEFAULT '14',  
 data de cadastro DATE DEFAULT '100',  
 id do usuário INT PRIMARY KEY,  
 data de nascimento DATE DEFAULT '100',  
 sexo CHAR,  
 rg VARCHAR DEFAULT '100',  
 endereço VARCHAR DEFAULT '100',  
 celular VARCHAR DEFAULT '100',  
 cidade VARCHAR,  
 cep VARCHAR DEFAULT '100',  
 estado CHAR,  
 observações VARCHAR DEFAULT '100',  
 UNIQUE (cpf)
); 

CREATE TABLE produtos 
( 
 preços FLOAT DEFAULT '100',  
 id de produto VARCHAR DEFAULT '100',  
 nome do produto VARCHAR DEFAULT '100',  
 descrição VARCHAR DEFAULT '100',  
 estoque atual FLOAT DEFAULT '100',  
); 

CREATE TABLE funcionário 
( 
 id-funcionário VARCHAR DEFAULT '100',  
 nome VARCHAR DEFAULT '100',  
 cpf INT DEFAULT '15',  
 cargo VARCHAR DEFAULT '100',  
 salário FLOAT DEFAULT '100',  
); 

CREATE TABLE fornecedor 
( 
 id-fornecedor VARCHAR DEFAULT '100',  
 nome dos quadros VARCHAR DEFAULT '100',  
 cnpj INT DEFAULT '100',  
 telefone VARCHAR,  
); 

CREATE TABLE vendas 
( 
 id-venda VARCHAR DEFAULT '100',  
 data da venda DATE DEFAULT '100',  
 valor total FLOAT DEFAULT '100',  
); 

CREATE TABLE bancos 
( 
 visa INT DEFAULT '100',  
 master INT DEFAULT '100',  
 pix INT DEFAULT '100',  
); 


