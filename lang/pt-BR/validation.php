<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'date' => 'O :attribute não é uma data válida.',
    'email' => 'O :attribute deve ser um endereço de email válido.',
    'enum' => 'O valor selecionado para o :attribute é inválido.',
    'exists' => 'O valor de :attribute é invalido.',
    'integer' => 'O :attribute deve ser um inteiro.',
    'max' => [
        'array' => 'O :attribute não pode ter mais que :max itens.',
        'file' => 'O :attribute não pode ser maior que :max kilobytes.',
        'numeric' => 'O :attribute não pode ser maior que :max.',
        'string' => 'O :attribute não pode ser maior que :max caracteres.',
    ],
    'min' => [
        'array' => 'O :attribute deve ter no minimo :min itens.',
        'file' => 'O :attribute deve ter no minimo :min kilobytes.',
        'numeric' => 'O :attribute deve ter no minimo :min.',
        'string' => 'O :attribute deve ter no minimo :min caracteres.',
    ],
    'numeric' => 'O :attribute deve ser um número.',
    'required' => 'O :attribute é obrigatório.',
    'size' => [
        'array' => 'O :attribute deve conter :size itens.',
        'file' => 'O :attributedeve ter :size kilobytes.',
        'numeric' => 'O :attributedeve ter :size.',
        'string' => 'O :attributedeve ter :size caracteres.',
    ],
    'string' => 'O :attribute deve ser uma string.',
    'unique' => 'O :attribute já existe.',
    

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
