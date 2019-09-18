<?php

namespace Netzweber\Csvfinisher\Domain\Finishers;

class CsvGeneratorFinisher extends AbstractFinisher
{
    /**
     * Dies sind die Optionen die wir später haben wollen.
     *
     * @var array
     */
    protected $defaultOptions = [
        'apiKey' => '',
        'email' => ''
    ];

    /**
     * Hier kommt unsere schöne Logik hin.
     */
    protected function executeInternal()
    {
        // liefert alle formular werte
        $this->finisherContext->getFormValues();
        // holt die Option apikey, die wir später definieren
        $this->parseOption('apiKey');

        // die exakte implementierung zeige ich hier nicht
        // die wird ehh je nach anforderung unterschiedlich sein
    }
}

