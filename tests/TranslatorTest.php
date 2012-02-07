<?php
namespace belanur\localization\tests;
use belanur\localization\Translator;

class TranslatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \belanur\localization\LanguageInterface
     */
    protected $_language;

    /**
     * @var \belanur\localization\CountryInterface
     */
    protected $_country;

    /**
     * @var \belanur\localization\Translator
     */
    protected $_translator;

    /**
     *
     */
    public function setUp()
    {
        $this->_language = $this->getMockBuilder(
            'belanur\localization\LanguageInterface'
        )->getMock();

        $this->_country = $this->getMockBuilder(
            'belanur\localization\CountryInterface'
        )->getMock();

        $this->_translator = new Translator($this->_country, $this->_language);
    }

    /**
     * @testdox getText() returns localized string
     */
    public function testGetTextReturnsLocalizedString()
    {
        $localizedString = 'bar';

        $this->_language->expects($this->once())
            ->method('getText')
            ->will($this->returnValue($localizedString));

        $actualString = $this->_translator->getText('foo');
        $this->assertEquals($localizedString, $actualString);
    }

    /**
     * @dataProvider numberProvider()
     * @testdox getText() returns correctly formatted numbers
     *
     * @param string $country
     * @param string $language
     * @param float $number
     * @param string $expectedString
     */
    public function testGetTextReturnsCorrectlyFormattedNumbers($country, $language, $number, $expectedString)
    {
        $this->_country->expects($this->once())
            ->method('getCountryCode')
            ->will($this->returnValue($country));

        $this->_language->expects($this->once())
            ->method('getLanguageCode')
            ->will($this->returnValue($language));

        $this->_language->expects($this->once())
            ->method('getText')
            ->will($this->returnValue('{0, number}'));

        $actualString = $this->_translator->getText('foo', array($number));
        $this->assertEquals($expectedString, $actualString);
    }

    /**
     * @static
     * @return array
     */
    public static function numberProvider()
    {
        return array(
            array('US','en', 9999.99, '9,999.99'),
            array('DE','de', 9999.99, '9.999,99')
        );
    }

}