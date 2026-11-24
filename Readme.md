# Ps14 Modules

Inhaltselemente (Module) als [Content Blocks](https://docs.typo3.org/p/friendsoftypo3/content-blocks/main/en-us/)
für TYPO3 v14. Ersetzt die Module der ps14-Mini-Extensions, die auf dem
Elements-IRRE von ps14_foundation 2.x aufbauten.

## Inhaltselemente

| CType | Inhalt |
|---|---|
| `ps14_accordion` | Akkordeon: Items mit Text oder verschachtelten Inhaltselementen (geplant) |
| `ps14_tabs` | Tabs: Items mit verschachtelten Inhaltselementen (geplant) |
| `ps14_timeline` | Timeline: Items mit Datum, Text und Medien (geplant) |

Die CTypes entsprechen den bisherigen Mini-Extensions (`typeName` im Content
Block), damit bestehende Inhalte, TSconfig und Rechte erhalten bleiben.

## Installation

1. `composer require ps14/ps14_modules`
2. Schema aktualisieren (`typo3 extension:setup`).

## Anpassungen

Templates lassen sich im Sitepackage überschreiben
(`tt_content.<ctype>.templateRootPaths` mit höherem Key).
