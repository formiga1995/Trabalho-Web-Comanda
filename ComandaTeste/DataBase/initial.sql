INSERT INTO funcionario (func_id, func_nome, func_login, func_senha, tipo_tipo_id)  
VALUES (default, 'Juliano', 'admin', 'admin', '1');

INSERT INTO funcionario (func_id, func_nome, func_login, func_senha, tipo_tipo_id)  
VALUES (default, 'Gabriel', 'admin', 'admin', '1');

INSERT INTO funcionario (func_id, func_nome, func_login, func_senha, tipo_tipo_id)  
VALUES (default, 'Matheus', 'admin', 'admin', '1');

INSERT INTO tipo (tipo_id, tipo_nome)
VALUES (default, 'Gerente');

INSERT INTO tipo (tipo_id, tipo_nome)
VALUES (default, 'Funcionário');

SELECT *
FROM tipo;

SELECT *
FROM funcionario;