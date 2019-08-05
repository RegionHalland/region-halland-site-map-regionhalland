# Visa Site Map för regionhalland.se

## Hur man använder Region Hallands plugin "region-halland-site-map-regionhalland"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-site-map-regionhalland".


## Användningsområde

Denna plugin visar en Site Map i plugin-foldern, dvs
```sh
http://[SITE-NAME]/app/plugins/region-halland-site-map-regionhalland/site-map/site-map.php
```


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell via den medföljande filen:
```sh
LICENSE (https://github.com/RegionHalland/region-halland-site-map-regionhalland/blob/master/LICENSE)
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-site-map-regionhalland.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-site-map-regionhalland.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-site-map-regionhalland": "1.0.0"
},
```


## Versionhistorik

### 1.3.0
- Lagt till information om licensmodell
- Bifogat fil med licensmodell

### 1.2.0
- Kodstädning och kodrensning

### 1.1.1
- Justering av felaktig load-path

### 1.1.0
- Output som xml istället för länk-lista

### 1.0.1
- Bugg med felaktig php-avslutning

### 1.0.0
- Första version