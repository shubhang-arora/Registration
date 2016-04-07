<?php

namespace Illuminate\Contracts\Auth;

interface Registrar
{
    /**
     * Get a validator for an incoming auth request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data);

    /**
     * Create a new user instance after a valid auth.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Auth\Authenticatable
     */
    public function create(array $data);
}
