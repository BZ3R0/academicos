use academicos;
INSERT INTO user (iduser, matricula, name, sobrenome, cpf, telefone, perfil, status)
VALUES (1001, '21601', 'Caio', 'brofovisqui', '95183866252', '8888-9999' , 'G', 5);
INSERT INTO user (iduser, matricula, name, sobrenome, cpf, telefone, perfil, status)
VALUES (1002, '21602', 'Rafael', 'Souza', '05743013136', '8888-9999' , 'R', 5);
INSERT INTO user (iduser, matricula, name, sobrenome, cpf, telefone, perfil, status)
VALUES (1003, '21603', 'Alan', 'Atala', '31340376881', '8888-9999' , 'A', 5);
INSERT INTO user (iduser, matricula, name, sobrenome, cpf, telefone, perfil, status)
VALUES (1004, '21604', 'João', 'Santos', '66649353841', '8888-9999', 'A', 5);
INSERT INTO user (iduser, matricula, name, sobrenome, cpf, telefone, perfil, status)
VALUES (1005, '21605', 'Pedro', 'Santana', '52971483169', '8888-9999', 'A', 5);
INSERT INTO user (iduser, matricula, name, sobrenome, cpf, telefone, perfil, status)
VALUES (1006, '21606', 'Adriano', 'Almeida', '30136775624', '8888-9999', 'R', 5);
INSERT INTO user (iduser, matricula, name, sobrenome, cpf, telefone, perfil, status)
VALUES (1007, '21607', 'Ivan', 'Professor', '32283572363', '8888-9999', 'A', 5);
INSERT INTO user (iduser, matricula, name, sobrenome, cpf, telefone, perfil, status)
VALUES (1008, '21608', 'Fulano', 'de Tal', '32283572365', '8888-9999', 'R', 5);

INSERT INTO class (idclass ,serie, ensino)
VALUES (2001, '1º ano A', 'Alfabetização');
INSERT INTO class (idclass ,serie, ensino)
VALUES (2002, '2º ano A', 'Fundamental1');
INSERT INTO class (idclass ,serie, ensino)
VALUES (2003, '3º ano A', 'Fundamental1');
INSERT INTO class (idclass ,serie, ensino)
VALUES (2004, '4º ano A', 'Fundamental1');
INSERT INTO class (idclass ,serie, ensino)
VALUES (2005, '5º ano A', 'Fundamental1');
INSERT INTO class (idclass ,serie, ensino)
VALUES (2006, '6º ano A', 'Fundamental2');
INSERT INTO class (idclass ,serie, ensino)
VALUES (2007, '7º ano A', 'Fundamental2');
INSERT INTO class (idclass ,serie, ensino)
VALUES (2008, '8º ano A', 'Fundamental2');
INSERT INTO class (idclass ,serie, ensino)
VALUES (2009, '9º ano A', 'Fundamental2');

INSERT INTO students (idstudents, user_iduser, class_idclass)
VALUES (3001, 1003, 2006);
INSERT INTO students (idstudents, user_iduser, class_idclass)
VALUES (3002, 1004, 2006);
INSERT INTO students (idstudents, user_iduser, class_idclass)
VALUES (3003, 1005, 2007);
INSERT INTO students (idstudents, user_iduser, class_idclass)
VALUES (3004, 1007, 2008);


INSERT INTO user_has_students (user_iduser, students_idstudents)
VALUES (1002, 3001);
INSERT INTO user_has_students (user_iduser, students_idstudents)
VALUES (1002, 3002);
INSERT INTO user_has_students (user_iduser, students_idstudents)
VALUES (1006, 3001);
INSERT INTO user_has_students (user_iduser, students_idstudents)
VALUES (1006, 3002);
INSERT INTO user_has_students (user_iduser, students_idstudents)
VALUES (1006, 3003);
INSERT INTO user_has_students (user_iduser, students_idstudents)
VALUES (1008, 3004);

INSERT INTO discipline(iddiscipline, name, teacher)
VALUES(4001, 'Matemática', 'Manuel');
INSERT INTO discipline(iddiscipline, name, teacher)
VALUES(4002, 'Português', 'Juca');
INSERT INTO discipline(iddiscipline, name, teacher)
VALUES(4003, 'História', 'Julia');
INSERT INTO discipline(iddiscipline, name, teacher)
VALUES(4004, 'Inglês', 'Marta');

INSERT INTO feedback (Idfeedback, students_idstudents, students_user_iduser, students_class_idclass, discipline_iddiscipline, mensagem)
VALUES (5001, 3001, 1003, 2006, 4001, 'Não fez a atividade em sala por estar conversando');
INSERT INTO feedback (Idfeedback, students_idstudents, students_user_iduser, students_class_idclass, discipline_iddiscipline, mensagem)
VALUES (5002, 3002, 1004, 2006, 4002, 'Menino mal criado demais');
INSERT INTO feedback (Idfeedback, students_idstudents, students_user_iduser, students_class_idclass, discipline_iddiscipline, mensagem)
VALUES (5003, 3001, 1003, 2006, 4003, 'Saiu na porrada com o amiguinho');
INSERT INTO feedback (Idfeedback, students_idstudents, students_user_iduser, students_class_idclass, discipline_iddiscipline, mensagem)
VALUES (5004, 3004, 1007, 2008, 4004, 'Seu único filho não está comparecendo Às aulas.');

INSERT INTO notas (idnotas, nota, unidade, discipline_iddiscipline, user_iduser)
VALUES (6001, 8, '1 unidade', 4001, 1007);
INSERT INTO notas (idnotas, nota, unidade, discipline_iddiscipline, user_iduser)
VALUES (6002, 6,5, '2 unidade', 4001, 1007);
INSERT INTO notas (idnotas, nota, unidade, discipline_iddiscipline, user_iduser)
VALUES (6003, 8,3, '3 unidade', 4001, 1007);
INSERT INTO notas (idnotas, nota, unidade, discipline_iddiscipline, user_iduser)
VALUES (6004, 7, '4 unidade', 4001, 1007);
