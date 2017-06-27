SELECT
  `id`,
  `nom`,
  `prenom`,
  `mail`,
  `message`
FROM
  `messagerie`
WHERE 1;



INSERT INTO `messagerie`(
  `id`,
  `nom`,
  `prenom`,
  `mail`,
  `message`
) VALUES (
:id,
:nom,
:prenom,
:mail,
:message
);


UPDATE `messagerie`
SET
  `id`= :id,
  `nom`= :nom,
  `prenom`= :prenom,
  `mail`= :mail,
  `message`= :message
  WHERE
  `id` =  :id;
