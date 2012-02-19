<?php
namespace belanur\localization\tests;
use belanur\localization\MessageFormatter;

class MessageFormatterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider localeStringProvider
     *
     * @param string $locale
     * @param string $expectedString
     */
    public function testFormattingIsProxiedCorrectly($locale, $expectedString)
    {
        $formatter = new MessageFormatter($locale);
        $actualString = $formatter->format('{0,number}', array(1234.99));
        $this->assertEquals($expectedString, $actualString);
    }

    public static function localeStringProvider()
    {
        return array(
            array('de-DE', '1.234,99'),
            array('en-EN', '1,234.99')
        );
    }
}