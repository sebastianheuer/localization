<?php
namespace belanur\localization\tests;
use belanur\localization\Translator;

class TranslatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \belanur\localization\LocalizationInterface
     */
    protected $_localization;

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
        $this->_localization = $this->getMockBuilder(
            'belanur\localization\LocalizationInterface'
        )->getMock();

        $this->_country = $this->getMockBuilder(
            'belanur\localization\CountryInterface'
        )->getMock();

        $this->_country->expects($this->any())
            ->method('getLocalization')
            ->will($this->returnValue($this->_localization));

        $this->_translator = new Translator($this->_country);
    }

    /**
     * @testdox getText() returns localized string
     */
    public function testGetTextReturnsLocalizedString()
    {
        $localizedString = 'bar';

        $this->_localization->expects($this->once())
            ->method('getText')
            ->will($this->returnValue($localizedString));

        $actualString = $this->_translator->getText('foo');
        $this->assertEquals($localizedString, $actualString);
    }

    /**
     * @dataProvider numberProvider()
     * @testdox getText() returns correctly formatted numbers
     *
     * @param string $locale
     * @param float $number
     * @param string $expectedString
     */
    public function testGetTextReturnsCorrectlyFormattedNumbers($locale, $number, $expectedString)
    {
        $this->_country->expects($this->once())
            ->method('getLocale')
            ->will($this->returnValue($locale));

        $this->_localization->expects($this->once())
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
            array('en-US', 9999.99, '9,999.99'),
            array('de-DE', 9999.99, '9.999,99')
        );
    }

}