<?php

namespace App\Repository;

class QuoteRepositoryFile implements IQuoteRepository {

    function all(): array {

        $quotes = [
            [
                'quote' => 'Is repository worth or is it just another over engineering thing?',
                'author' => 'Rajeev Kumar Majhi',
            ],
            [
                'quote'  => 'If it were easy everyone would do it',
                'author' => 'Tom Hanks ',
            ],
        ];

        return $quotes;
    }

}