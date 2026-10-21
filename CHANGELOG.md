# CHANGELOG

## [2.0.0] - 2026-10-14

### Changed
* [BC] Requires PHP 8.5
* [BC] `RepresentsMoney::multiply()`, `divide()` and `extractPercentage()` expect a `\RoundingMode` instead of an integer; the default is `\RoundingMode::HalfAwayFromZero`, which equals `PHP_ROUND_HALF_UP`
* [BC] Arithmetic methods of `RepresentsMoney` return `static`
* [BC] `RepresentExtractedPercentage` is renamed to `RepresentsExtractedPercentage`
