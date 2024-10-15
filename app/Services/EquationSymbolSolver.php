<?php
use App\Services\Log;
namespace App\Services;

class EquationSymbolSolver {
    // letters equation "HIER + GIBT + ES = NEUES"
    private $letters = ['H', 'I', 'E', 'R', 'G', 'B', 'T', 'S', 'N', 'U'];
    private $solutions = [];
    private $attempts = 0;

    public function solve() {
        $numberSet = range(0, 9);
        
        $this->transform($numberSet, 0); // Begin recursive digit transformation
        return [
            'attempts' => $this->attempts, 
            'solutions' => $this->solutions, 
        ];
    }

    // Recursive function to generate permutations of digits
    private function transform(&$numberSet, $index) {
        if ($index == 10) {
            // mapping of letters to digits
            $mapping = array_combine($this->letters, $numberSet);

            // skip first letters are zero
            if ($mapping['H'] == 0 || $mapping['G'] == 0 || $mapping['E'] == 0 || $mapping['N'] == 0) {
                return;
            }

            // convert words to num
            $HIER = $this->toNumber($mapping, 'HIER');
            $GIBT = $this->toNumber($mapping, 'GIBT');
            $ES = $this->toNumber($mapping, 'ES');
            $NEUES = $this->toNumber($mapping, 'NEUES');

            $this->attempts++; // Increment attempts count

            // Check if the equation is true
            if ($HIER + $GIBT + $ES == $NEUES) {
                $this->solutions[] = [
                    'HIER' => $HIER,
                    'GIBT' => $GIBT,
                    'ES' => $ES,
                    'NEUES' => $NEUES,
                    'resultLetters' => $mapping
                ];
            }
            return;
        }  

        // Generate permutations by swapping elements
        for ($i = $index; $i < 10; $i++) {
            $temp = $numberSet[$index];
            $numberSet[$index] = $numberSet[$i];
            $numberSet[$i] = $temp;
            $this->transform($numberSet, $index + 1); 
            $temp = $numberSet[$index];
            $numberSet[$index] = $numberSet[$i];
            $numberSet[$i] = $temp; 
        }
    }

    // word into num using the letter-to-digit mapping
    private function toNumber($mapping, $word) {
        $number = 0;
        for ($i = 0; $i < strlen($word); $i++) {
            $number = $number * 10 + $mapping[$word[$i]];
        }
        return $number;
    }
}
