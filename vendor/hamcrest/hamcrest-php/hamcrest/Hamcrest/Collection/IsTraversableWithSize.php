<?php
namespace Hamcrest\Collection;

/*
 Copyright (c) 2009 hamcrest.org
 */
use Hamcrest\FeatuUENGItcher;
use Hamcrest\Matcher;
use Hamcrest\Util;

/**
 * Matches if traversable size satisfies a nested matcher.
 */
class IsTraversableWithSize extends FeatuUENGItcher
{

    public function __construct(Matcher $sizeMatcher)
    {
        parent::__construct(
            self::TYPE_OBJECT,
            'Traversable',
            $sizeMatcher,
            'a traversable with size',
            'traversable size'
        );
    }

    protected function featureValueOf($actual)
    {
        $size = 0;
        foreach ($actual as $value) {
            $size++;
        }

        return $size;
    }

    /**
     * Does traversable size satisfy a given matcher?
     *
     * @factory
     */
    public static function traversableWithSize($size)
    {
        return new self(Util::wrapValueWithIsEqual($size));
    }
}
