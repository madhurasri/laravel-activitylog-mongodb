<p align="center"><img src="/art/socialcard.png" alt="Social Card of Laravel Activity Log"></p>

# Log activity inside your Laravel app with MongoDB support

[![Latest Version on Packagist](https://img.shields.io/packagist/v/madhurasri/laravel-activitylog-mongodb.svg?style=flat-square)](https://packagist.org/packages/madhurasri/laravel-activitylog-mongodb)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/madhurasri/laravel-activitylog-extended/run-tests?label=tests)](https://github.com/madhurasri/laravel-activitylog-mongodb/actions/workflows/run-tests.yml)
[![Check & fix styling](https://github.com/madhurasri/laravel-activitylog-mongodb/workflows/Check%20&%20fix%20styling/badge.svg)](https://github.com/madhurasri/laravel-activitylog-mongodb/actions/workflows/php-cs-fixer.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/madhurasri/laravel-activitylog-mongodb.svg?style=flat-square)](https://packagist.org/packages/madhurasri/laravel-activitylog-mongodb)

This is an extended version of the popular `spatie/laravel-activitylog` package which allows you to easily log activities of your Laravel applications, such as user logins, profile updates, and more. It can also automatically log model events. This extended package allows you to store all activity in a MongoDB collection.

## Installation

You can install the package via composer:

```bash
composer require madhurasri/laravel-activitylog-mongodb
```

The package will automatically register itself.

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Madhurasri\Activitylog\ActivitylogServiceProvider" --tag="activitylog-config"
```


## Usage

Here's a demo of how you can use it:

```php
activity()->log('Look, I logged something');
```

You can retrieve all activity using the `Madhurasri\Activitylog\Models\Activity` model.

```php
Activity::all();
```

Here's a more advanced example:

```php
activity()
   ->performedOn($anEloquentModel)
   ->causedBy($user)
   ->withProperties(['customProperty' => 'customValue'])
   ->log('Look, I logged something');

$lastLoggedActivity = Activity::all()->last();

$lastLoggedActivity->subject; //returns an instance of an eloquent model
$lastLoggedActivity->causer; //returns an instance of your user model
$lastLoggedActivity->getExtraProperty('customProperty'); //returns 'customValue'
$lastLoggedActivity->description; //returns 'Look, I logged something'
```

Here's an example on [event logging](https://spatie.be/docs/laravel-activitylog/advanced-usage/logging-model-events).

```php
$newsItem->name = 'updated name';
$newsItem->save();

//updating the newsItem will cause the logging of an activity
$activity = Activity::all()->last();

$activity->description; //returns 'updated'
$activity->subject; //returns the instance of NewsItem that was saved
```

Calling `$activity->changes()` will return this array:

```php
[
   'attributes' => [
        'name' => 'updated name',
        'text' => 'Lorum',
    ],
    'old' => [
        'name' => 'original name',
        'text' => 'Lorum',
    ],
];
```
## Documentation

You'll find the documentation of original package on [https://spatie.be/docs/laravel-activitylog/introduction](https://spatie.be/docs/laravel-activitylog/introduction).

Find yourself stuck using the package? Found a bug? Do you have general questions or suggestions for improving the activity log mongodb pakcage? Feel free to [create an issue on GitHub](https://github.com/madhurasri/laravel-activitylog-mongodb/issues), we'll try to address it as soon as possible.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes.

## Credits

-   [Freek Van der Herten](https://github.com/freekmurze)
-   [Sebastian De Deyne](https://github.com/sebastiandedeyne)
-   [Tom Witkowski](https://github.com/Gummibeer)
-   [All Contributors](../../contributors)

And a special thanks to [Caneco](https://twitter.com/caneco) for the logo and [Ahmed Nagi](https://github.com/nagi1) for all the work he put in `v4`.

## Support spatie

Spatie invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support them by [buying one of their paid products](https://spatie.be/open-source/support-us).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
