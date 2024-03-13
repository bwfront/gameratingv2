CREATE TABLE tx_gameskey_domain_model_games (
	title varchar(255) NOT NULL DEFAULT '',
	description text NOT NULL DEFAULT '',
	rating double(11,2) NOT NULL DEFAULT '0.00',
	rating_count int(11) NOT NULL DEFAULT '0',
	rating_sum int(11) NOT NULL DEFAULT '0',
	image int(11) unsigned NOT NULL DEFAULT '0',
	rel_date date DEFAULT NULL,
	fsk18 smallint(1) unsigned NOT NULL DEFAULT '0',
	action smallint(1) unsigned NOT NULL DEFAULT '0',
	multiplayer smallint(1) unsigned NOT NULL DEFAULT '0',
	singleplayer smallint(1) unsigned NOT NULL DEFAULT '0'
);
