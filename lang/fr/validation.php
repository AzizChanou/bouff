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

    'accepted' => 'The :attribute doit être accepté.',
    'accepted_if' => 'The :attribute doit être accepté lorsque :other est :value.',
    'active_url' => 'The :attribute n est pas une URL valide.',
    'after' => 'The :attribute doit être une date après la :date.',
    'after_or_equal' => 'The :attribute doit être une date postérieure ou égale à la :date.',
    'alpha' => 'The :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'The :attribute ne doit contenir que des lettres, des chiffres, des tirets et des caractères de soulignement.',
    'alpha_num' => 'The :attribute ne doit contenir que des lettres et des chiffres.',
    'array' => 'The :attribute doit être un tableau.',
    'before' => 'The :attribute doit être une date avant :date.',
    'before_or_equal' => 'The :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'array' => 'The :attribute doit comporter entre :min et :max items.',
        'file' => 'The :attribute doit être compris entre :min et :max kilobytes.',
        'numeric' => 'The :attribute doit être compris entre  :min et :max.',
        'string' => 'The :attribute doit être compris entre  :min et :max caractères.',
    ],
    'boolean' => 'The :attribute doit être vrai ou faux.',
    'confirmed' => 'The :attribute confirmation ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'The :attribute n est pas une date valide.',
    'date_equals' => 'The :attribute doit être une date égale à :date.',
    'date_format' => 'The :attribute ne correspond pas au format :format.',
    'declined' => 'The :attribute doit être rejeté.',
    'declined_if' => 'The :attribute doit être refusé lorsque :other est :value.',
    'different' => 'The :attribute et :other doivent être différents.',
    'digits' => 'The :attribute doit être  :digits digits.',
    'digits_between' => 'The :attribute doit être compris entre  :min et :max digits.',
    'dimensions' => 'The :attribute a des dimensions d image non valides.',
    'distinct' => 'The :attribute a une valeur en double.',
    'doesnt_end_with' => 'The :attribute ne peut se terminer par :value.',
    'doesnt_start_with' => 'The :attribute ne peut commencer par :value.',
    'email' => 'The :attribute doit être une adresse électronique valide',
    'ends_with' => 'The :attribute doit se terminer par l un des codes suivants :value.',
    'enum' => 'The selected :sélectionné n est pas valide.',
    'exists' => 'The selected :sélectionné n est pas valide.',
    'file' => 'The :attribute doit être un fichier.',
    'filled' => 'The :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'The :attribute doit avoir plus de :value éléments.',
        'file' => 'The :attribute doit être supérieur à :value kilobytes.',
        'numeric' => 'The :attribute doit être supérieur à :value.',
        'string' => 'The :attribute doit être supérieur à :value caractères.',
    ],
    'gte' => [
        'array' => 'The :attribute doit avoir des éléments :value ou plus.',
        'file' => 'The :attribute doit être supérieur ou égal à :value kilobytes.',
        'numeric' => 'The :attribute doit être supérieur ou égal à :value.',
        'string' => 'The :attribute doit être supérieur ou égal à :value caractères.',
    ],
    'image' => 'The :attribute doit être une image.',
    'in' => 'The selected :attribute n est pas valide.',
    'in_array' => 'The :attribute  n existe pas dans :other.',
    'integer' => 'The :attribute doit être un nombre entier.',
    'ip' => 'The :attribute doit être une adresse IP valide',
    'ipv4' => 'The :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'The :attribute doit être une adresse IPv6 valide.',
    'json' => 'The :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'array' => 'The :attribute doit avoir moins d éléments que :value.',
        'file' => 'The :attribute doit être inférieur à :value kilobytes.',
        'numeric' => 'The :attribute doit être inférieur à :value.',
        'string' => 'The :attribute doit être inférieur à :value caractères.',
    ],
    'lte' => [
        'array' => 'The :attribute ne doit pas avoir plus de :value éléments.',
        'file' => 'The :attribute doit être inférieur ou égal à : valeur kilobytes.',
        'numeric' => 'The :attribute doit être inférieur ou égal à :value.',
        'string' => 'The :attribute doit être inférieur ou égal à :value caractères.',
    ],
    'mac_address' => 'The :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'The :attribute ne doit pas avoir plus de :max éléments.',
        'file' => 'The :attribute ne doit pas être supérieur à :max kilobytes.',
        'numeric' => 'The :attribute ne doit pas être supérieur à :max.',
        'string' => 'The :attribute ne doit pas être supérieur à :max caractères.',
    ],
    'mimes' => 'The :attribute doit être un fichier de type :value.',
    'mimetypes' => 'The :attribute doit être un fichier de type  :value.',
    'min' => [
        'array' => 'The :attribute doit avoir au moins :min éléments.',
        'file' => 'The :attribute doit avoir au moins :min kilobytes.',
        'numeric' => 'The :attribute doit avoir au moins :min.',
        'string' => 'The :attribute doit comporter au moins :min caractères',
    ],
    'multiple_of' => 'The :attribute doit être un multiple de :value.',
    'not_in' => 'The selected :attribute n est pas valide.',
    'not_regex' => 'The :attribute le format est invalide.',
    'numeric' => 'The :attribute doit être un nombre.',
    'password' => [
        'letters' => 'The :attribute doit contenir au moins une lettre.',
        'mixed' => 'The :attribute doit contenir au moins une lettre majuscule et une lettre minuscule.',
        'numbers' => 'The :attribute doit contenir au moins un chiffre.',
        'symbols' => 'The :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'The given :attribute est apparu dans une fuite de données. Veuillez choisir un autre :attribute.',
    ],
    'present' => 'The :attribute  doit être présent.',
    'prohibited' => 'The :attribute  est interdit.',
    'prohibited_if' => 'The :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'The :attribute est interdit si :other est dans :value.',
    'prohibits' => 'The :attribute interdit à :other d être présent.',
    'regex' => 'The :attribute, le format est invalide..',
    'required' => 'The :attribute  est obligatoire.',
    'required_array_keys' => 'The :attribute  doit contenir des entrées  for: :value.',
    'required_if' => 'The :attribute est obligatoire lorsque :other est :value.',
    'required_unless' => 'The :attribute est obligatoire si :other est dans :value.',
    'required_with' => 'The :attribute est obligatoire lorsque :value est présente.',
    'required_with_all' => 'The :attribute est obligatoire lorsque :value est présente.',
    'required_without' => 'The :attribute est obligatoire lorsque :value n est pas présente.',
    'required_without_all' => 'The :attribute est obligatoire si aucune des :value est présente.',
    'same' => 'The :attribute et :other doivent être identiques.',
    'size' => [
        'array' => 'The :attribute doit contenir :size  des éléments.',
        'file' => 'The :attribute doit être :size kilobytes.',
        'numeric' => 'The :attribute doit être  :size.',
        'string' => 'The :attribute doit être :size charactères.',
    ],
    'starts_with' => 'The :attribute doit commencer par l un des éléments suivant :value.',
    'string' => 'The :doit être une chaîne de caractères.',
    'timezone' => 'The :attribute doit être un fuseau horaire valide.',
    'unique' => 'The :attribute a déjà été pris.',
    'uploaded' => 'The :attribute n a pas pu être téléchargé.',
    'url' => 'The :attribute doit être une URL valide.',
    'uuid' => 'The :attribute doit être un UUID valide.',

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
