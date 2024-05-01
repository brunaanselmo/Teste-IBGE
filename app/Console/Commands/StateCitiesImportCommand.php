<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StateCitiesImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ibge:import-from-state';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa todos os municípios de um determinado estado.';

    /**
     * 1- Criar comunicação com a API do IBGE
     * 2- Criar um comando artisan para importar as cidades do seu estado
     * 3- Salvar as cidades no BD
     */
    public function handle()
    {

        $state = $this->choice(
            question: 'Insira a sigla do estado que você deseja importar os municípios',
            choices: $this->getStates()
        );
        return 0;
    }

    private function getStates() : array
    {
        $states = [
            [
                "nome" => "Acre",
                "sigla" => "AC"
            ],
            [
                "nome" => "Alagoas",
                "sigla" => "AL"
            ],
            [
                "nome" => "Amapá",
                "sigla" => "AP"
            ],
            [
                "nome" => "Amazonas",
                "sigla" => "AM"
            ],
            [
                "nome" => "Bahia",
                "sigla" => "BA"
            ],
            [
                "nome" => "Ceará",
                "sigla" => "CE"
            ],
            [
                "nome" => "Distrito Federal",
                "sigla" => "DF"
            ],
            [
                "nome" => "Espírito Santo",
                "sigla" => "ES"
            ],
            [
                "nome" => "Goiás",
                "sigla" => "GO"
            ],
            [
                "nome" => "Maranhão",
                "sigla" => "MA"
            ],
            [
                "nome" => "Mato Grosso",
                "sigla" => "MT"
            ],
            [
                "nome" => "Mato Grosso do Sul",
                "sigla" => "MS"
            ],
            [
                "nome" => "Minas Gerais",
                "sigla" => "MG"
            ],
            [
                "nome" => "Pará",
                "sigla" => "PA"
            ],
            [
                "nome" => "Paraíba",
                "sigla" => "PB"
            ],
            [
                "nome" => "Paraná",
                "sigla" => "PR"
            ],
            [
                "nome" => "Pernambuco",
                "sigla" => "PE"
            ],
            [
                "nome" => "Piauí",
                "sigla" => "PI"
            ],
            [
                "nome" => "Rio de Janeiro",
                "sigla" => "RJ"
            ],
            [
                "nome" => "Rio Grande do Norte",
                "sigla" => "RN"
            ],
            [
                "nome" => "Rio Grande do Sul",
                "sigla" => "RS"
            ],
            [
                "nome" => "Rondônia",
                "sigla" => "RO"
            ],
            [
                "nome" => "Roraima",
                "sigla" => "RR"
            ],
            [
                "nome" => "Santa Catarina",
                "sigla" => "SC"
            ],
            [
                "nome" => "São Paulo",
                "sigla" => "SP"
            ],
            [
                "nome" => "Sergipe",
                "sigla" => "SE"
            ],
            [
                "nome" => "Tocantins",
                "sigla" => "TO"
            ]
        ];

        return collect($states)
            ->map(fn ($state) => $state['sigla'] . '-' . $state['nome'])
            ->toArray();
    }
}
