<?php
class SensorController {
    private $sensors = array();

    public function generateRandomValueForSensor($sensorId) {
        // Simulación de generación de valor aleatorio para el sensor
        $randomValue = rand(10, 30);
        $this->sensors[$sensorId] = $randomValue;
    }

    public function getSensorValue($sensorId) {
        return isset($this->sensors[$sensorId]) ? $this->sensors[$sensorId] : null;
    }

    public function evaluateFormulaForSensor($sensorId, $formula) {
        $result = null;
        $sensorValue = $this->getSensorValue($sensorId);

        // Reemplazar "sensor" con el valor del sensor
        $formula = str_replace("sensor", $sensorValue, $formula);

        // Evaluar la fórmula
        eval("\$result = $formula;");

        return $result;
    }
}
?>
