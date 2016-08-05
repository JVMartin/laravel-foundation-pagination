# Foundation for Sites 6 Pagination for Laravel 5.2
Copyright &copy; 2016 Jacob Martin

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](http://opensource.org/licenses/MIT)

Creates pagination links to comply with Foundation for Sites 6.

## Installation

Add to composer.json:

`"jvmartin/laravel5-foundation6-pagination": "5.2.*"`

This package comes with a service provider which should be added to the providers
array in your `config/app.php` file:

`'Foundation\FoundationServiceProvider',`

Add the facade:

`'Foundation' => 'Foundation\Facades\Foundation',`

## Usage

```
<div class="pagination-centered">
    {!! $users->render(Foundation::paginate($users)) !!}
</div>
```

## Credits

Based on [dansmith/laravel5-foundation](https://github.com/dansmith83/laravel5-foundation).
