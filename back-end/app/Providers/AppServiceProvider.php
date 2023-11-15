<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Arr;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {   

        //Validator For Polymorphic Types
        Validator::extend('poly_exists_comment', function ($attribute, $value, $parameters, $validator) {
            
            $allRelations= [
                'ticket' => '\App\Models\Ticket',
                'issue' => '\App\Models\Issue',
            ];

            if (!$objectType = Arr::get($validator->getData(), $parameters[0], false)) {
                return false;
            }

            if($objectType == 'ticket' || $objectType == 'issue')
            {
                $type = $allRelations[$objectType];
                return !empty(resolve($type)->find($value));
            }
            return false;
        });

         //Validator For Polymorphic Types
         /*
            $attribute: 
         */
         Validator::extend('poly_exists_file', function ($attribute, $value, $parameters, $validator) {
            
            $allRelations= [
                'comment' => '\App\Models\Comment',
                'supportArticle' => '\App\Models\SupportArticle',
            ];

            if (!$objectType = Arr::get($validator->getData(), $parameters[0], false)) {
                return false;
            }

            if($objectType == 'comment' || $objectType == 'supportArticle')
            {
                $type = $allRelations[$objectType];
                return !empty(resolve($type)->find($value));
            }
            return false;
        });
    }
}
