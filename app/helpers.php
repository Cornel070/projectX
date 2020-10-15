<?php

use App\User;
use Carbon\Carbon;


if ( ! function_exists('pageJsonData')){
    function pageJsonData(){


        $jobModalOpen = false;
        if (session('job_validation_fails')){
            $jobModalOpen = true;
        }

        $data = [
            'facility_reg_valid_fail'     => session('facility_reg_valid_fail'),
            'client_reg_valid_fail'       => session('client_reg_valid_fail'),
            'case_manager_reg_valid_fail' => session('case_manager_reg_valid_fail'),
            'report_valid_fail'           => session('report_valid_fail'),
            'home_url'                    => route('/'),
            'asset_url'                   => asset('assets'),
            'csrf_token'                  => csrf_token(),
        ];

        $routeLists = \Illuminate\Support\Facades\Route::getRoutes();

        $routes = [];
        foreach ($routeLists as $route){
            $routes[$route->getName()] = $data['home_url'].'/'.$route->uri;
        }
        $data['routes'] = $routes;

        return json_encode($data);
    }
}

if (!function_exists('getStaff')) {
	function getStaff(){
		return User::where('role', '!=', 'Super Admin')->get();
	}
}

if (!function_exists('age')) {
    function age($dob)
    {
        return Carbon::parse($dob)->diffInYears(Carbon::now());
    }
}

function competenceIcon($competence)
{
    switch ($competence) {
        case 'First Aid Certificate':
            return '<i class="icofont icofont-first-aid-alt"></i>';
            break;
        case 'Police Clearance':
            return '<i class="icofont icofont-cop-badge"></i>';
            break;
        case 'Working with Children':
            return '<i class="icofont icofont-holding-hands"></i>';
            break;
        case 'Driver\'s License':
            return '<i class="icofont icofont-license"></i>';
            break;
        default:
            return '<i class="icofont icofont-certificate-alt-1"></i>';
            break;
    }
}