<?php

interface PrinterInterface {
    public function printDocument($document);
}

interface ScannerInterface {
    public function scanDocument();
}

interface MultiFunctionDeviceInterface extends PrinterInterface, ScannerInterface {
    public function faxDocument($document);
}

class MultiFunctionPrinter implements MultiFunctionDeviceInterface {
    public function printDocument($document) {
        // Implementation for printing the document
    }

    public function scanDocument() {
        // Implementation for scanning the document
    }

    public function faxDocument($document) {
        // Implementation for faxing the document
    }
}

class SimplePrinter implements PrinterInterface {
    public function printDocument($document) {
        // Implementation for printing the document
    }
}

class SimpleScanner implements ScannerInterface {
    public function scanDocument() {
        // Implementation for scanning the document
    }
}