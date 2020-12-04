
CREATE TABLE user_tbl (
    id integer DEFAULT nextval('user_id_seq'::regclass) NOT NULL,
    username character varying(15) NOT NULL,
    password text NOT NULL,
    email character varying(30) NOT NULL,
    type character varying(15) NOT NULL
);

INSERT INTO user_tbl (id, username, password, email, type) VALUES (1, 'admin', '96e79218965eb72c92a549dd5a330112', 'soengkanel@gmail.com', 'admin');


