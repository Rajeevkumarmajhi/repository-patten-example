<?php

namespace App\Repository;

class QuoteRepository implements IQuoteRepository {

    function all(): array {

        $quotes = [
            'quote'  => 'If it were easy everyone would do it',
            'author' => 'Tom Hanks ',
        ];

        return $quotes;
    }

}