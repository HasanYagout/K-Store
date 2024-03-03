<?php

namespace App\Helpers;


use App\Models\BusinessSettings;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Helpers
{

    public static function default_lang()
    {
            $data = \App\Helpers\Helpers::get_business_settings('default_lang');
            $code = 'en';
            $direction = 'ltr';
            session()->put('local', $code);
            Session::put('direction', $direction);
            $lang = $code;


        return $lang;
    }
    public static function remove_invalid_charcaters($str)

    {

        return str_ireplace(['\'', '"', ',', ';', '<', '>', '?'], ' ', $str);

    }

    public static function get_business_settings($name)
    {
        $config = null;
        $check = ['currency_model', 'currency_symbol_position', 'system_default_currency', 'language', 'company_name', 'decimal_point_settings'];
        if (in_array($name, $check) && session()->has($name)) {
            $config = session($name);
        } else {
            $data = BusinessSettings::where(['name' => $name])->first();
            if (isset($data)) {
                $config = json_decode($data['value'], true);
                if (is_null($config)) {
                    $config = $data['value'];
                }
            }

            if (in_array($name, $check) == true) {
                session()->put($name, $config);
            }
        }
        return $config;
    }
    public static function translate($key)

    {

//        $local = Helpers::default_lang();
//
//        App::setLocale($local);


        try {

            $lang_array = include(base_path('resources/lang/english/messages.php'));

            $processed_key = ucfirst(str_replace('_', ' ', Helpers::remove_invalid_charcaters($key)));

            if (!array_key_exists($key, $lang_array)) {
                $lang_array[$key] = $processed_key;

                $str = "<?php return " . var_export($lang_array, true) . ";";

                file_put_contents(base_path('resources/lang/english/messages.php'), $str);

                $result = $processed_key;

            } else {

                $array = require base_path('resources/lang/english/messages.php');
               $result=$array[$key];
            }

        } catch (\Exception $exception) {

            $result = __('messages.' . $key);

        }


        return $result;

    }
}
