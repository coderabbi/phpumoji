<?php declare(strict_types=1);

namespace Coderabbi\Phpumoji;

use PHPUnit\Framework\TestSuite;
use PHPUnit\TextUI\ResultPrinter;
use PHPUnit\Util\Xml;

final class EmojiPrinter extends ResultPrinter
{
    protected $emojis;

    public function startTestSuite(TestSuite $suite)
    {
        $config = Xml::loadFile($GLOBALS['__PHPUNIT_CONFIGURATION_FILE'], false, true, true)->documentElement;
        $emojiset = $config->hasAttribute('emojiset') ? $config->getAttribute('emojiset') : 'phpumoji';

        $this->emojis = require(__DIR__ . "/Emojisets/{$emojiset}");

        if ($this->numTests == -1) {
            $this->numTests = count($suite);
            $this->numTestsWidth = strlen((string) $this->numTests);
            $this->maxColumn = 40 - (2 * $this->numTestsWidth);
        }

        parent::startTestSuite($suite);
    }

    protected function writeProgress($progress)
    {
        return parent::writeProgress($this->emojify($progress));
    }

    protected function writeProgressWithColor($color, $progress)
    {
        return $this->writeProgress($progress);
    }

    private function emojify(string $progress) :string
    {
        return array_values(array_filter($this->emojis, function($key) use ($progress) {
                    return strrpos(strtoupper($key), $progress) === 0;
                }, ARRAY_FILTER_USE_KEY))[0] ?? $this->emojis['pass'];
    }
}
