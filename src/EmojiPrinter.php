<?php declare(strict_types=1);

namespace Coderabbi\Phpumoji;

use LitEmoji\LitEmoji;
use PHPUnit\Framework\TestSuite;
use PHPUnit\TextUI\ResultPrinter;
use PHPUnit\Util\Xml;

final class EmojiPrinter extends ResultPrinter
{
    private $emojis;

    public function startTestSuite(TestSuite $suite)
    {
        $phpunit = Xml::loadFile($GLOBALS['__PHPUNIT_CONFIGURATION_FILE'], false, true, true)->documentElement;

        $emojiset = $phpunit->hasAttribute('emojiset') ? $phpunit->getAttribute('emojiset') : 'phpumoji';

        $emojifile = array_merge(parse_ini_file(__DIR__ . '/../config/.emojifile', true), file_exists(substr($GLOBALS['__PHPUNIT_CONFIGURATION_FILE'], 0, strrpos($GLOBALS['__PHPUNIT_CONFIGURATION_FILE'], '/')) . '/.emojifile') ?
            parse_ini_file(substr($GLOBALS['__PHPUNIT_CONFIGURATION_FILE'], 0, strrpos($GLOBALS['__PHPUNIT_CONFIGURATION_FILE'], '/')) . '/.emojifile', true) : []);

        $this->emojis = $emojifile[$emojiset] ?? $emojifile['phpumoji'];

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
        return LitEmoji::encodeUnicode(':' . (array_values(array_filter($this->emojis, function ($key) use ($progress) {
            return strrpos(strtoupper($key), $progress) === 0;
        }, ARRAY_FILTER_USE_KEY))[0] ?? $this->emojis['pass']) . ': ') ;
    }
}
