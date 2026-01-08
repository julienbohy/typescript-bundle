<?php

declare(strict_types=1);

namespace JulienBohy\TypescriptBundle\Command;

use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'app:typescript:generate', description: 'Generate TypeScript definitions from PHP classes')]
class GenerateCommand
{

    public function __invoke(
        #[Argument(name: 'path', description: 'Path to the directory containing the classes')]
        $path
    )
    {

    }
}
