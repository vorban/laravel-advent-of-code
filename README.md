![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![Total Stars: 0](https://img.shields.io/badge/total_stars%20⭐-0-gold?style=for-the-badge)

<div>
    <img src="https://img.shields.io/badge/2015%20⭐-0-gold">
    <img src="https://img.shields.io/badge/2016%20⭐-0-gold">
    <img src="https://img.shields.io/badge/2017%20⭐-0-gold">
    <img src="https://img.shields.io/badge/2018%20⭐-0-gold">
    <img src="https://img.shields.io/badge/2019%20⭐-0-gold">
</div>
<div>
    <img src="https://img.shields.io/badge/2020%20⭐-0-gold">
    <img src="https://img.shields.io/badge/2021%20⭐-0-gold">
    <img src="https://img.shields.io/badge/2022%20⭐-0-gold">
    <img src="https://img.shields.io/badge/2023%20⭐-0-gold">
</div>
<br />

# advent-of-code
Advent of Code solutions.

**This repository is currently in preparation for the Advent of Code 2023.**

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

Install [elf](https://github.com/vorban/elf) with `npm i -g @vorban/elf`.

```sh
# create a new day
elf prepare <year> <day>
```

Then go to `adventofcode.test/<year>/<day>/<example|input>` or run `sail artisan solve <year> <day>`.
