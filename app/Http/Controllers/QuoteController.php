<?php

namespace App\Http\Controllers;

use App\Repository\IQuoteRepository;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    private IQuoteRepository $iQuoteRepo;

    public function __construct(IQuoteRepository $iQuoteRepo)
    {
        $this->iQuoteRepo = $iQuoteRepo;
    }

    public function index()
    {
        $quotes = $this->iQuoteRepo->all();
        return response()->json([
            'status' => true,
            'data'   => $quotes,
            'message'=> 'Query OK',
        ]);
    }
}
