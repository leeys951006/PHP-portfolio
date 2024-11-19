<?php

namespace App\Controllers;

class Project extends BaseController
{
    public function index(): string
    {
        return view('Project/index');
    }

    // public function getCards()
    // {
    //     $cards = [
    //         ['title' => 'PHP Portfolio', 'type' => 'Solo'],
    //         ['title' => 'Next.js Portfolio', 'type' => 'Solo'],
    //         ['title' => 'Codeigniter 게시판', 'type' => 'Solo'],
    //         ['title' => '여행 공유 사이트', 'type' => 'Solo'],
    //         ['title' => '영양제 조절 사이트', 'type' => 'Solo'],
    //         ['title' => '스트레스 블로그', 'type' => 'Solo'],
    //         ['title' => '랜덤 포켓몬', 'type' => 'Solo'],
    //         ['title' => 'ERP System', 'type' => 'Team'],
    //     ];

    //     $filter = $this->request->getPost('filter');

    //     error_log("Filter: $filter");

    //     if($filter && $filter !== 'ALL') {
    //         $cards = array_filter($cards, function ($card) use ($filter) {
    //             return $card['type'] === $filter;
    //         });
    //     }
    //     return $this->response->setJSON(array_values($cards)); 
    // }

    public function PHP(): string
    {
        return view('Project/PHP_Portfolio');
    }

    public function Next(): string
    {
        return view('Project/Next');
    }

    public function Drug(): string
    {
        return view('Project/Drug');
    }
    public function ERP(): string
    {
        return view('Project/ERP_System');
    }
    public function PlanT(): string
    {
        return view('Project/PlanT');
    }
    public function Poketmon(): string
    {
        return view('Project/Poketmon');
    }
    public function Stress(): string
    {
        return view('Project/Stress');
    }
   
}
