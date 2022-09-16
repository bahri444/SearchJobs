<?php

namespace Config;

use App\Validation\UserRules;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,

        // newrulleSet
        UserRules::class
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------



    // public $signup = [
    //     'username'     => 'required',
    //     'email'        => 'required|valid_email',
    //     'password'     => 'required',
    //     'confirmpassword'   => 'required|matches[password]',
    //     'role'              => 'required|min_length[6]|max_length[50]',
    // ];

    // public $signup_errors = [
    //     'username' => [
    //         'required' => 'You must choose a username.',
    //     ],
    //     'email' => [
    //         'valid_email' => 'Please check the Email field. It does not appear to be valid.',
    //     ],
    // ];
}
