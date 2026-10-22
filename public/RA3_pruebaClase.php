<?php
const MAYUSCULAS = 1;
const MINUSCULAS = 0;

class Ciclo
{
    public const GRADO_MEDIO    = 'Medio';
    public const GRADO_SUPERIOR = 'Superior';

 	public function __construct(
        public string $codCiclo,
        public string $nombre,
        public string $grado,
    ) {
    }
    public function titulacion(): string
    {
        return $this->grado === self::GRADO_SUPERIOR ? 'Técnico Superior' : 'Técnico';
    }

    public function getNombre($mayusculas = MINUSCULAS): string
    {
        if ($mayusculas == MAYUSCULAS) {
        return strtoupper($this->nombre);
        } else {
            return $this->nombre;
        }
    }
}

$daw = new Ciclo('DAW', 'Desarrollo de Aplicaciones Web', Ciclo::GRADO_SUPERIOR);
echo "El ciclo " . $daw->getNombre(MAYUSCULAS) . " tiene la titulación de " . $daw->titulacion() . "\n";
