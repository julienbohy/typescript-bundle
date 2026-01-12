<?php

declare(strict_types=1);

namespace JulienBohy\TypescriptBundle\Command;

use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;

#[AsCommand(name: 'app:typescript:generate', description: 'Generate TypeScript definitions from PHP classes')]
class GenerateCommand
{
    public function __invoke(
        #[Option(description: 'Path to the directory containing the classes', name: 'path', shortcut: 'p')]
        ?string $path = null,
        #[Option(description: 'Path to the directory where the generated files will be saved', name: 'output-path', shortcut: 'o')]
        ?string $outputPath = null
    )
    {

    }
}
