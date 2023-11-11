<div>
    <div>
        <img alt="Laravel"
             src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white">
        <img alt="Total Stars: 0"
             src="https://img.shields.io/badge/total_stars%20⭐-0-fcd34d?style=for-the-badge">
    </div>
    <br />
    <img alt="2015: 0" src="https://img.shields.io/badge/2015%20⭐-0-a8a29e">
    <img alt="2016: 0" src="https://img.shields.io/badge/2016%20⭐-0-a8a29e">
    <img alt="2017: 0" src="https://img.shields.io/badge/2017%20⭐-0-a8a29e">
    <img alt="2018: 0" src="https://img.shields.io/badge/2018%20⭐-0-a8a29e">
    <img alt="2019: 0" src="https://img.shields.io/badge/2019%20⭐-0-a8a29e">
    <br />
    <img alt="2020: 0" src="https://img.shields.io/badge/2020%20⭐-0-a8a29e">
    <img alt="2021: 0" src="https://img.shields.io/badge/2021%20⭐-0-a8a29e">
    <img alt="2022: 0" src="https://img.shields.io/badge/2022%20⭐-0-a8a29e">
    <img alt="2023: 0" src="https://img.shields.io/badge/2023%20⭐-0-a8a29e">
</div>
<br />

# laravel-advent-of-code

Advent of Code template repository.

**This repository is currently in preparation for the Advent of Code 2023
and not yet ready for use.**

Released under the MIT License.
See <a href="./LICENSE">./LICENSE</a>.

Copyright :copyright: 2023 Valentin Orban

## Installation

```sh
git clone git@github.com:vorban/advent-of-code.git
cd advent-of-code
docker run --rm --interactive --tty --volume $PWD:/app composer install

sail up -d
sail npm run build
echo "Enjoy!"
```

## Usage

```sh
sail artisan aoc:prepare {year} {day}
sail artisan aoc:run {year} {day} {--example}
sail artisan aoc:update-badges
```

You can also go to `http://adventofcode.test/{year}/{day}` for a detailed view
of the input and example data, and the silver and gold results with timings, and the ability to rerun the code.

The homepage `http://adventofcode.test` contains links to all prepared days.
