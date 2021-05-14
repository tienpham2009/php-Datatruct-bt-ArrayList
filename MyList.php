<?php


use JetBrains\PhpStorm\Pure;

class MyList
{
    private int $size;
    private array $elements;
    private array $originArray;

    public function __construct(array $elements)
    {
        $this->size = 0;
        $this->elements = $elements;
        $this->originArray = $elements;

    }

    public function insert($index, $object): void
    {
        $this->elements[$index] = $object;
    }

    public function remove($index): void
    {
        if (!$this->isEmpty()) {
            array_splice($this->elements, $index, 1);
        } else {
            echo "Array is empty";
        }

    }

    public function get($index)
    {
        if (!$this->isEmpty()) {
            echo $this->elements[$index];
        } else {
            echo "Array is Empty";
        }

    }

    public function clear(): void
    {
        $this->elements = [];
        echo "Array is Empty";
    }

    public function addAll($array)
    {
        $this->elements = array_merge($this->elements, $array);

    }

    #[Pure] public function indexOf($object): int
    {
        if (!$this->isEmpty()) {
            return array_search($object, $this->elements);
        } else {
            return -1;
        }

    }

    public function isEmpty(): bool
    {
        if (empty($this->elements)) {
//            echo -1;
            return true;
        } else {
//            echo 1;
            return false;
        }
    }

    public function sort()
    {
        if (!$this->isEmpty()) {
            rsort($this->elements);
        } else {
            echo "Array is Empty";
        }


    }

    public function show()
    {
        if ($this->isEmpty()) {
            echo "Array is Empty";
        } else {
            for ($i = 0; $i < count($this->elements); $i++) {
                echo $this->elements[$i] . ",";
            }
        }

    }

    public function size(): int
    {
        return count($this->elements);
    }

    public function reset(): array
    {
        return $this->originArray;
    }


}