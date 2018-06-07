<?php
namespace Generator;

class BubbleSorting
{
    /** @var int */
    public $size;

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return BubbleSorting
     */
    public function setSize(int $size): BubbleSorting
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @param array $ptab
     *
     * @return array
     */
    public function solve(array $ptab): array
    {
        for ($i = 0; $i < ($this->size - 1); $i++) {
            for ($j = ($i + 1); $j < $this->size; $j++) {
                if ($ptab[$j] < $ptab[$i]) {
                    $temp = $ptab[$i];
                    $ptab[$i] = $ptab[$j];
                    $ptab[$j] = $temp;
                }
            }
        }
        return $ptab;
    }

    /**
     * @return array
     */
    public function generate(): array
    {
        $iterator = 0;
        while ($this->size > $iterator) {
            $iterator++;
            $inputs[] = random_int(1, 1000000);
        }

        return $inputs;
    }
}