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

**This is not made to be hosted.** This is made to boostrap
your yearly Advent of Code solving routine as a Laravel dev,
by removing the hassle of preparing a php environment with
appropriate helpers.

Released under the MIT License.
See [LICENSE](./LICENSE).

Copyright :copyright: 2023 {{ $your_name }}

## AoC compliance and usage of this template

This repository does follow the [automation guidelines](https://www.reddit.com/r/adventofcode/wiki/faqs/automation) on the [/r/adventofcode](https://www.reddit.com/r/adventofcode/) community wiki. Specifically:

- No automation is provided
- Outbound calls to the /events endpoint are cached for 24h (see `app/Console/UpdateBadgesCommand.php`)
- Once inputs are downloaded, they are cached locally indefinitly (see `app/Console/PrepareCommand`)
- If you suspect your input is corrupted, you can run the command again to regenerate from cache. Manual deletion of cache files is required to enable a fresh download.

The User-Agent header is set to information you need to provide in your `.env`.
It must be set to the owner of the end-repository (**not the template repository owner**).

This template repository is provided as-is,
as detailed in the [LICENSE](./LICENSE) file.

By using this template repository, you become the
one and only maintainer of your new repository.

By using this template repository, you take responsability
over your usage of the provided scripts. The original author
designed them to be executed 25 times a year, no more.

Although a Laravel application, this code is not fit
to be hosted. Specifically, the code as-is is not fit
for any kind of automation or production environments.

## Installation

First, click on "use this template" and generate a new repo based on this one.

```sh
git clone git@github.com:{{ $your_name }}/{{ $your_repo_name }}.git
cd advent-of-code

cp .env.example .env
```

**Specify in the .env the values for**:
- your GitHub username
- your GitHub email
- the name of your repository

These are **required** by the AoC maintainers to track
abusive use of the website.
Without those values, the scripts **will** get banned.

### Using docker ?

```sh
docker run --rm --interactive --tty --volume $PWD:/app composer install

vendor/bin/sail up -d
echo Enjoy!
```

### Got a local dev environment ?

```sh
composer install
echo Enjoy!
```

## Usage

Use `sail` or `php` depending on wether you want to use docker or not.

```sh
# generate code file and download input
sail artisan aoc:prepare {year} {day}

# hopefully first try !
sail artisan aoc:run {year} {day} {--example}

# once you're done for the day
sail artisan aoc:update-badges
```
