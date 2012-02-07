<?php
namespace belanur\localization;

require __DIR__ . '/../src/autoload.php';

$countryFactory = new CountryFactory();
$country = $countryFactory->getInstanceFor('US');

$languageFactory = new LanguageFactory();
$language = $languageFactory->getInstanceFor($country->getDefaultLanguage());

$translator = new Translator($country, $language);

echo $translator->getText('WELCOME', array('john')) . "\n";
echo $translator->getText('FOO') . "\n";
echo $translator->getText('PRICE', array(9999.99)) . "\n";
