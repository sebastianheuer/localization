<?php
namespace belanur\localization;

if (!extension_loaded('intl')) {
    throw new \Exception('intl extension is not installed!');
}

require __DIR__ . '/../src/autoload.php';

$messageFormatter = new MessageFormatter('en-EN');

$languageFactory = new LanguageFactory($messageFormatter);
$language = $languageFactory->getInstanceFor('en');

echo $language->getWelcomeMessage('john'). "\n";
echo $language->getPriceInformationMessage('1431', 59.99) . "\n";
