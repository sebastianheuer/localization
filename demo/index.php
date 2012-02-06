<?php
namespace belanur\localization;

require __DIR__ . '/../src/autoload.php';

$factory = new LocalizationFactory();
$localization = $factory->getInstanceFor(UnitedStates::DEFAULT_LANG);

$countryFactory = new CountryFactory($localization);
$country = $countryFactory->getInstanceFor('US');

$translator = new Translator($country);

echo $translator->getText('WELCOME', array('john')) . "\n";
echo $translator->getText('FOO') . "\n";
echo $translator->getText('PRICE', array(9999.99)) . "\n";
