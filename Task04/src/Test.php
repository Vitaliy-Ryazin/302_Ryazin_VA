<?php

namespace rmvit\task04;

function run_test()
{
    echo "Ожидание: ". PHP_EOL .
        "Пример 1: TRUE". PHP_EOL .
        "Пример 2: TRUE". PHP_EOL .
        "Пример 3: FALSE". PHP_EOL .
        "Получено: ". PHP_EOL .
        "Пример 1: ";
    if (compareStrings("ab#c", "ade##c")) echo "TRUE". PHP_EOL;
    else echo"FALSE". PHP_EOL;
    echo "Пример 2: ";
    if (compareStrings("a#c", "c")) echo "TRUE". PHP_EOL;
    else echo"FALSE". PHP_EOL;
    echo "Пример 3: ";
    if (compareStrings("abc##", "a#b#")) echo "TRUE". PHP_EOL;
    else echo"FALSE". PHP_EOL;
    $stack = new Stack('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');
    $stack2 = $stack->copy();
    echo PHP_EOL . "Ожидание: " . PHP_EOL .
        "[h->g->f->e->d->c->b->a]" . PHP_EOL .
        "h" . PHP_EOL .
        "[g->f->e->d->c->b->a]" . PHP_EOL .
        "g" . PHP_EOL .
        "[g->f->e->d->c->b->a]" . PHP_EOL .
        "[g->f->e->d->c->b->a] - [h->g->f->e->d->c->b->a]" . PHP_EOL .
        "Получено: " . PHP_EOL;
    echo $stack->__toString(). PHP_EOL;
    echo $stack->pop(). PHP_EOL;
    echo $stack->__toString(). PHP_EOL;
    echo $stack->top(). PHP_EOL;
    echo $stack->__toString(). PHP_EOL;
    echo $stack->__toString(). " - ". $stack2->__toString();
}
