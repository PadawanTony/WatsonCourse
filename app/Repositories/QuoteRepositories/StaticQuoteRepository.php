<?php namespace drugTeam\Repositories\QuoteRepositories;
/**
 * @author Antony Kalogeropoulos
 * @since 2/16/2016
 */

class StaticQuoteRepository implements QuoteRepository
{
    private $quotes;

    public function __construct()
    {
        $this->quotes = require __DIR__ . '/../../storage/quotes.php';
    }

    public function getRandom()
    {
        return $this->quotes[array_rand($this->quotes)];
    }
}