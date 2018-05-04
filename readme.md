
## 9. https://app.pluralsight.com/player?course=code-school-from-form-to-table-with-laravel&author=hampton-paulk&name=88070676-c756-40e5-acb8-1c6084acaf41&clip=1&mode=live 1:16
## https://laravel.com/docs/5.5/collections#method-pluck
  App\Models\Market::get()->pluck('name', 'id')->sortBy('name');



## 8. create a table 
## https://app.pluralsight.com/player?course=code-school-from-form-to-table-with-laravel&author=hampton-paulk&name=88070676-c756-40e5-acb8-1c6084acaf41&clip=0&mode=live 2:54 ( A pivot table that is connected by both side tables )

## the following command:
##          make migration,     file name,                      create cmd,     table name
php artisan make:migration      create_farm_market_pivot_table  --create        farm_market

## 7.2 controller: $this->validate() "bail"
## Bail will exit out of our validation routine on any errors on any field in order.
public function store(Request $requets) {
    $this->validate($request, [
        'name' => 'bail| required|unique:markets|max:255',
        'website' => 'bail| required',
        'city' => 'bail| required'
    ]);
}

## 7. controller:  $this->validate()
public function store(Request $requets) {
    $this->validate($request, [
        'name' => 'required|unique:markets|max:255',
        'website' => 'required',
        'city' => 'required'
    ]);
}

## 6. All routes
php artisan route:list


## 5. Route::resource.  (the routes needed to work with a model resource)
https://app.pluralsight.com/player?course=code-school-from-form-to-table-with-laravel&author=hampton-paulk&name=f072a59f-f7f5-41fa-9304-8a03875606ac&clip=0&mode=live  3:30



## 4. controller
php artisan make:controller -m Models\Market  MarketController

## 3. 設定 model 中可填寫的欄位: $fillable
class Market extends Model
{
    protected $fillable = ['name', 'city', 'website'];
}

## 2. migrate
php artisan migrate

## 1. make a model
php artisan make:model -m Market

## Tutorial 
https://app.pluralsight.com/library/courses/code-school-from-form-to-table-with-laravel/table-of-contents















<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
