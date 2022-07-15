# PayPal-Payment-Gateway-Integration-in-Laravel-Complete-Guide
This about how to integrate PayPal Payment Gateway using Laravel in Urdu/Hindi


## PayPal Website

Copy **Client_id** and **Secret** by going to [My Apps & Credentials] located at top left menue


## Installation Laravel Project

Make a laravel project

```bash
  composer create-project --prefer-dist laravel/laravel projectName
```

## Installation PayPal Omnipay

After it install PayPal Omnipay package

```bash
  composer require league/omnipay omnipay/paypal
```

## Make Following view files in[recources/view/]

```python

    * Route::view('/index','index')->name('index');
	
    * Route::post('/pay','paymentController@pay')->name('payment');
	
    * Route::get('/success','paymentController@success');
	
    * Route::get('/error','paymentController@error');
	
    * Route::view('/pageFail','paymentFail')->name('pageFail');
	
    * Route::view('/pageSuccess','success')->name('pageSuccess');
```

## Make a controller by running this command

```python

   * php artisan make:controller paymentController
   
```

## Make Methods in paymentController

```python

    * Pay
	* Success
	* Error
   
```
## Finally! make payment by running this command in Compand Prompt 

```python

    * php artisan serve
   
```
## Run this URL

```python

    * 127.0.0.1:8000/index
   
```
