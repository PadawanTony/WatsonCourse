<?php namespace drugTeam\Controllers;

use drugTeam\Repositories\QuoteRepositories\StaticQuoteRepository;
use drugTeam\Repositories\UserRepositories\StaticUserRepository;

/**
 * @author Antony Kalogeropoulos
 * @since 2/16/2016
 */
class WelcomeController extends Controller
{
    private $userRepository;
    private $quotesRepository;

    public function __construct()
    {
        parent::__construct();


        $this->userRepository = new StaticUserRepository();
        $this->quotesRepository = new StaticQuoteRepository();
    }

    /**
     * Show all users
     */
    public function index()
    {
        $title = 'Food~For~Thought';

        $users = $this->userRepository->getAll();

        shuffle($users);

        $randomQuote = $this->quotesRepository->getRandom();

        return $this->views->render('welcome', compact('users', 'title', 'randomQuote'));
    }
}