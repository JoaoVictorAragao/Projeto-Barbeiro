use sistemabarbeiros;

create table agendamento(
	ID int primary key auto_increment,
    dataHora timestamp NOT NULL,
    userClient int,
    foreign key (userClient) REFERENCES userCad(id),
    userBarbeiro int,
    foreign key (userBarbeiro) REFERENCES userCad(id)
);

ALTER TABLE agendamento
ADD COLUMN serviço int,
ADD foreign key (serviço) REFERENCES servicesTypes(ID);

ALTER TABLE agendamento
ADD COLUMN status int,
ADD foreign key (status) REFERENCES status(ID);

ALTER TABLE agendamento
CHANGE COLUMN status statusAgendamento int;

select * from agendamento;

select a.ID as agendamentoID, uClient.nome as nomeCliente, uBarbeiro.nome as nomeBarbeiro, a.dataHora, situacao.statusName as status
from agendamento AS a
join usersCad AS uClient ON a.userClient = uClient.ID
join usersCad AS uBarbeiro on a.userBarbeiro = uBarbeiro.ID
join status AS situacao on a.statusAgendamento = situacao.ID;