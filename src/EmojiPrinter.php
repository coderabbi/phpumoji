<?php declare(strict_types = 1);

namespace Coderabbi\Phpumoji;

use DOMElement;
use LitEmoji\LitEmoji;
use PHPUnit\Framework\TestSuite;
use PHPUnit\TextUI\ResultPrinter;
use PHPUnit\Util\Xml;

final class EmojiPrinter extends ResultPrinter
{
    const CONFIG = __DIR__ . '/../config';
    const EMOJIFILE = '/.emojifile';
    const EMOJISET = 'phpumoji';
    const SPACER = ' ';

    private $emojis;

    public function startTestSuite(TestSuite $suite)
    {
        $this->emojis = $this->emojis(
            $this->emojifile($this->projectroot()),
            $this->emojiset($this->phpunitxml())
        );

        if ($this->numTests == -1) {
            $this->numTests = count($suite);
            $this->numTestsWidth = strlen((string) $this->numTests);
            $this->maxColumn = 40 - (2 * $this->numTestsWidth);
        }

        parent::startTestSuite($suite);
    }

    protected function writeProgress($progress)
    {
        return parent::writeProgress($this->emojify($progress) . self::SPACER);
    }

    protected function writeProgressWithColor($color, $progress)
    {
        return $this->writeProgress($progress);
    }

    private function projectroot(): string
    {
        return substr($GLOBALS['__PHPUNIT_CONFIGURATION_FILE'], 0, strrpos(
            $GLOBALS['__PHPUNIT_CONFIGURATION_FILE'], '/')
        );
    }

    private function emojifile(string $projectroot): array
    {
        return array_merge(
            $this->parse(self::CONFIG . self::EMOJIFILE),
            $this->parse($projectroot . self::EMOJIFILE)
        );
    }

    private function phpunitxml(): DOMElement
    {
        return Xml::loadFile($GLOBALS['__PHPUNIT_CONFIGURATION_FILE'], false, true, true)->documentElement;
    }

    private function parse(string $filepath): array
    {
        return file_exists($filepath) ? parse_ini_file($filepath, true) : [];
    }

    private function emojiset(DOMElement $phpunitxml): string
    {
        return $phpunitxml->hasAttribute('emojiset') ? $phpunitxml->getAttribute('emojiset') : self::EMOJISET;
    }

    private function emojis(array $emojifile, string $emojiset): array
    {
        return $emojifile[$emojiset] ?? $emojifile[self::EMOJISET];
    }

    private function emojify(string $result): string
    {
        return LitEmoji::encodeUnicode(":{$this->shortcode($result)}:");
    }

    private function shortcode(string $character): string
    {
        return array_values(array_filter($this->emojis, function($emojikey) use ($character) {
            return strrpos(strtoupper($emojikey), $character) === 0;
        }, ARRAY_FILTER_USE_KEY))[0] ?? $this->emojis['pass'];
    }
}
