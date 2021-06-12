-- This script only contains the table creation statements and does not fully represent the table in database. It's still missing: indices, triggers. Do not use it as backup.

-- Squences
CREATE SEQUENCE IF NOT EXISTS users_id_seq

-- Table Definition
CREATE TABLE "public"."posts" (
    "id" int4 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
    "title" text NOT NULL,
    "content" text NOT NULL,
    "date" date NOT NULL DEFAULT '2021-06-12'::date
);

INSERT INTO "public"."posts" ("id", "title", "content", "date") VALUES
(1, 'E3 2021 : Le programme complet du salon dévoilé !', 'Nous y sommes ! L''E3 2021 débutera officiellement ce samedi 12 juin, avant de nous tenir en haleine jusqu''au 16 juin avec le décalage horaire. De nombreuses conférences et présentations ont déjà été datées, mais on attendait encore le programme complet de la part de l''ESA, organisateur du salon.', '2021-06-11');
INSERT INTO "public"."posts" ("id", "title", "content", "date") VALUES
(6, 'Bonsoir, nous sommes le 11-06-2021', 'Et c''est le weekend', '2021-06-11');
INSERT INTO "public"."posts" ("id", "title", "content", "date") VALUES
(3, 'Issa D. nouveau CTO chez Google', 'Issa D. le fameux développeur qui a changé la face d''apple vient de se faire débaucher par Google pour une somme astronomique. Une première dans le monde du numérique!', '2021-06-11');