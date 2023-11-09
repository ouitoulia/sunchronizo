# Sunchronìzo

![GitHub](https://img.shields.io/github/license/ouitoulia/sunchronizo?style=for-the-badge)
![GitHub release (latest SemVer)](https://img.shields.io/github/v/release/ouitoulia/sunchronizo?sort=semver&style=for-the-badge)
![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/ouitoulia/sunchronizo/drupal/core-recommended?style=for-the-badge)
![Packagist Downloads](https://img.shields.io/packagist/dt/ouitoulia/sunchronizo?style=for-the-badge)

Sunchronìzo è un modulo Drupal che importa dati nella distribuzione Drupal Ouitoulía.
Questo modulo usa `drupal/migrate` per importare i dati presenti nel repository [Krène](https://github.com/ouitoulia/krene)

## Requisiti
- Drupal: >= 10
- Profilo Drupal: `minimal`
- Moduli contrib: `migrate_plus`, `migrate_tools`
- Moduli Ouitoulìa: `lexika`, `themethla`

## Installazione
Per aggiungere e installare il modulo alla tua installazione esegui:
```bash
$ composer require ouitoulia/sunchronizo
$ drush -y en sunchronizo
```

## Descrizione
Questo modulo importa diversi tipi di dato, dalle tassonomie ai dati demo.

![Screenshot della lista delle migrazioni](docs/migrations.png "Screenshot della lista delle migrazioni")

## Uso del modulo
Puoi utilizzare il modulo:
- da interfaccia grafica;
- da CLI se hai bisogno di automatizzare l'installazione o l'aggiornamento.

In entrambi i casi, leggi la documentazione del modulo
Drupal `migrate` per maggiori dettagli.

Di seguito un esempio delle voci importate nel vocabolario "Percorsi di studio"

![Screenshot della lista delle voci importate](docs/percorsi_di_studio.png "Screenshot della lista delle voci importate")

Di seguito un esempio dei ruoli importati

![Screenshot ruoli](docs/ruoli.png "Screenshot ruoli")

## License

Copyright (C) 2023 https://github.com/ouitoulia

This program is free software: you can redistribute it and/or modify it under the terms of the Affero GNU General Public License version 3 as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

Questo è un software libero: puoi ridistribuirlo e/o modificarlo secondo i termini della Affero GNU General Public License versione 3 pubblicata dalla Free Software Foundation.

Questo programma è distribuito nella speranza che possa essere utile, ma SENZA ALCUNA GARANZIA; senza nemmeno la garanzia implicita di COMMERCIABILITÀ o IDONEITÀ PER UNO SCOPO PARTICOLARE. Vedere la GNU General Public License per maggiori dettagli.