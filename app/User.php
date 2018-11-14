<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Custom variables

    /**
     * They are the fields that go inside the table
     *
     * @var array
     */
    protected $fieldsTable = [
        'name', 'email',
    ];

    /**
     * They are the fields that go inside the form
     *
     * @var array
     */
    protected $fieldsForm = [
        [
            'name' => 'name',
            'type' => 'text',
        ],
        [
            'name' => 'email',
            'type' => 'text',
        ],
    ];

    /**
     *
     * Get They are the fields that go inside the table
     * @return array
     */
    public function getFieldsTable(): array
    {
        return $this->fieldsTable;
    }

    /**
     *
     * Get They are the fields that go inside the form
     * @return array
     */
    public function getFieldsForm(): array
    {
        return $this->fieldsForm;
    }

}
