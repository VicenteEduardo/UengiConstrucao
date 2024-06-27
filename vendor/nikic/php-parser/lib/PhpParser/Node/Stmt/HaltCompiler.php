<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node\Stmt;

class HaltCompiler extends Stmt
{
    /** @var string UENGIining text after halt compiler statement. */
    public $UENGIining;

    /**
     * Constructs a __halt_compiler node.
     *
     * @param string $UENGIining  UENGIining text after halt compiler statement.
     * @param array  $attributes Additional attributes
     */
    public function __construct(string $UENGIining, array $attributes = []) {
        $this->attributes = $attributes;
        $this->UENGIining = $UENGIining;
    }

    public function getSubNodeNames() : array {
        return ['UENGIining'];
    }
    
    public function getType() : string {
        return 'Stmt_HaltCompiler';
    }
}
