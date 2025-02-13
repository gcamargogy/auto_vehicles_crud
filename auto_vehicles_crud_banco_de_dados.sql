create database auto_vehicles_crud;
use auto_vehicles_crud;
drop database auto_vehicles_crud;
show tables;

create table Carro (
	id_carro int auto_increment primary key,
    marca varchar(200) not null,
    modelo varchar(200) not null,
    paisFabricacao varchar(200) not null,
    anoProducao varchar(200) not null,
    cor varchar(200) not null,
    totalPortas varchar(200) not null,
    precoVeiculo varchar(200) not null
);

create table Moto (
	id_moto int auto_increment primary key,
    marca varchar(200) not null,
    modelo varchar(200) not null,
    paisFabricacao varchar(200) not null,
    anoProducao varchar(200) not null,
    cor varchar(200) not null,
    numeroChassi varchar(200) not null,
    precoVeiculo varchar(200) not null
);

create table Caminhao (
	id_caminhao int auto_increment primary key,
    marca varchar(200) not null,
    paisFabricacao varchar(200) not null,
    anoProducao varchar(200) not null,
    cor varchar(200) not null,
    totalEixos varchar(200) not null,
	emplacamento varchar(200) not null,
    precoVeiculo varchar(200) not null
);

-- Inserts para a tabela Carro
INSERT INTO Carro (marca, modelo, paisFabricacao, anoProducao, cor, totalPortas, precoVeiculo) VALUES
('Toyota', 'Corolla', 'Japão', '2022', 'Prata', '4', '120000'),
('Honda', 'Civic', 'Japão', '2021', 'Preto', '4', '115000'),
('Ford', 'Fusion', 'EUA', '2020', 'Branco', '4', '98000'),
('Chevrolet', 'Onix', 'Brasil', '2023', 'Vermelho', '4', '75000'),
('Volkswagen', 'Golf', 'Alemanha', '2019', 'Cinza', '4', '105000'),
('Hyundai', 'HB20', 'Coreia do Sul', '2023', 'Azul', '4', '72000'),
('Renault', 'Kwid', 'França', '2022', 'Branco', '4', '55000'),
('Fiat', 'Argo', 'Itália', '2021', 'Preto', '4', '68000'),
('Peugeot', '208', 'França', '2023', 'Amarelo', '4', '79000'),
('Nissan', 'Versa', 'Japão', '2020', 'Verde', '4', '89000'),
('BMW', '320i', 'Alemanha', '2022', 'Azul', '4', '220000'),
('Mercedes-Benz', 'C180', 'Alemanha', '2021', 'Preto', '4', '240000'),
('Audi', 'A3', 'Alemanha', '2020', 'Branco', '4', '210000'),
('Tesla', 'Model 3', 'EUA', '2023', 'Prata', '4', '350000'),
('Jeep', 'Renegade', 'EUA', '2019', 'Vermelho', '4', '99000'),
('Toyota', 'Etios', 'Japão', '2018', 'Prata', '4', '48000'),
('Honda', 'Fit', 'Japão', '2017', 'Preto', '4', '55000'),
('Ford', 'Ka', 'EUA', '2020', 'Branco', '4', '65000'),
('Chevrolet', 'Cruze', 'Brasil', '2019', 'Cinza', '4', '97000'),
('Volkswagen', 'Polo', 'Alemanha', '2022', 'Azul', '4', '85000');

-- Inserts para a tabela Moto
INSERT INTO Moto (marca, modelo, paisFabricacao, anoProducao, cor, numeroChassi, precoVeiculo) VALUES
('Honda', 'CB 500', 'Japão', '2022', 'Vermelha', 'CHASSI12345', '35000'),
('Yamaha', 'MT-07', 'Japão', '2021', 'Azul', 'CHASSI67890', '41000'),
('Kawasaki', 'Ninja 400', 'Japão', '2023', 'Verde', 'CHASSI11111', '36000'),
('Suzuki', 'GSX-S750', 'Japão', '2020', 'Preta', 'CHASSI22222', '45000'),
('BMW', 'S1000RR', 'Alemanha', '2022', 'Branca', 'CHASSI33333', '89000'),
('Ducati', 'Panigale V4', 'Itália', '2021', 'Vermelha', 'CHASSI44444', '120000'),
('Harley-Davidson', 'Sportster', 'EUA', '2020', 'Preta', 'CHASSI55555', '78000'),
('Triumph', 'Street Triple', 'Reino Unido', '2019', 'Cinza', 'CHASSI66666', '52000'),
('KTM', 'Duke 390', 'Áustria', '2022', 'Laranja', 'CHASSI77777', '48000'),
('Royal Enfield', 'Himalayan', 'Índia', '2021', 'Preta', 'CHASSI88888', '33000'),
('Yamaha', 'XJ6', 'Japão', '2018', 'Azul', 'CHASSI99999', '26000'),
('Honda', 'CG 160', 'Brasil', '2023', 'Vermelha', 'CHASSI10101', '18000'),
('Kawasaki', 'Z900', 'Japão', '2022', 'Verde', 'CHASSI20202', '53000'),
('Dafra', 'Apache 200', 'Índia', '2020', 'Amarela', 'CHASSI30303', '21000'),
('BMW', 'G310R', 'Alemanha', '2021', 'Branca', 'CHASSI40404', '36000');

-- Inserts para a tabela Caminhao
INSERT INTO Caminhao (marca, paisFabricacao, anoProducao, cor, totalEixos, emplacamento, precoVeiculo) VALUES
('Scania', 'Suécia', '2022', 'Azul', '4', 'ABC1234', '350000'),
('Volvo', 'Suécia', '2021', 'Branco', '6', 'DEF5678', '420000'),
('Mercedes-Benz', 'Alemanha', '2020', 'Preto', '5', 'GHI9012', '380000'),
('Iveco', 'Itália', '2019', 'Vermelho', '4', 'JKL3456', '290000'),
('DAF', 'Holanda', '2023', 'Cinza', '6', 'MNO7890', '460000'),
('MAN', 'Alemanha', '2022', 'Azul', '5', 'PQR1234', '410000'),
('Ford', 'EUA', '2020', 'Branco', '4', 'STU5678', '330000'),
('Volkswagen', 'Brasil', '2019', 'Amarelo', '4', 'VWX9012', '310000'),
('Freightliner', 'EUA', '2021', 'Preto', '6', 'YZA3456', '450000'),
('Kenworth', 'EUA', '2020', 'Vermelho', '5', 'BCD7890', '390000'),
('Peterbilt', 'EUA', '2018', 'Azul', '4', 'EFG1234', '320000'),
('Mack', 'EUA', '2019', 'Branco', '6', 'HIJ5678', '430000'),
('Tatra', 'República Tcheca', '2022', 'Cinza', '5', 'KLM9012', '400000'),
('Renault Trucks', 'França', '2020', 'Preto', '4', 'NOP3456', '370000'),
('Kamaz', 'Rússia', '2019', 'Vermelho', '6', 'QRS7890', '350000');
