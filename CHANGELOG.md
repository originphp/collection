# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.1.1] - 2020-08-28

### Changed

- Changed interface used from `Interator` to `IteratorAggregate` and removed methods `reset`, `current`, `key`, `next`, `rewind` and `valid`.

## [1.1.0] - 2020-08-04

### Added

- Added `indexBy`

## [1.0.1] - 2020-04-01

### Changed

- Changed .travis config for 7.4 config

### Fixed

- Fixed return types for mathematical functions avg,median
- Added return null values for avg and median

## [1.0.0] - 2019-10-11

This component has been decoupled from the [OriginPHP framework](https://www.originphp.com/).