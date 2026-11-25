# Ps14 Modules

Inhaltselemente (Module) als [Content Blocks](https://docs.typo3.org/p/friendsoftypo3/content-blocks/main/en-us/)
für TYPO3 v14. Ersetzt die Module der ps14-Mini-Extensions, die auf dem
Elements-IRRE von ps14_foundation 2.x aufbauten.

## Inhaltselemente

| CType | Inhalt |
|---|---|
| `ps14_accordion` | Akkordeon: Items (`tx_modules_accordion_item`) vom Typ `text` (RTE) oder `content` (verschachtelte Inhaltselemente) |
| `ps14_tabs` | Tabs: Items mit verschachtelten Inhaltselementen (geplant) |
| `ps14_timeline` | Timeline: Items mit Datum, Text und Medien (geplant) |

Die CTypes entsprechen den bisherigen Mini-Extensions (`typeName` im Content
Block), damit bestehende Inhalte, TSconfig und Rechte erhalten bleiben.

## Installation

1. `composer require ps14/ps14_modules`
2. Schema aktualisieren (`typo3 extension:setup`).

## Einbindung

Die Extension hat kein Site Set. Das TypoScript wird im Sitepackage per
`@import 'EXT:ps14_modules/Configuration/TypoScript/setup.typoscript'`
eingebunden. Die Inhaltselemente nutzen `lib.contentElement` (Layout `Default`
aus ps14_foundation) und den Data Processor `record-transformation`
(`{record}`); Template- und Partial-Pfade liegen auf Key `50`.

Verschachtelte Inhaltselemente (Typ `content` bei Akkordeon und Tabs)
verweisen über `tt_content.tx_foundation_parent` und
`tx_foundation_parent_table` auf ihr Item. Sie liegen in colPos `5628`
(Vorgabe per `overrideChildTca`), damit die Seite sie nicht zusätzlich in
der Hauptspalte rendert. Die Vorgabe greift nur im Backend-Formular; wer
per DataHandler oder MCP anlegt, setzt `colPos` selbst.
`Configuration/page.tsconfig` gibt der Spalte im Feld „Spalte“ ein Label
(`TCEFORM.tt_content.colPos.addItems.5628`).

## Basics

Gemeinsame Feldgruppen für eigene Content Blocks (auch im Sitepackage):

| Basic | Inhalt | Einbindung |
|---|---|---|
| `Ps14/Header` | Palette wie Core `headers` (Header, Layout, Position, Datum, Link, Subheader) | `- identifier: Ps14/Header` / `type: Basic` unter `fields` |
| `Ps14/Appearance` | Tabs Erscheinungsbild (Rahmen, Abstände, Links) und Kategorien | `basics: [Ps14/Appearance]` |

Felder, die ps14_foundation erst in seinen TCA-Overrides anlegt
(`tx_foundation_elements_header`, `tx_foundation_section_menu_title`), werden
per `Configuration/TCA/Overrides/tt_content.php` in die Paletten
`<CType>_headers` bzw. `<CType>_links_palette` eingefügt — neue CTypes dort
ergänzen.

## Anpassungen

Templates lassen sich im Sitepackage überschreiben
(`tt_content.<ctype>.templateRootPaths` bzw. `partialRootPaths` mit Key `110`).
